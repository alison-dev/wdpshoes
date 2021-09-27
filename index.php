<?php
    ob_start();
    define("BASE", "https://www.localhost/wdp_project");
    define("THEME", "WdpShoes");
    define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
    define("THEME_LINK", BASE . "/Themes/" . THEME);

    $configBase = BASE;

    $configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
    $configUrl[1] = (!empty($configUrl[1]) ? $configUrl[1] : "index");

    $configThemePath = THEME_PATH;
    $configThemeLink = THEME_LINK;
    $configSiteName = "WdpShoes";
?>

<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WdpShoes | Home</title>

        <link href="<?= $configBase; ?>" rel="base">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">  
        <link href="https://file.myfontastic.com/tqa7Hdr6RyAnvNfaeuosu4/icons.css" rel="stylesheet">     

        <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/icons.css">         
        <link rel="stylesheet" href="<?= $configBase; ?>/Assets/Styles/Boot.css">
        <link rel="stylesheet" href="<?= $configThemeLink; ?>/Style.css">
        <link rel="shortcut icon" href="<?= $configThemeLink; ?>/images/favicon.png">       

        <script src="<?= $configBase; ?>/Assets/Js/jquery.js"></script>
        <script src="<?= $configBase; ?>/Assets/Js/script.js"></script>
        <script src="<?= $configBase; ?>/Assets/Js/login.js"></script>
    </head>
    <body>
        <?php
            //SEARCH
            $searchForm = strip_tags(trim(filter_input(INPUT_POST, "s", FILTER_DEFAULT)));
            if(!empty($searchForm))
            {
                header("Location: {$configBase}/pesquisa/{$searchForm}");
                exit;
            }

            //HEADER
            require  "{$configThemePath}/header.php";            

            if(file_exists("{$configThemePath}/{$configUrl[1]}.php") && !is_dir("/{$configThemePath}/{$configUrl[1]}.php"))
            {
                //THEME ROOT
                require "{$configThemePath}/{$configUrl[1]}.php";
            }elseif(!empty($configUrl[2]) && file_exists("/{$configThemePath}/{$configUrl[1]}/$configUrl[2].php") && !is_dir("/{$configThemePath}/{$configUrl[1]}/$configUrl[2].php"))
            {
                //THEME FOLDER
                require "{$configThemePath}/{$configUrl[1]}/$configUrl[2].php";
            }else
            {
                //THEME ROOT
                if(file_exists("{$configThemePath}/404.php"))
                {
                    require "{$configThemePath}/404.php";
                }else
                {
                    echo "<div class='container'><div class='trigger trigger-error icon-exclamation-triangle radius'>Desculpe, mas a página que você tentou acessar não existe ou foi removida!</div></div>";
                }
            }
            
            require "{$configThemePath}/footer.php";
        ?>
    </body>
</html>
<?php
    ob_end_flush();
?>