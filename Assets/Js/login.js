$(function(){ 

    //URL BASE DO PROJETO
    getBase = $("link[rel='base']").attr("href");   

    $(".j_theme_login").on("click", function(e){
        e.preventDefault();

        if(!$(".theme_login").length)
        {
            var loginBox = '<div class="theme_login">' +
                                '<div class="theme_login_box radius">' + 
                                    '<header>' + 
                                        '<h1>Faer Login:</h1>' +
                                        '<p>Informe seu nome e e-mail para fazer login e acessar seus pedidos.</p>' +
                                    '</header>' +
                                    '<form action="">' +
                                        '<input type="email" class="radius" placeholder="E-mail:">' +
                                        '<input type="password" class="radius" placeholder="Senha:"></input>' +
                                        '<a class="btn transition radius icon-check-circle" href="'+getBase+'/conta" title="Minha Conta">Fazer Login</a>' +
                                    '</form>' + 
                                    '<a href="#" title="Recuperar Senha:" class="theme_login_box_recover transition icon-exclamation-triangle">Esqueci minha senha</a>' +
                                '</div>' +
                            '</div>';
            $("body").prepend(loginBox);
            $(".theme_login").fadeIn(200).css("display", "flex");            
        }
    });

    $("body").on("click", ".theme_login", function(e){
        if($(e.target).attr("class") === "theme_login")
        {
            $(".theme_login").fadeOut(200, function(){
                $(this).remove();
            });   
        }     
    })
});