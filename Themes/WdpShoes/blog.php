<?php
    $blogFront = (!empty($configUrl[2]) ? strip_tags($configUrl[2]) : null);

    if(empty($blogFront))
    {
        require "{$configThemePath}/Blog/gallery.php";
    }else
    {
        require "{$configThemePath}/Blog/article.php";
    }
