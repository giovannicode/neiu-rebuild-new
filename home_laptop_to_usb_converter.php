<?php

//INFO-2-FOR ILLUSTRATION PURPOSES ONLY. NOT NEEDED FOR CODE;
//$array = array("green", "orange", "red", "purple");
//$count = 0;

set_time_limit(480); 

$from_location = 'C:/Users/sacomm/giovanni/wamp/www/';
$to_location = 'D:/';

$chop_size = strlen($from_location);

file_converter($from_location);

function file_converter($path)
{
  global $chop_size;
  global $to_location;
  
  $dh = opendir($path);
  //NODE MEANS DIRECTORY/FILE
  $node_name = readdir($dh);
  

  while(($node_name = readdir($dh)) != false)
  {
    if(is_dir($path . $node_name))
    {
      if(
		       $node_name != '.' &&
		       $node_name != '..' &&
	           $node_name != '.settings' &&
		       $node_name != '.project' &&
		       $node_name != '.classpath' &&
		       $node_name != 'build' &&
		       //$node_name != 'files' &&
		       //$node_name != 'css' &&
		       //$node_name != 'js' &&
		       //$node_name != 'images' &&
		       $node_name != 'converter.html' &&
		       $node_name != 'converter.php' &&
		       $node_name != 'src' &&
		       $node_name != 'DEFAULT_FILES' &&
		       $node_name != 'includes' &&
		       $node_name != 'WebContent' &&
		       $node_name != 'php_test' &&
		       $node_name != 'templates' &&
		       $node_name != 'videos' &&
		       $node_name != 'design')
		{
			     $relativePath = substr($path . $node_name, $chop_size);
	                 	                 
	                 //If the folder does not exist in the destination then create it.
	                 if(!is_dir($to_location . $relativePath))
	                 {
	                    mkdir($to_location . $relativePath);
	                 }
                     echo $node_name;
				     echo "<br/>";
					 
					 file_converter($path . $node_name. '/');
	    }
    }
    else if(is_file($path . $node_name))
    {
	                 
	                 $file_parts = pathinfo($path . $node_name);
	                 $ext = $file_parts['extension'];

	                 if(strcmp($node_name,  'home_laptop_to_usb_converter.php') == 0)
					 {
					   $bool_value = true;
					 }
					 else
					 {
					   $bool_value = false;
					 }
	                 //If the file is a PHP file
	                 if(strcmp($ext, 'php') == 0 && !($bool_value))
	                 {	                 
		                 $writing_path = substr($path . $node_name, $chop_size);
		                 $contents = file_get_contents("http://localhost/" . $writing_path);
		                 $contents = str_replace('.php', '.html', $contents);

		                 $contents = str_replace('="/~saffairs/','="/' , $contents);
						 $contents = str_replace('= "/~saffairs/','="/', $contents);
		                 
		               
		                 $path_parts = pathinfo($writing_path);
		                 $new_path = $path_parts['dirname'];
		                 $file_name = $path_parts['filename'];
		                 		                               
		                 file_put_contents($to_location . $new_path . '/' . $file_name . '.html', $contents);
						 echo $to_location . $new_path . '/' . $file_name . '.html';
		                 
		                 echo '<br/>';
					 }
					 elseif(strcmp($ext, 'css') == 0)
		             {
		                 $writing_path = substr($path . $node_name, $chop_size);
		                 $contents = file_get_contents("http://localhost/" . $writing_path);
		                 
		                 $contents = str_replace("('/~saffairs/images/", "('/images/", $contents);
		                 
		                 
		                 $path_parts = pathinfo($writing_path);
		                 $new_path = $path_parts['dirname'];
		                 $file_name = $path_parts['filename'];
		                               
		                 file_put_contents($to_location . $new_path . '/' . $file_name . '.css', $contents);
						 echo $to_location . $new_path . '/' . $file_name . '.css';
		                 
		                 echo '<br/>';
		                 
		             }
					 else
		             {                     
			             $writing_path = substr($path . $node_name, $chop_size);      
		                 copy($path . $node_name, $to_location . $writing_path);	
		                 echo $to_location . $writing_path;
		                  echo '<br/>';	              
		             }  
    }
  }
}