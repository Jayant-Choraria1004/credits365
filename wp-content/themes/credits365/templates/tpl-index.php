<?php /* Template Name: Template Index 
*/ 
get_header(); 

?>  


<section class="Slideshow margin-TB-80">
   <div class="container"> 
      <div class="owl-carousel fade-carousel">
         <?php if( have_rows('header_slider') ): ?>
            <?php while( have_rows('header_slider') ): the_row(); 
               $title = get_sub_field('slider_title');
               $description = get_sub_field('slider_description');
               $first_cta = get_sub_field('first_cta'); // ACF Link field
               $second_cta = get_sub_field('second_cta'); // ACF Link field
               $image_url = get_sub_field('slider_image'); // URL
            ?>
            <div class="item">
               <div class="row g-4 flex-row-reverse align-items-center">
                  <div class="col-lg-6">
                     <div class="SlideImage">
                        <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="Slideshow">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="SlideContent">
                        <h2><?php echo wp_kses_post($title); ?></h2>
                        <p><?php echo wp_kses_post($description); ?></p>
                        <div class="SlideCTA d-flex gap-3 flex-wrap">
                           <?php if( !empty($first_cta['url']) ): ?>
                              <a href="<?php echo esc_url($first_cta['url']); ?>" class="btn btn-primary">
                                 <?php echo esc_html($first_cta['title']); ?>
                                 <img src="<?php echo esc_url(get_template_directory_uri()."/images/arrow-right.svg"); ?>" alt="ArrowRight">
                              </a>
                           <?php endif; ?>
                           <?php if( !empty($second_cta['url']) ): ?>
                              <a href="<?php echo esc_url($second_cta['url']); ?>" class="btn btn-secondary">
                                 <?php echo esc_html($second_cta['title']); ?>
                              </a>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>

<!-- Slideshow -->

<section class="OurBusinessPartners gray97-bg-color padding-TB-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3">
            <div class="section-header">
               <h2><?php echo esc_html(get_field('logo_title')); ?></h2>
               <p><?php echo esc_html(get_field('logo_description')); ?></p>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="logos">
               <div class="logo_items">
                  <?php if( have_rows('logos') ): ?>
                     <?php while( have_rows('logos') ): the_row(); 
                        $logo_image = get_sub_field('image'); // URL
                     ?>
                        <?php if( $logo_image ): ?>
                           <img src="<?php echo esc_url($logo_image); ?>" alt="BusinessPartners">
                        <?php endif; ?>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Our Business Partners -->

<section class="Ecosystem padding-TB-50">
   <div class="container">
      <div class="section-header text-center">
         <h2>Designed for Every Role in <br> the Learning Ecosystem</h2>
         <p>Built for Learners. Made for Admins. Trusted by Institutions.</p>
      </div>
      <div class="EcoTabCover">
         Vetical Tabs Use this section preview Develop if need a help just let me know 
      </div>
   </div>
</section>
<!-- Ecosystem -->

<section class="HowCredits365Works">
   <div class="container">
      <div class="section-header text-center mb-4 pb-1">
         <h2><?php echo esc_html(get_field('heading')); ?></h2>
         <p><?php echo wp_kses_post(get_field('subheading')); ?></p>
      </div>
      <div class="row g-4">
         <div class="col-lg-7 col-xl-8">
            <div class="HowVideo position-relative">
               <img class="img-fluid" src="<?php echo esc_url(get_field('video_thumbnail')); ?>" alt="Video Thumbnail">
               <a href="#" class="VideoCTA position-absolute top-50 start-50 translate-middle" id="openVideoPopup">
                  <img src="<?php echo esc_url(get_template_directory_uri()."/images/VideoPlay.svg"); ?>" alt="Play Video">
               </a>
               <div class="VideoInfo mt-3">
                  <div class="VideoTitle">
                     <h2><?php echo esc_html(get_field('caption')); ?></h2>
                     <h4><?php echo esc_html(get_field('Name')); ?></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-xl-4">
            <?php $cta = get_field('right_cta'); ?>
            <div class="CertificationInfo">
               <img src="<?php echo esc_url(get_template_directory_uri()."/images/Certification.svg"); ?>" alt="Certification">
               <h2><?php echo esc_html(get_field('right_title')); ?></h2>
               <h4><?php echo esc_html(get_field('right_description')); ?></h4>
               <?php if ($cta): ?>
                  <a href="<?php echo esc_url($cta['url']); ?>" class="btn btn-primary Goldenrod-Light mt-4">
                     <?php echo esc_html($cta['title']); ?> <img src="<?php echo esc_url(get_template_directory_uri()."/images/arrow-right.svg"); ?>" alt="ArrowRight">
                  </a>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>

   <!-- Video Popup -->
   <div id="videoPopup" class="video-popup">
      <div class="video-popup-content">
         <span class="video-popup-close" id="closeVideoPopup">&times;</span>
         <div class="video-wrapper">
            <iframe src="<?php echo get_field('video_url'); ?>" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
