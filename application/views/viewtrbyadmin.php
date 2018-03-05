<html>
<head>
    <title>Trainee Profile</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>js/table.js"></script>

    <style>
        .panel-heading{
           background-color: rgba(9, 4, 32, 0.79);
            color: #faffe1;
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
                        <h3 class="panel-title">Trainee Detail View</h3>
                        <div class="pull-right">
						<!--	<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span> -->
                        </div>
                    </div>

                 <!--   <div class="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search for Trainees" />
                    </div>
                 -->
                    <table class="table table-hover table-bordered" id="dev-table">
                        <thead>
                        <tr>
                            <th>Trainee Name</th>
                            <th>Trainee Division</th>
                            <th>Trainee Supervisor</th>
                            <th>Trainee Address</th>
                            <th>Trainee Contact</th>
                            <th>Commenced Date </th>
                            <th>End Date</th>
                            <th>Trainee Institute</th>
                            <th>Training Engineer</th>
                            <th>Contact Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if($view_all_tr->num_rows()>0)
                        {
                            foreach ($view_all_tr->result()as $row)
                            {
                                ?>

                                <tr>
                                    <td><?php echo $row->trname?></td>
                                    <td> <?php echo $row->trdivision?></td>
                                    <td><?php echo $row->trsupervisor?></td>
                                    <td><?php echo $row->traddress?></td>
                                    <td><?php echo $row->trcontact?></td>
                                    <td><?php echo $row->trstart?></td>
                                    <td><?php echo $row->trend?></td>
                                    <td><?php echo $row->insname?></td>
                                    <td><?php echo $row->instecheng?></td>
                                    <td><?php echo $row->contactnmbr?></td>
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

                    <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("dev-table-filter");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("dev-table");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[0];
                                if (td) {
                                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>

                </div>
        </div>
    </div>

    </body>
</html>