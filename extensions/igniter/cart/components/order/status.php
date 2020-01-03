<!-- <div class="label label-light mb-3"> -->
<div class="table-responsive recentOrder">
    <table class='table table-bordered'>
        <tbody>
            <tr>
                <td>
                    <span class="h6">
                        <i class="fa fa-clock"></i>&nbsp;
                        <b><?= $order->order_date->setTimeFromTimeString($order->order_time)->isoFormat($orderDateTimeFormat); ?></b>
                    </span>
                </td>
                <td>
                    <h5><?= lang('igniter.cart::default.checkout.text_order_no') . $order->order_id; ?></h5>
                </td>

                <?php if ($order->status) { ?>

                    <td>
                        <h3 style="color: <?= $order->status->status_color; ?>;"><?= $order->status->status_name; ?></h3>
                    </td>
                    <td>
                        <p class="lead"><b><?= $order->status->status_comment; ?></b></p>
                    </td>

                <?php } else { ?>

                    <td>
                        <h3>--</h3>
                    </td>

                <?php } ?>

                <!--p class="mb-0"><?= lang('igniter.cart::default.checkout.text_success_message'); ?></p-->


                <!-- <td>
                    <?php if (!$hideReorderBtn) { ?>
                        <button class="btn btn-primary re-order" data-request="<?= $__SELF__ . '::onReOrder'; ?>" data-request-data="orderId: <?= $order->order_id; ?>" data-attach-loading><?= lang('igniter.cart::default.orders.button_reorder'); ?></button>
                    <?php } ?>
                </td> -->
            </tr>
        </tbody>
    </table>
</div>