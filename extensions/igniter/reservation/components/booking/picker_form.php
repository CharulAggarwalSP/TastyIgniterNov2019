<?= form_open($__SELF__->getFormAction(),
    [
        'id' => 'picker-form',
        'role' => 'form',
        'method' => 'GET',
    ]
); ?>


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
	@media(min-width:768px){ 
	.center-block:after{
			content: "";
			background: url('<?php echo assets_url()."/media/uploads/dosa_logo.png" ?>') no-repeat;
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

<input type="hidden" name="picker_form" value="1">

<div class="form-row form-row-table">

    <!-- <div class="col-sm-4 mb-3">
        <label class="sr-only" for="location">
            <?= lang('igniter.reservation::default.label_location'); ?>
        </label>
        <select
            name="location"
            id="location"
            class="form-control"
        >
            <?php foreach ($__SELF__->getLocations() as $key => $value) { ?>
                <option
                    value="<?= $key; ?>"
                    <?= set_select('location', $key); ?>
                ><?= e($value); ?></option>
            <?php } ?>
        </select>
    </div> -->
    <input type="hidden" name="location" value="1"> 
    <div class="col-sm-2 mb-3">
        <label class="sr-only" for="noOfGuests">
            <?= lang('igniter.reservation::default.label_guest_num'); ?>
        </label>
        <select
            name="guest"
            id="noOfGuests"
            class="form-control"
        >
            <?php foreach ($__SELF__->getGuestSizeOptions() as $key => $value) { ?>
                <option
                    value="<?= $key; ?>"
                    <?= set_select('guest', $key); ?>
                ><?= e($value); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-3 col-lg-2 mb-3">
        <label class="sr-only" for="date">
            <?= lang('igniter.reservation::default.label_date'); ?>
        </label>
        <select
            name="date"
            id="date"
            class="form-control"
        >
            <?php foreach ($__SELF__->getDatePickerOptions() as $date) { ?>
                <option
                    value="<?= $date->format('Y-m-d'); ?>"
                    <?= set_select('date', $date->format('Y-m-d')); ?>
                ><?= $date->isoFormat($bookingDateFormat); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-2 mb-3">
        <label class="sr-only" for="time">
            <?= lang('igniter.reservation::default.label_time'); ?>
        </label>
        <select
            name="time"
            id="time"
            class="form-control"
        >
            <?php foreach ($__SELF__->getTimePickerOptions() as $key => $value) { ?>
                <option
                    value="<?= $key; ?>"
                    <?= set_select('time', $key); ?>
                ><?= e($value) ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-2 mb-3">
        <button style="height:100%;<style></style>"
            type="submit"
            class="btn btn-primary btn-block"
        ><?= lang('igniter.reservation::default.button_find_table'); ?></button>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <?= form_error('location', '<span class="help-block text-danger">', '</span>'); ?>
        <?= form_error('guest', '<span class="help-block text-danger">', '</span>'); ?>
        <?= form_error('date', '<span class="help-block text-danger">', '</span>'); ?>
        <?= form_error('time', '<span class="help-block text-danger">', '</span>'); ?>
    </div>
</div>

<?= form_close(); ?>
