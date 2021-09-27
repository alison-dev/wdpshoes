<main class="main_content">
    <div class="container main_account">
        <nav class="main_account_sidebar">
            <a class="radius transition active" href="<?= $configBase; ?>/conta" title="">Meus Pedidos</a>
            <a class="radius transition" href="<?= $configBase; ?>/conta/cadastro" title="">Meus Dados</a>
            <a class="radius transition" href="<?= $configBase; ?>/conta/enderecos" title="">Meus Endereços</a>
            <a class="radius transition" href="<?= $configBase; ?>" title="">Sair</a>
        </nav>
    
        <div class="main_account_content">
            <?php 
                for($order = 1; $order < 4; $order++):
            ?>
            <article class="main_account_content_item">
                <header class="main_account_content_item_header">
                    <h1>Pedido #776676M<?= $order; ?></h1>
                    <p><?= date("d/m/Y", strtotime("-{$order}days")); ?></p>
                </header>
                <ul class="main_account_content_item_pdts radius">
                <?php 
                    for($img = 1; $img < 8; $img++):
                ?>
                    <li><img src="<?= $configBase; ?>/Uploads/products/<?= $img; ?>.jpg" alt="" title=""></li>
                <?php
                    endfor;
                ?>
                </ul>
                <div class="main_account_content_item_desc">
                    <p>Aprovado</p>
                    <p>R$ 227,00 em 10x no cartão</p>
                    <a href="#" title="">ver detalhes</a>
                    <a href="#" title="">rastrear envio</a>
                </div>
            </article>
            <?php
                endfor;
            ?>
        </div>
    </div>
</main>