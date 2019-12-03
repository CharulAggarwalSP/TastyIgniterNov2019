
<style>
    .modal-backdrop.fade.show{
        opacity: 0.7
    }
    #deleteModal.modal.fade.show{
        opacity: 1
    }
</style>
<?php if (count($customerAddresses)) { ?>
    <div class="list-group">
        <?php $index = 0;
        foreach ($customerAddresses as $address) { ?>
            <?php $index++; ?>
            <div
                class="list-group-item <?= ($customer->address_id == $address->address_id) ? 'list-group-item-info' : ''; ?>"
            >
                <address class="text-left"><?= format_address($address); ?></address>
                <span class="">
                    <a
                        class="btn btn-outline-default"
                        href="<?= site_url('account/address', ['addressId' => $address->address_id]); ?>"
                    ><?= lang('igniter.user::default.account.text_edit'); ?></a>
                    <button name="" class="btn btn-outline-danger delete_btn_address" data-id="<?= $address->address_id; ?>"><?= lang('igniter.user::default.account.text_delete'); ?></button>                    
                </span>
            </div>
        <?php } ?>
    </div>

    <div class="pagination-bar text-right">
        <div class="links"><?= $customerAddresses->links(); ?></div>
    </div>
<?php } else { ?>
    <p><?= lang('igniter.user::default.account.text_no_address'); ?></p>
<?php } ?>
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">                  
                    <div class="modal-body">
                        <div class="">
                            <p class="text-center">This cannot be undone! Are you sure you want to do this?</p>
                            <div class="popup-form d-flex justify-content-center">
                                <button class="popup_cancel_delete btn btn-primary">Cancel</button>
                                <span>&nbsp; &nbsp; &nbsp;</span>
                                <form method="POST" accept-charset="utf-8" data-request="<?= $deleteAddressEventHandler; ?>"role="form"> 
                                    <input type="hidden" name="delete_address_id" id="delete_address_id" value=""/>
                                    <button type="submit" class="popup_ok_delete btn btn-primary">OK</button>
                                </form>
                               
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

<div class="buttons">
    <button
        class="btn btn-primary btn-lg"
        data-request="<?= $addAddressEventHandler; ?>"
    ><?= lang('igniter.user::default.account.button_add'); ?></button>
</div>

