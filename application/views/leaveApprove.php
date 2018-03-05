<html>
<head>
    <title>Leave Detail</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>js/table.js"></script>

    <style>
        .panel-heading{
           background-color: rgba(9, 4, 32, 0.79);
            color: #a1a09c;
        }
    </style>

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

    <div class="container">
        <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Trainee Leave Detail</h3>
                        <div class="pull-right">
                        </div>
                    </div>

                    <table class="table table-hover table-bordered" id="dev-table">
                        <thead>
                        <tr>
                            <th>Trainee Name</th>
                            <th>Trainee Division</th>
                            <th>Leave Start</th>
                            <th>Leave End</th>
                            <th>Leave Reason</th>
                            <th>Leave Approval</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($leave_approve->num_rows()>0)
                        {
                            foreach ($leave_approve->result()as $row)
                            {
                                ?>

                                <tr>
                                    <td><?php echo $row->trname?></td>
                                    <td> <?php echo $row->trdivision?></td>
                                    <td><?php echo $row->leave_sart?></td>
                                    <td><?php echo $row->leave_end?></td>
                                    <td><?php echo $row->leave_reason?></td>
                                    <td><button type="submit" value="approved" name="accpt">Approve</button><button type="submit" value="Rejected" name="rjct">Reject</button> </td>
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
                        </tbody>

                    </table>


                </div>
        </div>
    </div>

    </body>
</html>