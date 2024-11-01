=== WP-DirLs ===
Contributors: paucapo
Donate link: http://capo.cat/donations/
Tags: directory, listing, ls, files
Requires at least: 3.3
Tested up to: 3.3.2
Stable tag: 0.2

List a local directory in a post or page using shortcode.

== Description ==

List a local directory in a post or page using shortcode: [dirls dir="/var/www/dir/" url="http://example.com/dir/"]

Output HTML: &lt;ul class=&quot;dirls&quot;&gt;&lt;li class=&quot;dirls_mimetype dirls_ext_extension&quot;&gt;&lt;a href=&quot;$fileurl&quot;&gt;$file&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;

If $file don't have any extension class="dirls_ext_none".

<a href="http://wordpress.menorcadev.com/plugin/wp-dirls/">Plugin page</a> at <a href="http://wordpress.menorcadev.com/">WordPress Plugins Development #menorcadev</a>.

== Installation ==

= First time installation =
1. Upload the FOLDER 'wp-DirLs' to the /wp-content/plugins/
2. Activate the plugin 'WP-DirLs' through the 'Plugins' menu in admin
3. Go to 'Manage / DirLs' for more instructions

= Upgrade from a previous version =
1. Deactivate 'WP-DirLs' through the 'Plugins' menu in admin
2. Upload the FOLDER 'wp-DirLs' to the /wp-content/plugins/
3. Activate the plugin 'WP-DirLs' through the 'Plugins' menu in admin

<a href="http://wordpress.menorcadev.com/plugin/wp-dirls/">Plugin page</a> at <a href="http://wordpress.menorcadev.com/">WordPress Plugins Development #menorcadev</a>.

== Frequently Asked Questions ==

= Can I list a relative directory? =
Yes, you just need to use a relative directory from your WordPress installation path.
For example:
* WordPress URL: http://example.com/wp/
* WordPress path: /var/www/wp/
* Files URL: http://example.com/files/
* Files path: /var/www/files/
* Shortcode to use: [dirls dir="../files" url="http://example.com/files"]

= Can I list remote directories? =
No, just list a local directory.

= I need more help! =
Visit my <a href="http://wordpress.menorcadev.com/plugin/wp-dirls/">plugin page</a>.

== Changelog ==

Visit my <a href="http://wordpress.menorcadev.com/plugin/wp-dirls/">plugin page</a> for the changelog.



<a href="http://wordpress.menorcadev.com/plugin/wp-dirls/">Plugin page</a> at <a href="http://wordpress.menorcadev.com/">WordPress Plugins Development #menorcadev</a>.


