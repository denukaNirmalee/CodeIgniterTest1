<html>
<head>
    <title>Trainee Profile</title>
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

        <div class="container" align="center">
<form class="prof">
    <header><?php  echo '<h3 class="text-muted">Profile of '.$this-> session->userdata('username').'</h3>'; ?></header>

    <table>


            <?php
            if($viewtrprofile->num_rows()>0)
            {
                foreach ($viewtrprofile->result()as $row)
                {
                    ?>
                    <div align="left">
                    <div class="col-sm-3"><label> Trainee Name:</label></div>
                    <div class="col-sm-5"><label ><?php echo $row->trname?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Trainee Division:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->trdivision?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Trainee Supervisor:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->trsupervisor?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Trainee Address:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->traddress?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Trainee Contact:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->trcontact?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Commenced Date:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->trstart?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> End Date:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->trend?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label> Trainee Institute:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->insname?></label></div>
                    </div><br><br>

                    <div align="left">
                        <div class="col-sm-3"><label>Contact Number:</label></div>
                        <div class="col-sm-5"><label ><?php echo $row->contactnmbr?></label></div>
                    </div>
                    <br><br>

                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="3"> No Data Found</td>
                </tr>

                <?php
            }
            ?>

</table>
    <a href="<?php echo base_url();?>main/update_tr_profile/<?php echo $this-> session->userdata('username');?>">EDIT</a>

</form>
        </div>



    </body>
</html>