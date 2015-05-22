(function($) {
    $(window).load(function () {
        // retrieved this line of code from http://dimsemenov.com/plugins/magnific-popup/documentation.html#api
        $.magnificPopup.open({
         items: {
          src: '#overlay',
          type: 'inline'
      }
          // You may add options here, they're exactly the same as for $.fn.magnificPopup call
          // Note that some settings that rely on click event (like disableOn or midClick) will not work here
      }, 0);
    });
})(jQuery);


$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });



    $('#form-contact').submit(function(e) {
        var height = $(this).find(".form").height();
        $('#confirmation-form-contact').height(height-20);
        e.preventDefault();
        
        var form = $(this);
        
        if(form.parsley().isValid()) {
         var url = "/application/layouts/php/mail.php"; 

         $.ajax({
             type: "POST",
             url: url,
             data: form.serialize(), 
             success: function(data)
             {
                 if (data == "true") {
                    $('#form-contact .form').animate({opacity : 0}, function() {
                        $('#form-contact .form [type="text"], #form-contact .form textarea, #form-contact .form [type="email"]').each(function(index, element) {
                            $(element).val("");
                        });
                        $('#confirmation-form-contact').fadeIn();
                    });
                }
            }
        });

     }

     return false;



 });

    $('#back2form').click(function() {
        $('#confirmation-form-contact').fadeOut(250, function() {
         $('#form-contact .form').animate({opacity : 1}, 250);
     });
    })

    $('.barre_technique select').change(function() {
        var ville = $(this).val();
        if (ville != 0) {
            document.location.href = "/ville/" + ville;
        }
    });

    $('.bloc-comediestar.cta').click(function() {
        $(this).find("> a").trigger("click");
    })


    $('#ville-selector').click(function() {
        $(this).find(".villes").slideToggle();
        $(this).toggleClass("open");
    });

    $('.open-menu').click(function(e) {
        e.preventDefault();
        $('#mobile-nav .main-nav').fadeIn();
    });
    $('.close-menu').click(function(e) {
        e.preventDefault();
        $('#mobile-nav .main-nav').fadeOut();
    });

    $('.choose-ville > a').click(function(e) {
        e.preventDefault();
        $(this).toggleClass("open");
        $('.choose-ville ul').slideToggle();
    });

    $('#mc-form, #mc-form-overlay').submit(function(e) {
        e.preventDefault();
    });


    $('.villes a').click(function() {
        $(this).trigger("click");
    })
    function callbackFunction (resp) {
        console.log(resp.code);
        if (resp.result === 'success') {
            $('#mc-form').fadeOut(250, function() {
                $('.bandeau-infolettre .merci, .bandeau-fanclub .merci').html("L'inscription à notre liste d'envoie a été complétée avec succès.").fadeIn();
            });
        }
        if (resp.result === 'error') {
            console.log(resp);
            $('#mc-form').fadeOut(250, function() {
                $('.bandeau-infolettre .merci, .bandeau-fanclub .merci').html("Erreur! L'inscription à notre liste d'envoie n'a plus être complétée. Veuillez réessayer.").fadeIn();

                setTimeout(function() {
                    $('.bandeau-infolettre .merci, .bandeau-fanclub .merci').fadeOut(250, function() {
                        $('#mc-form').fadeIn();
                    });
                }, 4000);
            });

        }
    }

    $('#mc-form').ajaxChimp({
        url: '//comediestar.us6.list-manage.com/subscribe/post?u=ca0bb0d7a377d38cb3c3c5018&amp;id=caacce3de5',
        callback: callbackFunction
    });

    $('#mc-form-overlay').ajaxChimp({
        url: '//comediestar.us6.list-manage.com/subscribe/post?u=ca0bb0d7a377d38cb3c3c5018&amp;id=caacce3de5',
        callback: callbackFunction
    });

});