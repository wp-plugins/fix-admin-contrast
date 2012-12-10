<?php
/**
 * Plugin Name: Fix Admin Contrast
 *
 * Description: Improves the visibility of administrative form fields and tables.
 *
 * This plugin does not make any permanent changes.
 *
 * Plugin URI: http://www.miqrogroove.com/pro/software/
 * Author URI: http://www.miqrogroove.com/
 *
 * @author: Robert Chapin (miqrogroove)
 * @version: 1.4.2
 * @copyright Copyright © 2010-2012 by Robert Chapin
 * @license GPL
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
/* Plugin Bootup */

if (!function_exists('add_action')) {
    header('HTTP/1.0 403 Forbidden');
    exit("Not allowed to run this file directly.");
}
add_action('admin_init', 'miqro_contrast_hook', 10, 0);
add_action('login_head', 'miqro_contrast_login', 10, 0);


/* Plugin Functions */

/**
 * Hooks one of the following admin output functions based on WP version.
 */
function miqro_contrast_hook() {
    $oldest = 27;
    $newest = 35;

    $wpversion = get_bloginfo('version');
    if (strlen($wpversion) < 3) return;
    $wpversion = min($newest, intval($wpversion[0].$wpversion[2]));
    if ($wpversion < $oldest) return;
    if ($wpversion > 29 and $wpversion < 34) $wpversion = 29;
    $callback = "miqro_fix_admin_contrast_$wpversion";

    add_action('admin_head', $callback, 10, 0);
}

/**
 * Calls my login_head output function based on WP version.
 *
 * @since 1.5
 */
function miqro_contrast_login() {
    $oldest = 31;
    $newest = 31;

    $wpversion = get_bloginfo('version');
    if (strlen($wpversion) < 3) return;
    $wpversion = min($newest, intval($wpversion[0].$wpversion[2]));
    if ($wpversion < $oldest) return;
    $callback = "miqro_fix_login_contrast_$wpversion";

    call_user_func($callback);
}

/**
 * Tested and working on 3.5-RC6.
 * Corrects the styles found in:
 *  wp-admin/css/colors-classic.css
 *  wp-admin/css/colors-fresh.css
 *  wp-admin/css/wp-admin.css
 *  wp-includes/css/buttons.css
 *  wp-includes/css/media-views.css
 */
function miqro_fix_admin_contrast_35() {
?>
<style type="text/css">
textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select,
.widefat {
    border-color: #BBB !important;
}
<?php if ('classic' == get_user_option('admin_color')) { ?>
.postbox div.alt {
    background-color: #DFF1FF;
}
<?php } else { ?>
.postbox div.alt,
.widefat,
.plugins .inactive,
.plugins .inactive th,
.plugins .inactive td,
tr.inactive + tr.plugin-update-tr .plugin-update {
    background-color: #EEE;
}
<?php } ?>
</style>
<?php
}

/**
 * Tested and working on 3.4.
 * Corrects both colors-fresh.css and ie.css.
 */
function miqro_fix_admin_contrast_34() {
?>
<style type="text/css">
* html input,
* html .stuffbox,
* html .stuffbox input,
* html .stuffbox textarea {
    border-color: #BBB;
}
textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="button"],
input[type="submit"],
input[type="reset"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select,
#timestampdiv input,
#namediv input,
.inline-edit-row fieldset input[type="text"],
.inline-edit-row fieldset textarea {
    border-color: #BBB;
}
input.button-primary {
    border-color: #298cba;
}
<?php if ('classic' == get_user_option('admin_color')) { ?>
.postbox div.alt {
    background-color: #DFF1FF;
}
<?php } else { ?>
.postbox div.alt,
.widefat,
.plugins .inactive,
.plugins .inactive th,
.plugins .inactive td,
tr.inactive + tr.plugin-update-tr .plugin-update {
    background-color: #EEE;
}
<?php } ?>
</style>
<?php
}

/**
 * Tested and working on 2.9 through 3.3.
 * Corrects both colors-fresh.css and ie.css.
 */
function miqro_fix_admin_contrast_29() {
?>
<style type="text/css">
#namediv input,
* html input,
* html .widget,
* html .stuffbox,
* html .stuffbox input,
* html .stuffbox textarea,
.widefat,
textarea,
select {
    border-color: #BBB;
}
input[type="text"],
input[type="password"],
input[type="file"],
input[type="button"],
input[type="submit"],
input[type="reset"],
.inline-edit-row fieldset input[type="text"],
.inline-edit-row fieldset textarea {
    border-color: #BBB;
}
input.button-primary {
    border-color: #298cba;
}
</style>
<?php
}

function miqro_fix_admin_contrast_28() {
?>
<style type="text/css">
* html input,
* html .widget,
.widefat,
textarea,
input,
select {
    border-color: #BBB;
}
</style>
<?php
}

function miqro_fix_admin_contrast_27() {
?>
<style type="text/css">
.widefat,
.form-table input,
.form-table textarea,
.search-input,
.form-field input,
.form-field textarea,
.submit {
    border-color: #BBB;
}
</style>
<?php
}

/**
 * Tested and working on 3.1 through 3.5-RC6.
 * Corrects login.css or wp-admin.css.
 */
function miqro_fix_login_contrast_31() {
?>
<style type="text/css">
.login form .input,
.login input[type="text"] {
    border-color: #BBB;
}
</style>
<?php
}
?>
