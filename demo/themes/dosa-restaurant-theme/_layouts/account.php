---
description: Account layout

'[session]':
    security: customer
    redirectPage: account/login

'[account]':

'[pageNav]':
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?> inner_pages">
    <div id="cookingLoader" style="display:none">
        <!--h1 class="loaderHq">Cooking in progress..</h1 -->
        <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div id="area">
                <div id="sides">
                    <div id="pan"></div>
                    <div id="handle"></div>
                </div>
                <div id="pancake">
                    <div id="pastry"></div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <?= partial('nav/menu_inner'); ?>
    </header>

    <main role="main">
        <div id="notification">
            <?= partial('flash'); ?>
        </div>

        <div id="page-wrapper">
            <?= partial('breadcrumb'); ?>

            <?php if (isset($this->page->heading)) { ?>
                <?= partial('heading', ['heading' => $this->page->heading]); ?>
            <?php } ?>

            <?= page(); ?>
        </div>
    </main>

    <footer class="footer pt-4">
        <div class="footer-bottom">
            <?= partial('footer'); ?>
        </div>
    </footer>
    <div id="notification">
        <?= partial('flash'); ?>
    </div>
    <?= partial('scripts'); ?>
</body>
</html>