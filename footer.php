<?php get_header();
/* Template Name: Front Page */
?>

<!--Hero Slider Section-->
<section class="banner-sc">
<div class="h-yazi-ozel h-yazi-margin-ozel">           
</div>
<div class="tablo">
    <div class="tablo--1-ve-2 wow fadeInUp" data-wow-delay="0.2s">
        <div class="bosluk333"></div>
        <?php $sliderleft = get_field('slider_left');?>
        <h2 class="h2-baslik-anasayfa-ozel1 wow <?php echo $sliderleft ['effect'];?>" data-wow-delay="<?php echo $sliderleft ['duration'];?>s"> <?php echo $sliderleft ['title'];?> </h2>
        <div class="bosluk333"></div>
        <div class="bosluk9"></div>
    <p class="paragraf-slider wow <?php echo $sliderleft ['effect_text'];?>" data-wow-delay="<?php echo $sliderleft ['duration_text'];?>s">
    <?php echo $sliderleft ['text'];?>
    </p>
        <div class="bosluk333"></div>
        <div class="bosluk333"></div>
        <div class="row">
            <div class="col-sm-6 wow <?php echo $sliderleft ['effect_button'];?>" data-wow-delay="<?php echo $sliderleft ['duration_button'];?>s">
                <a href="<?php echo $sliderleft ['link'];?>" class="custom-button"><?php echo $sliderleft ['button_text'];?></a>
            </div>

        </div>
    </div>           
    <!--Slider Image Alanı-->
    <div class="tablo--1-ve-2">
    <?php $sliderright = get_field('slider_right');?>
        <div class="hero1 wow <?php echo $sliderright ['effect_1'];?>" data-wow-delay="<?php echo $sliderright ['duration_1'];?>s">
            <img class="imagerotate1" src="<?php echo $sliderright ['image_1'];?>" alt="" >
        </div>
        <div class="hero2 wow <?php echo $sliderright ['effect_2'];?>" data-wow-delay="<?php echo $sliderright ['duration_2'];?>s">
            <img class="imagerotate2" src="<?php echo $sliderright ['image_2'];?>" alt="" >
        </div>
        <div class="hero3 wow <?php echo $sliderright ['effect_3'];?>" data-wow-delay="<?php echo $sliderright ['duration_3'];?>s">
            <img class="imagerotate1" src="<?php echo $sliderright ['image_3'];?>" alt="" >
        </div>
        <div class="hero4 wow <?php echo $sliderright ['effect_4'];?>" data-wow-delay="<?php echo $sliderright ['duration_4'];?>s">
            <img class="imagerotate4" src="<?php echo $sliderright ['image_4'];?>" alt="" >
        </div>
        <div class="hero5 wow <?php echo $sliderright ['effect_5'];?>" data-wow-delay="<?php echo $sliderright ['duration_5'];?>s">
            <img class="imagerotate5" src="<?php echo $sliderright ['image_5'];?>" alt="" >
        </div>
        <div class="hero6 wow <?php echo $sliderright ['effect_6'];?>" data-wow-delay="<?php echo $sliderright ['duration_6'];?>s">
            <img class="imagerotate6" src="<?php echo $sliderright ['image_6'];?>" alt="" >
        </div>
        <div class="hero7 wow <?php echo $sliderright ['effect_7'];?>" data-wow-delay="<?php echo $sliderright ['duration_7'];?>s">
            <img class="imagerotate7" src="<?php echo $sliderright ['image_7'];?>" alt="" >
        </div>
        <div class="hero8 wow <?php echo $sliderright ['effect_8'];?>" data-wow-delay="<?php echo $sliderright ['duration_8'];?>s">
            <img class="imagerotate8" src="<?php echo $sliderright ['image_8'];?>" alt="" >
        </div>
        <div class="infobg1 wow <?php echo $sliderright ['effect_9'];?>" data-wow-delay="<?php echo $sliderright ['duration_9'];?>s">
            <img class="infobgrotate1" src="<?php echo $sliderright ['image_9'];?>" alt="" >
        </div>
            <img src="<?php echo esc_url( get_field( 'background_hero' ) ); ?>" class="absoluteimg" alt="">
        <div class="boslukhm"></div>
    </div>
