<?php
    $search = (!empty($configUrl[2]) ? strip_tags($configUrl[2]) : null);

    if(empty($search))
    {
        header("Location: {$configBase}");
        exit;
    }
?>

<main class="main_content">
    <div class="container main_category">
        <section class="main_category_products">
            <header class="main_category_products_header">
                <div>
                    <h1>Sua pesquisa...</h1>
                    <p>Encontramos X resultados para <b><?= $search; ?></b>:</p>
                </div>
                
                <form action="" method="post">
                    <p>Ordenar por:</p>
                    <select name="" id="">
                        <option value="">Mais vendidos</option>
                        <option value="">Ofertas especiais</option>
                        <option value="">Lançamentos</option>
                        <option value="">Menor preço</option>
                        <option value="">Maior preço</option>
                    </select>
                </form>
            </header>

            <div class="main_category_products_content">
                <?php
                    for($pdt = 1; $pdt < 16; $pdt++):
                        require "{$configThemePath}/Templates/product.php";
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
        </section>
        <aside class="main_category_sidebar">
            <h2 class="main_category_sidebar_title">Filtrar resultados:</h2>
            <?php
                for($m = 1; $m < 4; $m++):
            ?>
            <nav class="main_category_sidebar_widget">
                <h3 class="main_category_sidebar_widget_title">Menu de filtro:</h3>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
                <a class="transition" href="#" title="">Filtro (tamanho/cor/etc)</a>
            </nav>
            <?php
                endfor;
            ?>
        </aside>
    </div>
</main>