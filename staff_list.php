 <?php
 
include ("inc/db.php");
$page="coordinator";
 include 'inc/top-menu.php';
 
 //  <!-- Main Sidebar Container -->
 include 'inc/aside.php';
 ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-12">
                     <h1 class="m-0">Staff List:</h1>
                     

                 </div><!-- /.col -->

             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">

             <!-- Main row -->
             <div class="row">
                 <div class="col-sm-12">
                    



<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of Staff</h3> <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i><a href="staff.php" style="color:white;"> Staff</a></button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Reg Number</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Rank</th>
                    <th>Department</th>
                    <th>Update</th>
                    
                    
                   
                </tr>
            </thead>
            <tbody>

            <?php
            
            $q = 'SELECT * FROM tblstaff' ;
            $r = mysqli_query($dbc, $q);
            if (mysqli_num_rows($r) >= 1) 
            {
                $sn=1;
                
             while( $row = mysqli_fetch_array($r))   
             {
                echo '<tr>
                <td>'.$sn.'</td>
                <td>'.$row['staff_number'].'</td>
                <td>'.$row[2].' '.$row[3].'</td>';
                $gender = $row['gender']=='M' ? "Male" : "Female";
             echo   '<td>'.$gender.'</td>
             <td>'.$row[9].'</td>
             <td>'.$row[10].'</td>
                <td>'.$row[6].'</td>
                
                <td>'.$row[7].'</td>

                    <td style="text-align: center;"><a href="staff_edit.php? id= '.$row[0].'"> <i class="fa fa-edit"></td>

                '
                

                
                
                ;
                
           echo '</tr>';
            $sn+=1;
             }
              
            }
            
            ?>
                
                
              
               
            </tbody>
            <tfoot>
                <tr>
                <th>S/N</th>
                    <th>Reg Number</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Rank</th>
                    <th>Department</th>
                    <th>Update</th>
                    
                    
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
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
