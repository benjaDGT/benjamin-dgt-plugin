var listbedsold=[],listbedpending=[],listbedsale=[],listbedrent=[],responseitemsale=[],responseitempending=[],responseitemrent=[],responseitemsold=[],responseitemsalegrid='',responseitemrentgrid='',responseitemsoldgrid='',responseitemsoldpending='',myLazyLoad,auxscreensold=0,auxscreenrent=0,auxscreensale=0,auxscreenpending=0;
var tablasidx;
var auxtextsalehtml='',auxtextrenthtml='',auxtextsoldhtml='';
var tab_idx=document.location.hash;
var textmp;
var initial_title;
var initial_href;

(function($) {

function ib_change_view_object_device(object,tabbuil,object_val){
  var viebuil='list';
  if (object.val() != undefined && object.val() !=0 ){
    viebuil=object.val();
  }else{
    if ( object.hasClass( "grid" ) ){
      viebuil='grid';
    }    
  }
  textmp=object;
  object_val.val(viebuil);
  
  //SE MOSTRARA LA VISTA LISTA O GRILLA
  /*
  var objec_name_id='#view_'+viebuil;
  $('.mode_view').hide();
  $(objec_name_id).show();
  */

  ib_change_view( viebuil ,tabbuil );
}

function ib_change_view(view,tab){
  var property_type='';
  $=jQuery;
  /*BOTONES TABS*/
  ib_collection_desk_li=$('.idxboost-collection-show-desktop li');
  ib_collection_desk_li.removeClass('active');
  /*habilitar vista en desktop*/
  var builhash='';
  ib_collection_desk_li.each(function(){
    if ($(this).attr('fortab')==tab){
      $(this).addClass("active");
      $('.idxboost-collection-property-information li button').removeClass('active');
      property_type=$(this).attr('data-property');
      if (property_type=='sale'){
        builhash='#!for-sale';
        $('.filter-text').text('For Sale');
        $('#sale-count-uni-cons').addClass('active');
        $('#flex_filter_sort').val('sale');        
      }else if(property_type=='rent') {
        builhash='#!for-rent';
        $('.filter-text').text('For Rent');
        $('#rent-count-uni-cons').addClass('active');
        $('#flex_filter_sort').val('rent');
      }else if(property_type=='sold') {
        builhash='#!sold';
        $('.filter-text').text('Sold');
        $('#sold-count-uni-cons').addClass('active');
        $('#flex_filter_sort').val('sold');
      }else if(property_type=='pending') {
        builhash='#!pending';
        $('.filter-text').text('Pending');
        $('#pending-count-uni-cons').addClass('active');
        $('#flex_filter_sort').val('pending');
      }
      var boolcaracter=idxboost_collection_params.wpsite.substr(idxboost_collection_params.wpsite.length-1,idxboost_collection_params.wpsite.length);
      web_page=idxboost_collection_params.wpsite;
      if (boolcaracter=='/'){
        web_page=idxboost_collection_params.wpsite.slice(0,-1);
      }
      web_page=web_page+builhash;

      
      history.pushState(null, '', web_page );
    }
  });
  /*BOTONES TABS*/
  console.log(property_type);
  console.log(view);
  var view_active=property_type+'_'+view;
  /*ACTIVE EL CONTENT TO DESKTOP*/
  var objec_name_id='#view_'+view;
  $('.mode_view').hide();
  $(objec_name_id).show();
  if (view=='list'){
    var view_desk=$('#view_'+view).find('.item_view_db');
    view_desk.removeClass('active');
    view_desk.each(function(){
      if ($(this).attr('id')== view_active ){
        $(this).addClass("active");
      }
    });
  }else if(view=='grid'){
    $(objec_name_id).find('.result-search').removeClass('active');
    $(objec_name_id).find('.result-search').each(function(){
      if ($(this).attr('id')== tab ){
        $(this).addClass("active");
      }
    });
  }
  
  idxboosttabview();
}


function ib_init_script(){ 
  var tot_sale=0, tot_rent=0,tot_sold=0,tot_porc=0,tot_porc_label=0,label_price='';
  $('.aside .property-information .price, .wp-statisticss, .condo-statics, .idxboost-collection-show-desktop, .fbc-group, #filter-views, .ib_content_views_building').hide();
    if(ib_building_inventory.load_item=='ajax'){
      jQuery('#dataTable-floorplan-grid').DataTable({ "paging": false }).order([3, 'desc']).draw();
             jQuery.ajax({
                 url: idxboost_collection_params.ajaxUrl,
                 method: "POST",
                 data: jQuery('.idxboost_collection_xr').serialize(),
                 dataType: "json",
                 success: function(response) {
                   if (response.success === true) {
                  idxboostCollecBuil=response;

                  // dataLayer Tracking Collection
                  if (typeof dataLayer !== "undefined") {
                      if (__flex_g_settings.hasOwnProperty("has_dynamic_ads") && ("1" == __flex_g_settings.has_dynamic_ads)) {
                          if ("undefined" !== typeof dataLayer) {
                              if (response.hasOwnProperty("items") && response.items.length) {
                                  var mls_list = _.pluck(response.items, "mls_num");
                                  var build_mls_list = [];
                                  for (var i = 0, l = mls_list.length; i < l; i++) {
                                      build_mls_list.push({ id: mls_list[i], google_business_vertical: 'real_estate' });
                                  }

                                  if (build_mls_list.length) {
                                      dataLayer.push({ "event": "view_item_list", "items": build_mls_list });

                                      build_mls_list.length = 0;
                                  }
                              }
                          }
                      }
                  }


                  tot_sale=response.payload.properties.sale.count;
                  tot_rent=response.payload.properties.rent.count;
                  tot_pending=response.payload.properties.pending.count;
                  tot_sold=response.payload.properties.sold.count;
                  tot_porc=jQuery('.item-list-units-un').text();
                  tot_rest= parseInt(tot_porc)-tot_sale-tot_rent;
                  tot_porc_label=tot_porc;

                  if ( (tot_sale>0 || tot_rent>0 || tot_sold>0)  && response.payload.type_building =='0'){
                    $('.idxboost-collection-show-desktop, .fbc-group, #filter-views, .ib_content_views_building, .idx-tab-building').attr('style','');
                    
                    if (tot_sale>0){
                      $('.sale-count-uni-cons').parent('.sale').show();
                    }else{
                      $('#flex_filter_sort').find('option').each(function(keys_option){
                        if($(this).val()=='sale')
                        $(this).remove();
                      });                                          
                    }

                    if (tot_pending>0){
                      $('.pending-count-uni-cons').parent('.pending').show();
                    }else{
                      $('#flex_filter_sort').find('option').each(function(keys_option){
                        if($(this).val()=='pending')
                        $(this).remove();
                      });                                          
                    }

                    if (tot_sold>0){
                      $('.sold-count-uni-cons').parent('.sold').show()
                    }else{
                      $('#flex_filter_sort').find('option').each(function(keys_option){
                        if($(this).val()=='sold')
                        $(this).remove();
                      });                                          
                    }

                    if (tot_rent>0){
                      $('.rent-count-uni-cons').parent('.rent').show();
                    }else{
                      $('#flex_filter_sort').find('option').each(function(keys_option){
                        if($(this).val()=='rent')
                        $(this).remove();
                      });                                          
                    }

                  }else{
                    $('.idx-tab-building').hide();
                    $('.rent-count-uni-cons').parent('.rent').hide();
                    $('.sold-count-uni-cons').parent('.sold').hide();
                    $('.pending-count-uni-cons').parent('.pending').hide();
                    $('.sale-count-uni-cons').parent('.sale').hide();
                  }

                  if(tot_sale>0){
                    $('.ib_collection_tab').val('tab_sale');
                    $('.flex-open-tb-sale').addClass('active-fbc');
                  }else if (tot_rent>0){
                    $('.ib_collection_tab').val('tab_rent');
                    $('.flex-open-tb-rent').addClass('active-fbc');
                  }else if (tot_sold>0){
                    $('.ib_collection_tab').val('tab_sold');
                    $('.flex-open-tb-sold').addClass('active-fbc');
                  }else if (tot_pending>0){
                    $('.ib_collection_tab').val('tab_pending');
                    $('.flex-open-tb-pending').addClass('active-fbc');
                  }

                  if (response.payload.meta.sale_min_max_price.min != undefined && response.payload.meta.sale_min_max_price !='' && response.payload.type_building =='0' ){
                    $('.aside .property-information .price').show();
                    label_price='$'+_.formatShortPrice(response.payload.meta.sale_min_max_price.min)+' '+word_translate.to+' '+'$'+_.formatShortPrice(response.payload.meta.sale_min_max_price.max);
                    $('.property-information .price').html(label_price+"<span>"+word_translate.todays_prices+"</span>" );
                    $('.ib_inventory_min_max_price').html(label_price );                    
                  }
                

                  $('.data-inventory').find('.cir-sta.sale').text(tot_sale);
                  $('.data-inventory').find('.cir-sta.rent').text(tot_rent);

                   var idx_porc_sale=0;
                   var idx_porc_rent=0;
                   var idx_porc_sold=0;

                   if(tot_porc !='' && tot_porc!="0" ){
                     idx_porc_sale=Math.round((tot_sale/tot_porc)*100);
                     idx_porc_rent=Math.round((tot_rent/tot_porc)*100);
                   }

                   if($('.ib_building_unit').val() !='' && $('.ib_building_unit').val()!="0" ){
                     idx_porc_sold=Math.round(tot_sold*100/parseInt($('.ib_building_unit').val()));
                   }             
                  $('.condo-statics .ib_inventory_sale').html( idx_porc_sale +'%' );
                  $('.condo-statics .ib_inventory_rent').html( idx_porc_rent +'%' );
                  $('.ib_inventory_avg_price').html( '$'+_.formatShortPrice(Math.round(response.payload.meta.avg_price_sqft)) );
                  $('.condo-statics .ib_inventory_previous').html( idx_porc_sold +'%' );
                  
                  
                  $('.ib_inventory_days_market').html(response.payload.meta.building_avg_days);                  

                  $('.flex-open-tb-sale button, #sale-count-uni-cons').html(' '+tot_sale+'<span>'+word_translate.for_sale+'</span>');
                  $('.flex-open-tb-rent button, #rent-count-uni-cons').html(' '+tot_rent+'<span>'+word_translate.for_rent+'</span>');
                  $('.flex-open-tb-pending button, #pending-count-uni-cons').html(' '+tot_pending+'<span>'+word_translate.pending+'</span>');
                  $('.flex-open-tb-sold button, #sold-count-uni-cons').html(' '+tot_sold+'<span>'+word_translate.sold+'</span>');

                  if (response.payload.properties.sale.count==0){
                    $('#flex_tab_sale, .flex-open-tb-sale').hide();
                  }
                  if (response.payload.properties.rent.count==0){
                    $('#flex_tab_rent, .flex-open-tb-rent').hide();
                  }
                  if (response.payload.properties.pending.count==0){
                    $('#flex_tab_pending, .flex-open-tb-pending').hide();
                  }                  
                  if (response.payload.properties.sold.count==0){
                    $('#flex_tab_sold, .flex-open-tb-sold').hide();
                  }

                  if(response.payload.meta != undefined && ( (tot_sale>0|| tot_rent>0) && response.payload.type_building =='0' ) ){
                    $('.condo-statics').show();
                  }

                  chart_container_obj = $("#chart-container");
                  if( (tot_sale>0|| tot_rent>0) && response.payload.type_building =='0' ){
                    $('.wp-statisticss').show();
                    if (chart_container_obj.length) {
                      FusionCharts.ready(function () {
                          var revenueChart = new FusionCharts({type: 'doughnut2d',renderAt: 'chart-container',width: 380,height: 250,events: { chartClick: { cancelled: true } },
                            dataSource: {
                              "chart": {"numberPrefix": "$","paletteColors": "#434343,#0072ac,#99999a","bgColor": "#ffffff","showBorder": "0","use3DLighting": "0","showShadow": "0","enableSmartLabels": "0","startingAngle": "330","showLabels": "0","showPercentValues": "1","showLegend": "1","legendShadow": "0","legendBorderAlpha": "0","defaultCenterLabel": tot_porc_label + " "+word_translate.units,"centerLabelBold": "2","showTooltip": "0","decimals": "0","captionFontSize": "18","subcaptionFontSize": "14","subcaptionFontBold": "0" },
                              "data": [ {"value": tot_sale}, {"value": tot_rent},{"value": tot_rest} ]
                            }
                          }).render();
                      });
                    }
                  }

                  idxboostCollectiIn();
                  ib_change_view( $('.ib_collection_view').val() ,$('.ib_collection_tab').val() );
                    }
                 }
             });
    }
    //jQuery('#dataTable-floorplan-grid').DataTable({ 'paging': false });
}

$(function() {

  $('.idxboost_collection_xr').on("submit", function(event) {
             event.preventDefault();
             var _self = $(this);
             var formData = _self.serialize();
             console.log(formData);
             $.ajax({
                 url: idxboost_collection_params.ajaxUrl,
                 method: "POST",
                 data: formData,
                 dataType: "json",
                 success: function(response) {
                   if (response.success === true) {
                  idxboostCollecBuil=response;
                       idxboostCollectiIn();
                    }
                 }
             });
         });

        $('.idxboost_collection_tab_sale, .idxboost_collection_tab_rent, .idxboost_collection_tab_sold').on("click", ".flex-slider-prev", function(event) {
            event.stopPropagation();
            console.log("entro");
            var node = $(this).prev().find('li.flex-slider-current');
            var index = node.index();
            var total = $(this).prev().find('li').length;
            index = (index === 0) ? (total - 1) : (index - 1);
            $(this).prev().find('li').removeClass('flex-slider-current');
            $(this).prev().find('li').addClass('flex-slider-item-hidden');
            $(this).prev().find('li').eq(index).removeClass('flex-slider-item-hidden').addClass('flex-slider-current');
            myLazyLoad.update();
        });
        $('.idxboost_collection_tab_sale, .idxboost_collection_tab_rent, .idxboost_collection_tab_sold').on("click", ".flex-slider-next", function(event) {
            event.stopPropagation();
            console.log("entronext");
            var node = $(this).prev().prev().find('li.flex-slider-current');
            var index = node.index();
            var total = $(this).prev().prev().find('li').length;
            if (index >= (total - 1)) {
                index = 0;
            } else {
                index = index + 1;
            }
            // index = (index >= (total - 1)) ? 0 : (index + 1);
            $(this).prev().prev().find('li').removeClass('flex-slider-current');
            $(this).prev().prev().find('li').addClass('flex-slider-item-hidden');
            $(this).prev().prev().find('li').eq(index).removeClass('flex-slider-item-hidden').addClass('flex-slider-current');
            myLazyLoad.update();
        });

    $(document).ready(function(){
      myLazyLoad = new LazyLoad();

      if(ib_building_inventory.load_item !='ajax'){
        idxboostCollectiIn();
        jQuery('.group-flex.tabs-btn.show-desktop li:first').click();
        jQuery('.flex-open-tb-rent').click();
        jQuery('.flex-open-tb-sale').click();   
        $('.result-search li.propertie a').removeClass('show-modal');         
      }else{
        $('.sale-count-uni-cons').parent('.sale').hide();
        $('.sold-count-uni-cons').parent('.sold').hide();
        $('.rent-count-uni-cons').parent('.rent').hide();
        $('.pending-count-uni-cons').parent('.pending').hide();

        ib_init_script();

        $(document).on('change','#filter-by select',function() {
          var value_item=$(this).val();
          $('.idxboost-collection-show-desktop li').each(function(){
            if ($(this).attr('data-property')==value_item ){
              $(this).click();
            }
          });
        });    

        $(document).on('click','.idxboost-collection-show-desktop li',function() {
          var tabbuil=$(this).attr('fortab');
          var viebuil=$('.ib_collection_view').val();
          $('.ib_collection_tab').val(tabbuil);
          $('.fbc-group').removeClass('active-fbc active');
          
          /*botones tabs lateral mobile*/
          if (tabbuil == 'tab_sale') {
            $('.fbc-group.sale').addClass('active-fbc');
            //loadTitleBuilding('For Sale');
          } else if (tabbuil == 'tab_rent') {
            $('.fbc-group.rent').addClass('active-fbc');
            //loadTitleBuilding('For Rent');
          } else if (tabbuil == 'tab_sold') {
            $('.fbc-group.sold').addClass('active-fbc');
            //loadTitleBuilding('Sold');
          } else if (tabbuil == 'tab_pending') {
            $('.fbc-group.pending').addClass('active-fbc');
            //loadTitleBuilding('Pending');
          }
          /*botones tabs lateral mobile*/
          ib_change_view( viebuil ,tabbuil );
        });


        $(document).on('change','#filter-views select',function() {
          var tabbuil=$('.ib_collection_tab').val();
          ib_change_view_object_device($(this),tabbuil,$('.ib_collection_view'));
        });                   

        $(document).on('click','#filter-views li',function() {
          var tabbuil=$('.ib_collection_tab').val();
          ib_change_view_object_device($(this),tabbuil,$('.ib_collection_view'));
        });

        $(document).on('click','.flex-open-tb-sale button, .flex-open-tb-rent button, .flex-open-tb-sold button, .flex-open-tb-pending button',function() {
          $('.fbc-group').removeClass('active-fbc');
          console.log($(this).parent('li'));


          var wrapTab = $(".ms-wrap-tab");
          if (wrapTab.length) {
            $(".ms-item-tab").removeClass("active in");
            $("#tabAvailability").addClass("active in");
            $(".ms-nav-tab nav ul li .ms-tab").removeClass("active");
            $(".ms-nav-tab nav ul li .ms-tab[data-id='tabAvailability']").addClass("active");
          }

          if($(this).parent('li').hasClass('sale')){
            $('#flex_tab_sale').click();
          }else if ($(this).parent('li').hasClass('rent')){
            $('#flex_tab_rent').click();
          }else if ($(this).parent('li').hasClass('sold')){
            $('#flex_tab_sold').click();
          }else if ($(this).parent('li').hasClass('pending')){
            $('#flex_tab_pending').click();
          }
          $(this).parent('li').addClass('active-fbc');          

          if (idxboostCollecBuil.success != undefined && idxboostCollecBuil.success != false){
            var elementPosition = $(".idxboost-collection-show-desktop").offset();
            var positionMove = (elementPosition.top) - 300;
            $("html, body").animate({scrollTop:positionMove},'slow');
          }
                    
        });                

        $(document).on("click", "#modal_login .close-modal", function(event) {
            event.preventDefault();
            $(".ib-pbtnclose").click();
        });                

        $('.overlay_modal_closer').click(function(){
                event.preventDefault();
                $(".ib-pbtnclose").click();
        });

        $(document).on("click", ".flex-tbl-link", function(event) {
          event.preventDefault();
            var mlsNumber = $(this).data('mls');
            var isSold = $(this).data('type');
            if (isSold=='sold'){
              var permalink = $(this).data("permalink");
              if (permalink.length) {
                window.location.href = permalink;
              }
            }else{
                originalPositionY = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);

              loadPropertyInModal(mlsNumber);
            }
        });

        $('.idxboost_collection_tab_sale, .idxboost_collection_tab_rent,.idxboost_collection_tab_pending').on('click','.view-detail ',function(event) {
          event.preventDefault();
            var mlsNumber = $(this).parent('li').data('mls');
            console.log(mlsNumber);
            originalPositionY = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop);
            loadPropertyInModal(mlsNumber);          
        });

        $(document).on('click','#sale-count-uni-cons',function() {
          $('#flex_tab_sale').click();
          var elementPosition = $(".idxboost-type-view-wrap-result").offset();  
          var positionMove = (elementPosition.top) - 300;
          $("html, body").animate({scrollTop:positionMove},'slow');                              
        });                

        $(document).on('click','#rent-count-uni-cons',function() {
          $('#flex_tab_rent').click();
          var elementPosition = $(".idxboost-type-view-wrap-result").offset();  
          var positionMove = (elementPosition.top) - 300;
          $("html, body").animate({scrollTop:positionMove},'slow');                              
        });

        $(document).on('click','#pending-count-uni-cons',function() {
          $('#flex_tab_pending').click();
          var elementPosition = $(".idxboost-type-view-wrap-result").offset();  
          var positionMove = (elementPosition.top) - 300;
          $("html, body").animate({scrollTop:positionMove},'slow');                              
        });
        
        
        $(document).on('click','#sold-count-uni-cons',function() {
          $('#flex_tab_sold').click();
          var elementPosition = $(".idxboost-type-view-wrap-result").offset();  
          var positionMove = (elementPosition.top) - 300;
          $("html, body").animate({scrollTop:positionMove},'slow');                              
        });


      }
    });
});

})(jQuery);
function idxboostListobj(response_data,list_bed,name_table,type){
  var auxincre=0;
  auxtextobj='';
  list_bed.sort(function(a,b){ if (a > b) return -1; if (a < b) return 1; if  (a == b) return 0; });
  list_bed.forEach(function(element) {
  auxincre=auxincre+1;
  
  var txtnameprice=word_translate.asking_price;
  var txtdom='DOM';
  var txtnamefoot=word_translate.days_on_market;
    var text_head='';
    var text_head_for_type='';

    text_head_for_type=word_translate.bedroom_condos;
  if (type=='sold') {
    txtdom='Date';
    txtnameprice=word_translate.sold_price;
    txtnamefoot=word_translate.sold_date;
    text_head=word_translate.sold_at;

  }else if (type=='sale') {
    text_head=word_translate.for_sale_at;
  }else if (type=='pending') {
    text_head=word_translate.pending_at;
  }else if (type=='rent') {
    text_head_for_type=word_translate.bedroom_apartments;
    text_head=word_translate.for_rent_at;
  }

  if (idxboostCollecBuil.payload.is_marketing) {
    if (element==0)  auxtextobj +='<h2 class="title-thumbs">Studio</h2>'; else auxtextobj +='<h2 class="title-thumbs">'+element+' '+text_head_for_type+' '+text_head+' '+idxboostCollecBuil.payload.building_name+'</h2>';
  }else{
    if (element==0)  auxtextobj +='<h2 class="title-thumbs">Studio</h2>'; else auxtextobj +='<h2 class="title-thumbs">'+element+' '+text_head_for_type+'</h2>';
  }
  

  auxtextobj +='<div class="tbl_properties_wrapper">';
  auxtextobj += 
                       '<table class="display" id="dataTable-'+name_table+'-'+auxincre+'" cellspacing="0" width="100%">'+
                       '<thead>'+
                       '<tr><th class="dt-center sorting">'+word_translate.unit+'</th>'+
                       '<th class="dt-center sorting class_asking_prince">'+
                       '<span class="ms-mb-text">'+txtnameprice+'</span>'+
                       '<span class="ms-pc-text">'+txtnameprice+'</span>'+
                       '</th>'+
                       '<th class="dt-center sorting">%/$</th>'+
                       '<th class="dt-center sorting">'+
                       '<span class="ms-mb-text">B/B</span>'+
                       '<span class="ms-pc-text">'+word_translate.beds+'/'+word_translate.baths+'</span>'+
                       '</th>'+
                       '<th class="dt-center sorting show-desktop">'+
                       '<span class="ms-mb-text">Size</span>'+
                       '<span class="ms-pc-text">'+word_translate.living_size+'</span>'+
                       '</th>'+
                       '<th class="dt-center sorting show-desktop">'+
                       '<span class="ms-mb-text">$/sqft</span>'+
                       '<span class="ms-pc-text">'+word_translate.price+'/'+word_translate.sqft+'</span>'+
                       '</th>'+
                       '<th class="dt-center sorting show-desktop">'+
                       '<span class="ms-mb-text">'+txtdom+'</span>'+
                       '<span class="ms-pc-text">'+txtnamefoot+'</span>'+
                       '</th>'+
                       '</tr>'+
                       '</thead>'+
                       '<tbody>';

                       var responseauxtext='';
                       response_data.forEach(function(elementsec) {
                        if (elementsec[1]==element) {
                          responseauxtext +=elementsec[0];
                        }
                       });
                       auxtextobj += responseauxtext;
                       auxtextobj +='</tbody></table></div>';
                       });
                       return auxtextobj;
                     }

  function idxboostCollectiIn(){
                       var listsale='',listrent='',listsold='',idxboostcollectionsale='',idxboostcollectionrent='',textmodeview='',optionsale='',optionrent='',optionsold='';

                       if (idxboostCollecBuil["payload"]["properties"]["sale"]["count"]>0){
                         listsale='<li class="sale"><button id="sale-count-uni-cons">'+idxboostCollecBuil["payload"]["properties"]["sale"]["count"]+'<span>For Sale</span></button></li>';
                         idxboostcollectionsale='<li class="active" fortab="tab_sale" forview="sale_list" id="flex_tab_sale"><button> <span>for sale</span></button></li>';
                         optionsale='<option value="sale">For Sale</option>';
                       }
                       if (idxboostCollecBuil["payload"]["properties"]["rent"]["count"]>0){
                          listrent='<li class="sale"><button id="sale-count-uni-cons">'+idxboostCollecBuil["payload"]["properties"]["rent"]["count"]+'<span>For Rent</span></button></li>';
                          idxboostcollectionrent='<li fortab="tab_rent" forview="rent_list" id="flex_tab_rent"><button> <span>For Rent</span></button></li>';
                          optionrent='<option value="rent">For Rent</option>';
                      }
                       if (idxboostCollecBuil["payload"]["properties"]["sold"]["count"]>0){
                          listsold='<li class="sale"><button id="sale-count-uni-cons">'+idxboostCollecBuil["payload"]["properties"]["sold"]["count"]+'<span>Sold</span></button></li>';
                          idxboostcollectionsold='<li fortab="tab_sold" forview="sold_list" id="flex_tab_sold"><button> <span>Sold</span></button></li>';
                          optionsold='<option value="sold">Sold</option>';
                      }


                       if (idxboostCollecBuil["payload"]["modo_view"]==2){ textmodeview='list'; }else{textmodeview='grid';  }
                       jQuery('.idxboost-type-view-wrap-result').addClass('view-'+textmodeview);

                       if (idxboostCollecBuil["payload"]["type_building"]==0){
                         //$('.idxboost_collection_filterby select').append(optionsale+optionrent+optionsold);
                       }


                       jQuery('.idxboost_collection_filterviews select option').addClass(textmodeview);
                       /*OPERACIONES*/
                       idxboostCollecBuil["payload"]["properties"]["sold"]["items"].forEach(function(element,index) {
                        if (listbedsold.indexOf(parseFloat(element['bed']))==-1) {
                          listbedsold.push(parseFloat(element['bed']));
                        }
                        var listcol=idxboostListCollectionForSold(element);
                        responseitemsold.push(listcol);
                        responseitemsoldgrid +=idxboostListCollectionGrid(element,index,'sold');
                       });

                       idxboostCollecBuil["payload"]["properties"]["sale"]["items"].forEach(function(element,index) {
                        if (listbedsale.indexOf(parseFloat(element['bed']) )==-1) {
                          listbedsale.push(parseFloat(element['bed']));
                        }
                        responseitemsale.push(idxboostListCollection(element));
                        responseitemsalegrid +=idxboostListCollectionGrid(element,index,'sale');
                       });

                       idxboostCollecBuil["payload"]["properties"]["pending"]["items"].forEach(function(element,index) {
                        if (listbedpending.indexOf(parseFloat(element['bed']) )==-1) {
                          listbedpending.push(parseFloat(element['bed']));
                        }
                        responseitempending.push(idxboostListCollection(element));
                        responseitemsoldpending +=idxboostListCollectionGrid(element,index,'pending');
                       });


                       idxboostCollecBuil["payload"]["properties"]["rent"]["items"].forEach(function(element,index) {
                        if (listbedrent.indexOf(parseFloat(element['bed']))==-1) {
                          listbedrent.push(parseFloat(element['bed']));
                        }
                        responseitemrent.push(idxboostListCollection(element));
                        responseitemrentgrid +=idxboostListCollectionGrid(element,index,'rent');
                       });

                       //sale list print
                       var htmlsale=idxboostListobj(responseitemsale,listbedsale,'sale','sale');
                       jQuery('.idxboost_collection_sale_list').html(htmlsale).ready(function() {  idxboostTypeIcon();   });
                       //sale list print

                       //pending list print
                       var htmlpending=idxboostListobj(responseitempending,listbedpending,'pending','pending');
                       jQuery('.idxboost_collection_pending_list').html(htmlpending).ready(function() {  idxboostTypeIcon();   });
                       //pending list print

                       //rent list print 
                       var htmlrent=idxboostListobj(responseitemrent,listbedrent,'rent','rent');
                       jQuery('.idxboost_collection_rent_list').html(htmlrent).ready(function() {  idxboostTypeIcon();   });
                       //rent list print

                       //sold list print 
                       var htmlsold=idxboostListobj(responseitemsold,listbedsold,'sold','sold');
                       jQuery('.idxboost_collection_sold_list').html(htmlsold).ready(function() {  idxboostTypeIcon();   });
                       //sold list print                       

                      /*FIN OPERACIONES*/
                      idxboosttabview();

                      if (tab_idx=='#!for-sale' && idxboostCollecBuil["payload"]["properties"]["sale"]["count"]>0){
                        $('#flex_tab_sale').click();
                      }else if(tab_idx=='#!for-rent' && idxboostCollecBuil["payload"]["properties"]["rent"]["count"]>0){
                        $('#flex_tab_rent').click();
                      }else if (tab_idx=='#!sold' && idxboostCollecBuil["payload"]["properties"]["sold"]["count"]>0){
                        $('#flex_tab_sold').click();
                      }else if (tab_idx=='#!pending' && idxboostCollecBuil["payload"]["properties"]["pending"]["count"]>0){
                        $('#flex_tab_pending').click();
                      }
                      //tablasidx=$('table.display').DataTable({ "paging": false }).order([1, 'desc']).draw();
                      var list_tables_object=jQuery('.tbl_properties_wrapper .display'); 

                      for(i=0;i<list_tables_object.length;i++){ 
                        var idtable=list_tables_object.eq(i).attr('id');  
                        console.log(idtable);
                        expresion = new RegExp('^dataTable-sold.*$','i');
                        if (idtable.match(expresion) != null) {
                          jQuery('#'+idtable).DataTable({ "paging": false,"aoColumns": [null,null,null,null,null,null,{ "sType": "date-eu" }] }).order([6, 'desc']).draw();
                        }else{
                          jQuery('#'+idtable).DataTable({ "paging": false }).order([1, 'desc']).draw();
                        }
                      } 

  }

