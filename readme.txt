=== Chiron ===
Contributors: benjamin.birkenhake 
Donate link: 
Tags: rss, news, feedreader, networking, social network
Requires at least: 4.0.1
Tested up to: 4.7.2
Stable tag: 0.10
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Chiron is a PHP based multi-user, multi-sources, multi-output, multi-cms News-Reader and Cross-Site-Networking Tool. And still beta!

== Description ==
  
**CAUTION**

The Plugin comes with own Database Tables and is currently considered not safe for production. PLEASE currently only use, when you are a Developer, who knows how to fix your Database! Thanks!

**Chiron**

Chiron is the Teacher of Heros and Heroines. It's a PHP based multi-user, multi-sources, multi-output, multi-cms News-Reader and Cross-Site-Networking Tool. It currently provides one-code-base-fits-all Integration for Wordpress. Drupal will follow soon, hopefully. 

Development currently takes place on Github:
https://github.com/palasthotel/chiron    
   
Feel free to contribute, add issues and support requests over there.  

The WordPress Plugin has it's home over there:
https://wordpress.org/plugins/chiron/


**References**

**The Centaur**

Find out more about the mythical Centaur.

* https://en.wikipedia.org/wiki/Chiron


**Simple-Pie**

Chiron makes heavy use of Simple-Pie. Many thanks to all the Contributors over there.

* http://simplepie.org/
* https://github.com/simplepie/simplepie/

**Wordpress**

Chiron was first built to be used within the lovely Wordpress. If you're not familiar with it, go and try it yourself!

* http://wordpress.org/
* http://wordpress.com/

**Drupal**

Chiron will also available for the mighty mighty Drupal. Check it out, if you're looking for some serious CMS-Stuff.

* http://drupal.org/


== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why does it only show yesterdays News? =

That's the Idea. You only need to visit Chiron once a day.
Do something great with the rest of your time!


== Screenshots ==

1. The main personalized Dashboard of Chiron.

== Upgrade Notice ==

We currently don't have an upgrade Notice for you.

== Changelog ==

= 0.10 =

* Replaced msql functions by mysqli functions for php7.
* Fixe Problem with SimplePie

= 0.9.i =
* Removed Warnings regarding Constants, Variables and Array-Indices

= 0.9.h =
* Changed url field to varchar and added unique key in tables item and source

= 0.9g =
* Added even more security and Updated readme.txt

= 0.9f =
* Finalized i8n, improved utf8 and added some more security.

= 0.9e =
* Added Security Fixes and started worling on i18n


= 0.9d =
* Extended readme.txt

= 0.9c = 
* Replaced home_url() by plugins_url();

= 0.9b =
* Added WordPress' own readme.txt


= 0.9a =
* First Release

