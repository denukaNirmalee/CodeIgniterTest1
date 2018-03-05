<html>
<head>
    <title>Institute Detail</title>
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

    <form method="post" action="<?php echo base_url();?>main/insert_institute">


    <header>Add Institute Detail</header>

        <label>Institute</label>
            <input type="text" name="instname">
            <span><?Php echo form_error("instname");?></span>

        <label>Institute Address</label>
            <input type="text" name="instadrs">
            <span><?Php echo form_error("instadrs");?></span>


            <label>Trainee Engineer's Name</label>
            <input type="text" name="tename">

            <span><?Php echo form_error("tename");?></span>


        <label>Contact Numer</label>
            <input type="text" name="cnmbr">
            <span><?Php echo form_error("cnmbr");?></span>


        <br/>
        <button type="submit" value="login">SUBMIT</button>
    </form>


    </body>
</html>