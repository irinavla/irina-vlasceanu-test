</div><!-- end #page-->    

<footer class="site-footer">
    <div class="content-960 content-area">
        <ul class="copy">
            <li>Copyright 2014 @ COMPANY. All rights reserved.</li>
            <li><a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a><li>
        </ul>
        <ul class="social-links">
            <?php foreach ($social_links as $link) { ?>
            <li><a class="social fa-icon fa-<?php echo $link['icon']; ?>" href="<?php echo $link['link']; ?>"></a></li>
            <?php } ?>
        </ul>
    </div>
</footer>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
