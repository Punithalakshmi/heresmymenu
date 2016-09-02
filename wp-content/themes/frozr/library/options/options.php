<?php
/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @package Frozr
 * @subpackage Frozr_Customize
 */


function register ( $wp_customize ) {
	//Array
	$menu_display_style = array('showleftov' => 'Show left - Overlay','showleftre' => 'Show left - Reveal','showleftpu' => 'Show left - Push','showrightov' => 'show right - Overlay','showrightre' => 'Show right - Reveal','showrightpu' => 'Show right - Push'		);
	$submenu_animations_array = array('1' => __('Standard', 'frozr' ),'2' => __('Blind', 'frozr' ),'3' => __('Bounce', 'frozr' ),'4' => __('Fan', 'frozr' ),'5' => __('Fence', 'frozr' ),'6' => __('Fly', 'frozr' ),'7' => __('Helix', 'frozr' ),'8' => __('Jaws', 'frozr' ),'9' => __('Papercut', 'frozr' ),'10' => __('Pop', 'frozr' ),'11' => __('Radial', 'frozr' ),'12' => __('Shield', 'frozr' ),'13' => __('Venitian', 'frozr' ),'14' => __('Wave', 'frozr' ),'15' => __('Winding', 'frozr' ),'16' => __('Zipper', 'frozr' )
	);
	$box_icon_array = array ('none' => __('No Icon', 'frozr' ),'fs-icon-glass' => __('glass', 'frozr' ),'fs-icon-music' => __('music', 'frozr' ),'fs-icon-search' => __('search', 'frozr' ),'fs-icon-envelope-o' => __('envelope', 'frozr' ),'fs-icon-heart' => __('heart', 'frozr' ),'fs-icon-star' => __('star', 'frozr' ),'fs-icon-star-o' => __('star empty', 'frozr' ),'fs-icon-user' => __('user', 'frozr' ),'fs-icon-film' => __('film', 'frozr' ),'fs-icon-th-large' => __('th-large', 'frozr' ),'fs-icon-th' => __('th', 'frozr' ),'fs-icon-th-list' => __('th-list', 'frozr' ),'fs-icon-check' => __('check', 'frozr' ),'fs-icon-remove' => __('remove', 'frozr' ),'fs-icon-close' => __('close', 'frozr' ),'fs-icon-times' => __('times', 'frozr' ),'fs-icon-search-plus' => __('search-plus', 'frozr' ),'fs-icon-search-minus' => __('search-minus', 'frozr' ),'fs-icon-power-off' => __('power-off', 'frozr' ),'fs-icon-signal' => __('signal', 'frozr' ),'fs-icon-gear' => __('gear', 'frozr' ),'fs-icon-cog' => __('cog', 'frozr' ),'fs-icon-trash-o' => __('trash', 'frozr' ),'fs-icon-home' => __('home', 'frozr' ),'fs-icon-file-o' => __('file', 'frozr' ),'fs-icon-clock-o' => __('clock', 'frozr' ),'fs-icon-road' => __('road', 'frozr' ),'fs-icon-download' => __('download', 'frozr' ),'fs-icon-arrow-circle-o-down' => __('circle down', 'frozr' ),'fs-icon-arrow-circle-o-up' => __('circle up', 'frozr' ),'fs-icon-inbox' => __('inbox', 'frozr' ),'fs-icon-play-circle-o' => __('circle', 'frozr' ),'fs-icon-rotate-right' => __('rotate right', 'frozr' ),'fs-icon-repeat' => __('repeat', 'frozr' ),'fs-icon-refresh' => __('refresh', 'frozr' ),'fs-icon-list-alt' => __('list-alt', 'frozr' ),'fs-icon-lock' => __('lock', 'frozr' ),'fs-icon-flag' => __('flag', 'frozr' ),'fs-icon-headphones' => __('headphones', 'frozr' ),'fs-icon-volume-off' => __('volume-off', 'frozr' ),'fs-icon-volume-down' => __('volume-down', 'frozr' ),'fs-icon-volume-up' => __('volume-up', 'frozr' ),'fs-icon-qrcode' => __('qrcode', 'frozr' ),'fs-icon-barcode' => __('barcode', 'frozr' ),'fs-icon-tag' => __('tag', 'frozr' ),'fs-icon-tags' => __('tags', 'frozr' ),'fs-icon-book' => __('book', 'frozr' ),'fs-icon-bookmark' => __('bookmark', 'frozr' ),'fs-icon-print' => __('print', 'frozr' ),'fs-icon-camera' => __('camera', 'frozr' ),'fs-icon-font' => __('font', 'frozr' ),'fs-icon-bold' => __('bold', 'frozr' ),'fs-icon-italic' => __('italic', 'frozr' ),'fs-icon-text-height' => __('text-height', 'frozr' ),'fs-icon-text-width' => __('text-width', 'frozr' ),'fs-icon-align-left' => __('align-left', 'frozr' ),'fs-icon-align-center' => __('align-center', 'frozr' ),'fs-icon-align-right' => __('align-right', 'frozr' ),'fs-icon-align-justify' => __('align-justify', 'frozr' ),'fs-icon-list' => __('list', 'frozr' ),'fs-icon-dedent' => __('dedent', 'frozr' ),'fs-icon-outdent' => __('outdent', 'frozr' ),'fs-icon-indent' => __('indent', 'frozr' ),'fs-icon-video-camera' => __('video-camera', 'frozr' ),'fs-icon-photo' => __('photo', 'frozr' ),'fs-icon-image' => __('image', 'frozr' ),'fs-icon-picture-o' => __('picture', 'frozr' ),'fs-icon-pencil' => __('pencil', 'frozr' ),'fs-icon-map-marker' => __('map-marker', 'frozr' ),'fs-icon-adjust' => __('adjust', 'frozr' ),'fs-icon-tint' => __('tint', 'frozr' ),'fs-icon-edit' => __('edit', 'frozr' ),'fs-icon-pencil-square-o' => __('pencil-square', 'frozr' ),'fs-icon-share-square-o' => __('share-square', 'frozr' ),'fs-icon-check-square-o' => __('check-square', 'frozr' ),'fs-icon-arrows' => __('arrows', 'frozr' ),'fs-icon-step-backward' => __('step-backward', 'frozr' ),'fs-icon-fast-backward' => __('fast-backward', 'frozr' ),'fs-icon-backward' => __('backward', 'frozr' ),'fs-icon-play' => __('play', 'frozr' ),'fs-icon-pause' => __('pause', 'frozr' ),'fs-icon-stop' => __('stop', 'frozr' ),'fs-icon-forward' => __('forward', 'frozr' ),'fs-icon-fast-forward' => __('fast-forward', 'frozr' ),'fs-icon-step-forward' => __('step-forward', 'frozr' ),'fs-icon-eject' => __('eject', 'frozr' ),'fs-icon-chevron-left' => __('chevron-left', 'frozr' ),'fs-icon-chevron-right' => __('chevron-right', 'frozr' ),'fs-icon-plus-circle' => __('plus-circle', 'frozr' ),'fs-icon-minus-circle' => __('minus-circle', 'frozr' ),'fs-icon-times-circle' => __('times-circle', 'frozr' ),'fs-icon-check-circle' => __('check-circle', 'frozr' ),'fs-icon-question-circle' => __('question-circle', 'frozr' ),'fs-icon-info-circle' => __('info-circle', 'frozr' ),'fs-icon-crosshairs' => __('crosshairs', 'frozr' ),'fs-icon-times-circle-o' => __('times-circle', 'frozr' ),'fs-icon-check-circle-o' => __('check-circle', 'frozr' ),'fs-icon-ban' => __('ban', 'frozr' ),'fs-icon-arrow-left' => __('arrow-left', 'frozr' ),'fs-icon-arrow-right' => __('arrow-right', 'frozr' ),'fs-icon-arrow-up' => __('arrow-up', 'frozr' ),'fs-icon-arrow-down' => __('arrow-down', 'frozr' ),'fs-icon-mail-forward' => __('mail-forward', 'frozr' ),'fs-icon-share' => __('share', 'frozr' ),'fs-icon-expand' => __('expand', 'frozr' ),'fs-icon-compress' => __('compress', 'frozr' ),'fs-icon-plus' => __('plus', 'frozr' ),'fs-icon-minus' => __('minus', 'frozr' ),'fs-icon-asterisk' => __('asterisk', 'frozr' ),'fs-icon-exclamation-circle' => __('exclamation-circle', 'frozr' ),'fs-icon-gift' => __('gift', 'frozr' ),'fs-icon-leaf' => __('leaf', 'frozr' ),'fs-icon-fire' => __('fire', 'frozr' ),'fs-icon-eye' => __('eye', 'frozr' ),'fs-icon-eye-slash' => __('eye-slash', 'frozr' ),'fs-icon-warning' => __('warning', 'frozr' ),'fs-icon-exclamation-triangle' => __('exclamation-triangle', 'frozr' ),'fs-icon-plane' => __('plane', 'frozr' ),'fs-icon-calendar' => __('calendar', 'frozr' ),'fs-icon-random' => __('random', 'frozr' ),'fs-icon-comment' => __('comment', 'frozr' ),'fs-icon-magnet' => __('magnet', 'frozr' ),'fs-icon-chevron-up' => __('chevron-up', 'frozr' ),'fs-icon-chevron-down' => __('chevron-down', 'frozr' ),'fs-icon-retweet' => __('retweet', 'frozr' ),'fs-icon-shopping-cart' => __('shopping-cart', 'frozr' ),'fs-icon-folder' => __('folder', 'frozr' ),'fs-icon-folder-open' => __('folder-open', 'frozr' ),'fs-icon-arrows-v' => __('arrows-vertical', 'frozr' ),'fs-icon-arrows-h' => __('arrows-horizontal', 'frozr' ),'fs-icon-bar-chart-o' => __('bar-chart', 'frozr' ),'fs-icon-bar-chart' => __('bar-chart', 'frozr' ),'fs-icon-twitter-square' => __('twitter-square', 'frozr' ),'fs-icon-facebook-square' => __('facebook-square', 'frozr' ),'fs-icon-camera-retro' => __('camera-retro', 'frozr' ),'fs-icon-key' => __('key', 'frozr' ),'fs-icon-gears' => __('gears', 'frozr' ),'fs-icon-cogs' => __('cogs', 'frozr' ),'fs-icon-comments' => __('comments', 'frozr' ),'fs-icon-thumbs-o-up' => __('thumbs-up', 'frozr' ),'fs-icon-thumbs-o-down' => __('thumbs-down', 'frozr' ),'fs-icon-star-half' => __('star-half', 'frozr' ),'fs-icon-heart-o' => __('heart', 'frozr' ),'fs-icon-sign-out' => __('sign-out', 'frozr' ),'fs-icon-linkedin-square' => __('linkedin-square', 'frozr' ),'fs-icon-thumb-tack' => __('thumb-tack', 'frozr' ),'fs-icon-external-link' => __('external-link', 'frozr' ),'fs-icon-sign-in' => __('sign-in', 'frozr' ),'fs-icon-trophy' => __('trophy', 'frozr' ),'fs-icon-github-square' => __('github-square', 'frozr' ),'fs-icon-upload' => __('upload', 'frozr' ),'fs-icon-lemon-o' => __('lemon', 'frozr' ),'fs-icon-phone' => __('phone', 'frozr' ),'fs-icon-square-o' => __('square', 'frozr' ),'fs-icon-bookmark-o' => __('bookmark', 'frozr' ),'fs-icon-phone-square' => __('phone-square', 'frozr' ),'fs-icon-twitter' => __('twitter', 'frozr' ),'fs-icon-facebook' => __('facebook', 'frozr' ),'fs-icon-github' => __('github', 'frozr' ),'fs-icon-unlock' => __('unlock', 'frozr' ),'fs-icon-credit-card' => __('credit-card', 'frozr' ),'fs-icon-rss' => __('rss', 'frozr' ),'fs-icon-hdd-o' => __('hdd', 'frozr' ),'fs-icon-bullhorn' => __('bullhorn', 'frozr' ),'fs-icon-bell' => __('bell', 'frozr' ),'fs-icon-certificate' => __('certificate', 'frozr' ),'fs-icon-hand-o-right' => __('hand right', 'frozr' ),'fs-icon-hand-o-left' => __('hand left', 'frozr' ),'fs-icon-hand-o-up' => __('hand up', 'frozr' ),'fs-icon-hand-o-down' => __('hand down', 'frozr' ),'fs-icon-arrow-circle-left' => __('arrow-circle-left', 'frozr' ),'fs-icon-arrow-circle-right' => __('arrow-circle-right', 'frozr' ),'fs-icon-arrow-circle-up' => __('arrow-circle-up', 'frozr' ),'fs-icon-arrow-circle-down' => __('arrow-circle-down', 'frozr' ),'fs-icon-globe' => __('globe', 'frozr' ),'fs-icon-wrench' => __('wrench', 'frozr' ),'fs-icon-tasks' => __('tasks', 'frozr' ),'fs-icon-filter' => __('filter', 'frozr' ),'fs-icon-briefcase' => __('briefcase', 'frozr' ),'fs-icon-arrows-alt' => __('arrows-alt', 'frozr' ),'fs-icon-users' => __('users', 'frozr' ),'fs-icon-link' => __('link', 'frozr' ),'fs-icon-cloud' => __('cloud', 'frozr' ),'fs-icon-flask' => __('flask', 'frozr' ),'fs-icon-scissors' => __('scissors', 'frozr' ),'fs-icon-copy' => __('copy', 'frozr' ),'fs-icon-paperclip' => __('paperclip', 'frozr' ),'fs-icon-save' => __('save', 'frozr' ),'fs-icon-square' => __('square', 'frozr' ),'fs-icon-navicon' => __('navicon', 'frozr' ),'fs-icon-list-ul' => __('list-ul', 'frozr' ),'fs-icon-list-ol' => __('list-ol', 'frozr' ),'fs-icon-strikethrough' => __('strikethrough', 'frozr' ),'fs-icon-underline' => __('underline', 'frozr' ),'fs-icon-table' => __('table', 'frozr' ),'fs-icon-magic' => __('magic', 'frozr' ),'fs-icon-truck' => __('truck', 'frozr' ),'fs-icon-pinterest' => __('pinterest', 'frozr' ),'fs-icon-pinterest-square' => __('pinterest-square', 'frozr' ),'fs-icon-google-plus-square' => __('google-plus-square', 'frozr' ),'fs-icon-google-plus' => __('google-plus', 'frozr' ),'fs-icon-money' => __('money', 'frozr' ),'fs-icon-caret-down' => __('caret-down', 'frozr' ),'fs-icon-caret-up' => __('caret-up', 'frozr' ),'fs-icon-caret-left' => __('caret-left', 'frozr' ),'fs-icon-caret-right' => __('caret-right', 'frozr' ),'fs-icon-columns' => __('columns', 'frozr' ),'fs-icon-unsorted' => __('unsorted', 'frozr' ),'fs-icon-sort-down' => __('sort-down', 'frozr' ),'fs-icon-sort-up' => __('sort-up', 'frozr' ),'fs-icon-envelope' => __('envelope', 'frozr' ),'fs-icon-linkedin' => __('linkedin', 'frozr' ),'fs-icon-rotate-left' => __('rotate-left', 'frozr' ),'fs-icon-legal' => __('legal', 'frozr' ),'fs-icon-dashboard' => __('dashboard', 'frozr' ),'fs-icon-comment-o' => __('comment', 'frozr' ),'fs-icon-comments-o' => __('comments', 'frozr' ),'fs-icon-flash' => __('flash', 'frozr' ),'fs-icon-sitemap' => __('sitemap', 'frozr' ),'fs-icon-umbrella' => __('umbrella', 'frozr' ),'fs-icon-paste' => __('paste', 'frozr' ),'fs-icon-lightbulb-o' => __('lightbulb', 'frozr' ),'fs-icon-exchange' => __('exchange', 'frozr' ),'fs-icon-cloud-download' => __('cloud-download', 'frozr' ),'fs-icon-cloud-upload' => __('cloud-upload', 'frozr' ),'fs-icon-user-md' => __('user', 'frozr' ),'fs-icon-stethoscope' => __('stethoscope', 'frozr' ),'fs-icon-suitcase' => __('suitcase', 'frozr' ),'fs-icon-bell-o' => __('bell', 'frozr' ),'fs-icon-coffee' => __('coffee', 'frozr' ),'fs-icon-cutlery' => __('cutlery', 'frozr' ),'fs-icon-file-text-o' => __('file-text', 'frozr' ),'fs-icon-building-o' => __('building', 'frozr' ),'fs-icon-hospital-o' => __('hospital', 'frozr' ),'fs-icon-ambulance' => __('ambulance', 'frozr' ),'fs-icon-medkit' => __('medkit', 'frozr' ),'fs-icon-fighter-jet' => __('fighter-jet', 'frozr' ),'fs-icon-beer' => __('beer', 'frozr' ),'fs-icon-h-square' => __('square', 'frozr' ),'fs-icon-plus-square' => __('plus-square', 'frozr' ),'fs-icon-angle-double-left' => __('angle-double-left', 'frozr' ),'fs-icon-angle-double-right' => __('angle-double-right', 'frozr' ),'fs-icon-angle-double-up' => __('angle-double-up', 'frozr' ),'fs-icon-angle-double-down' => __('angle-double-down', 'frozr' ),'fs-icon-angle-left' => __('angle-left', 'frozr' ),'fs-icon-angle-right' => __('angle-right', 'frozr' ),'fs-icon-angle-up' => __('angle-up', 'frozr' ),'fs-icon-angle-down' => __('angle-down', 'frozr' ),'fs-icon-desktop' => __('desktop', 'frozr' ),'fs-icon-laptop' => __('laptop', 'frozr' ),'fs-icon-tablet' => __('tablet', 'frozr' ),'fs-icon-mobile-phone' => __('mobile-phone', 'frozr' ),'fs-icon-circle-o' => __('circle old', 'frozr' ),'fs-icon-quote-left' => __('quote-left', 'frozr' ),'fs-icon-quote-right' => __('quote-right', 'frozr' ),'fs-icon-spinner' => __('spinner', 'frozr' ),'fs-icon-circle' => __('circle', 'frozr' ),'fs-icon-mail-reply' => __('mail-reply', 'frozr' ),'fs-icon-github-alt' => __('github-alt', 'frozr' ),'fs-icon-folder-o' => __('folder', 'frozr' ),'fs-icon-folder-open-o' => __('folder-open', 'frozr' ),'fs-icon-smile-o' => __('smile', 'frozr' ),'fs-icon-frown-o' => __('frown', 'frozr' ),'fs-icon-meh-o' => __('meh', 'frozr' ),'fs-icon-gamepad' => __('gamepad', 'frozr' ),'fs-icon-keyboard-o' => __('keyboard', 'frozr' ),'fs-icon-flag-o' => __('flag', 'frozr' ),'fs-icon-flag-checkered' => __('flag-checkered', 'frozr' ),'fs-icon-terminal' => __('terminal', 'frozr' ),'fs-icon-code' => __('code', 'frozr' ),'fs-icon-reply-all' => __('reply-all', 'frozr' ),'fs-icon-star-half-empty' => __('star-half-empty', 'frozr' ),'fs-icon-location-arrow' => __('location-arrow', 'frozr' ),'fs-icon-crop' => __('crop', 'frozr' ),'fs-icon-code-fork' => __('code-fork', 'frozr' ),'fs-icon-unlink' => __('unlink', 'frozr' ),'fs-icon-question' => __('question', 'frozr' ),'fs-icon-info' => __('info', 'frozr' ),'fs-icon-exclamation' => __('exclamation', 'frozr' ),'fs-icon-superscript' => __('superscript', 'frozr' ),'fs-icon-subscript' => __('subscript', 'frozr' ),'fs-icon-eraser' => __('eraser', 'frozr' ),'fs-icon-puzzle-piece' => __('puzzle-piece', 'frozr' ),'fs-icon-microphone' => __('microphone', 'frozr' ),'fs-icon-microphone-slash' => __('microphone-slash', 'frozr' ),'fs-icon-shield' => __('shield', 'frozr' ),'fs-icon-calendar-o' => __('calendar', 'frozr' ),'fs-icon-fire-extinguisher' => __('fire-extinguisher', 'frozr' ),'fs-icon-rocket' => __('rocket', 'frozr' ),'fs-icon-maxcdn' => __('maxcdn', 'frozr' ),'fs-icon-chevron-circle-left' => __('chevron-circle-left', 'frozr' ),'fs-icon-chevron-circle-right' => __('chevron-circle-right', 'frozr' ),'fs-icon-chevron-circle-up' => __('chevron-circle-up', 'frozr' ),'fs-icon-chevron-circle-down' => __('chevron-circle-down', 'frozr' ),'fs-icon-html5' => __('html5', 'frozr' ),'fs-icon-css3' => __('css3', 'frozr' ),'fs-icon-anchor' => __('anchor', 'frozr' ),'fs-icon-unlock-alt' => __('unlock-alt', 'frozr' ),'fs-icon-bullseye' => __('bullseye', 'frozr' ),'fs-icon-ellipsis-h' => __('ellipsis-horizontal', 'frozr' ),'fs-icon-ellipsis-v' => __('ellipsis-vertical', 'frozr' ),'fs-icon-rss-square' => __('rss-square', 'frozr' ),'fs-icon-play-circle' => __('play-circle', 'frozr' ),'fs-icon-ticket' => __('ticket', 'frozr' ),'fs-icon-minus-square' => __('minus-square', 'frozr' ),'fs-icon-minus-square-o' => __('minus-square-old', 'frozr' ),'fs-icon-level-up' => __('level-up', 'frozr' ),'fs-icon-level-down' => __('level-down', 'frozr' ),'fs-icon-check-square' => __('check-square', 'frozr' ),'fs-icon-pencil-square' => __('pencil-square', 'frozr' ),'fs-icon-external-link-square' => __('external-link-square', 'frozr' ),'fs-icon-share-square' => __('share-square', 'frozr' ),'fs-icon-compass' => __('compass', 'frozr' ),'fs-icon-toggle-down' => __('toggle-down', 'frozr' ),'fs-icon-toggle-up' => __('toggle-up', 'frozr' ),'fs-icon-toggle-right' => __('toggle-right', 'frozr' ),'fs-icon-euro' => __('euro', 'frozr' ),'fs-icon-gbp' => __('gbp', 'frozr' ),'fs-icon-dollar' => __('dollar', 'frozr' ),'fs-icon-rupee' => __('rupee', 'frozr' ),'fs-icon-cny' => __('cny', 'frozr' ),'fs-icon-ruble' => __('ruble', 'frozr' ),'fs-icon-won' => __('won', 'frozr' ),'fs-icon-bitcoin' => __('bitcoin', 'frozr' ),'fs-icon-file' => __('file', 'frozr' ),'fs-icon-file-text' => __('file-text', 'frozr' ),'fs-icon-sort-alpha-asc' => __('sort-alpha-asc', 'frozr' ),'fs-icon-sort-alpha-desc' => __('sort-alpha-desc', 'frozr' ),'fs-icon-sort-amount-asc' => __('sort-amount-asc', 'frozr' ),'fs-icon-sort-amount-desc' => __('sort-amount-desc', 'frozr' ),'fs-icon-sort-numeric-asc' => __('sort-numeric-asc', 'frozr' ),'fs-icon-sort-numeric-desc' => __('sort-numeric-desc', 'frozr' ),'fs-icon-thumbs-up' => __('thumbs-up', 'frozr' ),'fs-icon-thumbs-down' => __('thumbs-down', 'frozr' ),'fs-icon-youtube-square' => __('youtube-square', 'frozr' ),'fs-icon-youtube' => __('youtube', 'frozr' ),'fs-icon-xing' => __('xing', 'frozr' ),'fs-icon-xing-square' => __('xing-square', 'frozr' ),'fs-icon-youtube-play' => __('youtube-play', 'frozr' ),'fs-icon-dropbox' => __('dropbox', 'frozr' ),'fs-icon-stack-overflow' => __('stack-overflow', 'frozr' ),'fs-icon-instagram' => __('instagram', 'frozr' ),'fs-icon-flickr' => __('flickr', 'frozr' ),'fs-icon-adn' => __('adn', 'frozr' ),'fs-icon-bitbucket' => __('bitbucket', 'frozr' ),'fs-icon-bitbucket-square' => __('bitbucket-square', 'frozr' ),'fs-icon-tumblr' => __('tumblr', 'frozr' ),'fs-icon-tumblr-square' => __('tumblr-square', 'frozr' ),'fs-icon-long-arrow-down' => __('long-arrow-down', 'frozr' ),'fs-icon-long-arrow-up' => __('long-arrow-up', 'frozr' ),'fs-icon-long-arrow-left' => __('long-arrow-left', 'frozr' ),'fs-icon-long-arrow-right' => __('long-arrow-right', 'frozr' ),'fs-icon-apple' => __('apple', 'frozr' ),'fs-icon-windows' => __('windows', 'frozr' ),'fs-icon-android' => __('android', 'frozr' ),'fs-icon-linux' => __('linux', 'frozr' ),'fs-icon-dribbble' => __('dribbble', 'frozr' ),'fs-icon-skype' => __('skype', 'frozr' ),'fs-icon-foursquare' => __('foursquare', 'frozr' ),'fs-icon-trello' => __('trello', 'frozr' ),'fs-icon-female' => __('female', 'frozr' ),'fs-icon-male' => __('male', 'frozr' ),'fs-icon-gittip' => __('gittip', 'frozr' ),'fs-icon-sun-o' => __('sun', 'frozr' ),'fs-icon-moon-o' => __('moon', 'frozr' ),'fs-icon-archive' => __('archive', 'frozr' ),'fs-icon-bug' => __('bug', 'frozr' ),'fs-icon-vk' => __('vk', 'frozr' ),'fs-icon-weibo' => __('weibo', 'frozr' ),'fs-icon-renren' => __('renren', 'frozr' ),'fs-icon-pagelines' => __('pagelines', 'frozr' ),'fs-icon-stack-exchange' => __('stack-exchange', 'frozr' ),'fs-icon-arrow-circle-o-right' => __('arrow-circle-right', 'frozr' ),'fs-icon-arrow-circle-o-left' => __('arrow-circle-left', 'frozr' ),'fs-icon-toggle-left' => __('toggle-left', 'frozr' ),'fs-icon-dot-circle-o' => __('dot-circle', 'frozr' ),'fs-icon-wheelchair' => __('wheelchair', 'frozr' ),'fs-icon-vimeo-square' => __('vimeo-square', 'frozr' ),'fs-icon-turkish-lira' => __('turkish-lira', 'frozr' ),'fs-icon-plus-square-o' => __('plus-square', 'frozr' ),'fs-icon-space-shuttle' => __('space-shuttle', 'frozr' ),'fs-icon-slack' => __('slack', 'frozr' ),'fs-icon-envelope-square' => __('envelope-square', 'frozr' ),'fs-icon-wordpress' => __('wordpress', 'frozr' ),'fs-icon-openid' => __('openid', 'frozr' ),'fs-icon-institution' => __('institution', 'frozr' ),'fs-icon-mortar-board' => __('mortar-board', 'frozr' ),'fs-icon-yahoo' => __('yahoo', 'frozr' ),'fs-icon-google' => __('google', 'frozr' ),'fs-icon-reddit' => __('reddit', 'frozr' ),'fs-icon-reddit-square' => __('reddit-square', 'frozr' ),'fs-icon-stumbleupon-circle' => __('stumbleupon-circle', 'frozr' ),'fs-icon-stumbleupon' => __('stumbleupon', 'frozr' ),'fs-icon-delicious' => __('delicious', 'frozr' ),'fs-icon-digg' => __('digg', 'frozr' ),'fs-icon-pied-piper' => __('pied-piper', 'frozr' ),'fs-icon-pied-piper-alt' => __('pied-piper-alt', 'frozr' ),'fs-icon-drupal' => __('drupal', 'frozr' ),'fs-icon-joomla' => __('joomla', 'frozr' ),'fs-icon-language' => __('language', 'frozr' ),'fs-icon-fax' => __('fax', 'frozr' ),'fs-icon-building' => __('building', 'frozr' ),'fs-icon-child' => __('child', 'frozr' ),'fs-icon-paw' => __('paw', 'frozr' ),'fs-icon-spoon' => __('spoon', 'frozr' ),'fs-icon-cube' => __('cube', 'frozr' ),'fs-icon-cubes' => __('cubes', 'frozr' ),'fs-icon-behance' => __('behance', 'frozr' ),'fs-icon-behance-square' => __('behance-square', 'frozr' ),'fs-icon-steam' => __('steam', 'frozr' ),'fs-icon-steam-square' => __('steam-square', 'frozr' ),'fs-icon-recycle' => __('recycle', 'frozr' ),'fs-icon-automobile' => __('automobile', 'frozr' ),'fs-icon-taxi' => __('taxi', 'frozr' ),'fs-icon-tree' => __('tree', 'frozr' ),'fs-icon-spotify' => __('spotify', 'frozr' ),'fs-icon-deviantart' => __('deviantart', 'frozr' ),'fs-icon-soundcloud' => __('soundcloud', 'frozr' ),'fs-icon-database' => __('database', 'frozr' ),'fs-icon-file-pdf-o' => __('file-pdf', 'frozr' ),'fs-icon-file-word-o' => __('file-word', 'frozr' ),'fs-icon-file-excel-o' => __('file-excel', 'frozr' ),'fs-icon-file-powerpoint-o' => __('file-powerpoint', 'frozr' ),'fs-icon-file-photo-o' => __('file-photo', 'frozr' ),'fs-icon-file-zip-o' => __('file-zip', 'frozr' ),'fs-icon-file-sound-o' => __('file-sound', 'frozr' ),'fs-icon-file-movie-o' => __('file-movie', 'frozr' ),'fs-icon-file-code-o' => __('file-code', 'frozr' ),'fs-icon-vine' => __('vine', 'frozr' ),'fs-icon-codepen' => __('codepen', 'frozr' ),'fs-icon-jsfiddle' => __('jsfiddle', 'frozr' ),'fs-icon-life-ring' => __('life-ring', 'frozr' ),'fs-icon-circle-o-notch' => __('circle-notch', 'frozr' ),'fs-icon-rebel' => __('rebel', 'frozr' ),'fs-icon-empire' => __('empire', 'frozr' ),'fs-icon-git-square' => __('git-square', 'frozr' ),'fs-icon-git' => __('git', 'frozr' ),'fs-icon-hacker-news' => __('hacker-news', 'frozr' ),'fs-icon-tencent-weibo' => __('tencent-weibo', 'frozr' ),'fs-icon-qq' => __('qq', 'frozr' ),'fs-icon-wechat' => __('wechat', 'frozr' ),'fs-icon-send' => __('send', 'frozr' ),'fs-icon-paper-plane-o' => __('paper-plane', 'frozr' ),'fs-icon-history' => __('history', 'frozr' ),'fs-icon-genderless' => __('genderless', 'frozr' ),'fs-icon-header' => __('header', 'frozr' ),'fs-icon-paragraph' => __('paragraph', 'frozr' ),'fs-icon-sliders' => __('sliders', 'frozr' ),'fs-icon-share-alt' => __('share-alt', 'frozr' ),'fs-icon-share-alt-square' => __('share-alt-square', 'frozr' ),'fs-icon-bomb' => __('bomb', 'frozr' ),'fs-icon-soccer-ball-o' => __('soccer-ball', 'frozr' ),'fs-icon-tty' => __('tty', 'frozr' ),'fs-icon-binoculars' => __('binoculars', 'frozr' ),'fs-icon-plug' => __('plug', 'frozr' ),'fs-icon-slideshare' => __('slideshare', 'frozr' ),'fs-icon-twitch' => __('twitch', 'frozr' ),'fs-icon-yelp' => __('yelp', 'frozr' ),'fs-icon-newspaper-o' => __('newspaper', 'frozr' ),'fs-icon-wifi' => __('wifi', 'frozr' ),'fs-icon-calculator' => __('calculator', 'frozr' ),'fs-icon-paypal' => __('paypal', 'frozr' ),'fs-icon-google-wallet' => __('google-wallet', 'frozr' ),'fs-icon-cc-visa' => __('visa', 'frozr' ),'fs-icon-cc-mastercard' => __('mastercard', 'frozr' ),'fs-icon-cc-discover' => __('discover', 'frozr' ),'fs-icon-cc-amex' => __('amex', 'frozr' ),'fs-icon-cc-paypal' => __('paypal', 'frozr' ),'fs-icon-cc-stripe' => __('stripe', 'frozr' ),'fs-icon-bell-slash' => __('bell-slash', 'frozr' ),'fs-icon-bell-slash-o' => __('bell-slash-old', 'frozr' ),'fs-icon-trash' => __('trash', 'frozr' ),'fs-icon-copyright' => __('copyright', 'frozr' ),'fs-icon-at' => __('at', 'frozr' ),'fs-icon-eyedropper' => __('eyedropper', 'frozr' ),'fs-icon-paint-brush' => __('paint-brush', 'frozr' ),'fs-icon-birthday-cake' => __('birthday-cake', 'frozr' ),'fs-icon-area-chart' => __('area-chart', 'frozr' ),'fs-icon-pie-chart' => __('pie-chart', 'frozr' ),'fs-icon-line-chart' => __('line-chart', 'frozr' ),'fs-icon-lastfm' => __('lastfm', 'frozr' ),'fs-icon-lastfm-square' => __('lastfm-square', 'frozr' ),'fs-icon-toggle-off' => __('toggle-off', 'frozr' ),'fs-icon-toggle-on' => __('toggle-on', 'frozr' ),'fs-icon-bicycle' => __('bicycle', 'frozr' ),'fs-icon-bus' => __('bus', 'frozr' ),'fs-icon-ioxhost' => __('ioxhost', 'frozr' ),'fs-icon-angellist' => __('angellist', 'frozr' ),'fs-icon-cc' => __('cc', 'frozr' ),'fs-icon-shekel' => __('shekel', 'frozr' ),'fs-icon-meanpath' => __('meanpath', 'frozr' ),'fs-icon-buysellads' => __('buysellads', 'frozr' ),'fs-icon-connectdevelop' => __('connectdevelop', 'frozr' ),'fs-icon-dashcube' => __('dashcube', 'frozr' ),'fs-icon-forumbee' => __('forumbee', 'frozr' ),'fs-icon-leanpub' => __('leanpub', 'frozr' ),'fs-icon-sellsy' => __('sellsy', 'frozr' ),'fs-icon-shirtsinbulk' => __('shirtsinbulk', 'frozr' ),'fs-icon-simplybuilt' => __('simplybuilt', 'frozr' ),'fs-icon-skyatlas' => __('skyatlas', 'frozr' ),'fs-icon-cart-plus' => __('cart-plus', 'frozr' ),'fs-icon-cart-arrow-down' => __('cart-arrow-down', 'frozr' ),'fs-icon-diamond' => __('diamond', 'frozr' ),'fs-icon-ship' => __('ship', 'frozr' ),'fs-icon-user-secret' => __('user-secret', 'frozr' ),'fs-icon-motorcycle' => __('motorcycle', 'frozr' ),'fs-icon-street-view' => __('street-view', 'frozr' ),'fs-icon-heartbeat' => __('heartbeat', 'frozr' ),'fs-icon-venus' => __('venus', 'frozr' ),'fs-icon-mars' => __('mars', 'frozr' ),'fs-icon-mercury' => __('mercury', 'frozr' ),'fs-icon-transgender' => __('transgender', 'frozr' ),'fs-icon-transgender-alt' => __('transgender-alt', 'frozr' ),'fs-icon-venus-double' => __('venus-double', 'frozr' ),'fs-icon-mars-double' => __('mars-double', 'frozr' ),'fs-icon-venus-mars' => __('venus-mars', 'frozr' ),'fs-icon-mars-stroke' => __('mars-stroke', 'frozr' ),'fs-icon-mars-stroke-v' => __('mars-stroke-vertical', 'frozr' ),'fs-icon-mars-stroke-h' => __('mars-stroke-horizontal', 'frozr' ),'fs-icon-neuter' => __('neuter', 'frozr' ),'fs-icon-facebook-official' => __('facebook-official', 'frozr' ),'fs-icon-pinterest-p' => __('pinterest', 'frozr' ),'fs-icon-whatsapp' => __('whatsapp', 'frozr' ),'fs-icon-server' => __('server', 'frozr' ),'fs-icon-user-plus' => __('user-plus', 'frozr' ),'fs-icon-user-times' => __('user-times', 'frozr' ),'fs-icon-hotel' => __('hotel', 'frozr' ),'fs-icon-viacoin' => __('viacoin', 'frozr' ),'fs-icon-train' => __('train', 'frozr' ),'fs-icon-subway' => __('subway', 'frozr' ),'fs-icon-medium' => __('medium', 'frozr' ));
	$nav_style_array = array('1' => __('zoom in', 'frozr' ),'2' => __('open to right', 'frozr' ),'3' => __('open to right roll in', 'frozr' ),'4' => __('flip', 'frozr' ),'5' => __('open to down', 'frozr' ),'6' => __('3D', 'frozr' ),'7' => __('Zoom', 'frozr' ));
	$navigation_arrow_array = array( "fs-icon-angle-down" => "angle", "fs-icon-arrow-down" => "arrow", "fs-icon-caret-down" => "caret", "fs-icon-chevron-down" => "chevron", "fs-icon-angle-double-down" => "double-angle", "fs-icon-hand-o-down" => "hand", "fs-icon-arrow-circle-o-down" => "circle-arrow" );

	//theme key
	$wp_customize->add_section( 'theme_key', array('title' => __( 'Frozr Key', 'frozr' ),'priority' => 1,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'theme_key_txt', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_theme_key_txt', array('description' => __( 'Enter Your Frozr key here. If you don\'t have one, ', 'frozr').'<a href="http://alamento.dokkanplus.com/?forum=general-forum/frozr-key-requests">'.__('Request','frozr') .'</a>'. __(' your key now!','frozr'),'section' => 'theme_key','settings' => 'theme_key_txt','active_callback' => 'is_front_page','type' => 'text'));

	//Custom CSS
	$wp_customize->add_section( 'theme_custom_css', array('title' => __( 'Custom CSS', 'frozr' ),'priority' => 2,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'custom_css', array('default' => '/*My Magic!*/','capability' => 'edit_theme_options','transport' => 'refresh', 'sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_custom_css', array('description' => __( 'Make it Short, Valid & Clean.', 'frozr'),'section' => 'theme_custom_css','settings' => 'custom_css','type' => 'textarea'));

	//General Options
	$wp_customize->add_section( 'general_opt', array('title' => __( 'General Options', 'frozr' ),'priority' => 3,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'layout_width', array('default' => 'full','capability' => 'edit_theme_options','transport' => 'refresh', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_layout_width', array('label' => __( 'Theme Layout', 'frozr'),'section' => 'general_opt','settings' => 'layout_width','type' => 'radio','choices' => array('full' => __('Full Width', 'frozr'),'narrow' => __('Narrow Width', 'frozr'))));
	$wp_customize->add_setting( 'theme_layout', array('default' => 'left','capability' => 'edit_theme_options','transport' => 'refresh', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_theme_layout', array('label' => __( 'Container Layout', 'frozr'),'section' => 'general_opt','settings' => 'theme_layout','type' => 'radio','choices' => array('left' => __('Left to right', 'frozr'),'right' => __('Right to left', 'frozr'))));
	$wp_customize->add_setting( 'theme_style', array('default' => '1','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize, 'fro_theme_style', array('label' => __( 'Theme color palette', 'frozr'),'section' => 'general_opt','settings' => 'theme_style','sclass' => 'themestyle','choices' => array('1' => array('name' => __('Style 1', 'frozr'), 'class' => 'style1' ),'2' => array('name' => __('Style 2', 'frozr'), 'class' => 'style2' ),'3' => array('name' => __('Style 3', 'frozr'), 'class' => 'style3' ),'4' => array('name' => __('Style 4', 'frozr'), 'class' => 'style4' ),'5' => array('name' => __('Style 5', 'frozr'), 'class' => 'style5' ),'6' => array('name' => __('Style 6', 'frozr'), 'class' => 'style6' ),'7' => array('name' => __('Style 7', 'frozr'), 'class' => 'style7' ),'8' => array('name' => __('Style 8', 'frozr'), 'class' => 'style8' ),'9' => array('name' => __('Style 9', 'frozr'), 'class' => 'style9' ),'10' => array('name' => __('Style 10', 'frozr'), 'class' => 'style10' ),'11' => array('name' => __('Custom palette', 'frozr'), 'class' => 'style11' )))));
	$wp_customize->add_setting( 'theme_color_1', array('default' => '#5ed1c9','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_1', array('label' => __( 'Color 1', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_1','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_2', array('default' => '#26bf4d','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_2', array('label' => __( 'Color 2', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_2','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_3', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_3', array('label' => __( 'Color 3', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_3','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_4', array('default' => '#f6a357','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_4', array('label' => __( 'Color 4', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_4','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_5', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_5', array('label' => __( 'Color 5', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_5','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_6', array('default' => '#eee','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_6', array('label' => __( 'Color 6', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_6','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_7', array('default' => '#777','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_7', array('label' => __( 'Color 7', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_7','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_color_8', array('default' => '#000','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_theme_color_8', array('label' => __( 'Color 8', 'frozr' ),'section' => 'general_opt','settings' => 'theme_color_8','sclass'=>'style11 themestyle select_hide','type' => 'color')));
	$wp_customize->add_setting( 'theme_typography', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_theme_typography', array('label' => __( 'Theme typography style', 'frozr'),'section' => 'general_opt','settings' => 'theme_typography', 'type' => 'select', 'choices' => array('1' => __('Style 1', 'frozr'),'2' => __('Style 2', 'frozr'),'3' => __('Style 3', 'frozr'),'4' => __('Style 4', 'frozr'),'5' => __('Style 5', 'frozr'),'6' => __('Style 6', 'frozr'),'7' => __('Style 7', 'frozr'),'8' => __('Style 8', 'frozr'),'9' => __('Style 9', 'frozr'),'10' => __('Style 10', 'frozr'))));
	$wp_customize->add_setting( 'theme_typography_size', array('default' => '2','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_theme_typography_size', array('label' => __( 'Theme typography Size', 'frozr'),'section' => 'general_opt','settings' => 'theme_typography_size', 'type' => 'select', 'choices' => array('1' => __('Small', 'frozr'),'2' => __('Normal', 'frozr'))));
	$wp_customize->add_setting( 'ie_message', array('default' => "We're Sorry, but Frozr just doesn't work with Internet Explorer. Yeah, sucks. Get mad at Steve Ballmer. Or just get on chrome. Or Firefox. Or Safari. Or Opera. Or Flock. Or RockMelt. Or iOS. Or Android. Or, well, anything that exists other than Internet Explorer. This isn't 1995.",'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_ie_message', array('description' => __( 'Warning for old versions of Internet Explorer.', 'frozr'),'section' => 'general_opt','settings' => 'ie_message','type' => 'textarea'));

	//Body
	$wp_customize->add_panel( 'body', array('title' => __( 'Body', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_section( 'main_opt', array('title' => __( 'Main Container', 'frozr' ),'panel' => 'body','priority' => 35,'capability' => 'edit_theme_options'));
	fro_background_bund($wp_customize, '', 'main_opt', '', '', 'main_bg_color', 'main_bg_image', 'main_bg_repeat', 'main_bg_position', 'main_bg_attchment', '#fff');

	//top user menu	
	$wp_customize->add_section( 'user_top_menu_opt', array('title' => __( 'Top User Menu', 'frozr' ),'panel' => 'nav_menus','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'top_user_woo_menu_sh', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_top_user_woo_menu_sh', array('label' => __( "Show WooCommerce Menu?", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_woo_menu_sh','type' => 'checkbox')));
	$wp_customize->add_setting( 'top_user_menu_sh', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_top_user_menu_sh', array('label' => __( "Show User Top Menu?", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_sh', 'sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'26'),'type' => 'checkbox')));
	$wp_customize->add_setting( 'top_user_menu_links_select', array('default' => '0','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_top_user_menu_links_select', array('label' => __( 'Custom Links to Show', 'frozr' ),'description' => __( 'Custom links are a group of styled iconic links located below the user info box.', 'frozr'), 'sclass' => 'clinks', 'section' => 'user_top_menu_opt','settings' => 'top_user_menu_links_select','choices' => array('0' => array('name' => 'No Links', 'class' => 'none' ),'1' => array('name' => 'One', 'class' => 'one' ),'2' => array('name' => 'Two', 'class' => 'two' ),'3' => array('name' => 'Three', 'class' => 'three' ),'4' => array('name' => 'Four', 'class' => 'four' ),'5' => array('name' => 'Five', 'class' => 'five' )))));
	$wp_customize->add_setting( 'top_user_menu_link_icon_1', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_icon_1', array('label' => __( "Link One", "frozr"),'description' => __( 'Select icon', 'frozr'),'section' => 'user_top_menu_opt','sclass'=>'one two three four five clinks select_hide','settings' => 'top_user_menu_link_icon_1','type' => 'select','choices' => $box_icon_array)));	
	$wp_customize->add_setting( 'top_user_menu_link_title_1', array('default' => 'Example: Logout!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_title_1', array('description' => __( "Link Title", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_title_1','sclass'=>'one two three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_path_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_path_1', array('description' => __( "Link Path", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_path_1','sclass'=>'one two three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_color_1', array('default' => '#CC333F','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_color_1', array('description' => __( 'Link Box Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_color_1','sclass'=>'one two three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_color_1', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_icon_color_1', array('description' => __( 'Link Icon Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_icon_color_1','sclass'=>'one two three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_2', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_icon_2', array('label' => __( "Link Two", "frozr"),'description' => __( 'Select icon', 'frozr'),'section' => 'user_top_menu_opt','sclass'=>'two three four five clinks select_hide','settings' => 'top_user_menu_link_icon_2','type' => 'select','choices' => $box_icon_array)));	
	$wp_customize->add_setting( 'top_user_menu_link_title_2', array('default' => 'Example: Logout!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_title_2', array('description' => __( "Link Title", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_title_2','sclass'=>'two three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_path_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_path_2', array('description' => __( "Link Path", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_path_2','sclass'=>'two three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_color_2', array('default' => '#6A4A3C','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_color_2', array('description' => __( 'Link Box Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_color_2','sclass'=>'two three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_color_2', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_icon_color_2', array('description' => __( 'Link Icon Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_icon_color_2','sclass'=>'two three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_3', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_icon_3', array('label' => __( "Link Three", "frozr"),'description' => __( 'Select icon', 'frozr'),'section' => 'user_top_menu_opt','sclass'=>'three four five clinks select_hide','settings' => 'top_user_menu_link_icon_3','type' => 'select','choices' => $box_icon_array)));	
	$wp_customize->add_setting( 'top_user_menu_link_title_3', array('default' => 'Example: Logout!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_title_3', array('description' => __( "Link Title", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_title_3','sclass'=>'three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_path_3', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_path_3', array('description' => __( "Link Path", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_path_3','sclass'=>'three four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_color_3', array('default' => '#00A0B0','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_color_3', array('description' => __( 'Link Box Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_color_3','sclass'=>'three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_color_3', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_icon_color_3', array('description' => __( 'Link Icon Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_icon_color_3','sclass'=>'three four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_4', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_icon_4', array('label' => __( "Link Four", "frozr"),'description' => __( 'Select icon', 'frozr'),'section' => 'user_top_menu_opt','sclass'=>'four five clinks select_hide','settings' => 'top_user_menu_link_icon_4','type' => 'select','choices' => $box_icon_array)));	
	$wp_customize->add_setting( 'top_user_menu_link_title_4', array('default' => 'Example: Logout!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_title_4', array('description' => __( "Link Title", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_title_4','sclass'=>'four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_path_4', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_path_4', array('description' => __( "Link Path", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_path_4','sclass'=>'four five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_color_4', array('default' => '#f6a357','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_color_4', array('description' => __( 'Link Box Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_color_4','sclass'=>'four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_color_4', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_icon_color_4', array('description' => __( 'Link Icon Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_icon_color_4','sclass'=>'four five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_5', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_icon_5', array('label' => __( "Link Five", "frozr"),'description' => __( 'Select icon', 'frozr'),'section' => 'user_top_menu_opt','sclass'=>'five clinks select_hide','settings' => 'top_user_menu_link_icon_5','type' => 'select','choices' => $box_icon_array)));	
	$wp_customize->add_setting( 'top_user_menu_link_title_5', array('default' => 'Example: Logout!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_title_5', array('description' => __( "Link Title", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_title_5','sclass'=>'five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_path_5', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_top_user_menu_link_path_5', array('description' => __( "Link Path", "frozr"),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_path_5','sclass'=>'five clinks select_hide','type' => 'text')));
	$wp_customize->add_setting( 'top_user_menu_link_color_5', array('default' => '#222','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_color_5', array('description' => __( 'Link Box Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_color_5','sclass'=>'five clinks select_hide','type' => 'color')));
	$wp_customize->add_setting( 'top_user_menu_link_icon_color_5', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_top_user_menu_link_icon_color_5', array('description' => __( 'Link Icon Color', 'frozr' ),'section' => 'user_top_menu_opt','settings' => 'top_user_menu_link_icon_color_5','sclass'=>'five clinks select_hide','type' => 'color')));
	
	//Main Menu
	$wp_customize->add_section( 'main_menu', array('title' => __( 'Main Menu', 'frozr' ),'panel' => 'nav_menus','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'show_main_menu', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_show_main_menu', array('label' => __( "Show Theme Main Menu", "frozr"),'section' => 'main_menu','settings' => 'show_main_menu','sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'5'),'type' => 'checkbox')));
	$wp_customize->add_setting( 'main_menu_option', array('default' => 'fro', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_main_menu_option', array('label' => __( 'Menu Layout', 'frozr' ), 'sclass' => 'mainmenu', 'section' => 'main_menu','settings' => 'main_menu_option','choices' => array('fro' => array('name' => 'Use Frozr Menu', 'class' => 'fro' ),'ordi' => array('name' => 'Use Ordinary Menu', 'class' => 'ordi' )))));
	$wp_customize->add_setting( 'sub_menu_ani', array('default' => '1', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_sub_menu_ani', array('label' => __( 'Sub menus load animation', 'frozr' ), 'section' => 'main_menu','settings' => 'sub_menu_ani', 'sclass' => 'ordi mainmenu select_hide', 'type' => 'select' ,'choices' => $submenu_animations_array)));
	$wp_customize->add_setting( 'main_menu_style', array('default' => 'showleftov', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_main_menu_style', array('label' => __( 'Menu Style', 'frozr' ), 'section' => 'main_menu','settings' => 'main_menu_style', 'sclass' => 'fro mainmenu select_hide', 'type' => 'select' ,'choices' => $menu_display_style)));
	$wp_customize->add_setting( 'main_main_icon', array('default' => 'fs-icon-navicon','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new image_radio ( $wp_customize,'fro_main_main_icon', array('label' => __( 'Menu Icon', 'frozr' ),'section' => 'main_menu','settings' => 'main_main_icon','sclass' => 'fro mainmenu select_hide','choices' => array('fs-icon-navicon' => array('title' => '', 'img' => 'm1.png' ),'fs-icon-ellipsis-h' => array('title' => '', 'img' => 'm2.png' ),'fs-icon-list' => array('title' => '', 'img' => 'm3.png' ),'fs-icon-th-list' => array('title' => '', 'img' => 'm4.png' ),'fs-icon-map-marker' => array('title' => '', 'img' => 'm5.png' ),'fs-icon-sitemap' => array('title' => '', 'img' => 'm6.png' )))));
	$wp_customize->add_setting( 'main_icon_layout', array('default' => 'box','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_main_icon_layout', array('label' => __( "Menu link Layout", "frozr"),'section' => 'main_menu','settings' => 'main_icon_layout','sclass' => 'fro mainmenu select_hide','type' => 'select', 'choices' => array('box' =>'Box', 'cir'=>'circle'))));

	//top cart
	$wp_customize->add_section( 'cart_top_menu_opt', array('title' => __( 'Top Menu cart', 'frozr' ),'panel' => 'nav_menus','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'show_top_cart', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_show_top_cart', array('label' => __( "Show Top cart", "frozr"),'section' => 'cart_top_menu_opt','settings' => 'show_top_cart', 'theme_supports' => 'woocommerce', 'type' => 'checkbox'));

	//Header
	$wp_customize->add_panel( 'header', array('title' => __( 'Header', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_section( 'hed_lyt_opt', array('title' => __( 'Header Layout', 'frozr' ),'panel' => 'header','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'header_layout', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_header_layout', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'hed_lyt_opt','settings' => 'header_layout', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	$wp_customize->add_setting( 'header_height', array('default' => '1','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_header_height', array('label' => __( "The Header height", "frozr"),'section' => 'hed_lyt_opt','settings' => 'header_height','type' => 'range', 'input_attrs' => array('min'=>'0', 'max'=> '10')));
	//header search
	$wp_customize->add_section( 'hed_src_opt', array('title' => __( 'Header Search', 'frozr' ),'panel' => 'header','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'sh_header_search', array('default' => true, 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_sh_header_search', array('label' => __( "Show a search input in header", "frozr"),'section' => 'hed_src_opt','settings' => 'sh_header_search','sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'2'),'type' => 'checkbox')));
	$wp_customize->add_setting( 'header_search_type', array('default' => 'fro','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_header_search_type', array('label' => __( "What to search?", "frozr"),'section' => 'hed_src_opt','settings' => 'header_search_type','type' => 'select', 'choices' => array('fro' =>'Blog', 'woo'=>'Products', 'bbp'=>'Forums' )));
	$wp_customize->add_setting( 'header_search_layout', array('default' => 'box','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_header_search_layout', array('label' => __( "Search link Layout", "frozr"),'section' => 'hed_src_opt','settings' => 'header_search_layout','type' => 'select', 'choices' => array('box' =>'Box', 'cir'=>'circle')));

	//Site logo
	$wp_customize->add_setting( 'logo_option', array('default' => 'text', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_logo_option', array('label' => __( 'Logo Options', 'frozr' ), 'priority' => 1, 'sclass' => 'logooption', 'section' => 'title_tagline','settings' => 'logo_option','choices' => array('none' => array('name' => 'No Logo', 'class' => 'none' ),'text' => array('name' => 'Use Text Logo', 'class' => 'text' ),'img' => array('name' => 'Use Image Logo', 'class' => 'img' )))));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_blogname', array('label' => __( 'Site Title', 'frozr' ), 'sclass' => 'text logooption select_hide','section' => 'title_tagline','settings' => 'blogname')));
	$wp_customize->add_control( new Add_class( $wp_customize,'fro_blogdescription', array('label' => __( 'Site Tagline', 'frozr' ), 'sclass' => 'text logooption select_hide','section' => 'title_tagline','settings' => 'blogdescription')));
	$wp_customize->add_setting( 'logo_ty_color', array('default' => 'text', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class_color ( $wp_customize,'fro_logo_ty_color', array('label' => __( 'Logo color', 'frozr' ),'sclass' => 'text logooption select_hide','section' => 'title_tagline','settings' => 'logo_ty_color')));
	$wp_customize->add_setting( 'tagline_ty_color', array('default' => 'text', 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class_color ( $wp_customize,'fro_tagline_ty_color', array('label' => __( 'Tagline color', 'frozr' ),'sclass' => 'text logooption select_hide','section' => 'title_tagline','settings' => 'tagline_ty_color')));
	$wp_customize->add_setting( 'site_logo', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_site_logo', array('label' => __( 'Site logo', 'frozr' ), 'sclass' => 'img logooption select_hide','section' => 'title_tagline','settings' => 'site_logo')));
	//Advance
	$wp_customize->add_setting( 'logo_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_logo_accord', array('section' => 'title_tagline','settings' => 'logo_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'3'))));	
	$wp_customize->add_setting( 'logo_align', array('default' => 'center','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_logo_align', array('label' => __( "Logo Align", "frozr"),'section' => 'title_tagline','settings' => 'logo_align','type' => 'select', 'choices' => array('left' => __('left', 'frozr' ),'center' => __('center', 'frozr' ),'right' => __('right', 'frozr' ))));
	$wp_customize->add_setting( 'logo_width', array('default' => '15','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_logo_width', array('label' => __( "Logo Box Width", "frozr"),'section' => 'title_tagline','settings' => 'logo_width','type' => 'range', 'input_attrs' => array('min'=>'0', 'max'=> '50')));
	$wp_customize->add_setting( 'logo_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_logo_border', array('label' => __( "Show the logo right border", "frozr"),'section' => 'title_tagline','settings' => 'logo_border','type' => 'checkbox'));
	
	//Footer
	$wp_customize->add_panel( 'Footer', array('title' => __( 'Footer', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_section( 'footer_opt', array('title' => __( 'Footer', 'frozr' ),'panel' => 'Footer','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'footer_layout', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_footer_layout', array('label' => __( 'Footer layout', 'frozr'),'section' => 'footer_opt','settings' => 'footer_layout','type' => 'radio','choices' => array('1' => __('Inline layout', 'frozr'),'2' => __('Full-width layout', 'frozr'))));
	$wp_customize->add_setting( 'footer_text', array('default' => 'Powered by WordPress. Built on the Frozr Framework','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_footer_text', array('label' => __( 'Footer Text', 'frozr'), 'description' => __('You can use HTML and shortcodes in your footer text. Shortcode examples:[wp-link] [theme-link] [loginout-link] [blog-title] [blog-link] [the-year] <strong>(Save and refresh page to see effects.)</strong>','frozr'),'section' => 'footer_opt','settings' => 'footer_text'));
	//footer socio
	$wp_customize->add_section( 'footer_socio_opt', array('title' => __( 'Social links', 'frozr' ),'panel' => 'Footer','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'social_link_one', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_social_link_one', array('label' => __( "link one URL", "frozr"),'section' => 'footer_socio_opt','settings' => 'social_link_one'));
	$wp_customize->add_setting( 'social_link_one_icon', array('default' => get_template_directory_uri() . '/library/images/facebook.png','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fro_social_link_one_icon', array('label' => __( 'link one Icon', 'frozr' ), 'section' => 'footer_socio_opt','settings' => 'social_link_one_icon')));
	$wp_customize->add_setting( 'social_link_two', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_social_link_two', array('label' => __( "link two URL", "frozr"),'section' => 'footer_socio_opt','settings' => 'social_link_two'));
	$wp_customize->add_setting( 'social_link_two_icon', array('default' => get_template_directory_uri() . '/library/images/twitter.png','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fro_social_link_two_icon', array('label' => __( 'link two Icon', 'frozr' ), 'section' => 'footer_socio_opt','settings' => 'social_link_two_icon')));
	$wp_customize->add_setting( 'social_link_three', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_social_link_three', array('label' => __( "link three URL", "frozr"),'section' => 'footer_socio_opt','settings' => 'social_link_three'));
	$wp_customize->add_setting( 'social_link_three_icon', array('default' => get_template_directory_uri() . '/library/images/dribbble.png','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fro_social_link_three_icon', array('label' => __( 'link three Icon', 'frozr' ), 'section' => 'footer_socio_opt','settings' => 'social_link_three_icon')));
	$wp_customize->add_setting( 'social_link_four', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_social_link_four', array('label' => __( "link four URL", "frozr"),'section' => 'footer_socio_opt','settings' => 'social_link_four'));
	$wp_customize->add_setting( 'social_link_four_icon', array('default' => get_template_directory_uri() . '/library/images/dribbble.png','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'fro_social_link_four_icon', array('label' => __( 'link four Icon', 'frozr' ), 'section' => 'footer_socio_opt','settings' => 'social_link_four_icon')));

	//Sliders
	$wp_customize->add_section( 'sliders_general_opt', array('title' => __( 'Sliders', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'sh_homepage', array('default' => false, 'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_sh_homepage', array('label' => __( "Front page should only show Revolution slider", "frozr"),'section' => 'sliders_general_opt','settings' => 'sh_homepage','type' => 'checkbox'));
	$wp_customize->add_setting( 'revo_sh', array('default' => 1, 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'revo','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_revo_sh', array('label' => __( 'Show Slide on:', 'frozr' ), 'sclass' => 'revosh', 'section' => 'sliders_general_opt','settings' => 'revo_sh','choices' => array(1 => array('name' => 'Home Page only', 'class' => 'h1' ),2 => array('name' => 'All Pages', 'class' => 'h2' ),3 => array('name' => 'Select Pages', 'class' => 'h3' )))));
	$wp_customize->add_setting( 'revo_pages', array('default' => '', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'revo','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( new pages_Multi_Select( $wp_customize,'fro_revo_pages', array('label' => __( 'Select pages', 'frozr' ), 'sclass' => 'h3 revosh select_hide', 'section' => 'sliders_general_opt','settings' => 'revo_pages')));
	$wp_customize->add_setting( 'revo_code_top', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','theme_supports' => 'revo','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_revo_code_top', array('label' => __( "Top Slider alias", "frozr"),'section' => 'sliders_general_opt','settings' => 'revo_code_top'));
	
	//Homepage
	$wp_customize->add_panel( 'front_page', array('title' => __( 'Front Page', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	//order
	$wp_customize->add_section( 'order_page', array('title' => __( 'Order Front Page', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'first_sec', array('default' => 'fro_wel_msg','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_first_sec', array('label' => __( "First Section", "frozr"),'section' => 'order_page','settings' => 'first_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'second_sec', array('default' => 'revo_one','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_second_sec', array('label' => __( "Second Section", "frozr"),'section' => 'order_page','settings' => 'second_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'third_sec', array('default' => 'revo_two','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_third_sec', array('label' => __( "Third Section", "frozr"),'section' => 'order_page','settings' => 'third_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'fourth_sec', array('default' => 'home_topics','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_fourth_sec', array('label' => __( "Forth Section", "frozr"),'section' => 'order_page','settings' => 'fourth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'fiveth_sec', array('default' => 'posts_loop_one','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_fiveth_sec', array('label' => __( "Fiveth Section", "frozr"),'section' => 'order_page','settings' => 'fiveth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'sixth_sec', array('default' => 'posts_loop_two','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_sixth_sec', array('label' => __( "Sixth Section", "frozr"),'section' => 'order_page','settings' => 'sixth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'seventh_sec', array('default' => 'posts_loop_three','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_seventh_sec', array('label' => __( "Seventh Section", "frozr"),'section' => 'order_page','settings' => 'seventh_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'eighth_sec', array('default' => 'posts_loop_four','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_eighth_sec', array('label' => __( "Eighth Section", "frozr"),'section' => 'order_page','settings' => 'eighth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'nine_sec', array('default' => 'posts_loop_five','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_nine_sec', array('label' => __( "Ninth Section", "frozr"),'section' => 'order_page','settings' => 'nine_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'tenth_sec', array('default' => 'featured_posts','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_tenth_sec', array('label' => __( "Tenth Section", "frozr"),'section' => 'order_page','settings' => 'tenth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'eleventh_sec', array('default' => 'sliding_box','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_eleventh_sec', array('label' => __( "Eleventh Section", "frozr"),'section' => 'order_page','settings' => 'eleventh_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	$wp_customize->add_setting( 'twelevth_sec', array('default' => 'images_grid','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_twelevth_sec', array('label' => __( "Twelfth Section", "frozr"),'section' => 'order_page','settings' => 'twelevth_sec','type' => 'select', 'choices' => array('none' => __('--Select Section--', 'frozr' ),'fro_wel_msg' => __('Message Box', 'frozr' ),'revo_one' => __('Revolution Slider One', 'frozr' ),'revo_two' => __('Revolution Slider two', 'frozr' ),'home_topics' => __('Forums Topics', 'frozr' ),'posts_loop_one' => __('Posts Loop One', 'frozr' ),'posts_loop_two' => __('Posts Loop Two', 'frozr' ),'posts_loop_three' => __('Posts Loop Three', 'frozr' ),'posts_loop_four' => __('Posts Loop Four', 'frozr' ),'posts_loop_five' => __('Posts Loop five', 'frozr' ),'featured_posts' => __('Featured Posts', 'frozr' ),'sliding_box' => __('Sliding Box', 'frozr' ),'images_grid' => __('Images Grid', 'frozr' ))));
	//welcome msg
	$wp_customize->add_section( 'wel_msg_opt', array('title' => __( 'Message Box', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'welcome_msg', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_welcome_msg', array('label' => __( "Show a message box below the header?", "frozr"),'section' => 'wel_msg_opt','settings' => 'welcome_msg', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'17'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'wel_msg_title', array('default' => 'Welcome to my Awesome Website!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_wel_msg_title', array('label' => __( 'Message Title', 'frozr' ), 'section' => 'wel_msg_opt','settings' => 'wel_msg_title', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_msg_cont', array('default' => 'Some details here on what users can find in your website.','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_wel_msg_cont', array('label' => __( 'Message Content', 'frozr' ), 'description' => __('Use HTML tags to improve the look of your content. &#60;h1&#62; or &#60;h2&#62; for titles and &#60;h3&#62; for sub-titles. If using HTML tags, refresh to see effects.','frozr'), 'section' => 'wel_msg_opt','settings' => 'wel_msg_cont', 'type' => 'textarea', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_msg_btn_txt_1', array('default' => 'Explore!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_wel_msg_btn_txt_1', array('label' => __( 'Message button 1', 'frozr' ), 'description' => __('Enter the button title or Leave empty to not show.','frozr'),'section' => 'wel_msg_opt','settings' => 'wel_msg_btn_txt_1', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_msg_btn_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_wel_msg_btn_1', array('description' => __('Enter the button URL.','frozr'),'section' => 'wel_msg_opt','settings' => 'wel_msg_btn_1', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_btn_style_1', array('default' => 'wlbox','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_btn_style_1', array('label' => __( "Button layout", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_btn_style_1','active_callback' => 'is_front_page','type' => 'select', 'choices' => array('wlbox' => __('Box','frozr'), 'wlrnd'=> __('Rounder Corners','frozr'),'wlcir'=> __('Circle','frozr'))));
	$wp_customize->add_setting( 'wel_btn_icon_1', array('default' => 'fs-icon-heart','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_btn_icon_1', array('label' => __( "Button Icon", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_btn_icon_1','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	$wp_customize->add_setting( 'wel_msg_btn_txt_2', array('default' => 'Explore!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_wel_msg_btn_txt_2', array('label' => __( 'Message button 2', 'frozr' ), 'description' => __('Enter the button title or Leave empty to not show.','frozr'),'section' => 'wel_msg_opt','settings' => 'wel_msg_btn_txt_2', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_msg_btn_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_wel_msg_btn_2', array('description' => __('Enter the button URL.','frozr'),'section' => 'wel_msg_opt','settings' => 'wel_msg_btn_2', 'active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'wel_btn_style_2', array('default' => 'wlbox','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_btn_style_2', array('label' => __( "Button layout", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_btn_style_2','active_callback' => 'is_front_page','type' => 'select', 'choices' => array('wlbox' => __('Box','frozr'), 'wlrnd'=> __('Rounder Corners','frozr'),'wlcir'=> __('Circle','frozr'))));
	$wp_customize->add_setting( 'wel_btn_icon_2', array('default' => 'fs-icon-heart','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_btn_icon_2', array('label' => __( "Button Icon", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_btn_icon_2','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	fro_background_bund($wp_customize, '', 'wel_msg_opt', 'is_front_page', '', 'wel_msg_bg_color', 'wel_msg_bg_image', 'wel_msg_bg_repeat', 'wel_msg_bg_position', 'wel_msg_bg_attchment', '#fff');
	$wp_customize->add_setting( 'wel_msg_text_color', array('default' => '#000','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_wel_msg_text_color', array('label' => __( 'Content color', 'frozr' ),'section' => 'wel_msg_opt','settings' => 'wel_msg_text_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'wel_align', array('default' => 'center','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_align', array('label' => __( "Box Content Align", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_align','type' => 'select', 'choices' => array('left' => __('left', 'frozr' ),'center' => __('center', 'frozr' ),'right' => __('right', 'frozr' ))));
	$wp_customize->add_setting( 'wel_height', array('default' => '5','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_wel_height', array('label' => __( "Box height", "frozr"),'section' => 'wel_msg_opt','settings' => 'wel_height','active_callback' => 'is_front_page','type' => 'range', 'input_attrs' => array('min'=>'0', 'max'=> '10')));
	//sliders
	$wp_customize->add_section( 'front_sliders', array('title' => __( 'Sliders', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'revo_code_middle_one', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','theme_supports' => 'revo','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_revo_code_middle_one', array('label' => __( "Content Slider alias one", "frozr"),'section' => 'front_sliders','settings' => 'revo_code_middle_one','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'revo_code_middle_two', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','theme_supports' => 'revo','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( 'fro_revo_code_middle_two', array('label' => __( "Content Slider alias two", "frozr"),'section' => 'front_sliders','settings' => 'revo_code_middle_two','active_callback' => 'is_front_page'));
	//posts loop 1
	$wp_customize->add_section( 'post_loop_1', array('title' => __( 'Posts loop 1', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_posts_loop_1', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_posts_loop_1', array('label' => __( "Use Posts loop 1?", "frozr"),'section' => 'post_loop_1','settings' => 'use_posts_loop_1', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'posts_loop_type_1', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_posts_loop_type_1', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'looptype1', 'section' => 'post_loop_1','settings' => 'posts_loop_type_1','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts1' ),'products' => array('name' => 'Products', 'class' => 'products1' )))));
	$wp_customize->add_setting( 'post_loop_cat_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_post_loop_cat_1', array('label' => __( 'Posts Category', 'frozr' ), 'section' => 'post_loop_1','settings' => 'post_loop_cat_1', 'woo'=> false, 'sclass'=>'posts1 looptype1 select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_loop_cat_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_product_loop_cat_1', array('label' => __( 'Products Category', 'frozr' ), 'section' => 'post_loop_1','settings' => 'product_loop_cat_1', 'sclass'=>'products1 looptype1 select_hide', 'args' => array('taxonomy' => 'product_cat'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'post_igno_sticky_1', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_igno_sticky_1', array('label' => __( "Always show sticky posts first?", "frozr"),'section' => 'post_loop_1','settings' => 'post_igno_sticky_1','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_title_1', array('default' => 'Loop Title Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_title_1', array('label' => __( "Loop title", "frozr"),'section' => 'post_loop_1','settings' => 'post_title_1','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_desc_1', array('default' => 'Loop Description Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_desc_1', array('label' => __( "Loop description", "frozr"),'section' => 'post_loop_1','settings' => 'post_desc_1','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_count_1', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_count_1', array('label' => __( "Number of posts to show", "frozr"),'section' => 'post_loop_1','settings' => 'post_count_1','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//posts loop 1 meta options
	$wp_customize->add_setting( 'post_loop_meta_accord_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_meta_accord_1', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'post_loop_1','settings' => 'post_loop_meta_accord_1','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_thumb_1', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_thumb_1', array('label' => __( "Show posts thumbnails?", "frozr"),'section' => 'post_loop_1','settings' => 'post_loop_thumb_1','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_cats_1', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_cats_1', array('label' => __( "Show posts category?", "frozr"),'section' => 'post_loop_1','settings' => 'post_loop_cats_1','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_comt_1', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_comt_1', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'post_loop_1','settings' => 'post_loop_comt_1','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_auth_1', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_auth_1', array('label' => __( "Show posts author?", "frozr"),'section' => 'post_loop_1','settings' => 'post_loop_auth_1','type' => 'checkbox','active_callback' => 'is_front_page'));
	//posts loop 1 layout options
	$wp_customize->add_setting( 'post_loop_lyt_accord_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_lyt_accord_1', array('label' => __( ' Layout Options', 'frozr'),'section' => 'post_loop_1','settings' => 'post_loop_lyt_accord_1','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_layout_1', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_layout_1', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'post_loop_1','settings' => 'post_loop_layout_1','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'post_loop_1', 'is_front_page', '', 'loop_bg_color_1', 'loop_bg_image_1', 'loop_bg_repeat_1', 'loop_bg_position_1', 'loop_bg_attchment_1');
	$wp_customize->add_setting( 'loop_border_1', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_border_1', array('label' => __( "Show the loop top border", "frozr"),'section' => 'post_loop_1','settings' => 'loop_border_1', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'loop_icon_1', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_icon_1', array('label' => __( "Loop Icon", "frozr"),'section' => 'post_loop_1','settings' => 'loop_icon_1','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//posts loop 1 typography options
	$wp_customize->add_setting( 'post_loop_typo_accord_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_typo_accord_1', array('label' => __( ' Typography Options', 'frozr'),'section' => 'post_loop_1','settings' => 'post_loop_typo_accord_1','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'loop_title_ty_color_1', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_title_ty_color_1', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'post_loop_1','settings' => 'loop_title_ty_color_1','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_desc_ty_color_1', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_desc_ty_color_1', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'post_loop_1','settings' => 'loop_desc_ty_color_1','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_ptitle_ty_color_1', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_ptitle_ty_color_1', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'post_loop_1','settings' => 'loop_ptitle_ty_color_1','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_pexcerptm_ty_color_1', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_pexcerptm_ty_color_1', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'post_loop_1','settings' => 'loop_pexcerptm_ty_color_1','active_callback' => 'is_front_page')));
	//posts loop 2
	$wp_customize->add_section( 'post_loop_2', array('title' => __( 'Posts loop 2', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_posts_loop_2', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_posts_loop_2', array('label' => __( "Use Posts loop 2?", "frozr"),'section' => 'post_loop_2','settings' => 'use_posts_loop_2', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'posts_loop_type_2', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_posts_loop_type_2', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'looptype2', 'section' => 'post_loop_2','settings' => 'posts_loop_type_2','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts2' ),'products' => array('name' => 'Products', 'class' => 'products2' )))));
	$wp_customize->add_setting( 'post_loop_cat_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_post_loop_cat_2', array('label' => __( 'Posts Category', 'frozr' ), 'section' => 'post_loop_2','settings' => 'post_loop_cat_2', 'woo'=> false, 'sclass'=>'posts2 looptype2 select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_loop_cat_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_product_loop_cat_2', array('label' => __( 'Products Category', 'frozr' ), 'section' => 'post_loop_2','settings' => 'product_loop_cat_2', 'sclass'=>'products2 looptype2 select_hide', 'args' => array('taxonomy' => 'product_cat'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'post_igno_sticky_2', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_igno_sticky_2', array('label' => __( "Always show sticky posts first?", "frozr"),'section' => 'post_loop_2','settings' => 'post_igno_sticky_2','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_title_2', array('default' => 'Loop Title Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_title_2', array('label' => __( "Loop title", "frozr"),'section' => 'post_loop_2','settings' => 'post_title_2','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_desc_2', array('default' => 'Loop Description Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_desc_2', array('label' => __( "Loop description", "frozr"),'section' => 'post_loop_2','settings' => 'post_desc_2','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_count_2', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_count_2', array('label' => __( "Number of posts to show", "frozr"),'section' => 'post_loop_2','settings' => 'post_count_2','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//posts loop 2 meta options
	$wp_customize->add_setting( 'post_loop_meta_accord_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_meta_accord_2', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'post_loop_2','settings' => 'post_loop_meta_accord_2','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_thumb_2', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_thumb_2', array('label' => __( "Show posts thumbnails?", "frozr"),'section' => 'post_loop_2','settings' => 'post_loop_thumb_2','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_cats_2', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_cats_2', array('label' => __( "Show posts category?", "frozr"),'section' => 'post_loop_2','settings' => 'post_loop_cats_2','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_comt_2', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_comt_2', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'post_loop_2','settings' => 'post_loop_comt_2','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_auth_2', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_auth_2', array('label' => __( "Show posts author?", "frozr"),'section' => 'post_loop_2','settings' => 'post_loop_auth_2','type' => 'checkbox','active_callback' => 'is_front_page'));
	//posts loop 2 layout options
	$wp_customize->add_setting( 'post_loop_lyt_accord_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_lyt_accord_2', array('label' => __( ' Layout Options', 'frozr'),'section' => 'post_loop_2','settings' => 'post_loop_lyt_accord_2','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_layout_2', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_layout_2', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'post_loop_2','settings' => 'post_loop_layout_2','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'post_loop_2', 'is_front_page', '', 'loop_bg_color_2', 'loop_bg_image_2', 'loop_bg_repeat_2', 'loop_bg_position_2', 'loop_bg_attchment_2');
	$wp_customize->add_setting( 'loop_border_2', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_border_2', array('label' => __( "Show the loop top border", "frozr"),'section' => 'post_loop_2','settings' => 'loop_border_2', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'loop_icon_2', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_icon_2', array('label' => __( "Loop Icon", "frozr"),'section' => 'post_loop_2','settings' => 'loop_icon_2','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//posts loop 2 typography options
	$wp_customize->add_setting( 'post_loop_typo_accord_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_typo_accord_2', array('label' => __( ' Typography Options', 'frozr'),'section' => 'post_loop_2','settings' => 'post_loop_typo_accord_2','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'loop_title_ty_color_2', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_title_ty_color_2', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'post_loop_2','settings' => 'loop_title_ty_color_2','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_desc_ty_color_2', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_desc_ty_color_2', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'post_loop_2','settings' => 'loop_desc_ty_color_2','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_ptitle_ty_color_2', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_ptitle_ty_color_2', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'post_loop_2','settings' => 'loop_ptitle_ty_color_2','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_pexcerptm_ty_color_2', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_pexcerptm_ty_color_2', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'post_loop_2','settings' => 'loop_pexcerptm_ty_color_2','active_callback' => 'is_front_page')));
	//posts loop 3
	$wp_customize->add_section( 'post_loop_3', array('title' => __( 'Posts loop 3', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_posts_loop_3', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_posts_loop_3', array('label' => __( "Use Posts loop 3?", "frozr"),'section' => 'post_loop_3','settings' => 'use_posts_loop_3', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'posts_loop_type_3', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_posts_loop_type_3', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'looptype3', 'section' => 'post_loop_3','settings' => 'posts_loop_type_3','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts3' ),'products' => array('name' => 'Products', 'class' => 'products3' )))));
	$wp_customize->add_setting( 'post_loop_cat_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_post_loop_cat_3', array('label' => __( 'Posts Category', 'frozr' ), 'section' => 'post_loop_3','settings' => 'post_loop_cat_3', 'woo'=> false, 'sclass'=>'posts3 looptype3 select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_loop_cat_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_product_loop_cat_3', array('label' => __( 'Products Category', 'frozr' ), 'section' => 'post_loop_3','settings' => 'product_loop_cat_3', 'sclass'=>'products3 looptype3 select_hide', 'args' => array('taxonomy' => 'product_cat'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'post_igno_sticky_3', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_igno_sticky_3', array('label' => __( "Always show sticky posts first?", "frozr"),'section' => 'post_loop_3','settings' => 'post_igno_sticky_3','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_title_3', array('default' => 'Loop Title Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_title_3', array('label' => __( "Loop title", "frozr"),'section' => 'post_loop_3','settings' => 'post_title_3','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_desc_3', array('default' => 'Loop Description Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_desc_3', array('label' => __( "Loop description", "frozr"),'section' => 'post_loop_3','settings' => 'post_desc_3','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_count_3', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_count_3', array('label' => __( "Number of posts to show", "frozr"),'section' => 'post_loop_3','settings' => 'post_count_3','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//posts loop 3 meta options
	$wp_customize->add_setting( 'post_loop_meta_accord_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_meta_accord_3', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'post_loop_3','settings' => 'post_loop_meta_accord_3','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_thumb_3', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_thumb_3', array('label' => __( "Show posts thumbnails?", "frozr"),'section' => 'post_loop_3','settings' => 'post_loop_thumb_3','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_cats_3', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_cats_3', array('label' => __( "Show posts category?", "frozr"),'section' => 'post_loop_3','settings' => 'post_loop_cats_3','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_comt_3', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_comt_3', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'post_loop_3','settings' => 'post_loop_comt_3','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_auth_3', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_auth_3', array('label' => __( "Show posts author?", "frozr"),'section' => 'post_loop_3','settings' => 'post_loop_auth_3','type' => 'checkbox','active_callback' => 'is_front_page'));
	//posts loop 3 layout options
	$wp_customize->add_setting( 'post_loop_lyt_accord_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_lyt_accord_3', array('label' => __( ' Layout Options', 'frozr'),'section' => 'post_loop_3','settings' => 'post_loop_lyt_accord_3','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_layout_3', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_layout_3', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'post_loop_3','settings' => 'post_loop_layout_3','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'post_loop_3', 'is_front_page', '', 'loop_bg_color_3', 'loop_bg_image_3', 'loop_bg_repeat_3', 'loop_bg_position_3', 'loop_bg_attchment_3');
	$wp_customize->add_setting( 'loop_border_3', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_border_3', array('label' => __( "Show the loop top border", "frozr"),'section' => 'post_loop_3','settings' => 'loop_border_3', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'loop_icon_3', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_icon_3', array('label' => __( "Loop Icon", "frozr"),'section' => 'post_loop_3','settings' => 'loop_icon_3','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//posts loop 3 typography options
	$wp_customize->add_setting( 'post_loop_typo_accord_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_typo_accord_3', array('label' => __( ' Typography Options', 'frozr'),'section' => 'post_loop_3','settings' => 'post_loop_typo_accord_3','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'loop_title_ty_color_3', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_title_ty_color_3', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'post_loop_3','settings' => 'loop_title_ty_color_3','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_desc_ty_color_3', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_desc_ty_color_3', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'post_loop_3','settings' => 'loop_desc_ty_color_3','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_ptitle_ty_color_3', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_ptitle_ty_color_3', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'post_loop_3','settings' => 'loop_ptitle_ty_color_3','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_pexcerptm_ty_color_3', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_pexcerptm_ty_color_3', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'post_loop_3','settings' => 'loop_pexcerptm_ty_color_3','active_callback' => 'is_front_page')));
	//posts loop 4
	$wp_customize->add_section( 'post_loop_4', array('title' => __( 'Posts loop 4', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_posts_loop_4', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_posts_loop_4', array('label' => __( "Use Posts loop 4?", "frozr"),'section' => 'post_loop_4','settings' => 'use_posts_loop_4', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'posts_loop_type_4', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_posts_loop_type_4', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'looptype4', 'section' => 'post_loop_4','settings' => 'posts_loop_type_4','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts4' ),'products' => array('name' => 'Products', 'class' => 'products4' )))));
	$wp_customize->add_setting( 'post_loop_cat_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_post_loop_cat_4', array('label' => __( 'Posts Category', 'frozr' ), 'section' => 'post_loop_4','settings' => 'post_loop_cat_4', 'woo'=> false, 'sclass'=>'posts4 looptype4 select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_loop_cat_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_product_loop_cat_4', array('label' => __( 'Products Category', 'frozr' ), 'section' => 'post_loop_4','settings' => 'product_loop_cat_4', 'sclass'=>'products4 looptype4 select_hide', 'args' => array('taxonomy' => 'product_cat'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'post_igno_sticky_4', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_igno_sticky_4', array('label' => __( "Always show sticky posts first?", "frozr"),'section' => 'post_loop_4','settings' => 'post_igno_sticky_4','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_title_4', array('default' => 'Loop Title Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_title_4', array('label' => __( "Loop title", "frozr"),'section' => 'post_loop_4','settings' => 'post_title_4','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_desc_4', array('default' => 'Loop Description Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_desc_4', array('label' => __( "Loop description", "frozr"),'section' => 'post_loop_4','settings' => 'post_desc_4','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_count_4', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_count_4', array('label' => __( "Number of posts to show", "frozr"),'section' => 'post_loop_4','settings' => 'post_count_4','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//posts loop 4 meta options
	$wp_customize->add_setting( 'post_loop_meta_accord_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_meta_accord_4', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'post_loop_4','settings' => 'post_loop_meta_accord_4','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_thumb_4', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_thumb_4', array('label' => __( "Show posts thumbnails?", "frozr"),'section' => 'post_loop_4','settings' => 'post_loop_thumb_4','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_cats_4', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_cats_4', array('label' => __( "Show posts category?", "frozr"),'section' => 'post_loop_4','settings' => 'post_loop_cats_4','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_comt_4', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_comt_4', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'post_loop_4','settings' => 'post_loop_comt_4','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_auth_4', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_auth_4', array('label' => __( "Show posts author?", "frozr"),'section' => 'post_loop_4','settings' => 'post_loop_auth_4','type' => 'checkbox','active_callback' => 'is_front_page'));
	//posts loop 4 layout options
	$wp_customize->add_setting( 'post_loop_lyt_accord_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_lyt_accord_4', array('label' => __( ' Layout Options', 'frozr'),'section' => 'post_loop_4','settings' => 'post_loop_lyt_accord_4','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_layout_4', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_layout_4', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'post_loop_4','settings' => 'post_loop_layout_4','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'post_loop_4', 'is_front_page', '', 'loop_bg_color_4', 'loop_bg_image_4', 'loop_bg_repeat_4', 'loop_bg_position_4', 'loop_bg_attchment_4');
	$wp_customize->add_setting( 'loop_border_4', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_border_4', array('label' => __( "Show the loop top border", "frozr"),'section' => 'post_loop_4','settings' => 'loop_border_4', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'loop_icon_4', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_icon_4', array('label' => __( "Loop Icon", "frozr"),'section' => 'post_loop_4','settings' => 'loop_icon_4','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//posts loop 4 typography options
	$wp_customize->add_setting( 'post_loop_typo_accord_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_typo_accord_4', array('label' => __( ' Typography Options', 'frozr'),'section' => 'post_loop_4','settings' => 'post_loop_typo_accord_4','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'loop_title_ty_color_4', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_title_ty_color_4', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'post_loop_4','settings' => 'loop_title_ty_color_4','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_desc_ty_color_4', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_desc_ty_color_4', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'post_loop_4','settings' => 'loop_desc_ty_color_4','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_ptitle_ty_color_4', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_ptitle_ty_color_4', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'post_loop_4','settings' => 'loop_ptitle_ty_color_4','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_pexcerptm_ty_color_4', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_pexcerptm_ty_color_4', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'post_loop_4','settings' => 'loop_pexcerptm_ty_color_4','active_callback' => 'is_front_page')));
	//posts loop 5
	$wp_customize->add_section( 'post_loop_5', array('title' => __( 'Posts loop 5', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_posts_loop_5', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_posts_loop_5', array('label' => __( "Use Posts loop 5?", "frozr"),'section' => 'post_loop_5','settings' => 'use_posts_loop_5', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'posts_loop_type_5', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_posts_loop_type_5', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'looptype5', 'section' => 'post_loop_5','settings' => 'posts_loop_type_5','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts5' ),'products' => array('name' => 'Products', 'class' => 'products5' )))));
	$wp_customize->add_setting( 'post_loop_cat_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_post_loop_cat_5', array('label' => __( 'Posts Category', 'frozr' ), 'section' => 'post_loop_5','settings' => 'post_loop_cat_5', 'woo'=> false, 'sclass'=>'posts5 looptype5 select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_loop_cat_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_product_loop_cat_5', array('label' => __( 'Products Category', 'frozr' ), 'section' => 'post_loop_5','settings' => 'product_loop_cat_5', 'sclass'=>'products5 looptype5 select_hide', 'args' => array('taxonomy' => 'product_cat'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'post_igno_sticky_5', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_igno_sticky_5', array('label' => __( "Always show sticky posts first?", "frozr"),'section' => 'post_loop_5','settings' => 'post_igno_sticky_5','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_title_5', array('default' => 'Loop Title Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_title_5', array('label' => __( "Loop title", "frozr"),'section' => 'post_loop_5','settings' => 'post_title_5','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_desc_5', array('default' => 'Loop Description Here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_post_desc_5', array('label' => __( "Loop description", "frozr"),'section' => 'post_loop_5','settings' => 'post_desc_5','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_count_5', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_count_5', array('label' => __( "Number of posts to show", "frozr"),'section' => 'post_loop_5','settings' => 'post_count_5','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//posts loop 5 meta options
	$wp_customize->add_setting( 'post_loop_meta_accord_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_meta_accord_5', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'post_loop_5','settings' => 'post_loop_meta_accord_5','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_thumb_5', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_thumb_5', array('label' => __( "Show posts thumbnails?", "frozr"),'section' => 'post_loop_5','settings' => 'post_loop_thumb_5','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_cats_5', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_cats_5', array('label' => __( "Show posts category?", "frozr"),'section' => 'post_loop_5','settings' => 'post_loop_cats_5','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_comt_5', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_comt_5', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'post_loop_5','settings' => 'post_loop_comt_5','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'post_loop_auth_5', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_auth_5', array('label' => __( "Show posts author?", "frozr"),'section' => 'post_loop_5','settings' => 'post_loop_auth_5','type' => 'checkbox','active_callback' => 'is_front_page'));
	//posts loop 5 layout options
	$wp_customize->add_setting( 'post_loop_lyt_accord_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_lyt_accord_5', array('label' => __( ' Layout Options', 'frozr'),'section' => 'post_loop_5','settings' => 'post_loop_lyt_accord_5','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'post_loop_layout_5', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_post_loop_layout_5', array('title' => __( 'Header Layout', 'frozr' ),'section' => 'post_loop_5','settings' => 'post_loop_layout_5','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'post_loop_5', 'is_front_page', '', 'loop_bg_color_5', 'loop_bg_image_5', 'loop_bg_repeat_5', 'loop_bg_position_5', 'loop_bg_attchment_5');
	$wp_customize->add_setting( 'loop_border_5', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_border_5', array('label' => __( "Show the loop top border", "frozr"),'section' => 'post_loop_5','settings' => 'loop_border_5', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'loop_icon_5', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_loop_icon_5', array('label' => __( "Loop Icon", "frozr"),'section' => 'post_loop_5','settings' => 'loop_icon_5','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//posts loop 5 typography options
	$wp_customize->add_setting( 'post_loop_typo_accord_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_post_loop_typo_accord_5', array('label' => __( ' Typography Options', 'frozr'),'section' => 'post_loop_5','settings' => 'post_loop_typo_accord_5','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'loop_title_ty_color_5', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_title_ty_color_5', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'post_loop_5','settings' => 'loop_title_ty_color_5','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_desc_ty_color_5', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_desc_ty_color_5', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'post_loop_5','settings' => 'loop_desc_ty_color_5','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_ptitle_ty_color_5', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_ptitle_ty_color_5', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'post_loop_5','settings' => 'loop_ptitle_ty_color_5','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'loop_pexcerptm_ty_color_5', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_loop_pexcerptm_ty_color_5', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'post_loop_5','settings' => 'loop_pexcerptm_ty_color_5','active_callback' => 'is_front_page')));
	
	//featured posts
	$wp_customize->add_section( 'featured_posts', array('title' => __( 'Featured Posts', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'use_featured_posts', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_use_featured_posts', array('label' => __( "Use featured posts?", "frozr"),'section' => 'featured_posts','settings' => 'use_featured_posts', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'21'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'feat_loop_type', array('default' => 'posts', 'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_feat_loop_type', array('label' => __( 'Loop Type', 'frozr' ), 'sclass' => 'featlooptyp', 'section' => 'featured_posts','settings' => 'feat_loop_type','active_callback' => 'is_front_page','choices' => array('posts' => array('name' => 'Posts', 'class' => 'posts' ),'products' => array('name' => 'Products', 'class' => 'products' )))));
	$wp_customize->add_setting( 'post_feat_loop', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'sanitize_muilt_select'));
	$wp_customize->add_control( new Posts_Multi_Select( $wp_customize,'fro_post_feat_loop', array('label' => __( 'Select Posts', 'frozr' ), 'section' => 'featured_posts','settings' => 'post_feat_loop', 'woo'=> false, 'args' => array('post_status' => 'publish'), 'sclass'=>'posts featlooptyp select_hide', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'product_feat_loop', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'sanitize_muilt_select'));
	$wp_customize->add_control( new Posts_Multi_Select ( $wp_customize,'fro_product_feat_loop', array('label' => __( 'Select Products', 'frozr' ), 'section' => 'featured_posts','settings' => 'product_feat_loop', 'sclass'=>'products featlooptyp select_hide', 'args' => array('post_type' => 'product', 'post_status' => 'publish'),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'featured_post_title', array('default' => 'Hand Picks!','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_featured_post_title', array('label' => __( "Loop title", "frozr"),'section' => 'featured_posts','settings' => 'featured_post_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'featured_post_desc', array('default' => 'Some more details here.','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_featured_post_desc', array('label' => __( "Loop description", "frozr"),'section' => 'featured_posts','settings' => 'featured_post_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'featured_posts_count', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_posts_count', array('label' => __( "Number of posts to show in each loop", "frozr"), 'description' => __('(-1) will show all posts','frozr'), 'section' => 'featured_posts','settings' => 'featured_posts_count','type' => 'number', 'input_attrs'=>array('min'=>'-1', 'max'=>'50'),'active_callback' => 'is_front_page'));
	//featured posts meta options
	$wp_customize->add_setting( 'featured_meta_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_featured_meta_accord', array('label' => __( ' Posts Meta Options', 'frozr'),'section' => 'featured_posts','settings' => 'featured_meta_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'2'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'featured_date', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_date', array('label' => __( "Show posts date?", "frozr"),'section' => 'featured_posts','settings' => 'featured_date','type' => 'checkbox','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'featured_author', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_author', array('label' => __( "Show posts author?", "frozr"),'section' => 'featured_posts','settings' => 'featured_author','type' => 'checkbox','active_callback' => 'is_front_page'));
	//featured posts layout options
	$wp_customize->add_setting( 'featured_layout_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_featured_layout_accord', array('label' => __( ' layout Options', 'frozr'),'section' => 'featured_posts','settings' => 'featured_layout_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'6'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'featured_title_layout', array('default' => 'default','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_title_layout', array('label' => __( "Title layout style", "frozr"),'section' => 'featured_posts','settings' => 'featured_title_layout','active_callback' => 'is_front_page','type' => 'select', 'choices' => array('default'=> 'Default', 'style1' => 'Gift', 'style2' => 'Board', 'style3' => 'Board 2', 'style4' => 'Board 3', 'style5' => 'Tab')));
	$wp_customize->add_setting( 'featured_title_icon', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_title_icon', array('label' => __( "Loop Icon", "frozr"),'section' => 'featured_posts','settings' => 'featured_title_icon','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	$wp_customize->add_setting( 'featured_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_border', array('label' => __( "Show the loop top border", "frozr"),'section' => 'featured_posts','settings' => 'featured_border', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'featured_posts_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_posts_border', array('label' => __( "Show posts border", "frozr"),'section' => 'featured_posts','settings' => 'featured_posts_border', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'featured_nav_ani', array('default' => 'default','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_nav_ani', array('label' => __( "Navigation animation", "frozr"),'section' => 'featured_posts','settings' => 'featured_nav_ani','active_callback' => 'is_front_page','type' => 'select', 'choices' => $nav_style_array));
	$wp_customize->add_setting( 'featured_nav_arrow', array('default' => 'fs-icon-angle-down','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_featured_nav_arrow', array('label' => __( "Navigation icon", "frozr"),'section' => 'featured_posts','settings' => 'featured_nav_arrow','active_callback' => 'is_front_page','type' => 'select', 'choices' => $navigation_arrow_array));
	
	//Single
	$wp_customize->add_section( 'sing_post_layout', array('title' => __( 'Single Post Socials', 'frozr' ), 'description' => __('Allow post Share on..','frozr'),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'single_face', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_face', array('label' => __( "Facebook", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_face','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_twitter', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_twitter', array('label' => __( "Twitter", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_twitter','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_email', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_email', array('label' => __( "Email", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_email','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_blogger', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_blogger', array('label' => __( "Blogger", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_blogger','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_delicious', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_delicious', array('label' => __( "Delicious", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_delicious','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_digg', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_digg', array('label' => __( "Digg", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_digg','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_google', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_google', array('label' => __( "Google", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_google','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_myspace', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_myspace', array('label' => __( "MySpace", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_myspace','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_stumbleupon', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_stumbleupon', array('label' => __( "Stumbleupon", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_stumbleupon','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_yahoo', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_yahoo', array('label' => __( "Yahoo", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_yahoo','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_reddit', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_reddit', array('label' => __( "Reddit", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_reddit','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_technorati', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_technorati', array('label' => __( "Technorati", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_technorati','type' => 'checkbox', 'active_callback' => 'is_fro_single'));
	$wp_customize->add_setting( 'single_rss', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_single_rss', array('label' => __( "Rss", "frozr"), 'section' => 'sing_post_layout','settings' => 'single_rss','type' => 'checkbox', 'active_callback' => 'is_fro_single'));

	//product archives
	$wp_customize->add_section( 'product_archive', array('title' => __( 'Product Archives', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'froz_icon_sidebar', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_froz_icon_sidebar', array('label' => __( "Show Frozr Icon Sidebar?", "frozr"),'section' => 'product_archive','settings' => 'froz_icon_sidebar', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'6'), 'active_callback' => 'is_shop','type' => 'checkbox')));
	$wp_customize->add_setting( 'products_per_row', array('default' => '2','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_products_per_row', array('label' => __( "how many products to show per row.", "frozr"), 'section' => 'product_archive','settings' => 'products_per_row','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_shop'));
	//products archives meta options
	$wp_customize->add_setting( 'product_meta_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_product_meta_accord', array('label' => __( ' Meta Options', 'frozr'),'section' => 'product_archive','settings' => 'product_meta_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_shop')));	
	$wp_customize->add_setting( 'product_show_price', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_product_show_price', array('label' => __( "Show Price?", "frozr"),'section' => 'product_archive','settings' => 'product_show_price','type' => 'checkbox','active_callback' => 'is_shop'));
	$wp_customize->add_setting( 'product_show_rating', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_product_show_rating', array('label' => __( "Show Rating?", "frozr"),'section' => 'product_archive','settings' => 'product_show_rating','type' => 'checkbox','active_callback' => 'is_shop'));
	$wp_customize->add_setting( 'product_show_atc', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_product_show_atc', array('label' => __( "Show Add to cart?", "frozr"),'section' => 'product_archive','settings' => 'product_show_atc','type' => 'checkbox','active_callback' => 'is_shop'));
	$wp_customize->add_setting( 'product_show_excerpt', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_product_show_excerpt', array('label' => __( "Show product excerpt?", "frozr"),'section' => 'product_archive','settings' => 'product_show_excerpt','type' => 'checkbox','active_callback' => 'is_shop'));

	//product single
	$wp_customize->add_section( 'product_single', array('title' => __( 'Single Product Add', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'product_add_img', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_product_add_img', array('label' => __( "Upload Your Add Image.", "frozr"),'section' => 'product_single','settings' => 'product_add_img','type' => 'image','active_callback' => 'is_product')));
	$wp_customize->add_setting( 'product_add_url', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_product_add_url', array('label' => __( "Or Just Enter The Add Image URL.", "frozr"),'section' => 'product_single','settings' => 'product_add_url','type' => 'text','active_callback' => 'is_product'));
	$wp_customize->add_setting( 'product_add_link', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'woocommerce','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_product_add_link', array('label' => __( "The Click On Adds Link.", "frozr"),'section' => 'product_single','settings' => 'product_add_link','type' => 'text','active_callback' => 'is_product'));
	$wp_customize->add_setting( 'product_add_title', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'woocommerce','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_product_add_title', array('label' => __( "The Add image Title.", "frozr"),'section' => 'product_single','settings' => 'product_add_title','type' => 'text','active_callback' => 'is_product'));
	
	//Archive page template
	$wp_customize->add_section( 'archive_page', array('title' => __( 'Archive Page Template', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'monthly_archive', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_monthly_archive', array('label' => __( "Show Monthly Archives?", "frozr"),'section' => 'archive_page','settings' => 'monthly_archive', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'1'), 'active_callback' => 'is_archive_temp','type' => 'checkbox')));
	$wp_customize->add_setting( 'months_counts', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_months_counts', array('label' => __( "Months to show", "frozr"), 'section' => 'archive_page','settings' => 'months_counts','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'12'),'active_callback' => 'is_archive_temp'));
	$wp_customize->add_setting( 'daily_archive', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_daily_archive', array('label' => __( "Show Daily Archives?", "frozr"),'section' => 'archive_page','settings' => 'daily_archive', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'1'), 'active_callback' => 'is_archive_temp','type' => 'checkbox')));
	$wp_customize->add_setting( 'days_counts', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_days_counts', array('label' => __( "Days to show", "frozr"), 'section' => 'archive_page','settings' => 'days_counts','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'30'),'active_callback' => 'is_archive_temp'));
	$wp_customize->add_setting( 'latest_archive', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_latest_archive', array('label' => __( "Show Latest Posts Ordered by Date?", "frozr"),'section' => 'archive_page','settings' => 'latest_archive', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'1'), 'active_callback' => 'is_archive_temp','type' => 'checkbox')));
	$wp_customize->add_setting( 'latest_counts', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_latest_counts', array('label' => __( "Number of posts to show", "frozr"), 'section' => 'archive_page','settings' => 'latest_counts','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'30'),'active_callback' => 'is_archive_temp'));

	//Blog page template
	$wp_customize->add_section( 'blog_page', array('title' => __( 'The Blog', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'blog_posts_counts', array('default' => '10','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_posts_counts', array('label' => __( "Posts Per-Page", "frozr"), 'description' => __('note: setting to "-1" will show all posts','frozr'), 'section' => 'blog_page','settings' => 'blog_posts_counts','type' => 'number', 'input_attrs'=>array('min'=>'-1', 'max'=>'50'),'active_callback' => 'is_blog_temp'));
	$wp_customize->add_setting( 'blog_posts_load', array('default' => 'manual','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_posts_load', array('label' => __( 'Blog Paging Method', 'frozr' ),'section' => 'blog_page','settings' => 'blog_posts_load', 'active_callback' => 'is_blog_temp','type' => 'radio','choices' => array('manual' => __('Manually', 'frozr'),'auto' => __('Auto when reached to page end', 'frozr'))));
	$wp_customize->add_setting( 'blog_sticky', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_sticky', array('label' => __( "Always Show sticky posts on top?", "frozr"),'section' => 'blog_page','settings' => 'blog_sticky', 'active_callback' => 'is_blog_temp','type' => 'checkbox'));
	$wp_customize->add_setting( 'blog_posts_layout', array('default' => 'two','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_posts_layout', array('label' => __( 'Posts Per Row', 'frozr' ),'section' => 'blog_page','settings' => 'blog_posts_layout', 'active_callback' => 'is_blog_temp','type' => 'radio','choices' => array('one' => __('One post', 'frozr'),'two' => __('Two Posts', 'frozr'),'three' => __('Three Posts', 'frozr'))));
	$wp_customize->add_setting( 'blog_posts_content_layout', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_posts_content_layout', array('label' => __( 'How to show posts in Blog Archives?', 'frozr' ),'section' => 'blog_page','settings' => 'blog_posts_content_layout', 'active_callback' => 'is_blog_temp','type' => 'radio','choices' => array('1' => __('Excerpt', 'frozr'),'2' => __('Full Content', 'frozr'))));
	//Blog meta options
	$wp_customize->add_setting( 'blog_meta_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_blog_meta_accord', array('label' => __( ' Meta Options', 'frozr'),'section' => 'blog_page','settings' => 'blog_meta_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'5'),'active_callback' => 'is_blog_temp')));	
	$wp_customize->add_setting( 'blog_show_thumb', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_show_thumb', array('label' => __( "Show posts thumbnail?", "frozr"),'section' => 'blog_page','settings' => 'blog_show_thumb','type' => 'checkbox','active_callback' => 'is_blog_temp'));
	$wp_customize->add_setting( 'blog_show_author', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_show_author', array('label' => __( "Show posts author?", "frozr"),'section' => 'blog_page','settings' => 'blog_show_author','type' => 'checkbox','active_callback' => 'is_blog_temp'));
	$wp_customize->add_setting( 'blog_show_comments', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_show_comments', array('label' => __( "Show posts comments count?", "frozr"),'section' => 'blog_page','settings' => 'blog_show_comments','type' => 'checkbox','active_callback' => 'is_blog_temp'));
	$wp_customize->add_setting( 'blog_show_date', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_show_date', array('label' => __( "Show posts date?", "frozr"),'section' => 'blog_page','settings' => 'blog_show_date','type' => 'checkbox','active_callback' => 'is_blog_temp'));
	$wp_customize->add_setting( 'blog_show_category', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_blog_show_category', array('label' => __( "Show posts category?", "frozr"),'section' => 'blog_page','settings' => 'blog_show_category','type' => 'checkbox','active_callback' => 'is_blog_temp'));
	
	//forums
	$wp_customize->add_panel( 'frozr_forums', array('title' => __( 'BBpress forums', 'frozr' ),'priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_section( 'bbp_general', array('title' => __( 'General Options', 'frozr' ),'panel' => 'frozr_forums','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'bbp_show_forums_list', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_forums_list', array('label' => __( "Show Forums List?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_forums_list','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_show_topics_list', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_topics_list', array('label' => __( "Show Topics List?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_topics_list','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_show_members_list', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_bbp_show_members_list', array('label' => __( "Show Active Users list?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_members_list', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'1'), 'active_callback' => 'is_fro_forum','type' => 'checkbox')));
	$wp_customize->add_setting( 'bbp_active_users_layout', array('default' => '1','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_active_users_layout', array('label' => __( "Active Users Layout.", "frozr"),'section' => 'bbp_general','settings' => 'bbp_active_users_layout','type' => 'radio','active_callback' => 'is_fro_forum','choices' => array('1' => __('Show avatars','frozr'),'2' => __('Show names','frozr'))));
	$wp_customize->add_setting( 'bbp_welcome', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_bbp_welcome', array('label' => __( "Forums Welcome Notice", "frozr"),'section' => 'bbp_general','settings' => 'bbp_welcome','type' => 'text','active_callback' => 'is_fro_forum'));
	//forums meta options
	$wp_customize->add_setting( 'bbp_meta_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_bbp_meta_accord', array('label' => __( ' Meta Options', 'frozr'),'section' => 'bbp_general','settings' => 'bbp_meta_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'5'),'active_callback' => 'is_fro_forum')));	
	$wp_customize->add_setting( 'bbp_show_fresh', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_fresh', array('label' => __( "Show Topics Freshness?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_fresh','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_show_count', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_count', array('label' => __( "Show Replies Count?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_count','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_show_voices', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_voices', array('label' => __( "Show Voices Count In Topics List?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_voices','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_show_topic_count', array('default' => true,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_show_topic_count', array('label' => __( "Show Topics Count In Forums List?", "frozr"),'section' => 'bbp_general','settings' => 'bbp_show_topic_count','type' => 'checkbox','active_callback' => 'is_fro_forum'));
	//forum header notices
	$wp_customize->add_section( 'bbp_notices', array('title' => __( 'Header Notices', 'frozr' ),'panel' => 'frozr_forums','priority' => 35,'capability' => 'edit_theme_options'));
	//forums notice 1
	$wp_customize->add_setting( 'bbp_notice_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_bbp_notice_1', array('label' => __( ' Forum announcement (One)', 'frozr'),'section' => 'bbp_notices','settings' => 'bbp_notice_1','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_fro_forum')));	
	$wp_customize->add_setting( 'bbp_notice_text_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_bbp_notice_text_1', array('label' => __( "Announcement text", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_text_1','type' => 'text','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_notice_color_1', array('default' => '#CC333F','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_color_1', array('label' => __( 'Box color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_color_1','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_font_color_1', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_font_color_1', array('label' => __( 'Font color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_font_color_1','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_icon_1', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_notice_icon_1', array('label' => __( "Icon", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_icon_1','active_callback' => 'is_fro_forum','type' => 'select', 'choices' => $box_icon_array));
	//forums notice 2
	$wp_customize->add_setting( 'bbp_notice_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_bbp_notice_2', array('label' => __( ' Forum announcement (One)', 'frozr'),'section' => 'bbp_notices','settings' => 'bbp_notice_2','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_fro_forum')));	
	$wp_customize->add_setting( 'bbp_notice_text_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_bbp_notice_text_2', array('label' => __( "Announcement text", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_text_2','type' => 'text','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_notice_color_2', array('default' => '#CC333F','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_color_2', array('label' => __( 'Box color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_color_2','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_font_color_2', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_font_color_2', array('label' => __( 'Font color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_font_color_2','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_icon_2', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_notice_icon_2', array('label' => __( "Icon", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_icon_2','active_callback' => 'is_fro_forum','type' => 'select', 'choices' => $box_icon_array));
	//forums form notice 1
	$wp_customize->add_setting( 'bbp_notice_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_bbp_notice_3', array('label' => __( ' Forum announcement (One)', 'frozr'),'section' => 'bbp_notices','settings' => 'bbp_notice_3','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_fro_forum')));	
	$wp_customize->add_setting( 'bbp_notice_text_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_bbp_notice_text_3', array('label' => __( "Announcement text", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_text_3','type' => 'text','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_notice_color_3', array('default' => '#CC333F','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_color_3', array('label' => __( 'Box color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_color_3','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_font_color_3', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_font_color_3', array('label' => __( 'Font color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_font_color_3','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_icon_3', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_notice_icon_3', array('label' => __( "Icon", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_icon_3','active_callback' => 'is_fro_forum','type' => 'select', 'choices' => $box_icon_array));
	//forums form notice 2
	$wp_customize->add_setting( 'bbp_notice_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_bbp_notice_4', array('label' => __( ' Forum announcement (One)', 'frozr'),'section' => 'bbp_notices','settings' => 'bbp_notice_4','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_fro_forum')));	
	$wp_customize->add_setting( 'bbp_notice_text_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_bbp_notice_text_4', array('label' => __( "Announcement text", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_text_4','type' => 'text','active_callback' => 'is_fro_forum'));
	$wp_customize->add_setting( 'bbp_notice_color_4', array('default' => '#CC333F','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_color_4', array('label' => __( 'Box color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_color_4','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_font_color_4', array('default' => '#fff','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_bbp_notice_font_color_4', array('label' => __( 'Font color', 'frozr' ),'section' => 'bbp_notices','settings' => 'bbp_notice_font_color_4','active_callback' => 'is_fro_forum')));
	$wp_customize->add_setting( 'bbp_notice_icon_4', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_bbp_notice_icon_4', array('label' => __( "Icon", "frozr"),'section' => 'bbp_notices','settings' => 'bbp_notice_icon_4','active_callback' => 'is_fro_forum','type' => 'select', 'choices' => $box_icon_array));

	//home topics
	$wp_customize->add_section( 'home_topics', array('title' => __( 'Forums Topics', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'sh_home_topics', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_sh_home_topics', array('label' => __( "Show latest topics?", "frozr"),'section' => 'home_topics','settings' => 'sh_home_topics', 'sclass' => 'fro_checkbox_option', 'fro_attrs' => array('data-amount'=>'26'), 'active_callback' => 'is_front_page','type' => 'checkbox')));
	$wp_customize->add_setting( 'forums_id', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Forums_Select ( $wp_customize,'fro_forums_id', array('label' => __( "Select the topics forum", "frozr"),'section' => 'home_topics','settings' => 'forums_id','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'froums_topics_title', array('default' => 'Latest Topics','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_froums_topics_title', array('label' => __( "Loop title", "frozr"),'section' => 'home_topics','settings' => 'froums_topics_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'froums_topics_desc', array('default' => 'Here are the latest topics in our forums','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_froums_topics_desc', array('label' => __( "Loop description", "frozr"),'section' => 'home_topics','settings' => 'froums_topics_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'forums_count', array('default' => '3','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_forums_count', array('label' => __( "Number of topics to show", "frozr"),'section' => 'home_topics','settings' => 'forums_count','type' => 'number', 'input_attrs'=>array('min'=>'1', 'max'=>'3'),'active_callback' => 'is_front_page'));
	//home topics layout options
	$wp_customize->add_setting( 'home_topics_lyt_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_home_topics_lyt_accord', array('label' => __( ' Layout Options', 'frozr'),'section' => 'home_topics','settings' => 'home_topics_lyt_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'10'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'home_topics_layout', array('default' => 'in','capability' => 'edit_theme_options','transport' => 'refresh', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_home_topics_layout', array('title' => __( 'Loop Layout', 'frozr' ),'section' => 'home_topics','settings' => 'home_topics_layout','active_callback' => 'is_front_page', 'type' => 'radio', 'choices' => array ('in' => __('Inline','frozr'),'full' => __('Full Width','frozr'))));
	fro_background_bund($wp_customize, 'Loop', 'home_topics', 'is_front_page', '', 'ht_bg_color', 'ht_bg_image', 'ht_bg_repeat', 'ht_bg_position', 'ht_bg_attchment');
	$wp_customize->add_setting( 'ht_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_ht_border', array('label' => __( "Show the loop top border", "frozr"),'section' => 'home_topics','settings' => 'ht_border', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'ht_thumbnails', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_ht_thumbnails', array('label' => __( "Show Topics Thumbnails", "frozr"),'section' => 'home_topics','settings' => 'ht_thumbnails', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'ht_icon', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_ht_icon', array('label' => __( "Loop Icon", "frozr"),'section' => 'home_topics','settings' => 'ht_icon','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	//home topics typography options
	$wp_customize->add_setting( 'home_topics_typo_accord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_home_topics_typo_accord', array('label' => __( ' Typography Options', 'frozr'),'section' => 'home_topics','settings' => 'home_topics_typo_accord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'4'),'active_callback' => 'is_front_page')));	
	$wp_customize->add_setting( 'ht_title_ty_color', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_ht_title_ty_color', array('label' => __( 'Loop title color', 'frozr' ),'section' => 'home_topics','settings' => 'ht_title_ty_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ht_desc_ty_color', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_ht_desc_ty_color', array('label' => __( 'Loop description color', 'frozr' ),'section' => 'home_topics','settings' => 'ht_desc_ty_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ht_ptitle_ty_color', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_ht_ptitle_ty_color', array('label' => __( 'Loop posts title color', 'frozr' ),'section' => 'home_topics','settings' => 'ht_ptitle_ty_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ht_pexcerptm_ty_color', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage', 'theme_supports' => 'bbpress','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_ht_pexcerptm_ty_color', array('label' => __( 'loop posts excerpt & meta color', 'frozr' ),'section' => 'home_topics','settings' => 'ht_pexcerptm_ty_color','active_callback' => 'is_front_page')));

	//Team Section
	$wp_customize->add_section( 'team_section', array('title' => __( 'Sliding Boxes', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'show_team', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_show_team', array('label' => __( "Show Section", "frozr"),'section' => 'team_section','settings' => 'show_team','sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'43'),'type' => 'checkbox','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'team_title', array('default' => 'Our Team','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_team_title', array('label' => __( "Section title", "frozr"),'section' => 'team_section','settings' => 'team_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'team_desc', array('default' => 'Few Lines about your great team','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_team_desc', array('label' => __( "Section description", "frozr"),'section' => 'team_section','settings' => 'team_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'team_link_title', array('default' => 'Get in touch','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_team_link_title', array('label' => __( "Section button title", "frozr"),'description' => __('Add the button text, or leave empty to not show the button.','frozr'),'section' => 'team_section','settings' => 'team_link_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'team_link', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_team_link', array('label' => __( "Section button link", "frozr"),'description' => __('Add the button link to some where related to this.','frozr'),'section' => 'team_section','settings' => 'team_link','active_callback' => 'is_front_page'));
	//Styling the member section
	$wp_customize->add_setting( 'team_section_acord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_team_section_acord', array('label' => __( ' Add some styles', 'frozr'),'section' => 'team_section','settings' => 'team_section_acord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	fro_background_bund($wp_customize, 'Section', 'team_section', 'is_front_page', '', 'msection_bg_color', 'msection_bg_image', 'msection_bg_repeat', 'msection_bg_position', 'msection_bg_attachment', '#4a515a');
	$wp_customize->add_setting( 'msection_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_msection_border', array('label' => __( "Show the Section top border", "frozr"),'section' => 'team_section','settings' => 'msection_border', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'msection_icon', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_msection_icon', array('label' => __( "Section Icon", "frozr"),'section' => 'team_section','settings' => 'msection_icon','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	$wp_customize->add_setting( 'msection_ty_color', array('default' => '#ffffff','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_msection_ty_color', array('label' => __( 'Section title color', 'frozr' ),'section' => 'team_section','settings' => 'msection_ty_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'team_count', array('default' => '3','capability' => 'edit_theme_options','refresh' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Select_Hide_Below( $wp_customize,'fro_team_count', array('label' => __( 'Members to Show', 'frozr' ), 'sclass' => 'tcount', 'section' => 'team_section','settings' => 'team_count','choices' => array('1' => array('name' => 'One Member', 'class' => 'onem' ),'2' => array('name' => 'Two Members', 'class' => 'twom' ),'3' => array('name' => 'Three Members', 'class' => 'threem')),'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_sml_img_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_sml_img_1', array('label' => __( 'Member One', 'frozr' ),'description' => __( 'Personal Image 400 x 400', 'frozr' ), 'sclass' => 'onem twom threem tcount select_hide','section' => 'team_section','settings' => 'tm_sml_img_1','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_lrg_img_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_lrg_img_1', array('description' => __( 'Featured Image 400 x 800', 'frozr' ), 'sclass' => 'onem twom threem tcount select_hide','section' => 'team_section','settings' => 'tm_lrg_img_1','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_m_name_1', array('default' => 'Mahmud Hamid','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_name_1', array('description' => __( "Name?", "frozr"),'section' => 'team_section','settings' => 'tm_m_name_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_position_1', array('default' => 'GM','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_position_1', array('description' => __( "Position?", "frozr"),'section' => 'team_section','settings' => 'tm_m_position_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_bio_1', array('default' => 'I do everything alone.','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_bio_1', array('description' => __( "Biography?", "frozr"),'section' => 'team_section','settings' => 'tm_m_bio_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'textarea')));
	$wp_customize->add_setting( 'tm_m_face_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_face_1', array('description' => __( "Facebook Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_face_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_twet_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_twet_1', array('description' => __( "Twitter Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_twet_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_inst_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_inst_1', array('description' => __( "Instagram Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_inst_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_youtube_1', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_youtube_1', array('description' => __( "Youtube Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_youtube_1', 'sclass' => 'onem twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_sml_img_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_sml_img_2', array('label' => __( 'Member Two', 'frozr' ),'description' => __( 'Personal Image 400 x 400', 'frozr' ), 'sclass' => 'twom threem tcount select_hide','section' => 'team_section','settings' => 'tm_sml_img_2','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_lrg_img_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_lrg_img_2', array('description' => __( 'Featured Image 400 x 800', 'frozr' ), 'sclass' => 'twom threem tcount select_hide','section' => 'team_section','settings' => 'tm_lrg_img_2','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_m_name_2', array('default' => 'Mahmud Hamid','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_name_2', array('description' => __( "Name?", "frozr"),'section' => 'team_section','settings' => 'tm_m_name_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_position_2', array('default' => 'GM','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_position_2', array('description' => __( "Position?", "frozr"),'section' => 'team_section','settings' => 'tm_m_position_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_bio_2', array('default' => 'I do everything alone.','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_bio_2', array('description' => __( "Biography?", "frozr"),'section' => 'team_section','settings' => 'tm_m_bio_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'textarea')));
	$wp_customize->add_setting( 'tm_m_face_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_face_2', array('description' => __( "Facebook Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_face_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_twet_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_twet_2', array('description' => __( "Twitter Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_twet_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_inst_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_inst_2', array('description' => __( "Instagram Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_inst_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_youtube_2', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_youtube_2', array('description' => __( "Youtube Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_youtube_2', 'sclass' => 'twom threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_sml_img_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_sml_img_3', array('label' => __( 'Member Three', 'frozr' ),'description' => __( 'Personal Image 400 x 400', 'frozr' ), 'sclass' => 'threem tcount select_hide','section' => 'team_section','settings' => 'tm_sml_img_3','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_lrg_img_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class_img( $wp_customize,'fro_tm_lrg_img_3', array('description' => __( 'Featured Image 400 x 800', 'frozr' ), 'sclass' => 'threem tcount select_hide','section' => 'team_section','settings' => 'tm_lrg_img_3','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'tm_m_name_3', array('default' => 'Mahmud Hamid','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_name_3', array('description' => __( "Name?", "frozr"),'section' => 'team_section','settings' => 'tm_m_name_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_position_3', array('default' => 'GM','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_position_3', array('description' => __( "Position?", "frozr"),'section' => 'team_section','settings' => 'tm_m_position_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_bio_3', array('default' => 'I do everything alone.','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_fro_textarea'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_bio_3', array('description' => __( "Biography?", "frozr"),'section' => 'team_section','settings' => 'tm_m_bio_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'textarea')));
	$wp_customize->add_setting( 'tm_m_face_3', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_face_3', array('description' => __( "Facebook Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_face_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_twet_3', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_twet_3', array('description' => __( "Twitter Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_twet_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_inst_3', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_inst_3', array('description' => __( "Instagram Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_inst_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));
	$wp_customize->add_setting( 'tm_m_youtube_3', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_tm_m_youtube_3', array('description' => __( "Youtube Account Link", "frozr"),'section' => 'team_section','settings' => 'tm_m_youtube_3', 'sclass' => 'threem tcount select_hide', 'active_callback' => 'is_front_page', 'type' => 'text')));

	//Image gird
	$wp_customize->add_section( 'image_grid', array('title' => __( 'Image Grid', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'show_ig', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_show_ig', array('label' => __( "Show Section", "frozr"),'section' => 'image_grid','settings' => 'show_ig','sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'25'),'type' => 'checkbox','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_title', array('default' => 'Clients','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_title', array('label' => __( "Section title", "frozr"),'section' => 'image_grid','settings' => 'ig_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_desc', array('default' => 'Some More details here','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_desc', array('label' => __( "Section description", "frozr"),'section' => 'image_grid','settings' => 'ig_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_link_title', array('default' => 'More!','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_link_title', array('label' => __( "Section button title", "frozr"),'description' => __('Add the button text, or leave empty to not show the button.','frozr'),'section' => 'image_grid','settings' => 'ig_link_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_link', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( 'fro_ig_link', array('label' => __( "Section button link", "frozr"),'description' => __('Add the button link to some where related to this.','frozr'),'section' => 'image_grid','settings' => 'ig_link','active_callback' => 'is_front_page'));
	//Styling the member section
	$wp_customize->add_setting( 'ig_section_acord', array('default' => '','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize,'fro_ig_section_acord', array('label' => __( ' Add some styles', 'frozr'),'section' => 'image_grid','settings' => 'ig_section_acord','sclass'=>'adv_options','adv'=>true,'fro_attrs'=>array('data-amount'=>'8'),'active_callback' => 'is_front_page')));	
	fro_background_bund($wp_customize, 'Section', 'image_grid', 'is_front_page', '', 'ig_bg_color', 'ig_bg_image', 'ig_bg_repeat', 'ig_bg_position', 'ig_bg_attachment');
	$wp_customize->add_setting( 'ig_border', array('default' => true,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_ig_border', array('label' => __( "Show the Section top border", "frozr"),'section' => 'image_grid','settings' => 'ig_border', 'active_callback' => 'is_front_page','type' => 'checkbox'));
	$wp_customize->add_setting( 'ig_icon', array('default' => 'none','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( 'fro_ig_icon', array('label' => __( "Section Icon", "frozr"),'section' => 'image_grid','settings' => 'ig_icon','active_callback' => 'is_front_page','type' => 'select', 'choices' => $box_icon_array));
	$wp_customize->add_setting( 'ig_ty_color', array('default' => '#4a515a','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_ig_ty_color', array('label' => __( 'Section title color', 'frozr' ),'section' => 'image_grid','settings' => 'ig_ty_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_1', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_1', array('label' => __( "Image 1.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_1','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_1_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_1_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_1_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_img_2', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_2', array('label' => __( "Image 2.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_2','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_2_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_2_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_2_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_img_3', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_3', array('label' => __( "Image 3.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_3','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_3_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_3_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_3_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_img_4', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_4', array('label' => __( "Image 4.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_4','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_4_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_4_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_4_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_img_5', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_5', array('label' => __( "Image 5.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_5','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_5_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_5_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_5_desc','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'ig_img_6', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_url'));
	$wp_customize->add_control( new WP_Customize_Image_Control ( $wp_customize, 'fro_ig_img_6', array('label' => __( "Image 6.", "frozr"),'section' => 'image_grid','settings' => 'ig_img_6','type' => 'image','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'ig_img_6_desc', array('default' => 'http://','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_ig_img_6_desc', array('description' => __( "add Image Link", "frozr"),'section' => 'image_grid','settings' => 'ig_img_6_desc','active_callback' => 'is_front_page'));

	//News Ticker
	$wp_customize->add_section( 'news_ticker', array('title' => __( 'News Ticker', 'frozr' ),'panel' => 'front_page','priority' => 35,'capability' => 'edit_theme_options'));
	$wp_customize->add_setting( 'show_nt', array('default' => false,'capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Add_class ( $wp_customize, 'fro_show_nt', array('label' => __( "Show News Ticker", "frozr"),'section' => 'news_ticker','settings' => 'show_nt','sclass'=>'fro_checkbox_option', 'fro_attrs'=>array('data-amount'=>'4'),'type' => 'checkbox','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'nt_title', array('default' => 'Breaking News','capability' => 'edit_theme_options','transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field'));
	$wp_customize->add_control( 'fro_nt_title', array('label' => __( "Ticker title", "frozr"),'section' => 'news_ticker','settings' => 'nt_title','active_callback' => 'is_front_page'));
	$wp_customize->add_setting( 'nt_cat', array('default' => '','capability' => 'edit_theme_options','transport' => 'refresh','sanitize_callback' => 'esc_attr'));
	$wp_customize->add_control( new Cats_Select( $wp_customize,'fro_nt_cat', array('label' => __( 'Ticker Category', 'frozr' ), 'section' => 'news_ticker','settings' => 'nt_cat', 'active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'nt_color', array('default' => 'Yellow','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_nt_color', array('label' => __( 'Ticker Color', 'frozr' ),'section' => 'news_ticker','settings' => 'nt_color','active_callback' => 'is_front_page')));
	$wp_customize->add_setting( 'nt_ty_color', array('default' => 'black','capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize,'fro_nt_ty_color', array('label' => __( 'Ticker text Color', 'frozr' ),'section' => 'news_ticker','settings' => 'nt_ty_color','active_callback' => 'is_front_page')));
		
	// changes to existing settings, sections, and controls.
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_image' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_image_data' )->transport = 'postMessage';
	$wp_customize->get_section( 'colors' )->panel = 'body';
	$wp_customize->get_section( 'background_image' )->panel = 'body';
	$wp_customize->get_section( 'header_image' )->panel = 'header';
	$wp_customize->get_section( 'static_front_page' )->panel = 'front_page';
	$wp_customize->get_section( 'title_tagline' )->panel = 'header';
	$wp_customize->remove_control( 'blogname' );
	$wp_customize->remove_control( 'blogdescription' );
	$wp_customize->remove_control( 'display_header_text' );
	$wp_customize->remove_setting( 'header_textcolor' );
}
function fro_background_bund( $wp_custom, $fr_label, $fr_section, $fr_callback, $sclass='', $bg_color,  $bg_image,  $bg_repeat, $bg_position,  $bg_attachment, $bg_color_std='',$bg_image_std='',$bg_repeat_std='no-repeat',$bg_position_std='center',$bg_attachment_std='scroll' ) {
	$wp_custom->add_setting( $bg_color, array('default' => $bg_color_std,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'sanitize_hex_color'));
	$wp_custom->add_control( new Add_class( $wp_custom,'fro_'.$bg_color, array('label' => $fr_label . __( 'Background Color', 'frozr' ),'section' => $fr_section,'settings' => $bg_color, 'sclass' => $sclass, 'type'=>'color', 'active_callback' => $fr_callback)));
	$wp_custom->add_setting( $bg_repeat, array('default' => $bg_repeat_std,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_custom->add_control( new Add_class( $wp_custom, 'fro_'.$bg_repeat, array('label' => __( 'Background Repeat', 'frozr' ),'section' => $fr_section,'settings' => $bg_repeat, 'sclass' => $sclass, 'active_callback' => $fr_callback,'type' => 'radio','choices' => array('no-repeat' => __('No Repeat', 'frozr'),'repeat' => __('Tile', 'frozr'),'repeat-x' => __('Tile Horizontally', 'frozr' ),'repeat-y' => __('Tile Vertically', 'frozr')))));
	$wp_custom->add_setting( $bg_position, array('default' => $bg_position_std,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_custom->add_control( new Add_class( $wp_custom, 'fro_'.$bg_position, array('label' => __( 'Background Position', 'frozr' ),'section' => $fr_section,'settings' => $bg_position, 'sclass' => $sclass, 'active_callback' => $fr_callback,'type' => 'radio','choices' => array('left' => __('Left', 'frozr'),'center' => __('Center', 'frozr'),'right' => __('Right', 'frozr')))));
	$wp_custom->add_setting( $bg_attachment, array('default' => $bg_attachment_std,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_attr'));
	$wp_custom->add_control( new Add_class( $wp_custom, 'fro_'.$bg_attachment, array('label' => __( 'Background Attachment', 'frozr' ),'section' => $fr_section,'settings' => $bg_attachment, 'sclass' => $sclass, 'active_callback' => $fr_callback,'type' => 'radio','choices' => array('scroll' => __('Scroll', 'frozr'),'fixed' => __('Fixed', 'frozr')))));
	$wp_custom->add_setting( $bg_image ,array('default' => $bg_image_std,'capability' => 'edit_theme_options','transport' => 'postMessage','sanitize_callback' => 'esc_url'));
	$wp_custom->add_control( new Add_class_img($wp_custom,'fro_'.$bg_image,array('label' => $fr_label . __( 'Background Image', 'frozr' ),'section' => $fr_section,'settings' => $bg_image, 'sclass' => $sclass . ' bg_carry', 'active_callback' => $fr_callback)));
}
function header_output() { 
	$logo_width = get_theme_mod('logo_width','15');
	$access_width = 63.25 - $logo_width;
	
	$main_menu_option = get_theme_mod('main_menu_option','fro');
	if (frozr_mobile() || $main_menu_option == 'fro' ) {
	$mobi_menu=1;
	} else {
	$mobi_menu=0;
	}

	$site_lang = get_option('WPLANG');
	$site_lang_rtl = array('ar','arc','dv','ha','he','khw','ks','ku','ps','ur','yi','fa','bcc','bqi','ckb','glk','lrc','mzn','pnb','sd','ug');
	if(in_array($site_lang, $site_lang_rtl) && get_theme_mod('theme_layout','left') != 'right') {
		set_theme_mod('theme_layout','right');
	}
	
	$header_layout = get_theme_mod('header_layout','in');
	$layout_width = get_theme_mod('layout_width','full');
	$logo_align = get_theme_mod('logo_align','center');
	$theme_layout = get_theme_mod('theme_layout','left');
	$logo_border = get_theme_mod('logo_border', true);
	$logo_ty_color = get_theme_mod('logo_ty_color','#444');
	$tagline_ty_color = get_theme_mod('tagline_ty_color','#444');
	$top_user_menu_links_select = get_theme_mod('top_user_menu_links_select','0');
	$main_icon_layout = get_theme_mod('main_icon_layout','box');
	$header_search_layout = get_theme_mod('header_search_layout','box');
	$header_height = get_theme_mod('header_height','1');
	$footer_layout = get_theme_mod('footer_layout','1');
	$select_slider = get_theme_mod('select_slider','1');
	$seq_nav_position = get_theme_mod('seq_nav_position','1');
	$slider_height = get_theme_mod('slider_height','40');
?>
    <!--BHS CSS--> 
    <style type="text/css">
	@media screen and (min-width: 1200px) {
	.type-page,
	.n_frames .blog-head-content,
	#slider-child .blog-head-content,
	.f-c-d,
	.featured_post_wraapper,
	.two-thirds-cloumn,
	.archive-title,
	.page-title-wrapper,
	.forums-container,
	#bbpress-forums,
	#comments-list ol,
	.whos-online,
	.st_posts_list_home,
	.page-entry-header *,
	.fr-top-menu,
	.header-wrap,
	.topics-list-cont,
	#attachment_content,
	.entry-content-temp-page,
	#bbp-login .entry-content > p,
	.post-cont-sing,
	#products-temp-wrapper,
	.woocommerce .breadcrumb,
	.type-product,
	.content-area-seller-listing,
	.dokkan_page_title_content span,
	.single-product-wrapper,
	.wel_msg_text,
	.post_entry_header *,
	.profile-info,
	.store-page-wrap,
	.rsb_wrapper,
	h2.rest-review-title
	{
	width: <?php if($layout_width == 'narrow'){echo "1160px;";} else {echo "1200px;";} ?>
	}
	#main{<?php if($layout_width == 'narrow'){echo "width:1200px;border-left:1px solid #eee;border-right:1px solid #eee;margin:0 auto;";} ?>}
	.mobi-info , .mobi-sidebar {
	display: none;
	}
	.one_standard_post .st-thumbnail, .one_standard_post .twocol .st-thumbnail, .one_standard_post .bbp-topic-no-thumbnail {width:80% !important;}
	.view{width:375px;height:240px;}
	.featured-thumb .has_bg,.featured-thumb,.uc-container,.uc-container-infinit-scroll,#featured_post .gallery_slider_img,#featured_post .content-slider,.f-video iframe,.f-video embed,.view-first iframe,.view-first embed,.view .mask,.view .content{height:240px;}

	}
	@media screen and (min-width: 980px) and (max-width: 1200px) {
	.type-page,
	.n_frames .blog-head-content,
	#slider-child .blog-head-content,
	.f-c-d,
	.featured_post_wraapper,
	.two-thirds-cloumn,
	.archive-title,
	.page-title-wrapper,
	.forums-container,
	#bbpress-forums,
	#comments-list ol,
	.whos-online,
	.st_posts_list_home,
	.page-entry-header *,
	.fr-top-menu,
	.header-wrap,
	.topics-list-cont,
	#attachment_content,
	.entry-content-temp-page,
	#bbp-login .entry-content > p,
	.post-cont-sing,
	#products-temp-wrapper,
	.woocommerce .breadcrumb,
	.type-product,
	.content-area-seller-listing,
	.dokkan_page_title_content span,
	.single-product-wrapper,
	.wel_msg_text,
	.post_entry_header *,
	.profile-info,
	.store-page-wrap,
	.rsb_wrapper,
	h2.rest-review-title
	{
	width: <?php if($layout_width == 'narrow'){echo "940px;";} else {echo "980px;";} ?>
	}
	#main{<?php if($layout_width == 'narrow'){echo "width:980px;border-left:1px solid #eee;border-right:1px solid #eee;margin:0 auto;";} ?>}
	.mobi-info , .mobi-sidebar {
	display: none;
	}
	}

	body > .ui-page, .ui-panel-wrapper{<?php echo 'background-image: url('. get_theme_mod('main_bg_image') .');'; echo 'background-color:'.get_theme_mod('main_bg_color', '#ffffff').';'; echo 'background-repeat:'. get_theme_mod('main_bg_repeat').';'; echo 'background-position:'. get_theme_mod('main_bg_position').';'; echo 'background-attachment'. get_theme_mod('main_bg_attachment').';';?>}
	#branding {<?php if ( !frozr_mobile() ) { ?> width: <?php if ($header_layout == 'in' ) { echo $logo_width +  0.1 . 'em'; } else { echo '100%'; } ?>;<?php } if (!frozr_mobile()) { echo 'text-align:'.$logo_align; } elseif ($theme_layout == 'right') { echo "text-align:right"; } else { echo "text-align:left"; } ?>;}
	#masthead {<?php if ($logo_border == true) { if ($header_layout == "full" ) { echo 'border-bottom:0.1em solid rgba(0,0,0,0.1);'; } else { echo 'border-'; if ($theme_layout == 'left') { echo 'right'; } else { echo 'left'; } echo ':0.1em solid rgba(0,0,0,0.1);'; } } ?>}
	#blog-title a {color:<?php echo $logo_ty_color; ?>}
	#blog-description {color:<?php echo $tagline_ty_color; ?>}
	<?php $n = 1; $c_links_count = $top_user_menu_links_select; 
	while ($c_links_count > 0) { ?>
		.usr_cust_menu_<?php echo $n; ?>,.usr_cust_menu_<?php echo $n; ?>:hover {background-color: <?php echo get_theme_mod('top_user_menu_link_color_'.$n) ?>;color: <?php echo get_theme_mod('top_user_menu_link_icon_color_'.$n) ?> ;}
	<?php $n++; $c_links_count--; } ?>
	<?php if ($main_icon_layout == 'cir') { ?>.mobi_menu{border-radius:50%;}<?php } ?>
	<?php if ($header_layout == 'in' ) { ?>
		.header-wrap {
		display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;
		}
	<?php } ?>
	<?php if ($header_layout == 'full' ) { ?>
		#access .menu_flex {
			-webkit-justify-content:center;-ms-flex-pack:center;-webkit-box-pack: center;justify-content: center;
		}
	<?php } ?>
	
	<?php if ($header_layout == "in") { ?>
		<?php if (frozr_mobile()) { ?>
		#masthead{width: 80%;}
		<?php } ?>
		@media screen and (min-width: 1200px) {
		#access {
			width:calc(75em - <?php echo get_theme_mod('logo_width','15').'em'; ?>);
		}
		}
		@media screen and (max-width: 1200px) {		
		#access {
			<?php if (frozr_mobile()) { ?>
			width: 20%;
			<?php } else { ?>
			width:<?php echo $access_width . 'em'; ?>;
			<?php } ?>
		}
		}
	<?php } else { ?> 
		#access{width:100%;}
		#masthead{padding: 10px 0;width: 100%;}
		<?php if (!frozr_mobile()) { ?>
		#masthead{margin-bottom: 20px;}
	<?php } } ?>
	<?php if (!frozr_mobile()) { ?>
		.menu_flex {
		display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-moz-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;
		<?php if ($theme_layout == 'left') { ?>
			-webkit-justify-content:flex-end;-ms-flex-pack:end;-webkit-box-pack:end;justify-content:flex-end;
		<?php } else { ?>
			-webkit-justify-content:flex-start;-ms-flex-pack:start;-webkit-box-pack:start;justify-content:flex-start;
		<?php } ?>
		}
		#search-home .searchbox-input {
		<?php if ($theme_layout == 'left') { ?>
			position: absolute;
		<?php } else { ?>
			padding: 0 10px 0 0;
		<?php } ?>
			width: 40px;background-color: transparent;color: transparent;
		}
		<?php if ($header_search_layout == "cir") { ?>
		#search-home .searchbox-input:focus {border-radius: 0 20px 20px 0;}
		div#search-home::before{border-radius: 50%;}
		<?php } ?>
		#header-container {
			padding:<?php echo $header_height . 'em 0'; ?>
		}
	<?php } else { ?>
		#header-container{padding:5px 0;}
		.menu_flex{text-align:center;width:100%;min-height:40px;overflow:hidden;}
	<?php } ?>
	<?php if (get_theme_mod('header_image') != 'remove-header') { ?>
		#header-container {
			background-image: url('<?php echo get_theme_mod('header_image'); ?>');
			background-size: cover;
		}
	<?php } ?>
	<?php if ($footer_layout == '2' || frozr_mobile()) { ?>
		.top-links a{display: inline-block;}.copyright, .top-links{display: block;width: 100%;}
		.top-links{margin: 0 0 10px 0;}
		<?php } else { ?>
		.copyright{float: left;margin-left: 10px;max-width: 50%;text-align: left;}
		.top-links{float: right;padding: 0 90px 10px 0;width: 30%;}
		.top-links a{float:right;}
	<?php } ?>
	
	<?php if ( is_home() ) {
	
	if (get_theme_mod('welcome_msg') == true) { ?>
	.welcome_msg *, .welcome_msg a{
		color: <?php echo get_theme_mod('wel_msg_text_color'); ?>;
	}
	.welcome_msg {
		<?php if (get_theme_mod('wel_msg_bg_image') != null) { ?>
		background-image: <?php echo ' url("' . get_theme_mod('wel_msg_bg_image') . '")'; ?>;
		background-color: <?php echo get_theme_mod('wel_msg_bg_color'); ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo get_theme_mod('wel_msg_bg_position'); } ?>;
		background-repeat: <?php echo get_theme_mod('wel_msg_bg_repeat'); ?>;
		background-attachment: <?php echo get_theme_mod('wel_msg_bg_attchment'); ?>;
		background-size: cover;
		<?php } else { ?>
		background-color: <?php echo get_theme_mod('wel_msg_bg_color'); ?>;
		<?php } ?>
		padding: <?php echo get_theme_mod('wel_height', '5'); ?>em 0;
		overflow: hidden;
	}
	.wel_msg_text {margin: 0 auto;display: block;overflow: hidden;text-align:<?php echo get_theme_mod('wel_align', 'center'); ?>}
	<?php }
	
	//Get option to show the home standard posts loop or not
	$loop_1 = (get_theme_mod('use_posts_loop_1', false) == true) ? 1 : 0;
	$loop_2 = (get_theme_mod('use_posts_loop_2', false) == true) ? 1 : 0;
	$loop_3 = (get_theme_mod('use_posts_loop_3', false) == true) ? 1 : 0;
	$loop_4 = (get_theme_mod('use_posts_loop_4', false) == true) ? 1 : 0;
	$loop_5 = (get_theme_mod('use_posts_loop_5', false) == true) ? 1 : 0;
	$loopcounts = 0;
	
	while ($loopcounts < 6) {

	$loopcounts++;
	if ($loopcounts == 1 && $loop_1 == 0 ) { $loopcounts++; }
	if ($loopcounts == 2 && $loop_2 == 0 ) { $loopcounts++; }
	if ($loopcounts == 3 && $loop_3 == 0 ) { $loopcounts++; }
	if ($loopcounts == 4 && $loop_4 == 0 ) { $loopcounts++; }
	if ($loopcounts == 5 && $loop_5 == 0 ) { $loopcounts++; }

	
	if ($loopcounts < 6) { ?>
	
	<?php if (get_theme_mod('use_posts_loop_'.$loopcounts) == true) { 
	$loopcolorty = get_theme_mod('loop_title_ty_color_'.$loopcounts,'#4a515a');
	$loopdesccolorty = get_theme_mod('loop_desc_ty_color_'.$loopcounts,'#4a515a');
	$loopptcolorty = get_theme_mod('loop_ptitle_ty_color_'.$loopcounts,'#4a515a');
	$loopexcolorty = get_theme_mod('loop_pexcerptm_ty_color_'.$loopcounts,'#4a515a');
	$looplyt = get_theme_mod('post_loop_layout_'.$loopcounts,'in');
	$loopcnt = get_theme_mod('post_count_'.$loopcounts,'3');
	$loopbor = get_theme_mod('loop_border_'.$loopcounts, true);
	?>
	.one_standard_post .st_entry_summary .button a, #st_posts_wrapper_<?php echo $loopcounts; ?> .st_entry_summary *, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article footer, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article footer a, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article footer a span {
		color: <?php echo $loopexcolorty; ?>;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article .st_entry_title {
		color: <?php echo $loopptcolorty; ?>;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-description-home *, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-description-home * a, #st_posts_wrapper_<?php echo $loopcounts; ?> .one_standard_post .st_entry_summary p{
		color: <?php echo $loopdesccolorty; ?>;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-posts-title-home {
		color: <?php echo $loopcolorty; ?>;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st_posts_list_home {
		padding: <?php if (frozr_mobile()) { echo '10px'; } elseif (!frozr_mobile() && $looplyt == 'in' || !frozr_mobile() && $foopcnt == 1 ) { echo '60px'; } else { echo '35px'; } ?> 0;
		position: relative;
	}
	<?php if ($looplyt == 'full' || frozr_mobile() ) { ?>
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-header-home {
		width: 99%;
		<?php if (!frozr_mobile()) { echo 'margin: 0 0 2em;'; } ?>
		<?php if ($theme_layout == 'right') { ?>
		text-align: right;
		<?php } ?>
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home .st-home-readmore {
		display:block;width:90px;margin:3em auto 1em;text-align:center;clear:both;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article header,#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article footer {
		width: 95%;text-align: center;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st_entry_summary {
		width: 80%;
	}
	<?php } else { ?>
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-posts-title-home, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-description-home {
		width: 85%;
		<?php if ($theme_layout == 'left') { ?>
		float: left;
		<?php } else { ?>
		float: right; 
		<?php } ?>
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-header-home {
		width: 24%;
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .one_standard_post .st_thumb {
		<?php if ($theme_layout == 'left') { ?>
		float: right;
		<?php } else { ?>
		float: left; 
		<?php } ?>
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home{
		width: <?php if ($loopcnt != 1) { echo '74%;'; } else {echo '100%;';} ?>
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article header,#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article footer {
		width: <?php if ($loopcnt != 1) { echo '90%;'; } else {echo '50%;';} ?>
	}
	<?php if (!frozr_mobile() && $loopcnt != 1 || frozr_tablet() && $loopcnt != 1 ) { ?>
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st_p_title{width:68%;float:<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>;text-align:<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>;}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st_p_price{width:32%;float:<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>;text-align:<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>;}
	<?php } ?>

	#st_posts_wrapper_<?php echo $loopcounts; ?> .st_entry_summary {
		width: 100%;
	}
	<?php } ?>
	#st_posts_wrapper_<?php echo $loopcounts; ?> {
		<?php if (get_theme_mod('loop_bg_image_'.$loopcounts) != null) { ?>
		background-image: <?php echo ' url("' . get_theme_mod('loop_bg_image_'.$loopcounts) . '")'; ?>;
		background-color: <?php echo get_theme_mod('loop_bg_color_'.$loopcounts); ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo get_theme_mod('loop_bg_position_'.$loopcounts); } ?>;
		background-repeat: <?php echo get_theme_mod('loop_bg_repeat_'.$loopcounts); ?>;
		background-attachment: <?php echo get_theme_mod('loop_bg_attchment_'.$loopcounts); ?>;
		background-size: cover;
		<?php } else { ?>
		background-color: <?php echo get_theme_mod('loop_bg_color_'.$loopcounts); ?>;
		<?php } ?>
		<?php if ($loopbor == true) { ?>
		border-top: 0.1em solid rgba(0,0,0,0.1);
		<?php } ?>
	}
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home article {
		<?php if (frozr_mobile()) { ?>
			margin:0 auto 20px;
		<?php } elseif ($loopcnt == 1) { ?>
			width:100%;margin: 0 0 10px;
		<?php } elseif ($loopcnt == 2) { ?>
			width:49.6%;margin:0 0 10px;
		<?php } else { ?>
			width:32%;margin:0 1px 10px;
		<?php } ?>
	}
	<?php } ?>
	#st_posts_wrapper_<?php echo $loopcounts; ?> .st-header-home, #st_posts_wrapper_<?php echo $loopcounts; ?> .st-body-home{
		<?php if (frozr_mobile()) { ?>
		text-align: center;		
		<?php } elseif ($looplyt == 'in' && $theme_layout == 'left') { ?>
		float: left;
		text-align: left;
		<?php } elseif ($looplyt == 'in' && $theme_layout == 'right'){ ?>
		float: right;
		text-align: right;
		<?php } ?>
	}
	
	<?php }} ?>
	<?php if (get_theme_mod('show_top_dishes', true) == true || get_theme_mod('show_latest_rests', true) == true) { ?>
		<?php if ( frozr_mobile() ) { ?>
		.hm_dish_header {
			width: 99%;
			<?php if (!frozr_mobile()) { echo 'margin: 0 0 2em;'; } ?>
			<?php if ($theme_layout == 'right') { ?>
			text-align: right;
			<?php } ?>
		}
		<?php } else { ?>
		.hm_dish_title, .hm_dish_desc {
			width: 85%;
			<?php if ($theme_layout == 'left') { ?>
			float: left;
			<?php } else { ?>
			float: right; 
			<?php } ?>
		}
		.hm_dish_header {
			width: 24%;
		}
		.hm_dish_body {
			width: 74%;
		}
		<?php } ?>
		#top_dishes_wrapper {
			<?php if (get_theme_mod('top_dish_bg_image') != null) { ?>
			background-image: <?php echo ' url("' . get_theme_mod('top_dish_bg_image') . '")'; ?>;
			background-color: <?php echo get_theme_mod('top_dish_bg_color'); ?>;
			background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo get_theme_mod('top_dish_bg_position'); } ?>;
			background-repeat: <?php echo get_theme_mod('top_dish_bg_repeat'); ?>;
			background-attachment: <?php echo get_theme_mod('top_dish_bg_attchment'); ?>;
			background-size: cover;
			<?php } else { ?>
			background-color: <?php echo get_theme_mod('top_dish_bg_color'); ?>;
			<?php } ?>
			<?php if (get_theme_mod('top_dish_border',true) == true) { ?>
			border-top: 0.1em solid rgba(0,0,0,0.1);
			<?php } ?>
		}
		#top_dishes_wrapper .hm_dish_title {
			color: <?php echo get_theme_mod('top_dish_title_ty_color', '#4a515a'); ?>
		}
		#top_dishes_wrapper .hm_dish_desc {
			color: <?php echo get_theme_mod('top_dish_desc_ty_color', '#4a515a'); ?>
		}
		#new_rest_wrapper {
			<?php if (get_theme_mod('latest_rests_bg_image') != null) { ?>
			background-image: <?php echo ' url("' . get_theme_mod('latest_rests_bg_image') . '")'; ?>;
			background-color: <?php echo get_theme_mod('latest_rests_bg_color'); ?>;
			background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo get_theme_mod('latest_rests_bg_position'); } ?>;
			background-repeat: <?php echo get_theme_mod('latest_rests_bg_repeat'); ?>;
			background-attachment: <?php echo get_theme_mod('latest_rests_bg_attchment'); ?>;
			background-size: cover;
			<?php } else { ?>
			background-color: <?php echo get_theme_mod('latest_rests_bg_color'); ?>;
			<?php } ?>
			<?php if (get_theme_mod('latest_rests_border',true) == true) { ?>
			border-top: 0.1em solid rgba(0,0,0,0.1);
			<?php } ?>
		}
		#new_rest_wrapper .hm_dish_title {
			color: <?php echo get_theme_mod('latest_rests_title_ty_color', '#4a515a'); ?>
		}
		#new_rest_wrapper .hm_dish_desc {
			color: <?php echo get_theme_mod('latest_rests_desc_ty_color', '#4a515a'); ?>
		}
		<?php if (frozr_mobile()) { ?>
		.hm_dish_products {
			margin:0 auto 20px;
		}
		<?php } ?>
		.hm_dish_header, .hm_dish_body{
			<?php if (frozr_mobile()) { ?>
			text-align: center;		
			<?php } elseif ($theme_layout == 'left') { ?>
			float: left;
			text-align: left;
			<?php } elseif ($theme_layout == 'right'){ ?>
			float: right;
			text-align: right;
			<?php } ?>
		}
	<?php } ?>
	<?php if (get_theme_mod('show_team') == true) {
	$team_count = get_theme_mod('team_count','3');
	$msection_bg_color = get_theme_mod('msection_bg_color','#4a515a');
	$msection_bg_image = get_theme_mod('msection_bg_image');
	$msection_bg_repeat = get_theme_mod('msection_bg_repeat','no-repeat');
	$msection_bg_position = get_theme_mod('msection_bg_position','center');
	$msection_bg_attachment = get_theme_mod('msection_bg_attachment','scroll');
	$msection_border = get_theme_mod('msection_border',true);
	$msection_ty_color = get_theme_mod('msection_ty_color','#fff');
	$tm_lrg_img_1 = get_theme_mod('tm_lrg_img_1');
	?>
	#team_member_section .st-header-home {
		width: 99%;
		<?php if (!frozr_mobile()) { echo 'margin: 0 0 2em;'; } ?>
		<?php if (frozr_mobile()) { ?>
		text-align: center;		
		<?php } elseif ($theme_layout == 'right') { ?>
		text-align: right;
		<?php } ?>
	}
	#team_member_section {
		<?php if ($team_count == 1) { ?>
		background-image: <?php echo ' url("' . $tm_lrg_img_1 . '")'; ?>;
		background-color: <?php echo $msection_bg_color; ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo 'center'; } ?>;
		background-repeat: no-repeat;
		background-size: cover;
		<?php if (!frozr_mobile()) { ?>
		background-attachment: fixed;
		<?php } ?>
		<?php } elseif ($msection_bg_image != null) { ?>
		background-image: <?php echo ' url("' . $msection_bg_image . '")'; ?>;
		background-color: <?php echo $msection_bg_color; ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo $msection_bg_position; } ?>;
		background-repeat: <?php echo $msection_bg_repeat; ?>;
		background-attachment: <?php echo $msection_bg_attachment; ?>;
		background-size: cover;
		<?php } else { ?>
		background-color: <?php echo $msection_bg_color; ?>;
		<?php } ?>
		<?php if ($msection_border == true) { ?>
		border-top: 0.1em solid rgba(0,0,0,0.1);
		<?php } ?>
	}
	#team_member_section .st-header-home *, .mem_panel .ui-panel-inner * {
		color:<?php echo $msection_ty_color; ?>;
	}
	.mem_panel{
		background-color: <?php echo $msection_bg_color; ?>;
	}
	#team_member_section .one_standard_post .st_thumb {
		<?php if ($theme_layout == 'left') { ?>
		float: right;
		<?php } else { ?>
		float: left; 
		<?php } ?>
	}
	#team_member_section .st-body-home article {
	<?php if (frozr_mobile()) { ?>
		margin:0 auto 20px;
	<?php } elseif ($team_count == 1) { ?>
		width:100%;margin: 0 0 10px;
	<?php } elseif ($team_count == 2) { ?>
		width:49.6%;margin:0 0 10px;
	<?php } else { ?>
		width:32%;margin:0 1px 10px;
	<?php } ?>
	}
	#team_member_section .st-body-home article .entry-header{
		<?php if ($team_count == 1 && !frozr_mobile()) { ?>
		width: 50%;
		<?php } else { ?>
		width: 100%;
		text-align: center;
		<?php } ?>
		display: block;
		overflow: hidden;
		padding: 12px 0;
	}
	<?php if ($team_count != 1) { ?>
	#team_member_section .st-body-home .mem_article_content {
		background-color: #fff;
		border-radius: 3px;
	}
	#team_member_section .st_thumb,#team_member_section .st-thumbnail.has_bg {
		width: 100%;
	}
	#team_member_section .st-body-home article .entry-header {
		text-align: center;
	}
	#team_member_section .st_entry_title {
		font-size: 17px !important;
		line-height: 30px !important;
	}
	<?php } ?>
	<?php while ($team_count > 0) { ?>

	#mpanel_<?php echo $team_count; ?> .panel_breaker{
		background-image: <?php echo ' url("' . get_theme_mod('tm_lrg_img_'.$team_count) . '")'; ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo 'center'; } ?>;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: local;
	}
	
	<?php $team_count--;
	} } ?>
	<?php if (get_theme_mod('show_ig') == true) {
		$ig_bg_image = get_theme_mod('ig_bg_image', false);
		$ig_bg_color = get_theme_mod('ig_bg_color', false);
		$ig_bg_position = get_theme_mod('ig_bg_position', false);
		$ig_bg_repeat = get_theme_mod('ig_bg_repeat', false);
		$ig_bg_attachment = get_theme_mod('ig_bg_attachment', false);
		$ig_border = get_theme_mod('ig_border', false);
		$ig_ty_color = get_theme_mod('ig_ty_color', false); ?>
	
	.img_grd_wrapper {
		<?php if ($ig_bg_image != null) { ?>
		background-image: <?php echo ' url("' . $ig_bg_image . '")'; ?>;
		background-color: <?php echo $ig_bg_color; ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo $ig_bg_position; } ?>;		
		background-repeat: <?php echo $ig_bg_repeat; ?>;
		background-attachment: <?php echo $ig_bg_attachment; ?>;
		background-size: cover;
		<?php } else { ?>
		background-color: <?php echo $ig_bg_color; ?>;
		<?php } ?>
		<?php if ($ig_border == true) { ?>
		border-top: 0.1em solid rgba(0,0,0,0.1);
		<?php } ?>
	}
	.img_grd_wrapper .st-header-home * {
		color:<?php echo $ig_ty_color; ?>;
	}
	<?php } ?>
	.n_ticker {
		background-color:<?php echo get_theme_mod('nt_color','Yellow'); ?>;
	}
	#fro-nt-title > li a {
		color:<?php echo get_theme_mod('nt_ty_color','black'); ?>;
	}
	<?php $sh_home_topics = get_theme_mod('sh_home_topics', true); 
	if ($sh_home_topics == true) {
	$floopcolorty = get_theme_mod('ht_title_ty_color','#4a515a');
	$floopdesccolorty = get_theme_mod('ht_desc_ty_color','#4a515a');
	$floopptcolorty = get_theme_mod('ht_ptitle_ty_color','#4a515a');
	$floopexcolorty = get_theme_mod('ht_pexcerptm_ty_color','#4a515a');
	$flooplyt = get_theme_mod('home_topics_layout','in');
	$floopcnt = get_theme_mod('forums_count','3');
	$floopbor = get_theme_mod('ht_border', true);
	?>
	.bbp-topic-count-home > span, .bbp-topic-count-home > span a {
		color: <?php echo $floopexcolorty; ?>;
	}
	.bbp-topic-permalink-home {
		color: <?php echo $floopptcolorty; ?>;
		margin: 7px 0 0;
	}
	.forum-description-home *, .forum-description-home * a{
		color: <?php echo $floopdesccolorty; ?>;
	}
	.bbp-forum-title-home, .bbp-forum-title-home a, .one_standard_post .bbp-topic-permalink-home{
		color: <?php echo $floopcolorty; ?>;
	}
	.topics-list-cont{
		padding: <?php if (frozr_mobile()) { echo '10px'; } elseif (!frozr_mobile() && $flooplyt == 'in' || !frozr_mobile() && $floopcnt == 1 ) { echo '60px'; } else { echo '35px'; } ?> 0;
		position: relative;
	}
	<?php if ($flooplyt == 'full' || frozr_mobile() ) { ?>
	.bbp-header-home {
		width: 99%;
		<?php if (!frozr_mobile()) { echo 'margin: 0 0 2em;'; } ?>
		<?php if ($theme_layout == 'right') { ?>
		text-align:right;
		<?php } ?>
	}
	.bbp-body-home .topic-home-readmore.button{display:block;clear:both;width:90px;margin:3em auto 1em;text-align:center}
	.bbp-topic-title-home,.bbp-topic-count-home{width:95%;text-align:center}
	<?php } else { ?>
	.bbp-forum-title-home, .forum-description-home{
		<?php if ($theme_layout == 'right') { ?>
		float:right;
		<?php } ?>
		width:85%;}
	.bbp-header-home{width:24%;}
	.topics-list-home .one_standard_post .ht_thumb{
		<?php if ($theme_layout == 'left') { ?>
		float: right;
		<?php } else { ?>
		float: left; 
		<?php } ?>
	}
	.bbp-body-home{
		width: <?php if ($floopcnt != 1) { echo '74%;'; } else {echo '100%;';} ?>
	}
	.bbp-topic-title-home,.bbp-topic-count-home {
		width: <?php if ($floopcnt != 1) { echo '90%;'; } else {echo '100%;';} ?>
	}
	<?php } ?>
	.topics-list-home {
		<?php if (get_theme_mod('ht_bg_image') != null) { ?>
		background-image: <?php echo ' url("' . get_theme_mod('ht_bg_image') . '")'; ?>;
		background-color: <?php echo get_theme_mod('ht_bg_repeat'); ?>;
		background-position: <?php if (frozr_mobile()) { echo'50% 50%'; } else { echo get_theme_mod('ht_bg_position'); } ?>;		
		background-repeat: <?php echo get_theme_mod('ht_bg_repeat'); ?>;
		background-attachment: <?php echo get_theme_mod('ht_bg_attchment'); ?>;
		background-size: cover;
		<?php } else { ?>
		background-color: <?php echo get_theme_mod('ht_bg_color'); ?>;
		<?php } ?>
		<?php if ($floopbor == true) { ?>
		border-top: 0.1em solid rgba(0,0,0,0.1);
		<?php } ?>
	}
	.bbp-body-topics-home {
		<?php if (frozr_mobile() && !frozr_tablet()) { ?>
			margin:0 auto 20px;
		<?php } elseif ($floopcnt == 1) { ?>
			width:100%;margin:0 0 10px;
		<?php } elseif ($floopcnt == 2) { ?>
			width:49.6%;margin:0 0 10px;
		<?php } else { ?>
			width:32%;margin:0 1px 10px;
		<?php } ?>
	}
	.bbp-header-home, .bbp-body-home{
		<?php if (frozr_mobile()) { ?>		
		text-align: center;
		<?php } elseif ($flooplyt == 'in' && $theme_layout == 'left') { ?>
		float: left;
		text-align: left;
		<?php } elseif ($flooplyt == 'in' && $theme_layout == 'right'){ ?>
		float: right;
		text-align: right;
		<?php } ?>
		}
	}
	<?php } ?>
	
	<?php if (get_theme_mod('use_featured_posts') == true) {
	
	$featborder = get_theme_mod('featured_border', true);
	$featpostsborder = get_theme_mod('featured_posts_border', true);
	$featured_title_layout = get_theme_mod('featured_title_layout','default');
	$featured_nav_ani = get_theme_mod('featured_nav_ani','1');

	?>
	.featured_post_cont {
		<?php if ($featborder == true) { ?>
		border-top: 0.1em solid rgba(0,0,0,0.2);
		<?php } ?>
		padding-bottom: <?php if ($featpostsborder != false) { echo '20px'; }; ?>;
	}
	<?php if ($featpostsborder == true) { ?>
	#featured_post {box-shadow: 0 0 0px 20px rgba(0,0,0,0.2);}
	<?php } ?>
	<?php if ($theme_layout == 'left') { ?>
	.featured-info {
		<?php if (!frozr_mobile()) { ?>
		-webkit-box-pack: start;-webkit-justify-content: flex-start;-ms-flex-pack: start;justify-content: flex-start;
		<?php } else { ?>
		text-align: left;
		<?php } ?>
	}
	.featured-cat-des i,.featured-cat-des span {margin: 0 5px 0 0;}
	<?php } elseif ($theme_layout == 'right') { ?>
		.featured-info {
		<?php if (!frozr_mobile()) { ?>
		-webkit-box-pack: start;-webkit-justify-content: flex-start;-ms-flex-pack: start;justify-content: flex-start;
		<?php } else { ?>
		text-align: right;
		<?php } ?>
	}
	.featured-cat-des i,.featured-cat-des span {margin: 0 0 0 5px;}
	<?php } ?>
	<?php if ($featured_title_layout == 'style1') { ?>
	.fcd-c:after{right:-76px}
	.fcd-c:before{left:-76px}
	.fcd-c:before,.fcd-c:after{content:"";height:55px;position:absolute;top:50%;margin:-27.5px 0 0;transform:rotate(-224deg);-ms-transform:rotate(-224deg);-moz-transform:rotate(-224deg);-webkit-transform:rotate(-224deg);-o-transform:rotate(-224deg);width:55px}
	.fcd-c{box-shadow:-3px 0 0 0 rgba(0,0,0,0.3),3px 0 0 0 rgba(0,0,0,0.3),-47px 0 0 0 rgba(0,0,0,0.3),47px 0 0 0 rgba(0,0,0,0.3);background-color:rgba(0,0,0,0.1)}
	
	<?php } elseif ($featured_title_layout == 'style2') { ?>
	.fcd-c:after{border-right:30px solid transparent;right:1px}
	.fcd-c:before{border-left:30px solid transparent;left:1px}
	.fcd-c:before,.fcd-c:after{border-bottom:12px solid rgba(0,0,0,0.3);opacity:.5;content:"";position:absolute;top:-13px}
	.fcd-c{box-shadow:0 -17px 19px -14px rgba(0,0,0,0.3);background-color:rgba(0,0,0,0.1)}
	
	<?php } elseif ($featured_title_layout == 'style3') { ?>
	.fcd-c:after{border-bottom:20px solid rgba(0,0,0,0.3);border-right:40px solid transparent;content:"";position:absolute;right:1px;opacity:.5;top:-20px}
	.fcd-c:before{border-left:40px solid transparent;border-top:20px solid rgba(0,0,0,0.3);bottom:-20px;opacity:.5;content:"";left:1px;position:absolute}
	.fcd-c{background-color:rgba(0,0,0,0.1)}
	
	<?php } elseif ($featured_title_layout == 'style4') { ?>
	.fcd-c:after{border-right:30px solid transparent;border-top:12px solid rgba(0,0,0,0.3);bottom:-13px;content:"";opacity:.5;position:absolute;right:1px}
	.fcd-c:before{border-left:30px solid transparent;border-top:12px solid rgba(0,0,0,0.3);bottom:-13px;content:"";opacity:.5;left:1px;position:absolute;border-left:30px solid transparent;left:1px}
	.fcd-c{background-color:rgba(0,0,0,0.1)}
	
	<?php } elseif ($featured_title_layout == 'style5') { ?>
	.fcd-c:before{bottom:-33px;content:"\f0d7";font-family:fontawesome;opacity:.8;font-size:50px;position:absolute;left:20px;color:rgba(0,0,0,0.3)}
	.fcd-c{background-color:rgba(0,0,0,0.1)}
	
	<?php } } ?>

	<?php if ($featured_nav_ani == 2) { ?>
	.ch-info-rm .ch-info-front-rm,.ch-info-rm .ch-info-back-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
	.ch-info-rm .ch-info-front-rm{-webkit-transform-origin:95% 40%;-moz-transform-origin:95% 40%;-o-transform-origin:95% 40%;-ms-transform-origin:95% 40%;transform-origin:95% 40%;z-index:99}
	.ch-item-rm:hover .ch-info-front-rm{-webkit-transform:rotate(-110deg);-moz-transform:rotate(-110deg);-o-transform:rotate(-110deg);-ms-transform:rotate(-110deg);transform:rotate(-110deg)}
	
	<?php } elseif ($featured_nav_ani == 3) { ?>
	.ch-info-rm .ch-info-front-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
	.ch-info-rm .ch-info-back-rm{-webkit-transition:-webkit-transform .3s ease-in-out 0.2s,opacity .3s ease-in-out .2s;-moz-transition:-moz-transform .3s ease-in-out 0.2s,opacity .3s ease-in-out .2s;-o-transition:-o-transform .3s ease-in-out 0.2s,opacity .3s ease-in-out .2s;-ms-transition:-ms-transform .3s ease-in-out 0.2s,opacity .3s ease-in-out .2s;transition:transform .3s ease-in-out 0.2s,opacity .3s ease-in-out .2s;-webkit-transform:translateX(60px) rotate(90deg);-moz-transform:translateX(60px) rotate(90deg);-o-transform:translateX(60px) rotate(90deg);-ms-transform:translateX(60px) rotate(90deg);transform:translateX(60px) rotate(90deg);-webkit-backface-visibility:hidden}
	.ch-info-rm .ch-info-front-rm{-webkit-transform-origin:95% 40%;-moz-transform-origin:95% 40%;-o-transform-origin:95% 40%;-ms-transform-origin:95% 40%;transform-origin:95% 40%;z-index:99}
	.ch-item-rm:hover .ch-info-front-rm{-webkit-transform:rotate(-110deg);-moz-transform:rotate(-110deg);-o-transform:rotate(-110deg);-ms-transform:rotate(-110deg);transform:rotate(-110deg)}
	.ch-info-rm:hover .ch-info-back-rm{-webkit-transform:translateX(0px) rotate(0deg);-moz-transform:translateX(0px) rotate(0deg);-o-transform:translateX(0px) rotate(0deg);-ms-transform:translateX(0px) rotate(0deg);transform:translateX(0px) rotate(0deg)}
	
	<?php }  elseif ($featured_nav_ani == 4) { ?>
	.ch-info-rm .ch-info-front-rm,.ch-info-rm .ch-info-back-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
	.ch-info-rm > div{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden}
	.ch-info-wrap-rm{-webkit-perspective:800px;-moz-perspective:800px;-o-perspective:800px;-ms-perspective:800px;perspective:800px}
	.ch-info-back-rm{-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;transform-style:preserve-3d}
	.ch-info-rm .ch-info-back-rm{-webkit-transform:rotate3d(0,1,0,-180deg);-moz-transform:rotate3d(0,1,0,-180deg);-o-transform:rotate3d(0,1,0,-180deg);-ms-transform:rotate3d(0,1,0,-180deg);transform:rotate3d(0,1,0,-180deg)}
	.ch-item-rm:hover .ch-info-back-rm{-webkit-transform:rotate3d(0,1,0,0deg);-moz-transform:rotate3d(0,1,0,0deg);-o-transform:rotate3d(0,1,0,0deg);-ms-transform:rotate3d(0,1,0,0deg);transform:rotate3d(0,1,0,0deg)}
	.ch-info-rm:hover .ch-info-front-rm{-webkit-transform:rotate3d(0,1,0,-180deg);-moz-transform:rotate3d(0,1,0,-180deg);-o-transform:rotate3d(0,1,0,-180deg);-ms-transform:rotate3d(0,1,0,-180deg);transform:rotate3d(0,1,0,-180deg)}
	
	<?php } elseif ($featured_nav_ani == 5) { ?>
	.ch-info-rm .ch-info-front-rm,.ch-info-rm .ch-info-back-rm{-webkit-transition:all .6s ease-in-out;-moz-transition:all .6s ease-in-out;-o-transition:all .6s ease-in-out;-ms-transition:all .6s ease-in-out;transition:all .6s ease-in-out}
	.ch-info-rm .ch-info-front-rm{-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;z-index:99;box-shadow:inset 2px 1px 4px rgba(0,0,0,0.1)}
	.ch-info-wrap-rm,.ch-info-rm{-webkit-perspective:800px;-moz-perspective:800px;-o-perspective:800px;-ms-perspective:800px;perspective:800px;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;transform-style:preserve-3d}
	.ch-info-rm:hover .ch-info-front-rm{-webkit-transform:rotate3d(1,0,0,-180deg);-moz-transform:rotate3d(1,0,0,-180deg);-o-transform:rotate3d(1,0,0,-180deg);-ms-transform:rotate3d(1,0,0,-180deg);transform:rotate3d(1,0,0,-180deg);box-shadow:inset 0 0 5px rgba(255,255,255,0.2),inset 0 0 3px rgba(0,0,0,0.3)}
	
	<?php } elseif ($featured_nav_ani == 6) { ?>
	.ch-info-rm{-webkit-perspective:900px;-moz-perspective:900px;-o-perspective:900px;-ms-perspective:900px;perspective:900px}
	.ch-info-rm .ch-info-front-rm,.ch-info-rm .ch-info-back-rm{-webkit-transition:all .4s linear;-moz-transition:all .4s linear;-o-transition:all .4s linear;-ms-transition:all .4s linear;transition:all .4s linear;-webkit-transform-origin:50% 0;-moz-transform-origin:50% 0;-o-transform-origin:50% 0;-ms-transform-origin:50% 0;transform-origin:50% 0}
	.ch-info-rm .ch-info-back-rm{-webkit-transform:translate3d(0,0,-80px) rotate3d(1,0,0,90deg);-moz-transform:translate3d(0,0,-80px) rotate3d(1,0,0,90deg);-o-transform:translate3d(0,0,-80px) rotate3d(1,0,0,90deg);-ms-transform:translate3d(0,0,-80px) rotate3d(1,0,0,90deg);transform:translate3d(0,0,-80px) rotate3d(1,0,0,90deg)}
	.ch-info-rm{-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-o-transform-style:preserve-3d;-ms-transform-style:preserve-3d;transform-style:preserve-3d}
	.ch-info-rm:hover .ch-info-front-rm{-webkit-transform:translate3d(0,80px,0) rotate3d(1,0,0,-90deg);-moz-transform:translate3d(0,80px,0) rotate3d(1,0,0,-90deg);-o-transform:translate3d(0,80px,0) rotate3d(1,0,0,-90deg);-ms-transform:translate3d(0,80px,0) rotate3d(1,0,0,-90deg);transform:translate3d(0,80px,0) rotate3d(1,0,0,-90deg);opacity:0}
	.ch-info-rm:hover .ch-info-back-rm{-webkit-transform:rotate3d(1,0,0,0deg);-moz-transform:rotate3d(1,0,0,0deg);-o-transform:rotate3d(1,0,0,0deg);-ms-transform:rotate3d(1,0,0,0deg);transform:rotate3d(1,0,0,0deg)}
	
	<?php } elseif ($featured_nav_ani == 7) { ?>
	.ch-info-back-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out;-webkit-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-backface-visibility:hidden}
	.ch-info-rm:hover .ch-info-back-rm{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
	
	<?php } else { ?>
	.ch-info-rm > div{-webkit-backface-visibility:hidden}
	.ch-info-rm .ch-info-front-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
	.ch-info-rm .ch-info-back-rm{-webkit-transition:all .2s ease-in-out .1s;-moz-transition:all .2s ease-in-out .1s;-o-transition:all .2s ease-in-out .1s;-ms-transition:all .2s ease-in-out .1s;transition:all .2s ease-in-out .1s}
	.ch-info-rm .ch-info-front-rm{-webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}
	.ch-item-rm:hover .ch-info-front-rm{-webkit-transform:scale(0);-moz-transform:scale(0);-o-transform:scale(0);-ms-transform:scale(0);transform:scale(0);opacity:0}
	.ch-info-rm .ch-info-back-rm{-webkit-transform:scale(1.5);-moz-transform:scale(1.5);-o-transform:scale(1.5);-ms-transform:scale(1.5);transform:scale(1.5)}
	.ch-item-rm:hover .ch-info-back-rm{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}
	<?php } ?>
	<?php }
	$blogplyt = get_theme_mod('blog_posts_layout','three');
	
	if ($blogplyt =="three" && !frozr_mobile()) { ?>
	.brick{float: left;width:27%;margin: 0;}
	.blog-bg{width:33%;}
	
	<?php } elseif ($blogplyt =="two" && !frozr_mobile() || frozr_tablet()) { ?>
	.brick{float: left;width:44%;margin: 0;}
	.blog-bg{width:50%;}
	
	<?php } elseif ($blogplyt =="one" || frozr_mobile() && !frozr_tablet()) { ?>
	.brick {width:90%;margin: 10px 0 10px 2%;}
	.blog-bg{width:100%;}
	<?php }
	if (function_exists('bbpress') ) {
	if (is_bbpress() || is_page_template('archive-forum.php') ) { ?>
	/*forums*/
	.forum-announcements-box .forum_announcement_one {
		background-color:<?php echo get_theme_mod('bbp_notice_color_1'); ?>;
		color: <?php echo get_theme_mod('bbp_notice_font_color_1'); ?>;
	}
	.forum-announcements-box .forum_announcement_one *, .forum-announcements-box .forum_announcement_one a{
		color: <?php echo get_theme_mod('bbp_notice_font_color_1'); ?>;
	}
	.forum-announcements-box .forum_announcement_two {
		background-color:<?php echo get_theme_mod('bbp_notice_color_2'); ?>;
		color: <?php echo get_theme_mod('bbp_notice_font_color_2'); ?>;
	}
	.forum-announcements-box .forum_announcement_two *, .forum-announcements-box .forum_announcement_two a{
		color: <?php echo get_theme_mod('bbp_notice_font_color_2'); ?>;
	}
	.create-new-topic .topic_announcement_1 {
		background-color:<?php echo get_theme_mod('bbp_notice_color_3'); ?>;
		color: <?php echo get_theme_mod('bbp_notice_font_color_3'); ?>;
	}
	.create-new-topic .topic_announcement_1 *, .create-new-topic .topic_announcement_1 a{
		color: <?php echo get_theme_mod('bbp_notice_font_color_3'); ?>;
	}
	.create-new-topic .topic_announcement_2 {
		background-color:<?php echo get_theme_mod('bbp_notice_color_4'); ?>;
		color: <?php echo get_theme_mod('bbp_notice_font_color_4'); ?>;
	}
	.create-new-topic .topic_announcement_2 *, .create-new-topic .topic_announcement_2 a{
		color: <?php echo get_theme_mod('bbp_notice_font_color_4'); ?>;
	}
	<?php } } ?>
	/*Woo*/
	<?php if (class_exists( 'WooCommerce' )) {
	$products_per_row = get_theme_mod('products_per_row',3);
	$froz_icon_sidebar = get_theme_mod('froz_icon_sidebar', true);
	?>
	.item-container {
		<?php if (frozr_mobile()) { ?>
		width: 100%;
		<?php } else { ?>
		width: <?php if ($products_per_row == 1) { echo '100%';} elseif ($products_per_row == 2) { echo '50%'; } else { echo '33%';} ?>;
		<?php } ?>
	}
	<?php if ($froz_icon_sidebar == true) { ?>
	.shop-sidebar {width: 10%;}
	.p_wrap {width: 90%;}
	.woo-sidebar-widget:before {
		color: #fff;
		content: "<?php if ($theme_layout == 'right') { echo '\f0da'; } else { echo '\f0d9'; } ?>";
		font-family: fontawesome;font-size: 36px;
		<?php if ($theme_layout == 'right') { echo 'right'; } else { echo 'left'; } ?>: -11px;
		position: absolute;top: 10px;
	}
	.woo-sidebar-widget {
		background-color: white;border: 1px solid #ddd;display: none;
		margin: 0 0 0 <?php if ($theme_layout == 'right') { echo '-232px'; } else { echo '100%'; } ?>;
		width: 270px;padding: 10px;position: absolute;top: -1px;z-index: 130;
	}
	.shop-sidebar > div{border-bottom:1px solid #ddd;cursor:pointer;position:relative;text-align:center;width:100%}
	.active_woo_widget .woo-sidebar-widget{display:block}
	.widget-icon {
		cursor: pointer;display: inline-block;font-size: 20px;height: 45px;
		<?php if (frozr_mobile()) { ?>
		padding: 26% 20px 0;width: 30%;
		<?php } else { ?>
		padding: 26% 0 0;width: 100%;	
		<?php } ?>
	}
	.active_woo_widget .widget-icon, .widget-icon:hover {background-color: #f0f0f0;color: #444;}
	.woo-sidebar-widget .woocommerce-product-search .search-field {width: 92%;}

	<?php } else { ?>
	.shop-sidebar {width: 20%;}
	.p_wrap {
		width: <?php if (frozr_mobile()) { echo '90%';} else { echo '80%'; } ?>;
	}
	.widget-icon {float: left;font-size: 15px;padding: 7px 7px 0 0;}
	.woo-widget-wrapper {clear: both;margin: 0 0 2em;}
	.woo-sidebar-widget .woocommerce-product-search .search-field {width: 64%;}
	<?php } } ?>
	
	/*mobile & other CSS*/
	<?php if (!frozr_mobile()) { echo "#search-home, "; } ?>.mobi_menu{height:40px;width:40px}
	<?php if (!frozr_mobile()) { ?>
	div.page {margin: 0 auto;display: -webkit-box;display: -ms-flexbox;display: -webkit-flex;display: -webkit-box;display: flex;-webkit-box-orient: horizontal;-moz-box-orient: horizontal;-ms-box-orient: horizontal;box-orient: horizontal;-webkit-flex-wrap: nowrap;-ms-flex-wrap: nowrap;flex-wrap: nowrap;-webkit-box-pack: center;-ms-box-pack: center;box-pack: center;-webkit-justify-content: center;-ms-flex-pack: center;justify-content: center;-ms-flex-line-pack: center;-webkit-box-align: stretch;-ms-box-align: stretch;box-align: stretch;-webkit-align-items: stretch;-ms-flex-align: stretch;align-items: stretch;
	}
	<?php if ( is_active_sidebar( 'page-inset' ) ) { ?>
	.page-info:nth-child(1) {width: 22%;}
	.entry-content:nth-child(2) {width: 54%;}
	.page-inset-sidebar:nth-child(3) {width: 20%;}
	
	<?php } else { ?>
	.page-info:nth-child(1) {width: 22%;}
	.entry-content:nth-child(2) {width: 74%;}
	<?php } } ?>
	
	<?php if (!frozr_mobile() || frozr_tablet() ) { ?>
	.post-cont-sing {margin: 0 auto;display: -webkit-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-orient: horizontal;-moz-box-orient: horizontal;-ms-box-orient: horizontal;box-orient: horizontal;-webkit-flex-wrap: nowrap;-ms-flex-wrap: nowrap;flex-wrap: nowrap;-webkit-box-pack: center;-ms-box-pack: center;box-pack: center;-webkit-justify-content: center;-ms-flex-pack: center;justify-content: center;-ms-flex-line-pack: center;-webkit-box-align: stretch;-ms-box-align: stretch;box-align: stretch;-webkit-align-items: stretch;-ms-flex-align: stretch;align-items: stretch;
	}
	<?php if ( is_active_sidebar( 'single-insert' ) && check_post_meta() ) { ?>
	.post-entry-utility:nth-child(1) {width:10%;}
	.single-post-content:nth-child(2) {width:64%;}
	.single-insert-sidebar:nth-child(3) {width: 22%;}
	
	<?php } elseif (is_active_sidebar( 'single-insert' )) { ?>
	.single-post-content:nth-child(1) {width:74%;}
	.single-insert-sidebar:nth-child(2) {width: 22%;}
	
	<?php } elseif (check_post_meta()) { ?>
	.post-entry-utility:nth-child(1) {width:10%;}
	.single-post-content:nth-child(2) {width:86%;} 
	
	<?php } else { ?>
	.single-post-content:nth-child(1) {width:100%;}
	<?php } } ?>
	
	/* some conditional mobile options
================================================== */    
	<?php if (frozr_mobile()) { echo "@media (min-width: 768px) {"; } ?>
	#search-home,.mobi_menu{position:relative}
	#search-home .searchbox-input:focus{width:230px}
	#search-home input::-moz-placeholder,#search-home input:focus::-moz-placeholder{color:transparent}
	#search-home input::-webkit-input-placeholder,#search-home input:focus::-webkit-input-placeholder{color:transparent}
	#search-home input:-ms-input-placeholder,#search-home input:focus:-ms-input-placeholder{color:transparent}
	#search-home input:focus::-moz-placeholder{color:rgba(0,0,0,0.5)}
	#search-home input:focus::-webkit-input-placeholder{color:rgba(0,0,0,0.5)}
	#search-home input:focus:-ms-input-placeholder{color:rgba(0,0,0,0.5)}
	div#search-home::before{content:"\f002";font-size:1.5em;width:40px;font-family:FontAwesome;position:absolute;z-index:99;cursor:pointer;height:40px;left:0;line-height:1.6em}
	<?php if (!frozr_mobile()) { ?>
	/*Slider posts*/
	.c-thumbnail > a {padding: 120px;}
	.slider-head-img {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		width: 50%;height: 240px;
		margin: <?php if ($theme_layout == 'right') { echo '0 0 22px 22px;'; } else { echo '0 22px 22px 0;'; } ?>
	}
	.slider-head-img > iframe, .gallery_slider_img, .content-slider, .b-video iframe,.b-video embed,.c-thumbnail,g-thumbnail {height: 240px;}
	.slider-meta-no-img .blog-head-title {width:99%;}
	.blog-head-title {display: inline-block;width:45%;}
	.c-status-pic {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
	}
	.status {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
		width: 70%;
	}
	.post-entry-no-img {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		overflow: visible;width: 30%;margin: 10px 0 0 0;
	}
	.p-e-n {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
		width: 60%;
	}
	.entry-no-img-author,.entry-no-img-date,.entry-no-img-cat,.entry-no-img-comments-link,.post-entry-no-img .edit-link {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
	}
	.entry-no-img-author.animi_author {border-top: 1px solid rgba(0,0,0,0.1);}
	.slider-meta-no-img {
		padding: <?php if ($theme_layout == 'right') { echo '0 22px 0 0;'; } else { echo '0 0 0 22px;'; } ?>
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		margin-top: 0;min-height: 140px;width: 60%;
		<?php if ($theme_layout == 'right') { echo 'text-align: right;'; } ?>
	}
	.slider-post-meta {padding:10px 0;	}
	.p_frames .blog-head-content, .p_frames .blog-head-title{width:93%;}
	<?php } ?>
	/*Featured Posts*/
	.featured_post_cont .navigation{margin:50px 0 0}
	.featured-info{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-ms-box-orient:horizontal;box-orient:horizontal;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-box-align:center;-moz-box-align:center;-ms-box-align:center;box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;margin:0 auto;width:97%}
	.featured-cat-des:nth-child(1){-webkit-box-ordinal-group:1;-moz-box-ordinal-group:1;-ms-box-ordinal-group:1;box-ordinal-group:1;-webkit-order:0;-ms-flex-order:0;order:0;-webkit-box-flex:0;-moz-box-flex:0;-ms-box-flex:0;box-flex:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}
	.featured_posts_desc:nth-child(2){-webkit-box-ordinal-group:1;-moz-box-ordinal-group:1;-ms-box-ordinal-group:1;box-ordinal-group:1;-webkit-order:0;-ms-flex-order:0;order:0;-webkit-box-flex:0;-moz-box-flex:0;-ms-box-flex:0;box-flex:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center;max-width:70%}
	/*Standard Posts*/
	.mem_panel .panel_breaker{height:400px;}
	#team_member_section .st-thumbnail.has_bg {height:280px;}
	.mem_panel {width: 40em;}
	.mem_panel.ui-panel-position-right{right:-40em}
	.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-overlay,.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-push{right:0;-webkit-transform:translate3d(40em,0,0);-moz-transform:translate3d(40em,0,0);transform:translate3d(40em,0,0)}
	.team_Panel_visible .ui-panel-dismiss-open.ui-panel-dismiss-position-right{right:40em}
	.mem_article_content{width:90%;}
	#st_posts_wrapper {padding: 30px 0;}
	.st-body-home article {display: inline-table;min-height: 120px;}
	.one_standard_post .st_thumb, .one_standard_post .ht_thumb{
		width: <?php if (frozr_mobile()) { echo '100%;'; } else { echo '50%;'; } ?>
		display: block;
	}
	.one_standard_post .st-thumbnail, .one_standard_post .twocol .st-thumbnail, .one_standard_post .bbp-topic-no-thumbnail {
		width: <?php if (frozr_mobile()) { echo '95%;'; } else { echo '90%;'; } ?>;
		height: 240px;
		margin: 0 auto;
	}
	.twocol .st-thumbnail {height: 200px;}
	.st-thumbnail {height: 170px;}
	/*hometopics*/
	.bbp-body-topics-home{min-height:120px;display:inline-table;}
	/*blog posts*/
	#p-post .slider-post-meta {margin: 10px 0;}
	/*single post*/
	.single_author_pic:hover > div,.the-social-box:hover > div,.single_tax:hover > span,.single_entry_archive:hover > span,.single_entry_date:hover > span,.single_category:hover > span,.single_tag:hover > span,.single_comments_info:hover > span,.single_link:hover > span,.single_edit_link:hover > span {
		<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>: 75px;
	}
	.single_author_pic:hover > div,.the-social-box:hover > div {width: 300px;}
	.single_tax,.single_entry_archive,.single_entry_date,.single_category,.single_tag,.single_link,.single_comments_info,.single_edit_link,.single_author_pic,.the-social-box,.zilla_like_break {background-position: center 15px;}
	.comment-author.vcard {
		float: <?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>;
		margin: <?php if ($theme_layout == 'right') { echo '17px 0 0 5px';} else { echo '17px 5px 0 0';} ?>;
	}
	.comment-content{display:inline-block;margin-top:14px;width:81%}
	.comment-content:before{left:-13px;top:0}
	.comment-reply.fs-icon-reply{color:#000;height:16px;margin-right:10px;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=80);filter:alpha(opacity=80);opacity:.8;position:relative;top:21px;width:auto}
	.comment-meta{float:right}
	.post_entry_header{padding-top:50px}
	.watermark_container{width:80%}
	.single-post-content{padding:30px 20px 0}
	/*WooCommerce*/
	.woocommerce-tabs .panel.entry-content > * {width:98%;}
	#review_form .comment-form-email > input,#review_form .comment-form-author > input{width:94%}
	.product-pricing .amount{display:block}
	/*Full-width pages*/
	.full_width_page_meta .pagenav > ul{background-color:#fff;border:1px solid #ddd;position:absolute;top:85%;width:90%;margin:5px 0 0;z-index:999}
	.full_width_page_meta .page-sub-pages-title,.full_width_page_meta .page-sub-pages-title.active{width:98%;line-height:1.7em}
	.full_width_page_meta .page-subpages{float:left;overflow:visible;margin:0 0 0 10px;background-color:rgba(0,0,0,0.1);width:23%}
	.full_width_page_meta .page-tags{padding:10px 0}
	.full_width_page_meta .page-tags,.full_width_page_meta .the-social-box-page{float:right;margin:0 15px 0 0}
	.full_width_page_meta .s-tit923le.fs-icon-caret-right,.full_width_page_meta .page-tags > span{display:none}
	.s-title.active.fs-icon-caret-down:before,.s-title.fs-icon-caret-right:before,.page-tags > span.fs-icon-caret-right:before,.page-tags > span.fs-icon-caret-down:before,.page-sub-pages-title.fs-icon-caret-right:before,.page-sub-pages-title.fs-icon-caret-down:before{right:5%}
	/*BBpress*/
	.forum-announcements-box > div > p, #new-post .create-new-topic > div > p {width: 94%;}
	.forums-right-column .welcome_text p {width: 93%;}
	#bbpress-forums div.bbp-topic-content,#bbpress-forums div.bbp-reply-content {
		margin-<?php if ($theme_layout == 'right') { echo 'left'; } else { echo 'right'; } ?>: 20px;
		margin-<?php if ($theme_layout == 'right') { echo 'right'; } else { echo 'left'; } ?>: 17%;
	}
	#bbpress-forums div.bbp-topic-author,#bbpress-forums div.bbp-reply-author,#bbpress-forums li.bbp-header .bbp-topic-author,#bbpress-forums li.bbp-footer .bbp-topic-author,#bbpress-forums li.bbp-header .bbp-reply-author,#bbpress-forums li.bbp-footer .bbp-reply-author{width:17%}
	div.bbp-template-notice p,.bbp-template-notice-s p{width:91%}
	#bbpress-forums .bbp-form input{width:auto;margin:2px 0 2px 1px;}
	.bbp-topic-no-thumbnail,.bbp-topic-thumbnail{height:150px}
	.bbp_user_desc > h1,.bbp_user_bio,.bbp_user_det{width:80%}
	.bbp_user_avatar{float:left;text-align:right;width:30%;margin:20px 0 0}
	.bbp_user_avatar_img{float:right;margin-top:20px}
	.bbp_user_desc{float:right;width:65%}
	.statistics_item{margin:0 15px}
	.statistics_item_edit{float:right;margin:0 15px}
	.bbp_user_info{padding-bottom:50px}
	#bbpress-forums{padding:50px 0}
	
	<?php if (frozr_mobile()) { echo "}"; ?>
	/*========================*/
    @media (max-width: 768px)  {
	/*Base*/
	img {max-width: 100% !important;max-height: 100% !important;margin-right: 0 !important;margin-left: 0 !important;}
	/*Header Styles*/
	#search-home input::-moz-placeholder, #search-home input:focus::-moz-placeholder{color:rgba(0,0,0,0.2)}
	#search-home input::-webkit-input-placeholder, #search-home input:focus::-webkit-input-placeholder{color:rgba(0,0,0,0.2)}
	#search-home input:-ms-input-placeholder, #search-home input:focus:-ms-input-placeholder{color:rgba(0,0,0,0.2)}
	/*Slider posts*/
	.c-thumbnail > a {padding:120px;}
	.slider-head-img {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		width: 50%;height: 240px;
		margin: <?php if ($theme_layout == 'right') { echo '0 0 22px 22px;'; } else { echo '0 22px 22px 0;'; } ?>
	}
	.slider-head-img > iframe, .gallery_slider_img, .content-slider, .b-video iframe,.b-video embed,.c-thumbnail,g-thumbnail {height: 240px;}
	.slider-meta-no-img .blog-head-title {width:99%;}
	.blog-head-title {display:inline-block;width:45%;}
	.c-status-pic {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
	}
	.status {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
		width: 70%;
	}
	.post-entry-no-img {
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		overflow: visible;width: 30%;margin: 10px 0 0 0;
	}
	.p-e-n {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
		width: 80%;
	}
	.entry-no-img-author,.entry-no-img-date,.entry-no-img-cat,.entry-no-img-comments-link,.post-entry-no-img .edit-link {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
	}
	.entry-no-img-author.animi_author {border-top: 1px solid rgba(0,0,0,0.1);}
	.slider-meta-no-img {
		padding: <?php if ($theme_layout == 'right') { echo '0 22px 0 0;'; } else { echo '0 0 0 22px;'; } ?>
		float: <?php if ($theme_layout == 'right') { echo 'right;'; } else { echo 'left;'; } ?>
		margin-top: 0;min-height: 140px;width: 60%;
		<?php if ($theme_layout == 'right') { echo 'text-align: right;'; } ?>
	}
	.slider-post-meta {padding:10px 0;}
	.p_frames .blog-head-content, .p_frames .blog-head-title{width:93%;}
	/*posts*/
	.c-thumbnail > a{padding:95px}
	.quote-container{margin:0 auto;width:80%}
	.entry-no-img-author,.entry-no-img-date,.entry-no-img-cat,.entry-no-img-comments-link,.post-entry-no-img .edit-link {
		float: <?php if ($theme_layout == 'right') { echo 'left;'; } else { echo 'right;'; } ?>
	}
	.p_frames .blog-head-content{width:80%}
	.p_frames .blog-head-title,.p_frames .blog-head-title-p{width:100%}
	.featured-info{margin:0 auto;width:85%}
	.featured_post_cont .navigation{margin:10px 0}
	/*Standard Posts*/
	#team_member_section .st-thumbnail.has_bg {height:170px;}
	.mem_panel .panel_breaker{height:310px;}
	.mem_panel {width: 30em;}
	.mem_panel.ui-panel-position-right{right:-30em}
	.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-overlay,.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-push{right:0;-webkit-transform:translate3d(30em,0,0);-moz-transform:translate3d(30em,0,0);transform:translate3d(30em,0,0)}
	.team_Panel_visible .ui-panel-dismiss-open.ui-panel-dismiss-position-right{right:30em}
	.mem_article_content{width:90%;}
	.st-thumbnail{height:170px;margin:0 auto;}
	.t-one .st-thumbnail,.t-one .bbp-topic-no-thumbnail,.t-one .bbp-topic-thumbnail{width:70%;height:210px;}
	/*blog posts*/
	.two-thirds-cloumn {overflow: hidden;}
	/*single post*/
	.single_author_pic:hover > div,.the-social-box:hover > div,.single_tax:hover > span,.single_entry_archive:hover > span,.single_entry_date:hover > span,.single_category:hover > span,.single_tag:hover > span,.single_comments_info:hover > span,.single_link:hover > span,.single_edit_link:hover > span {
		<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>: 48px;
	}
	.single_author_pic:hover > div,.the-social-box:hover > div{width:240px}
	.entry-content-wrapper{position:relative;min-height:600px}
	.single_tax,.single_entry_archive,.single_entry_date,.single_category,.single_tag,.single_link,.single_comments_info,.single_edit_link,.single_author_pic,.the-social-box,.zilla_like_break{background-position:center;border-bottom:1px solid rgba(0,0,0,0.2);margin:0 auto}
	.post-entry-utility{width:15%}
	.post-entry-utility,.post-entry-utility > div > a{display:none}
	.post-entry-utility.active{position:absolute;display:block;height:100%;z-index:9999}
	.comment-content{margin-top:20px;width:95%}
	.comment .children .children{margin:0}
	#comments-list .comment .children li{box-shadow:-1px 0 1px -1px #777}
	.comment-author.vcard {
		margin: 10px 0;
		float: <?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>;
		text-align: center;
	}
	.mobi-info,.mobi-sidebar{margin:0 0 0 15px;color:rgba(0,0,0,0.6)}
	.single-insert-sidebar{display:none}
	.single-insert-sidebar.active{display:block;position:absolute;width:250px;right:0;top:0;height:100%;background-color:#fff;min-height:600px}
	.post_entry_header{padding-top:25px;text-align:center}
	.watermark_container{width:98%}
	.single-post-content{padding:30px 10px 0}
	/*WooCommerce*/
	.single-product-image{display:table}
	.single-product-image,.product-header,.product-details,.product-summary,.product-body{width:95%}
	.woocommerce-tabs .panel.entry-content > *{width:90%}
	.product-details{margin:10px auto}
	.product-summary{margin:20px auto}
	.woocommerce #reviews #comments ol.commentlist{width:auto}
	#review_form .comment-form-email > input,#review_form .comment-form-author > input{width:92%}
	.woocommerce div.product p.price del,.woocommerce div.product span.price del{display:inline}
	.product-pricing .amount{margin:0 5px 0 0}
	.product_adds{margin:10px 0 0;padding:15px 0}
	/*Products Archive*/
	.shop-sidebar{display:none}
	.shop-sidebar.active{display:block;position:absolute;z-index:999;border-right:1px solid rgba(0,0,0,0.1);top:0;background-color:#fff;left:-5px;height:100%;width:auto}
	.shop-sidebar.no_froz_side.active{width:55%;height:99%;padding:10px 17px}
	/*Page*/
	.page-entry-header{text-align:center}
	.page-inset-sidebar{position:absolute;z-index:999;top:0;right:0;width:70%;background-color:#fff;height:100%;display:none}
	.page-inset-sidebar.active{display:block}
	/*Full-width pages*/
	.s-icons-page,.page-tags > p{display:none}
	.s-title.active.fs-icon-caret-down:before,.s-title.fs-icon-caret-right:before,.page-tags > span.fs-icon-caret-right:before,.page-tags > span.fs-icon-caret-down:before,.page-sub-pages-title.fs-icon-caret-right:before,.page-sub-pages-title.fs-icon-caret-down:before{right:0}
	.full_width_page_content{width:95%}
	/*BBpress*/
	.t-one{width:100%;}
	.t-two{width:50%;float:left;}
	.t-three{width:33.3%;float:left;}
	.bbp-body-topics-home{display:inline-table;}
	.forums-container,#bbpress-forums{width:auto}
	.forum-announcements-box > div > p,#new-post .create-new-topic > div > p{width:80%}
	.whos-online{width:90%}
	.whos-online .online-users{width:108.6%}
	.forums-container,.bbpress-bg{padding:0 10px}
	.bbp-forum-content,.bbp-topic-thumb > p{margin:0 0 10px!important}
	div.bbp-template-notice p,.bbp-template-notice-s p{width:80%}
	#bbpress-forums .bbp-form input[type="text"]{width:92%}
	.bbp-topic-no-thumbnail,.bbp-topic-thumbnail{height:170px;margin:0 auto;}
	#bbpress-forums div.bbp-topic-author,#bbpress-forums div.bbp-reply-author,#bbpress-forums li.bbp-header .bbp-topic-author,#bbpress-forums li.bbp-footer .bbp-topic-author,#bbpress-forums li.bbp-header .bbp-reply-author,#bbpress-forums li.bbp-footer .bbp-reply-author{width:80px;margin:0 10px 10px 0}
	.bbp_user_avatar_img{margin:0 auto}
	.bbp_user_desc{text-align:center}
	.statistics_item{margin:0 14px 13px;text-align:left;width:40%}
	.statistics_item_edit{float:none;margin:0 auto;clear:both}
	.bbp_user_info{padding-bottom:30px}
	#bbpress-forums{padding:20px 0}
	}
	/*========================*/
	@media (max-width: 600px) {
	/*slider*/
	.p-e-n{width:100%;}
	.slider-head-img > iframe, .gallery_slider_img, .content-slider, .b-video iframe, .b-video embed, .c-thumbnail, g-thumbnail{height:220px;}
	.slider-head-img{height:220px;}
	.t-three,.t-two{width:50%;float:left;}
	.t-one .st-thumbnail,.t-one .bbp-topic-no-thumbnail,.t-one .bbp-topic-thumbnail{width:90%;}
	video{width:100%;}
	/*standard posts*/
	.mem_panel .panel_breaker{height:260px;}
	.mem_panel {width:25em;}
	.mem_panel.ui-panel-position-right{right:-25em}
	.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-overlay,.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-push{right:0;-webkit-transform:translate3d(25em,0,0);-moz-transform:translate3d(25em,0,0);transform:translate3d(25em,0,0)}
	.team_Panel_visible .ui-panel-dismiss-open.ui-panel-dismiss-position-right{right:25em}
	/*woocommerce*/
	.product-pricing,.product-header,.product-content-wrapper{display: block;}
	.p_demo_link {margin: 0 0 10px 0;}
	.pro-head > * {width: auto;}
	.woocommerce-tabs .tabs li {margin: 0 -3px!important;padding: 0 !important;}
	.woocommerce-tabs .tabs {display: flex;}
	.product-pricing.no-demo{width:auto;}
	}
	/*========================*/
	@media (max-width: 450px) {
	/*slider*/
	.slider-head-img{float:none;width:80%;height:220px;margin:0 auto}
	.slider-head-img > iframe,.gallery_slider_img,.content-slider,.b-video iframe,.b-video embed,.c-thumbnail,.g-thumbnail{height:220px}
	.blog-head-title,.slider-post-meta,.blog-head-title-p,.slider-meta-no-img{margin:5px auto;width:80%}
	.slider-meta-no-img .blog-head-title{width:100%}
	.post-entry-no-img{float:none;margin:0 auto 20px;overflow:hidden;width:80%}
	.c-status-pic{float:none;margin:0 auto}
	.status{width:100%;float:none;border-top:1px solid rgba(0,0,0,0.1);margin:15px 0 0;padding:10px 0 0}
	.p-e-n{float:none;width:100%}
	.entry-no-img-author.animi_author{border:none;}
	.bbp-topic-no-thumbnail,.bbp-topic-thumbnail,.st-thumbnail{width:250px;}
	.t-one .st-thumbnail,.t-one .bbp-topic-no-thumbnail,.t-one .bbp-topic-thumbnail{width:250px;height:170px;}
	.blog-head-title{display:block;}
	.quote-container{width:auto;}
	.blog-head-title-p{display:none}
	.t-three,.t-two,.t-one{width:100%;}
	/*standard posts*/
	.mem_panel .panel_breaker{height:185px;}
	#team_member_section .st-thumbnail.has_bg {height:215px;}
	.mem_article_content{width:73%;}
	.mem_panel {width:17em;}
	.img_grids > a {height:220px;width:90%;margin:5px auto;}
	.mem_panel.ui-panel-position-right{right:-17em}
	.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-overlay,.mem_panel.ui-panel-animate.ui-panel-position-right.ui-panel-display-push{right:0;-webkit-transform:translate3d(17em,0,0);-moz-transform:translate3d(17em,0,0);transform:translate3d(17em,0,0)}
	.team_Panel_visible .ui-panel-dismiss-open.ui-panel-dismiss-position-right{right:17em}
	.n_ticker .nt_cont_title{float:none;display:block;}
	.n_ticker i{top:13px;}
	/*woocommerce*/
	.woocommerce-tabs .tabs a {font-size: 12px;}
	}
	<?php } ?>
	<?php if (get_theme_mod('show_nt',false) == true) { echo '.footer-container{margin:0 auto 30px;}'; } ?>
	<?php if (!frozr_mobile()) { echo "@media (max-width: 600px) {
	.type-page,.n_frames .blog-head-content,#slider-child .blog-head-content,.f-c-d,.featured_post_wraapper,.two-thirds-cloumn,.archive-title,.page-title-wrapper,.forums-container,#bbpress-forums,#comments-list ol,.whos-online,.st_posts_list_home,.page-fullwidth .page-entry-header h1,.fr-top-menu,.header-wrap,.topics-list-cont,#attachment_content,.entry-content-temp-page,#bbp-login .entry-content > p,.post-cont-sing,#products-temp-wrapper,.woocommerce .breadcrumb,.type-product,.content-area-seller-listing,.dokkan_page_title_content span,.single-product-wrapper
	{
		width:600px
	}
	}
	"; } ?>
	
	/*L2R options*/
	<?php if ($theme_layout == 'right') { echo 'body{direction:rtl;unicode-bidi: embed;}';} ?>
	.owl-theme .owl-controls{<?php if ($theme_layout == 'right') { echo 'left:0';} else { echo 'right:0';} ?>}
	.owl-buttons{<?php if ($theme_layout == 'right') { echo 'direction:ltr';} else { echo 'direction:rtl';} ?>}
	.entry-no-img-author,.entry-no-img-date,.entry-no-img-cat,.entry-no-img-comments-link,.post-entry-no-img .edit-link{<?php if ($theme_layout == 'right') { echo 'border-left:1px solid rgba(0,0,0,0.1);'; } else { echo 'border-right:1px solid rgba(0,0,0,0.1);'; } ?>}
	.style_box > *, .style_box a, .style_box p, .dish_quick_info *, div#rest_contact, .store-page-wrap, .dish_pop_makeaorder, .dish_det, .tablist-left li a, .f_control_nav, .n_ticker > ul,.wel_msg_button,.mobi_menu_title,.fr-menu ul li, .frotop-menu ul li, .forums-right-column .welcome_text p, .forum-announcements-box > div > p,#new-post .create-new-topic > div > p, input[type="text"], input[type="file"], input[type="password"], input[type="email"], textarea, select, #top_usr_login .login, #top_usr_reg .register, .forums-right-column .welcome_text *, .forums-right-column .welcome_text * a, .bbp-template-notice *, .bbp-template-notice * a, .bbp-pagination *, .bbp-pagination * a, .bbp-reply-post-date, .bbp-form *, .bbp-form * a, #bbpress-forums li.bbp-footer .bbp-reply-content, #bbpress-forums li.bbp-footer .bbp-topic-content, #bbpress-forums li.bbp-header .bbp-reply-content, #bbpress-forums li.bbp-header .bbp-topic-content, .info,.wpwhosonline-list, .online-users, li.bbp-forum-info, li.bbp-topic-title, .statics-title, #content, .product-details h4, .product-header, .woo_bread .woocommerce-breadcrumb, .dokkan_page_title_content span, .woo-sidebar-widget, .blog-content, .entry-content, .page #content, .page-entry-header *, .post_entry_header *, .single-post-content, form, fieldset,.comment-content, .post-entry-utility span, .single-author-p, .s-icons, .blog-head-content, .view-second .mask-h2, .post-content-f-a, .f-as-p-title-p, .view .mask, .view .content, .f-c-c, .featured_video_post_title, h3, .ui-table th,.ui-table td, .ui-table caption, .ui-table-reflow td,.ui-table-reflow th, .ui-checkbox .ui-btn,.ui-radio .ui-btn, #xoxo > *,.widgetcontainer, .fcd-c, .fr-smenu a,.frotop_mobi_menu a, .usr_top_menu_items a, .usr_top_menu_items li,.usr_woo_menu_content > h2{text-align:<?php if ($theme_layout == 'right') { echo 'right}'; } else { echo 'left';} ?>;}
	.view-second .mask-h2 h2{width:<?php if ($theme_layout == 'right') { echo '83%';} else { echo '80%';} ?>;}
	.view .ms-2{padding:13px <?php if ($theme_layout == 'right') { echo '15px';} else { echo '0';} ?>;width:<?php if ($theme_layout == 'right') { echo '90%;';} else { echo '100%;';} ?>}
	.mask-h2 > p{padding:5px <?php if ($theme_layout == 'right') { echo '15px';} else { echo '0';} ?>;}
	.f_author{<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>:34px;}
	.ui-btn-icon-right:after{<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>:.5625em}
	.o-u-t, .online-users-icon, span.statics-title i, .bbp-forum-info:before, .comment-content .fn, .archive-entry-content, .shop-sidebar, .comment-form-comment > label, #bbpress-forums div.bbp-reply-author,#bbpress-forums div.bbp-topic-author{float:<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>;}
	.post-entry-utility span, .single-author-p, .s-icons{transition:<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?> 300ms ease-out,opacity 300ms ease-out;<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:48px;}
	.cat-links:after,.post-info-book:after,.single-author-p:after,.meta-prep:after,.single_comments:after,.s-icons:after,.single_archive:after,.tag-links:after{border-width:<?php if ($theme_layout == 'right') { echo '10px 0 10px 10px';} else { echo '10px 10px 10px 0';} ?>;<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:-11px;}
	.comment-content{padding:<?php if ($theme_layout == 'right') { echo '7px 12px 7px 0';} else { echo '7px 0 7px 12px';} ?>;border-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>: 0.2em solid rgba(0,0,0,0.1);}
	.page-info{border-<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>:1px solid rgba(0,0,0,0.1);box-shadow:<?php if ($theme_layout == 'right') { echo '-';} ?>2px 12px 0 2px rgba(0,0,0,0.1);}
	<?php if ($theme_layout == 'right') { echo '.grid-width .item-title, .grid-width .item-info {text-align: right;}';} ?>
	.archive-sidebar{border-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:1px solid #F0F0F0;}
	.sku_wrapper{<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>:0}
	.bbp-forum-info>div{padding-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:50px}
	#bbpress-forums .bbp-forums-list{padding-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:5px;border-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:1px solid #ddd;margin:<?php if ($theme_layout == 'right') { echo '0 50px 0 0';} else { echo '0 0 0 50px';} ?> !important;}
	.bbp-topic-author-ava{<?php if ($theme_layout == 'right') { echo 'padding:0 6px 0 0;float:right;';} else { echo 'padding:0 0 0 6px;float:left;';} ?>}
	.bbp-topic-thumb>div,.bbp-topic-thumb>p,.entry-content.bbpress-bg .bbp-topic-thumb>p{padding:<?php if ($theme_layout == 'right') { echo '0 60px 0 0';} else { echo '0 0 0 60px';} ?>}
	.entry-content.bbpress-bg p{padding:<?php if ($theme_layout == 'right') { echo '0 10px 0 0';} else { echo '0 0 0 10px';} ?>}
	div.bbp-template-notice.info, div.bbp-template-notice,div.bbp-template-notice-s,div.bbp-template-notice.important{background-position:<?php if ($theme_layout == 'right') { echo '99% center';} else { echo '10px center';} ?>;}
	.bbp-pagination-count{padding-<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:10px}
	.bbp-username > label.fs-icon-user:before,.bbp-password > label.fs-icon-key:before,.bbp-email > label.fs-icon-envelope:before{<?php if ($theme_layout == 'right') { echo 'right';} else { echo 'left';} ?>:1em;}
	.bbp-login-form .bbp-username input,.bbp-login-form .bbp-email input,.bbp-login-form .bbp-password input{padding:<?php if ($theme_layout == 'right') { echo '10px 30px 10px 10px !important';} else { echo '10px 10px 10px 30px';} ?>}
	.forum-announcements-box > div > p,#new-post .create-new-topic > div > p, .welcome_text p{padding:<?php if ($theme_layout == 'right') { echo '0 10px 0 0';} else { echo '0 0 0 10px';} ?>;}
	<?php if ($theme_layout == 'right') { echo '.welcome_text:before{margin:0.3em 1em 0 0;}.forum-announcements-box > div:before, .forum-announcement-box > div:before, .welcome_text:before{float: right;}';} ?>
	h1.page-entry-title.simple-page{text-align:<?php if ($theme_layout == 'right') { echo 'left';} else { echo 'right';} ?>}
	<?php if ($theme_layout == 'right') { echo 'input[type="text"]{padding-right:5px !important;width:98%;}';} ?>
	<?php if (!frozr_mobile()) { echo '.right_hand_ht > span > a{float:right;}'; } ?>
	.wel_msg_button{padding: <?php if ($theme_layout == 'left') { echo '5px 21px 5px 62px;';} else { echo '5px 62px 5px 21px;';} ?>}
	.wel_msg_button i, .order_l_type_field .wc-radios .ui-radio input{<?php if ($theme_layout == 'left') { echo 'left';} else { echo 'right';} ?>: 0;}
	.n_ticker i{<?php if ($theme_layout == 'left') { echo 'right';} else { echo 'left';} ?>: 0;}
	.n_ticker #nt-next {<?php if ($theme_layout == 'left') { echo 'right:1em;';} else { echo 'left:3em;';} ?>}
	.n_ticker #nt-prev {<?php if ($theme_layout == 'left') { echo 'right:3em;';} else { echo 'left:1em;';} ?>}
	.ui-checkbox .ui-btn,.ui-radio .ui-btn{padding:<?php if ($theme_layout == 'left') { echo '.5em 1em .5em 2em;'; } else { echo '.5em 2em .5em 1em;'; } ?>}
	<?php if ($theme_layout == 'right') { echo '.ui-btn.ui-checkbox-off:after, .ui-btn.ui-checkbox-on:after {right:0;}'; } ?>
	.ui-btn.ui-checkbox-off:after,.ui-btn.ui-checkbox-on:after,.ui-btn.ui-radio-off:after,.ui-btn.ui-radio-on:after{<?php if ($theme_layout == 'left') { echo 'left';} else { echo 'right';} ?>: 5px;}
	.fr-menu li,.frotop-menu li, .st-body-home article{float:<?php if ($theme_layout == 'left') { echo 'left';} else { echo 'right';} ?>}
	<?php if ($theme_layout == 'right') { echo '.watermark{right:15px !important;left:auto !important}#searchform .searchbox-input[type="text"]{float:left;}';}?>
	
	/*typography size*/
	<?php $typo_size = get_theme_mod('theme_typography_size',2); ?>
	h5,h6,.blog-description,samp, .fr-menu a, .frotop-menu a, .p-e-n *, .entry-author, .entry-comments-link, .status_p, .edit-link, .mb-attribution.quote_p, .slider_link.link, .f-p > p, .audio-standard .f-p-title-p p, .f-title-p p, .f-no-thumb .f-p-title-p p, .button.rm > a, .post-entry-meta, .post-entry-meta span, .post-entry-meta a:visited, .f_author, .f_author a:visited, .st-description-home, .st_entry_summary, .st_entry_meta, #xoxo a, #single-insert a, #site-info, .forum-description-home, .bbp-topic-count-home, .featured_video_post_title a, .f_slides .overflow .inner .info a, .mask-h2 .ms-2 a, .post-content-f-a .featured_audio_post_title a, .f-li-img-post .f-post-content-link a, .mask-h2 em, .mask-h2 em a, .f-p-title-p p, .f-p-title-p p a, .f-li-img-post .f-p-title-p, .f-li-img-post .f-p-title-p a, .button, button, .ui-input-btn, #comments-list .comment-content p,.comment-meta a, a.comment-reply-link, .navigation a, #commentform *, .post-entry-utility *, .pages_meta, .forums-container *, #bbpress-forums *, .whos-online *, .woo-widget-wrapper .widgettitle, .item-info, .item-price .amount, .woo-sidebar-widget *, .woo_bread .woocommerce-breadcrumb, .cross-sells *, .mb-wrap-3.mb-style-4 a, .status-2 *, .featured_post_link a, .pagenav > ul li, .category-page-info > p {
		font-size: <?php if ($typo_size == 2) {echo '13px';} else {echo '12px';}?> !important;
		line-height: <?php if ($typo_size == 2) {echo '22px';} else {echo '20px';}?>  !important;
	}
	h1,.page-fullwidth .page-entry-title, .blog-head-title a, .content-post-title h2 a,.featured-cat-des span, .post-entry-title, .one_standard_post .bbp-topic-permalink-home, .one_standard_post .st_entry_title, .p_frames .full_pf h2 a {
		font-size: <?php if (frozr_mobile() && !frozr_tablet()) { if ($typo_size == 2) {echo '36px';} else {echo '30px';}} else { if ($typo_size == 2) {echo '47px';} else {echo '40px';}} ?>!important;
		font-weight:bold;
	}
	h4,.fr-smenu a,.usr_top_menu_items a,.shop_now,.cart_cancel,.wel_msg_button a,.welcome_text *,.cart_summary,.cart_summary *,.fro_woo_notices *,.frotop_mobi_menu a,.slider-meta-no-img .post-content *, .blog-head-title-p *, .blog-p-title-p, .quote_p, .status-a, .mb-wrap *, .full_width_page_content, .product-pricing .amount {
		font-size: <?php if ($typo_size == 2) {echo '15px';} else {echo '14px';}?> !important;
		line-height: <?php if ($typo_size == 2) {echo '25px';} else {echo '23px';}?> !important;
	}
	h3,p.lead,.mobi_menu_title,.st-posts-title-home, .widgettitle, .bbp-forum-title-home, #comments-list-wrapper > h3, .comment-reply-title, .woocommerce #reviews #comments h2 {
		font-size: <?php if ($typo_size == 2) {echo '22px';} else {echo '20px';}?> !important;
	}
	.wel_msg_content *, .forums-container .statics-title *,.flex-caption, .featured_posts_desc span, .mask-h2 h2 a, .f-no-thumb .f-post-content-link h2 a, .post-content-f-a.audio-standard .featured_audio_post_title h2 a, .f-p-title h2 a, .st_entry_title, .bbp-topic-permalink-home, .st_p_price .amount, .item-title a, .related_products h3, .upsells_products h3, .cart_totals h2, .cross-sells h3, .woocommerce-billing-fields h3, .woocommerce-shipping-fields h3, #order_review_heading, .addresses h3, .status-2-a a {
		font-size: <?php if ($typo_size == 2) {echo '19px';} else {echo '17px';}?> !important;
	}
	.single-post-content, .page .entry-content, .full_width_page_content{
		font-size: <?php if ($typo_size == 2) {echo '17px';} else {echo '15px';}?> !important;
		line-height: <?php if ($typo_size == 2) {echo '30px';} else {echo '28px';}?> !important;
		font-family: 'Merriweather', serif;
	}
	h2,.blog-p-title h2 a, #bbpress-forums .bbp_user_desc > h1 a, .dokkan_page_title, .product_title.entry-title, .p_frames h2 a {
		font-size: <?php if ($typo_size == 2) {echo '28px';} else {echo '26px';}?> !important;
		font-weight: bold !important;
	}
	.page-entry-title {
		font-size: <?php if ($typo_size == 2) {echo '30px';} else {echo '28px';}?> !important;
	}
	
	/*Typography style*/
	<?php $typo_style = get_theme_mod('theme_typography',1);
	if ($typo_style == 1) { 
	$font_style = "'Raleway', sans-serif";
	} elseif ($typo_style == 2) {
	$font_style = "'Oswald', sans-serif";
	} elseif ($typo_style == 3) {
	$font_style = "'Dosis', sans-serif";
	} elseif ($typo_style == 4) {
	$font_style = "'Dancing Script', cursive";
	} elseif ($typo_style == 5) {
	$font_style = "'Lobster Two', cursive";
	} elseif ($typo_style == 6) {
	$font_style = "'Alegreya SC', serif";
	} elseif ($typo_style == 7) {
	$font_style = "'Signika', sans-serif";
	} elseif ($typo_style == 8) {
	$font_style = "'Alegreya', serif";
	} elseif ($typo_style == 9) {
	$font_style = "'Kreon', serif";
	} else {
	$font_style = "'Ubuntu', sans-serif";
	}
	?>
	body,.bbp-forum-info *, #bbp-statistics *{font-family:PT Sans, Droid Sans,sans-serif;}
	h1,.resturant_cats_title,.mobi_menu_title,#topcart,.fr-smenu a,.usr_top_menu_items a,.bbp-topic-permalink-home,.st_entry_title,.fr-menu a,.frotop-menu a,.frotop_mobi_menu a,.usr_name,.blog-head-title a,.widgettitle, .item-title a, .blog-p-title h2 a, .content-post-title h2 a, .bbp-forum-title-home, .st-posts-title-home, .featured-info *, .post-entry-title, .one_standard_post .bbp-topic-permalink-home, .one_standard_post .st_entry_title, .p_frames .full_pf h2 a {
	font-family:<?php echo $font_style; ?>;}

	/*Theme Palette*/
	<?php $theme_style = get_theme_mod('theme_style',1); ?>
	<?php if ($theme_style == 1){
		$theme_palette = apply_filters('frozr_theme_palette_one', array('#5ed1c9','#26bf4d','#fff','#f6a357','#4a515a','#eee','#676962','#000'));
	} elseif($theme_style == 2) {
		$theme_palette = apply_filters('frozr_theme_palette_two', array('#4ab64e','#95763a','#fff','#ff5433','#3d3018','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 3) {
		$theme_palette = apply_filters('frozr_theme_palette_three', array('#473a3a','#e6312d','#fff','#26bf4d','#473a3a','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 4) {
		$theme_palette = apply_filters('frozr_theme_palette_four', array('#f71909','#a3a59b','#fff','#33d62b','#676962','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 5) {
		$theme_palette = apply_filters('frozr_theme_palette_five', array('#696a6c','#2286a5','#fff','#33d62b','#696a6c','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 6) {
		$theme_palette = apply_filters('frozr_theme_palette_six', array('#85054f','#ebdba0','#fff','#3c6fa8','#1a181b','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 7) {
		$theme_palette = apply_filters('frozr_theme_palette_seven', array('#2e6934','#81ed9c','#fff','#a0945a','#1a181b','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 8) {
		$theme_palette = apply_filters('frozr_theme_palette_eight', array('#34343d','#f96c13','#fff','#4790c1','#34343d','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 9) {
		$theme_palette = apply_filters('frozr_theme_palette_nine', array('#5b4702','#3f9001','#fff','#decd91','#34343d','#f7f7f7','#676962','#000'));
	} elseif($theme_style == 10) {
		$theme_palette = apply_filters('frozr_theme_palette_ten', array('#1ed760','#fafafa','#fff','#4d4d4d','#34343d','#f7f7f7','#676962','#000'));
	}elseif($theme_style == 11) {
		$theme_palette = apply_filters('frozr_theme_palette_custom', array(get_theme_mod('theme_color_1','#5ed1c9'),get_theme_mod('theme_color_2','#26bf4d'),get_theme_mod('theme_color_3','#fff'),get_theme_mod('theme_color_4','#f6a357'),get_theme_mod('theme_color_5','#4a515a'),get_theme_mod('theme_color_6','#eee'),get_theme_mod('theme_color_7','#777'),get_theme_mod('theme_color_8','#000')));
	}?>
	.top-menu,.post-content-f-as, #toppanel{background-color:<?php echo apply_filters('frozr_theme_palette_ten_bg_color',$theme_palette[0]); ?>;}
	<?php if ($theme_style != 10) { echo '.online-users *,li.bbp-header *,li.bbp-footer *,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg, .user_loc_top_menu *, .frozr_top_cart_count{color:' . apply_filters('frozr_theme_palette_two_color',$theme_palette[2]) . '}'; } ?>
	#topcart,.fr-top-menu .cart_button, .mb-wrap-cont, .link, .feat_product del{background-color:<?php echo apply_filters('frozr_theme_palette_three_bg_color',$theme_palette[3]); ?>;}
	body,a,.categories-archive-ul li a,.page-link > span,.blog-head-title a,.content-post-title a, .status .status-a, .status-a *, .quote_p a, .feat_product .ad_to_crt:before, del .amount, .footer-container input{color:<?php echo apply_filters('frozr_theme_palette_four_color',$theme_palette[4]); ?>;}
	.welcome_msg .wel_msg_button *,.frotop-menu a,.frotop-menu a:hover,.frotop-menu a:focus,.frotop_mobi_menu a,.top_mobi_menu, .top_crt a, .top_crt a:hover, .top_crt a:focus<?php if ($theme_style != 10) { echo ', .usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus'; } ?>,.fr-menu a:hover, .fr-menu a:focus, .fr-menu .current_page_item a,.usr_top_menu_content #tabs .tabs a{color:<?php echo apply_filters('frozr_theme_palette_two_color',$theme_palette[2]); ?>;}
	#header-container,.post-entry-utility,.full_width_page_meta{background-color:<?php echo apply_filters('frozr_theme_palette_five_bg_color',$theme_palette[5]); ?>;}
	.fr-smenu a,.fr-smenu a:hover,.fr-smenu a:focus,.mobi_menu i,div#search-home:before{color:<?php echo apply_filters('frozr_theme_palette_six_color',$theme_palette[6]); ?>;}
	a:hover,a:focus{color:<?php if ($theme_style != 10) { echo apply_filters('frozr_theme_palette_three_color',$theme_palette[3]); } else {echo apply_filters('frozr_theme_palette_zero_color',$theme_palette[0]); } ?>}
	#mainpanel{background-color:<?php echo apply_filters('frozr_theme_palette_two_bg_color',$theme_palette[2]); ?>;}
	#wel_msg_button_1,.featured_post_cont<?php if ($featured_title_layout == 'style1') { echo',.fcd-c:before, .fcd-c:after';} ?>, #bbpress-forums li.bbp-footer, #bbpress-forums li.bbp-header, .online-users,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus, #top_usr_login *,.usr_top_menu_content .required,#top_usr_reg, .frozr_top_cart_count{background-color:<?php echo apply_filters('frozr_theme_palette_one_bg_color',$theme_palette[1]); ?>;}
	.footer-container,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .le_makeorder_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .button,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce .widget_price_filter .price_slider_amount .button, button, .ui-input-btn, .sub-menu li, .item-cart .button.add_to_cart_button, .feat_product .ad_to_crt, .fr-menu > li a:hover, .fr-menu > li a:focus, .fr-menu > .current_page_item a{background-color:<?php echo apply_filters('frozr_theme_palette_four_bg_color',$theme_palette[4]); ?>;}
	.footer-container *,.footer-container .mini_cart a,.footer-container .mini_cart .amount,.footer-container .star-rating span, .sub-menu li a, .sub-menu li a:hover{color:<?php echo apply_filters('frozr_theme_palette_five_color',$theme_palette[5]); ?>;}
	#footer{background-color:<?php echo apply_filters('frozr_theme_palette_seven_bg_color',$theme_palette[7]); ?>;}
	.amount, .widget_price_filter .price_label span,.woocommerce .woocommerce-message:before,.single-post-content a, .page .entry-content a, .full_width_page_content a{color:<?php echo apply_filters('frozr_theme_palette_one_color',$theme_palette[1]); ?>;}
	.star-rating span, .feat_product del::before, .woocommerce .woocommerce-error:before, code{color:<?php echo apply_filters('frozr_theme_palette_three_color',$theme_palette[3]); ?>;}
	.woocommerce-error{box-shadow:4px 4px 0 0 <?php echo apply_filters('frozr_theme_palette_three_shadow_color',$theme_palette[3]); ?>}
	.woocommerce-message{box-shadow:4px 4px 0 0 <?php echo apply_filters('frozr_theme_palette_one_shadow_color',$theme_palette[1]); ?>;}	
	input:not([type="submit"]):focus,textarea:focus,select:focus{box-shadow:0 0 0 1px <?php echo apply_filters('frozr_theme_palette_three_shadow_color',$theme_palette[3]); ?>;outline:none;}
	.sing_content .ui-tabs-active.ui-state-active a, .sing_content .ui-tabs-active.ui-state-active a:hover, .full_width_page_content .ui-tabs-active.ui-state-active a, .full_width_page_content .ui-tabs-active.ui-state-active a:hover, .entry-content .ui-tabs-active.ui-state-active a, .entry-content .ui-tabs-active.ui-state-active a:hover{background-color:<?php echo apply_filters('frozr_theme_palette_one_bg_color',$theme_palette[1]); ?>;border-color:<?php echo apply_filters('frozr_theme_palette_one_border_color',$theme_palette[1]); ?>;}	
	<?php if ($theme_style == 10) { ?>
	.usr_top_menu_items a, .usr_top_menu_items a:hover, .usr_top_menu_items a:focus,#usrmenu,.usr_menu_button,.usr_menu_button:hover,.usr_menu_button:focus,#top_usr_login *,.usr_top_menu_content .required,#top_usr_reg, .user_loc_top_menu *, .frozr_top_cart_count{color:#676962;}
	.mini_cart a, .mini_cart a:focus, .mini_cart .amount, .mini_cart *{color:#fff;}
	<?php } ?>
	/*Custom CSS*/
	<?php echo get_theme_mod('seq_custom_css');  ?>
	<?php echo get_theme_mod('custom_css');  ?>
	
    </style>
    <!--/BHS CSS-->
<?php }
function live_preview() {
	wp_enqueue_script( 'frozr-customize-preview', get_template_directory_uri() . '/library/scripts/theme-customizer.js', array( 'customize-preview' ), '0.1', true );
}
function customizer_control_scripts() {
	wp_enqueue_script( 'frozr-customize-controls', get_template_directory_uri() . '/library/scripts/theme-customizer-controls.js', array('jquery'), '0.1', true );
	wp_enqueue_style( 'theme-customizer-styles', get_template_directory_uri() . '/library/styles/theme-customizer-controls.css', array(), '0.1', 'all' );
}
//custom controls
if (class_exists('WP_Customize_Control')) {
class Select_Hide_Below extends WP_Customize_Control {
public $type = 'select-hide-below';
public $sclass;
public function render_content() { ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>
	<select <?php $this->link(); ?> data-sclass ="<?php echo $this->sclass; ?>" class="fro_select_option">
		<?php
		foreach ( $this->choices as $k => $v ) {
			echo '<option value="' . esc_attr( $k ) . '"' . selected( $this->value(), $k, false ) . 'data-class="'. $v['class'] .'">' . $v['name'] . '</option>';
		}
		?>
	</select>
	</label>
<?php } }
class Add_class_img extends WP_Customize_Image_Control {
public $sclass;
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		
		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
			<?php $this->render_content(); ?>
		</li><?php
} }
class Add_class_color extends WP_Customize_Color_Control {
public $sclass;
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		
		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
			<?php $this->render_content(); ?>
		</li><?php
} }

class Add_class extends WP_Customize_Control {
public $type = 'custom';
public $sclass;
public $fro_attrs = array();
public $adv = false;
public function fro_attrs() {
	foreach( $this->fro_attrs as $attr => $value ) {
		echo $attr . '="' . esc_attr( $value ) . '" ';
	} }
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		$advance = $this->adv;
		
		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>" <?php $this->fro_attrs(); ?>>
			<?php if ($advance == true) { ?>
				<span class="cust_more_opt_btn"><i class="fs-icon-cog"></i><?php if (! empty( $this->label )) { echo esc_html( $this->label ); } else { _e(' More Options','frozr'); } ?></span>
			<?php } else { ?>
				<?php $this->render_content(); ?>
			<?php } ?>
		</li><?php
} }

class image_radio extends WP_Customize_Control {
public $sclass;
public $type = 'radio-img';
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		
		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>" >
			<?php $this->render_content(); ?>
		</li><?php
}
public function render_content() {
	if ( empty( $this->choices ) )
		return;

	$name = '_customize-radio-' . $this->id;
	$imagepath =  get_template_directory_uri() . '/images/customizer/';

	if ( ! empty( $this->label ) ) : ?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	<?php endif;
	if ( ! empty( $this->description ) ) : ?>
		<span class="description customize-control-description"><?php echo $this->description ; ?></span>
	<?php endif;

	foreach ( $this->choices as $k => $v ) :
	$selected = (checked($this->value(), $k, false) != '') ? ' fro-radio-img-selected' : '';
		?>
		<label class="fro_radio_img<?php echo $selected; ?> fro_radio_img_<?php echo $this->id; ?>" for="<?php echo $this->id; ?>_<?php echo array_search($k,array_keys($this->choices)); ?>">
			<input id="<?php echo $this->id; ?>_<?php echo array_search($k,array_keys($this->choices)); ?>" type="radio" value="<?php echo esc_attr( $k ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $k ); ?> onclick="jQuery:frozr_radio_img_select('<?php echo $this->id; ?>_<?php echo array_search($k,array_keys($this->choices)); ?>', '<?php echo $this->id; ?>');"/>
			<img src="<?php echo esc_url($imagepath . $v['img']); ?>" alt="<?php if ($v['title'] != '') { echo esc_attr($v['title']); } else { echo 'Option';} ?>" /><br/><?php if ($v['title'] != '') { echo '<span>' . esc_attr($v['title']) .'</span>'; } ?>
		</label>
		<?php
	endforeach;
} }

class Multi_Select extends WP_Customize_Control {
public $type = 'multiselect';
public $sclass;
public $choices;

public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
			<?php $this->render_content(); ?>
		</li><?php
}

public function render_content() { 
	if ( empty( $this->choices ) )
		return; ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>

		<select <?php $this->link(); ?> class="fro_multiselect_option" multiple="multiple" rows="6">
			<?php

			foreach ( $this->choices as $k => $v ) {
				$selected = (is_array($this->value()) && in_array($k, $this->value())) ? ' selected="selected"' : '';
				echo '<option value="' . $k . '"' . $selected . '>' . $v . '</option>';
			}
			?>
		</select>
	</label>
<?php } }
class Posts_Multi_Select extends WP_Customize_Control {
public $type = 'posts-multiselect';
public $args = array();
public $output;
public $sclass;
public $woo;
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		$sclass = 'customize-control customize-control-' . $this->type;

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php if ($this->woo == false && !current_theme_supports( 'woocommerce' )) { echo esc_attr( $sclass ); } else { echo esc_attr( $class ); }?>">
			<?php $this->render_content(); ?>
		</li><?php
}

public function render_content() { ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>

		<select <?php $this->link(); ?> class="fro_posts_multiselect_option" multiple="multiple" rows="6">
			<?php $args = wp_parse_args($this->args, array('numberposts' => '-1'));
			$posts = get_posts($args);

			foreach ( $posts as $post ) {
				$selected = (is_array($this->value()) && in_array($post->ID, $this->value())) ? ' selected="selected"' : '';
				echo '<option value="' . $post->ID . '"' . $selected . '>' . $post->post_title . '</option>';
			}
			?>
		</select>
	</label>
<?php } }
class pages_Multi_Select extends WP_Customize_Control {
public $type = 'pages-multiselect';
public $args = array();
public $sclass;
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
			<?php $this->render_content(); ?>
		</li><?php
}

public function render_content() { ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>
	
		<select <?php $this->link(); ?> class="fro_multiselect_option" multiple="multiple" rows="6">
			<?php
			$args = wp_parse_args($this->args, array());
			$pages = get_pages($args);

			foreach ( $pages as $page ) {
				$selected = (is_array($this->value()) && in_array($page->ID, $this->value())) ? ' selected="selected"' : '';
				echo '<option value="' . $page->ID . '"' . $selected . '>' . $page->post_title . '</option>';
			}
			?>
		</select>
	</label>
<?php } }
class Cats_Select extends WP_Customize_Control {
public $type = 'cats-select';
public $args = array();
public $sclass;
public $woo;
public function render() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type .' '. $this->sclass;
		$sclass = 'customize-control customize-control-' . $this->type;

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php if ($this->woo == false && !current_theme_supports( 'woocommerce' )) { echo esc_attr( $sclass ); } else { echo esc_attr( $class ); }?>">
			<?php $this->render_content(); ?>
		</li><?php
}
public function render_content() { ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>
	
		<select <?php $this->link(); ?> class="fro_cats_select">
			<?php
			$args = wp_parse_args($this->args, array());
			$cats = get_categories($args);

			foreach($cats as $cat) {
				echo '<option value="' . $cat->slug . '"' . selected($this->value(), $cat->slug, false) . '>' . $cat->name . '</option>';
			}
			?>
		</select>
		
	</label>
<?php } }
class Forums_Select extends WP_Customize_Control {
public $type = 'forums-select';
public function render_content() { ?>
	<label>
		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
		<?php endif; ?>
		<select <?php $this->link(); ?> class="fro_forum_select"> 
			<option value="0"><?php echo esc_attr( __('All Forums', 'frozr') ); ?></option>
			<?php 
				$pages  = get_pages( array(
				'post_type' => bbp_get_forum_post_type(),
				'sort_column' => 'menu_order',
				'post_status' => 'publish'
			) );
			foreach ( $pages as $page ) {
				$option = '<option value="' . $page->ID . '"'. selected($this->value(), $page->ID, false) .'>';
				$option .= $page->post_title;
				$option .= '</option>';
				echo $option;
			}
			?>
		</select>		
	</label>
<?php } }

}
function is_archive_temp() {
   return is_page_template('template-page-archives.php');
}
function is_blog_temp() {
   return is_page_template('template-blog.php');
}
function is_fro_single() {
	if (function_exists('bbpress')) {
		if (is_single() && !is_bbpress()){
			return is_single();
		}
	} elseif (is_single()) {
		return is_single();
	}
}
function is_fro_forum() {
	if (is_bbpress()) {
		return is_bbpress();
	} elseif (is_page_template('archive-forum.php')) {
		return is_page_template('archive-forum.php');
	}
}
function sanitize_muilt_select( $values ) {

    $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}
function sanitize_fro_textarea( $values ) {

    return $values;
}
// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , 'register' );

// Output custom CSS to live site
add_action( 'wp_head' , 'header_output' );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , 'live_preview' );

// Enqueue controls javascript in Theme Customizer admin screen
add_action( 'customize_controls_enqueue_scripts' , 'customizer_control_scripts' );