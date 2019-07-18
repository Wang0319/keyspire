
    <div class="left_content content">
        <div class="top_title_container">
            <span class="top_title">My Portfolio</span>
        </div>
        <div class="left_mid">
            <button type="button" class="btn btn-block btn-primary btn_radio">Portfolio Summary<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspInfo<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspReturn<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspProperty Performance<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspEquity Position<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspMortgage Info<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspProjections<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">Real-time Performance<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspInfo<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspReturn<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspProperty Performance<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">&nbsp&nbsp&nbsp&nbsp&nbspEquity Position<i class="fas fa-angle-right" style="float: right;"></i></button>
            <button type="button" class="btn btn-block btn-primary btn_radio">Income Tax Report<i class="fas fa-angle-right" style="float: right;"></i></button>
        </div>
        <img src="<?php echo base_url()?>assets/img/common-bottom-logo-panel@2x.png" id="logo" />        
    </div>
    <div class="right_content col content">
        <div class="top_title_container">
            <span class="top_title">Portfolio Summary</span>
        </div>
        <!-- ===portfolio summary=== -->
        <div class="right_main" style="position: relative; top: 50%; left: 50%; transform: translate(-50%, -60%); display: none;">
            <div class="container" style="padding: 0 20px 0 20px; margin-top: 30px;">
                <div id="chartContainer" style="height: 60%; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>
        </div>
        <!-- ===info=== -->
        <div class="right_main" style="display: block;">
            <div class="container mt-3" style="padding: 0 20px;">
                <table class="table table-striped" id="schedule_table">
                <thead>
                    <tr id="tr_portfolio" style="background: url('../assets/img/form/form-headbar@2x.png'); background-size: 100% 100%;">
                        <th>Property</th>
                        <th>Gross Operating Income</th>
                        <th>Total Operating Express</th>
                        <th>Net Operating Income</th>
                        <th>Principal and Interest Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                    </tr>
                    <tr>
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
    </div>
    <script>
        window.onload = function () {         
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "dark2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Total Accumulated Return"
            },
            data: [{
                type: "column", //change type to bar, line, area, pie, etc  
                dataPoints: [{x:10,y:30},{x:20,y:60},{x:30,y:70},{x:40,y:50},{x:50,y:84},{x:60,y:68}]
            }]
        });
        chart.render();         
        }
    </script>
</body>