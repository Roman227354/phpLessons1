
<?php
DEFINE("ROOT_DIR", str_replace("config","",__DIR__));
DEFINE("CONFIG_DIR",ROOT_DIR."config".DIRECTORY_SEPARATOR);
DEFINE("ENGINE_DIR",ROOT_DIR."engine".DIRECTORY_SEPARATOR);
DEFINE("TEMPLATES_DIR",ROOT_DIR."templates".DIRECTORY_SEPARATOR);
DEFINE("PUBLIC_DIR",ROOT_DIR."public".DIRECTORY_SEPARATOR);
DEFINE("IMG_DIR",PUBLIC_DIR."img".DIRECTORY_SEPARATOR);
DEFINE("IMG_DIR_LOCAL_PATH","../public/img/");

function get_sql_connection_params(){
	return ["localhost","test","12345","test"];
}
