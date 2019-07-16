    <div class="left_content content">
        <div class="top_title_container">
            <span class="top_title">Mortgage Calculator</span>
        </div>
        <div class="left_mid">
            <div class="container" style="padding: 0 20px 0 20px; margin-top: 60px;">
                <div class="container" style="padding: 0;">
                    <form>
                        <div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L" style="border-top-left-radius: 10px !important;">Country</span>
                            </div>
                            <select type="text" class="form-control info_input_R" style="border-top-right-radius: 10px !important; background: white; padding: 4px 0;">
                                <option value="canada">Canada</option>
                                <option value="usa">United States</option>
                            </select>
                            </div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L">Loan Amount*</span>
                            </div>
                            <input type="text" class="form-control info_input_R" />
                            </div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L">Interest Rate</span>
                            </div>
                            <input type="text" class="form-control info_input_R" /></select>
                            </div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L">Payment Frequency</span>
                            </div>
                            <select type="text" class="form-control info_input_R" style="padding: 4px 0;">
                                <option value="canada">Monthly</option>
                                <option value="usa">Bi-weekly</option>
                                <option value="usa">Weekly</option>
                            </select>
                            </div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L">Amortization Period</span>
                            </div>
                            <select type="text" class="form-control info_input_R"  style="padding: 4px 0;">
                                <option value="canada">1 year</option>
                                <option value="usa">2 years</option>
                                <option value="usa">3 years</option>
                                <option value="canada">4 year</option>
                                <option value="usa">5 years</option>
                                <option value="usa">6 years</option>
                                <option value="canada"> 7year</option>
                                <option value="usa">8 years</option>
                                <option value="usa">9 years</option>
                                <option value="canada">10 year</option>
                                <option value="usa">11 years</option>
                                <option value="usa">12 years</option>
                            </select>
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend input_title select_title">
                                    <span class="input-group-text info_input_L">Start Date</span>
                                </div>
                                <input type="date" class="form-control info_input_R" style="padding: 4px 0;" />
                            </div>
                            <div class="input-group input-group-sm">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L" style="border-bottom-left-radius: 10px !important;">Maturity Date(derived)</span>
                            </div>
                            <input type="text" readonly class="form-control info_input_R" style="border-bottom-right-radius: 10px !important; background-color: white;" />
                            </div>
                        </div>
                        <div class="input-group input-group-sm" style="margin-top: 50px">
                            <div class="input-group-prepend input_title select_title">
                                <span class="input-group-text info_input_L" style="border-top-left-radius: 10px !important; border-bottom-left-radius: 10px !important;">Payment Amount(derived)</span>
                            </div>
                            <input type="text" readonly class="form-control info_input_R" style="background-color: white; padding: 4px 0; border-top-right-radius: 10px !important; border-bottom-right-radius: 10px !important;" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block calcu_btn">Calculate</button>
                    </form>
                </div>                
            </div>
        </div>
        <img src="<?php echo base_url()?>assets/img/common-bottom-logo-panel@2x.png" id="logo" />        
    </div>
    <div class="right_content col content">
        <div class="top_title_container">
            <span class="top_title">Amortization Schedule</span>
        </div>
        <div class="right_main">
            <table class="table table-striped" id="schedule_table">
                <thead>
                    <tr>
                        <th>Pmt No.</th>
                        <th>Payment Date</th>
                        <th>Beginning Balance</th>
                        <th>Payment</th>
                        <th>Principal</th>
                        <th>Interest</th>
                        <th>Cumulative Principal</th>
                        <th>Cumulative Interest</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>

                    </tr>
                    <tr>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        
                    </tr>
                    <tr>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        <td>erg</td>
                        
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>