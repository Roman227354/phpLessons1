<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>


	<!-- homework -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<?php 
	define("SITE_ROOT", "./");
	define("FULL_PATH", SITE_ROOT."public_html/img/");

	$file_list = scandir(FULL_PATH);

	if ($file_list)  
	{
		unset($file_list[0],$file_list[1]);
		$counter =1;
		foreach ($file_list as $file ) {
			if (exif_imagetype (FULL_PATH.$file)){
				if ($counter % 3 ==1) {?>
                  <div style="display: block;">
				<?php }?>
				   <div style="height=300; width:33%;display:inline-block; border: 1px double white">
				   	<a href="<?php echo FULL_PATH.$file ?>" target="blanc"> 
                <?php   echo "<img src=\"".FULL_PATH.$file."\" href=\"".FULL_PATH.$file."\" alt=\"some image\" class=\"img-thumbnail\" style=\"vertical_align:center;object-fit: cover; \">".PHP_EOL;?>
                     </a>
                   </div>
				<?php if ($counter % 3 ==0) {
				echo "</div>".PHP_EOL;	
				}
				$counter++;
			}
		}
	}


	?>
    <!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- --------------------------- -->
	<!-- homework END -->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>