</div>
</section>

<!--Services Top-->
<!--Services 1-->
<section class="services-top">
<?php $servicestopsection = get_field('services_top_section');?>
    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
        <h2 class="h2-baslik-hizmetler-2 wow <?php echo $servicestopsection ['effect'];?>" data-wow-delay="<?php echo $servicestopsection ['duration'];?>s"> <?php echo $servicestopsection ['title'];?> </h2>
    </div>
        <p class="h2-baslik-hizmetler-3__paragraf wow <?php echo $servicestopsection ['effect_text'];?>" data-wow-delay="<?php echo $servicestopsection ['duration_text'];?>s">
        <?php echo $servicestopsection ['text'];?>
        </p>
    <div class="bosluk3"></div>
        <div class="tabloozellik">
            <?php if( have_rows('services_top') ): ?>

            <?php while( have_rows('services_top') ): the_row();

            //vars
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            $link = get_sub_field('link');

            ?>
            <div class="tablo--1-ve-4">
                <div class="paketler wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s" onclick="location.href='<?php echo $link; ?>';" style="cursor:pointer;">
                    <div class="hizmet-kutu">
                        <div class="kutu-duzen">
                            <h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
                            <div class="boslukicon"></div>
                            <div class="icon-box">
                                <span class="border-layer"></span>
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
</section>

<!--About Info Alanı-->

<?php $aboutus_3D = get_field('3d_about_us');?>

<div class="bosluk8"></div>
<section class="hakkimizda-bolumu-anasayfa">
<div class="h-yazi-ozel h-yazi-margin-ozel">           
</div>
<div class="tablo">
    <div class="tablo--1-ve-2 wow fade">
        <div class="galeri1 wow <?php echo $aboutus_3D ['image_effect_1'];?>" data-wow-delay="0.5s">
        <img class="imagerotate" src="<?php echo $aboutus_3D ['rotate_image_about'];?>" alt="" >
        </div>
        <div class="galeri wow <?php echo $aboutus_3D ['image_effect_3d'];?>" data-wow-delay="100ms" data-wow-duration="1500ms" data-tilt>
            <img src="<?php echo $aboutus_3D ['image_3d_about'];?>" alt="Webone About" class="galeri__gorsel galeri__gorsel--3 zimage">
        </div>
    </div>           
    <!--Galeri Görsel Alanı-->
    <div class="tablo--1-ve-3 wow fadeInUp" data-wow-delay="0.5s">
        <h2 class="h2-baslik-anasayfa-ozel wow <?php echo $aboutus_3D ['right_title_about_effect'];?>" data-wow-delay="0.6s"> <?php echo $aboutus_3D ['right_title_about'];?> </h2>
        <div class="bosluk333"></div>
        <p class="paragraf wow <?php echo $aboutus_3D ['right_text_about_effect'];?>" data-wow-delay="0.6s">
        <?php echo $aboutus_3D ['right_text_about'];?>
        <div class="bosluk333"></div>
        <img class="divider" width="120" height="15" title="divider" alt="divider" src="<?php echo $aboutus_3D ['line_image'];?>">
        <div class="bosluk333"></div>
        <div class="row">
            <div class="col-sm-2 wow  <?php echo $aboutus_3D ['right_icon_1_effect'];?>" data-wow-delay="0.7s">
                <div class="iconleft"><i class="<?php echo $aboutus_3D ['right_icon_1'];?>"></i></div>
            </div>
            <div class="col-sm-10 wow <?php echo $aboutus_3D ['right_title_icon_1_effect'];?>" data-wow-delay="0.8s">
                <h3 class="baslik-3s h-yazi-margin-kucuk1"><?php echo $aboutus_3D ['right_title_icon_1'];?></h3><br>
                <p class="paragraf-info"><?php echo $aboutus_3D ['right_text_icon_1'];?></p><br>
            </div>
        </div>
        <div class="bosluk13qs"></div>
        <div class="row">
            <div class="col-sm-2 wow <?php echo $aboutus_3D ['right_text_icon_2_effect'];?>" data-wow-delay="0.9s">
                <div class="iconleft"><i class="<?php echo $aboutus_3D ['right_icon_2'];?>"></i></div>
            </div>
            <div class="col-sm-10 wow <?php echo $aboutus_3D ['right_icon_2_effect'];?>" data-wow-delay="1s">
                <h3 class="baslik-3s h-yazi-margin-kucuk1"><?php echo $aboutus_3D ['right_title_icon_2'];?></h3><br>
                <p class="paragraf-info"><?php echo $aboutus_3D ['right_text_icon_2'];?></p><br>
            </div>
        </div>
        <div class="bosluk13qs"></div>
        <div class="row">
            <div class="col-sm-2 wow <?php echo $aboutus_3D ['right_title_icon_3_effect'];?>" data-wow-delay="1.1s">
                <div class="iconleft"><i class="<?php echo $aboutus_3D ['right_icon_3'];?>"></i></div>
            </div>
            <div class="col-sm-10 wow <?php echo $aboutus_3D ['right_text_icon_3_effect'];?>" data-wow-delay="1.2s">
                <h3 class="baslik-3s h-yazi-margin-kucuk1"><?php echo $aboutus_3D ['right_title_icon_3'];?></h3><br>
                <p class="paragraf-info"><?php echo $aboutus_3D ['right_text_icon_3'];?></p><br>
            </div>
        </div>
        <div class="bosluk1"></div>
        <a href="<?php echo $aboutus_3D ['right_button_about_link'];?>" class="custom-button wow <?php echo $aboutus_3D ['right_button_text_about_text_effect'];?>" data-wow-delay="1.3s"><?php echo $aboutus_3D ['right_button_text_about_text'];?></a>
            <div class="bosluk3rh"></div>
    </div>
