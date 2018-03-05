<!DOCTYPE html>
<html lang="en">
<head>

    <title>Trainee View</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jumbotron-narrow.css">

  </head>

  <body>
  <?php $this->load->view('header'); ?>

  <div class="nav  navbar-inverse navbar-fixed-top ">

      <ul type="circle" style="list-style-type:none; margin:0px; padding:0px" class="pull-right">
          <li style="width:30px; display:table-cell; padding:1px;">
              <?php  echo '<label><a href="'.base_url().'main/traineeview">Home</a></label>';  ?></li>
          <li style="width:40px; display:table-cell; padding:1px;">
        <?php  echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  ?></li>
      </ul>
  </div>

  <div class="container">
  <div class="header clearfix">
    <nav>
      <ul class="nav navbar-nav pull-right">
        <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/insertdata">Insert</a></li>
          <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/institutedata">Institute</a></li>
          <li role="presentation"><a class="color-me"  href="<?php echo base_url();?>main/viewtrdata">Profile</a></li>
          <li role="presentation"><a class="color-me"  href="<?php echo base_url();?>main/myprojects">Projects</a></li>
          <li role="presentation"><a class="color-me"  href="<?php echo base_url();?>main/extend">Extend</a></li>
          <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/leave">Leave</a></li>
          <li role="presentation"><a class="color-me" href="<?php echo base_url();?>main/reset_tr">Password</a></li>
      </ul>
    </nav>
    <?php  echo '<h3 class="text-muted">WELCOME -'.$this-> session->userdata('username').'</h3>'; ?>

  </div>

    <div class="jumbotron">
      <h3></h3>
      <p class="lead">You have the authority to insert data to your profile, view your data, add your projects, extend the training time period and change your login password.</p>
    </div>

  </div>

  </body>
</html>
