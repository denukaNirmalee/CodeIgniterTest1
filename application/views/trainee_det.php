<html>
<head>
    <title>Trainee Detail</title>
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

    <form method="post" action="<?php echo base_url();?>main/trdetail_validation">


    <header>Add Trainee Detail</header>


            <label>Trainee Name</label>
            <input type="text" name="trname">
            <span><?Php echo form_error("trname");?></span>

            <label>Training Division</label>
            <input type="text" name="trdivi">
            <span><?Php echo form_error("trdivi");?></span>

            <label>Training Supervisor</label>
            <input type="text" name="trsup">
            <span><?Php echo form_error("trsup");?></span>

            <label>Start Date</label>
            <input type="date" name="trstart">
            <span><?Php echo form_error("trstart");?></span>

            <label>End Date</label>
            <input type="date" name="trend">
            <span><?Php echo form_error("trend");?></span>

            <label>Trainee Address</label>
            <input type="text" name="tradrs">
            <span><?Php echo form_error("tradrs");?></span>

            <label>Contact Number</label>
            <input type="text" name="trcnmbr">
            <span><?Php echo form_error("trcnmbr");?></span>

            <?php $u=$this-> session->userdata('username') ;?>
            <input type="hidden" name="truser" value="<?php echo $u ?>">

        <br/>
        <button type="submit" value="login">SUBMIT</button>
    </form>


    </body>
</html>