<?php
//Template Name:Gallery
get_header();
?>
 <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Our Gallery</h1>
                  <p class="gallery_text">Lorem Ipsum is simply dummy text of printing typesetting ststry lorem Ipsum the industry'ndard dummy text ever since of the 1500s, when an unknown printer took a galley of type and scra make a type specimen book. It has</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <?php echo do_shortcode('[custom_gallery]');?>
                  </div>
               </div>
               
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
<?php
get_footer();
?>