<div class="wrap">
    <!--Plugin Header-->
    <?php include('header.php'); ?>
    <!--Plugin Header-->

    <div class="asap-main-section">
        <?php if (isset($_SESSION['afap_message'])) { ?><p class="asap-message"><?php
            echo $_SESSION['afap_message'];
            unset($_SESSION['afap_message']);
            ?></p><?php } ?>
        <?php
        global $wpdb;
        //include('networks/facebook.php');
        
        
            ?>
            <?php $active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'settings'; ?>
            <div class="asap-main-inner-wrap">
                <ul class="asap-tabs-wrap">
                    <li class="asap-tab <?php if ($active_tab == 'settings') { ?>asap-active-tab<?php } ?>" id="asap-tab-settings"><?php _e('Settings', AFAP_TD); ?></li>
                    <li class="asap-tab <?php if ($active_tab == 'logs') { ?>asap-active-tab<?php } ?>" id="asap-tab-logs"><?php _e('Logs', AFAP_TD); ?></li>
                    <li class="asap-tab <?php if ($active_tab == 'how') { ?>asap-active-tab<?php } ?>" id="asap-tab-how"><?php _e('How To Use', AFAP_TD); ?></li>
                    <li class="asap-tab <?php if ($active_tab == 'about') { ?>asap-active-tab<?php } ?>" id="asap-tab-about"><?php _e('About', AFAP_TD); ?></li>
                </ul>
                <?php
                /**
                 * Accounts Section
                 */
                include_once('tabs/settings.php');

                /**
                 * Logs Section
                 * */
                include('tabs/logs.php');

                /**
                 * How To Use Section
                 */
                include_once('tabs/how-to-use.php');

                /**
                 * About Section
                 */
                include_once('tabs/about.php');
                ?>


            </div>
           
    </div>
</div>