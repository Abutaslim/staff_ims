<?php
//session_start();
include 'inc/db.php';
//$page = "coordinator";
include 'inc/top-menu.php';

//$page = 'course';
include 'inc/aside.php';

if (isset($_POST['submit'])) {

    $staff_Num = @$_POST['staff_Num'];
    
   

    // echo'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'.$program.$session;
    
    $sql = "SELECT * FROM tblstaff WHERE  staff_number = '$staff_Num'  ";
    $rows = mysqli_num_rows(mysqli_query($dbc, $sql));
    if ($rows != 0) {
        $_SESSION['staff_Num'] = $staff_Num;
        
      echo "<meta http-equiv='refresh' content = '0; url = pdf_id_card_staff_num.php'/>";

    } else 
    $message = 'Staff`s Record does`nt exist, change entries and try again';
                $alert = 'alert alert-danger alert-dismissible';
  }
  //include 'footer.php';
 

// if (isset($_POST) and $_SERVER['RtaffEQUEST_METHOD'] == 'POST') {
//     $staff_Num = $_POST['staff_Num'];
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
                    <h1 class="m-0">Form for generating of Staff ID cards</h1>

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
      <div class="' .$alert .'">
          <button type="button" class="close" data-dismiss="alert"
              aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-info"></i> Alert!</h5>
          ' .$message .'
      </div>
  </div>';
}
 if (!empty(@$_SESSION['no_image']=='Y')) {
    $alert = 'alert alert-danger alert-dismissible';
echo '<div style="width:100%; margin-left:0%">
      <div class="' .$alert .'">
          <button type="button" class="close" data-dismiss="alert"
              aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-info"></i> Alert!</h5>
          No Image Found for '.$_SESSION['staff_Num'].'
      </div>
  </div>';
  $_SESSION['no_image']='';
 $staff_Num = $_SESSION['staff_Num'];
 $_SESSION['staff_Num'] = '';
}


                    ?>
                    <!-- end of message -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ID Cards by Staff Number</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="id_card_staff_num.php" name="id_car_check">
                            <div class="card-body">
                               
                                    <div class="form-group" >
                        <label for="passenger">Staff Number:</label>

                        <select class="form-control" name='staff_Num'>
                            <option>Select Staff Number</option>
                            <?php  

                                $sql = "SELECT * FROM tblstaff";
                                $result = mysqli_query($dbc, $sql);
                            while($rows = mysqli_fetch_array($result)){
                               

                                    echo '<option value = '.$rows[1].'>'.$rows[1].'('.$rows[2].' '.' '.$rows[3].')</option>';
                                    //$_SESSION['reg_Num'] = $reg_Num;
                                }

                            ?>
                        </select>
                       
                       <!--  <input type="text" class="form-control" id="staff_Num" placeholder="Enter staff Number"
                                   value ="<?php //if(isset($staff_Num)) {echo $staff_Num;}?>"             name='staff_Num'>
                                
                    
                                    </div>
                                     -->

                                   
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