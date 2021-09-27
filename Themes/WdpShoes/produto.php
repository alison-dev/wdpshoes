<main class="main_content">
    <div class="container">
        <article class="main_product">
            <div class="main_product_gallery">
                <ul class="main_product_gallery_list">
                <?php
                    for($p = 16; $p < 21; $p++):
                        $active = ($p == 16 ? "active" : "");
                ?>                
                    <li class="radius transition j_gallery_item <?= $active; ?>"><img src="<?= $configBase; ?>/Uploads/products/<?= $p; ?>.jpg" alt="" title=""></li>
                <?php
                    endfor;
                ?>
                </ul>
                <div class="main_productv_gallery_cover">
                    <img class="radius j_gallery_home" src="<?= $configBase; ?>/Uploads/products/16.jpg" alt="" title="">
                </div>
            </div>
            <div class="main_product_checkout">
                <p class="main_product_checkout_check"><?= str_repeat("<span class='icon-check-circle icon-notext'></span>", 5); ?></p>
                <h1 class="main_product_checkout_title">Top gonew c/ Bojo Removível Mármore Tule Média Sustenção - Estampado</h1>
                <p class="main_product_checkout_headline">Exercite-se com estilo usando o Top Gonew Mármore Detalhe Tulel Trazendo um design moderno e uma estampa exclusiva... <b class="j_anchor" data-anchor=".main_product_description">ver mais</b></p>
                <p class="main_product_checkout_price">R$ 59,00 <span>R$ 79,90</span></p>
                <p class="main_product_checkout_economy">Economia de R$ 20,00 (25%)</p>
                <p class="main_product_checkout_parcels">Em até 4x de R$ 14,75</p>

                <form class="main_product_checkout_cart" action="<?= $configBase; ?>/checkout">
                    <h2>Selecione o <b>tamanho:</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="width_plus"><b style="font-size: 1.3em;">+</b></span>
                            <input type="text" value="1" name="">
                            <span class="width_minus"><b style="font-size: 1.3em;">-</b></span>                            
                        </div>
                        <button class="btn icon-cart-plus radius transition">COMPRAR</button>
                    </div>                    
                </form>

                <aside class="main_product_checkout_related">
                    <h2>Outras <b>cores:</b></h2>
                    <div>
                        <a href="#" class="radius transition active">
                            <img src="<?= $configBase; ?>/Uploads/products/16.jpg" alt="" title="">
                        </a>
                        <a href="#" class="radius transition">
                            <img src="<?= $configBase; ?>/Uploads/products/17.jpg" alt="" title="">
                        </a>
                    </div>
                </aside>

            </div>
        </article>
    </div>

    <section class="main_product_related">
        <div class="container">
            <header class="main_content_header">
                <h2 class="main_content_header_title">Produtos Relacionados</h2>
            </header>

            <div class="pdt_gallery pdt_gallery_normalize flex">
                <?php
                    for($pdt = 5; $pdt < 13; $pdt++):
                        require "{$configThemePath}/Templates/product.php";
                    endfor;
                ?>
            </div>
        </div>
    </section>

    <article class="main_product_description">
        <div class="container">
            <header class="main_product_description_header">
                <span class="main_product_description_header_tag">DESCRIÇÃO</span>
                <h4>Top Gonew c/ Bojo Removível Mármore Tule Média Sustentação - Estampado</h4>
                <p>Exercite-se no estilo usando o Top Gonew Mármore Detalhe Tule! Trazendo um design moderno e uma estampa exclusiva, este Top Esportivo da Gonew entra em cena para oferecer ótima sustentação ao busto durante seus treinos e corridas. Ele é confeccionado em tecido elástico, e conta com detalhe em tule na parte da frente, que deixa o visual da peça sensual e muito mais respirável. Não perca tempo e compre já o seu Top Gonew Mármore Detalhe Tule Média sustentação!</p>

                <form class="main_product_checkout_cart" action="<?= $configBase; ?>/checkout">
                    <h2>Selecione o <b>tamanho:</b></h2>
                    <span class="radius transition">P</span>
                    <span class="radius transition">M</span>
                    <span class="radius transition">G</span>
                    <span class="radius transition">GG</span>

                    <div class="main_product_checkout_cart_act">
                        <div class="radius">
                            <span class="width_plus"><b style="font-size: 1.3em;">+</b></span>
                            <input type="text" value="1" name="">
                            <span class="width_minus"><b style="font-size: 1.3em;">-</b></span>                            
                        </div>
                        <button class="btn icon-cart-plus radius transition">COMPRAR</button>
                    </div>                    
                </form>
            </header>

            <div class="main_product_description_thumb">
                <img class="radius j_gallery_home" src="<?= $configBase; ?>/Uploads/products/16.jpg" alt="" title="">
            </div>
        </div>
    </article>
</main>