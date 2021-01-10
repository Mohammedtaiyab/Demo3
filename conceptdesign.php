<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData($x['filename']);
?>
<div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular" style="background-image: url(assets/img/pages/<?php echo $indexhead[0]['Bg_image']; ?>);" >
<div class="et_pb_row et_pb_row_5">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_17  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner" style="text-align: -webkit-center;"><h2><?php echo $indexhead[0]['Title']; ?></h2></div>
</div> <div class="et_pb_module et_pb_text et_pb_text_18  et_pb_text_align_center et_pb_bg_layout_light">
<div class="et_pb_text_inner"><?php echo $indexhead[0]['Paragraph']; ?></div>
</div> <div class="et_pb_button_module_wrapper et_pb_button_7_wrapper et_pb_button_alignment_center et_pb_module ">
<a class="et_pb_button et_pb_button_7 et_pb_bg_layout_light" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
</div>
</div> 
</div> 
</div> 
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2>Our Game</h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><p><span style="font-weight: 400;">Playground Hospitality creates successful new dining concepts, improves existing operations and extends the life span of established restaurants.</span></p>
<p><span style="font-weight: 400;">Our collaborative approach was shaped over decades developing and operating highly successful dining concepts. We pair top creative talent to your project through our extensive network of industry leaders.</span></p></div>
</div> 
</div> 
</div> 









<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                            <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"> Bootstrap 3 Carousel FadeIn Out Effect
                                  </a>
                                </h4>
                                <p class="">
                                    Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> Material Design Responsive Menu
                                  </a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language programming...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                            <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="">5  Button Hover Animation Effects
                                  </a>
                                </h4>
                                <p class="">
                                    tutorials button hover animation, although very much a hover button is very beauti...
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$section=$servicesection->servicepage($x['filename']);
$i=1;
foreach ($section as $sec) {
    if($i%2==0){?>

        <div class="et_pb_section et_pb_section_4 et_section_regular">
<div class="et_pb_row et_pb_row_4">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_image et_pb_image_1">
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/pages/<?php echo $sec['secImg'];?>' alt="" title="" height="auto" width="auto" srcset="" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2560px, 100vw" class="wp-image-1173" /></span>
</div>
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_16  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h3><?php echo $sec['secTitle'];?></h3>
 <?php echo $sec['secDesc'];?>   
</div>
</div> <!-- <div class="et_pb_button_module_wrapper et_pb_button_6_wrapper  et_pb_module ">
<a class="et_pb_button et_pb_button_6 et_pb_bg_layout_light" href="what-we-do/index.html#development_support">Explore Why</a>
</div> -->
</div> 
</div> 
</div>
    <?php }else {?>
<div class="et_pb_section et_pb_section_3 et_section_regular">
<div class="et_pb_row et_pb_row_3 et_pb_row_fullwidth">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_15  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h3><?php echo $sec['secTitle'];?></h3>
 <?php echo $sec['secDesc'];?>  </div>
</div> <!-- <div class="et_pb_button_module_wrapper et_pb_button_5_wrapper  et_pb_module ">
<a class="et_pb_button et_pb_button_5 et_pb_bg_layout_light" href="what-we-do/index.html#new_concepts">See How We&#039;ve Done It</a>
</div> -->
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_image et_pb_image_0">
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/pages/<?php echo $sec['secImg'];?>' alt="" title="image (2)" height="auto" width="auto" srcset="" sizes="(max-width: 540px) 100vw, 540px" class="wp-image-1206" /></span>
</div>
</div> 
</div> 
</div> 

<?php } 
$i++;
}
?>





<?php
require ('include/footer.php');
?>

