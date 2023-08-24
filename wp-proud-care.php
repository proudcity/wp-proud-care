<?php
/**
 * Plugin Name:         ProudCity Care
 * Description:         Adds a menu item to the admin navigation that links to ProudCity Care features.
 * Version:             1.0
 * Author:              ProudCity
 * Author URI:          https://proudcity.com
 * License:             Affero GPL v3

 */

// Add menu item to the top admin bar
function proudcity_care_add_to_admin_bar() {
    global $wp_admin_bar;

    // Add a parent menu item
    $wp_admin_bar->add_menu(
        array(
            'id'    => 'proudcity-care-top-admin-bar',
            'title' => '<i class="fas fa-heart"></i> Care',
            'href'  => admin_url('admin.php?page=proudcity-care-page'), // Link to ProudCity Care page
            'parent' => 'top-secondary' // Place the menu item on the right side
       )
    );

    // Add child menu item under the parent
    $wp_admin_bar->add_menu(
        array(
            'parent' => 'proudcity-care-top-admin-bar',
            'id'     => 'proudcity-care-documentation',
            'title'  => '<i class="fas fa-search"></i> Search help',
            'href'   => 'https://help.proudcity.com/', // Link to ProudCity Help Center main page
            'meta'   => array(
                'target' => '_blank' // Add the target attribute
            )
        )
    );

    // Add child menu item under the parent
    $wp_admin_bar->add_menu(
        array(
            'parent' => 'proudcity-care-top-admin-bar',
            'id'     => 'proudcity-care-help-ticket',
            'title'  => '<i class="fas fa-search"></i> Submit a help ticket',
            'href'   => 'https://help.proudcity.com/support/', // Link to help ticket page
            'meta'   => array(
                'target' => '_blank' // Add the target attribute
            )
        )
    );
}
add_action('admin_bar_menu', 'proudcity_care_add_to_admin_bar', 999);

// Callback function to display content on ProudCity Care page
function proudcity_care_page_content() {
    echo '<div class="wrap">';
    echo '<h1>ProudCity Care</h1>';
    // Add your page content here
    echo '<ul>';
    echo '<li><a href="https://help.proudcity.com/" target="_blank">Search help</a></li>';
    echo '<li><a href="https://help.proudcity.com/support/" target="_blank">Submit a help ticket</a></li>';
    echo '</ul>';
    echo '</div>';
}
