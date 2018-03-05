<html>
<head>
    <title>Extend Letter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">

    <script>
        function myFunction() {
            window.print();
        }
    </script>
    <style>

        @media print {
            button, header,ul{
                display: none;
            }
            textarea{
                display: block;
            }
        }
    </style>
    <?php

    ?>

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

    <div id="sample">
        <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() {
                new nicEditor().panelInstance('area1');
                new nicEditor({fullPanel : true}).panelInstance('area2');
            });
            //]]>
        </script>
        <form class="editor">
          <header>Trainee Extend Letter</header>

        <br>
            <center>
        <textarea id="area1" rows="20" cols="65" >
            <center>Arthur C Clarke Institute for Modern Technologies</center>
            <br>
            <p align="left">
            05/06/2017
            <br>
            Department Head,<br>
            IT Division,<br>
            Arthur C Clarke Institute.
            <br>
            Dear Sir,<br>
            </p>
            <u><center>Training Period Extension.</center></u>
       <p align="left">I'm writing this letter to extend the training period as the current training period is scheduled to end on 30<sup>th</sup>of June.
           As you know I have assigned to current main project of the division and
            need to complete it as soon as possible.But I couldn't finish the task before 30<sup>th</sup> of June.</p>
<p align="left">I am pleased with your offer to complete my training period as a software engineer , and I hope you will allow me this additional time to give it the proper consideration.
        Please let me know if this extension can be made. Thank you in advance for your prompt response.
</p>
            <p align="left">
            Sincerely,<br>
            <?php echo $this-> session->userdata('username'); ?><br>
            Trainee Software Engineer,<br>
            IT Division.</p>
        </textarea>
            </center>
            <button type="submit" onclick="myFunction()">PRINT</button>
</form>
    </div>


    </body>
</html>