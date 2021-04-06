<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-title">
                            <h4>Add New Tracking</h4>
                                            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
     $id1 = mysqli_real_escape_string($link,$_POST['id1']);
$trackdis1 = mysqli_real_escape_string($link,$_POST['pdescrip']);
 $trackdis2 = mysqli_real_escape_string($link,$_POST['sdescrip']);
 $trackhis = mysqli_real_escape_string($link,$_POST['hdescrip']);
 $trackstatus = mysqli_real_escape_string($link,$_POST['status']);
 $trackprogress = mysqli_real_escape_string($link,$_POST['trackprogress']);


// Attempt insert query execution
        $sql =  "UPDATE track SET trackdis1='$trackdis1',trackdis2='$trackdis2',trackhis='$trackhis',trackstatus='$trackstatus',trackprogress='$trackprogress'    WHERE track_id='$id1' ";
    if(mysqli_query($link, $sql)){
        echo "<div class='alert alert-success'>
        <strong>Success!</strong> Tracking Successfully Update.
        </div>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}
// Close connection
mysqli_close($link);

?>

<?php 
include 'conn.php';
if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM track WHERE track_id = {$id}";
    $result = $link->query($sql);

    $data = $result->fetch_assoc();

}

?>

                        </div>
                        <div class="card-body">
                              <div class="card-body">
                            <div class="basic-form">
                                <form method="post">
                                    <hr>
                                    <h2>Tracking Information</h2>
                                    <hr>
                                     <div class="form-group">
                                         <div class="form-group">
                                  <input type="hidden" name="id1" value="<?php echo $data["track_id"];?>" class="form-control" placeholder="Email">
                              
                                 <div class="form-group">
                                    <label>Package Details</label>
                                    <textarea class="textarea_editor form-control" name="pdescrip" rows="5" placeholder="Enter text ..." style="height:150px"><?php echo $data["trackdis1"];?></textarea>

                                </div>
                                 <div class="form-group">
                                    <label>Tracking History</label>
                                    <textarea class="textarea_editor form-control" name="hdescrip" rows="5" placeholder="Enter text ..." style="height:150px"><?php echo $data["trackhis"];?></textarea>

                                </div>
                                 <div class="form-group">
                                    <label>Status Discription</label>
                                    <textarea class="textarea_editor form-control" name="sdescrip" rows="5" placeholder="Enter text ..." style="height:150px"><?php echo $data["trackdis2"];?></textarea>

                                </div>
                                  <div class="form-group">
                                    <label ><b>Status Discription</b></label>

                                    <select class="form-control" name="status">
                                        <option value="On Hold">On Hold</option>
                                        <option value="On Transit">On Transit</option>
                                        <option value="Proccessing">Proccessing</option>
                                        <option value="Delivered">Delivered</option>
                                    </select>

                                </div>
                                 <div class="form-group">
                                    <label ><b>Tracking Progress</b></label>

                                    <select class="form-control" name="trackprogress">
                                        <option value="2">level 2</option>
                                        <option value="4">Level 4</option>
                                        <option value="6">Level 6</option>
                                    </select>

                                </div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button type="submit" name="save" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>






        <!-- End PAge Content -->
        <?php include 'footer.php'; ?>