</div>
</section>
<div class="bosluk4"></div>

<!-- Analysis -->
<section class="analysis-section">
<?php $analysissection = get_field('analysis_section');?>
    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
        <h2 class="h2-baslik-hizmetler-2 wow <?php echo $analysissection ['effect'];?>" data-wow-delay="<?php echo $analysissection ['duration'];?>s"><?php echo $analysissection ['title'];?></h2>
    </div>
        <p class="h2-baslik-hizmetler-3__paragraf wow <?php echo $analysissection ['effect_text'];?>" data-wow-delay="<?php echo $analysissection ['duration'];?>s">
        <?php echo $analysissection ['text'];?>
        </p>
    <div class="bosluk3"></div>
        <div class="tabloozellik">
            <?php if( have_rows('analysis') ): ?>

            <?php while( have_rows('analysis') ): the_row();

            //vars
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            $link = get_sub_field('link');

            ?>
            <div class="tablo--1-ve-3">
                <div class="paketler wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s" onclick="location.href='<?php echo $link; ?>';" style="cursor:pointer;">
                    <div class="analiz-alani">
                        <div class="inner-box">
                            <div class="icon-box">
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <div class="content-box wow slideInUp">
                                <h3><?php echo $title; ?></h3>
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
</section>

<!--Services Special Alanı-->
<section class="services1 wow fadeInUp" data-wow-delay="0.3s">
<?php $servicesspecialsection = get_field('services_special_section');?>
    <div class="bosluk3"></div>
    <div class="tabloozellik">
        <div class="tablo--1-ve-2">
            <div class="">
                <h2 class="h2-baslik-hizmetler-2-s wow <?php echo $servicesspecialsection ['effect'];?>" data-wow-delay="<?php echo $servicesspecialsection ['duration'];?>s"> <?php echo $servicesspecialsection ['title'];?> </h2>
            </div>
            <div class="bosluk333"></div>
                <p class="paragraf-sol-s wow <?php echo $servicesspecialsection ['effect_text'];?>" data-wow-delay="<?php echo $servicesspecialsection ['duration_text'];?>s">
                <?php echo $servicesspecialsection ['text'];?>
                </p>
                <div class="bosluk333"></div>
                <a href="<?php echo $servicesspecialsection ['link'];?>" class="custom-buttonw <?php echo $servicesspecialsection ['effect_button'];?>" data-wow-delay="<?php echo $servicesspecialsection ['duration_button'];?>s"><?php echo $servicesspecialsection ['button_text'];?></a>
                <div class="galeri1">
                <img class="imagerotate" src="<?php echo esc_url( get_field( 'image_rotate' ) ); ?>" alt="" >
            </div>
        </div>
        <!--Services 1-->
        <?php if( have_rows('services_special') ): ?>

        <?php while( have_rows('services_special') ): the_row();

        //vars
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $effect = get_sub_field('effect');
        $duration = get_sub_field('duration');
        $buttontext = get_sub_field('button_text1');
        $link = get_sub_field('link');

        ?>
        <div class="tablo--1-ve-4 ssw">
            <div class="paketler wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s" onclick="location.href='<?php echo $link; ?>';" style="cursor:pointer;">
                <div class="services-special">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="anim-icon">
                                <span class="icon icon-1"></span>
                                <span class="icon icon-2"></span>
                                <span class="icon icon-3"></span>
                            </div>
                            <i class="<?php echo $icon; ?>"></i>
                        </div>
                        <h3 class="h3-baslik-hizmet"><?php echo $title; ?></h3>
                        <p><?php echo $text; ?></p>
                        <a href="<?php echo $link; ?>" class="custom-button"><?php echo $buttontext; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!--Count-->

