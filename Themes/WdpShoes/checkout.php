<article class="main_content">
    <div class="container main_checkout">
        <header class="main_checkout_header">
            <div>
                <h1><?= $configSiteName; ?></h1>
                <p>3 Podutos em seu carrinho:</p>
            </div>            
            <span class="btn transtion radius icon-cart-plus">Finalizar Compra</span>
        </header>
        
        <section class="main_checkout_products radius">
            <?php
                for($c = 1; $c < 4; $c++):
            ?>
            <article class="main_checkout_products_item">
                <div class="main_checkout_products_item_thumb">
                    <img src="<?= $configBase; ?>/Uploads/products/<?= $c; ?>.jpg" alt="" title="">
                </div>
                <div class="main_checkout_products_item_desc">
                    <h1>Calça MoletomConfort Mama latina</h1>
                    <p class="main_checkout_products_item_desc_price">R$ 59,00 <span>R$ 79,90</span></p>
                    <p>Tamanho G | Cor: Preto</p>
                    <p class="main_checkout_products_item_desc_qtd">
                        Quantidade: 1
                        <span class="radius transition">+</span>
                        <span class="radius transition width_minus">-</span>
                    </p>
                </div>
            </article>
            <?php
                endfor;
            ?>
        </section>

        <footer class="main_checkout_footer">
            <div class="main_checkout_footer_calc">
                <input type="text" class="radius" placeholder="Informe seu CEP:">
                <button class="transition radius">Calcular Frete</button>
            </div>
            <div class="main_checkout_footer_price">
                <p>Sub total: R$ 177,00</p>
                <p>Frete: R$ 44,00</p>
                <p><b>Sub total: R$ 221,00</b></p>
                <span class="btn transtion radius icon-cart-plus">Finalizar Compra</span>
            </div>
        </footer>
    </div>    
</article>