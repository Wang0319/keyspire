    <div class="left_content content" id="potential_l" style="display: block;">
        <div class="top_title_container">
            <span class="top_title">Potential Properties</span>
            <a href="#" id="left_top_plus">+</a>
        </div>
        <div class="left_mid">
            <p class="left_mid_space_title">You do not currently have any properties.</p>
        </div>
        <img src="<?php echo base_url()?>assets/img/common-bottom-logo-panel@2x.png" id="logo" />        
    </div>
    <div class="right_content col content" id="potential_r" style="display: block;">
        <div class="top_title_container">
            <span class="top_title">New Potential Property</span>
            <a href="#" id="right_top_done">Next</a>
        </div>
        <div class="right_main">
            <div class="container" style="padding: 0 20px 0 20px; margin-top: 30px;">
                <div class="container" style="padding: 0;">
                    <label for="comment">Property Information</label>
                    <form>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L" style="border-top-left-radius: 10px !important;">Address*</span>
                            </div>
                            <input type="text" class="form-control info_input_R" style="border-top-right-radius: 10px !important;" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">City</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Province/State</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Postal/Zip Code</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Bedrooms</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Bathrooms</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Square Feet</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L">Year Built</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title">
                                <span class="input-group-text info_input_L" style="border-bottom-left-radius: 10px !important;">Parking</span>
                            </div>
                            <input type="text" class="form-control info_input_R" style="border-bottom-right-radius: 10px !important;" />
                        </div>
                    </form>
                </div>
                <form>
                    <div class="form-group">
                        <label for="comment">Notes</label>
                        <textarea class="form-control note_area" rows="5" id="comment" name="text" style="border-radius: 10px;"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){            
            $("#potential_icon img").attr("src", "../assets/img/main_container/mc-menu-potential-selected@2x.png");})
    </script>
<!-- </div>
</body> -->