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

                 }
             }
         });

     }

     return false;



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

    $('#mc-form').submit(function(e) {
        e.preventDefault();

        $('#mc-form').ajaxChimp({
            url: '//comediestar.us6.list-manage.com/subscribe/post?u=ca0bb0d7a377d38cb3c3c5018&amp;id=caacce3de5',
            callback: callbackFunction
        });
    })
    function callbackFunction (resp) {
        console.log(resp);
        if (resp.result === 'success') {
            $('#mc-form').fadeOut();
            $('.bandeau-infolettre .merci').fadeIn();
        }
    }


});