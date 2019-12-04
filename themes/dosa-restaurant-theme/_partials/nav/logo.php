<!--logo-->
<div class="logo">
<a href="<?= page_url('home'); ?>">
    <?php if ($this->theme->logo_image) { ?>
        <img
            class="img-logo" style="height:80px"
            alt="<?= setting('site_name'); ?>"
            src="<?= uploads_url($this->theme->logo_image) ?>"
        >
    <?php } else if ($this->theme->logo_text) { ?>
        <h1><span><?= $this->theme->logo_text; ?></span></h1>
    <?php } else { ?>
        <img
            class="img-logo"
            alt="<?= setting('site_name'); ?>"
            src="<?= uploads_url(setting('site_logo')) ?>"
        >
    <?php } ?>
</a>
  <!-- <p>The Real taste</p> -->
</div>
<!--//logo-->