<?php  
include('authentication.php');
include('middleware/superadminauth.php');

if(isset($_POST['category_delete'])){
    $category_id = $_POST['category_delete'];

    //2= delete category to dont effect the posts in the category  set 2 as deleted but it just not set

    $query = "UPDATE categories SET status = '2' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = " Category Deleted Successfully";
        header('Location: category-view.php');
        exit(0);
    }
    else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: category-view.php');
        exit(0);
    }

}




?>