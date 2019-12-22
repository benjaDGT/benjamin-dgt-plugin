<?php
global $flex_idx_info;
global $dgtForms;
$idx_contact_email = isset($flex_idx_info['agent']['agent_contact_email_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_email_address']) : '';
$idx_contact_phone = isset($flex_idx_info['agent']['agent_contact_phone_number']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_phone_number']) : '';
?>

    <?php if( get_post_type() !== 'flex-idx-pages' ){ ?>
    <footer id="footer" class="ms-section ms-animate">
      <div class="ms-wrap-footer">
        <div class="ms-info-footer">
          <div class="ms-avatar">
            <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-avatar.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Lorem ipsum" class="ms-lazy">
          </div>
          <div class="ms-wrap-gt">
            <a href="#" class="ms-logo-footer"><img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png"></a>
            <a href="tel:<?php echo preg_replace('/[^\d+]/', '', $flex_idx_info['agent']['agent_contact_phone_number']); ?>" class="ms-link">Ph <?php echo $idx_contact_phone; ?></a>
            <a href="mailto:<?php echo $idx_contact_email; ?>" class="ms-link"><?php echo $idx_contact_email; ?></a>
            <address>1674 Meridian Ave., Ste 300<span>Miami Beach, FL 33139</span></address>
            <div class="ms-social">
              <?php if (!empty($flex_idx_info["social"]["facebook_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["facebook_social_url"]; ?>" title="Facebook" target="_blank" rel="nofollow" class="ms-link idx-icon-facebook"><span>Facebook</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["twitter_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["twitter_social_url"]; ?>" title="Twitter" target="_blank" rel="nofollow" class="ms-link idx-icon-twitter"><span>Twitter</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["gplus_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["gplus_social_url"]; ?>" title="Google+" target="_blank" rel="nofollow" class="ms-link idx-icon-google-plus"><span>Google+</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["youtube_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["youtube_social_url"]; ?>" title="Youtube" target="_blank" rel="nofollow" class="ms-link idx-icon-youtube-logo"><span>YouTube</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["instagram_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["instagram_social_url"]; ?>" title="Instagram" target="_blank" rel="nofollow" class="ms-link idx-icon-instagram"><span>Instagram</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["linkedin_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["linkedin_social_url"]; ?>" title="Linked In" target="_blank" rel="nofollow" class="ms-link idx-icon-linkedin2"><span>Linked In</span></a><?php endif; ?>
              <?php if (!empty($flex_idx_info["social"]["pinterest_social_url"])): ?>
              <a href="<?php echo $flex_idx_info["social"]["pinterest_social_url"]; ?>" title="Pinterest" target="_blank" rel="nofollow" class="ms-link idx-icon-pinterest-p"><span>Pinterest</span></a><?php endif; ?>
            </div>
          </div>
        </div>

        <nav class="ms-menu-footer">
          <div class="ms-item">
            <h3 class="ms-title accordion">Properties</h3>
            <ul class="ms-list panel">
              <li><a href="#" title="Excluisve Listings">Excluisve Listings</a>
              <li><a href="#" title="Property Search">Property Search</a>
              <li><a href="#" title="Neighborhoods">Neighborhoods</a>
              <li><a href="#" title="Condos">Condos</a>
              <li><a href="#" title="Waterfront Homes">Waterfront Homes</a>
              <li><a href="#" title="Penthouses">Penthouses</a>
            </ul>
          </div>

          <div class="ms-item">
            <h3 class="ms-title accordion">Team</h3>
            <ul class="ms-list panel">
              <li><a href="#" title="Meet Amanda Smith">Meet Amanda Smith</a>
              <li><a href="#" title="Our Team">Our Team</a>
              <li><a href="#" title="Sold Properties">Sold Properties</a>
            </ul>
          </div>

          <div class="ms-item">
            <h3 class="ms-title accordion">Team</h3>
            <ul class="ms-list panel">
              <li><a href="#" title="Meet Amanda Smith">Meet Julian Jhonston</a>
              <li><a href="#" title="Our Team">Our Team</a>
              <li><a href="#" title="Sold Properties">Sold Properties</a>
            </ul>
          </div>

          <div class="ms-item">
            <h3 class="ms-title accordion">Resources</h3>
            <ul class="ms-list panel">
              <li><a href="#" title="Listing With Us">Listing With Us</a>
              <li><a href="#" title="Our Blog">Our Blog</a>
              <li><a href="#" title="Buyers">Buyers</a>
              <li><a href="#" title="Contact Us">Contact Us</a>
            </ul>
          </div>
        </nav>

        <div class="ms-wrap-mls">
          <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-mls.png" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" class="ms-img">
          <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/home/ms-mls-a.png" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" class="ms-img ms-img-a">
        </div>

        <div class="ms-bottom-footer">
          <div class="ms-footer-section">
            <ul class="ms-sub-menu-footer">
              <li><a href="#" title="Privacy">Privacy</a></li>
              <li><a href="#" title="Terms of Service">Terms and Conditions</a></li>
              <li><a href="/accesibility/" title="Accesibility">Accesibility</a></li>
            </ul>
            <span class="ms-copyright">© <?php echo date('Y'); ?> <?php echo bloginfo(); ?>. All rights reserved</span>
            <div class="ms-trem">
              Design + Powered by <a href="http://www.tremgroup.com/" target="_blank"><span>TREM</span>GROUP</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php } ?>
    

    <!--
    <div class="modal_form_contact">
      <div class="inner_modal">
        <button type="button" class="close_modal"><span>X</span></button>
        <div class="head_modal">
          <h2 class="title_m">Title Modal</h2>
        </div>
        <?php echo do_shortcode('[flex_idx_contact_form id_form="form_contact_property"]'); ?>
      </div>
    </div>
    
    <div class="ms-wrap-configuration ms-wrap-tab">
      
      <div class="ms-tab-btn">
        <button data-id="ms-tab-home" class="ms-tab active">Home</button>
        <button data-id="ms-tab-color" class="ms-tab">Colors</button>
        <button data-id="ms-tab-fonts" class="ms-tab">Fonts</button>
      </div>
      
      <div class="ms-wrap-panel">
        <ul class="ms-panel-tab fade active in" id="ms-tab-home">
          <li>
            <h3 class="ms-title">Header</h3>
            <button class="ms-act-opt active" data-class="ms-bottom-shadow" data-id="#header"><span>Active shadow</span></button>
            <div class="ms-wrap-option" data-id=".home">
              <button class="ms-item active" data-format="default">
                <span>Default</span>
              </button>
              <button class="ms-item" data-format="ms-header-transparent">
                <span>Format 1</span>
              </button>
            </div>
          </li>

          <li>
            <h3 class="ms-title">Center CTA</h3>
            <button class="ms-act-opt" data-class="ms-bordered" data-id="#welcome"><span>Active border</span></button>
            <div class="ms-wrap-option" data-id="#welcome">
              <button class="ms-item active" data-format="default">
                <span>Default</span>
              </button>
              <button class="ms-item" data-format="ms-a-format">
                <span>Format 1</span>
              </button>
              <button class="ms-item" data-format="ms-b-format">
                <span>Format 2</span>
              </button>
              <button class="ms-item" data-format="ms-c-format">
                <span>Format 3</span>
              </button>
            </div>
          </li>

          <li>
            <h3 class="ms-title">About</h3>
            <div class="ms-wrap-option" data-id="#about">
              <button class="ms-item active" data-format="default">
                <span>Default</span>
              </button>
              <button class="ms-item" data-format="ms-a-format">
                <span>Format 1</span>
              </button>
              <button class="ms-item" data-format="ms-b-format">
                <span>Format 2</span>
              </button>
            </div>
          </li>

          <li>
            <h3 class="ms-title">Areas/Condos</h3>
            <div class="ms-wrap-option">
              <button class="ms-item-a active" data-id="#ms-ng-a">
                <span>Default</span>
              </button>
              <button class="ms-item-a" data-id="#ms-ng-b">
                <span>Format 1</span>
              </button>
              <button class="ms-item-a" data-id="#ms-ng-c">
                <span>Format 2</span>
              </button>
              <button class="ms-item-a" data-id="#condo-areas">
                <span>Format 3</span>
              </button>
            </div>
          </li>

          <li>
            <h3 class="ms-title">Footer</h3>
            <div class="ms-wrap-option" data-id="#footer">
              <button class="ms-item active" data-format="default">
                <span>Default</span>
              </button>
              <button class="ms-item" data-format="ms-a-format">
                <span>Format 1</span>
              </button>
            </div>

          </li>
        </ul>

        <ul class="ms-panel-tab fade" id="ms-tab-color">
          <li>
            <h3 class="ms-title">Select color</h3>
            <div class="ms-wrap-option">
              <div class="ms-item-full">
                <span>Primary color</span>
                <input class="jscolor {value:'E41F1F',position:'bottom'}" id="ms-pri-color">
              </div>
              <div class="ms-item-full">
                <span>Button color (Hover)</span>
                <input class="jscolor {value:'223645',position:'bottom'}" id="ms-btn-hover">              
              </div>
            </div>
          </li>
        </ul>

        <ul class="ms-panel-tab fade" id="ms-tab-fonts">
          <li>
            <h3 class="ms-title">Font style</h3>
            <ul class="ms-wrap-option ms-list-language">
              <li class="ms-text-open">
                <input type="radio" name="font" id="ms-open" class="ms-icheck" value="'Open Sans', sans-serif">
                <label for="ms-open">Open Sans</label>
              </li>
              <li class="ms-text-didot">
                <input type="radio" name="font" id="ms-didot" class="ms-icheck" value="'DidotLTStd-Headline'">
                <label for="ms-didot">Didot</label>
              </li>
              <li class="ms-text-didot-italic">
                <input type="radio" name="font" id="ms-didot-italic" class="ms-icheck" value="'Didot LT Std Italic'">
                <label for="ms-didot-italic">Didot Italic</label>
              </li>
              <li class="ms-text-oswald">
                <input type="radio" name="font" id="ms-oswald" class="ms-icheck" value="'Oswald', sans-serif">
                <label for="ms-oswald">Oswald</label>
              </li>
              <li class="ms-text-montserrat">
                <input type="radio" name="font" id="ms-montserrat" class="ms-icheck" value="'Montserrat', sans-serif">
                <label for="ms-montserrat">Montserrat</label>
              </li>
              <li class="ms-text-roboto">
                <input type="radio" name="font" id="ms-roboto" class="ms-icheck" value="'Roboto Condensed', sans-serif">
                <label for="ms-roboto">Roboto</label>
              </li>
              <li class="ms-text-biorhyme">
                <input type="radio" name="font" id="ms-biorhyme" class="ms-icheck" value="'BioRhyme', serif;">
                <label for="ms-biorhyme">BioRhyme</label>
              </li>
              <li>
                <ul class="ms-sub-list">
                  <li><button data-weight="bold" class="ms-btn-weight active">Bold</button></li>
                  <li><button data-weight="300" class="ms-btn-weight">Ligth</button></li>
                  <li><button data-weight="normal" class="ms-btn-weight">Regular</button></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <button class="ms-config">
        <span></span>
      </button>
    </div>
    -->

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dgt/dgt-project-master.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jscolor.js"></script>

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/webfont.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/project.min.js"></script>
    <script>

      /* Custom dropdown */
      jQuery('.custom-dropdown li').on('click', function() {
        let dropdownItemValue =	jQuery(this).data('value');
        let dropdownButton = jQuery(this).parent().prev();
        let dropdownItemText = jQuery(this).text();
        
        dropdownButton.html(dropdownItemText);

        $('.title_m').text(dropdownItemText);
        $(".modal_form_contact .form-search input[name='ib_tags']").val(dropdownItemText);
        var comment = dropdownItemText + ", "+$(".title-page").data("title");
        $(".modal_form_contact .form-search li:nth-child(5) span").text("Commentaires *");
        $(".modal_form_contact .form-search .pt-phone span").text("Téléphone *");

        $(".modal_form_contact .form-search textarea").val(comment);
        $(".modal_form_contact .form-search textarea").attr("required", true);
        $(".modal_form_contact .form-search .pt-phone input").attr("required", true);

        if(dropdownItemValue == "modal") {
          $("body").addClass("active_modal");
        } else {
          var v = dropdownItemValue;
          if ($("#"+v).length) {
            var down = $("#"+v).offset().top,body = $("html, body");
            body.stop().animate({scrollTop:down}, 500);
          }

          setTimeout(function(){$("body").addClass("active_modal");}, 700);
        }
      });

      jQuery('.custom-dropdown-toggle').on('click', function(e) {
        e.stopPropagation();
        jQuery(this).toggleClass('arrow-active');
        jQuery(this).next().toggleClass('show');
      })

      jQuery(document).on('click', function() {
        jQuery('.custom-dropdown-toggle').removeClass('arrow-active');
        jQuery('.custom-dropdown-toggle').next().removeClass('show');
      })

      jQuery(document).on('click','.close_modal',function(){
          $("body").toggleClass("active_modal");
      });
      jQuery(document).on("change",".cta-option",function(){
          $('.title_m').text($(".cta-option option:selected").text());
          $(".modal_form_contact .form-search input[name='ib_tags']").val($(".cta-option option:selected").text());
          var comment=$(".cta-option option:selected").text() + ", "+$(".title-page").data("title");
          $(".modal_form_contact .form-search li:nth-child(5) span").text("Commentaires *");
          $(".modal_form_contact .form-search .pt-phone span").text("Téléphone *");

          $(".modal_form_contact .form-search textarea").val(comment);
          $(".modal_form_contact .form-search textarea").attr("required", true);
          $(".modal_form_contact .form-search .pt-phone input").attr("required", true);
        if($(this).val() =="modal"){

          $("body").addClass("active_modal");
        }else{
          var v=$(".cta-option option:selected").val();
          if($("#"+v).length){
            var down=$("#"+v).offset().top,body = $("html, body");
            body.stop().animate({scrollTop:down}, 500);
          }
            setTimeout(function(){$("body").addClass("active_modal");}, 700);
        }
      });

      jQuery(document).on('click', '.ms-tab', function(e) {
        e.preventDefault();

        var $panelTab = jQuery(this).attr("data-id");
        jQuery(this).parents(".ms-wrap-tab").find(".ms-tab").removeClass("active");
        jQuery(this).addClass("active");

        if (!jQuery("#"+$panelTab).hasClass("active")) {
          jQuery(this).parents(".ms-wrap-tab").find(".ms-panel-tab").removeClass("active in");
          jQuery("#"+$panelTab).addClass("active");
          setTimeout(function(){ 
            jQuery("#"+$panelTab).addClass("in");
          }, 300);
        }
      });
      jQuery(document).on('click', '.sweet-alert button.confirm', function(e) {

        $("body").removeClass("active_modal");
      });

      //CONFIGURACIONES
      jQuery(document).on('click', '.ms-config', function() {
        jQuery(this).parent().toggleClass('active');
      });

      jQuery(document).on('click', '.ms-wrap-configuration .ms-item', function() {

        /*Recuperando datos*/
        var $classFormat = $(this).attr('data-format');
        var $elementSelected = $(this).parent().attr('data-id');

        /*Activando el elemento seleccionado*/
        $(this).parent().find('.ms-item').removeClass('active');
        $(this).addClass('active');

        /*Reasignando las cases de formato*/
        $(this).parent().find('.ms-item').each(function () {
          var $classRemove = $(this).attr('data-format');
          $($elementSelected).removeClass($classRemove);
        });

        $($elementSelected).addClass($classFormat);

        loadHeaderColor(".ms-header-transparent");
      });

      jQuery(document).on('click', '.ms-wrap-configuration .ms-item-a', function() {
        $(this).parent().find('.ms-item-a').removeClass('active');
        $(this).addClass('active');
        $(".ms-wrap-ng-cd").removeClass('active');
        $($(this).attr('data-id')).addClass('active');
      });

      jQuery(document).on('click', '.ms-wrap-configuration .ms-act-opt', function() {

        var $classActive = $(this).attr('data-class');
        var $elementSelected = $(this).attr('data-id');

        if ($($elementSelected).hasClass($classActive)) {
          $($elementSelected).removeClass($classActive);
          $(this).removeClass('active');
        }else{
          $($elementSelected).addClass($classActive);
          $(this).addClass('active');
        }
      });

      //COLOR PRIMARIO
      jQuery(".jscolor").change(function () {
        var valueColor = "#"+$(this).val();
        var elementChange = $(this).attr('id');
        switch (elementChange) {
          case 'ms-pri-color':

            $("head").append('<style>#header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-search, #header .ms-wrap-header .ms-middle-header .ms-item .wrap-menu #menu-main>ul>li .sub-menu li a:hover, #header .ms-wrap-header .ms-middle-header .ms-item .wrap-menu #menu-main>ul>li:hover>a, #header .ms-wrap-header .ms-top-header .ms-contact-info .ms-btn-email:hover, #header .ms-wrap-header .ms-top-header .ms-contact-info .ms-btn-phone:hover, #header .ms-wrap-header .ms-top-header .ms-login-access .item-lo-hea .login .ms-btn-login:hover, #header .ms-wrap-header .ms-top-header .ms-login-access .item-lo-hea .register .ms-btn-login:hover, #header .ms-wrap-header .ms-top-header .ms-login-access .item-no-hea .login .ms-btn-login:hover, #header .ms-wrap-header .ms-top-header .ms-login-access .item-no-hea .register .ms-btn-login:hover, #header .ms-menu-responsive .menu-more-options li a:hover, #header #available-languages:hover, #welcome #flex-bubble-search #clidxboost-btn-search:after, #footer .ms-wrap-footer .ms-info-footer .ms-link:hover, #footer .ms-wrap-footer .ms-info-footer address:hover, #footer .ms-wrap-footer .ms-info-footer .ms-link:hover, #footer .ms-wrap-footer .ms-info-footer address:hover, #footer .ms-menu-footer .ms-list li:hover, #footer .ms-bottom-footer .ms-sub-menu-footer li:hover{ color:'+valueColor+' !important} #header .ms-wrap-header .ms-middle-header .ms-item .wrap-menu #menu-main>ul>li:after, #header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-menu span{ background-color: '+valueColor+' !important} .ms-btn, #featured-properties .ms-btn, #about .ms-btn {background-color: '+valueColor+'; border-color: '+valueColor+'} @media screen and (min-width: 991px){ #about.ms-a-format article .ms-btn:hover { background-color: '+valueColor+' !important; border-color: '+valueColor+' !important;}} #about.ms-b-format article .ms-btn:hover, #welcome .ms-wrap-btn .ms-btn:hover{background-color: '+valueColor+' !important; border-color: '+valueColor+'!important} #condo-areas .ms-wrap-btn .ms-btn:hover{ background-color: '+valueColor+'; border-color: '+valueColor+' !important;} .ms-btn-scroll-up{ background-color: '+valueColor+'; } .ms-btn-scroll-up:before{ background-color: '+valueColor+';} .headerColor #header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-search, .headerColor #header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-search{color: '+valueColor+'!important} .headerColor #header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-menu span, .headerColor #header .ms-wrap-header .ms-middle-header .ms-item .ms-btn-menu span{background-color: '+valueColor+' !important;} #header .ms-wrap-header .ms-top-header .ms-login-access .item-lo-hea .show_modal_login_active>a:hover, #header .ms-wrap-header .ms-top-header .ms-login-access .item-no-hea .show_modal_login_active>a:hover{color: '+valueColor+'!important} #condo-areas .ms-wrap-slider .ms-item:focus .ms-item-title, #condo-areas .ms-wrap-slider .ms-item:hover .ms-item-title {color: '+valueColor+'!important} #condo-areas .ms-wrap-btn .ms-btn:focus, #condo-areas .ms-wrap-btn .ms-btn:hover {background-color: '+valueColor+'!important; border-color: '+valueColor+'!important;}</style>');

            break;

          case 'ms-btn-hover':

            $("head").append('<style>.ms-btn:hover{background-color: '+valueColor+' !important; border-color: '+valueColor+'!important}</style>');
            break;
        }
      });

      jQuery(".ms-list-language .ms-icheck").on( "click", function() {
        var fontSelected = jQuery(".ms-icheck:checked").val();
        $("head").append('<style>#welcome .ms-title, #featured-properties .ms-title,#about article .ms-title,#condo-areas .ms-title, .vc-title-ng {font-family:'+fontSelected+'}');
      });

      jQuery(".ms-btn-weight").on( "click", function() {
        jQuery(".ms-btn-weight").removeClass('active');
        jQuery(this).addClass('active');
        var weightSelected = jQuery(this).attr('data-weight');
        $("head").append('<style>#welcome .ms-title, #featured-properties .ms-title,#about article .ms-title,#condo-areas .ms-title, .vc-title-ng {font-weight:'+weightSelected+'}');
      });

      function loadHeaderColor(element){
        var headerTransparent = jQuery(element);
        if(headerTransparent.length){
          if(jQuery("body").hasClass("ms-header-transparent")){
            var headerHeight = jQuery("#header").outerHeight();
            jQuery(window).scroll(function() {
              if (jQuery(window).scrollTop() > headerHeight) {
                headerTransparent.addClass('headerColor');
              } else {
                headerTransparent.removeClass('headerColor');
              }
            });
          }
        }
      }

    </script>
  </body>
</html>
