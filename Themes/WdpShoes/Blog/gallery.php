<main class="main_content">
    <div class="container">
        <header class="main_content_header">
            <h1 class="main_content_header_title">Blog | <?= $configSiteName; ?></h1>
        </header>

        <div class="flex main_blog_gallery">
            <?php  
                for($b = 1; $b < 7; $b++):
                    require "{$configThemePath}/Templates/blog.php";
                endfor;
            ?>
        </div>

        <nav class="main_category_products_paginator">
            <a href="#" class="radius transition active">1</a>
            <a href="#" class="radius transition">2</a>
            <a href="#" class="radius transition">3</a>
            <a href="#" class="radius transition">4</a>
            <a href="#" class="radius transition">5</a>
        </nav>
    </div>
</main>