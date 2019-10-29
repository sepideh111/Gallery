<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

            //Test database connection
            /*if($database->con){
                echo "true";
            } */

            //Testing query method
            /*$sql = "SELECT * FROM users WHERE id=1";
            $result = $database->query($sql);
            $user_found = mysqli_fetch_array($result);
            echo $user_found['username'];*/

            //Testing our find_all_users method
           /* $user = new User();
            $result_set = User::find_all_users();
            while ($row = mysqli_fetch_array($result_set)){
                echo $row['username'] . "<br>";
            }

            //Testing our find_user_by_id method
            $found_user = User::find_user_by_id(2);
            echo $found_user['username'];*/

            //Testing our instantiation method
            /*$found_user = User::find_user_by_id(2);
            $user =  User::instantiation($found_user);
            echo $user->username;
            echo "<br>";*/

            //using our instantiation method to find all methods
            $users = User::find_all_users();
            foreach($users as $user){
                echo $user->username . "<br>";
            }

            //using our instantiation method to find_id methods
            $found_user = User::find_user_by_id(2);
            echo $found_user->id;





            ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->