<?php



// foreach($_POST as $item){
//     echo $item. "<br>";
// }

// print_r($_FILES). "<br>";

// echo $_FILES["img"]["name"]. "<br>";
// echo $_FILES["img"]["size"]. "<br>";
// echo $_FILES["img"]["type"]. "<br>";

// foreach($_POST as $item){
//     if(is_array($item)){
//         print_r($item);
//     }
//     else {
//         echo "<br>";
//         echo $item. "<br>";
//     }
// }



// work only in form with post and enctype
// move_uploaded_file($_FILES["img"]["tmp_name"],"images/".time().".".end($info));

// Calling getimagesize() function 
// $image_info = getimagesize($_FILES["img"]["tmp_name"]); 
// $extention = array("pdf","png");



list($width, $height, $type, $attr) = getimagesize($_FILES["img"]["tmp_name"]); 

$info = explode("/",$_FILES["img"]["type"]);

if($info[0]=='image' ){

    if(($_FILES["img"]["size"]/1024/1024)<=1)
        {
            if($width<=200 && $height<=150)
                 move_uploaded_file($_FILES["img"]["tmp_name"],"images/".time().".".end($info));
            
            else
                echo'<h1>height and width are not sutable</h1>';
        }
    else
        echo'<h1>size is too big</h1>';

} else
    echo "<h1>Type not allwoed</h1>";



////////////////////////////////////////////////////



$info2 = explode("/",$_FILES["zip"]["type"]);

    if($_FILES["zip"]["type"]=='application/zip' ){
    
            $x=time();
            if(($_FILES["img"]["size"]/1024/1024)<=1)
            {
        
                    if(move_uploaded_file($_FILES["zip"]["tmp_name"],"gallary/".$x.".".end($info2))){
                         // Create new zip class 
                          $zip = new ZipArchive; 
        
                                // Add zip filename which need 
                                // to unzip 

                                $name='gallary/'.$x.'.'.end($info2);
                                $zip->open($name); 
        
                                       // Extracts to current directory 
                                       $zip->extractTo('gallary/'.$x); 
        
                                       $zip->close(); 
                                unlink($name);
                                    }

                
                else
                    echo'<h1>upload error</h1>';
            }
            else
                 echo "<h1>zip Zise is too big </h1>";
                }
                else
                     echo "<h1>Type not allwoed</h1>";
?>