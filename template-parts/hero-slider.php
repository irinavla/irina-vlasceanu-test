<section id="hero-slider" class="slider">
    <?php foreach ( $slider_images as $image) { ?>
<!--        <div class="item background-image" style="background-image:url('<?php // echo $image['url']; ?>');"></div>-->
        <div class="item" style="background-image:url('');">
            <img src="<?php echo $image['url']; ?>" alt="" class="img-responsive">
        </div>
    <?php } ?>
</section>

<section class="home-banner border-top text-center">
    <h2 class="uppercase">Lorem <span class="text-theme-color-a">ipsum</span> dolor sit <span class="text-theme-color-b">amet</span></h2>
    <div class="tagline regular-italic">Lorem ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been...</div>
</section>

