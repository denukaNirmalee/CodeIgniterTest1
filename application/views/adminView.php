<!DOCTYPE html>
<html lang="en">
<head>


    <title>Admin View</title>



    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jumbotron-narrow.css">

  </head>


  <body>

  <?php $this->load->view('header'); ?>

  <div class="nav  navbar-inverse navbar-fixed-top ">
      <ul>
          <li class="pull-right">
              <?php  echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  ?>
          </li>
          <li class="pull-right">
              <?php  echo '<label><a href="'.base_url().'main/adminview">Home</a></label>';  ?>
          </li>
      </ul>
  </div>

  <div class="container">

  <div class="header clearfix">
    <nav>
      <ul class="nav navbar-nav pull-right">
          <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/registernew" ><b>Register</b></a></li>
        <li role="presentation"><a class="color-me"  href="<?php echo base_url();?>main/acceptleave"><b>Leave</b></a></li>
        <li role="presentation"><a class="color-me"  href="<?php echo base_url();?>main/view_tr_by_admin"><b>View</b></a></li>
        <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/reset_admin_pwd"><b>Password</b></a></li>
      </ul>
    </nav>

      <?php  echo '<h3 class="text-muted">WELCOME -'.$this-> session->userdata('username').'</h3>'; ?>

  </div>

    <div class="jumbotron">
      <h3></h3>
      <p class="lead">You have the authority to register new trainees, view trainee details, accept leave requets and change your login password.</p>
    </div>
  </div>


  </body>
</html>
