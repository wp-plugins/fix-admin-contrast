=== Fix Admin Contrast ===
Contributors: miqrogroove
Tags: admin, contrast, input, inputs, field, fields, theme, iPad
Requires at least: 2.7
Tested up to: 3.5
Stable tag: 1.4.1

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

1. This is a comparison of the Categories page with the plugin enabled (top) and disabled (bottom).

== Changelog ==

= 1.5 =
* Updated ...
* Fixed contrast on the login page for WordPress 3.1+

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
