<meta name="description" content="<?= setting('meta_description') ?>">
<meta name="keywords" content="<?= setting('meta_keywords') ?>">
<?= get_metas(); ?>
<?php if (trim($favicon = $this->theme->favicon, '/')) { ?>
    <link href="<?= uploads_url($favicon); ?>" rel="shortcut icon" type="image/ico">
<?php }
else { ?>
    <?= get_favicon(); ?>
<?php } ?>
<title><?= sprintf(lang(get_title()), setting('site_name')); ?></title>
<!--title><?= sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')); ?></title-->
<?= get_style_tags(); ?>
<?= '<link rel="stylesheet" type="text/css" href="'.theme_url().'/tastyigniter-orange/assets/css/app.css"'.'>'; ?>
<?= '<link rel="stylesheet" type="text/css" href="'.assets_url().'/vd-theme/css/animate.css"'.'>'; ?>
<?= '<link rel="stylesheet" type="text/css" href="'.assets_url().'/vd-theme/css/bootstrap.css"'.'>'; ?>
<?= '<link rel="stylesheet" type="text/css" href="'.assets_url().'/vd-theme/css/iconeffects.css"'.'>'; ?>
<?= '<link rel="stylesheet" type="text/css" href="'.assets_url().'/vd-theme/css/owl.carousel.css"'.'>'; ?>
<?= '<link rel="stylesheet" type="text/css" href="'.assets_url().'/vd-theme/css/swipebox.css"'.'>'; ?>

<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">



<?php if (!empty($this->theme->custom_css)) { ?>
    <?= '<link type="text/css" id="custom-css">'.$this->theme->custom_css.'</link>' ?>
<?php } ?>