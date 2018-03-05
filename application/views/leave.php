<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
</head>

    <body>

    <div class="nav  navbar-inverse navbar-fixed-top ">
        <ul>
            <li class="pull-right">
                <?php  echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';  ?>
            </li>
            <li class="pull-right">
                <?php  echo '<label><a href="'.base_url().'main/traineeview">Home</a></label>';  ?>
            </li>
        </ul>
    </div>

    <form method="post" action="<?php echo base_url();?>main/leave_validation">
    <header>Request Leave</header>
        <label>Leave Begin</label>
            <input type="date" name="lbegin">
        <span><?Php echo form_error("lbegin");?></span>


        <label>Leave End</label>
            <input type="date" name="lend">
        <span><?Php echo form_error("lend");?></span>

        <label>Reason</label>
        <input type="text" name="reason">
        <span><?Php echo form_error("reason");?></span>

        <?php $u=$this-> session->userdata('username') ;?>
        <input type="hidden" name="truser" value="<?php echo $u ?>">

        <button type="submit" value="request">REQUEST</button>
    </form>


    </body>
</html>