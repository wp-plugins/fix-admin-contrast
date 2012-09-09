<?php
/**
 * Plugin Name: Fix Admin Contrast
 *
 * Description: Patches WordPress bug #8730 for input border-color contrast.
 *
 * This plugin does not make any permanent changes.
 *
 * Plugin URI: http://blogyul.miqrogroove.com/about/
 * Author URI: http://www.miqrogroove.com/
 *
 * @author: Robert Chapin (miqrogroove)
 * @version: 1.0
 * @copyright Copyright © 2010 by Robert Chapin
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

add_action('admin_init', 'miqro_contrast_hook', 10, 0);


/* Plugin Functions */

/**
 * Hooks one of the following output functions based on WP version.
 */
function miqro_contrast_hook() {
    $wpversion = get_bloginfo('version');
    if (strlen($wpversion) >= 3) {
        $wpversion = intval($wpversion[0].$wpversion[2]);
        if ($wpversion >= 27 and $wpversion <= 29)
            add_action('admin_head', 'miqro_fix_admin_contrast_'.$wpversion, 10, 0);
    }
}

function miqro_fix_admin_contrast_29() {
?>
<style type="text/css">
* html input,
* html .widget,
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
input[type="reset"] {
    border-color: #BBB;
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
?>
