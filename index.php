

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
        
<!-- eta lekha hai temle -->
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
