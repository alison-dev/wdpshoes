<header class="main_header">
    <div class="container">
        <div class="main_header_nav">
            <div class="main_header_nav_logo">
                <a href="<?= $configBase; ?>" title="WdpShoes | Home">
                    <img src="<?= $configThemeLink; ?>/images/wdpshoes_logo_white.png" alt="" title="">
                </a>
            </div>

            <div class="main_header_nav_search">
                <form action="" method="post" class="radius">
                    <input type="text" name="s" placeholder="Pesquisa na WdpShoes:">
                    <button class="icon-search icon-notext transition"></button>
                </form>
            </div>

            <div class="main_header_nav_menu">
                <a href="<?= $configBase ?>/checkout" title="" class="icon-cart-plus icon-notext transition main_header_nav_menu_cart"><span>3</span></a>
                <div class="main_header_nav_menu_user">
                    <a href="#" title="" class="icon-user main_header_nav_menu_user_a radius transition j_theme_login">Login</a>
                    <nav class="radius">
                        <a href="<?= $configBase; ?>/conta" title="">Meus Pedidos</a>
                        <a href="<?= $configBase; ?>/conta/cadastro" title="">Meus Dados</a>
                        <a href="<?= $configBase; ?>/conta/enderecos" title="">Meus Endereços</a>
                        <a href="<?= $configBase; ?>" title="">Sair</a>
                    </nav>
                </div>
            </div>
        </div>
        <ul class="main_header_departament">
            <?php
                for($i = 1; $i < 6; $i++):
            ?>
            <li class="main_header_departament_li">Departamento <?= $i; ?>
                <ul class="main_header_departament_li_ul">
                <?php
                    for($j = 1; $j < 6; $j++):
                ?>
                    <li class="main_header_departament_li_ul_li transition"><a href="<?= $configBase; ?>/categoria" title="">Categoria <?= $i . "/" . $j; ?></a></li>
                <?php
                    endfor;
                ?>
                </ul>
            </li>
            <?php
                endfor;
            ?>
        </ul>
    </div>
</header>

