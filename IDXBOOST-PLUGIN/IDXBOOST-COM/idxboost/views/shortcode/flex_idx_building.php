<?php
  global $flex_idx_info, $post, $flex_social_networks, $wp;
  
  $wp_request = $wp->request;
  $wp_request_exp = explode('/', $wp_request);
  
  $building_slug = implode('/', array($wp_request_exp[0], $wp_request_exp[1]));
  
  $site_title = get_bloginfo('name');
  
  $building_permalink = get_permalink($post->ID);
  
  $amenities_build =json_decode($response['payload']['amenities_building'],true);
  
  $building_addresses = unserialize($response['payload']['address_building']);
  
  $type_building = $response['payload']['type_building'];
  
  if (!empty($building_addresses)) {
    list($building_default_address) = $building_addresses;
  } else {
    $building_default_address = '';
  }
  
  $twitter_share_url_params = http_build_query(array(
      'text' => $post->post_title . ' - ' . $building_default_address,
      'url'  => $building_permalink,
  ));
  
  $twitter_share_url = 'https://twitter.com/intent/tweet?' . $twitter_share_url_params;
  
  $agent_info_name = $flex_idx_info['agent']['agent_first_name'];
  $agent_last_name = $flex_idx_info['agent']['agent_last_name'];
  $agent_info_phone = $flex_idx_info['agent']['agent_contact_phone_number'];
  
  $logo_broker='';
  
  if (array_key_exists('logo_broker', $response))  $logo_broker=$response['logo_broker'];

  if (array_key_exists('payload', $response)) { 
    if (array_key_exists('property_display_sold', $response['payload'])) { 
      $property_display_sold=$response['payload']['property_display_sold'];
      if ($property_display_sold=='list') 
      $response['payload']['modo_view']=2;  
      else
      $response['payload']['modo_view']=1;
    }
  }

  if (array_key_exists('payload', $response)) { 
    if (array_key_exists('property_display_sold', $response['payload'])) { 
        $property_display_sold=$response['payload']['property_display_sold'];
        if (@count($response['payload']['properties']['sale']['items']) <= 0 || @count($response['payload']['properties']['rent']['items']) <= 0) { 
          if ($property_display_sold=='list') 
            $response['payload']['modo_view']=2;  
          else
            $response['payload']['modo_view']=1;
        }
    }
  }

  if (array_key_exists('payload', $response)) { 
    if (array_key_exists('property_display_active', $response['payload'])) { 
        $property_display_active=$response['payload']['property_display_active'];
          if ($property_display_active=='list') 
            $response['payload']['modo_view']=2;  
          else
            $response['payload']['modo_view']=1;
    }
  }  
  
  ?>

<?php if ($response['success']=== false ): ?>
<div class="gwr" style="margin: 20px 0">
  <div class="message-alert idx_color_primary flex-not-logged-in-msg" id="box_flex_alerts_msg">
    <p><?php echo __("The building you requested is not available.", IDXBOOST_DOMAIN_THEME_LANG); ?></p>
  </div>
