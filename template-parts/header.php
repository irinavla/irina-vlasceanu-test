<!DOCTYPE html>
<html>
<head>
<meta charset="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <header class="header">
        <div class="content-960 content-area">
            <div class="brand">
               <h1 class="site-title" title="Site Name"><a href="#">Site Name</a></h1>
            </div>
            <ul class="nav-menu">
                <?php foreach ($menu_links as $link) { ?>
                <li class="menu-item">
                    <a href="<?php echo $link['url'] ?>"><?php echo $link['title']; ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="toggle-menu">
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <div id="page" class="site">
    
        
        
        
       
        