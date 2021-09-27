<main class="main_content">
    <div class="main_content_slide j_slide">
        <a href="<?= $configBase; ?>/produto" class="j_slide_item" title=""><img src="<?= $configBase; ?>/Uploads/featured-01.jpg" alt="" title=""></a>
        <a href="<?= $configBase; ?>/produto" class="j_slide_item" title=""><img src="<?= $configBase; ?>/Uploads/featured-02.jpg" alt="" title=""></a>
        <a href="<?= $configBase; ?>/produto" class="j_slide_item" title=""><img src="<?= $configBase; ?>/Uploads/featured-03.jpg" alt="" title=""></a>
        <div class="j_slide_nav">
        </div>
    </div>

    <section class="pdt_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Ofertas da semana:</h1>
            </header>

            <div class="flex">
                <div class="pdt_gallery_list pdt_gallery_featured">
                <?php         
                    $pdt = 6;               
                    require "{$configThemePath}/Templates/product.php";                        
                ?>
                </div>
                <div class="pdt_gallery_list flex">
                    <?php
                        for($pdt = 1; $pdt < 5; $pdt++):
                            require "{$configThemePath}/Templates/product.php";
                        endfor;
                    ?>
                </div>
            </div>

            <div class="pdt_gallery_normalize">
                <a href="<?= $configBase; ?>/produto" title="">
                    <img class="pdt_gallery_item pdt_gallery_banner" src="<?= $configBase; ?>/Uploads/featured-01.jpg" alt="" title="">
                </a>
            </div>

            <div class="pdt_gallery_normalize flex">
                <?php
                    for($pdt = 5; $pdt < 9; $pdt++):       
                        require "{$configThemePath}/Templates/product.php";
                    endfor;
                ?>
            </div>
        </div>
    </section>

    <section class="pdt_gallery pdt_select">
        <header class="pdt_select_header">
            <h1>
                <span class="j_tabs_nav transtion radius">Eles</span>
                <span class="j_tabs_nav transtion radius">Elas</span>
            </h1>
        </header>
        <div class="j_tabs">
            <div class="j_tabs_item">
                <div class="flex">
                    <div class="pdt_gallery_list pdt_gallery_featured">
                        <?php     
                            $pdt = 15;     
                            require "{$configThemePath}/Templates/product.php";
                        ?>
                    </div>
                    <div class="pdt_gallery_list flex">
                        <?php
                            for($pdt = 11; $pdt < 15; $pdt++):
                                require "{$configThemePath}/Templates/product.php";
                            endfor;
                        ?>
                    </div>
                </div>
            </div>
            <div class="j_tabs_item">
                <div class="flex">
                    <div class="pdt_gallery_list pdt_gallery_featured">
                        <?php
                              $pdt = 9;               
                              require "{$configThemePath}/Templates/product.php";
                        ?>
                    </div>
                    <div class="pdt_gallery_list flex">
                        <?php
                            for($pdt = 5; $pdt < 9; $pdt++):
                                require "{$configThemePath}/Templates/product.php";
                            endfor;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>    

    <?php
        require "{$configThemePath}/Templates/blogMain.php"
    ?>
</main>  