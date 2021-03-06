<style>
  #idx-upload-form form{
    width: 100%;
    max-width: 570px;
    margin-left: 50px;
  }
  #idx-upload-form{
    height: calc(100vh - 116px);
    margin-bottom: 0;
    background-image: url('<?php echo FLEX_IDX_URI; ?>images/rocket.png');
    background-position: 110px 65px;
    background-repeat: no-repeat;
  }
  #idx-upload-form .logo-idx{
    margin-bottom: 30px;
    margin-top: 40px;
  }
  #idx-upload-form h1{
    font-size: 24px;
    font-weight: 600;
    margin-left: 50px;
  }
  #idx-upload-form input[type=text]{
    -webkit-box-shadow: none;
    background-color: #fff;
    border: 1px solid #FFF;
    box-shadow: none;
    color: #32373c;
    height: 47px;
    padding: 3px 15px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  #idx-upload-form .form-table label{
    cursor: pointer;
    font-weight: 600;
    margin-bottom: 10px;
    display: block;
  }
  #idx-upload-form .form-table td{
    padding-left: 0;
  }
  #idx-upload-form .info-upload{
    margin-top: 20px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
  #idx-upload-form .info-upload .info-item{
    width: 150px;
    height: 90px;
    margin-right: 14px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #606467;
    transition: all .3s;
    text-decoration: none;
  }
  #idx-upload-form .info-upload .info-item:hover{
    background-color: #333;
  }
  #idx-upload-form .info-upload .info-item span{
    display: block;
    text-align: center;
    color: #FFF;
    font-weight: 400;
    font-size: 14px;
    margin: 3px 0;
  }
  #idx-upload-form .info-upload .info-item .icon-tuerca,
  #idx-upload-form .info-upload .info-item .icon-filtro,
  #idx-upload-form .info-upload .info-item .icon-edificio,
  #idx-upload-form .info-upload .info-item .icon-customizer{
    width: 45px;
    height: 35px;
    margin: 0 auto;
    background-repeat: no-repeat;
    background-image: url('<?php echo FLEX_IDX_URI; ?>images/icons-idx.png');
  }
  #idx-upload-form .info-upload .info-item .icon-tuerca{
    background-position: -2px -1px;
  }
  #idx-upload-form .info-upload .info-item .icon-edificio{
    background-position:-49px -3px;
    width: 34px;
    height: 35px;
  }
  #idx-upload-form .info-upload .info-item .icon-filtro{
    width: 37px;
    background-position: -92px -4px;
  }
  #idx-upload-form .info-upload .info-item .icon-customizer {
    background-position: -200px 2px;
  }
  #idx-upload-form .btn-content-idx{
    display: inline-block;
    position: relative;
    overflow: hidden;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  #idx-upload-form .btn-content-idx:before{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    background: -webkit-gradient(linear, left top, right top, from(#fa6630), to(#be155e));
    background: -webkit-linear-gradient(left, #fa6630, #be155e);
    background: -o-linear-gradient(left, #fa6630, #be155e);
    background: linear-gradient(to right, #fa6630, #be155e);
    top: 0;
    left: 0;
    display: block;
    transition: all .3s;
    z-index: 0;
  }
  #idx-upload-form .btn-content-idx:after{
    content: "";
    width: 100%;
    height: 100%;
    background: #333;
    top: 0;
    left: 0;
    display: block;
    transition: all .3s;
    z-index: 1;
    opacity: 0;
    position: absolute;
  }
  #idx-upload-form .btn-content-idx:hover:after{
    opacity: 1;
  }
  #idx-upload-form .btn-content-idx input{
    background-color: transparent;
    position: relative;
    z-index: 2;
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 0;
    outline: 0;
    width: 280px;
    height: 54px;
    color: #FFF;
    font-size: 18px;
    font-weight: 600;
    padding-left: 55px;
    padding-right: 45px;
  }
  #idx-upload-form .btn-content-idx .icon-update{
    position: absolute;
    background: url('<?php echo FLEX_IDX_URI; ?>images/icons-idx.png') no-repeat -142px -5px;
    width: 24px;
    height: 24px;
    display: block;
    left: 17px;
    top: 17px;
    z-index: 3;
  }
  #idx-upload-form .info-synchronize p{
    font-size: 14px;
    padding-left: 25px;
    position: relative;
  }
  #idx-upload-form .info-synchronize ul{
    position: relative;
  }
  #idx-upload-form .info-synchronize p:before{
    content: "";
    display: block;
    background: url('<?php echo FLEX_IDX_URI; ?>images/icons-idx.png') no-repeat -181px -9px;
    width: 18px;
    height: 18px;
    position: absolute;
    top: 0;
    left: 0;
  }
  #idx-upload-form .info-synchronize ul li{
    position: relative;
    padding-left: 15px;
    margin-bottom: 3px;
    font-size: 13px;
  }
  #idx-upload-form .info-synchronize ul li:before{
    content: "";
    width: 4px;
    height: 4px;
    background-color: #333;
    position: absolute;
    top: 3px;
    left: 0;
    display: block;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
  }

  @media (max-width: 540px){
    #idx-upload-form h1,
    #idx-upload-form form{
      margin-left: 0;
    }
    #idx-upload-form .logo-idx img{
      width: 100%;
      max-width: 440px;
    }
  }
  @media (max-width: 480px){
    #idx-upload-form h1,
    #idx-upload-form form{
      margin-left: 0;
    }
    #idx-upload-form .logo-idx img{
      width: 100%;
      max-width: 320px;
    }
  }
  @media (max-width: 320px){
    #idx-upload-form .info-upload{
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    #idx-upload-form .info-upload .info-item {
      width: 100%;
      margin-bottom: 10px;
    }
    #idx-upload-form .btn-content-idx{
      width: 100%;
    }
  }
  .flex_idx_omit_import_data {
    margin-left: 30px;
  }
