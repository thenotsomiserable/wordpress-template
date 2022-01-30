<?php
/**
 * Displays the custom post header
 */


 /* Define custom variables' */
$front_page_subtitle = get_field('front_page_subtitle');
$front_page_title = get_field('front_page_title');
$front_page_summary = get_field('front_page_summary');
$cta_button_header_text= get_field('cta_button_header_text');
$cta_button_header_link= get_field('cta_button_header_link');
$header_image= get_field('header_image');

?>



  <div class="row-container">
    <div class="header-text-container">
      <div class="header-text">
      <h2 class="front-page-subtitle"><?php echo ($front_page_subtitle); ?></h2>
      <h1 class="front-page-title"><?php echo ($front_page_title); ?></h1>
      <p class="front-page-summary"><?php echo ($front_page_summary); ?></p>
      <div class="cta-button cta-button-header">
        <p><a href="<?php echo ($cta_button_header_link)?>"><?php echo ($cta_button_header_text); ?></a></p>
      </div>
    </div>
  </div>
  <div class="header-image-container">
    <img class="header-image" src="https://live.staticflickr.com/65535/51850836667_2e5406d5e8_k_d.jpg"><?php echo ($header_image)?></div>
</div>
