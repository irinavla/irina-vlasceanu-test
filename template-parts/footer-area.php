<section class="footer-area border-top">
    <div class="content-960 content-area">
        <div class="col-6 box-white box-border">
            <div class="double-border-bottom">
                <h2 class="section-title"><span class="text-theme-color-b">Blog </span>Posts</h2>
            </div>

            <ul class="posts-list">
                <?php foreach ($blog_posts as $post) { ?>
                <li class="list-item">
                    <div class="thumb background-image" style="background-image:url('<?php echo $post['img_url']; ?>')">
                    </div>
                    
                    <div class="info">
                        <h3 class="title"><a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a></h3>
                        <div class="post-meta text-theme-color-a"><?php echo $post['date']; ?></div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-6 box-white box-border testimonials">
            <div class="double-border-bottom">
                <h2 class="section-title"><span class="text-theme-color-d">Client </span>Testimonials</h2>
            </div>
            <div class="slider">   
                <?php foreach ($testimonials as $testimonial ) { ?>
                <div class="item">
                    <blockquote class="quote">
                            <?php echo $testimonial['content']; ?>
                            <cite class="name"><?php echo $testimonial['name']; ?></cite>
                    </blockquote>
                </div>
                <?php } ?>
            </div>     
        </div>
    </div>
</section>