</div>
<?php else: ?>
<?php
  $idx_social_mediamaps  = '';
  if (!empty( $flex_idx_info["agent"]["google_maps_api_key"] ))
      $idx_social_mediamaps  = $flex_idx_info["agent"]["google_maps_api_key"];
  
  if ((empty($response['payload']['lat_building'])) && (empty($response['payload']['lng_building']))){
    $chlatlong = curl_init();
    curl_setopt($chlatlong, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($building_default_address).'&key='.$idx_social_mediamaps);
    curl_setopt($chlatlong, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chlatlong, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($chlatlong, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($chlatlong, CURLOPT_VERBOSE, true);
    $outputlatlong = curl_exec($chlatlong);
    curl_close($chlatlong);
  
    $outtemporali=json_decode($outputlatlong,true);
    if ($outtemporali['status']=='OK') {
       foreach ($outtemporali['results'] as $keygeom => $valuegeome) {
         $latAlternative=$valuegeome['geometry']['location']['lat'];
         $lngAlternative=$valuegeome['geometry']['location']['lng'];
       }
    }
  }
?>
<main class="property-details theme-3">
  <div id="full-main">
    <section class="title-conteiner gwr animated fixed-box">
      <div class="content-fixed simple-btn">
        <div class="content-fixed-title">
          <h1 class="title-page" data-title="<?php echo $response['payload']['name_building']; ?>"><?php echo $response['payload']['name_building']; ?><span><?php echo $building_default_address; ?></span></h1>
          <input type="hidden" class="idx_name_building" value="<?php echo $response['payload']['name_building']; ?>">
          <div class="breadcrumb-options">
            <a href="javascript:void(0)" class="btn-request active-bl-form">
              <?php echo __("Request a Tour", IDXBOOST_DOMAIN_THEME_LANG); ?>
            </a>
            <!--<script type="text/javascript">
              jQuery("#form-request-a").on( "click", function() {
                jQuery(".aside .flex_idx_building_form .gfield:nth-child(1) input").focus();
              });
            </script>-->
          </div>
        </div>
        <ul class="content-fixed-btn">
          <li>
            <!--
            <button class="clidxboost-icon-envelope show-modal" data-modal="modal_email_to_friend">
            <span><?php echo __('Email to a friend', IDXBOOST_DOMAIN_THEME_LANG); ?></span>
            </button>-->
            <button class="btn-request active-bl-form"><?php echo __("Request a Tour", IDXBOOST_DOMAIN_THEME_LANG); ?></button>
            <!--<script type="text/javascript">
              jQuery("#form-request").on( "click", function() {
                jQuery(".form-content.large-form .medium:eq(0)").focus();
              });
            </script>-->
          </li>
        </ul>
      </div>
    </section>
    <div class="header-print">
      <img src="<?php echo $logo_broker; ?>" title="idxboost">
      <ul>
        <li><?php echo __('Call me', IDXBOOST_DOMAIN_THEME_LANG); ?>: <?php echo flex_phone_number_filter($flex_idx_info['agent']['agent_contact_phone_number']); ?></li>
        <li><?php echo $flex_idx_info['agent']['agent_contact_email_address'] ?></li>
      </ul>
    </div>
    <div id="imagen-print"></div>

    <div class="ms-main-content ms-animate" id="welcome-idx">
      <h2 class="ms-title">Aston Martin Residences</h2>
      <p>A luxury car made into a skyscrapper. Aston Martin condos for sale in Miami, FL</p>
      <button class="ms-btn active-bl-form" id="active-bl-form">Request more details</button>
      <button class="ms-play vd-play" data-video="https://24e3d2766e918fc4369a-2005f80a01533296a927e19ca48f1dcf.ssl.cf1.rackcdn.com/idxboost/TREM-technology_video_v2.m4v">Play Video</button>
      <img data-real-type="image" data-img="<?php echo get_template_directory_uri(); ?>/images/layer-building-compressor.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
    </div>

    <section class="main">
      <div class="temporal-content-bl"></div>
      <div class="gwr">
        <div class="container">
          <div class="property-details theme-2 r-hidden">
            
            <ul class="property-information">
              <?php if($type_building==0){ ?>
              <li class="price">
                $0 <?php echo __('to', IDXBOOST_DOMAIN_THEME_LANG); ?> $0
                <span> <?php echo __("Today's Prices", IDXBOOST_DOMAIN_THEME_LANG); ?></span>
              </li>
              <?php }else{ ?>
              <li class="price"><?php echo $response['payload']['price_building']; ?><span><?php echo __("Today's Prices", IDXBOOST_DOMAIN_THEME_LANG); ?></span></li>
              <?php } ?>
              
              <li class="sale"><button id="sale-count-uni-cons" class="fbc-group active-fbc sale-count-uni-cons">0 <span><?php echo __("For Sale", IDXBOOST_DOMAIN_THEME_LANG); ?></span></button></li>             
              <li class="rent"><button id="rent-count-uni-cons" class="fbc-group rent-count-uni-cons">0 <span><?php echo __("For Rent", IDXBOOST_DOMAIN_THEME_LANG); ?></span></button></li>
              <li class="pending"><button id="pending-count-uni-cons" class="fbc-group pending-count-uni-cons">0 <span><?php echo __("Pending", IDXBOOST_DOMAIN_THEME_LANG); ?></span></button></li>
              <li class="sold"><button id="sold-count-uni-cons" class="fbc-group sold-count-uni-cons">0 <span><?php echo __("Sold", IDXBOOST_DOMAIN_THEME_LANG); ?></span></button></li>
              
              <li class="btn-save favorite">
                <?php if ($response['payload']['is_favorite'] == 1): ?>
                <a href="javascript:void(0)" data-permalink="<?php echo $building_permalink; ?>" data-building-id="<?php echo $response['payload']['cod_building']; ?>" class="flex_b_mark_f flex_b_marked chk_save"><span class="active"><?php echo __("Remove Favorite", IDXBOOST_DOMAIN_THEME_LANG); ?></span></a>
                <?php else: ?>
                <a href="javascript:void(0)" data-permalink="<?php echo $building_permalink; ?>" data-building-id="<?php echo $response['payload']['cod_building']; ?>" class="flex_b_mark_f chk_save"><span><?php echo __("Save Favorite", IDXBOOST_DOMAIN_THEME_LANG); ?></span></a>
                <?php endif; ?>
              </li>
            </ul>
          </div>

            <?php 
            if ( wp_is_mobile() ) {
            if (
                array_key_exists('payload', $response) && 
                array_key_exists('hackbox', $response['payload']) && 
                is_array($response['payload']['hackbox']) && 
                array_key_exists('status', $response['payload']['hackbox'] ) 
                && $response['payload']['hackbox']['status'] != false
              ) { ?>

              <div class="ib-wrap-hackbox-building">
                <?php 
                echo $response['payload']['hackbox']['result']['content']; ?>
              </div>
            <?php }} ?>

          <div class="panel-options">
            <div class="options-list">
              <div class="shared-content">
                <button id="show-shared"><?php echo __("share", IDXBOOST_DOMAIN_THEME_LANG); ?></button>
                <ul class="shared-list">
                  <li><a
                    data-share-url="<?php echo $building_permalink; ?>"
                    data-share-title="<?php echo $post->post_title; ?>"
                    data-share-description="<?php echo $post->post_title . ' - ' . $building_default_address; ?>"
                    data-share-image="<?php echo str_replace("https://idxboost.com","https://www.idxboost.com", $response['payload']['gallery_building'][0]["url_image"]); ?>"
                    class="ico-facebook property-detail-share-fb"
                    onclick="idxsharefb()"
                    title="Faceboook"
                    rel="nofollow"><?php echo __("Faceboook", IDXBOOST_DOMAIN_THEME_LANG); ?></a></li>
                  <li><a class="ico-twitter" href="#" onclick="window.open('<?php echo $twitter_share_url; ?>','s_tw','width=600,height=400'); return false;" title="Twitter" rel="nofollow"><?php echo __("Twitter", IDXBOOST_DOMAIN_THEME_LANG); ?></a></li>
                </ul>
              </div>
              <ul class="action-list">
                <li><a class="show-modal ico-envelope" href="javascript:void(0)" title="<?php echo __('email to a friend', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-modal="modal_email_to_friend" rel="nofollow" id="email-friend"><?php echo __('email to a friend', IDXBOOST_DOMAIN_THEME_LANG); ?></a></li>
                <li><a class="ico-printer" href="javascript:void(0)" title="<?php echo __('print', IDXBOOST_DOMAIN_THEME_LANG); ?>" rel="nofollow" id="print-btn"><?php echo __('print', IDXBOOST_DOMAIN_THEME_LANG); ?></a></li>
              </ul>
              <ul class="property-information">
                <li class="btn-save favorite">
                  <?php if ($response['payload']['is_favorite'] == 1): ?>
                  <a href="javascript:void(0)" data-permalink="<?php echo $building_permalink; ?>" data-building-id="<?php echo $response['payload']['cod_building']; ?>" class="flex_b_mark_f flex_b_marked chk_save"><span class="active"><?php echo __('Remove Favorite', IDXBOOST_DOMAIN_THEME_LANG); ?></span></a>
                  <?php else: ?>
                  <a href="javascript:void(0)" data-permalink="<?php echo $building_permalink; ?>" data-building-id="<?php echo $response['payload']['cod_building']; ?>" class="flex_b_mark_f chk_save"><span><?php echo __('Save Favorite', IDXBOOST_DOMAIN_THEME_LANG); ?></span></a>
                  <?php endif; ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="main-content">

            <div class="ms-nav-tab">
              <nav>
                <ul>
                  <li><button class="ms-tab active" data-id="tabAvailability">Availability</button></li>
                  <li><button class="ms-tab" data-id="tabOverview">Overview</button></li>
                  <li><button class="ms-tab" data-id="tabGallery">Gallery</button></li>
                  <li><button class="ms-tab" data-id="tabLocation">Location</button></li>
                  <li><button class="ms-tab" data-id="tabFloorplans">Floorplans</button></li>
                </ul>
              </nav>
            </div>

            <div class="ms-wrap-tab ms-animate" id="ms-tab-content">
              <div class="ms-item-tab fade" id="tabOverview">
                <h2>Aston Martin Residences Overview</h2>
                <p>Unrivalled prestige, unequalled craftsmanship, uncompromising standards. For over a century, the Aston Martin name has been synonymous with excellence in the field of motorcar design and is one of the world’s most iconic, recognisable marques. Each one produced is bespoke and handcrafted, making a highly personal statement about the owner who possesses it. For their vision of 300 Biscayne Boulevard Way in downtown Miami, Aston Martin partnered with renowned developer G&G Business Developments LLC to translate its legendary design into an exclusive real estate venture. The result is a prestigious, one-of-a-kind edifice that represents the pinnacle of elegant living.</p>
                <p>In this, our first residential development, the interiors are inspired by Aston Martin, but take into consideration Miami’s tropical environment. Our design language is based on beauty and the honesty and authenticity of materials. It’s simple and pure and it has an elegance attached to beautiful proportions. We are incorporating Aston Martin’s DNA through subtle details and fine craftsmanship, with an emphasis on comfort. This building is for people who appreciate the finest quality and craftsmanship, who love the feeling of something that is timeless. MAREK REICHMAN - EVP and Chief Creative Officer.</p>
                <p>“Looking at the city of Miami and its powerful connection with the sea, the idea of smooth waves came instantly to our minds. The ripple of the water and the soft lines of its coastline made us wonder how to create a connection between architecture and Miami’s distinct shapes. The work of carving a new niche in this city led to the creation of a luxurious Residential Tower that speaks in the language of the ocean - inspired by the rush of the breeze and the sail of a boat. Aston Martin Residences at 300 Biscayne Boulevard Way achieves an exquisite encounter between sea, city and wind.” RODOLFO MIANI - BMA Architects.</p>
                <p>“Looking at the city of Miami and its powerful connection with the sea, the idea of smooth waves came instantly to our minds. The ripple of the water and the soft lines of its coastline made us wonder how to create a connection between architecture and Miami’s distinct shapes. The work of carving a new niche in this city led to the creation of a luxurious Residential Tower that speaks in the language of the ocean - inspired by the rush of the breeze and the sail of a boat. Aston Martin Residences at 300 Biscayne Boulevard Way achieves an exquisite encounter between sea, city and wind.” RODOLFO MIANI - BMA Architects.</p>
              
                <h3>Aston Martin Residences Amenities</h3>
                <ul class="ms-amenities">
                  <li>24-hour concierge</li>
                  <li>Bicycle storage</li>
                  <li>Billiards room</li>
                  <li>Indoor racquetball court</li>
                  <li>Lap pool</li>
                  <li>Marina with 43 boat slips accommodating up to 110-foot long vessels</li>
                  <li>Party room</li>
                  <li>Saunas and Turkish bath</li>
                  <li>State-of-the-art fitness center</li>
                  <li>Theater</li>
                  <li>Two tennis courts</li>
                  <li>Whirlpool spa</li>
                  <li>Yoga/pilates/dance studio/spin room</li>
                  <li>Zero-entry waterfront swimming pool</li>
                </ul>
              </div>
              <div class="ms-item-tab fade" id="tabGallery">
                <h2>Aston Martin Residences Photo Gallery</h2>
                <div class="ms-galery">
                  <ul class="ib-wrap-floors">
                    <li class="ib-item">
                      <a href="javascript:void(0)" class="ib-item-fp fp-btn">
                        <img class="img-bz" data-real-type="image" data-img="//retsimages.s3.amazonaws.com/85/A10547885_15.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
                      </a>
                    </li>
                    <li class="ib-item">
                      <a href="javascript:void(0)" class="ib-item-fp fp-btn">
                        <img class="img-bz" data-real-type="image" data-img="//retsimages.s3.amazonaws.com/85/A10547885_13.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
                      </a>
                    </li>
                    <li class="ib-item">
                      <a href="javascript:void(0)" class="ib-item-fp fp-btn">
                        <img class="img-bz" data-real-type="image" data-img="//retsimages.s3.amazonaws.com/85/A10547885_14.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
                      </a>
                    </li>
                    <li class="ib-item">
                      <a href="javascript:void(0)" class="ib-item-fp fp-btn">
                        <img class="img-bz" data-real-type="image" data-img="//retsimages.s3.amazonaws.com/85/A10547885_3.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
                      </a>
                    </li>
                    <li class="ib-item">
                      <a href="javascript:void(0)" class="ib-item-fp fp-btn">
                        <img class="img-bz" data-real-type="image" data-img="//retsimages.s3.amazonaws.com/85/A10547885_4.jpg" src="<?php echo get_template_directory_uri(); ?>/images/temp.png" alt="Aston Martin Residences">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="ms-item-tab fade active in" id="tabAvailability">
                <h2>Aston Martin Residences Condos For Sale</h2>
                <!--shortcode para mostrar resultado-->
                <?php echo do_shortcode('[idxboost_building_inventory building_id="'.$atts['building_id'].'" load="ajax" ]'); ?>

                <?php 
                  if ( shortcode_exists( 'sc_news_to_building' ) ) 
                    echo do_shortcode('[sc_news_to_building id_building="'.get_the_ID().'"]'); 
                ?>
              </div>
              <div class="ms-item-tab fade" id="tabLocation">
                <h2>Aston Martin Location</h2>
                <div id="ms-wrap-map">
                  <div id="ms-map-result" class="ms-map" data-lat="25.773170" data-lng="-80.131622"></div>
                </div>
              </div>
              <div class="ms-item-tab fade" id="tabFloorplans">
                <h2>Aston Martin Residences Floorplans</h2>
                <p>Click the <strong>model name</strong> to view the detailed floor plan for that model.</p>
                <table class="ms-ft-table">
                  <thead>
                    <tr>
                      <th>Tower Units</th>
                      <th>Bed/Bath</th>
                      <th>AC SqFt</th>
                      <th>Terrace SqFt</th>
                      <th>Total SqFt</th>
                      <th>Total (m2)</th>
                      <th>Floor Plans</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 8-29 NE Residence</td>
                      <td><span>Bed/Bath</span>3/3.5</td>
                      <td><span>AC SqFt</span>2,850</td>
                      <td><span>Terrace SqFt</span>568</td>
                      <td><span>Total SqFt</span>3,418</td>
                      <td><span>Total (m2)</span>317.5</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan NE 8 to 29</a></td>
                    </tr>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 8-29 SE Residence</td>
                      <td><span>Bed/Bath</span>3/3.5</td>
                      <td><span>AC SqFt</span>2,850</td>
                      <td><span>Terrace SqFt</span>568</td>
                      <td><span>Total SqFt</span>3,418</td>
                      <td><span>Total (m2)</span>317.5</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan SE 8 to 29</a></td>
                    </tr>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 8-29 NE Residence</td>
                      <td><span>Bed/Bath</span>3/4.5</td>
                      <td><span>AC SqFt</span>3,428</td>
                      <td><span>Terrace SqFt</span>568</td>
                      <td><span>Total SqFt</span>3,970</td>
                      <td><span>Total (m2)</span>368.8</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan NE 8 to 29</a></td>
                    </tr>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 8-29 SE Residence</td>
                      <td><span>Bed/Bath</span>3/3.5</td>
                      <td><span>AC SqFt</span>3,428</td>
                      <td><span>Terrace SqFt</span>568</td>
                      <td><span>Total SqFt</span>3,996</td>
                      <td><span>Total (m2)</span>317.2</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan SE 8 to 29</a></td>
                    </tr>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 46-56 NE Residence</td>
                      <td><span>Bed/Bath</span>4/6.5</td>
                      <td><span>AC SqFt</span>3,995</td>
                      <td><span>Terrace SqFt</span>710</td>
                      <td><span>Total SqFt</span>4,705</td>
                      <td><span>Total (m2)</span>437.1</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan NE 8 to 29</a></td>
                    </tr>
                    <tr>
                      <td class="ms-full"><span>Tower Units</span>Floors 46-56 SE Residence</td>
                      <td><span>Bed/Bath</span>4/3.5</td>
                      <td><span>AC SqFt</span>3,995</td>
                      <td><span>Terrace SqFt</span>710</td>
                      <td><span>Total SqFt</span>4,705</td>
                      <td><span>Total (m2)</span>437.1</td>
                      <td class="ms-fp-link"><a href="#">View Elysee Floorplan SE 8 to 29</a></td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>

            <div class="property-contact">
              <div class="form-content large-form" id="ms-ft-form">
                <div class="avatar-content">
                  <div class="content-avatar-image"><img class="lazy-img" data-src="<?php echo $agent_info_photo; ?>" title="<?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?>" alt="<?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?>"></div>
                  <div class="avatar-information">
                    <h2><?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?></h2>
                    <?php if (!empty($agent_info_phone)): ?>
                    <a class="phone-avatar" href="tel:<?php echo preg_replace('/[^\d]/', '', $agent_info_phone); ?>" title="<?php echo __('Call to', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $agent_info_phone; ?>"><?php echo __('Ph', IDXBOOST_DOMAIN_THEME_LANG);?>. <?php echo $agent_info_phone; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
                <form method="post" class="flex_idx_building_form gtm_more_info_building">
                  <input type="hidden" name="ib_tags" value="">
                  <input type="hidden" name="slug" value="<?php echo $building_slug; ?>">
                  <input type="hidden" name="action" value="flex_idx_request_website_building_form">
                  <input type="hidden" name="building_ID" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="building_price_range" value="$0">
                  <div class="gform_body">
                    <ul class="gform_fields">

                      <?php if (array_key_exists('track_gender', $flex_idx_info['agent'])) { 
                        if ($flex_idx_info['agent']['track_gender']==true) { ?>
                        <li class="gfield">
                          <label class="gfield_label" for="first_name"><?php echo __("Gender", IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                          <div class="ginput_container ginput_container_text sp-box">
                            <select name="gender" class="gender">
                              <option value="<?php echo __('Mr.', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Mr.', IDXBOOST_DOMAIN_THEME_LANG);?></option>
                              <option value="<?php echo __('Mrs.', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Mrs.', IDXBOOST_DOMAIN_THEME_LANG);?></option>
                              <option value="<?php echo __('Miss', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Miss', IDXBOOST_DOMAIN_THEME_LANG);?></option>
                            </select>
                            <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="medium" name="first_name" id="first_name" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG);?>*">
                          </div>
                        </li>
                        <?php } else { ?>
                        <li class="gfield">
                          <label class="gfield_label" for="first_name"><?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG);?></label>
                          <div class="ginput_container ginput_container_text">
                            <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_fn_inq medium" name="first_name"  type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG);?>*">
                          </div>
                        </li>
                        <?php }  }else{ ?>
                        <li class="gfield">
                          <label class="gfield_label" for="first_name"><?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG);?></label>
                          <div class="ginput_container ginput_container_text">
                            <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_fn_inq medium" name="first_name" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG);?>*">
                          </div>
                        </li>
                      <?php } ?>

                      <li class="gfield">
                        <label class="gfield_label" for="first_name"><?php echo __('Last Name', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                        <div class="ginput_container ginput_container_text">
                          <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" class="_ib_ln_inq medium" name="last_name" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['last_name'])): ?><?php echo $flex_idx_lead['lead_info']['last_name']; ?><?php endif;?>" placeholder="<?php echo __('Last Name', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                        </div>
                      </li>
                      <li class="gfield">
                        <label class="gfield_label" for="email"><?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                        <div class="ginput_container ginput_container_email">
                          <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_em_inq medium" name="email" type="email" value="<?php if (isset($flex_idx_lead['lead_info']['email_address'])): ?><?php echo $flex_idx_lead['lead_info']['email_address']; ?><?php endif;?>" placeholder="<?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                        </div>
                      </li>
                      <li class="gfield">
                        <label class="gfield_label" for="phone"><?php echo __('Phone', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                        <div class="ginput_container ginput_container_email">
                          <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" class="_ib_ph_inq medium" name="phone" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['phone_number'])): ?><?php echo $flex_idx_lead['lead_info']['phone_number']; ?><?php endif;?>" placeholder="<?php echo __('Phone', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                        </div>
                      </li>
                      <li class="gfield comments">
                        <label class="gfield_label" for="message"><?php echo __('Comments', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                        <div class="ginput_container">
                          <textarea autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" class="medium textarea" name="message" type="text" placeholder="Comments" rows="10" cols="50"><?php echo __('I am interested in', IDXBOOST_DOMAIN_THEME_LANG).' '.$building_default_address; ?> <?php echo __('at', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $response['payload']['name_building']; ?></textarea>
                        </div>
                      </li>
                      <li class="gfield requiredFields">* <?php echo __('Required Fields', IDXBOOST_DOMAIN_THEME_LANG); ?></li>
                      <div class="gform_footer">
                        <input class="gform_button button gform_submit_button_5" type="submit" value="<?php echo __('Request Information', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                      </div>
                    </ul>
                  </div>
                </form>  
                <button class="close-bl-form" id="close_bl_form">Close</button>            
              </div>
            </div>
          </div>
        </div>

        <div class="aside">

          <ul class="property-information ltd d-hidden">
            <?php if($type_building==0){ ?>
            <li class="sale flex-open-tb-sale fbc-group idx-tab-building">
              <button>0 <span><?php echo __('For Sale', IDXBOOST_DOMAIN_THEME_LANG); ?></span></button>
            </li>
            <li class="rent flex-open-tb-rent fbc-group idx-tab-building">
              <button>0 <span><?php echo __('For Rent', IDXBOOST_DOMAIN_THEME_LANG); ?></span></button>
            </li>
            <li class="pending flex-open-tb-pending fbc-group idx-tab-building">
              <button>0 <span><?php echo __('Pending', IDXBOOST_DOMAIN_THEME_LANG); ?></span></button>
            </li>            
            <li class="sold flex-open-tb-sold fbc-group idx-tab-building">
              <button>0 <span><?php echo __('Sold', IDXBOOST_DOMAIN_THEME_LANG); ?></span></button>
            </li>
            <?php } ?>
            
            <?php if (
                array_key_exists('payload', $response) && 
                array_key_exists('hackbox', $response['payload']) && 
                is_array($response['payload']['hackbox']) && 
                array_key_exists('status', $response['payload']['hackbox'] ) 
                && $response['payload']['hackbox']['status'] != false
              ) { ?>

              <li class="ib-wrap-hackbox-building">
                <?php 
                echo $response['payload']['hackbox']['result']['content']; ?>
              </li>
            <?php } ?>

          </ul>

          <div class="form-content">
            <div class="avatar-content">
              <div class="content-avatar-image"><img class="lazy-img" data-src="<?php echo $agent_info_photo; ?>" title="<?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?>" alt="<?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?>"></div>
              <div class="avatar-information">
                <h2><?php echo $agent_info_name; ?> <?php echo $agent_last_name; ?></h2>
                <?php if (!empty($agent_info_phone)): ?>
                <a class="phone-avatar" href="tel:<?php echo preg_replace('/[^\d]/', '', $agent_info_phone); ?>" title="<?php echo __('Call to', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $agent_info_phone; ?>"><?php echo __('Ph', IDXBOOST_DOMAIN_THEME_LANG);?>. <?php echo $agent_info_phone; ?></a>
                <?php endif; ?>
              </div>
            </div>
            <form method="post" class="flex_idx_building_form gtm_more_info_building">
              <input type="hidden" name="ib_tags" value="">
              <input type="hidden" name="slug" value="<?php echo $building_slug; ?>">
              <input type="hidden" name="action" value="flex_idx_request_website_building_form">
              <input type="hidden" name="building_ID" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="building_price_range" value="$0">
              <div class="gform_body">
                <ul class="gform_fields">

                  <?php if (array_key_exists('track_gender', $flex_idx_info['agent'])) { 
                   if ($flex_idx_info['agent']['track_gender']==true) { ?>
                    <li class="gfield">
                        <label class="gfield_label"><?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                      <div class="ginput_container ginput_container_text sp-box">
                        <select name="gender" class="gender medium">
                          <option value="<?php echo __('Mr.', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Mr.', IDXBOOST_DOMAIN_THEME_LANG);?></option>
                          <option value="<?php echo __('Mrs.', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Mrs.', IDXBOOST_DOMAIN_THEME_LANG);?></option>
                          <option value="<?php echo __('Miss', IDXBOOST_DOMAIN_THEME_LANG);?>"><?php echo __('Miss', IDXBOOST_DOMAIN_THEME_LANG);?></option>          
                        </select>
                        <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_fn_inq medium" name="first_name" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __('First Name', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                      </div>
                    </li>
                  <?php } else{ ?>
                       <li class="gfield">
                           <label class="gfield_label" for="first_name"><?php echo __("First Name", IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                           <div class="ginput_container ginput_container_text">
                               <input required class="medium" name="first_name" id="_ib_fn_inq" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __("First Name", IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                           </div>
                       </li>
                    <?php }}else{ ?>
                      <li class="gfield">
                          <label class="gfield_label" for="first_name"><?php echo __("First Name", IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                          <div class="ginput_container ginput_container_text">
                              <input required class="medium" name="first_name" id="_ib_fn_inq" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['first_name'])): ?><?php echo $flex_idx_lead['lead_info']['first_name']; ?><?php endif;?>" placeholder="<?php echo __("First Name", IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                          </div>
                      </li>
                    <?php } ?>
                  <li class="gfield">
                    <label class="gfield_label"><?php echo __('Last Name', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                    <div class="ginput_container ginput_container_text">
                      <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_ln_inq medium" name="last_name" type="text" value="<?php if (isset($flex_idx_lead['lead_info']['last_name'])): ?><?php echo $flex_idx_lead['lead_info']['last_name']; ?><?php endif;?>" placeholder="<?php echo __('Last Name', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                    </div>
                  </li>
                  <li class="gfield">
                    <label class="gfield_label"><?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                    <div class="ginput_container ginput_container_email">
                      <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" required class="_ib_em_inq medium" name="email" type="email" value="<?php if (isset($flex_idx_lead['lead_info']['email_address'])): ?><?php echo $flex_idx_lead['lead_info']['email_address']; ?><?php endif;?>" placeholder="<?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                    </div>
                  </li>
                  <li class="gfield">
                    <label class="gfield_label"><?php echo __('Phone', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                    <div class="ginput_container ginput_container_email">
                      <input autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" class="_ib_ph_inq medium" name="phone" required type="text" value="<?php if (isset($flex_idx_lead['lead_info']['phone_number'])): ?><?php echo $flex_idx_lead['lead_info']['phone_number']; ?><?php endif;?>" placeholder="<?php echo __('Phone', IDXBOOST_DOMAIN_THEME_LANG); ?>*">
                    </div>
                  </li>
                  <li class="gfield comments">
                    <label class="gfield_label"><?php echo __('Comments', IDXBOOST_DOMAIN_THEME_LANG); ?></label>
                    <div class="ginput_container">
                      <textarea autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="disabled" autocomplete="disabled" class="medium textarea" name="message" type="text" placeholder="<?php echo __('Comments', IDXBOOST_DOMAIN_THEME_LANG); ?>" rows="10" cols="50"><?php echo __('I am interested in', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $building_default_address; ?> <?php echo __('at', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $response['payload']['name_building']; ?></textarea>
                    </div>
                  </li>
                  <li class="gfield requiredFields">* <?php echo __('Required Fields', IDXBOOST_DOMAIN_THEME_LANG); ?></li>
                  <div class="gform_footer">
                    <input class="gform_button button gform_submit_button_5" type="submit" value="<?php echo __('Request information', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                  </div>
                </ul>
              </div>
            </form>
          </div>

          <ul class="property-information ltd d-hidden">
            <?php if($type_building==0){ ?>
              <li class="price"></li>
            <?php }else{ ?>
              <li class="price"><?php echo $response['payload']['price_building']; ?><span><?php echo __("Today's Prices", IDXBOOST_DOMAIN_THEME_LANG); ?></span></li>
            <?php } ?>           
            <?php  if( !empty($response['payload']['bed_building']) ) { ?>
                  <li class="item-list"> <span><?php echo __('Bedrooms', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span><?php echo $response['payload']['bed_building']; ?></span></li>
            <?php   } ?>

            <?php  if( !empty($response['payload']['year_building']) ) { ?>
                <li class="item-list"> <span><?php echo __('Year Built', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span><?php echo $response['payload']['year_building']; ?></span></li>
            <?php   } ?>
            
            <?php  if( !empty($response['payload']['unit_building']) ) { ?>
                <li class="item-list"> <span><?php echo __('Units', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span class="item-list-units-un"><?php echo $response['payload']['unit_building']; ?></span></li>
            <?php   } ?>
            
            <?php  if( !empty($response['payload']['floor_building']) ) { ?>
              <li class="item-list"> <span><?php echo __('Stories', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span><?php echo $response['payload']['floor_building']; ?></span></li>
            <?php   } ?>
            <?php if($type_building==0){ ?>
            <li class="item-list"> <span><?php echo __('Average Price', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo __('Sq.Ft.', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span class="ib_inventory_avg_price">$0</span></li>
            <li class="item-list"> <span><?php echo __('Average Days on Market', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span class="ib_inventory_days_market">0</span></li>
            <?php } ?>
            <li class="item-list"> <span><?php echo __('City', IDXBOOST_DOMAIN_THEME_LANG); ?></span><span><?php echo $response['payload']['city_building_name']; ?></span></li>
          </ul>  

          <div class="wp-statisticss" style="display: block;">
            <h2 class="subtitle-b">Aston Martin Residences Deposit Schedule</h2>
            <ul class="ms-sp-list">
              <li><strong>20%</strong> Deposit - At the time o contract signing</li>
              <li><strong>10%</strong> twelve months after contract signing</li>
              <li><strong>10%</strong> twenty-four months after contract signing</li>
              <li><strong>10%</strong> thirty-six months after contract signing</li>
              <li><strong>50%</strong> Balance at the time of closing</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="printMessageBox"><?php echo __('Please wait while we create your document', IDXBOOST_DOMAIN_THEME_LANG); ?></div>
</main>
<input type="hidden" value="0" id="refentElement">

<div class="fp-modal">
  <div id="fp-wrap-modal"></div>
  <button class="fp-close-fp">
    <span></span>
  </button>
</div>

<script type="text/javascript">
  (function ($) {
  
  
  $(function() {

    $(document).on("ready", function() {
      $('#modal_img_propertie .title').text('<?php echo $building_default_address; ?>');
    });
    
    $('.group-flex.tabs-btn.show-desktop li:first').click();
    jQuery('.flex-open-tb-rent').click();
    jQuery('.flex-open-tb-sale').click();

    /*jQuery(document).on('click', '.ms-main-content .ms-btn', function () {
      var msElement = $($(this).attr('data-step')).offset();
      var msForm = ((msElement.top) - 300) * 1;
      jQuery("html, body").animate({scrollTop: msForm}, 900);
      jQuery(".property-contact .flex_idx_building_form .gform_fields .gfield:nth-child(1) input").focus();
    });*/

    jQuery(document).on('click', '.active-bl-form', function () {
      jQuery("body").addClass('ms-active-form');
    });
    jQuery(document).on('click', '#close_bl_form', function () {
      jQuery("body").removeClass('ms-active-form');
    });
  });

  })(jQuery);
</script>
<style type="text/css">
  .desactivo { display: none !important; }
  .green { color: green; }
</style>

<script type="text/javascript">
  (function($) {
  
      function active_modal($modal) {
          if ($modal.hasClass('active_modal')) {
              $('.overlay_modal').removeClass('active_modal');
              $("html, body").animate({
                  scrollTop: 0
              }, 1500);
          } else {
              $modal.addClass('active_modal');
              $modal.find('form').find('input').eq(0).focus();
              $('html').addClass('modal_mobile');
          }
          close_modal($modal);
      }
  
      function close_modal($obj) {
          var $this = $obj.find('.close');
          $this.click(function() {
              var $modal = $this.closest('.active_modal');
              $modal.removeClass('active_modal');
              $('html').removeClass('modal_mobile');
          });
      }
  
  $(function() {
  // setup favorite

    $(".flex_b_mark_f").on("click", function(event) {
      event.stopPropagation();
      event.preventDefault();
  
      if (__flex_g_settings.anonymous === "yes") {
        active_modal($('#modal_login'));
      } else {
        var building_id = $(this).data("building-id");
  
        if ($(this).hasClass("flex_b_marked")) {
          // remove
          $(this).removeClass("flex_b_marked");
          $(this).find("span").removeClass("active").html("SAVE FAVORITE");
  
          //console.log('remove building from favorites');
  
          $.ajax({
              url: flex_idx_filter_params.ajaxUrl,
              method: "POST",
              data: {
                  action: "flex_favorite_building",
                  building_id: building_id,
                  type_action: 'remove'
              },
              dataType: "json",
              success: function(data) {
                  // console.log(data.message);
              }
          });
        } else {
          console.log('add building to favorites');
  
          // add
          $(this).addClass("flex_b_marked");
          $(this).find("span").addClass("active").html("REMOVE FAVORITE");
  
          var building_permalink = $(this).data("permalink");
  
          $.ajax({
              url: flex_idx_filter_params.ajaxUrl,
              method: "POST",
              data: {
                  action: "flex_favorite_building",
                  building_id: building_id,
                  building_permalink: building_permalink,
                  type_action: 'add'
              },
              dataType: "json",
              success: function(data) {
                  // console.log(data.message);
              }
          });
        }
      }
  
    });
  
  });
  
})(jQuery);
</script>

<script>
  function idxsharefb(){
    window.open('http://www.facebook.com/sharer/sharer.php?u='+window.location.href, 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
  }
</script>
<?php endif; ?>
<script type="text/javascript">
    var idxboost_hackbox_filter=[];
    var idxboost_force_registration=false;
    var idx_is_marketing=false;

    <?php if ( !empty($response) && 
      array_key_exists('payload', $response) &&  
      array_key_exists('is_marketing', $response['payload']) &&  
      !empty($response['payload']['is_marketing'])  ) { ?>
      idx_is_marketing=true;
    <?php  } ?>
    
   
    <?php if ( !empty($response) && 
      array_key_exists('payload', $response) &&  
      array_key_exists('force_registration', $response['payload']) &&  
      !empty($response['payload']['force_registration'])  ) { ?>
      idxboost_force_registration=true;
    <?php  } ?>

               <?php if (
                !empty($response) && 
                array_key_exists('payload', $response) && 
                array_key_exists('hackbox', $response['payload']) && 
                is_array($response['payload']['hackbox']) && 
                array_key_exists('status', $response['payload']['hackbox'] ) 
                && $response['payload']['hackbox']['status'] != false
              ) { ?>
    idxboost_hackbox_filter= <?php echo json_encode($response['payload']["hackbox"]); ?>;
   <?php } ?>

  var view_grid_type='';
  jQuery('body').addClass('buildingPage');
  <?php
    $sta_view_grid_type='0'; if(array_key_exists('view_grid_type',$search_params)) $sta_view_grid_type=$search_params['view_grid_type']; ?>
  view_grid_type=<?php echo $sta_view_grid_type; ?>;
  if ( !jQuery('body').hasClass('clidxboost-ngrid') && view_grid_type==1) {
    jQuery('body').addClass('clidxboost-ngrid');
  }

  //script floor plan
    jQuery(document).on('click', '.fp-btn', function (e) {
    e.preventDefault();
    var $mlist = '';
    var $elementSelected = jQuery(this).parent().index();
    jQuery('body').addClass('fp-active-modal');
    if(!jQuery("#fp-wrap-modal").hasClass("gs-builded")){
      /*RECUPERAMOS LAS IMAGENES*/
      jQuery('.ib-wrap-floors').find('img').each(function () {
        var $imaSlider = '<img src="'+jQuery(this).attr('src')+'">';
        $mlist = $mlist + $imaSlider;
        console.log($mlist);
      });
      /*ASIGNAMOS LAS IMAGENES AL SLIDER*/
      jQuery("#fp-wrap-modal").html($mlist);
      /*GENERAMOS EL SLIDER*/
      jQuery("#fp-wrap-modal").greatSlider({
        type: 'swipe',
        nav: true,
        lazyLoad: true,
        bullets: false,
      });
    }
    gs.slider['fp-wrap-modal'].goTo($elementSelected + 1);
  });
  jQuery(document).on('click', '.fp-close-fp', function () {
    jQuery('body').removeClass('fp-active-modal');
  });
  //script floor plan
</script>

<?php include FLEX_IDX_PATH . '/views/shortcode/idxboost_modals_filter.php';  ?>