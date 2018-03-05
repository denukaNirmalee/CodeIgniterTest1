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

    <form method="post"  action="<?php echo base_url();?>main/viewtrdata">
    <header>Profile</header>
        <div class="container">

<table>


            <?php
            if($viewtrprofile->num_rows()>0)
            {
                foreach ($viewtrprofile->result()as $row)
                {
                    ?>

                    <tr>
                        <td>Trainee Name</td> <td>:</td> <td><?php echo $row->trname?></td>
                    </tr>
                    <tr>
                        <td>Trainee Division</td><td>:</td><td> <?php echo $row->trdivision?></td>
                    </tr>
                    <tr>
                        <td>Trainee Supervisor</td><td>:</td><td><?php echo $row->trsupervisor?></td>
                    </tr>
                    <tr>
                        <td>Trainee Address</td> <td>:</td> <td><?php echo $row->traddress?></td>
                    </tr>
                    <tr>
                        <td>Trainee Contact</td> <td>:</td> <td><?php echo $row->trcontact?></td>
                    </tr>
                    <tr>
                        <td>Commenced Date </td> <td>:</td> <td><?php echo $row->trstart?></td>
                    </tr>
                    <tr>
                        <td>End Date</td> <td>:</td> <td><?php echo $row->trend?></td>
                    </tr>
                    <tr>
                        <td>Trainee Institute</td> <td>:</td> <td><?php echo $row->insname?></td>
                    </tr>
                    <tr>
                        <td>Training Engineer</td> <td>:</td> <td><?php echo $row->instecheng?></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td> <td>:</td> <td><?php echo $row->contactnmbr?></td>
                    </tr>

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
        </div>
    </form>


    </body>
</html>