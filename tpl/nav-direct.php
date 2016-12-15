<?php
    if (!defined('DOKU_INC')) die();
?>

        <div id="dokuwiki_direct" class="nav-direct no-print">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <p>
                            <span class="sr-out"><?php echo tpl_getLang('direct_prefix'); ?>: </span>
                            <span class="skip">
                                <a rel="nofollow" href="#content"><?php echo tpl_getLang('direct_content_main'); ?></a><span class="sr-out"> /</span>
                                <a rel="nofollow" href="#dokuwiki__usertools"><?php echo $lang['user_tools']; ?></a><span class="sr-out"> /</span>
                                <a rel="nofollow" href="#nav-main"><?php echo tpl_getLang('direct_menu_main');  ?></a>
                            </span>
                        </p>

                        <hr class="structure" />

                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-direct -->
