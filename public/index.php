<?php 
include "../engine/autoload.php";
Autoload("../config/");

include ENGINE_DIR."work_with_database.php";
Create_Initial_Table();
Fill_Base_With_Pictures();
Create_Counter_Table();

include TEMPLATES_DIR."header.php";
?>

<?php 

	// $file_list = scandir(IMG_DIR_LOCAL_PATH);
    $file_list=read_file_pass();
    print_r($IMG_DIR_LOCAL_PATH);
	if ($file_list)  
	{
		unset($file_list[0],$file_list[1]);
		$counter =1;
		foreach ($file_list as $file ) {
			if (exif_imagetype ($file)){
				if ($counter % 3 ==1) {?>
                  <div style="display: block;">
				<?php }?>
				   <div style="height=300; width:33%;display:inline-block; border: 1px double white">
				   	<a href="<?php echo $file ?>" target="blanc"> 
                <?php   echo "<img src=\"".$file."\" href=\"".$file."\" alt=\"some image\" class=\"img-thumbnail\" style=\"vertical_align:center;object-fit: cover; \">".PHP_EOL;?>
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

<?php
include TEMPLATES_DIR."footer.php";

?>