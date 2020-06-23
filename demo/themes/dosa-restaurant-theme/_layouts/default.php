---
description: Default layout

'[session]':
    security: all

'[pageNav]':

'[newsletter]': {  }
---
<?
function onInit()
{
}

function onStart()
{
}

function onEnd()
{
}

?>
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?> default_home" >

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
    <?= partial('nav/menu'); ?>

    <main role="main">
        <div id="page-wrapper">
            <?= partial('breadcrumb'); ?>

            <?php if (isset($this->page->heading)) { ?>
                <?= partial('heading', ['heading' => $this->page->heading]); ?>
            <?php } ?>            
            <?= page(); ?>
        </div>
    </main>

    <footer class="footer pt-4">
        <div class="footer-top">
            <!--?= component('newsletter'); ?-->
        </div>
        
        <div class="footer-bottom">
            <?= partial('footer'); ?>
        </div>
    </footer>
    <div id="notification">
        <?= partial('flash'); ?>
    </div>
    <!-- ?= partial('eucookiebanner'); ?-->
    <?= partial('scripts'); ?>
</body>
</html>