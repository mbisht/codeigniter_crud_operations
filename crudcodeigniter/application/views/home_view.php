<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to My First CodeIgniter Application</title>
</head>
<body>

<div id="container">
    <h1>Welcome to My First CodeIgniter Application!</h1>
    <div id="body">
        <p>If you would like to edit this page you'll find it located at:</p>
        <code>application/views/home_view.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Home.php</code>
    </div>
	
	<div class="gallery
		
		 <div class="row">
                
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                         
                            <div class="team-content">
                                <h4 class="text-white mb0">Categories</h4>
                                <p class="team-meta"> 
								
									<?php foreach($images as $img): ?>
										<img src="uploads/<?php echo $img['name']; ?>" style=" height:130px;">
										<?php echo $img['image_name']; ?>
									<?php endforeach; ?>
									<!--<h1>mayank</h1>-->
								
								</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
			
		<!--<ul>-->
			<?php //foreach($images as $img): ?>
				<!--<li><img src="uploads/ --><?php //echo $img['name']; ?><!--" style=" height:130px;"></li>-->
				<!--<li>--><?php //echo $img['image_name']; ?><!--</li>-->
			<?php //endforeach; ?>
			<!--<h1>mayank</h1>-->
		<!--</ul>-->
	</div>
	
</div>

</body>
</html>