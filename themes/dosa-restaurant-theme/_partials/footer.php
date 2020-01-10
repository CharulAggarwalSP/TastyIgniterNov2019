<div class="main-footer pb-0">
    <div class="container">
        <div class="row main-footer-row">
            <div class="col-sm-4">
				<div class="footer-links">
					<h6 class="footer-title d-none d-sm-block"> Address</h6>
					<h5 class="mb-1">Dosa North & South Indian Restaurant</h5>
					
					<ul>
						<li>Overtoom 146<br>1054 HS<br>Amsterdam<br>Netherlands</li>
						<li><i class="fa fa-phone" aria-hidden="true" style="color:rgba(255, 255, 255, 0.75)"></i> 020-6164838 </li>
						<li><i class="fa fa-mobile" aria-hidden="true" style="color:rgba(255, 255, 255, 0.75)"></i> 0681936735 </li>
						<li><i class="fa fa-fax" aria-hidden="true" style="color:rgba(255, 255, 255, 0.75)"></i> 020-6895073 </li>
					</ul>
				</div> 
			</div>
            <div class="col-sm-4">
                <div class="footer-links">
                    <h6 class="footer-title d-none d-sm-block"> <?= lang('main::lang.text_my_account'); ?></h6>
                    <ul>
                      <?php if (Auth::isLogged()) { ?>
                        <li><a href="<?= page_url('account/account'); ?>"
                                class="dropdown-item <?= ($this->page->getId() == 'account-account') ? 'active' : ''; ?>"
                            ><?= lang('main::lang.menu_my_account'); ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="javascript:void(0)"
                                data-request="session::onLogout"
                            ><?= lang('main::lang.menu_logout'); ?></a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="<?= site_url('account/login'); ?>">
                                <?= lang('main::lang.menu_login'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('account/register'); ?>">
                                <?= lang('main::lang.menu_register'); ?>
                            </a>
                        </li>
                        <?php } ?>
						<li>
                            <a href="<?= site_url('contact'); ?>">
                                <?= lang('main::lang.menu_contact'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--<div class="col-sm-4">
                <div class="footer-links">
                    <h6 class="footer-title d-none d-sm-block"><?= setting('site_name'); ?></h6>
                    <ul>
                        <?php if (!is_single_location()) { ?>
                              <li>
                                <a href="<?= site_url('locations'); ?>">
                                    <?= lang('main::lang.menu_locations'); ?>
                                </a>
                            </li> 
                        <?php } ?>
                        <li>
                            <a href="<?= site_url('contact'); ?>">
                                <?= lang('main::lang.menu_contact'); ?>
                            </a>
                        </li>
                        <?php //if ($this->theme->hide_admin_link != 1) { ?>
                            <li>
                                <a
                                    target="_blank"
                                    href="<?= admin_url(); ?>"
                                >
                                    <?= lang('main::lang.menu_admin'); ?>
                                </a>
                            </li> 
                        <?php// } ?>
                    </ul>
                </div>
            </div>-->
            <!-- <div class="col-sm-3">
                <div class="footer-links">
                    <h6 class="footer-title d-none d-sm-block"><?= lang('main::lang.text_information'); ?></h6>
                    <ul>
                        <?php if (!empty($footerPageList)) foreach ($footerPageList as $page) { ?>
                            <li>
                                <a
                                    href="<?= page_url('pages', ['slug' => $page->permalink_slug]); ?>"
                                >
                                    <?= $page->name; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div> -->

             <div class="col-sm-4 mt-3 mt-sm-0">
              <div class="footer-links">
                <div class="social-bottom">
                    <h6 class="footer-title"><?= lang('main::lang.text_follow_us'); ?></h6>
                    <?= partial('social_icons', ['socialIcons' => $this->theme->social]); ?>
					<h6 class="footer-title mb-1 pb-1 mt-3">Opening Timings</h6>
					<h5 class="mb-1">All Days ( 15:30-23:00 )</h5>
                </div>
            </div> 
            </div> 
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <hr class="mb-3">
        </div>
    </div>
</div>

<div class="bottom-footer py-2 tex-center" style="text-align:center;">
    <div class="container">
        <div class="row">
            <div class="col p-2">                 
                <?php echo sprintf(lang('main::lang.site_copyright')).' '. date('Y').' '.setting('site_name'); ?>
            </div>
        </div>
    </div>
</div>
