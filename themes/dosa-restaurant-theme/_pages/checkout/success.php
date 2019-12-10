---
title: main::lang.checkout.success.title
layout: default
permalink: /checkout/success/:hash?

'[orderPage]':
    hideReorderBtn: 1

'[localReview]':
---

<style>
	.order__poage{
		background:#fff;
		padding: 20px;
		box-shadow: 0 14px 89px 0 rgba(0, 0, 0, 0.09);
	}
	.order__poage .label-light{
		background:#EFA52C;
		padding: 6px 10px;
		display: inline-block;
	}
</style>

<div class="container">
    <div class="row py-4">
        <div class="col-sm-9 m-auto order__poage">
            <?= component('orderPage'); ?>
        </div>
    </div>
</div>