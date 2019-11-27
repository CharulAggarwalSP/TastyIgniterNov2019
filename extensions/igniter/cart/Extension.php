<?php namespace Igniter\Cart;

use Admin\Models\Orders_model;
use Admin\Models\Status_history_model;
use Auth;
use Cart;
use Config;
use Event;
use Igniter\Cart\Models\Cart as CartStore;
use Igniter\Cart\Models\CartSettings;
use Illuminate\Foundation\AliasLoader;
use System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    public function register()
    {
        $this->app->register(\Igniter\Flame\Cart\CartServiceProvider::class);

        AliasLoader::getInstance()->alias('Cart', \Igniter\Flame\Cart\Facades\Cart::class);

        $this->app->singleton('cart', function ($app) {
            Config::set('cart.model', CartStore::class);
            Config::set('cart.conditions', CartSettings::get('conditions'));
            Config::set('cart.abandonedCart', CartSettings::get('abandoned_cart'));

            return $app->make(\Igniter\Flame\Cart\Cart::class);
        });

        $this->app->make(\Illuminate\Contracts\Http\Kernel::class)
                  ->pushMiddleware(\Igniter\Cart\Middleware\CartMiddleware::class);
    }

    public function boot()
    {
        $this->bindCartEvents();
        $this->bindCheckoutEvents();
    }

    public function registerCartConditions()
    {
        return [
            \Igniter\Cart\Conditions\Coupon::class => [
                'name' => 'coupon',
                'label' => 'lang:igniter.cart::default.text_coupon',
                'description' => 'lang:igniter.cart::default.help_coupon_condition',
            ],
            \Igniter\Cart\Conditions\Tax::class => [
                'name' => 'tax',
                'label' => 'lang:igniter.cart::default.text_vat',
                'description' => 'lang:igniter.cart::default.help_tax_condition',
            ],
        ];
    }

    public function registerEventRules()
    {
        return [
            'events' => [
                'admin.order.paymentProcessed' => \Igniter\Cart\EventRules\Events\OrderPlaced::class,
                'igniter.cart.beforeAddOrderStatus' => \Igniter\Cart\EventRules\Events\NewOrderStatus::class,
                'admin.order.assigned' => \Igniter\Cart\EventRules\Events\OrderAssigned::class,
            ],
            'actions' => [],
            'conditions' => [
                \Igniter\Cart\EventRules\Conditions\OrderAttribute::class,
                \Igniter\Cart\EventRules\Conditions\OrderStatusAttribute::class,
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            'Igniter\Cart\Components\CartBox' => [
                'code' => 'cartBox',
                'name' => 'lang:igniter.cart::default.text_component_title',
                'description' => 'lang:igniter.cart::default.text_component_desc',
            ],
            'Igniter\Cart\Components\Checkout' => [
                'code' => 'checkout',
                'name' => 'lang:igniter.cart::default.text_checkout_component_title',
                'description' => 'lang:igniter.cart::default.text_checkout_component_desc',
            ],
            'Igniter\Cart\Components\Orders' => [
                'code' => 'accountOrders',
                'name' => 'lang:igniter.cart::default.orders.component_title',
                'description' => 'lang:igniter.cart::default.orders.component_desc',
            ],
        ];
    }

    public function registerPermissions()
    {
        return [
            'Module.CartModule' => [
                'description' => 'Ability to manage cart module',
                'group' => 'module',
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Cart Settings',
                'description' => 'Manage cart settings.',
                'icon' => 'fa fa-cart-plus',
                'model' => 'Igniter\Cart\Models\CartSettings',
                'permissions' => ['Module.Cart'],
            ],
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'igniter.cart::mail.order' => 'Order confirmation email to customer',
            'igniter.cart::mail.order_alert' => 'New order alert email to admin',
        ];
    }

    public function registerPrintTemplates()
    {
        return [
            'igniter.cart::print.order' => 'Default order print template',
        ];
    }

    public function registerActivityTypes()
    {
        return [
            ActivityTypes\OrderCreated::class,
        ];
    }

    public function registerNotifications()
    {
        return [
            'templates' => [
                'igniter.cart::notification.orderPlaced' => \Igniter\Cart\Notifications\OrderPlaced::class,
                'igniter.cart::notification.orderStatusChanged' => \Igniter\Cart\Notifications\OrderStatusChanged::class,
                'igniter.cart::notification.orderAssigned' => \Igniter\Cart\Notifications\OrderAssigned::class,
            ],
        ];
    }

    protected function bindCartEvents()
    {
        Event::listen('igniter.user.login', function () {
            if (CartSettings::get('abandoned_cart')
                AND Cart::content()->isEmpty()
            ) {
                Cart::restore(Auth::getId());
            }
        });

        Event::listen('igniter.user.logout', function () {
            if (CartSettings::get('destroy_on_logout'))
                Cart::destroy();
        });
    }

    protected function bindCheckoutEvents()
    {
        Event::listen('admin.order.paymentProcessed', function (Orders_model $model) {
            ActivityTypes\OrderCreated::pushActivityLog($model);

            $model->mailSend('igniter.cart::mail.order', 'customer');
            $model->mailSend('igniter.cart::mail.order_alert', 'location');
            $model->mailSend('igniter.cart::mail.order_alert', 'admin');
        });
    }

    protected function bindOrderStatusEvent()
    {
        Event::listen('admin.statusHistory.beforeAddStatus', function ($model, $object, $statusId, $previousStatus) {
            if (!$object instanceof Orders_model)
                return;

            if (Status_history_model::alreadyExists($object, $statusId))
                return;

            Event::fire('igniter.cart.beforeAddOrderStatus', [$model, $object, $statusId, $previousStatus], TRUE);
        });
    }
}