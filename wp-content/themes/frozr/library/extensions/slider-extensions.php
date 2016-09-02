<?php
/**
 * Slider Extensions
 *
 * This includes Revolution
 *
 * @package FrozrCoreLibrary
 * @subpackage SliderExtensions
 */
//The Top Slider Code
function revo_slider_top() {
	$revo_sh = get_theme_mod('revo_sh', 1);
	$revo_pages = get_theme_mod('revo_pages');
	$revo_code_top = get_theme_mod('revo_code_top');
	if(shortcode_exists("rev_slider") && !empty($revo_code_top)){
		if ($revo_sh == 1) {
			if (is_home()) {putRevSlider($revo_code_top);}
		} elseif ($revo_sh == 3 && !empty($revo_pages)) {
			if (is_page($revo_pages)) {putRevSlider($revo_code_top);}
		} elseif ($revo_sh == 2) {
			putRevSlider($revo_code_top);
		}
	}
} // end revo_slider top
//The Content Slider Code
function revo_slider_middle_one() {
	$revo_code_middle_one = get_theme_mod('revo_code_middle_one');
	if(shortcode_exists("rev_slider") && !empty($revo_code_middle_one)){ ?>
	<div id="revslider-input-one">
		<?php if (is_home()) {putRevSlider($revo_code_middle_one);} ?>
	</div>
	<?php }
} // end revo_slider middle one
add_action('revo_one','revo_slider_middle_one');

function revo_slider_middle_two() {
	$revo_code_middle_two = get_theme_mod('revo_code_middle_two');
	if(shortcode_exists("rev_slider") && !empty($revo_code_middle_two)){ ?>
	<div id="revslider-input-two">
		<?php if (is_home()) {putRevSlider($revo_code_middle_two);} ?>
	</div>
	<?php }
} // end revo_slider middle two
add_action('revo_two','revo_slider_middle_two');