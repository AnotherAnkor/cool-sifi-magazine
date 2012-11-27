<html>
<head>
	<meta http-equiv="content-type" content="text/html;
						 charset=utf-8">
</head>
<body>
<?
function read_dir($dir) {
   $array = array();
   $d = dir($dir);
   while (false !== ($entry = $d->read())) {
       if($entry!='.' && $entry!='..') {
           $entry = $dir.'/'.$entry;
           if(is_dir($entry)) {
              // $array[] = $entry;
               $array = array_merge($array, read_dir($entry));
           } else {
               $array[] = $entry;
	   }
       }
   }
   $d->close();
   return $array;
}

foreach (read_dir("/home/andrei/Web/admin-it-mix.it/www", true, "/.*\.pdf/i") as $file) echo ("<a href = \"".$file."\">".basename($file)."</a>\n");
?>
</body>
</html>
