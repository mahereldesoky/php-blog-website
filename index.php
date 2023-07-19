<?php 
include('includes/config.php');


$page_title = "Home Page";
$meta_descreption = "Home Page description Blog website";
$meta_keyword = "php, html , css, javascript";
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5 bg-dark " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-light" >Category</h3>
                    <div class="underline"></div>
            </div>
            <?php  
                $homeCategory = "SELECT * FROM categories WHERE navbar_status = '0' AND status = '0' Limit 12";
                $homeCategory_run = mysqli_query($con, $homeCategory);

                
                if(mysqli_num_rows($homeCategory_run) > 0){
                foreach($homeCategory_run as $homeitems){
                    ?>
                    <div class="col-md-3 mb-3">
                        <a class="text-decoration-none" href="category.php?title=<?= $homeitems['slug']?>">
                            <div class="card card-body">
                                <?= $homeitems['name']?>
                            </div>
                        </a>

                    </div>
                <?php
                }

                }

            ?>

        </div>
    </div>
    
</div>

<div class="py-5 bg-light " >
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark" >About us</h3>
                    <div class="underline"></div>
                    <p style="text-align: justify;">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non autem expedita facilis beatae. Quod dicta ea nesciunt, culpa aut dolorum ut quos ab incidunt inventore aliquid voluptas nulla quis nemo.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto itaque error beatae laborum accusamus molestias.
                    </p>
            </div>

        </div>
    </div>
    
</div>

<div class="py-5 bg-dark " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-light" >Latest Posts</h3>
                    <div class="underline"></div>
            </div>
            <?php  
                $homePosts = "SELECT * FROM posts WHERE status = '0' ORDER BY id Limit 12";
                $homePosts_run = mysqli_query($con, $homePosts);

                
                if(mysqli_num_rows($homePosts_run) > 0){
                foreach($homePosts_run as $homePostsItem){
                    ?>
                    <div class="col-md-3 mb-3">
                        <a class="text-decoration-none" href="post.php?title=<?= $homePostsItem['slug']?>">
                            <div class="card card-body">
                                <?= $homePostsItem['name']?>
                            </div>
                        </a>

                    </div>
                <?php
                }

                }

            ?>

        </div>
    </div>
    
</div>














<?php 
include('includes/footer.php');
?>