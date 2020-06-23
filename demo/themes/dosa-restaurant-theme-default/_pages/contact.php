---
title: main::lang.contact.title
layout: default
permalink: /contact

'[contact]':
---
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card mb-3">
                <?php if ($contactLocation = $contact->location) { ?>
                    <div class="card-body">
                        <h1 class="h3 card-title"><?= $contactLocation->getName(); ?></h1>
                        <div class="row contact-info mb-2">
                            <div class="col-1"></div>
                            <div class="col"><?= format_address($contactLocation->getAddress()); ?></div>
                        </div> 
                        <div class="row contact-info mb-2">
                            <div class="col-1"></div>
                            <div class="col"><a href="mailto:dosarestaurant@gmail.com" target="_top">dosarestaurant@gmail.com</a></div>
                        </div> 
                        <div class="row contact-info">
                            <div class="col-1"><i class="fa fa-phone"></i></div>
                            <div class="col">020-6164838</div>
                        </div>
                        <div class="row contact-info">
                            <div class="col-1"><i class="fa fa-mobile"></i></div>
                            <div class="col"><?= $contactLocation->getTelephone(); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="contact-title mb-3"><?= lang('igniter.frontend::default.contact.text_summary'); ?></h4>
                    <?= component('contact'); ?>
                </div>
            </div>
        </div>
    </div>
</div>