<section class="content-section" data-background="#fafafa">
<div class="container">
    <div class="row justify-content-center">

        <?php if( have_rows('countdown') ): ?>

        <?php while( have_rows('countdown') ): the_row();

        //vars
        $icon = get_sub_field('icon');
        $number = get_sub_field('number');
        $title = get_sub_field('title');
        $effect = get_sub_field('effect');
        $duration = get_sub_field('duration');

        ?>
    <div class="col-lg-3 col-md-6 wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s">
        <div class="icon"><i class="<?php echo $icon; ?>"></i></div>
        <div class="counter-box wow fade">
        <span class="odometer" data-count="<?php echo $number; ?>" data-status="yes">0</span>
        <h6><?php echo $title; ?></h6>
        </div>
    </div>
    
    <?php endwhile; ?>   
        </div>
    <?php endif; ?> 
</div>
</section>

<!--Projects Alanı-->
<div class="bosluk3"></div>
<?php $projectsection = get_field('project_section');?>
<section class="projeler-sayfa-alani">
    <div class="h-yazi-ortalama h-yazi-margin-orta-4 wow <?php echo $projectsection ['effect'];?>" data-wow-delay="<?php echo $projectsection ['duration'];?>s">
        <h2 class="h2-baslik-hizmetler-2"> <?php echo $projectsection ['title'];?> </h2>
        </div>
        <p class="h2-baslik-hizmetler-3__paragraf wow <?php echo $projectsection ['effect_text'];?>" data-wow-delay="<?php echo $projectsection ['duration_text'];?>s">
        <?php echo $projectsection ['text'];?>
        </p>
        <div class="component-systemTabs">
            <div class="tabs-container">
                    <!--Projects Tab1-->
                <div id="tab-1" data-tab-title="Datax Project" class="tab-content current">
                    <div class="cards">
                    <div class="tabloozellik">
                        <?php if( have_rows('projects') ): ?>

                        <?php while( have_rows('projects') ): the_row();

                        //vars
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $effect = get_sub_field('effect');
                        $duration = get_sub_field('duration');
                        $buttontext = get_sub_field('button_text1');
                        $link = get_sub_field('link');

                        ?>
                        <div class="tablo--1-ve-3">
                            <div class="card wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s" onclick="window.location.href='<?php echo $link; ?>'">
                                <img src="<?php echo $image; ?>" alt="Project">
                                <div class="cardContent">
                                    <h2><?php echo $title; ?></h2>
                                    <button onclick="window.location.href='<?php echo $link; ?>'"><?php echo $buttontext; ?></button>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>      
    </div> 
    <div class="h-yazi-ortalama h-yazi-margin">
        <a href="<?php the_field('link_projects'); ?>" class="custom-button"><?php the_field('button_text_projects'); ?></a>
    </div>