function idxboostListCollectionForSold(element){
    var responseitems='',arraylist=[];
                        //LISTINI
                        vunits="";
                        if (element['unit'] != '' && element['unit'] != undefined ) {
                          vunits= element['unit'];
                        }
                        
                        responseitems +='<tr class="flex-tbl-link" data-mls="'+element['mls_num']+'" data-type="sold" data-permalink="'+idxboost_collection_params["siteUrl"]+'/property/sold-'+element['slug']+'">';
                        responseitems += '<td><div class="unit propertie" data-mls="'+element['mls_num']+'">';
                        if (element['is_favorite']==1) {
                          responseitems +='<button class="clidxboost-btn-check flex-favorite-btn" data-alert-token="'+element['token_alert']+'"><span class="clidxboost-icon-check clidxboost-icon-check-list active flex-active-fav"></span></button><span>'+element['unit']+'</span>';
                        }else{
                          responseitems +='<button class="clidxboost-btn-check flex-favorite-btn"><span class="clidxboost-icon-check clidxboost-icon-check-list"></span></button><span>'+vunits+'</span>';
                        }
                        responseitems +='</div></td><td><div class="asking-number blue">$ '+_.formatPrice(element['price_sold'])+'</div></td>';
                        var textreduced='black';
                        var textreducedmon='0%';

                        if (element['reduced'] !='') {
                          if (element['reduced'] !== '' && element['reduced'] < 0 ) {
                            textreduced='red';
                          }else if(element['reduced'] !== '' && element['reduced'] >= 0 ){
                            textreduced='green';
                          }
                        }

                        if (element['reduced'] !== 0  )
                          textreducedmon=element['reduced']+'%';
                        

                        responseitems +='<td><div class="porcentaje '+textreduced+'">'+textreducedmon+'</div></td>';
                        responseitems +='<td><div class="beds">'+element['bed']+' / '+element['bath']+' / '+element['baths_half']+'</div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="beds">'+_.formatPrice(element['sqft'])+' <span> Sq.Ft.</span></div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="price">$'+element['price_sqft']+'</div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="dayson">'+element['parce_date_close']+'</div></td></tr>';
                        //LISTFIN
                        arraylist.push(responseitems);
                        arraylist.push(element['bed']);
                        return arraylist;
  }  

  function idxboostListCollection(element){
    var responseitems='',arraylist=[];
                        //LISTINI
                        vunits="";
                        if (element['unit'] != '' && element['unit'] != undefined ) {
                          vunits= element['unit'];
                        }
                        
                        responseitems +='<tr class="flex-tbl-link" data-mls="'+element['mls_num']+'" data-type="no-sold" data-permalink="'+idxboost_collection_params["siteUrl"]+'/property/'+element['slug']+'">';
                        responseitems += '<td><div class="unit propertie" data-mls="'+element['mls_num']+'">';
                        if (element['is_favorite']==1) {
                          responseitems +='<button class="clidxboost-btn-check flex-favorite-btn" data-alert-token="'+element['token_alert']+'"><span class="clidxboost-icon-check clidxboost-icon-check-list active flex-active-fav"></span></button><span>'+element['unit']+'</span>';
                        }else{
                          responseitems +='<button class="clidxboost-btn-check flex-favorite-btn"><span class="clidxboost-icon-check clidxboost-icon-check-list"></span></button><span>'+vunits+'</span>';
                        }
                        responseitems +='</div></td><td><div class="asking-number blue">$ '+_.formatPrice(element['price'])+'</div></td>';
                        var textreduced='';
                        if (element['reduced'] !== '' && element['reduced'] < 0 ) {
                          textreduced='red';
                        }else if(element['reduced'] !== '' && element['reduced'] >= 0 ){
                          textreduced='green';
                        }else{
                          textreduced='black';
                        }
                        var textreducedmon=0;

                        if (element['reduced'] !== 0  )
                          textreducedmon=element['reduced']+'%';
                        else
                          textreducedmon='0%';

                        var pricetexsale=0;
                        if (element['sqft'] > 0 ) { pricetexsale=element['price']/element['sqft'] }else { pricetexsale=0; }

                        responseitems +='<td><div class="porcentaje '+textreduced+'">'+textreducedmon+'</div></td>';
                        responseitems +='<td><div class="beds">'+element['bed']+' / '+element['bath']+' / '+element['baths_half']+'</div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="beds">'+_.formatPrice(element['sqft'])+' <span> Sq.Ft.</span></div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="price">$'+_.formatPrice(pricetexsale)+'</div></td>';
                        responseitems +='<td class="table-beds show-desktop"><div class="dayson">'+element['days_market']+'</div></td></tr>';
                        //LISTFIN
                        arraylist.push(responseitems);
                        arraylist.push(element['bed']);
                        return arraylist;
  }

  function idxboostListCollectionGrid(element,count_item,type_property) {
    var htmlgrid='';
    var price=_.formatPrice(element['price']);
    var slug_property=idxboost_collection_params["siteUrl"]+'/property/'+element['slug'];
    if (type_property=='sold'){
      price=_.formatPrice(element['price_sold']);
      slug_property=idxboost_collection_params["siteUrl"]+'/property/sold-'+element['slug'];
    }
    htmlgrid +='<li class="propertie" data-id="'+element['mls_num']+'" data-mls="'+element['mls_num']+'" data-counter="'+count_item+'">';
    /*
      if (element['status']!=null || element['status']!=undefined ){
          if(element['status'] == 5){
            htmlgrid +='<div class="flex-property-new-listing">'+word_translate.rented+'!</div>';
          }else if(element['status']== 2){
             htmlgrid +='<div class="flex-property-new-listing">'+word_translate.sold+'!</div>';
          }else if(element['status'] != 1){
            htmlgrid +='<div class="flex-property-new-listing">'+word_translate.pending+'!</div>';
          }else if(element['recently_listed'] == 'yes'){
            htmlgrid +='<div class="flex-property-new-listing">'+word_translate.new_listing+'!</div>';
          }
      }
      */
    htmlgrid +='<h2 title="'+element['address_short']+' '+element['address_large']+'"><span>'+element['address_short'].replace('# ','#')+'</span></h2>';

    if (idxboostCollecBuil.payload.is_marketing != false) {
      var txt_marketing ='';
      if(type_property=='sold'){
        txt_marketing = word_translate.condos_sold;
      }else if (type_property=='sale') {
        txt_marketing = word_translate.condos_for_sale;
      }else if (type_property=='rent') {
        txt_marketing = word_translate.apartments_for_rent;
      }else if (type_property=='pending') {
        txt_marketing = word_translate.condos_pending;
      }
      htmlgrid +='<h3 class="ms-type-bl">'+txt_marketing+'<span>'+idxboostCollecBuil.payload.building_name+'</span></h3>';
    }
    
    htmlgrid +='<ul class="features">';
    htmlgrid +='<li class="address">'+element['address_large']+'</li>';
    htmlgrid +='<li class="price">$'+price+'</li>';
    htmlgrid +='<li class="pr down">2.05%</li>';
    htmlgrid +='<li class="beds">'+element['bed']+' <span>'+word_translate.beds+' </span></li>';
    htmlgrid +='<li class="baths">'+element['bath']+' <span>'+word_translate.baths+' </span></li>';
    htmlgrid +='<li class="living-size"> <span>'+_.formatPrice(element['sqft'])+'</span>'+word_translate.sqft+' <span>(452 m2)</span></li>';
    htmlgrid +='<li class="price-sf"><span>$'+_.formatPrice(element['price_sqft']) + ' </span>/ '+word_translate.sqft+'<span>($' + element['price_sqft_m2'] + ' m2)</span></li>';
    htmlgrid +='<li class="build-year"><span>Built </span>2015</li>';
    htmlgrid +='<li class="development"><span>'+element['city_name']+'</span></li>';
    htmlgrid +='</ul>';
    htmlgrid +='<div class="wrap-slider">';
    htmlgrid +='<ul>';
    var elementgallery='';
    element["gallery"].forEach(function(itemimage,aux) {
      if (aux==0) {
        elementgallery +='<li class="flex-slider-current"><img class="flex-lazy-image" data-original="'+itemimage+'"></li>';
      }else{
        elementgallery +='<li class="flex-slider-item-hidden"><img class="flex-lazy-image" data-original="'+itemimage+'"></li>';
      }
    });
    htmlgrid +=elementgallery;
    htmlgrid +='</ul><button class="prev flex-slider-prev"><span class="clidxboost-icon-arrow-select"></span></button><button class="next flex-slider-next"><span class="clidxboost-icon-arrow-select"></span></button>';

    if (type_property!='sold'){
      if(element['is_favorite']==1) {
        htmlgrid +='<button class="clidxboost-btn-check flex-favorite-btn" data-alert-token="'+element['token_alert']+'"><span class="clidxboost-icon-check clidxboost-icon-check-list active"></span></button>';
      }else{
        htmlgrid +='<button class="clidxboost-btn-check flex-favorite-btn"><span class="clidxboost-icon-check clidxboost-icon-check-list"></span></button>';
      }
    }

    htmlgrid +='</div>';
    htmlgrid +='<a class="view-detail " href="'+slug_property+'" data-modal="modal_property_detail" data-position="0" rel="nofollow">'+element['address_large']+'</a></li>';
    return htmlgrid;
}

