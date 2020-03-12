 
 <?php
 require_once("path/to/file/configORIGINAL.php"); 
 $path="/folder path/";
function folderChange($dir) {
	$files1 = scandir($dir);
	for ($i=2;isset($files1[$i]);$i++) {
		if(is_dir($dir.$files1[$i])){
		folderChange($dir.$files1[$i]."/");
		$newfile=chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
		@rename($dir.$files1[$i], $dir.$newfile);
		}
		else if(is_file($dir.$files1[$i])){
		@$ext = end(explode('.', $files1[$i]));
		$newfile=chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).rand(0,9).rand(0,9).rand(0,9).rand(0,9).'.'.$ext;
		@rename($dir.$files1[$i], $dir.$newfile);

		}
	}
}
folderChange($path);

?> 


