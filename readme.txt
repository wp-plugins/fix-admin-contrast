=== Fix Admin Contrast ===
Contributors: miqrogroove
Tags: admin, contrast, input, inputs, field, fields, theme, iPad
Requires at least: 2.7
Tested up to: 4.3
Stable tag: 1.6

Improves the visibility of administrative form fields and tables.

== Description ==

Input fields on the WordPress admin screens have been nearly invisible since version 2.7.
After a year of hacking CSS files to work around this problem, Matt suggested I make
a plugin to override core CSS values.  Thus, this plugin was born.

Fix Admin Contrast now also corrects white point issues on iPad and similar displays.
Without this plugin, the administrative table colors can look the same as the background color.

== Installation ==

1. Upload the `admin-contrast` directory to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

This is a zero-configuration plugin.  There are no settings.

Deactivation removes everything except the files you uploaded.  There is no "uninstall" necessary.

== Screenshots ==

1. WordPress 4.0 preview, plugin enabled.
2. WordPress 4.0 preview, plugin disabled.
3. The login page, with the plugin enabled (left) and disabled (right).
4. Fix Admin Contrast is still compatible with with older versions down to 2.7.

== Changelog ==

= 1.6 =
* Updated for WordPress 4.2, released 7 April 2015.
* Fixed alternating row colors on the comments page.
* WordPress 4.3 tested 7 September 2015.

= 1.5.5 =
* Updated for WordPress 4.1, released 13 December 2014.
* Fixed contrast in DFW editor.
* Reverted fix for checkboxes, which was resolved during 4.0 betas.

= 1.5.4 =
* Improvements for WordPress 3.8 through 4.0, released 22 August 2014.
* Fixed contrast on checkboxes.
* Fixed editor border in comments quick edit.
* Fixed contrast in theme details messages.

= 1.5.3 =
* Widgets improvement, released 8 April 2014.
* Fixed contrast on the widgets page for WordPress 3.8+.

= 1.5.2 =
* Updated for WordPress 3.8, released 13 December 2013.
* Fixed contrast on help menus.
* Fixed contrast on plugin details modal.

= 1.5.1 =
* Updated for WordPress 3.8, released 12 December 2013.
* Fixed contrast on pending comments.

= 1.5 =
* Updated for WordPress 3.8, released 7 December 2013.
* Revised alternating row colors for compatibility with new admin themes.

= 1.4.3 =
* Updated for WordPress 3.6, released 8 April 2013.
* Fixed contrast on the Theme Customizer for WordPress 3.4+.

= 1.4.2 =
* Login improvement, released 10 December 2012.
* Fixed contrast on the login page for WordPress 3.1+
* Made the blue button bugfix effective for WordPress 2.9+ instead of only 3.4.

= 1.4.1 =
* Updated for WordPress 3.5, released 30 November 2012.
* Fixed media modal contrast, broken by changes in 3.5-RC2.
* Adjusted to avoid targeting 3.5 with bloated footer code.

= 1.4 =
* Updated for WordPress 3.5, released 23 November 2012.
* Fixed contrast on the caption input for library image editing.
* Fixed contrast on the new media modal screens.
* Expanded purpose: Identified alternating row colors as needing more contrast.
* Fixed contrast on alternating table rows for WordPress 3.4+

= 1.3 =
* Minor fix, released 13 November 2012.
* Blue submit buttons will have WP default colors.

= 1.2 =
* Updated for WordPress 3.4, released 9 September 2012.
* Fixed contrast on the Quick Edit features.

= 1.1 =
* Updated for WordPress 3.0, released 17 June 2010.
* Fixed contrast on the Add New Link page.

= 1.0 =
* First version, released 15 January 2010.