var fortab,type_view;
  function idxboosttabview(){
          fortab=jQuery('.idxboost-collection-show-desktop li.active').attr('fortab');
          type_view=jQuery('.idxboost_collection_filterviews ul li.active');
          var is_class_active=0;
          
          if (type_view.length > 0 )
            is_class_active = type_view.attr('class').indexOf("grid");

        if(fortab=="tab_sale"){
          if( is_class_active != -1 && jQuery('.idxboost_collection_tab_sale').find('li').length==0  ){
            if( jQuery('.idxboost_collection_tab_sale').find('li').length==0 ) auxscreensale=0; 
            if (auxscreensale==0){auxscreensale=auxscreensale+1; jQuery('.idxboost_collection_tab_sale').html(responseitemsalegrid).ready(function() {  idxboostTypeIcon();   }); console.log('entro sale'); }
          }
        }else  if(fortab=="tab_rent" && jQuery('.idxboost_collection_tab_rent').find('li').length==0 ) {
          if( is_class_active != -1){
            if( jQuery('.idxboost_collection_tab_rent').find('li').length==0 ) auxscreensale=0; 
            if (auxscreenrent==0){auxscreenrent=auxscreenrent+1; jQuery('.idxboost_collection_tab_rent').html(responseitemrentgrid).ready(function() {  idxboostTypeIcon();   }); console.log('entro rent'); }
          }

        }else  if(fortab=="tab_sold" && jQuery('.idxboost_collection_tab_sold').find('li').length==0 ) {
          if( is_class_active != -1){
            if( jQuery('.idxboost_collection_tab_sold').find('li').length==0 ) auxscreensold=0; 
            if (auxscreensold==0){auxscreensold=auxscreensold+1; jQuery('.idxboost_collection_tab_sold').html(responseitemsoldgrid).ready(function() {  idxboostTypeIcon();   }); console.log('entro sold'); }
          }
        }else  if(fortab=="tab_pending" && jQuery('.idxboost_collection_tab_pending').find('li').length==0 ) {
          if( is_class_active != -1){
            if( jQuery('.idxboost_collection_tab_pending').find('li').length==0 ) auxscreenpending=0; 
            if (auxscreenpending==0){auxscreenpending=auxscreenpending+1; jQuery('.idxboost_collection_tab_pending').html(responseitemsoldpending).ready(function() {  idxboostTypeIcon();   }); console.log('entro pending'); }
          }
        }
        /*INICIALIZAMOS LA VARIABLE DE LAZYLOAD*/
        if (myLazyLoad != undefined){
          myLazyLoad.update();
        }else{
          myLazyLoad = new LazyLoad();
          myLazyLoad.update();
        }        
  }


