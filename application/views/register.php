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
                <?php  echo '<label><a href="'.base_url().'main/adminview">Home</a></label>';  ?>
            </li>
        </ul>
    </div>

    <form method="post" action="<?php echo base_url();?>main/register_form_validation">
    <header>Register New Trainee</header>
        <label>Username</label>
            <input type="text" name="uname">
        <span><?Php echo form_error("uname");?></span>


        <label>Password</label>
            <input type="password" name="pwd">
        <span><?Php echo form_error("pwd");?></span>

        <label>State</label>
        <select name="state">
            <option>select your state</option>
            <option>Admin</option>
            <option>Trainee</option>
        </select>
        <span><?Php echo form_error("state");?></span>

        <button type="submit" value="login">REGISTER</button>
    </form>


    </body>
</html>