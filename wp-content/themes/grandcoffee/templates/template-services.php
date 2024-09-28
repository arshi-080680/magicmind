<?php
//Template Name:Services
get_header();
?>
<div class="services_section layout_padding">
 <div class="container">
    <div class="row">
       <div class="col-sm-12">
          <h1 class="services_taital">Services</h1>
          <p class="services_text">Typesetting industry lorem Ipsum is simply dummy text of the </p>
       </div>
    </div>
    <div class="services_section_2">
       <div class="row">
          <?php echo do_shortcode('[services]');?>
       </div>
    </div>
 </div>
</div>
<?php
get_footer();
?>