</section>


<!-- How Credits365 Works -->

<section class="WhyCredit365 margin-TB-80 padding-TB-50">
   <div class="container">
      <div class="section-header text-center mb-4 mb-lg-5 pb-lg-1">
         <h2 class="mb-4 pb-2"><?php echo wp_kses_post(get_field('why_heading')); ?></h2>
         <p><?php echo wp_kses_post(get_field('why_subheading')); ?></p>
      </div>
      <div class="WhyCredit365Slideshow">
         <div class="owl-carousel TheBenefits-carousel Cmn-SlideLongArrow">
            <?php 
            if ( have_rows('slider') ):
               $index = 0;
               while ( have_rows('slider') ): the_row();
                  $image = get_sub_field('image');
                  $title = get_sub_field('title');
                  $pointers = get_sub_field('pointers');
                  $is_odd = $index % 2 === 0; // 0-based index: even = odd slide visually
            ?>
            <div class="item">
               <div class="TheBenefitsCard">
                  <div class="row g-4 g-lg-5 align-items-center <?php echo $is_odd ? 'flex-row-reverse' : ''; ?>">
                     <div class="col-lg-4">
                        <div class="BenifitsIMgCard">
                           <img class="img-fluid" src="<?php echo esc_url($image); ?>" alt="benefit-<?php echo $index + 1; ?>">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="BenefitsContent">
                           <h2 class="fw-semibold mb-lg-5"><?php echo esc_html($title); ?></h2>
                           <div class="BenefitPoints">
                              <?php if ( $pointers ): ?>
                                 <?php foreach ( $pointers as $pointer ): ?>
                                    <div class="PointsFlex">
                                       <div class="haxicon">
                                          <img class="w-auto" src="<?php echo esc_url(get_template_directory_uri()."/images/hax-icon.svg"); ?>" alt="hax-icon">
                                       </div>
                                       <p><?php echo esc_html($pointer['points']); ?></p>
                                    </div>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php 
               $index++;
               endwhile;
            endif;
            ?>
         </div>
      </div>
   </div>
</section>


<section class="Whatourcustomerssay">
   <div class="container">
      <div class="section-header text-center mb-4 mb-lg-5 pb-lg-1">
         <h2><?php the_field('what_heading'); ?></h2>
         <p><?php the_field('what_subheading'); ?></p>
      </div>

      <?php if (have_rows('cards')): ?>
      <div class="customerssay">
         <div class="owl-carousel Testimonials-carousel Cmn-SlideLongArrow">
            <?php while (have_rows('cards')): the_row(); 
               $rating = get_sub_field('rating');
               $statement = get_sub_field('statement');
               $name = get_sub_field('name');
               $image = get_sub_field('image');
               $designation = get_sub_field('designation');
            ?>
            <div class="item">
               <div class="CustomersCard">
                  <?php if ($rating): ?>
                     <div class="StarRating" data-rating="<?php echo esc_attr($rating); ?>"></div>
                  <?php endif; ?>
                  <p><?php echo esc_html($statement); ?></p>
                  <div class="CustomerInfo">
                     <div class="CustomerProfilePic">
                        <img src="<?php echo esc_url($image); ?>" alt="Profile">
                     </div>
                     <div class="CustomerDestns">
                        <h5><?php echo esc_html($name); ?></h5>
                        <h6><?php echo esc_html($designation); ?></h6>
                     </div>
                  </div>
               </div>
            </div>
            <?php endwhile; ?>
         </div>
      </div>
      <?php endif; ?>
   </div>
