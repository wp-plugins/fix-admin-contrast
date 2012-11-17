=== Fix Admin Contrast ===
Contributors: miqrogroove
Tags: admin, contrast, input, inputs, field, fields, theme, iPad
Requires at least: 2.7
Tested up to: 3.5
Stable tag: 1.3

Improves the visibility of administrative form fields and tables.

== Description ==

Input fields on the WordPress admin screens have been nearly invisible since version 2.7.
After a year of hacking CSS files to work around this problem, Matt suggested I make
a plugin for the "admin_head" hook feature to override core CSS values.  Thus, this plugin was born.

Fix Admin Contrast has been expanded to correct white point issues on iPad and similar displays
where the administrative table colors were indistinguishable from the background color.

== Installation ==

1. Upload the `admin-contrast` directory to your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

This is a zero-configuration plugin.  There are no settings.

Deactivation removes everything except the files you uploaded.  There is no "uninstall" necessary.

== Changelog ==

= 1.4 =
* Expanded purpose, ...
* Fixed contrast on alternating table rows.

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
