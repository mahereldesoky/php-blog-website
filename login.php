<?php 
include('includes/config.php');


$page_title = "Login Page";
$meta_descreption = " Login Page description Blog website";
$meta_keyword = "php, html , css, javascript";

include('includes/header.php');

if(isset($_SESSION['auth'])){
    if(!isset($_SESSION['message'])){
    $_SESSION['message'] = "You are already logged in";
    }
    header("Location: index.php");
    exit(0);
}

include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

            <?php include('message.php')  ?>

                <div class="card">
                    <div class="card-header">
                        <h4>login</h4>
                    </div>

                    <div class="card-body">

                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label>Email Id</label>
                            <input type="email" name="email" placeholder="Enter Email adress" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" name="login_btn" >Login Now</button>
                        </div>
                    </form>    
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</div>


<?php 
include('includes/footer.php');
?>
