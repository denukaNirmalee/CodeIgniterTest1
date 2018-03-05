<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
</head>

    <body>
<br>
    <form method="post" action="<?php echo base_url();?>main/login_validation">
    <header>Sign In</header>
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
        <br/>

         <a href="<?php echo base_url();?>main/forgotPassword">Forgot Password?</a>
        <br/>
        <span>
            <center>
            <?php echo $this->session->flashdata("error"); ?>
            </center>
        </span>
        <button type="submit" value="login">SIGN IN</button>
    </form>


    </body>
</html>