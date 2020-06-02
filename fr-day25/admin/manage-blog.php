
<?php
session_start();
if($_SESSION['id'] == null){
    header('Location:index.php');
}

require_once "../vendor/autoload.php";
$login = new \App\Classes\Login();
use App\Classes\ManageCategory;
use App\Classes\EditCategory;
use App\Classes\Blogs;
$message = "";
$qureyResult = Blogs::manageBlogInfo();

if (isset($_GET['delete'])){
    $id = $_GET['id'];
    $message = Blogs:: deleteBlogInfo($id);
}

if(isset($_GET['logout'])){
    $login-> adminLogout();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php';?>

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Category id</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Images</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php while ($manageBlogView = mysqli_fetch_assoc($qureyResult)){ ?>
                            <tr>
                                <th scope="row"><?php echo $manageBlogView['id'] ;?></th>
                                <td><?php echo $manageBlogView['category_id'] ;?></td>
                                <td><?php echo $manageBlogView['blog_title'] ;?></td>
                                <td><?php echo $manageBlogView['short_description'] ;?></td>
                                <td><?php echo $manageBlogView['long_description'] ;?></td>
                                <td><?php echo $manageBlogView['blog_image'] ;?></td>
                                <td><?php echo $manageBlogView['status'] ;?></td>
                                <td>
                                    <a href="edit-blog.php?id=<?php echo $manageBlogView['id'];?>">Edit</a>
                                    <a href="?delete=true&id=<?php echo $manageBlogView['id'];?>" onclick="return confirm('Are you sure to delete this!!')">Delete</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