</section>


<!-- Why Credit365 -->



<section class="SuccessMetrics padding-TB-50">
   <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
         <div class="col-lg-5">
            <div class="section-header">
               <h2><?php echo esc_html(get_field('success_heading')); ?></h2>
               <p><?php echo wp_kses_post(get_field('success_subheading')); ?></p>
               <?php $left_cta = get_field('left_cta'); ?>
               <?php if ( $left_cta && !empty($left_cta['url']) ): ?>
                  <a href="<?php echo esc_url($left_cta['url']); ?>" class="btn btn-primary mt-4">
                     <?php echo esc_html($left_cta['title']); ?>
                     <img src="<?php echo esc_url(get_template_directory_uri()."/images/arrow-right.svg"); ?>" alt="ArrowRight">
                  </a>
               <?php endif; ?>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="MetricsGrid">
               <div class="row g-3">
                  <div class="col-lg-8">
                     <div class="MatrixImg">
                        <img class="img-fluid w-100" src="<?php echo esc_url(get_field('top_image')); ?>" alt="Top Metric">
                        <div class="overalay-matrix-content">
                           <h2><?php echo esc_html(get_field('top_image_caption')); ?></h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="CountCard">
                        <div class="CINumber">
                           <h2><?php echo esc_html(get_field('top_title')); ?> 
                              <img src="<?php echo esc_url(get_template_directory_uri()."/images/plusign.svg"); ?>" alt="plusign">
                           </h2>
                           <p><?php echo esc_html(get_field('top_description')); ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="gracphiElements">
                        <img class="img-fluid" src="<?php echo esc_url(get_field('bottom_image')); ?>" alt="Graphic Elements">
                        <h5>35% Higher Completion Rates</h5>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="mtric-colour">
                        <div class="MCContent">
                           <h2>90% Faster Turnaround</h2>
                           <p>Tasks that used to take hours or days — like designing, verifying, generating, and distributing certificates — are now done in minutes or seconds.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Success Metrics -->


<section class="FaqSection margin-TB-80 padding-TB-50">
   <div class="container">
      <div class="section-header text-center mb-4 mb-lg-5 pb-lg-1">
         <?php echo get_field('faq_heading'); ?>
         <h2><?php echo wp_kses_post(get_field('faq_description')); ?></h2>
      </div>

      <?php if ( have_rows('faqs') ): ?>
      <div class="accordion" id="FaqAccordion">
         <?php 
         $faq_index = 0;
         while ( have_rows('faqs') ): the_row();
            $question = get_sub_field('questions');
            $answer = get_sub_field('answers');
            $collapse_id = 'faqCollapse' . $faq_index;
         ?>
         <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $faq_index; ?>">
               <button class="accordion-button <?php echo $faq_index > 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="<?php echo $faq_index === 0 ? 'true' : 'false'; ?>" aria-controls="<?php echo $collapse_id; ?>">
                  <?php echo esc_html($question); ?>
               </button>
            </h2>
            <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse <?php echo $faq_index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $faq_index; ?>" data-bs-parent="#FaqAccordion">
               <div class="accordion-body">
                  <?php echo wp_kses_post($answer); ?>
               </div>
            </div>
         </div>
         <?php 
            $faq_index++;
         endwhile;
         ?>
      </div>
      <?php endif; ?>
   </div>
</section>
<!-- Frequently Answer Questions -->

<?php
// get_sidebar();
get_footer(); 
?>
               