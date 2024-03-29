<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
</head>
<body style="background: url('<?php echo base_url()?>assets/img/Splashscreen/splashscreen_prestige_background@2x.png') no-repeat; background-size: 100% 100%;">
    <div id="margin"></div>
    <div class="container col-3 login_container">
      <form action="<?php echo base_url()?>index.php/home" id="login_form" method="post">
        <div class="form-group" style="margin: 0;">
          <input type="email" class="login_input form-control" placeholder="Enter email" name="email">
        </div>
        <div class="space"></div>
        <div class="form-group" style="margin: 0;">
          <input type="password" class="login_input form-control" placeholder="Enter password" name="pwd">
        </div>
        <div class="space"></div>
        <button type="submit" class="btn btn-primary btn-lg login_btn">Log In</button>
      </form>
    </div>
</body>