    <div class="left_content content" id="about_l" style="display: block;">
        <div class="top_title_container">
            <span class="top_title">Settings</span>
        </div>
        <div class="left_mid mt-2">
            <button id="settings1" type="button" class="btn btn-block btn-primary btn_radio btn_radio-active">Income Categories<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button id="settings2" type="button" class="btn btn-block btn-primary btn_radio">Expense Categories<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button id="settings3" type="button" class="btn btn-block btn-primary btn_radio">Debts<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button id="settings4" type="button" class="btn btn-block btn-primary btn_radio" style="margin-top: 50px !important;">Backups<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio btn_logout" style="">Log Out</button>
        </div>
        <img src="<?php echo base_url()?>assets/img/common-bottom-logo-panel@2x.png" id="logo" />
    </div>
    <div class="right_content col content" id="about_r" style="display: block;">
        <div class="top_title_container">
            <span class="top_title top_title_r">Income Categories</span>
            <a href="#" id="right_top_done" style="font-size: 35px;">+</a>
        </div>
        <div class="right_main" style="display: none;">
            <div class="container mt-3" style="padding: 0 20px;">
                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){            
            $("#settings_icon img").attr("src", "../assets/img/main_container/mc-menu-settings-selected@2x.png");})
    </script>
<!-- </div> -->
<!-- </body> -->