<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
</head>
<body style="background: url('<?php echo base_url()?>assets/img/Splashscreen/splashscreen_prestige_background@2x.png') no-repeat; background-size: 100% 969px;">
    <div id="margin"></div>
    <div class="container col-lg-3 col-md-3 login_container">
      <form action="<?php echo base_url()?>index.php/home" id="login_form" method="post">
        <div class="form-group">
          <input type="email" class="login_input form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <input type="password" class="login_input form-control" placeholder="Enter password" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary btn-lg login_btn">Log In</button>
      </form>
    </div>
    <div style="height: 100px; width: 100%;"></div>
</body>