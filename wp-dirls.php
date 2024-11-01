<?php
/*
Plugin Name: WP-DirLs
Plugin URI: http://wordpress.menorcadev.com/plugin/wp-dirls/
Description: List a local directory in a post or page using shortcode: [dirls dir="/var/www/dir/" url="http://example.com/dir/"] - Output HTML: &lt;ul class=&quot;dirls&quot;&gt;&lt;li class=&quot;dirls_extension&quot;&gt;&lt;a href=&quot;$fileurl&quot;&gt;$file&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt; - If $file don't have any extension class="dirls_plain".
Author: Pau Capó
Version: 0.2
Author URI: http://capo.cat/
*/
/*  Copyright 2012  Pau Capó Pons  (email : pau@capo.cat)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!defined('WP_CONTENT_URL')) die('no direct access');

// Shortcode [dirls dir="/var/www/dir/" url="http://example.com/dir/"]
function dirls_shortcode($atts) {
   if (isset($atts['dir']) && isset($atts['url'])) {
      if (substr($atts['dir'], -1) != '/') $atts['dir'] .= '/';
      if (substr($atts['url'], -1) != '/') $atts['url'] .= '/';
      if (is_dir($atts['dir']) && $dh = opendir($atts['dir'])) {
         $html = '<ul class="dirls">';
         while (($file = readdir($dh)) !== false) {
            if (filetype($atts['dir'] . $file) == 'file') {
               $type = @shell_exec('file -i -b "'.$atts['dir'] . $file.'"');
               if (strrpos($file, '.') !== false)
                  $ext = strtolower(substr($file, strrpos($file, '.')+1));
               else
                  $ext = 'plain';
               if ($type == '') {
                  $class = 'dirls_ext_'.$ext;
               } else {
                  $type = substr($type, 0, strrpos($type, '/'));
                  $class = 'dirls_'.$type.' dirls_ext_'.$ext;
               }
               $html .= '<li class="'.$class.'"><a href="'.$atts['url'].$file.'">'.$file.'</a></li>';
            }
         }
         closedir($dh);
         $html .= '</ul>';
         return $html;
      }
   }
}
add_shortcode('dirls', 'dirls_shortcode');



