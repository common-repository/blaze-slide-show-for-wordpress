=== Blaze Slideshow ===
Contributors: xml / swf
Author URI: http://vm.xmlswf.com/wordpress-plugins/blaze-slide-show
Tags: slideshow, wordpress slider, wp slider, free slideshow, free image slider
Requires at least: 2.5
Tested up to: 3.4.1
Stable tag: trunk

Blaze SlideShow is easy to use slideshow plugin in your wordpress posts. Just install it, add categories, upload images add short code [blaze] in your posts, the slider will be shown.

== Description ==

Blaze SlideShow is easy to use slideshow plugin in your wordpress posts. Just install it, add categories, upload images add short code [blaze] in your posts, the slider will be shown.

**Features**

* Highly customizable
* Random slides display
* Customizable border color
* Customizable tool-tip color
* Resizable
* Customizable Border radius
* Customizable image radius
* Customizable background fill type: gradient or plain
* Customizable gradient start and end colors
* Customizable background alpha
* Show description text on mouse over / always
* Customizable image description background color
* More than 15 types of image transitions
* 7 types of text effects
* Adjustable description and Bar positions: top / bottom
* Customizable pre-loader color 

For a working demo, visit http://wpslideshow.com/blaze-slideshow

Installation Video: http://youtu.be/rp78cra5noA

== Installation ==

Installtion video: http://youtu.be/rp78cra5noA


1. Install automatically through the `Plugins`, `Add New` menu in WordPress, or upload the `blaze-slide-show-for-wordpress` folder to the `/wp-content/plugins/` directory. 

2. Click on "Activate Plugin" to Activate the plugin or Activate the plugin by click on `Plugins` menu and click on activate link below plugin name.

3. You can find "setings" link  under "Blaze" on left side menu to configure the Options. 

= short codes =
* <code>[blaze]</code> - Use this short code in the content / post to display all images under all categories which are not disabled.

* <code>[blaze cats=2,3]</code> - Use this short code in the content / post to display all images under the categories with ID's 2,3.

* <code>[blaze imgs=1,2,3]</code> - Use this short code in the content / post to display images which has ID's 1,2,3.


* <code><?php echo do_shortcode('[blaze]');?></code> - Use this short code in the template (php file) to display all images under all categories which are not disabled.

* <code><?php echo do_shortcode('[blaze cats=2,3]');?></code> - Use this short code in the template (php file) to display all images under the categories with ID's 2,3.

* <code><?php echo do_shortcode('[blaze imgs=1,2,3]');?></code> - Use this short code in the template (php file) to display images which has ID's 1,2,3.



*. Still if you have problems in using this plugin please open a support ticket at http://support.xmlswf.com



== Screenshots ==

1. screenshot-1.jpg - Slideshow front end. 

2. screenshot-2.gif - Add new album / category.

3. screenshot-3.gif - Edit image.

4. screenshot-4.gif - bulk upload.

5. screenshot-5.gif - edit album / category.

6. screenshot-6.gif - short code to be placed in the content.


== Changelog ==

= 1.3 =
* Added Display Random Slides in the slideshow
* Fixed navigation menu display bug.
* Fixed for WP 3.2.1

= 1.4 =
* Moved wmode and image link module properties into main settings
* Slideshow Demo url is changed

= 2.0 =
* This version is completely differnt bult to support categories / albums and multiple image uploading.
* It is not possible to upgrade from old version to new versoin. you need to uninstall the old one and install the new slideshow.

= 2.1 =
Fixed image effects

= 2.2 =
Fixed security issues. Those who installed 2.1 or 2.0, please upgrade to 2.2.

= 2.4 =
Where ever you place the short code, there only the slider shows. Previously it use to show on top of content.

= 2.6 =
Fixed security issues. 
