	<?php
	session_start();
?>
<form action=uploader.php method="post" enctype="multipart/form-data">
                Valasszon egy kepet:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
<?php 

                $directory = "feltoltottkepek";

                    $images = glob($directory . '/*.jpg');
					$images2 = glob($directory . '/*.jpeg');
					$images3 = glob($directory . '/*.png');
					$images4 = glob($directory . '/*.gif');
               
			   foreach($images as $image)
                {
                    echo '<img class="feltoltottkepek" src="'.$image.'" />';
                }
				
				foreach($images2 as $image)
                {
                    echo '<img class="feltoltottkepek" src="'.$image.'" />';
                }
				
				foreach($images3 as $image)
                {
                    echo '<img class="feltoltottkepek" src="'.$image.'" />';
                }
				
				foreach($images4 as $image)
                {
                    echo '<img class="feltoltottkepek" src="'.$image.'" />';
                }

            ?>