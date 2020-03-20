<?php
  global $flex_idx_info, $flex_idx_lead;
  $custom_fields = get_post_custom(get_the_id());
  $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
  $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- GTM scripts inside head -->
    <?php do_action('idx_gtm_head'); ?>
    <title><?php wp_title('|', 1, 'right');?> <?php bloginfo('name');?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="<?php echo isset($dws_meta_key_da) ? $dws_meta_key_da : ''; ?>" />
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- APP HEADER COLOR -->
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="theme-color" content="">
    <meta name="msapplication-navbutton-color" content="">
    <style type="text/css">.mobile_menu_div_100 { width: 100%; } </style>
    <?php wp_head();?>
  </head>
  <?php $listclass = ""; $bodyclasses = get_body_class(); foreach ($bodyclasses as $class){$listclass = $listclass." ".$class;} ?>
  
  <body class="<?php echo $listclass; ?> ib-wrap-full-width">
    <!-- GTM scripts inside body -->
 <?php 
      do_action('idx_gtm_body'); 
   ?>
    <header id="header" class="ms-header ms-bottom-shadow">
      <div class="ms-wrap-header">
        <div class="ms-top-header">
          <!-- INICIO REDES SOCIALES -->
          <div class="ms-item ms-wp-social">
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
          <!-- FINAL REDES SOCIALES -->
          
          <!-- INICIO IDIOMAS -->
          <div class="ms-item ms-wp-languages">
            <?php if (!empty(get_theme_mod('idx_languages_list'))){ ?>
            <div class="available-languages-content notranslate">
              <a href="javascript:void(0)" id="available-languages" rel="nofollow">
                <span class="languages-text notranslate">EN</span>
                <span class="flag-english" id="languages-map"></span>
              </a>
              <div class="languages-list">
              <?php } ?>
                <?php if (empty( get_theme_mod( 'idx_languages_list' ) ))  $idx_languages_list  = []; else  $idx_languages_list  = get_theme_mod( 'idx_languages_list' );
                foreach ($idx_languages_list as $key => $value) {
                if ($key === 'English' && $value== 1 ) { ?>
                <a href="javascript:void(0)" data-iso="us" class="active english flag-english item-languages notranslate" id="tr-en" rel="nofollow"><span>EN</span></a>
                <?php }elseif ( $key === 'Russian' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="ru" class="flag-russian item-languages notranslate" id="tr-ru" rel="nofollow"><span>RU</span></a>
                <?php  }elseif ( $key === 'Spanish' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="es" class="flag-spanish item-languages notranslate" id="tr-es" rel="nofollow"><span>ES</span></a>
                <?php  }elseif ( $key === 'Portuguese' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="pt" class="flag-portuguese item-languages notranslate" id="tr-pt" rel="nofollow"><span>BR</span></a>
                <?php  }elseif ( $key === 'French' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="fr" class="flag-french item-languages notranslate" id="tr-fr" rel="nofollow"><span>FR</span></a>
                <?php  }elseif ( $key === 'Italian' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="it" class="flag-italy item-languages notranslate" id="tr-it" rel="nofollow"><span>IT</span></a>
                <?php  }elseif ( $key === 'German' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="de" class="flag-german item-languages notranslate" id="tr-de" rel="nofollow"><span>DE</span></a>
                <?php  }elseif ( $key === 'Chinese' && $value== 1  ) { ?>
                <a href="javascript:void(0)" data-iso="zh-TW" class="flag-chinese item-languages notranslate" id="zh-TW" rel="nofollow"><span>ZH</span></a>
                <?php  }} ?>            
                <?php if (!empty(get_theme_mod( 'idx_languages_list' ))) { ?> 
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- FINAL IDIOMAS -->
          
          <!-- INICIO LOGIN Y REGISTER -->
          <div class="ms-item ms-wp-login">
            <div class="ms-login-access">
              <?php if (false === $flex_idx_lead): ?>
              <ul class="item-no-hea item-header" id="user-options">
                <li class="login" data-modal="modal_login" data-tab="tabLogin">
                  <a href="javascript:void(0)" class="lg-login ms-btn-login" rel="nofollow">
                    <span class="ms-icon-login"></span>
                    <span class="ms-text"><?php echo __('Login', IDXBOOST_DOMAIN_THEME_LANG); ?></span>
                  </a>
                </li>
                <li class="register" data-modal="modal_login" data-tab="tabRegister">
                  <a href="javascript:void(0)" class="lg-register ms-btn-login ms-register" rel="nofollow">
                    <span class="ms-text"><?php echo __('Register', IDXBOOST_DOMAIN_THEME_LANG); ?></span>
                  </a>
                </li>
              </ul>
              <?php else: $my_flex_pages = flex_user_list_pages(); ?>
              <ul class="item-lo-hea item-header" id="user-options">
                <?php $lead_name_exp = explode(' ', esc_attr($flex_idx_lead['lead_info']['first_name']));?>
                <li class="login show_modal_login_active">
                  <a href="javascript:void(0)" rel="nofollow"><?php echo $lead_name_exp[0]; ?></a>
                  <div class="menu_login_active disable_login">
                  <?php if (!empty($my_flex_pages)): ?>
                  <ul>
                    <?php foreach ($my_flex_pages as $my_flex_page): ?>
                    <li><a href="<?php echo $my_flex_page['permalink']; ?>"><?php echo $my_flex_page['post_title']; ?></a></li>
                    <?php endforeach; ?>
                    <li><a href="#" class="flex-logout-link" id="flex-logout-link">Logout</a></li>
                  </ul>
                  <?php endif; ?>
                  </div>
                </li>
              </ul>
              <?php endif; ?>
            </div>
          </div>
          <!-- FINAL LOGIN Y REGISTER -->
          
          <!-- INICIO CONTACTO -->
          <div class="ms-item ms-wp-contact">
            <div class="ms-contact-info">
              <a href="#" class="ms-btn-phone"><span><span>Call </span>(305) 705 5000</span></a>
              <a href="#" class="ms-btn-email"><span>Email</span></a>
            </div>
          </div>
          <!-- FINAL CONTACTO -->
        </div>

        <div class="ms-middle-header">
          <!-- INICIO LOGO -->
          <?php idx_the_custom_logo_header_boots(); ?>
          <!-- FINAL LOGO -->
          
          <div class="ms-item">
            <!-- INICIO MENU -->
            <div class="wrap-menu">
              <?php wp_nav_menu(array('theme_location' => 'primary','menu' => 'Primary Menu', 'menu_class' => '', 'menu_id' => '', 'container' => 'nav', 'container_class' => '', 'container_id' => 'menu-main')); ?>
            </div>
            <!-- FINAL MENU -->
            
            <!-- INICIO BOTON SEARCH -->
            <button class="ms-btn-search">
              <span></span>
            </button>
            <!-- FINAL BOTON SEARCH -->
            
            <!-- INICIO BOTON MENU -->
            <button class="ms-btn-menu" id="show-mobile-menu">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <!-- FINAL BOTON MENU -->

            <?php //echo do_shortcode('[idxboost_lead_activities]'); ?>

            <!--demo-->
            <div class="ms-profile-menu active">
              <div class="ms-header-profile">
                <div class="ms-btn-profile">
                  <span class="ib-lead-first-letter-name">JG</span>
                </div>
                <div class="ms-wrap-name">
                  <h4 class="ms-title ib-lead-fullname">Jose Benjamin García Erazo</h4>
                  <span class="ms-sub-title"><a href="https://testlgv2.staging.wpengine.com/my-profile">Profile</a></span>
                </div>
                <button class="ms-btn-back">Back <span></span></button>
              </div>
              <div class="ms-header-agent">
                <div class="ms-wrap-detail">
                  <div class="ms-wrap-img ib-agent-photo-thumbnail-wrapper">
                    <img src="https://idxboost.s3.amazonaws.com/agent_profiles/1b976360717d.087dfe3f2e4e.jpg">
                  </div>
                  <div class="ms-info-agent">
                    <h3 class="ms-title ib-lead-firstname">Hello Jose Benjamin!</h3>
                    <p>Call or email if you need immediate assistance. Thanks!</p>
                    <h4 class="ms-sub-title ib-agent-fullname">Francisco Aguirre</h4>
                    <div class="ms-wrap-action">
                      <a href="tel:8885338736" class="ms-phone ib-agent-phonenumber">(888) 533-8736</a>
                      <a href="mailto:info@tremgroup.com" class="ms-email ib-agent-emailaddress">Email</a>
                    </div>
                  </div>
                </div>
                <button class="ms-btn-show">
                  <span class="ms-arrow ib-lead-firstname">Hello Jose Benjamin!</span>
                </button>
                <button class="ms-btn-hidden">
                  <span class="ms-close">Close</span>
                </button>
              </div>
              <div class="ms-body-profile ms-wrap-tab">
                <div class="ms-profile-list">

                  <div class="ms-header-tab" id="_ib_lead_activity_tab">
                    <button class="ms-tab ms-tab-wall active" data-tab="wall"><span>My Wall</span></button>
                    <button class="ms-tab ms-tab-history" data-tab="history"><span>History</span></button>
                    <button class="ms-tab ms-tab-searches" data-tab="searches"><span>Saved Searches</span></button>
                  </div>

                  <div class="ms-body-walls" id="ms-body-walls">
                    <div class="ms-header-walls">
                      <h3 class="ms-wall-title">My Wall</h3>
                    </div>
                    <div class="ms-body-tab">
                      <div class="ms-wrap-items" id="_ib_lead_activity_walls">
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like active">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <p><strong>Agent Note:</strong> Mr. Poveda, this property seems to match your requierments very closely. Let me know what you think.</p>
                          <div class="ms-separate"><span class="ms-label-title">Recommended by Melissa</span></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <p><strong>Agent Note:</strong> Mr. Poveda, this property seems to match your requierments very closely. Let me know what you think.</p>
                          <div class="ms-separate"><span class="ms-label-title">Recommended by Melissa</span></div>
                        </div>
                        <div class="ms-item ms-item-wall ms-not-sure">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts active">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <p><strong>Agent Note:</strong> Mr. Poveda, this property seems to match your requierments very closely. Let me know what you think.</p>
                          <div class="ms-separate"><span class="ms-label-title">Recommended by Melissa</span></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <p><strong>Agent Note:</strong> Mr. Poveda, this property seems to match your requierments very closely. Let me know what you think.</p>
                          <div class="ms-separate"><span class="ms-label-title">Recommended by Melissa</span></div>
                        </div>
                        <div class="ms-item ms-item-wall">
                          <div class="ms-wrap-item">
                            <a href="#" class="ms-wrap-img">
                              <img src="https://retsimages.s3.amazonaws.com/49/A10784049_1.jpg">
                            </a>
                            <div class="ms-property-detail">
                              <h3 class="ms-title"><a href="#">2260 E Hallandale Beach</a></h3>
                              <h4 class="ms-address">Hallandale, FL 33009</h4>
                              <h5 class="ms-price">$305,000</h5>
                              <div class="ms-details">
                                <span>3 Beds</span>
                                <span>2.5 Baths</span>
                                <span>2500 SqFt</span>
                              </div>
                              <span class="ms-label">Saved on 19/12/19</span>
                              <div class="ms-wrap-btn">
                                <button class="ms-btn ms-like">I like it!</button>
                                <button class="ms-btn ms-nts">Not sure</button>
                                <button class="ms-btn ms-disc">Discard</button>
                              </div>
                            </div>
                          </div>
                          <div class="ms-separate"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="ms-body-tab" id="ms-body-others">
                    <div class="ms-wrap-items" id="_ib_lead_activity_rows"></div>
                  </div>

                  <div class="ms-footer-tab">
                    <div class="ib-cpagination">
                      <nav class="ib-wpagination ib-pagination-ctrl2" id="_ib_lead_activity_pagination"></nav>
                    </div>
                    <div class="ms-log">
                      <a href="#" class="flex-logout-link">Logout</a>
                    </div>
                  </div>
                </div>
              </div>       
            </div>
            <!--demo-->
          </div>
        </div>
      </div>
      
      <!-- MENU MOBILE -->
      <div class="wrap-menu">
        <div class="ms-menu-responsive">
          <nav>
            <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu' => 'Primary Menu',
            'menu_class' => 'menu-more-options',
            'menu_id' => 'menu-main-resposnive',
            'container_class' => 'mobile_menu_div_100'
            ));?>
          </nav>
        </div>
      </div>
      <!-- MENU MOBILE -->
      <div class="ms-overlay r-overlay"></div>
    </header>