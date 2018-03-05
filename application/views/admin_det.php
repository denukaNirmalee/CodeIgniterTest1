<html>
<head>
    <title>Admin Detail</title>
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
                <?php  echo '<label><a href="'.base_url().'main/adminview">Home</a></label>';  ?>
            </li>
        </ul>
    </div>

    <form method="post" action="<?php echo base_url();?>main/form_validation">

    <header>Add Admin Detail</header>

        <label>Admin ID</label>
            <input type="text" name="adid">
            <span><?Php echo form_error("adid");?></span>

            <label>Name</label>
            <input type="text" name="adname">
            <span><?Php echo form_error("adname");?></span>

            <label>Division</label>
            <input type="text" name="addivi">
            <span><?Php echo form_error("addivi");?></span>

            <label>Designation</label>
            <input type="text" name="adadrs">
            <span><?Php echo form_error("adadrs");?></span>


            <label>Contact Numer</label>
            <input type="text" name=adcnmbr">
            <span><?Php echo form_error("adcnmbr");?></span>


        <br/>
        <button type="submit" value="login">SUBMIT</button>
    </form>


    </body>
</html>