</section> 

<!--IT Pack Alanı-->
<!--pack 1-->
<?php $packsection = get_field('3d_packs_section');?>
<section class="special-paket-alani" id="#special-paket-alani">
    <div class="h-yazi-ortalama h-yazi-margin-orta-3">
        <div class="icon wow <?php echo $packsection ['icon_effect'];?>" data-wow-delay="0.3s"><i class="<?php echo $packsection ['icon'];?>"></i></div>
        <h2 class="h2-baslik-hizmetler-2 wow <?php echo $packsection ['title_effect'];?>" data-wow-delay="0.4s"> <?php echo $packsection ['title'];?> </h2>
    </div>
    <p class="h2-baslik-hizmetler-2__paragraf wow <?php echo $packsection ['small_text_effect'];?> " data-wow-delay="0.6s">
    <?php echo $packsection ['small_text'];?>  
    </p>
    <div class="bosluk3"></div>
        <div class="tablo">
        <?php if( have_rows('3d_packs') ): ?>

            <?php while( have_rows('3d_packs') ): the_row();

            //vars
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $list = get_sub_field('list');
            $backtitle = get_sub_field('back_title');
            $price = get_sub_field('price');
            $buttontext = get_sub_field('button_text');
            $link = get_sub_field('link');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            $popupforms = get_sub_field('popup_forms');

            ?>
            <div class="tablo--1-ve-3">
                <div class="paketler3 wow <?php echo $effect;?>" data-wow-delay="<?php echo $duration;?>s" data-tilt>
                    <div class="paketler3__on paketler3__on--onyazi">
                        <div class="paketler3__gorsel paketler3__gorsel--1">
                        <div class="iconw"><i class="<?php echo $icon;?>"></i></div>
                        <h3 class="baslik-sol h-yazi-margin-kucuk"><?php echo $title;?></h3>
                        <p class="services-kutu2--yazi wow fade">
                        <?php echo $description;?>
                        </p>
                        </div>
                        <div class="paketler3__icerik">
                            <?php echo $list;?>
                        </div>
                    </div>
                    <div class="paketler3__on paketler3__on--arkayazi paketler3__on--arkayazi-1">
                        <div class="paketler3__pr">
                            <div class="paketler3__pr-kutu">
                                <p class="paketler3__pr-yazi"><?php echo $backtitle;?></p>
                                <p class="paketler3__pr-degeri"><?php echo $price;?></p>
                            </div>
                            <a href="<?php echo $link;?>" class="custom-buttonw"><?php echo $buttontext;?></a>
                        </div>
                    </div>
                </div>
                <!-- POPUP FORMS -->
            <?php echo $popupforms;?>
            </div>      
    <?php endwhile; ?>   
        </div>
    <?php endif; ?> 
</section>
<!--Markalar Alanı-->

<?php $customerssection = get_field('customers_section');?>

<section class="markalar">
    <div class="h-yazi-ortalama h-yazi-margin-orta-3 wow animated fadeInUp animated" data-wow-delay="0.5s">
        <div class="iconw wow <?php echo $customerssection ['icon_effect'];?>" data-wow-delay="0.6s"><i class="<?php echo $customerssection ['icon'];?>"></i></div>
        <h2 class="h2-baslik-hizmetler-21 wow <?php echo $customerssection ['title_effect'];?>" data-wow-delay="0.6s"> <?php echo $customerssection ['title'];?> </h2>
        </div>
        <p class="h2-baslik-hizmetler-21__paragraf wow <?php echo $customerssection ['small_effect'];?>" data-wow-delay="0.6s">
        <?php echo $customerssection ['small_text'];?>
        </p>
        <div class="bosluk3"></div>

    <div class="container">
        <div class="row">     

    <?php if( have_rows('customers') ): ?>

        <?php while( have_rows('customers') ): the_row();

        //vars
        $image = get_sub_field('image');

        ?>
    <div class="col-lg-2">
    <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow animated fadeInUp animated" data-wow-delay="0.5s">
        <img src="<?php echo $image; ?>" alt="Marka 1" class="marka">
    </div>
    </div>

    <?php endwhile; ?>   
    <?php endif; ?> 
    </div>
    </div>

