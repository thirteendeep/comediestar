$('document').ready(function(){
    /*********************************************
     * Click on a keyword in the list below
     *********************************************/
    $('body').on('click', '.keywords-module .list-placeholder .keyword', function(){
        var keyword = $(this);
        var container = keyword.parents('.keywords-module').find('.chosen-placeholder');
        
        if((!keyword.parents('.keywords-module').hasClass('is-search') && keyword.parent().find('.keyword.important').length == 1) ||
             (keyword.parents('.keywords-module').hasClass('is-search') && keyword.parent().find('.keyword[style="display: block;"]').length == 1)){
            keyword.parent().addClass('no-item');
            keyword.parent().removeAttr('style');
        }
        keyword.remove();
        keyword.append('<input type="hidden" name="keywords[]" value="' + keyword.attr('data-keyword-id') + '"/>')
        container.append(keyword);
        
        var nbLeft = 0;
        keyword.parents('.keywords-module').find('.list-category-container').each(function(){
            if(!$(this).hasClass('.no-item') && $(this).css('display') !== 'none'){
                nbLeft++;
            }
        });
        if(nbLeft === 0){
            keyword.parents('.keywords-module').find('.search-placeholder').find('input').val('');
            keyword.parents('.keywords-module').find('.search-placeholder').find('input').keyup();
        }
    });
    /*********************************************
     * Click on a X icon of a keyword in the 
     * chosen list above
     *********************************************/
    $('body').on('click', '.keywords-module .keyword .keyword-icon-x', function(){
        var keyword = $(this).parents('.keyword');
        var container = keyword.parents('.keywords-module').find('.list-placeholder').find('.'+keyword.attr('data-list-container'));
        
        container.removeClass('no-item');
        if(keyword.hasClass('important') && !keyword.parents('.keywords-module').hasClass('is-search')){
            container.css('display','block');
        }
        keyword.remove();
        keyword.find('input[type=hidden]').remove();
        container.append(keyword);
    });
    
    /*********************************************
     * Searching functions
     *********************************************/
    var categories = {};
    $('body').on('keyup', '.keywords-module .search-placeholder input', function(){
        var search = $(this).val();
        //If search is empty then the list is put to normal
        if(search === ''){
            var topParent = $(this).parents('.keywords-module');
            topParent.removeClass('is-search');
            topParent.find('.list-category-container').removeAttr('style');
            topParent.find('.keyword').removeAttr('style');
            topParent.find('.list-category-container').each(function(){
               if($(this).find('.keyword.important').length == 0){
                   $(this).css('display','none');
               }else{
                   $(this).css('display','block');
               }
            });
        }
        else{
            //The keywords that don't fit are hidden
            var topParent = $(this).parents('.keywords-module');
            topParent.addClass('is-search');
            topParent.find('.keywords-list').find('.keyword').each(function(){
                var name = $(this).attr('data-keyword-name');
                if(name.toUpperCase().indexOf(search.toUpperCase()) < 0){
                    $(this).css('display','none');
                }else{
                    $(this).css('display','block');
                    
                }
            });
            //The categories that don't have displayed children are also hidden
            topParent.find('.keywords-list').find('.list-category-container').each(function(){
                var nb = 0;
                $(this).find('.keyword').each(function(){
                   if($(this).css('display') === 'block'){
                       nb++;
                   } 
                });
                if(nb == 0){
                    $(this).css('display', 'none');
                }else{
                    $(this).css('display', 'block');
                }
            });
        }
    })
});