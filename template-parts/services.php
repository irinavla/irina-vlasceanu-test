<section class="services border-top">
    <div class="content-960">
        <div class="content-area">
            <?php foreach ( $services as $service ) { ?>
            <div class="item col-4 display-flex flex-vertical-center box-shadow radial-gradient-<?php echo $service['color']; ?>">
                <img src="<?php echo $service['icon_url']; ?>" alt="" class="item-icon">
                <h3 class="item-title uppercase"><?php echo $service['title']; ?></h3>
                <div class="description">
                    <?php echo $service['description']; ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
