<footer class="main_footer">
    <div class="container">
        <article class="main_footer_optin">
            <header class="main_footer_optin_header">
                <h3>Quer 20% de desconto?</h3>
                <p>Inoforme seu melhor e-mail logo abaixo e receba um cupom com 20% de desconto para a sua primeira compra!</p>
            </header>

            <form action="" method="post" class="main_footer_optin_form">
                <input type="email" name="email" placeholder="Informe seu e-mail:">
                <button class="btn radius transition icon-envelope">Quero meu desconto!</button>
            </form>
        </article>

        <div class="main_footer_nav flex">
            <?php
                for($m = 1; $m < 4; $m++):
            ?>
            <nav class="flex-4">
                <h4>Nome do menu: <?= $m; ?></h4>
                <?php
                    for($n = 1; $n < 6; $n++):
                ?>
                <a href="#" title="">Link de rodapé <?= $m . "/" . $n; ?></a>
                <?php
                    endfor;
                ?>
            </nav>
            <?php
                endfor;
            ?>
            <nav class="flex-4">
                <h4>Pagamento seguro:</h4>
                <ul class="main_footer_nav_pays flex">
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/mastercard.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/visa.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/elo.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/amex.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/dinners.png" alt="" title=""></li>
                    <li class="flex-4"><img src="<?= $configBase; ?>/Assets/Cards/jcb.png" alt="" title=""></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main_footer_bottom">
        <div class="container flex">
            <div class="main_footer_bottom_copy">
                <img src="<?= $configThemeLink; ?>/images/wdpshoes_logo_black.png" alt="WdpShoes" title="WdpShoes">
                <p>is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <nav class="main_footer_bottom_social">
                <a href="<?= $configBase; ?>/facebook" title="" class="icon-facebook icon-notext transition"></a>
                <a href="<?= $configBase; ?>/instagram" title="" class="icon-instagram icon-notext transition"></a>
                <a href="<?= $configBase; ?>/youtube" title="" class="icon-youtube-square icon-notext transition"></a>
            </nav>
        </div>
    </div>
</footer>