</section> 

<!--Yorumlar-->

<?php $commentssection = get_field('comments_section');?>

<section class="yorumlar-alani-sayfa">
    <div class="container">
        <div class="row">
        <div class="col-12 wow animated fadeIn animated" data-wow-delay="0.5s">
            <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                <div class="icon wow <?php echo $commentssection ['icon_effect'];?>" data-wow-delay="0.5s"><i class="<?php echo $commentssection ['icon'];?>"></i></div>
                <h2 class="h2-baslik-hizmetler-yorum wow <?php echo $commentssection ['title_effect'];?>" data-wow-delay="0.5s"> <?php echo $commentssection ['title'];?> </h2> 
            </div>
                <p class="h2-baslik-hizmetler-yorum__yorum wow <?php echo $commentssection ['small_text_effect'];?>" data-wow-delay="0.5s">
                <?php echo $commentssection ['small_text'];?>
                </p>
                <div class="bosluk3a"></div>
        </div>
            <div class="col-12">
                <div class="carousel-classes">
                <div class="swiper-wrapper">

                <?php if( have_rows('comments') ): ?>

                    <?php while( have_rows('comments') ): the_row();

                    //vars
                    $comment = get_sub_field('comment');
                    $image = get_sub_field('image');
                    $fullname = get_sub_field('full_name');

                    ?>

                <div class="swiper-slide wow animated fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="class-box">
                    <div class="testimonial-card">
                        <div class="testimon-text">
                        <?php echo $comment; ?>
                            <i class="fas fa-quote-right quote"></i>
                        </div>
                        <div class="testimonialimg">
                            <div class="testimonimg"><img src="<?php echo $image; ?>" alt="">
                            </div>
                            <h3 class='person'><?php echo $fullname; ?></h3>
                        </div>
                        </div>
                        </div>
                        <!-- end swiper-slide -->
                </div>

                <?php endwhile; ?>   
                <?php endif; ?> 
                </div>
                <div class="swiper-pagination"></div>
                </div>      
            </div>
        </div>
    </div>
</section>

<!--Posts-->
<section class="yorumlar-alani-sayfa">
<?php $blogsection = get_field('blog_section');?>
<div class="container">
    <div class="row">
        <div class="col-12 wowfade">
            <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                <div class="icon wow <?php echo $blogsection ['icon_effect'];?>" data-wow-delay="0.3s"><i class="<?php echo $blogsection ['icon'];?>"></i></div>
                <h2 class="h2-baslik-hizmetler-yorum wow <?php echo $blogsection ['title_effect'];?>" data-wow-delay="0.4s"> <?php echo $blogsection ['title'];?> </h2> 
            </div>
            <p class="h2-baslik-hizmetler-yorum__yorum wow <?php echo $blogsection ['small_text_effect'];?>" data-wow-delay="0.5s">
            <?php echo $blogsection ['small_text'];?>
            </p>
            <div class="bosluksv5"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="carousel-classes">
                <div class="swiper-wrapper">
                    <?php 
                        foreach( get_field('blog_slider') as $post ):
                        setup_postdata( $post );
                    ?>
                    <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s" data-tilt>
                        <div class="post-kutu" style="cursor:pointer;">
                            <?php the_post_thumbnail('custom-size'); ?>
                            <div class="datesection"><span class="date">
                                <?php echo get_the_date('d');?>.<?php echo get_the_date('m');?>.<?php echo get_the_date('Y');?>
                            </span>&nbsp;<span class="tt">-</span>&nbsp;<?php the_category(); ?></div>
                            <h3 class="baslik-3 h-yazi-margin-kucuk"><?php the_title(''); ?></h3>
                            <p class="post-kutu--yazi">
                            <?php the_excerpt(); ?> 
                            <div class="h-yazi-ortalama h-yazi-margin-4">
                                <a href="<?php the_permalink(); ?>" class="custom-button">More</a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata();
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="swiper-pagination"></div>
</section>   

<?php get_footer();?>
