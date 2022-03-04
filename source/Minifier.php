<?php

/**
 * FONT
 */
$fontsCss = new MatthiasMullie\Minify\CSS();
$fontsCss->add(dirname(__DIR__, 1) . "/assets/css/fonts.css");
$fontsCss->minify(dirname(__DIR__, 1) . "/assets/css/fonts.min.css");

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * CSS PAGES
 */
$pagesCss = new MatthiasMullie\Minify\CSS();
$pagesCss->add(dirname(__DIR__, 1) . "/assets/css/style-pages.css");
$pagesCss->minify(dirname(__DIR__, 1) . "/assets/css/style-pages.min.css");

/**
 * CSS SINGLE
 */
$singleCss = new MatthiasMullie\Minify\CSS();
$singleCss->add(dirname(__DIR__, 1) . "/assets/css/style-single.css");
$singleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-single.min.css");

/**
 * 404
 */
$errorCss = new MatthiasMullie\Minify\CSS();
$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");

/**
 * HOME
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * PAGES
 */
$pagesJs = new MatthiasMullie\Minify\JS();
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/toggle.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/scroll.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/gallery.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$pagesJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$pagesJs->minify(dirname(__DIR__, 1) . "/assets/js/script-pages.min.js");

/**
 * Error
 */
$errorJs = new MatthiasMullie\Minify\JS();
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/menu.js");
$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/functions/sticky.js");
$errorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-error.min.js");