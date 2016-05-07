<?php
/**
 * @package Betheme
 * @author Muffin group 
 * @link http://muffingroup.com
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$skin = cs_get_option('skin');  
$primary_color = cs_get_option("color_primary_$skin");
$link_hover_color = cs_get_option("color_link_hover_$skin");
$border_radius = cs_get_option('border-shape');
$border_radius_custom = cs_get_option('border-shape-custom');


$topbar_bg = cs_get_option('color_topbar_bg');
$topbar_color = cs_get_option('color_topbar_color');
$topbar_border = cs_get_option('color-topbar-border');

$topbar_menu_bg = cs_get_option('color-topbar-menu-bg');
$topbar_menu_bg_hover = cs_get_option('color-topbar-menu-bg-hover');
$topbar_menu_border = cs_get_option('color-topbar-menu-border');
$topbar_menu_text_color = cs_get_option('color-topbar-menu-text-color');
?>
 
a {
	color: <?= $primary_color ?>;
}

a:hover {
	color: <?= $link_hover_color ?>; 
}

a:focus { 
	color: <?= $link_hover_color ?>;
}
 
a:active {
	color: <?= $link_hover_color ?>;
}

html .heading-primary,
html .lnk-primary,
html .text-color-primary {
	color: <?= $primary_color ?> !important;
}

html .heading.heading-primary h1,
html .heading.heading-primary h2,
html .heading.heading-primary h3,
html .heading.heading-primary h4,
html .heading.heading-primary h5,
html .heading.heading-primary h6 {
	border-color: <?= $primary_color ?>;
}

html .heading-secondary,
html .lnk-secondary,
html .text-color-secondary {
	color: <?php echo $skinOptions['secondary'] ?> !important;
}

html .heading.heading-secondary h1,
html .heading.heading-secondary h2, 
html .heading.heading-secondary h3,
html .heading.heading-secondary h4,
html .heading.heading-secondary h5,
html .heading.heading-secondary h6 {
	border-color: <?php echo $skinOptions['secondary'] ?>;
}

html .heading-tertiary,
html .lnk-tertiary,
html .text-color-tertiary {
	color: <?php echo $skinOptions['tertiary'] ?> !important;
}

html .heading.heading-tertiary h1,
html .heading.heading-tertiary h2,
html .heading.heading-tertiary h3,
html .heading.heading-tertiary h4,
html .heading.heading-tertiary h5,
html .heading.heading-tertiary h6 {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .heading-quaternary,
html .lnk-quaternary,
html .text-color-quaternary {
	color: <?php echo $skinOptions['quaternary'] ?> !important;
}

html .heading.heading-quaternary h1,
html .heading.heading-quaternary h2,
html .heading.heading-quaternary h3,
html .heading.heading-quaternary h4,
html .heading.heading-quaternary h5,
html .heading.heading-quaternary h6 {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .heading-dark,
html .lnk-dark,
html .text-color-dark {
	color: #2e353e !important;
}

html .heading.heading-dark h1,
html .heading.heading-dark h2,
html .heading.heading-dark h3,
html .heading.heading-dark h4,
html .heading.heading-dark h5,
html .heading.heading-dark h6 {
	border-color: #2e353e;
}

html .heading-light,
html .lnk-light,
html .text-color-light {
	color: #ffffff !important;
}

html .heading.heading-light h1,
html .heading.heading-light h2,
html .heading.heading-light h3, 
html .heading.heading-light h4,
html .heading.heading-light h5,
html .heading.heading-light h6 {
	border-color: #ffffff;
}

html .background-color-primary {
	background-color: <?= $primary_color ?> !important;
}

html .background-color-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?> !important;
}

html .background-color-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?> !important;
}

html .background-color-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?> !important;
}

html .background-color-dark {
	background-color: #2e353e !important;
}

html .background-color-light {
	background-color: #ffffff !important;
}

.alternative-font {
	color: <?= $primary_color ?>;
}

html .blockquote-primary {
	border-color: <?= $primary_color ?> !important;
}

html .blockquote-secondary {
	border-color: <?php echo $skinOptions['secondary'] ?> !important;
}

html .blockquote-tertiary {
	border-color: <?php echo $skinOptions['tertiary'] ?> !important;
}

html .blockquote-quaternary {
	border-color: <?php echo $skinOptions['quaternary'] ?> !important;
}

html .blockquote-dark {
	border-color: #2e353e !important;
}

html .blockquote-light {
	border-color: #ffffff !important;
}

p.drop-caps:first-child:first-letter {
	color: <?= $primary_color ?>;
}

p.drop-caps.drop-caps-style-2:first-child:first-letter {
	background-color: <?= $primary_color ?>;
}

ul.nav-pills > li.active > a {
	background-color: <?= $primary_color ?>;
}

ul.nav-pills > li.active > a:hover,
ul.nav-pills > li.active > a:focus {
	background-color: <?= $primary_color ?>;
}

html ul.nav-pills-primary a {
	color: <?= $primary_color ?>;
}

html ul.nav-pills-primary a:hover {
	color: <?= $link_hover_color ?>;
}

html ul.nav-pills-primary a:focus {
	color: <?= $link_hover_color ?>;
}

html ul.nav-pills-primary a:active {
	color: <?= $link_hover_color ?>;
}

html ul.nav-pills-primary > li.active > a {
	background-color: <?= $primary_color ?>;
}

html ul.nav-pills-primary > li.active > a:hover,
html ul.nav-pills-primary > li.active > a:focus {
	background-color: <?= $primary_color ?>;
}

html ul.nav-pills-secondary a {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html ul.nav-pills-secondary a:hover {
	color: #d34843;
}

html ul.nav-pills-secondary a:focus {
	color: #d34843;
}

html ul.nav-pills-secondary a:active {
	color: #b8302b;
}

html ul.nav-pills-secondary > li.active > a {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html ul.nav-pills-secondary > li.active > a:hover,
html ul.nav-pills-secondary > li.active > a:focus {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html ul.nav-pills-tertiary a {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html ul.nav-pills-tertiary a:hover {
	color: #2491d7;
}

html ul.nav-pills-tertiary a:focus {
	color: #2491d7;
}

html ul.nav-pills-tertiary a:active {
	color: #1c73ab;
}

html ul.nav-pills-tertiary > li.active > a {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html ul.nav-pills-tertiary > li.active > a:hover,
html ul.nav-pills-tertiary > li.active > a:focus {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html ul.nav-pills-quaternary a {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html ul.nav-pills-quaternary a:hover {
	color: #414141;
}

html ul.nav-pills-quaternary a:focus {
	color: #414141;
}

html ul.nav-pills-quaternary a:active {
	color: #272727;
}

html ul.nav-pills-quaternary > li.active > a {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html ul.nav-pills-quaternary > li.active > a:hover,
html ul.nav-pills-quaternary > li.active > a:focus {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html ul.nav-pills-dark a {
	color: #2e353e;
}

html ul.nav-pills-dark a:hover {
	color: #39424d;
}

html ul.nav-pills-dark a:focus {
	color: #39424d;
}

html ul.nav-pills-dark a:active {
	color: #23282f;
}

html ul.nav-pills-dark > li.active > a {
	background-color: #2e353e;
}

html ul.nav-pills-dark > li.active > a:hover,
html ul.nav-pills-dark > li.active > a:focus {
	background-color: #2e353e;
}

html ul.nav-pills-light a {
	color: #ffffff;
}

html ul.nav-pills-light a:hover {
	color: #ffffff;
}

html ul.nav-pills-light a:focus {
	color: #ffffff;
}

html ul.nav-pills-light a:active {
	color: #f2f2f2;
}

html ul.nav-pills-light > li.active > a {
	background-color: #ffffff;
}

html ul.nav-pills-light > li.active > a:hover,
html ul.nav-pills-light > li.active > a:focus {
	background-color: #ffffff;
}

.sort-source-wrapper .nav > li.active > a {
	color: <?= $primary_color ?>;
}

.sort-source-wrapper .nav > li.active > a:hover,
.sort-source-wrapper .nav > li.active > a:focus {
	color: <?= $primary_color ?>;
}

.sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: <?= $primary_color ?>;
}

html .label-primary {
	background-color: <?= $primary_color ?>;
}

html .label-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .label-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .label-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .label-dark {
	background-color: #2e353e;
}

html .label-light {
	background-color: #ffffff;
}

.btn-link {
	color: <?= $primary_color ?>;
}

.btn-link:hover {
	color: <?= $link_hover_color ?>;
}

.btn-link:active {
	color: <?= $link_hover_color ?>;
}

html .btn-primary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?> <?= $primary_color ?> <?php echo $skinOptions['border_bottom_color'] ?>;
}

html .btn-primary:hover {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

html .btn-primary:active,
html .btn-primary:focus,
html .btn-primary:active:hover,
html .btn-primary:active:focus {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

html .btn-primary.dropdown-toggle {
	border-left-color: <?= $link_hover_color ?>;
}

html .btn-primary[disabled] {
	border-color: #fab9b7;
	background-color: #fab9b7;
}

html .btn-primary:hover,
html .btn-primary:focus,
html .btn-primary:active:hover,
html .btn-primary:active:focus {
	color: #ffffff;
}

html .btn-primary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['border_bottom_color'] ?>;
	border-color: <?php echo $skinOptions['border_bottom_color'] ?> <?php echo $skinOptions['border_bottom_color'] ?> #d7140e;
}

html .btn-primary-scale-2:hover {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> #ef1710;
	background-color: <?= $link_hover_color ?>;
}

html .btn-primary-scale-2:active,
html .btn-primary-scale-2:focus,
html .btn-primary-scale-2:active:hover,
html .btn-primary-scale-2:active:focus {
	border-color: #ef1710 #ef1710 #ef1710;
	background-color: #ef1710;
}

html .btn-primary-scale-2.dropdown-toggle {
	border-left-color: #ef1710;
}

html .btn-primary-scale-2[disabled] {
	border-color: #f78a87;
	background-color: #f78a87;
}

html .btn-secondary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['secondary'] ?>;
	border-color: <?php echo $skinOptions['secondary'] ?> <?php echo $skinOptions['secondary'] ?> #a42a26;
}

html .btn-secondary:hover {
	border-color: #d34843 #d34843 #b8302b;
	background-color: #d34843;
}

html .btn-secondary:active,
html .btn-secondary:focus,
html .btn-secondary:active:hover,
html .btn-secondary:active:focus {
	border-color: #b8302b #b8302b #b8302b;
	background-color: #b8302b;
}

html .btn-secondary.dropdown-toggle {
	border-left-color: #b8302b;
}

html .btn-secondary[disabled] {
	border-color: #e28481;
	background-color: #e28481;
}

html .btn-secondary:hover,
html .btn-secondary:focus,
html .btn-secondary:active:hover,
html .btn-secondary:active:focus {
	color: #ffffff;
}

html .btn-secondary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #a42a26;
	border-color: #a42a26 #a42a26 #7a201d;
}

html .btn-secondary-scale-2:hover {
	border-color: #b8302b #b8302b #8f2521;
	background-color: #b8302b;
}

html .btn-secondary-scale-2:active,
html .btn-secondary-scale-2:focus,
html .btn-secondary-scale-2:active:hover,
html .btn-secondary-scale-2:active:focus {
	border-color: #8f2521 #8f2521 #8f2521;
	background-color: #8f2521;
}

html .btn-secondary-scale-2.dropdown-toggle {
	border-left-color: #8f2521;
}

html .btn-secondary-scale-2[disabled] {
	border-color: #d85c58;
	background-color: #d85c58;
}

html .btn-tertiary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	border-color: <?php echo $skinOptions['tertiary'] ?> <?php echo $skinOptions['tertiary'] ?> #196595;
}

html .btn-tertiary:hover {
	border-color: #2491d7 #2491d7 #1c73ab;
	background-color: #2491d7;
}

html .btn-tertiary:active,
html .btn-tertiary:focus,
html .btn-tertiary:active:hover,
html .btn-tertiary:active:focus {
	border-color: #1c73ab #1c73ab #1c73ab;
	background-color: #1c73ab;
}

html .btn-tertiary.dropdown-toggle {
	border-left-color: #1c73ab;
}

html .btn-tertiary[disabled] {
	border-color: #62b2e5;
	background-color: #62b2e5;
}

html .btn-tertiary:hover,
html .btn-tertiary:focus,
html .btn-tertiary:active:hover,
html .btn-tertiary:active:focus {
	color: #ffffff;
}

html .btn-tertiary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #196595;
	border-color: #196595 #196595 #11476a;
}

html .btn-tertiary-scale-2:hover {
	border-color: #1c73ab #1c73ab #15567f;
	background-color: #1c73ab;
}

html .btn-tertiary-scale-2:active,
html .btn-tertiary-scale-2:focus,
html .btn-tertiary-scale-2:active:hover,
html .btn-tertiary-scale-2:active:focus {
	border-color: #15567f #15567f #15567f;
	background-color: #15567f;
}

html .btn-tertiary-scale-2.dropdown-toggle {
	border-left-color: #15567f;
}

html .btn-tertiary-scale-2[disabled] {
	border-color: #369cde;
	background-color: #369cde;
}

html .btn-quaternary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	border-color: <?php echo $skinOptions['quaternary'] ?> <?php echo $skinOptions['quaternary'] ?> #1a1a1a;
}

html .btn-quaternary:hover {
	border-color: #414141 #414141 #272727;
	background-color: #414141;
}

html .btn-quaternary:active,
html .btn-quaternary:focus,
html .btn-quaternary:active:hover,
html .btn-quaternary:active:focus {
	border-color: #272727 #272727 #272727;
	background-color: #272727;
}

html .btn-quaternary.dropdown-toggle {
	border-left-color: #272727;
}

html .btn-quaternary[disabled] {
	border-color: #676767;
	background-color: #676767;
}

html .btn-quaternary:hover,
html .btn-quaternary:focus,
html .btn-quaternary:active:hover,
html .btn-quaternary:active:focus {
	color: #ffffff;
}

html .btn-quaternary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #1a1a1a;
	border-color: #1a1a1a #1a1a1a #010101;
}

html .btn-quaternary-scale-2:hover {
	border-color: #272727 #272727 #0e0e0e;
	background-color: #272727;
}

html .btn-quaternary-scale-2:active,
html .btn-quaternary-scale-2:focus,
html .btn-quaternary-scale-2:active:hover,
html .btn-quaternary-scale-2:active:focus {
	border-color: #0e0e0e #0e0e0e #0e0e0e;
	background-color: #0e0e0e;
}

html .btn-quaternary-scale-2.dropdown-toggle {
	border-left-color: #0e0e0e;
}

html .btn-quaternary-scale-2[disabled] {
	border-color: #4e4e4e;
	background-color: #4e4e4e;
}

html .btn-dark {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #2e353e;
	border-color: #2e353e #2e353e #181c21;
}

html .btn-dark:hover {
	border-color: #39424d #39424d #23282f;
	background-color: #39424d;
}

html .btn-dark:active,
html .btn-dark:focus,
html .btn-dark:active:hover,
html .btn-dark:active:focus {
	border-color: #23282f #23282f #23282f;
	background-color: #23282f;
}

html .btn-dark.dropdown-toggle {
	border-left-color: #23282f;
}

html .btn-dark[disabled] {
	border-color: #596779;
	background-color: #596779;
}

html .btn-dark:hover,
html .btn-dark:focus,
html .btn-dark:active:hover,
html .btn-dark:active:focus {
	color: #ffffff;
}

html .btn-dark-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #181c21;
	border-color: #181c21 #181c21 #030303;
}

html .btn-dark-scale-2:hover {
	border-color: #23282f #23282f #0d0f12;
	background-color: #23282f;
}

html .btn-dark-scale-2:active,
html .btn-dark-scale-2:focus,
html .btn-dark-scale-2:active:hover,
html .btn-dark-scale-2:active:focus {
	border-color: #0d0f12 #0d0f12 #0d0f12;
	background-color: #0d0f12;
}

html .btn-dark-scale-2.dropdown-toggle {
	border-left-color: #0d0f12;
}

html .btn-dark-scale-2[disabled] {
	border-color: #444e5b;
	background-color: #444e5b;
}

html .btn-light {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #ffffff;
	border-color: #ffffff #ffffff #e6e6e6;
}

html .btn-light:hover {
	border-color: #ffffff #ffffff #f2f2f2;
	background-color: #ffffff;
}

html .btn-light:active,
html .btn-light:focus,
html .btn-light:active:hover,
html .btn-light:active:focus {
	border-color: #f2f2f2 #f2f2f2 #f2f2f2;
	background-color: #f2f2f2;
}

html .btn-light.dropdown-toggle {
	border-left-color: #f2f2f2;
}

html .btn-light[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

html .btn-light:hover,
html .btn-light:focus,
html .btn-light:active:hover,
html .btn-light:active:focus {
	color: #777777;
}

html .btn-light-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #e6e6e6;
	border-color: #e6e6e6 #e6e6e6 #cccccc;
}

html .btn-light-scale-2:hover {
	border-color: #f2f2f2 #f2f2f2 #d9d9d9;
	background-color: #f2f2f2;
}

html .btn-light-scale-2:active,
html .btn-light-scale-2:focus,
html .btn-light-scale-2:active:hover,
html .btn-light-scale-2:active:focus {
	border-color: #d9d9d9 #d9d9d9 #d9d9d9;
	background-color: #d9d9d9;
}

html .btn-light-scale-2.dropdown-toggle {
	border-left-color: #d9d9d9;
}

html .btn-light-scale-2[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

html .btn-borders.btn-primary {
	background: transparent;
	border-color: <?= $primary_color ?>;
	color: <?= $primary_color ?>;
	text-shadow: none;
}

html .btn-borders.btn-primary:hover,
html .btn-borders.btn-primary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?> <?= $primary_color ?> <?php echo $skinOptions['border_bottom_color'] ?>;
	border-color: <?= $primary_color ?> !important;
	color: #ffffff;
}

html .btn-borders.btn-primary:hover:hover,
html .btn-borders.btn-primary:focus:hover {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

html .btn-borders.btn-primary:hover:active,
html .btn-borders.btn-primary:focus:active,
html .btn-borders.btn-primary:hover:focus,
html .btn-borders.btn-primary:focus:focus,
html .btn-borders.btn-primary:hover:active:hover,
html .btn-borders.btn-primary:focus:active:hover,
html .btn-borders.btn-primary:hover:active:focus,
html .btn-borders.btn-primary:focus:active:focus {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

html .btn-borders.btn-primary:hover.dropdown-toggle,
html .btn-borders.btn-primary:focus.dropdown-toggle {
	border-left-color: <?= $link_hover_color ?>;
}

html .btn-borders.btn-primary:hover[disabled],
html .btn-borders.btn-primary:focus[disabled] {
	border-color: #fab9b7;
	background-color: #fab9b7;
}

html .btn-borders.btn-secondary {
	background: transparent;
	border-color: <?php echo $skinOptions['secondary'] ?>;
	color: <?php echo $skinOptions['secondary'] ?>;
	text-shadow: none;
}

html .btn-borders.btn-secondary:hover,
html .btn-borders.btn-secondary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['secondary'] ?>;
	border-color: <?php echo $skinOptions['secondary'] ?> <?php echo $skinOptions['secondary'] ?> #a42a26;
	border-color: <?php echo $skinOptions['secondary'] ?> !important;
	color: #ffffff;
}

html .btn-borders.btn-secondary:hover:hover,
html .btn-borders.btn-secondary:focus:hover {
	border-color: #d34843 #d34843 #b8302b;
	background-color: #d34843;
}

html .btn-borders.btn-secondary:hover:active,
html .btn-borders.btn-secondary:focus:active,
html .btn-borders.btn-secondary:hover:focus,
html .btn-borders.btn-secondary:focus:focus,
html .btn-borders.btn-secondary:hover:active:hover,
html .btn-borders.btn-secondary:focus:active:hover,
html .btn-borders.btn-secondary:hover:active:focus,
html .btn-borders.btn-secondary:focus:active:focus {
	border-color: #b8302b #b8302b #b8302b;
	background-color: #b8302b;
}

html .btn-borders.btn-secondary:hover.dropdown-toggle,
html .btn-borders.btn-secondary:focus.dropdown-toggle {
	border-left-color: #b8302b;
}

html .btn-borders.btn-secondary:hover[disabled],
html .btn-borders.btn-secondary:focus[disabled] {
	border-color: #e28481;
	background-color: #e28481;
}

html .btn-borders.btn-tertiary {
	background: transparent;
	border-color: <?php echo $skinOptions['tertiary'] ?>;
	color: <?php echo $skinOptions['tertiary'] ?>;
	text-shadow: none;
}

html .btn-borders.btn-tertiary:hover,
html .btn-borders.btn-tertiary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	border-color: <?php echo $skinOptions['tertiary'] ?> <?php echo $skinOptions['tertiary'] ?> #196595;
	border-color: <?php echo $skinOptions['tertiary'] ?> !important;
	color: #ffffff;
}

html .btn-borders.btn-tertiary:hover:hover,
html .btn-borders.btn-tertiary:focus:hover {
	border-color: #2491d7 #2491d7 #1c73ab;
	background-color: #2491d7;
}

html .btn-borders.btn-tertiary:hover:active,
html .btn-borders.btn-tertiary:focus:active,
html .btn-borders.btn-tertiary:hover:focus,
html .btn-borders.btn-tertiary:focus:focus,
html .btn-borders.btn-tertiary:hover:active:hover,
html .btn-borders.btn-tertiary:focus:active:hover,
html .btn-borders.btn-tertiary:hover:active:focus,
html .btn-borders.btn-tertiary:focus:active:focus {
	border-color: #1c73ab #1c73ab #1c73ab;
	background-color: #1c73ab;
}

html .btn-borders.btn-tertiary:hover.dropdown-toggle,
html .btn-borders.btn-tertiary:focus.dropdown-toggle {
	border-left-color: #1c73ab;
}

html .btn-borders.btn-tertiary:hover[disabled],
html .btn-borders.btn-tertiary:focus[disabled] {
	border-color: #62b2e5;
	background-color: #62b2e5;
}

html .btn-borders.btn-quaternary {
	background: transparent;
	border-color: <?php echo $skinOptions['quaternary'] ?>;
	color: <?php echo $skinOptions['quaternary'] ?>;
	text-shadow: none;
}

html .btn-borders.btn-quaternary:hover,
html .btn-borders.btn-quaternary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	border-color: <?php echo $skinOptions['quaternary'] ?> <?php echo $skinOptions['quaternary'] ?> #1a1a1a;
	border-color: <?php echo $skinOptions['quaternary'] ?> !important;
	color: #ffffff;
}

html .btn-borders.btn-quaternary:hover:hover,
html .btn-borders.btn-quaternary:focus:hover {
	border-color: #414141 #414141 #272727;
	background-color: #414141;
}

html .btn-borders.btn-quaternary:hover:active,
html .btn-borders.btn-quaternary:focus:active,
html .btn-borders.btn-quaternary:hover:focus,
html .btn-borders.btn-quaternary:focus:focus,
html .btn-borders.btn-quaternary:hover:active:hover,
html .btn-borders.btn-quaternary:focus:active:hover,
html .btn-borders.btn-quaternary:hover:active:focus,
html .btn-borders.btn-quaternary:focus:active:focus {
	border-color: #272727 #272727 #272727;
	background-color: #272727;
}

html .btn-borders.btn-quaternary:hover.dropdown-toggle,
html .btn-borders.btn-quaternary:focus.dropdown-toggle {
	border-left-color: #272727;
}

html .btn-borders.btn-quaternary:hover[disabled],
html .btn-borders.btn-quaternary:focus[disabled] {
	border-color: #676767;
	background-color: #676767;
}

html .btn-borders.btn-dark {
	background: transparent;
	border-color: #2e353e;
	color: #2e353e;
	text-shadow: none;
}

html .btn-borders.btn-dark:hover,
html .btn-borders.btn-dark:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #2e353e;
	border-color: #2e353e #2e353e #181c21;
	border-color: #2e353e !important;
	color: #ffffff;
}

html .btn-borders.btn-dark:hover:hover,
html .btn-borders.btn-dark:focus:hover {
	border-color: #39424d #39424d #23282f;
	background-color: #39424d;
}

html .btn-borders.btn-dark:hover:active,
html .btn-borders.btn-dark:focus:active,
html .btn-borders.btn-dark:hover:focus,
html .btn-borders.btn-dark:focus:focus,
html .btn-borders.btn-dark:hover:active:hover,
html .btn-borders.btn-dark:focus:active:hover,
html .btn-borders.btn-dark:hover:active:focus,
html .btn-borders.btn-dark:focus:active:focus {
	border-color: #23282f #23282f #23282f;
	background-color: #23282f;
}

html .btn-borders.btn-dark:hover.dropdown-toggle,
html .btn-borders.btn-dark:focus.dropdown-toggle {
	border-left-color: #23282f;
}

html .btn-borders.btn-dark:hover[disabled],
html .btn-borders.btn-dark:focus[disabled] {
	border-color: #596779;
	background-color: #596779;
}

html .btn-borders.btn-light {
	background: transparent;
	border-color: #ffffff;
	color: #ffffff;
	text-shadow: none;
}

html .btn-borders.btn-light:hover,
html .btn-borders.btn-light:focus {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #ffffff;
	border-color: #ffffff #ffffff #e6e6e6;
	border-color: #ffffff !important;
	color: #777777;
}

html .btn-borders.btn-light:hover:hover,
html .btn-borders.btn-light:focus:hover {
	border-color: #ffffff #ffffff #f2f2f2;
	background-color: #ffffff;
}

html .btn-borders.btn-light:hover:active,
html .btn-borders.btn-light:focus:active,
html .btn-borders.btn-light:hover:focus,
html .btn-borders.btn-light:focus:focus,
html .btn-borders.btn-light:hover:active:hover,
html .btn-borders.btn-light:focus:active:hover,
html .btn-borders.btn-light:hover:active:focus,
html .btn-borders.btn-light:focus:active:focus {
	border-color: #f2f2f2 #f2f2f2 #f2f2f2;
	background-color: #f2f2f2;
}

html .btn-borders.btn-light:hover.dropdown-toggle,
html .btn-borders.btn-light:focus.dropdown-toggle {
	border-left-color: #f2f2f2;
}

html .btn-borders.btn-light:hover[disabled],
html .btn-borders.btn-light:focus[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

.pagination > li > a,
.pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
	color: <?= $primary_color ?>;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
	background-color: <?= $primary_color ?> !important;
	border-color: <?= $primary_color ?>;
}

body.dark .pagination > li > a,
body.dark .pagination > li > span,
body.dark .pagination > li > a:hover,
body.dark .pagination > li > span:hover,
body.dark .pagination > li > a:focus,
body.dark .pagination > li > span:focus {
	color: <?= $primary_color ?>;
}

body.dark .pagination > .active > a,
body.dark .pagination > .active > span,
body.dark .pagination > .active > a:hover,
body.dark .pagination > .active > span:hover,
body.dark .pagination > .active > a:focus,
body.dark .pagination > .active > span:focus {
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?>;
}

.pagination > .active > a,
body.dark .pagination > .active > a {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?> <?= $primary_color ?> <?php echo $skinOptions['border_bottom_color'] ?>;
}

.pagination > .active > a:hover,
body.dark .pagination > .active > a:hover {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

.pagination > .active > a:active,
body.dark .pagination > .active > a:active,
.pagination > .active > a:focus,
body.dark .pagination > .active > a:focus,
.pagination > .active > a:active:hover,
body.dark .pagination > .active > a:active:hover,
.pagination > .active > a:active:focus,
body.dark .pagination > .active > a:active:focus {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

.pagination > .active > a.dropdown-toggle,
body.dark .pagination > .active > a.dropdown-toggle {
	border-left-color: <?= $link_hover_color ?>;
}

.pagination > .active > a[disabled],
body.dark .pagination > .active > a[disabled] {
	border-color: #fab9b7;
	background-color: #fab9b7;
}

html .alert-primary {
	background-color: <?= $primary_color ?>;
	border-color: #f34e49;
	color: #ffffff;
}

html .alert-primary .alert-link {
	color: #ffffff;
}

html .alert-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
	border-color: #c1322d;
	color: #ffffff;
}

html .alert-secondary .alert-link {
	color: #ffffff;
}

html .alert-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	border-color: #1e79b4;
	color: #ffffff;
}

html .alert-tertiary .alert-link {
	color: #ffffff;
}

html .alert-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	border-color: #2c2c2c;
	color: #ffffff;
}

html .alert-quaternary .alert-link {
	color: #ffffff;
}

html .alert-dark {
	background-color: #2e353e;
	border-color: #272d35;
	color: #ffffff;
}

html .alert-dark .alert-link {
	color: #ffffff;
}

html .alert-light {
	background-color: #ffffff;
	border-color: #f7f7f7;
	color: #777777;
}

html .alert-light .alert-link {
	color: #777777;
}

html .progress-bar-primary {
	background-color: <?= $primary_color ?>;
}

html .progress-bar-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .progress-bar-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .progress-bar-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .progress-bar-dark {
	background-color: #2e353e;
}

html .progress-bar-light {
	background-color: #ffffff;
}

html section.section-primary {
	background-color: <?= $primary_color ?> !important;
	border-color: <?= $link_hover_color ?> !important;
}

html section.section-primary h1,
html section.section-primary h2,
html section.section-primary h3,
html section.section-primary h4,
html section.section-primary h5,
html section.section-primary h6 {
	color: #ffffff;
}

html section.section-primary p {
	color: #e6e6e6;
}

html section.section-primary-scale-2 {
	background-color: <?php echo $skinOptions['border_bottom_color'] ?> !important;
	border-color: #ef1710 !important;
}

html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: <?php echo $skinOptions['border_bottom_color'] ?>;
}

html section.section-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?> !important;
	border-color: #b8302b !important;
}

html section.section-secondary h1,
html section.section-secondary h2,
html section.section-secondary h3,
html section.section-secondary h4,
html section.section-secondary h5,
html section.section-secondary h6 {
	color: #ffffff;
}

html section.section-secondary p {
	color: #e6e6e6;
}

html section.section-secondary-scale-2 {
	background-color: #a42a26 !important;
	border-color: #8f2521 !important;
}

html section.section-secondary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #a42a26;
}

html section.section-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?> !important;
	border-color: #1c73ab !important;
}

html section.section-tertiary h1,
html section.section-tertiary h2,
html section.section-tertiary h3,
html section.section-tertiary h4,
html section.section-tertiary h5,
html section.section-tertiary h6 {
	color: #ffffff;
}

html section.section-tertiary p {
	color: #e6e6e6;
}

html section.section-tertiary-scale-2 {
	background-color: #196595 !important;
	border-color: #15567f !important;
}

html section.section-tertiary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #196595;
}

html section.section-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?> !important;
	border-color: #272727 !important;
}

html section.section-quaternary h1,
html section.section-quaternary h2,
html section.section-quaternary h3,
html section.section-quaternary h4,
html section.section-quaternary h5,
html section.section-quaternary h6 {
	color: #ffffff;
}

html section.section-quaternary p {
	color: #e6e6e6;
}

html section.section-quaternary-scale-2 {
	background-color: #1a1a1a !important;
	border-color: #0e0e0e !important;
}

html section.section-quaternary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #1a1a1a;
}

html section.section-dark {
	background-color: #2e353e !important;
	border-color: #23282f !important;
}

html section.section-dark h1,
html section.section-dark h2,
html section.section-dark h3,
html section.section-dark h4,
html section.section-dark h5,
html section.section-dark h6 {
	color: #ffffff;
}

html section.section-dark p {
	color: #e6e6e6;
}

html section.section-dark-scale-2 {
	background-color: #181c21 !important;
	border-color: #0d0f12 !important;
}

html section.section-dark-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #181c21;
}

html section.section-light {
	background-color: #ffffff !important;
	border-color: #f2f2f2 !important;
}

html section.section-light h1,
html section.section-light h2,
html section.section-light h3,
html section.section-light h4,
html section.section-light h5,
html section.section-light h6 {
	color: #777777;
}

html section.section-light p {
	color: #5e5e5e;
}

html section.section-light-scale-2 {
	background-color: #e6e6e6 !important;
	border-color: #d9d9d9 !important;
}

html section.section-light-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #e6e6e6;
}

html section.section-default-scale-1 {
	background-color: #dbdbdb !important;
	border-top-color: #d3d3d3 !important;
}

html section.section-default-scale-2 {
	background-color: #c1c1c1 !important;
	border-top-color: #b9b9b9 !important;
}

html section.section-default-scale-3 {
	background-color: #a8a8a8 !important;
	border-top-color: #a0a0a0 !important;
}

html section.section-default-scale-4 {
	background-color: #8e8e8e !important;
	border-top-color: #868686 !important;
}

html section.section-default-scale-5 {
	background-color: #757575 !important;
	border-top-color: #6d6d6d !important;
}

html section.section-default-scale-6 {
	background-color: #5b5b5b !important;
	border-top-color: #535353 !important;
}

html section.section-default-scale-7 {
	background-color: #424242 !important;
	border-top-color: #3a3a3a !important;
}

html section.section-default-scale-8 {
	background-color: #282828 !important;
	border-top-color: #202020 !important;
}

html section.section-default-scale-9 {
	background-color: #0f0f0f !important;
	border-top-color: #070707 !important;
}

html.dark section.section-default-scale-1 {
	background-color: #333a44 !important;
	border-top-color: #2c323b !important;
}

html.dark section.section-default-scale-2 {
	background-color: #495362 !important;
	border-top-color: #424b59 !important;
}

html.dark section.section-default-scale-3 {
	background-color: #5e6b7f !important;
	border-top-color: #586476 !important;
}

html.dark section.section-default-scale-4 {
	background-color: #77849a !important;
	border-top-color: #6e7d93 !important;
}

html.dark section.section-default-scale-5 {
	background-color: #949faf !important;
	border-top-color: #8b97a9 !important;
}

html.dark section.section-default-scale-6 {
	background-color: #b1b9c5 !important;
	border-top-color: #a8b1be !important;
}

html.dark section.section-default-scale-7 {
	background-color: #ced3db !important;
	border-top-color: #c5cbd4 !important;
}

html.dark section.section-default-scale-8 {
	background-color: #ebeef1 !important;
	border-top-color: #e3e6ea !important;
}

html.dark section.section-default-scale-9 {
	background-color: #ffffff !important;
	border-top-color: #f7f7f7 !important;
}

section.page-header h1 {
	border-bottom-color: <?= $primary_color ?>;
}

section.page-header.custom-product {
	background-color: <?= $link_hover_color ?>;
	border-top-color: #f3534d;
}

html .page-header-color.page-header-primary {
	background-color: <?= $primary_color ?>;
	border-bottom-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .page-header-color.page-header-primary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-primary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-primary a {
	color: #ffffff;
}

html .page-header-color.page-header-primary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
	border-bottom-color: <?php echo $skinOptions['secondary'] ?>;
	color: #ffffff;
}

html .page-header-color.page-header-secondary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-secondary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-secondary a {
	color: #ffffff;
}

html .page-header-color.page-header-secondary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	border-bottom-color: <?php echo $skinOptions['tertiary'] ?>;
	color: #ffffff;
}

html .page-header-color.page-header-tertiary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary a {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	border-bottom-color: <?php echo $skinOptions['quaternary'] ?>;
	color: #ffffff;
}

html .page-header-color.page-header-quaternary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary a {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-dark {
	background-color: #2e353e;
	border-bottom-color: #2e353e;
	color: #ffffff;
}

html .page-header-color.page-header-dark h1 {
	color: #ffffff;
}

html .page-header-color.page-header-dark h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-dark a {
	color: #ffffff;
}

html .page-header-color.page-header-dark .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-light {
	background-color: #ffffff;
	border-bottom-color: #ffffff;
	color: #777777;
}

html .page-header-color.page-header-light h1 {
	color: #777777;
}

html .page-header-color.page-header-light h1 span {
	color: #777777;
}

html .page-header-color.page-header-light a {
	color: #777777;
}

html .page-header-color.page-header-light .breadcrumb > .active {
	color: #777777;
}

html .toggle-primary .toggle label {
	color: <?= $primary_color ?>;
	border-left-color: <?= $primary_color ?>;
	border-right-color: <?= $primary_color ?>;
}

html .toggle-primary .toggle.active > label {
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .toggle-primary.toggle-simple .toggle > label:after {
	background-color: <?= $primary_color ?>;
}

html .toggle-secondary .toggle label {
	color: <?php echo $skinOptions['secondary'] ?>;
	border-left-color: <?php echo $skinOptions['secondary'] ?>;
	border-right-color: <?php echo $skinOptions['secondary'] ?>;
}

html .toggle-secondary .toggle.active > label {
	background-color: <?php echo $skinOptions['secondary'] ?>;
	border-color: <?php echo $skinOptions['secondary'] ?>;
	color: #ffffff;
}

html .toggle-secondary.toggle-simple .toggle > label:after {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .toggle-tertiary .toggle label {
	color: <?php echo $skinOptions['tertiary'] ?>;
	border-left-color: <?php echo $skinOptions['tertiary'] ?>;
	border-right-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .toggle-tertiary .toggle.active > label {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	border-color: <?php echo $skinOptions['tertiary'] ?>;
	color: #ffffff;
}

html .toggle-tertiary.toggle-simple .toggle > label:after {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .toggle-quaternary .toggle label {
	color: <?php echo $skinOptions['quaternary'] ?>;
	border-left-color: <?php echo $skinOptions['quaternary'] ?>;
	border-right-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .toggle-quaternary .toggle.active > label {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	border-color: <?php echo $skinOptions['quaternary'] ?>;
	color: #ffffff;
}

html .toggle-quaternary.toggle-simple .toggle > label:after {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .toggle-dark .toggle label {
	color: #2e353e;
	border-left-color: #2e353e;
	border-right-color: #2e353e;
}

html .toggle-dark .toggle.active > label {
	background-color: #2e353e;
	border-color: #2e353e;
	color: #ffffff;
}

html .toggle-dark.toggle-simple .toggle > label:after {
	background-color: #2e353e;
}

html .toggle-light .toggle label {
	color: #ffffff;
	border-left-color: #ffffff;
	border-right-color: #ffffff;
}

html .toggle-light .toggle.active > label {
	background-color: #ffffff;
	border-color: #ffffff;
	color: #777777;
}

html .toggle-light.toggle-simple .toggle > label:after {
	background-color: #ffffff;
}

.thumb-info .thumb-info-type {
	background-color: <?= $primary_color ?>;
}

.thumb-info .thumb-info-action-icon {
	background-color: <?= $primary_color ?>;
}

.thumb-info-social-icons a {
	background-color: <?= $primary_color ?>;
}

.thumbnail .zoom {
	background-color: <?= $primary_color ?>;
}

.img-thumbnail .zoom {
	background-color: <?= $primary_color ?>;
}

html .thumb-info .thumb-info-action-icon-primary {
	background-color: <?= $primary_color ?>;
}

html .thumb-info .thumb-info-action-icon-primary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .thumb-info .thumb-info-action-icon-secondary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .thumb-info .thumb-info-action-icon-tertiary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .thumb-info .thumb-info-action-icon-quaternary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-dark {
	background-color: #2e353e;
}

html .thumb-info .thumb-info-action-icon-dark i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-light {
	background-color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-light i {
	color: #777777;
}

.thumb-info-ribbon {
	background: <?= $primary_color ?>;
}

.thumb-info-ribbon:before {
	border-right-color: #ef1710;
	border-left-color: #ef1710;
}

.inverted {
	background-color: <?= $primary_color ?>;
}

html .inverted-primary {
	background-color: <?= $primary_color ?>;
}

html .inverted-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .inverted-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .inverted-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .inverted-dark {
	background-color: #2e353e;
}

html .inverted-light {
	background-color: #ffffff;
}

.owl-carousel .owl-dots .owl-dot.active span,
.owl-carousel .owl-dots .owl-dot:hover span {
	background-color: #f2403a;
}

.owl-carousel.show-nav-title .owl-nav [class*="owl-"] {
	color: <?= $primary_color ?>;
}

.owl-carousel .owl-nav [class*="owl-"] {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?> <?= $primary_color ?> <?php echo $skinOptions['border_bottom_color'] ?>;
}

.owl-carousel .owl-nav [class*="owl-"]:hover {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

.owl-carousel .owl-nav [class*="owl-"]:active,
.owl-carousel .owl-nav [class*="owl-"]:focus,
.owl-carousel .owl-nav [class*="owl-"]:active:hover,
.owl-carousel .owl-nav [class*="owl-"]:active:focus {
	border-color: <?= $link_hover_color ?> <?= $link_hover_color ?> <?= $link_hover_color ?>;
	background-color: <?= $link_hover_color ?>;
}

.owl-carousel .owl-nav [class*="owl-"].dropdown-toggle {
	border-left-color: <?= $link_hover_color ?>;
}

.owl-carousel .owl-nav [class*="owl-"][disabled] {
	border-color: #fab9b7;
	background-color: #fab9b7;
}

html body .tabs .nav-tabs a,
html.dark body .tabs .nav-tabs a,
html body .tabs .nav-tabs a:hover,
html.dark body .tabs .nav-tabs a:hover {
	color: <?= $primary_color ?>;
}

html body .tabs .nav-tabs a:hover,
html.dark body .tabs .nav-tabs a:hover,
html body .tabs .nav-tabs a:focus,
html.dark body .tabs .nav-tabs a:focus {
	border-top-color: <?= $primary_color ?>;
}

html body .tabs .nav-tabs li.active a,
html.dark body .tabs .nav-tabs li.active a {
	border-top-color: <?= $primary_color ?>;
	color: <?= $primary_color ?>;
}

html body .tabs .nav-tabs.nav-justified a:hover,
html.dark body .tabs .nav-tabs.nav-justified a:hover,
html body .tabs .nav-tabs.nav-justified a:focus,
html.dark body .tabs .nav-tabs.nav-justified a:focus {
	border-top-color: <?= $primary_color ?>;
}

html body .tabs.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,
html body .tabs.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a,
html body .tabs.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {
	border-bottom-color: <?= $primary_color ?>;
}

html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
	border-left-color: <?= $primary_color ?>;
}

html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
	border-right-color: <?= $primary_color ?>;
}

html body .tabs-primary .nav-tabs li a,
html.dark body .tabs-primary .nav-tabs li a,
html body .tabs-primary .nav-tabs.nav-justified li a,
html.dark body .tabs-primary .nav-tabs.nav-justified li a,
html body .tabs-primary .nav-tabs li a:hover,
html.dark body .tabs-primary .nav-tabs li a:hover,
html body .tabs-primary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
	color: <?= $primary_color ?>;
}

html body .tabs-primary .nav-tabs li a:hover,
html.dark body .tabs-primary .nav-tabs li a:hover,
html body .tabs-primary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?= $primary_color ?>;
}

html body .tabs-primary .nav-tabs li.active a,
html.dark body .tabs-primary .nav-tabs li.active a,
html body .tabs-primary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,
html body .tabs-primary .nav-tabs li.active a:hover,
html.dark body .tabs-primary .nav-tabs li.active a:hover,
html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-primary .nav-tabs li.active a:focus,
html.dark body .tabs-primary .nav-tabs li.active a:focus,
html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?= $primary_color ?>;
	color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,
html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?= $primary_color ?>;
}

html body .tabs-primary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,
html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?= $primary_color ?>;
}

html body .tabs-secondary .nav-tabs li a,
html.dark body .tabs-secondary .nav-tabs li a,
html body .tabs-secondary .nav-tabs.nav-justified li a,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a,
html body .tabs-secondary .nav-tabs li a:hover,
html.dark body .tabs-secondary .nav-tabs li a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary .nav-tabs li a:hover,
html.dark body .tabs-secondary .nav-tabs li a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary .nav-tabs li.active a,
html.dark body .tabs-secondary .nav-tabs li.active a,
html body .tabs-secondary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,
html body .tabs-secondary .nav-tabs li.active a:hover,
html.dark body .tabs-secondary .nav-tabs li.active a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-secondary .nav-tabs li.active a:focus,
html.dark body .tabs-secondary .nav-tabs li.active a:focus,
html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?php echo $skinOptions['secondary'] ?>;
	color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,
html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-secondary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,
html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?php echo $skinOptions['secondary'] ?>;
}

html body .tabs-tertiary .nav-tabs li a,
html.dark body .tabs-tertiary .nav-tabs li a,
html body .tabs-tertiary .nav-tabs.nav-justified li a,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,
html body .tabs-tertiary .nav-tabs li a:hover,
html.dark body .tabs-tertiary .nav-tabs li a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary .nav-tabs li a:hover,
html.dark body .tabs-tertiary .nav-tabs li a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary .nav-tabs li.active a,
html.dark body .tabs-tertiary .nav-tabs li.active a,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,
html body .tabs-tertiary .nav-tabs li.active a:hover,
html.dark body .tabs-tertiary .nav-tabs li.active a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-tertiary .nav-tabs li.active a:focus,
html.dark body .tabs-tertiary .nav-tabs li.active a:focus,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?php echo $skinOptions['tertiary'] ?>;
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?php echo $skinOptions['tertiary'] ?>;
}

html body .tabs-quaternary .nav-tabs li a,
html.dark body .tabs-quaternary .nav-tabs li a,
html body .tabs-quaternary .nav-tabs.nav-justified li a,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,
html body .tabs-quaternary .nav-tabs li a:hover,
html.dark body .tabs-quaternary .nav-tabs li a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary .nav-tabs li a:hover,
html.dark body .tabs-quaternary .nav-tabs li a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary .nav-tabs li.active a,
html.dark body .tabs-quaternary .nav-tabs li.active a,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,
html body .tabs-quaternary .nav-tabs li.active a:hover,
html.dark body .tabs-quaternary .nav-tabs li.active a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-quaternary .nav-tabs li.active a:focus,
html.dark body .tabs-quaternary .nav-tabs li.active a:focus,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?php echo $skinOptions['quaternary'] ?>;
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?php echo $skinOptions['quaternary'] ?>;
}

html body .tabs-dark .nav-tabs li a,
html.dark body .tabs-dark .nav-tabs li a,
html body .tabs-dark .nav-tabs.nav-justified li a,
html.dark body .tabs-dark .nav-tabs.nav-justified li a,
html body .tabs-dark .nav-tabs li a:hover,
html.dark body .tabs-dark .nav-tabs li a:hover,
html body .tabs-dark .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
	color: #2e353e;
}

html body .tabs-dark .nav-tabs li a:hover,
html.dark body .tabs-dark .nav-tabs li a:hover,
html body .tabs-dark .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
	border-top-color: #2e353e;
}

html body .tabs-dark .nav-tabs li.active a,
html.dark body .tabs-dark .nav-tabs li.active a,
html body .tabs-dark .nav-tabs.nav-justified li.active a,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,
html body .tabs-dark .nav-tabs li.active a:hover,
html.dark body .tabs-dark .nav-tabs li.active a:hover,
html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
html body .tabs-dark .nav-tabs li.active a:focus,
html.dark body .tabs-dark .nav-tabs li.active a:focus,
html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {
	border-top-color: #2e353e;
	color: #2e353e;
}

html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: #2e353e;
}

html body .tabs-dark.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {
	border-left-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,
html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {
	border-right-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,
html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: #2e353e;
}

html body .tabs-light .nav-tabs li a,
html.dark body .tabs-light .nav-tabs li a,
html body .tabs-light .nav-tabs.nav-justified li a,
html.dark body .tabs-light .nav-tabs.nav-justified li a,
html body .tabs-light .nav-tabs li a:hover,
html.dark body .tabs-light .nav-tabs li a:hover,
html body .tabs-light .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
	color: #ffffff;
}

html body .tabs-light .nav-tabs li a:hover,
html.dark body .tabs-light .nav-tabs li a:hover,
html body .tabs-light .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
	border-top-color: #ffffff;
}

html body .tabs-light .nav-tabs li.active a,
html.dark body .tabs-light .nav-tabs li.active a,
html body .tabs-light .nav-tabs.nav-justified li.active a,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a,
html body .tabs-light .nav-tabs li.active a:hover,
html.dark body .tabs-light .nav-tabs li.active a:hover,
html body .tabs-light .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,
html body .tabs-light .nav-tabs li.active a:focus,
html.dark body .tabs-light .nav-tabs li.active a:focus,
html body .tabs-light .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {
	border-top-color: #ffffff;
	color: #ffffff;
}

html body .tabs-light.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: #ffffff;
}

html body .tabs-light.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {
	border-left-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,
html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {
	border-right-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,
html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: #ffffff;
}

html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
	border-right-color: <?= $primary_color ?>;
	border-left-color: transparent;
}

html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
	border-right-color: transparent;
	border-left-color: <?= $primary_color ?>;
}

.list.list-icons li .fa,
.list.list-icons li .icons {
	color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?>;
}

.list.list-icons.list-icons-style-3 li .fa,
.list.list-icons.list-icons-style-3 li .icons {
	background-color: <?= $primary_color ?>;
}

.list.list-ordened li:before {
	color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?>;
}

.list.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
}

html .list-primary.list-icons li .fa,
html .list-primary.list-icons li .icons {
	color: <?= $primary_color ?>;
	border-color: <?= $primary_color ?>;
}

html .list-primary.list-icons.list-icons-style-3 li .fa,
html .list-primary.list-icons.list-icons-style-3 li .icons {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-primary.list-ordened li:before {
	color: <?= $primary_color ?>;
}

html .list-primary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-secondary.list-icons li .fa,
html .list-secondary.list-icons li .icons {
	color: <?php echo $skinOptions['secondary'] ?>;
	border-color: <?php echo $skinOptions['secondary'] ?>;
}

html .list-secondary.list-icons.list-icons-style-3 li .fa,
html .list-secondary.list-icons.list-icons-style-3 li .icons {
	background-color: <?php echo $skinOptions['secondary'] ?>;
	color: #ffffff;
}

html .list-secondary.list-ordened li:before {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .list-secondary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-tertiary.list-icons li .fa,
html .list-tertiary.list-icons li .icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
	border-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .list-tertiary.list-icons.list-icons-style-3 li .fa,
html .list-tertiary.list-icons.list-icons-style-3 li .icons {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	color: #ffffff;
}

html .list-tertiary.list-ordened li:before {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .list-tertiary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-quaternary.list-icons li .fa,
html .list-quaternary.list-icons li .icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
	border-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .list-quaternary.list-icons.list-icons-style-3 li .fa,
html .list-quaternary.list-icons.list-icons-style-3 li .icons {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	color: #ffffff;
}

html .list-quaternary.list-ordened li:before {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .list-quaternary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-dark.list-icons li .fa,
html .list-dark.list-icons li .icons {
	color: #2e353e;
	border-color: #2e353e;
}

html .list-dark.list-icons.list-icons-style-3 li .fa,
html .list-dark.list-icons.list-icons-style-3 li .icons {
	background-color: #2e353e;
	color: #ffffff;
}

html .list-dark.list-ordened li:before {
	color: #2e353e;
}

html .list-dark.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .list-light.list-icons li .fa,
html .list-light.list-icons li .icons {
	color: #ffffff;
	border-color: #ffffff;
}

html .list-light.list-icons.list-icons-style-3 li .fa,
html .list-light.list-icons.list-icons-style-3 li .icons {
	background-color: #ffffff;
	color: #777777;
}

html .list-light.list-ordened li:before {
	color: #ffffff;
}

html .list-light.list-ordened.list-ordened-style-3 li:before {
	background-color: <?= $primary_color ?>;
	color: #777777;
}

.parallax blockquote i.fa-quote-left {
	color: <?= $primary_color ?>;
}

section.video blockquote i.fa-quote-left {
	color: <?= $primary_color ?>;
}

.panel-group .panel-heading a {
	color: <?= $primary_color ?>;
}

html .panel-group.panel-group-primary .panel-heading {
	background-color: <?= $primary_color ?> !important;
}

html .panel-group.panel-group-primary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-secondary .panel-heading {
	background-color: <?php echo $skinOptions['secondary'] ?> !important;
}

html .panel-group.panel-group-secondary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-tertiary .panel-heading {
	background-color: <?php echo $skinOptions['tertiary'] ?> !important;
}

html .panel-group.panel-group-tertiary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-quaternary .panel-heading {
	background-color: <?php echo $skinOptions['quaternary'] ?> !important;
}

html .panel-group.panel-group-quaternary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-dark .panel-heading {
	background-color: #2e353e !important;
}

html .panel-group.panel-group-dark .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-light .panel-heading {
	background-color: #ffffff !important;
}

html .panel-group.panel-group-light .panel-heading a {
	color: #777777;
}

html .divider.divider-primary .fa,
html .divider.divider-primary .icons {
	color: <?= $primary_color ?>;
}

html .divider.divider-primary.divider-small hr {
	background: <?= $primary_color ?>;
}

html .divider.divider-secondary .fa,
html .divider.divider-secondary .icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .divider.divider-secondary.divider-small hr {
	background: <?php echo $skinOptions['secondary'] ?>;
}

html .divider.divider-tertiary .fa,
html .divider.divider-tertiary .icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .divider.divider-tertiary.divider-small hr {
	background: <?php echo $skinOptions['tertiary'] ?>;
}

html .divider.divider-quaternary .fa,
html .divider.divider-quaternary .icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .divider.divider-quaternary.divider-small hr {
	background: <?php echo $skinOptions['quaternary'] ?>;
}

html .divider.divider-dark .fa,
html .divider.divider-dark .icons {
	color: #2e353e;
}

html .divider.divider-dark.divider-small hr {
	background: #2e353e;
}

html .divider.divider-light .fa,
html .divider.divider-light .icons {
	color: #ffffff;
}

html .divider.divider-light.divider-small hr {
	background: #ffffff;
}

html .divider.divider-style-2.divider-primary .fa,
html .divider.divider-style-2.divider-primary .icons {
	background: <?= $primary_color ?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-secondary .fa,
html .divider.divider-style-2.divider-secondary .icons {
	background: <?php echo $skinOptions['secondary'] ?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-tertiary .fa,
html .divider.divider-style-2.divider-tertiary .icons {
	background: <?php echo $skinOptions['tertiary'] ?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-quaternary .fa,
html .divider.divider-style-2.divider-quaternary .icons {
	background: <?php echo $skinOptions['quaternary'] ?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-dark .fa,
html .divider.divider-style-2.divider-dark .icons {
	background: #2e353e;
	color: #ffffff;
}

html .divider.divider-style-2.divider-light .fa,
html .divider.divider-style-2.divider-light .icons {
	background: #ffffff;
	color: #777777;
}

html .divider.divider-style-3.divider-primary .fa,
html .divider.divider-style-3.divider-primary .icons {
	border-color: <?= $primary_color ?>;
}

html .divider.divider-style-3.divider-secondary .fa,
html .divider.divider-style-3.divider-secondary .icons {
	border-color: <?php echo $skinOptions['secondary'] ?>;
}

html .divider.divider-style-3.divider-tertiary .fa,
html .divider.divider-style-3.divider-tertiary .icons {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .divider.divider-style-3.divider-quaternary .fa,
html .divider.divider-style-3.divider-quaternary .icons {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .divider.divider-style-3.divider-dark .fa,
html .divider.divider-style-3.divider-dark .icons {
	border-color: #2e353e;
}

html .divider.divider-style-3.divider-light .fa,
html .divider.divider-style-3.divider-light .icons {
	border-color: #ffffff;
}

#header .tip {
	background: <?= $primary_color ?>;
	color: #ffffff;
}

#header .tip:before {
	border-right-color: <?= $primary_color ?>;
}

html #header .tip-primary {
	background: <?= $primary_color ?> !important;
	color: #ffffff !important;
}

html #header .tip-primary:before {
	border-right-color: <?= $primary_color ?> !important;
}

html #header .tip-secondary {
	background: <?php echo $skinOptions['secondary'] ?> !important;
	color: #ffffff !important;
}

html #header .tip-secondary:before {
	border-right-color: <?php echo $skinOptions['secondary'] ?> !important;
}

html #header .tip-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?> !important;
	color: #ffffff !important;
}

html #header .tip-tertiary:before {
	border-right-color: <?php echo $skinOptions['tertiary'] ?> !important;
}

html #header .tip-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?> !important;
	color: #ffffff !important;
}

html #header .tip-quaternary:before {
	border-right-color: <?php echo $skinOptions['quaternary'] ?> !important;
}

html #header .tip-dark {
	background: #2e353e !important;
	color: #ffffff !important;
}

html #header .tip-dark:before {
	border-right-color: #2e353e !important;
}

html #header .tip-light {
	background: #ffffff !important;
	color: #777777 !important;
}

html #header .tip-light:before {
	border-right-color: #ffffff !important;
}

html[dir="rtl"] #header .tip.skin:before {
	border-left-color: <?= $primary_color ?>;
}

#header .header-btn-collapse-nav {
	background: <?= $primary_color ?>;
}

@media (min-width: 992px) {
	#header .header-nav-main nav > ul > li.open > a,
	#header .header-nav-main nav > ul > li:hover > a {
		background: <?= $primary_color ?>;
	}

	#header .header-nav-main nav > ul > li.dropdown .dropdown-menu {
		border-top-color: <?= $primary_color ?>;
	}

	#header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent <?= $primary_color ?>;
	}

	#header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {
		color: <?= $primary_color ?>;
	}

	#header .header-nav.header-nav-stripe nav > ul > li:hover > a {
		background-color: <?= $primary_color ?>;
	}

	#header .header-nav.header-nav-top-line nav > ul li.active > a,
	#header .header-nav.header-nav-top-line nav > ul li:hover > a {
		color: <?= $primary_color ?>;
	}

	#header .header-nav.header-nav-top-line nav > ul li.active > a:before,
	#header .header-nav.header-nav-top-line nav > ul li:hover > a:before {
		background: <?= $primary_color ?>;
	}

	#header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,
	#header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {
		color: <?= $primary_color ?>;
	}
}

@media (min-width: 992px) {
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
		color: <?= $primary_color ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {
		background: <?= $primary_color ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {
		border-top-color: <?= $primary_color ?>;
		background-color: <?= $primary_color ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: <?= $link_hover_color ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {
		background: <?= $link_hover_color ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
		color: <?php echo $skinOptions['secondary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {
		background: <?php echo $skinOptions['secondary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {
		border-top-color: <?php echo $skinOptions['secondary'] ?>;
		background-color: <?php echo $skinOptions['secondary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #d34843;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {
		background: #d34843;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
		color: <?php echo $skinOptions['tertiary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {
		background: <?php echo $skinOptions['tertiary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {
		border-top-color: <?php echo $skinOptions['tertiary'] ?>;
		background-color: <?php echo $skinOptions['tertiary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #2491d7;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {
		background: #2491d7;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
		color: <?php echo $skinOptions['quaternary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {
		background: <?php echo $skinOptions['quaternary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {
		border-top-color: <?php echo $skinOptions['quaternary'] ?>;
		background-color: <?php echo $skinOptions['quaternary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #414141;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {
		background: #414141;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
		color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {
		background: #2e353e;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {
		border-top-color: #2e353e;
		background-color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #39424d;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {
		background: #39424d;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {
		background: #ffffff;
		color: #777777;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {
		border-top-color: #ffffff;
		background-color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {
		color: #777777;
		border-bottom-color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {
		background: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #777777;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {
		color: #777777;
		opacity: 0.70;
	}
}

@media (max-width: 991px) {
	#header .header-nav-main nav > ul > li > a,
	#header .header-nav-main nav > ul > li > a:focus,
	#header .header-nav-main nav > ul > li > a:hover {
		color: <?= $primary_color ?>;
	}

	#header .header-nav-main nav > ul > li.active > a,
	#header .header-nav-main nav > ul > li.active > a:focus,
	#header .header-nav-main nav > ul > li.active > a:hover {
		background-color: <?= $primary_color ?>;
	}
}

@media (max-width: 991px) {
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
		color: <?= $primary_color ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {
		background: <?= $primary_color ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
		color: <?php echo $skinOptions['secondary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {
		background: <?php echo $skinOptions['secondary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
		color: <?php echo $skinOptions['tertiary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {
		background: <?php echo $skinOptions['tertiary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
		color: <?php echo $skinOptions['quaternary'] ?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {
		background: <?php echo $skinOptions['quaternary'] ?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
		color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {
		background: #2e353e;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {
		background: #ffffff;
		color: #777777;
	}
} 

html #header .header-top.header-top-color { 
	<?php if(isset($topbar_bg)): ?>  
	background: <?= $topbar_bg ?>;	
	<?php endif ?>
	<?php if(isset($topbar_border)): ?>  
	border-top-color: <?= $topbar_border ?>;
	<?php endif ?> 	
} 

html #header .header-top.header-top-color p,
html #header .header-top.header-top-color span,
html #header .header-top.header-top-color p a{ 
	<?php if(isset($topbar_color)): ?> 	 
	color: <?= $topbar_color ?>;
	<?php endif ?> 		
} 
html #header .header-top.header-top-color .header-nav-top ul > li > a{
<?php if(isset($topbar_color)): ?> 
	color: <?= $topbar_color ?>;
	<?php endif ?>
}
html #header .header-top.header-top-color .header-nav-top ul > li.open > a,
html #header .header-top.header-top-color .header-nav-top ul > li > a:hover{
<?php if(isset($topbar_menu_bg)): ?> 
	background: <?= $topbar_menu_bg ?>; 
	<?php endif ?>
	<?php if(isset($topbar_menu_text_color)): ?> 
	color:<?= $topbar_menu_text_color ?> 
	<?php endif ?>
}

html #header .header-top.header-top-color .header-nav-top ul > li > a:hover { 
<?php if(isset($topbar_menu_text_color)): ?> 
	color:<?= $topbar_menu_text_color ?> 
	<?php endif ?>
}

html #header .header-top.header-top-color .dropdown-menu {
<?php if(isset($topbar_menu_bg)): ?>
	background: <?= $topbar_menu_bg ?>;
<?php endif ?>
<?php if(isset($topbar_menu_border)): ?>
	border-color: <?= $topbar_menu_border ?>;
<?php endif ?>
<?php if(isset($topbar_menu_text_color)): ?>
	color:<?= $topbar_menu_text_color ?> !important;
<?php endif ?>
}

html #header .header-top.header-top-color .dropdown-menu a{
	color:<?= $topbar_menu_text_color ?> !important;
}

html #header .header-top.header-top-color .dropdown-menu a:hover,
html #header .header-top.header-top-color .dropdown-menu a:focus {
<?php if(isset($topbar_menu_bg_hover)): ?>
	background: <?= $topbar_menu_bg_hover  ?> !important;
<?php endif ?>
<?php if(isset($topbar_color)): ?>
	color:<?= $topbar_color ?> !important;
<?php endif ?>
}


html #header .header-top.header-top-light {
	background: #ffffff;
	border-top-color: #f2f2f2;
}

html #header .header-top.header-top-light .header-nav-top ul > li.open > a {
	background: #ffffff;
}

html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {
	background: #ffffff;
}

html #header .header-top.header-top-light .dropdown-menu {
	background: #ffffff;
	border-color: #ffffff;
}

html #header .header-top.header-top-light .dropdown-menu a:hover,
html #header .header-top.header-top-light .dropdown-menu a:focus {
	background: #ffffff !important;
}

@media (min-width: 992px) {
	html #header .header-nav-bar-primary {
		background: <?= $primary_color ?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-secondary {
		background: <?php echo $skinOptions['secondary'] ?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-tertiary {
		background: <?php echo $skinOptions['tertiary'] ?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-quaternary {
		background: <?php echo $skinOptions['quaternary'] ?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-dark {
		background: #2e353e !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-light {
		background: #ffffff !important;
		color: #777777 !important;
	}
}

@media (min-width: 992px) {
	#header .header-nav-main-light nav > ul > li.dropdown:hover > a {
		color: <?= $primary_color ?>;
	}

	#header .header-nav-main-light nav > ul > li.active > a {
		color: <?= $primary_color ?>;
	}
}

.testimonial blockquote {
	background: <?= $link_hover_color ?>;
}

.testimonial .testimonial-arrow-down {
	border-top-color: <?= $link_hover_color ?>;
}

html .testimonial-primary blockquote {
	background: <?= $link_hover_color ?>;
}

html .testimonial-primary .testimonial-arrow-down {
	border-top-color: <?= $link_hover_color ?>;
}

html .testimonial-secondary blockquote {
	background: #d34843;
}

html .testimonial-secondary .testimonial-arrow-down {
	border-top-color: #d34843;
}

html .testimonial-tertiary blockquote {
	background: #2491d7;
}

html .testimonial-tertiary .testimonial-arrow-down {
	border-top-color: #2491d7;
}

html .testimonial-quaternary blockquote {
	background: #414141;
}

html .testimonial-quaternary .testimonial-arrow-down {
	border-top-color: #414141;
}

html .testimonial-dark blockquote {
	background: #39424d;
}

html .testimonial-dark .testimonial-arrow-down {
	border-top-color: #39424d;
}

html .testimonial-light blockquote {
	background: #ffffff;
}

html .testimonial-light .testimonial-arrow-down {
	border-top-color: #ffffff;
}

.circular-bar.only-icon .fa,
.circular-bar.only-icon .icons {
	color: <?= $primary_color ?>;
}

html .counters .counter-primary .fa,
html .counters .counter-primary .icons,
html .counters .counter-primary strong {
	color: <?= $primary_color ?>;
}

html .counters .counter-secondary .fa,
html .counters .counter-secondary .icons,
html .counters .counter-secondary strong {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .counters .counter-tertiary .fa,
html .counters .counter-tertiary .icons,
html .counters .counter-tertiary strong {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .counters .counter-quaternary .fa,
html .counters .counter-quaternary .icons,
html .counters .counter-quaternary strong {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .counters .counter-dark .fa,
html .counters .counter-dark .icons,
html .counters .counter-dark strong {
	color: #2e353e;
}

html .counters .counter-light .fa,
html .counters .counter-light .icons,
html .counters .counter-light strong {
	color: #ffffff;
}

.icon-featured {
	background-color: <?= $primary_color ?>;
}

.featured-box-primary .icon-featured {
	background-color: <?= $primary_color ?>;
}

.featured-box-primary .icon-featured:after {
	border-color: <?= $primary_color ?>;
}

.featured-box-primary h4 {
	color: <?= $primary_color ?>;
}

.featured-box-primary .box-content {
	border-top-color: <?= $primary_color ?>;
}

html .featured-box-primary .icon-featured {
	background-color: <?= $primary_color ?>;
}

html .featured-box-primary h4 {
	color: <?= $primary_color ?>;
}

html .featured-box-primary .box-content {
	border-top-color: <?= $primary_color ?>;
}

html .featured-box-secondary .icon-featured {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-box-secondary h4 {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-box-secondary .box-content {
	border-top-color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-box-tertiary .icon-featured {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-box-tertiary h4 {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-box-tertiary .box-content {
	border-top-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-box-quaternary .icon-featured {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-box-quaternary h4 {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-box-quaternary .box-content {
	border-top-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-box-dark .icon-featured {
	background-color: #2e353e;
}

html .featured-box-dark h4 {
	color: #2e353e;
}

html .featured-box-dark .box-content {
	border-top-color: #2e353e;
}

html .featured-box-light .icon-featured {
	background-color: #ffffff;
}

html .featured-box-light h4 {
	color: #ffffff;
}

html .featured-box-light .box-content {
	border-top-color: #ffffff;
}

html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {
	border-color: <?= $primary_color ?>;
	color: <?= $primary_color ?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {
	border-color: <?php echo $skinOptions['secondary'] ?>;
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {
	border-color: #2e353e;
	color: #2e353e;
}

html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {
	border-color: #ffffff;
	color: #ffffff;
}

html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {
	border-color: <?= $primary_color ?>;
	color: <?= $primary_color ?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {
	border-color: <?php echo $skinOptions['secondary'] ?>;
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {
	border-color: #2e353e;
	color: #2e353e;
}

html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {
	border-color: #ffffff;
	color: #ffffff;
}

html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {
	color: <?= $primary_color ?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {
	color: <?= $primary_color ?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {
	color: <?= $primary_color ?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-box-effect-2.featured-box-primary .icon-featured:after {
	box-shadow: 0 0 0 3px <?= $primary_color ?>;
}

html .featured-box-effect-2.featured-box-secondary .icon-featured:after {
	box-shadow: 0 0 0 3px <?php echo $skinOptions['secondary'] ?>;
}

html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {
	box-shadow: 0 0 0 3px <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {
	box-shadow: 0 0 0 3px <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-box-effect-2.featured-box-dark .icon-featured:after {
	box-shadow: 0 0 0 3px #2e353e;
}

html .featured-box-effect-2.featured-box-light .icon-featured:after {
	box-shadow: 0 0 0 3px #ffffff;
}

html .featured-box-effect-3.featured-box-primary .icon-featured:after {
	box-shadow: 0 0 0 10px <?= $primary_color ?>;
}

html .featured-box-effect-3.featured-box-primary:hover .icon-featured {
	background: <?= $primary_color ?> !important;
}

html .featured-box-effect-3.featured-box-secondary .icon-featured:after {
	box-shadow: 0 0 0 10px <?php echo $skinOptions['secondary'] ?>;
}

html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
	background: <?php echo $skinOptions['secondary'] ?> !important;
}

html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {
	box-shadow: 0 0 0 10px <?php echo $skinOptions['tertiary'] ?>;
}

html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {
	background: <?php echo $skinOptions['tertiary'] ?> !important;
}

html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {
	box-shadow: 0 0 0 10px <?php echo $skinOptions['quaternary'] ?>;
}

html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {
	background: <?php echo $skinOptions['quaternary'] ?> !important;
}

html .featured-box-effect-3.featured-box-dark .icon-featured:after {
	box-shadow: 0 0 0 10px #2e353e;
}

html .featured-box-effect-3.featured-box-dark:hover .icon-featured {
	background: #2e353e !important;
}

html .featured-box-effect-3.featured-box-light .icon-featured:after {
	box-shadow: 0 0 0 10px #ffffff;
}

html .featured-box-effect-3.featured-box-light:hover .icon-featured {
	background: #ffffff !important;
}

.feature-box .feature-box-icon {
	background-color: <?= $primary_color ?>;
}

html .feature-box-primary .feature-box-icon {
	background-color: <?= $primary_color ?>;
}

html .feature-box-secondary .feature-box-icon {
	background-color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary .feature-box-icon {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary .feature-box-icon {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark .feature-box-icon {
	background-color: #2e353e;
}

html .feature-box-light .feature-box-icon {
	background-color: #ffffff;
}

.feature-box.feature-box-style-2 .feature-box-icon i.fa,
.feature-box.feature-box-style-2 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-3 .feature-box-icon {
	border-color: <?= $primary_color ?>;
}

.feature-box.feature-box-style-3 .feature-box-icon i.fa,
.feature-box.feature-box-style-3 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-primary.feature-box-style-3 .feature-box-icon {
	border-color: <?= $primary_color ?>;
}

html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-secondary.feature-box-style-3 .feature-box-icon {
	border-color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark.feature-box-style-3 .feature-box-icon {
	border-color: #2e353e;
}

html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-3 .feature-box-icon {
	border-color: #ffffff;
}

html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-4 .feature-box-icon i.fa,
.feature-box.feature-box-style-4 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {
	color: <?= $primary_color ?>;
}

html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-5 .feature-box-icon i.fa,
.feature-box.feature-box-style-5 .feature-box-icon i.icons {
	color: <?= $primary_color ?>;
}

html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?= $primary_color ?>;
}

html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {
	color: #ffffff;
}

html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?= $primary_color ?>;
}

html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['secondary'] ?>;
}

html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['tertiary'] ?>;
}

html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?php echo $skinOptions['quaternary'] ?>;
}

html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {
	color: #ffffff;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(1) .featured-box-full-primary {
	background-color: <?php echo $skinOptions['border_bottom_color'] ?>;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(2) .featured-box-full-primary {
	background-color: <?= $link_hover_color ?>;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(3) .featured-box-full-primary {
	background-color: <?= $primary_color ?>;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(4) .featured-box-full-primary {
	background-color: <?= $link_hover_color ?>;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(5) .featured-box-full-primary {
	background-color: #f78a87;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(6) .featured-box-full-primary {
	background-color: #f9a29f;
}

html .featured-boxes-full .featured-box-full-primary {
	background-color: <?= $primary_color ?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-secondary {
	background-color: <?php echo $skinOptions['secondary'] ?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-tertiary {
	background-color: <?php echo $skinOptions['tertiary'] ?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-quaternary {
	background-color: <?php echo $skinOptions['quaternary'] ?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-dark {
	background-color: #2e353e;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-light {
	background-color: #ffffff;
	color: #777777;
}

.pricing-table .most-popular {
	border-color: <?= $primary_color ?>;
}

.pricing-table .most-popular h3 {
	background-color: <?= $primary_color ?> !important;
}

.pricing-table.princig-table-flat .plan h3 {
	background-color: <?= $primary_color ?>;
}

.pricing-table.princig-table-flat .plan h3 span {
	background: <?= $primary_color ?>;
}

html .call-to-action.featured.featured-primary {
	border-top-color: <?= $primary_color ?>;
}

html .call-to-action.call-to-action-primary {
	background: <?= $primary_color ?>;
}

html .call-to-action.with-full-borders {
	border-color: <?= $primary_color ?>;
}

html .call-to-action.call-to-action-primary {
	background: <?= $primary_color ?>;
}

html .call-to-action.call-to-action-primary h3,
html .call-to-action.call-to-action-primary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-secondary {
	border-top-color: <?php echo $skinOptions['secondary'] ?>;
}

html .call-to-action.call-to-action-secondary {
	background: <?php echo $skinOptions['secondary'] ?>;
}

html .call-to-action.with-full-borders {
	border-color: <?php echo $skinOptions['secondary'] ?>;
}

html .call-to-action.call-to-action-secondary {
	background: <?php echo $skinOptions['secondary'] ?>;
}

html .call-to-action.call-to-action-secondary h3,
html .call-to-action.call-to-action-secondary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-tertiary {
	border-top-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .call-to-action.call-to-action-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?>;
}

html .call-to-action.with-full-borders {
	border-color: <?php echo $skinOptions['tertiary'] ?>;
}

html .call-to-action.call-to-action-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?>;
}

html .call-to-action.call-to-action-tertiary h3,
html .call-to-action.call-to-action-tertiary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-quaternary {
	border-top-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .call-to-action.call-to-action-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?>;
}

html .call-to-action.with-full-borders {
	border-color: <?php echo $skinOptions['quaternary'] ?>;
}

html .call-to-action.call-to-action-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?>;
}

html .call-to-action.call-to-action-quaternary h3,
html .call-to-action.call-to-action-quaternary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-dark {
	border-top-color: #2e353e;
}

html .call-to-action.call-to-action-dark {
	background: #2e353e;
}

html .call-to-action.with-full-borders {
	border-color: #2e353e;
}

html .call-to-action.call-to-action-dark {
	background: #2e353e;
}

html .call-to-action.call-to-action-dark h3,
html .call-to-action.call-to-action-dark p {
	color: #ffffff;
}

html .call-to-action.featured.featured-light {
	border-top-color: #ffffff;
}

html .call-to-action.call-to-action-light {
	background: #ffffff;
}

html .call-to-action.with-full-borders {
	border-color: #ffffff;
}

html .call-to-action.call-to-action-light {
	background: #ffffff;
}

html .call-to-action.call-to-action-light h3,
html .call-to-action.call-to-action-light p {
	color: #777777;
}

section.timeline .timeline-box.left:before,
section.timeline .timeline-box.right:before {
	background: <?= $primary_color ?>;
	box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px <?= $primary_color ?>;
}

ul.history li .featured-box .box-content {
	border-top-color: <?= $primary_color ?>;
}

.recent-posts .date .month,
article.post .post-date .month {
	background-color: <?= $primary_color ?>;
}

.recent-posts .date .day,
article.post .post-date .day {
	color: <?= $primary_color ?>;
}

.slider .tp-bannertimer {
	background-color: <?= $primary_color ?>;
}

.home-concept strong {
	color: <?= $primary_color ?>;
}

html .home-intro-primary {
	background: <?= $primary_color ?>;
}

html .home-intro-secondary {
	background: <?php echo $skinOptions['secondary'] ?>;
}

html .home-intro-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?>;
}

html .home-intro-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?>;
}

html .home-intro-dark {
	background: #2e353e;
}

html .home-intro-light {
	background: #ffffff;
}

.home-intro p em {
	color: #f78a87;
}

html .slider-container .tp-caption-overlay-primary {
	background: <?= $primary_color ?>;
}

html .slider-container .tp-caption-overlay-opacity-primary {
	background: rgba(244, 92, 87, 0.4);
}

html .slider-container .tp-caption-overlay-secondary {
	background: <?php echo $skinOptions['secondary'] ?>;
}

html .slider-container .tp-caption-overlay-opacity-secondary {
	background: rgba(205, 53, 48, 0.4);
}

html .slider-container .tp-caption-overlay-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?>;
}

html .slider-container .tp-caption-overlay-opacity-tertiary {
	background: rgba(32, 130, 193, 0.4);
}

html .slider-container .tp-caption-overlay-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?>;
}

html .slider-container .tp-caption-overlay-opacity-quaternary {
	background: rgba(52, 52, 52, 0.4);
}

html .slider-container .tp-caption-overlay-dark {
	background: #2e353e;
}

html .slider-container .tp-caption-overlay-opacity-dark {
	background: rgba(46, 53, 62, 0.4);
}

html .slider-container .tp-caption-overlay-light {
	background: #ffffff;
}

html .slider-container .tp-caption-overlay-opacity-light {
	background: rgba(255, 255, 255, 0.4);
}

.shop ul.products li.product .onsale {
	background-color: <?= $primary_color ?>;
	border-bottom-color: #f13731;
}

.shop .star-rating span,
.shop .cart-totals tr.total .amount {
	color: <?= $primary_color ?>;
}

#footer .footer-ribbon {
	background: <?= $primary_color ?>;
}

#footer .footer-ribbon:before {
	border-right-color: <?= $link_hover_color ?>;
	border-left-color: <?= $link_hover_color ?>;
}

#footer.light h1,
#footer.light h2,
#footer.light h3,
#footer.light h4,
#footer.light a {
	color: <?= $primary_color ?>;
}

#footer.color {
	background: <?= $primary_color ?>;
	border-top-color: <?= $primary_color ?>;
}

#footer.color .footer-ribbon {
	background: <?php echo $skinOptions['border_bottom_color'] ?>;
}

#footer.color .footer-ribbon:before {
	border-right-color: #bf120d;
}

#footer.color .footer-copyright {
	background: <?= $link_hover_color ?>;
	border-top-color: <?= $link_hover_color ?>;
}

html #footer.color-primary {
	background: <?= $primary_color ?>;
	border-top-color: <?= $primary_color ?>;
}

html #footer.color-primary .footer-ribbon {
	background: <?php echo $skinOptions['border_bottom_color'] ?>;
}

html #footer.color-primary .footer-ribbon:before {
	border-right-color: #bf120d;
}

html #footer.color-primary .footer-copyright {
	background: <?= $link_hover_color ?>;
	border-top-color: <?= $link_hover_color ?>;
}

html #footer.color-secondary {
	background: <?php echo $skinOptions['secondary'] ?>;
	border-top-color: <?php echo $skinOptions['secondary'] ?>;
}

html #footer.color-secondary .footer-ribbon {
	background: #a42a26;
}

html #footer.color-secondary .footer-ribbon:before {
	border-right-color: #661a18;
}

html #footer.color-secondary .footer-copyright {
	background: #b8302b;
	border-top-color: #b8302b;
}

html #footer.color-tertiary {
	background: <?php echo $skinOptions['tertiary'] ?>;
	border-top-color: <?php echo $skinOptions['tertiary'] ?>;
}

html #footer.color-tertiary .footer-ribbon {
	background: #196595;
}

html #footer.color-tertiary .footer-ribbon:before {
	border-right-color: #0e3854;
}

html #footer.color-tertiary .footer-copyright {
	background: #1c73ab;
	border-top-color: #1c73ab;
}

html #footer.color-quaternary {
	background: <?php echo $skinOptions['quaternary'] ?>;
	border-top-color: <?php echo $skinOptions['quaternary'] ?>;
}

html #footer.color-quaternary .footer-ribbon {
	background: #1a1a1a;
}

html #footer.color-quaternary .footer-ribbon:before {
	border-right-color: #000000;
}

html #footer.color-quaternary .footer-copyright {
	background: #272727;
	border-top-color: #272727;
}

html #footer.color-dark {
	background: #2e353e;
	border-top-color: #2e353e;
}

html #footer.color-dark .footer-ribbon {
	background: #181c21;
}

html #footer.color-dark .footer-ribbon:before {
	border-right-color: #000000;
}

html #footer.color-dark .footer-copyright {
	background: #23282f;
	border-top-color: #23282f;
}

html #footer.color-light {
	background: #ffffff;
	border-top-color: #ffffff;
}

html #footer.color-light .footer-ribbon {
	background: #e6e6e6;
}

html #footer.color-light .footer-ribbon:before {
	border-right-color: #bfbfbf;
}

html #footer.color-light .footer-copyright {
	background: #f2f2f2;
	border-top-color: #f2f2f2;
}

.sample-icon-list .sample-icon a:hover {
	background-color: <?= $primary_color ?>;
}

html.boxed .body {
	border-top-color: <?= $primary_color ?>;
}
<?php if($border_radius == 'disable' || $border_radius == 'custom'): ?>
.img-rounded,
.img-thumbnail,
.img-thumbnail img,
code,
pre,
.form-control,
.input-sm,
.form-group-sm .form-control,
.input-lg,
.form-group-lg .form-control,
.btn,
.btn-group-lg > .btn,
.btn-sm,
.btn-group-sm > .btn,
.btn-xs,
.btn-group-xs > .btn,
.dropdown-menu,
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn,
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn,
.input-group-addon,
.input-group-addon.input-sm,
.input-group-addon.input-lg,
.nav-tabs > li > a,
.nav-tabs.nav-justified > li > a,
.nav-pills > li > a,
.nav-tabs-justified > li > a,
.navbar,
.navbar-toggle,
.navbar-toggle .icon-bar,
.breadcrumb,
.pagination,
.pager li > a,
.pager li > span,
.label,
.badge,
.container .jumbotron,
.container-fluid .jumbotron,
.thumbnail,
.alert,
.progress,
.panel,
.panel-group .panel,
.well,
.well-lg,
.well-sm,
.modal-content,
.tooltip-inner,
.popover,
.popover-title,
.carousel-indicators li,
.pagination > li:first-child > a,
.pagination > li:first-child > span,
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span,
.pagination > li:last-child > a,
.pagination > li:last-child > span,
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
	border-radius: <?php echo $border_radius == "custom" ? $border_radius_custom : 0 ?>px;
}

@media (min-width: 768px) {
	.nav-tabs.nav-justified > li > a,
	.nav-tabs-justified > li > a,
	.navbar {
		border-radius: <?php echo $border_radius == "custom" ? $border_radius_custom : 0 ?>px;
	}
}

#header .header-search .form-control,
#header .header-nav-main nav > ul > li > a,
#header .header-nav-main nav > ul > li.dropdown .dropdown-menu,
#header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > .dropdown-menu,
#header .header-nav-main nav > ul > li.dropdown-mega > .dropdown-menu,
#header .header-nav-main nav > ul > li.dropdown-mega .dropdown-mega-sub-nav > li > a,
#header.header-transparent .header-nav-main,
#header.header-semi-transparent .header-nav-main,
#header.header-semi-transparent-light .header-nav-main,
#header .header-nav-main nav > ul > li.dropdown-mega.dropdown-mega-signin .dropdown-menu,
.slider-container .tparrows,
.nivo-slider .theme-default .nivoSlider,
.nivo-slider .theme-default .nivoSlider img,
.home-intro-compact,
html.dark #header,
html.boxed .body,
blockquote.with-borders,
p.drop-caps.drop-caps-style-2:first-child:first-letter,
.btn-3d,
select,
.captcha-refresh,
.featured-icon,
.panel-group .panel-heading,
.tabs,
.nav-tabs li a,
.tab-content,
.tabs.tabs-bottom .tab-content,
.tabs.tabs-bottom .nav-tabs li a,
.tabs-left .tab-content,
.tabs-left .nav-tabs > li:first-child a,
.tabs-left .nav-tabs > li:last-child a,
.tabs-right .tab-content,
.tabs-right .nav-tabs > li:first-child a,
.tabs-right .nav-tabs > li:last-child a,
.nav-tabs.nav-justified li:first-child a,
.nav-tabs.nav-justified li:first-child a:hover,
.nav-tabs.nav-justified li:last-child a,
.nav-tabs.nav-justified li:last-child a:hover,
.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:first-child a,
.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a,
.tabs-navigation,
.tabs-navigation .nav-tabs > li:first-child a,
.tabs-navigation .nav-tabs > li:last-child a,
.toggle > label,
.toggle.toggle-simple .toggle > label,
.toggle.toggle-simple .toggle > label:after,
.owl-carousel .owl-nav [class*="owl-"],
.owl-carousel.rounded-nav .owl-nav [class*="owl-"],
.owl-carousel.rounded-nav .owl-nav [class*="owl-"]:hover,
.owl-carousel.full-width .owl-nav .owl-prev,
.owl-carousel.big-nav .owl-nav .owl-prev,
.owl-carousel.full-width .owl-nav .owl-next,
.owl-carousel.big-nav .owl-nav .owl-next,
.embed-responsive.embed-responsive-borders,
.pricing-table h3,
.pricing-table .plan,
.featured-box,
.featured-box .box-content,
.thumb-info,
.thumb-info .thumb-info-wrapper,
.thumb-info .thumb-info-wrapper:after,
.thumb-info .thumb-info-type,
.thumb-info img,
section.timeline .timeline-date,
section.timeline .timeline-box,
.testimonial blockquote,
.testimonial.testimonial-style-2 blockquote,
.testimonial.testimonial-style-3 blockquote,
.testimonial.testimonial-style-4,
.testimonial.testimonial-style-4 blockquote,
.testimonial.testimonial-style-5 blockquote,
.testimonial.testimonial-style-6 blockquote,
.container .call-to-action,
.progress,
.progress.progress-border-radius,
.progress.progress-border-radius .progress-bar,
.progress-bar,
.progress-bar-tooltip,
.counters.with-borders .counter,
html .scroll-to-top,
.google-map.small,
.google-map-borders,
article.post .post-date .month,
article.post .post-date .day,
article .post-video,
article .post-audio,
ul.comments .comment-block,
.recent-posts .date .month,
#header nav.mega-menu .mega-menu-shop .dropdown-menu,
.shop ul.products .product .add-to-cart-product,
.product-info,
.product-info img,
.product-info + .product-info,
.img-thumbnail.img-thumbnail-hover-icon:before,
.product-thumb-info {
	border-radius: <?php echo $border_radius == "custom" ? $border_radius_custom : 0 ?>px;
}

@media (max-width: 479px) {
	.tabs .nav.nav-tabs.nav-justified li:first-child a,
	.tabs .nav.nav-tabs.nav-justified li:first-child a:hover,
	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a,
	.tabs.tabs-bottom .nav.nav-tabs.nav-justified li:last-child a:hover {
		border-radius: <?php echo $border_radius == "custom" ? $border_radius_custom : 0 ?>px;
	}
}

@media (min-width: 992px) {
	#header nav.mega-menu ul.nav-main li.mega-menu-item ul.sub-menu a,
	#header nav.mega-menu ul.nav-main li.mega-menu-fullwidth ul.dropdown-menu,
	#header.flat-menu nav.mega-menu ul.nav-main li.mega-menu-fullwidth ul.dropdown-menu,
	#header.flat-menu nav ul.nav-main li a,
	html.boxed #header.flat-menu .header-top {
		border-radius: <?php echo $border_radius == "custom" ? $border_radius_custom : 0 ?>px;
	}
}
<?php endif ?>