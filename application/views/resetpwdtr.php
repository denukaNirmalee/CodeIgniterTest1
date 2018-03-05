<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <script>

    </script>
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

    <form method="post" action="<?php echo base_url();?>main/reset_tr_pwd">
    <header>Change Password</header>
        <label>Old Password</label>
            <input type="password" name="opwd">
        <span><?Php echo form_error("opwd");?></span>

        <label>New Password</label>
            <input type="password" name="npwd">
        <span><?Php echo form_error("npwd");?></span>

        <label>Confirm Password</label>
            <input type="password" name="confirmpwd">
        <span><?Php echo form_error("confirmpwd");?></span>

        <br/>
        <button type="submit" value="login">SUBMIT</button>
    </form>


    </body>
</html>