=== Gather Lead Button ===
Contributors: gather
Tags: gather, button
Requires at least: 3.0.1
Tested up to: 3.9
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gather Lead Button available as a Wordpress shortcode plugin.

== Description ==

This plugin allows Gather customers to include the Gather lead button inside
pages, posts and other content within a Wordpress.org site.

== Installation ==

1. Upload `gather-lead-button.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Basic Usage ==

To use the default button, use the shortcode below.
Make sure to replace "MYLOCID" with the location ID provided by the Gather Staff.

```[gather-lead-button locationid="MYLOCID"]```

== Advanced Usage ==

To use your own custom button or link tag, use the shortcode below.

You must specify the ID attribute of the element that will trigger the modal form.
Replace "ELEMENTID" with the ID of the element you are using, and make sure to include
the shortcode after that element on the page.

Finally, make sure to replace "MYLOCID" with the location ID provided by the Gather Staff.

```[gather-lead-button locationid="MYLOCID" trigger="ELEMENTID"]```


== Customer Support ==

If you have any questions or concerns, please contact your Gather customer support representative.


== Changelog ==

= 1.0 =
* Initial release
