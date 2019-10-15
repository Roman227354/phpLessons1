<?php
function db_connect($Connection_Array=[]){
	if (!is_array($Connection_Array)) return false;
	return mysqli_connect($Connection_Array[0],$Connection_Array[1],$Connection_Array[2],$Connection_Array[3]);
}

function db_close($link) {
	if ($link) {mysqli_close($link);};
}

function Create_Initial_Table(){
	$db = db_connect(get_sql_connection_params());
    if (!mysqli_connect_errno()) {
        $query = "CREATE TABLE IF NOT EXISTS IMG_DATA 
        (id varchar(10), 
        img_path text,
        img_short_path text, 
        PRIMARY KEY (id));";
        $result = mysqli_query($db,$query); 
    }

	db_close($db);
}

function Fill_Base_With_Pictures(){
	$db = db_connect(get_sql_connection_params());
	if (!mysqli_connect_errno()) {
		$query = "TRUNCATE TABLE IMG_DATA";
		$result = mysqli_query($db,$query);
    	// Заполняем из папки img, первые 10 цифр - код
		$scan_result = scandir(IMG_DIR);
		foreach ($scan_result as $file) {
			if (!is_dir(IMG_DIR.$file)) {
				$query = "insert into IMG_DATA (id,img_path,img_short_path) values ('".substr($file, 0,10)."','".IMG_DIR.$file."','".IMG_DIR_LOCAL_PATH.$file."');";
				$result = mysqli_query($db,$query);
				// var_dump(mysqli_error($db));
			}
		}
	}
	db_close($db);
}

function read_file_pass(){
	$row_array = [];
	$db = db_connect(get_sql_connection_params());
    if (!mysqli_connect_errno()) {
        $query = "Select * from IMG_DATA;";
        $result = mysqli_query($db,$query); 
        while ($row=mysqli_fetch_assoc($result)){
          $row_array[]=$row["img_short_path"];
        }
    }
    // var_dump($row_array);
	db_close($db);
	return $row_array;
}

function Create_Counter_Table(){
	$db = db_connect(get_sql_connection_params());
    if (!mysqli_connect_errno()) {
        $query = "CREATE TABLE IF NOT EXISTS IMG_COUNTER 
        (id varchar(10), 
        col int, 
        PRIMARY KEY (id));";
        $result = mysqli_query($db,$query); 
    }

	db_close($db);
}

function Read_Counters(string $conditio_id=""){
	$row_array = [];
	$db = db_connect(get_sql_connection_params());
    if (!mysqli_connect_errno()) {
        $query = "Select * from IMG_COUNTER ".$conditio_id.";";
        $result = mysqli_query($db,$query); 
        while ($row=mysqli_fetch_assoc($result)){
          $row_array[]=$row;
        }
    }

	db_close($db);
	return $row_array;
}

function Add_Counter($file){
	$db = db_connect(get_sql_connection_params());
	if (!mysqli_connect_errno()) {
		$col = 0;
		$query = "Select * from IMG_COUNTER where id ='".substr($file, 0,10)."';";
        $result = mysqli_query($db,$query); 
        $row_array=[];
        while ($row=mysqli_fetch_assoc($result)){
          $row_array[]=$row;
        }
        if (!count($row_array)==0) {
        	$col=$row_array[0]["col"]+1;
		$query = "UPDATE IMG_COUNTER SET col=".$col." where id='".substr($file, 0,10)."';";
		}
		else {
			$query = "insert into IMG_COUNTER (id,col) values ('".substr($file, 0,10)."',0);";
		}
		$result = mysqli_query($db,$query); 
	}

	db_close($db);
}