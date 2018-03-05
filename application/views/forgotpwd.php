<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
</head>

    <body>

    <form method="post" action="<?php echo base_url();?>main/form_validation">
    <header>Forgot Password ?</header>
        <label>Enter Your email</label>
            <input type="email" name="email">
        <br/>
        <button type="submit" value="login">SEND</button>
    </form>


    </body>
</html>