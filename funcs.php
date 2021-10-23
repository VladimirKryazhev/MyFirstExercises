<?php 
function save_mess(){
	$str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s'). "\n***\n";
	file_put_contents('gb.txt', $str, FILE_APPEND);
}
function get_mess(){
	return file_get_contents('gb.txt');
}




 ?>