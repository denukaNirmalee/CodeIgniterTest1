<html>
<head>
    <title>My Projects</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
</head>


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


    <form method="post" action="<?php echo base_url();?>main/project_detail_validation">

    <header>Project Detail</header>

        <label>Project Name</label>
            <input type="text" name="projectnm">
            <span><?Php echo form_error("projectnm");?></span>

        <label>Contribution</label>
            <input type="text" name="procontribution">
            <span><?Php echo form_error("procontribution");?></span>

        <?php $u=$this-> session->userdata('username') ;?>
        <input type="hidden" name="truser" value="<?php echo $u ?>">

        <br/>
        <button type="submit" value="login">SUBMIT</button>
    </form>

        <br>
    <div class="col-md-3">
    <div class="table-responsive">
        <table class="table table-bordered">
            <caption>Project Detail View</caption>
            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Project Description</th>
            </tr>

            <?php
            if($fetch_project_data->num_rows()>0)
            {
                foreach ($fetch_project_data->result()as $row)
                {
                    ?>

                    <tr>
                        <td><?php echo $row->proid?></td>
                        <td><?php echo $row->proname?></td>
                        <td><?php echo $row->prodescription?></td>
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
    </div>




    </body>
</html>