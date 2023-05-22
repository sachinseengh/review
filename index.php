

<?php

require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');

$movieObject=new Movies();

$latest=$movieObject->getAllLatest();
$bollywood=$movieObject->getAllBollywoodDashboard();
$marvel=$movieObject->getAllMarvelDashboard();
$dc=$movieObject->getAllDcDashboard();
$south=$movieObject->getAllSouthDashboard();
?>

<?php
include('headerfooter/header.php');
?>

  

    <main >
        <br>
        
<!-- slider -->
        <!-- <section class="main swiper mySwiper">
            <div class="wrapper swiper-wrapper">

            <?php
        foreach ($latest as $latestmovie) {
        ?>
       


       
                <div class="slide swiper-slide">
                <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"> <img src="<?php echo $latestmovie['image']; ?>" alt="" class="image"  height="720" width="1280"/></a>

                
                    <div class="image-data">
                        <div class="container">
                            
                            <h2><?php echo $latestmovie['title'];?></h2>
                            
                            
                            <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank" class="button" style="color:#06f8d0">Read more 	&#8594;</a>
                        </div>
                    </div>
                </div>
                     
                
                <?php }?>
            </div>
          
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>

        </section>
 -->
 <!-- <section class="poster" style="padding-left:40%">
 <div class="mv-image" >
                    <img src="https://feeds.abplive.com/onecms/images/uploaded-images/2023/02/13/bd17036dde2797e2749282f18ad037b61676277401720380_original.jpg?impolicy=abp_cdn&imwidth=650" alt="" class="image">
                </div>
                </section> -->
<!-- <section>
                <div class="container">
            
                <div class="mv-image">
                    <img src="https://feeds.abplive.com/onecms/images/uploaded-images/2023/02/13/bd17036dde2797e2749282f18ad037b61676277401720380_original.jpg?impolicy=abp_cdn&imwidth=650" alt="" class="image">
                </div>
        </div>
        </section> -->
        <!-- latest -->
    <section class="blog">
            <div class="container">
       
                <div class="blog-title">
                    
                    
                    <span class="title"> <strong><hr  style="scroll-behavior: auto ;">
                        Latest
                    <hr></strong></span>
                    
                </div>
              
                <div class="row">

                <?php
        foreach ($latest as $latestmovie) {
        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-header">
                                <a href="movie.php?id=<?php echo $latestmovie['id'];?>" class="blog-image"><img src="<?php echo $latestmovie['image'];?>" alt="rover" /></a>
                            </div>
                            <div class="bl-title">
                                <span class="title">
                                    <?php echo $latestmovie['title'];?></span>
                            </div>

                        </div>
                    </div>
                
                <?php }?>
            </div>
            
            </div>
        </section>


        <section class="blog">
            <div class="container">
       
                <div class="blog-title">
                    
                    
                    <span class="title"> <strong><hr  style="scroll-behavior: auto ;">
                        Bollywood
                    <hr></strong></span>
                    
                </div>
              
                <div class="row">

                <?php
        foreach ($bollywood as $latestmovie) {
        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-header">
                                <a href="movie.php?id=<?php echo $latestmovie['id'];?>" class="blog-image"><img src="<?php echo $latestmovie['image'];?>" alt="rover" /></a>
                            </div>
                            <div class="bl-title">
                                <span class="title">
                                    <?php echo $latestmovie['title'];?></span>
                            </div>

                        </div>
                    </div>
                
                <?php }?>
            </div>
            
            </div>
        </section>
        <section class="blog">
            <div class="container">
                
                <div class="blog-title">
                    
                    
                    <span class="title"> <strong><hr  style="scroll-behavior: auto ;">
                    Marvel
                    <hr></strong></span>
                    
                </div>
                
                <div class="row">
                    
                    <?php
        foreach ($marvel as $latestmovie) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-header">
                                <a href="movie.php?id=<?php echo $latestmovie['id'];?>" class="blog-image"><img src="<?php echo $latestmovie['image'];?>" alt="rover" /></a>
                            </div>
                            <div class="bl-title">
                                <span class="title">
                                    <?php echo $latestmovie['title'];?></span>
                                </div>
                                
                            </div>
                        </div>
                        
                        <?php }?>
                    </div>
                    
                </div>
            </section>
            <section class="blog">
                <div class="container">
                    
                    <div class="blog-title">
                        
                        
                        <span class="title"> <strong><hr  style="scroll-behavior: auto ;">
                        Disney
                        <hr></strong></span>
                        
                    </div>
                    
                <div class="row">

                <?php
        foreach ($dc as $latestmovie) {
        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-header">
                                <a href="movie.php?id=<?php echo $latestmovie['id'];?>" class="blog-image"><img src="<?php echo $latestmovie['image'];?>" alt="rover" /></a>
                            </div>
                            <div class="bl-title">
                                <span class="title">
                                    <?php echo $latestmovie['title'];?></span>
                                </div>

                        </div>
                    </div>
                    
                <?php }?>
            </div>
            
        </div>
    </section>
    
    <section class="blog">
        <div class="container">
   
            <div class="blog-title">
                
                
                <span class="title"> <strong><hr  style="scroll-behavior: auto ;">
                    South
                <hr></strong></span>
                
            </div>
          
            <div class="row">

            <?php
    foreach ($south as $latestmovie) {
    ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-card">
                        <div class="blog-header">
                            <a href="movie.php?id=<?php echo $latestmovie['id'];?>" class="blog-image"><img src="<?php echo $latestmovie['image'];?>" alt="rover" /></a>
                        </div>
                        <div class="bl-title">
                            <span class="title">
                                <?php echo $latestmovie['title'];?></span>
                        </div>

                    </div>
                </div>
            
            <?php }?>
        </div>
        
        </div>
    </section>
   
      
    </main>

    
      
  <?php

include('headerfooter/footer.php')


?>
