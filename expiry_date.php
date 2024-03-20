<?php
//session_start();
include 'inc/db.php';
$page = "coordinator";
include 'inc/top-menu.php';

$page = 'course';
include 'inc/aside.php';

if (isset($_POST['submit'])) {

    $criteria = @$_POST['criteria'];
    $exp_date = @$_POST['exp_date'];
    $session = @$_POST['session'];
    
   

    // echo'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'.$program.$session;
    
    $sql = "SELECT `id` FROM  `tblstudent`  WHERE  `reg_number` LIKE '$criteria' and `session` LIKE '$session'  ";
    $msg = 0;
    $result = mysqli_query($dbc, $sql);
    while($rows = mysqli_fetch_array($result)){

        $id = $rows['id'];

        $sql1 = "UPDATE tblstudent SET `exp_date` = '$exp_date' where id = '$id'";
        if (mysqli_query($dbc, $sql1)) {
           $msg++; 
        }

    }
    if ($msg != 0) {

        $message = 'Expiry date for '.$criteria.' is set successfuly';
        $alert = 'alert alert-info alert-dismissible';
       
    } else {
    $message = 'Insertion not successful, change entries and try again';
                $alert = 'alert alert-danger alert-dismissible';
            }
  }
  //include 'footer.php';
 

// if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == 'POST') {
//     $reg_Num = $_POST['reg_Num'];
//     $name = $_POST['name'];
//     $gender = $_POST['gender'];
//     $p_num = $_POST['p_num'];
//     $course_enrol_id = $_POST['course_enrol_id'];
//     $email = $_POST['email'];
//     $agency = $_POST['agency'];
//     $rank = $_POST['rank'];

   
//     // if (!empty($reg_num) and !empty($gender) and !empty($name)) {
//         $sql = "INSERT INTO `tblstudent`(`reg_number`, `name`, `phone`, `email`, `agency`, `rank`, `gender`, `course_enrol_id`) VALUES 
//         ('$reg_Num','$name','$p_num','$email','$agency','$rank','$gender','$course_enrol_id')";
//         $result = mysqli_query($dbc, $sql);
//         if (mysqli_affected_rows($dbc) == 1) {
//             $message = 'Record Added Successfully';
//             $alert = 'alert alert-info alert-dismissible';
//         } else {
//             $message = 'Something went wrong, try again';
//             $alert = 'alert alert-danger alert-dismissible';
//         }
//     }
//}



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Form to Set ID Card Expiry Date</h1>

                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- message -->
                    <?php
                    //  echo $status;
                    //  echo $course_name;
                    //  echo $duration;
                    //  echo $category;
                    //  echo $gender;
                    if (!empty($message)) {
                        echo '<div style="width:100%; margin-left:0%">
                                                                  <div class="' .
                            $alert .
                            '">
                                                                      <button type="button" class="close" data-dismiss="alert"
                                                                          aria-hidden="true">&times;</button>
                                                                      <h5><i class="icon fas fa-info"></i> Alert!</h5>
                                                                      ' .
                            $message .
                            '
                                                                  </div>
                                                              </div>';



                        $alert = '';
                        $message = '';
                    }

                    ?>
                    <!-- end of message -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Expiry Date</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="expiry_date.php" name="id_car_check">
                            <div class="card-body">
                               
                                    <div class="form-group" >
                        <label for="passenger">Criteria:</label>
                       
                        <input type="text" class="form-control" id="criteria" placeholder="Enter the Criteria"
                                                name='criteria'>
                                
                    
                                    </div>
                                    <div class="form-group" >
                        <label for="passenger">Expiry Date:</label>
                       
                        <input type="text" class="form-control" id="exp_date" placeholder="Enter Expiry Date"
                                                name='exp_date'>
                                
                    
                                    </div>
                                    <div class="form-group" >
                        <label for="passenger">Session:</label>
                       
                        <input type="text" class="form-control" id="session" placeholder="Enter Session"
                                                name='session'>
                                
                    
                                    </div>
                                    

                                   
                                </div>
                                
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button> &nbsp<a class="btn btn-info" href="courses_his.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'inc/footer.php'; ?>