<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />
</head>

<body>
<header id="header">
      <ul id = "navigation" align="right">
      <li><a href="#page1">Page 1</a></li>
      <li><a href="#page2">Page 2</a></li>
      <li><a href="#page3">Page 3</a></li>
      <li><a href="#page4">Page 4</a></li>
      <img id="loading" src="img/ajax_load.gif" alt="loading" />
    </ul>
  </header><!-- #header-->
  
  <section id="middle">
		<div id="container">
			<div id="pageContent">
            <h1>Некий текст<br class="aloha-end-br"></h1>
            <h2>Некий заголовок</h2><p>Что-то здесь написано.<br></p>
            <p><?php
             print_r ($_SERVER);
             ?></p>
            <p>
              The word <a href="http://en.wikipedia.org/wiki/Aloha" target="_blank" class="external">aloha</a> derives from the Proto-Polynesian root <i>*qalofa</i>. It has cognates in other Polynesian languages, such as Samoan alofa and Māori aroha, also meaning "love."
            </p>
            <p>
              <a href="http://aloha-editor.com/">Aloha Editor</a> is the word's most advanced browser based Editor made with aloha passion.
            </p>
            <ul>
              <li>Arguably the most famous historical Hawaiian song, "Aloha ʻOe" was written by the last queen of Hawaii, Liliʻuokalani.
              </li>
              <li>The term inspired the name of the ALOHA Protocol introduced in the 1970s by the University of Hawaii.
              </li>
              <li>In Hawaii someone can be said to have or show aloha in the way they treat others; whether family, friend, neighbor or stranger.
              </li>
            </ul>      
        <img src="img/IMG_1952.JPG" width="100%" height: "100%"; align="static">
			</div><!-- #pageContent-->
		</div><!-- #container-->

		<aside id="sideLeft">
			<strong>Left Sidebar:</strong> 
			<?php
			$addr = './articles';
			echo '<ul id="browser" class="filetree">';
			fstree($addr);
			echo '</ul>';
			 
			function fstree($dir) {
			// если мы сюда попали, значит уже в папке
				echo '<li><span class="folder">'.end(split('/', $dir)).'</span><ul>';
				if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						if ($file=='..' || $file=='.') continue;
			// Если папка, входим в рекурсию
						if (is_dir($dir."/".$file)) {
						  fstree($dir."/".$file);
						}
			// Если нет - рисуем файл
						else {
							#$file = str_replace (' ', '%20',(iconv("windows-1251", "UTF-8", $file))); 
						  $file2 = str_replace (' ', '%20', $file);
						  echo '<li><span class="file"><a href = http://192.168.0.101:81/'.$dir.'/'.$file2.'>'.$file.'</a> [size: '.filesize($dir.'/'.$file).' bytes]';
						}
					}
				closedir($dh);
				}
				echo "</ul></li>";
			}
			?>
		</aside><!-- #sideLeft -->

</body>
</html>
