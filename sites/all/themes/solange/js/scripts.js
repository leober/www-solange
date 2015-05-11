jQuery(document).ready(function (){


    jQuery('.menu-front .link-online-store').live('click' , function(){

        var aTag = jQuery('#block-views-online-store-block');
        jQuery('html, body').animate({scrollTop: jQuery(aTag).offset().top}, 'slow');
        return false;
    });

    jQuery('.menu-front .link-special').live('click' , function(){
        var aTag = jQuery('#block-views-special-products-block');
        jQuery('html, body').animate({scrollTop: jQuery(aTag).offset().top}, 'slow');
        return false;
    });


    jQuery('.menu-front .link-artist').live('click' , function(){
        var aTag = jQuery('#seccion-la-artista-title');
        jQuery('html, body').animate({scrollTop: jQuery(aTag).offset().top}, 'slow');
        return false;
    });
	
	jQuery('.menu-front .link-news, .menu-front .link-localization').live('click' , function(){
        var aTag = jQuery('#news-zone');
        jQuery('html, body').animate({scrollTop: jQuery(aTag).offset().top}, 'slow');
        return false;
    });
	
	jQuery("#edit-submitted-name").attr('placeholder', Drupal.t("your name"));
	jQuery("#edit-submitted-email").attr('placeholder', Drupal.t("e-mail"));
	jQuery("#edit-submitted-message").attr('placeholder', Drupal.t("message"));
	
});