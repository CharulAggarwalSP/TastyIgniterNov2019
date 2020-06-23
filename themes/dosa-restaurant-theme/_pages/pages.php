---
title: main::lang.pages.title
layout: default
permalink: /pages/:slug

'[sitePage]':
    slug: ':slug'
---
<?
function onEnd()
{
    $this->title = $this['sitePage'] ? $this['sitePage']->title : $this->title;
}
?>
---
<div class="container py-4">
    <div id="heading" class="row">
        <div class="col-md-12">
            <div class="heading-section heading-section-custom">
                <h2 class="tittle wow slideInDown animated"> <?= $sitePage ? $sitePage->title : null; ?></h2>
				<div class="arrows-two wow slideInDown animated" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: slideInDown;"><img src=<?='"' . assets_url();?>/vd-theme/images/border.png" alt="border"></div>
            </div>
        </div> 
    </div>

    <div class="row">
        <!--<div class="col-sm-3">
            <?= partial('pageNav::sidebar'); ?>
        </div>-->

        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <?= component('sitePage'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