function loadTitleBuilding(elementActive) {

  if( typeof(idx_is_marketing) != undefined && typeof(idx_is_marketing) != 'undefined' && idx_is_marketing ){

    //Cambiando el titulo principal
    var elementActive = elementActive;
    var titleMainContent = $(".title-page");
    var titleSpanText = titleMainContent.find('span').text();
    var spanText = "<span>" + titleSpanText + "</span>";
    var titleClearSpan = titleMainContent.attr('data-title');
    //$(".title-page").html(titleClearSpan + " Condos " + elementActive + spanText);

    //Cambiando el titulo de las tablas
    var tableText = " " + elementActive + " at " + titleClearSpan;

    $("#view_list .item_view_db .title-thumbs").each(function () {
      var defaultText = $(this).attr('data-title');
      $(this).text(defaultText+tableText);
    });

    //Agregando titulo a la descripción
    var descriptionBuilding = $("#property-description");
    if (descriptionBuilding.length) {
      var msBigTitle = $("#property-description .ms-big-text");
      if(msBigTitle.length  == 0){
        descriptionBuilding.prepend('<h2 class="ms-big-text">Description of ' + titleClearSpan + '</h2>');
        var finalTop = ($(".property-details.r-hidden").height()) + ($(".panel-options").height()) + 26;
        var propertyDescription = $(".property-description");
        if (propertyDescription.length) {
          var heightContent = propertyDescription.height();
          var finalHeight = heightContent + 35;
        } else {
          var finalHeight = 0;
          $(".temporal-content-bl").css({
            'border-bottom': '0'
          });
        }
        $(".temporal-content-bl").height(finalHeight).css({
          'top': finalTop + 'px'
        }).animate({
          'opacity': '1'
        });
      }
    }

    //Asignando el titulo de formulario
    var agentName = $(".form-content.large-form .avatar-information h2").text();
    var formTitle = $(".form-content.large-form .flex_idx_building_form .ms-big-text");
    if(formTitle.length == 0){
      $(".form-content.large-form .flex_idx_building_form").prepend('<h3 class="ms-big-text">Contact the ' + titleClearSpan + ' condo experts.</h3>');
    }
    
    //Asignando el nombre del building a los laterales
    $(".aside .subtitle-b").each(function () {
      var defaultText = $(this).attr('data-title');
      $(this).text(defaultText+" at " + titleClearSpan);
    });

    //Asignando texto al formulario
    if($("#refentElement").val() == 0){
      var fromTextArea = jQuery.trim($(".form-content .gform_body .textarea").val());
      var newFromTextArea = fromTextArea + ' at ' + jQuery.trim(titleClearSpan);
      $(".form-content .gform_body .textarea").attr("value", newFromTextArea).text(newFromTextArea);
      $("#refentElement").val('1');
    }

    //Asignando titulo extra
    var sumaTotal = 0;
    var idElement = $(".item_view_db.active").attr("id");
    var tableElement = $("#" + idElement).find("table");
    tableElement.each(function () {
      sumaTotal = tableElement.find("tbody tr").length;
    });

    var extraTitle = $(".mode_view#view_list .ms-bx-title");
    if (extraTitle.length) {
      $(".mode_view#view_list .ms-bx-title").text(sumaTotal + ' Units ' + elementActive + ' at ' + titleClearSpan);
    }else{
      $(".mode_view#view_list").prepend('<h2 class="ms-bx-title">' + sumaTotal + ' Units ' + elementActive + ' at ' + titleClearSpan + '</h2>');
    }
  }
}


jQuery.extend( jQuery.fn.dataTableExt.oSort, {
"date-eu-pre": function ( a ) {
    var ukDatea = a.replace(/<[^>]*>?/gm, '').split('-');
    return (ukDatea[2] + ukDatea[0] + ukDatea[1]) * 1;
},

"date-eu-asc": function ( a, b ) {
    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
},

"date-eu-desc": function ( a, b ) {
    return ((a < b) ? 1 : ((a > b) ? -1 : 0));
}
} );