(function ($) {

var flex_idx_xhr_status = false;

$(function() {
      $(".btn_import_building").on("click", function(event) {
        event.preventDefault();
        $('.flex-idx-admin-message').show().text('Download register, please wait...!!').addClass('flex-idx-admin-message-error').removeClass('flex-idx-admin-message-success');
        $('.btn_import_building').hide();
        $.ajax({
            url: flex_idx_admin_import_js.ajaxUrl,
            method: "POST",
            data: {
              action: "idxboost_import_building"
            },
            dataType: "json",
            success: function(data) {

              $.ajax({
                  url: flex_idx_admin_import_js.ajaxUrl,
                  method: "POST",
                  data: {
                    action: "idx_import_tgbuilding_update"
                  },
                  dataType: "json",
                  success: function(data) {
                    alert('import data success');
                    console.log(data);
                    $('.flex-idx-admin-message').text('import data success !!');
                    $('.flex-idx-admin-message').addClass('flex-idx-admin-message-success').removeClass('flex-idx-admin-message-error');
                    $('.btn_import_building').show();
                  }
              });              

            }
        });
      }); 
    
});

})(jQuery);
