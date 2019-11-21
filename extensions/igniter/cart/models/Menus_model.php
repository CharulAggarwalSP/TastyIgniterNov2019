<?php namespace Igniter\Cart\Models;

use Admin\Models\Menus_model as BaseMenus_model;
use Igniter\Flame\Cart\Contracts\Buyable;

class Menus_model extends BaseMenus_model implements Buyable
{
    public $with = ['special', 'mealtime', 'menu_options', 'menu_options.option'];

    public function getMorphClass()
    {
        return 'menus';
    }

    public function isAvailable()
    {
        if (!$mealtime = $this->mealtime)
            return TRUE;

        if (!$mealtime->mealtime_status)
            return TRUE;

        return $mealtime->isAvailableNow();
    }

    public function iSpecial()
    {
        if (!$special = $this->special)
            return FALSE;

        return $special->active();
    }

    public function checkMinQuantity($quantity = 0)
    {
        return $quantity >= $this->minimum_qty;
    }

    public function outOfStock()
    {
        return $this->stock_qty < 0;
    }

    public function checkStockLevel($quantity = 0)
    {
        if ($this->stock_qty == 0)
            return TRUE;

        return $this->stock_qty > $quantity;
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->getKey();
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableName($options = null)
    {
        return $this->menu_name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        $price = $this->iSpecial()
            ? $this->special->getMenuPrice($this->menu_price) : $this->menu_price;

        if (is_array($options)) {
            $price += collect($options)->sum('price');
        }

        return $price;
    }
}