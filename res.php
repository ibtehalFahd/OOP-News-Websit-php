<?php
/*foreach($_POST as $v){
	if(is_array($v)
		foreach($v as $v2)
			echo v2.'<br>';
	
}*/
if(in_array(end(explode('.',$_FILES['img']['name'])),['png','txt','jpg']))
	move_uploaded_file($_FILES['img']['temp_name'],'img'.time().explode('.',$_FILES['img']['name']));
else
	echo'file not allowed'
?>
