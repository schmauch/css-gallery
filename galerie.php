<?php 

$images = [
	['img' => '../images/placeholder1.png', 'caption' => 'Foool! 1'],
	['img' => '../images/placeholder2.png', 'caption' => 'Foool! 2'],
	['img' => '../images/placeholder3.png', 'caption' => 'Foool! 3'],
	['img' => '../images/placeholder4.png', 'caption' => 'Foool! 4'],
	['img' => '../images/placeholder1.png', 'caption' => 'Foool! 5'],
	['img' => '../images/placeholder2.png', 'caption' => 'Foool! 6'],
	['img' => '../images/placeholder3.png', 'caption' => 'Foool! 7'],
	['img' => '../images/placeholder4.png', 'caption' => 'Foool! 8'],
];

$n=count($images);

?>
<!DOCTYPE html>
<html lang="de">
<head>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 


<title>Galerie</title>
<link rel="stylesheet" type="text/css" href="galerie.css.php?n=<?=$n?>" />

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

</head>
<body>

<h1>Pure CSS lightbox galler</h1>

<div id="gallery" class="cssg">
	
	<?php
		for($i=0;$i<$n;$i++) {
			echo '
	<div id="img'.$i.'" class="anchor"></div>';
		}
		
		for($i=0;$i<$n;$i++) {
			echo '
	<a class=".cssg-item" href="#img'.$i.'" title="'.$images[$i]['caption'].'">
		<img class="cssg" src="'.$images[$i]['img'].'" alt="'.$images[$i]['caption'].'" />
		<div class="caption"><span>'.$images[$i]['caption'].'</span></div>
	</a>';
		}
	?>
	
	<a href="#" id="close" title="close">&#x2715;</a>

</div>


</body>
</html>