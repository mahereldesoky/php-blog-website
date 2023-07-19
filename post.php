<?php 
include('includes/config.php');

if(isset($_GET['title'])){
    $slug = mysqli_real_escape_string($con,$_GET['title']);

    $meta_posts = "SELECT slug,meta_title,meta_description,meta_keyword FROM posts WHERE slug='$slug' LIMIT 1 ";
    $meta_posts_run = mysqli_query($con, $meta_posts);

    if(mysqli_num_rows($meta_posts_run) > 0){
        $metaPostItem = mysqli_fetch_array($meta_posts_run);

        $page_title = $metaPostItem['meta_title'];
        $meta_descreption = $metaPostItem['meta_description'];
        $meta_keyword = $metaPostItem['meta_keyword'];
    }
    else {
        $page_title = "Post Page";
        $meta_descreption = " Post Page description Blog website";
        $meta_keyword = "php, html , css, javascript";
    }
}
else {

$page_title = "Category Page";
$meta_descreption = " Category Page description Blog website";
$meta_keyword = "php, html , css, javascript";
}


include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php 
                if(isset($_GET['title'])){
                    $slug = mysqli_real_escape_string($con,$_GET['title']);


                    $posts = "SELECT * FROM posts Where slug='$slug' ";
                    $posts_run = mysqli_query($con,$posts);

                    if(mysqli_num_rows($posts_run) > 0){

                        if(mysqli_num_rows($posts_run) > 0){
                            foreach($posts_run as $postItems){
                                ?>

                                        <div class="card  shadow-sm mb-4">
                                            <div class="card-header">
                                                <h5><?=$postItems['name'];?></h5>
                                            </div>

                                            <div class="card-body">
                                                <label class="text-dark me-2">Posted on: <?=date('d-M-Y',strtotime($postItems['created_at']));?></label>
                                                <hr/>
                                                <?php if($postItems['image'] != null) :?>
                                                <img src="<?= base_url('../blog/uploads/posts/'.$postItems['image']);?>" class="img-fluid" alt="<?= $postItems['name']; ?>"/>
                                                <?php endif; ?>
                                                <div>
                                                    <h5><?=$postItems['description'];?></h5> 
                                                </div>
                                            </div>
                                        </div>
                                <?php
                            }
                        }
                        
                    }

                    else {
                        ?>
                        <h4>No such post found</h4>
                        <?php
                    }
                }
                else {
                    ?>
                    <h4>No such url found</h4>
                    <?php
                }
                ?>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>advertise Area</h4>
                    </div>
                    <div class="card-body">
                        advertise
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php 
include('includes/footer.php');
?>