<section class="projects border-top">
    <div class="content-960">
        <div class="col-4">
            <h2 class="section-title"><span class="text-theme-color-d">Latest </span>Projects</h2> 
            <div class="description">
                <p>Lorem ipsum is simply dummy text of the printing and printing industry unknown.</p>
                <p>printing industry unknown printerprinting industry unknown printer</p>
                <a href="#" role="button" class="icon-button-group">
                    <span class="btn btn-left btn-theme-color-c">View all projects</span><span class="btn btn-right btn-icon btn-theme-color-c fa-icon fa-angle-right"></span>
                </a>
            </div>
        </div>

        <?php foreach ($projects as $project) { ?>
        <div class="col-4">
            <img src="<?php echo $project['image']['url']; ?>" alt="" class="img-responsive">
            <h3 class="item-title box-border text-center"><?php echo $project['title']; ?></h3>
        </div>
        <?php } ?>
    </div>
</section>