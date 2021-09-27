$(function(){
    
    var condSlide = false;

    //J_SLIDE
    if($(".j_slide").length)
    {
        function jSlide()
        {
            $(".j_slide_nav span:first-child").css("background", "rgba(0, 0, 0, 0.4)");
            $(".j_slide_nav span").removeClass("active");
            if($(".j_slide_item:visible").next(".j_slide_item").length)
            {                
                $(".j_slide_nav span:eq("+($(".j_slide_item:visible").index() + 1)+")").addClass("active");
                $(".j_slide_item:visible").fadeOut(function(){
                    $(this).next(".j_slide_item").fadeIn().css("display", "block");
                });
            }else
            {
                $(".j_slide_nav span:first-child").css("background", "#dd336b");
                $(".j_slide_nav span:eq(0)").addClass("active");
                $(".j_slide_item:visible").fadeOut(function(){
                    $(".j_slide_item:first-child").fadeIn();
                });
            }
        }

        var timeSlide = 3000;
        var jslideTimer = setInterval(function(){
            jSlide();
        }, timeSlide);

        $(".j_slide").on("mouseenter", function(){
            clearInterval(jslideTimer);
        }).on("mouseleave", function(){
            jslideTimer = setInterval(function(){
                jSlide();
            }, timeSlide);
        });

        var slideNav = "";
        $(".j_slide_item").each(function(i, e){
            slideNav += "<span class='rounded transition'></span>"; 
        });

        $(".j_slide_nav").html(slideNav).find("span").on("click", function(){
            var navigation = $(this);
            clearInterval(jslideTimer);
            $(".j_slide_nav span:first-child").css("background", "rgba(0, 0, 0, 0.4)");
            $(".j_slide_nav span").removeClass("active");            
            
            $(".j_slide_item:visible").fadeOut(function(){
                navigation.addClass("active");
                $(".j_slide_item:eq("+ navigation.index() +")").fadeIn().css("display", "block");
            });
        });

        $(".j_slide_nav span:first-child").on("click", function(){
            $(this).css("background", "#dd336b");
            $(".j_slide_nav span").removeClass("active");
            clearInterval(jSlideTimer);
            $(".j_slide_item:visible").fadeOut(function(){
                $(".j_slide_item:eq(0)").fadeIn();
            });
        });

        $(".j_slide_nav").find("span:eq(0)").addClass("active");
    }

    //J_TABS
    if($(".j_tabs").length)
    {
        $(".j_tabs_nav:eq(0)").addClass("active");

        $(".j_tabs_nav:eq(1)").on("click", function(){

            if(condSlide == false)
            {
                $(".j_tabs_nav").removeClass("active");
                $(this).addClass("active");
                $(".j_tabs_item:eq(0)").fadeOut(function(){
                    $(".j_tabs_item:eq(1)").fadeIn();
                });
                condSlide = true;
            }           
        });

        $(".j_tabs_nav:eq(0)").on("click", function(){

            if(condSlide)
            {
                $(".j_tabs_nav").removeClass("active");
                $(this).addClass("active");
                $(".j_tabs_item:eq(1)").fadeOut(function(){
                    $(".j_tabs_item:eq(0)").fadeIn();
                });
                condSlide = false;
            }           
        });        
    }

    //J_GALLERY
    $(".j_gallery_item").on("click", function(){
        var item = $(this);
        var items = $(".j_gallery_item");
        var home = $(".j_gallery_home");

        items.removeClass("active");
        item.addClass("active");

        home.fadeTo(200, 0.1, function(){
            $(this).attr("src", item.find("img").attr("src"));
            $(this).fadeTo(200, 1);
        });
    });

    //J_ANCHOR
    $(".main_product_checkout_related div a").on("click", function(){
        $(".main_product_checkout_related div a").removeClass("active");
        $(this).addClass("active");
        return false;
    });

    $(".j_anchor").on("click", function(){
        var anchor = $($(this).attr("data-anchor"));
        $("html, body").animate({scrollTop: anchor.offset().top}, 1000);
    });
});