</style>
<div class="wrap" id="idx-upload-form">
  <div id="flex-idx-status"></div>
  <div class="logo-idx">
    <img src="<?php echo FLEX_IDX_URI; ?>images/logo-idx.png">
  </div>
  <h1>IDX Boost Main Settings</h1>
  <form method="post" id="flex_idx_client_form">
    <input type="hidden" name="action" value="flex_connect">
    <table class="form-table">
      <tbody>
        <tr>
          <td>
            <label for="flex-idx-settings-client-id">Registration Key</label>
            <input type="text" id="flex-idx-settings-client-id" name="idxboost_registration_key" value="<?php echo $idxboost_registration_key; ?>" class="widefat" required>
          </td>
        </tr>
      </tbody>
    </table>
    <?php if ('active' == get_option('idxboost_client_status')): ?>
    <div class="info-upload">
      <a href="<?php echo admin_url('customize.php', '/'); ?>" class="info-item">
        <div class="icon-customizer"></div>
        <span>Customizer</span>
      </a>
      <a href="<?php echo admin_url('edit.php?post_type=flex-idx-pages', '/'); ?>" class="info-item">
        <div class="icon-tuerca"></div>
        <span>My IDX Pages</span>
      </a>
      <a href="<?php echo admin_url('edit.php?post_type=flex-filter-pages', '/'); ?>" class="info-item">
        <div class="icon-filtro"></div>
        <span>My IDX Filters</span>
      </a>
      <a href="<?php echo admin_url('edit.php?post_type=flex-idx-building', '/'); ?>" class="info-item">
        <div class="icon-edificio"></div>
        <span>My IDX Buildings</span>
      </a>
    </div>
    <?php endif; ?>

    <p class="submit">
      <span class="btn-content-idx">
        <input type="submit" value="Save Changes" id="flex_idx_verify_credentials" class="btn-site">
        <span class="icon-update"></span>
      </span>
    </p>

    <?php
    if (('active' == get_option('idxboost_client_status')) && (false === get_option('idxboost_import_initial_data'))):
      $c_search_settings = get_option("idxboost_search_settings");
      if (isset($c_search_settings["board_id"]) && ("1" == $c_search_settings["board_id"])):
    ?>
    <?php /*
    <p>
      <button id="flex_idx_import_data" type="button" style="padding:10px 30px;font-size:15px;background:#31a01e;border:0;color:#fff;cursor:pointer;font-weight:normal;">Import Data?</button>
      <a href="#" id="flex_idx_omit_import_data" class="flex_idx_omit_import_data"> No, Thanks.</a>
    </p> */ ?>
    <?php endif; endif; ?>
    <div class="info-synchronize">
      <p>Important! Some edits from the Control Panel need to synchronized with your Wordpress dashboard to reflect in your website:</p>
      <ul>
        <li>All edits of personal information from My Account (Phone, email, etc...)</li>
        <li>New Filter Pages &amp; Building Pages (Only the first time your create them, edits do not require synchronization.</li>
      </ul>
    </div>
  </form>
</div>
