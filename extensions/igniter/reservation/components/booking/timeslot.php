<p>
    <?= sprintf(lang('igniter.reservation::default.text_time_msg'), $longDateTime, $guestSize); ?>
</p>

<?php if (count($timeSlots = $__SELF__->getTimeSlots())) { ?>
<div class="time_slot">
    <?php foreach ($timeSlots as $key => $slot) { ?>
		
	   <a
            href="<?= !$slot->fullyBooked ? $slot->actionUrl : '' ?>"
            class="timeslot btn btn-primary d-block d-sm-inline-block<?= $slot->fullyBooked ? ' disabled' : '' ?>"
            data-control="timeslot"
            data-location="<?= $bookingLocation->location_id ?>"
            data-datetime="<?= $slot->rawTime ?>"
        ><?= $slot->time; ?></a>
    <?php } ?>
<?php } else { ?>
</div>
    <?= lang('igniter.reservation::default.text_no_time_slot'); ?>
<?php } ?>

<div class="form-row">
    <div class="col">
        <?= form_error('sdateTime', '<span class="help-block text-danger">', '</span>'); ?>
    </div>
</div>
<style>
	.center-block{
		border: 0;
		box-shadow: 10px 0 50px 0 
		rgba(18, 25, 33, 0.1);
		border-radius: 10px;
		background:
		#fff;
		position:relative
	}
	.time_slot{
		display:flex;
	}
	.time_slot a{
		flex:1
	}
	@media(min-width:768px){ 
	.center-block:after{
			content: "";
			background: url('https://demo.softprodigyphp.in/RestaurantDosa/assets/media/uploads/Dosa%20logo%202019.png') no-repeat;
			background-size: auto;
			position: absolute;
			top: 16px;
			right: 0;
			width: 140px;
			height: 100px;
			background-size: contain;
			padding: 30px;
			right: 40px;
		}
	}
	body {
		background:#f2f2f2
	}
	.form-row-table{
		display:flex;
		flex-wrap:wrap;
	}
	.form-row-table [class*="col"]{
		flex:1;
		max-width: 100%;
	}
	.center-block h1{
		font-weight: bold;
		margin-bottom: 15px;
	}
	.center-block .card.mb-1 .card-body{
		padding-top: 0;
		padding-bottom: 0;
		margin-top: 30px; 
	}
	#page-wrapper{
		padding: 60px 0;
	}
	@media(max-width:767px){
		.form-row-table [class*="col"] {
			flex: 0 0 50%;
			max-width: 100%;
		}
		.center-block{
			max-width: 95%;
		}
	}
	
</style>