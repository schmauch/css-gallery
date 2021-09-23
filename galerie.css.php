<?php

echo '/* '.basename($_SERVER['PHP_SELF']).' */';



$n = $_GET['n'];

header("Content-type: text/css");
header("X-Content-Type-Options: nosniff");

?>

/* gallery */
#gallery {
	position: relative;
}

#gallery a,
#gallery a:active,
#gallery a:visited {
	display: inline-block;
	color: black;
	text-decoration: none;
}

#gallery img {
	vertical-align: bottom;
}

#gallery .anchor {
	display: none;
}

#gallery a .caption {
	display: none;
	visibility: hidden;
	position: relative;
}

#gallery a .caption span {
	display: none;
	visibility: hidden;
}


#gallery div:target ~ a img {
	visibility: hidden;
	background-color: black;
}

#close {
	display: none;
	visibility: hidden;
}

.anchor:target ~ #close {
	display: block;
	visibility: visible;
	position: fixed;
	top: 0.5em;
	right:0.5em;
	color: rgba(255,255,255,0.8);
	font-size: 2em;
	text-decoration: none;
	z-index: 10000;
}


/* lightbox */
<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'. $i. '"]';
}
echo implode(",\n", $arr)." {\n";
?>
	display: block;
	position: fixed;
	width: 100vw;
	height: 100vh;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	background-color: black;
	text-align: center;
	cursor: default;
}

<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] img';
}
echo implode(",\n", $arr)." {\n";
?>
	display: inline-block;
	visibility: visible;
	object-fit: contain;
	width: auto;
	height: 100%;
	max-width: 100%;
}

/* legend*/
<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] .caption';
}
echo implode(",\n", $arr)." {\n";
?>
	display: block;
	visibility: visible;
	position: absolute;
	width: 0em;
	height: 0em;
	padding: 0.4em 0.8em;
	bottom: 2em;
	left: 50%;
	transform: translateX(-50%);
	border-radius: 0.2em;
	background-color: rgba(255,255,255,0.5);
	z-index: +1000;
} 

<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] .caption:hover';
}
echo implode(",\n", $arr)." {n";
?>
	width: auto;
	height: auto;
}

<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] .caption:hover span';
}
echo implode(",\n", $arr)." {\n";
?>
	display: block;
	visibility: visible;
}

<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] .caption::after';
}
echo implode(",\n", $arr)." {\n";
?>
	content: "";
	position: absolute;
	width: 0em;
	height: 0em;
	top: 100%;
	left: 40%;
	color: red;
	border-top: 0.3em solid rgba(255,255,255,0.5);
	border-right: 0.3em solid rgba(255,255,255,0.5);
	border-bottom: 0.3em solid transparent;
	border-left: 0.3em solid transparent;
}


/* prev button */
<?php
$arr = [];
for($i=1;$i<$n;$i++) {
	$k = $i - 1;
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$k.'"]';
}
echo implode(",\n", $arr)." {\n";
?>
	display: block;
	position: fixed;
	width: 0;
	height: 0;
	top: 50vh;
	left: 1em;
	border-left: none;
	border-top: 1em solid transparent;
	border-right: 1.5em solid rgba(255,255,255,0.8);
	border-bottom: 1em solid transparent;
	z-index: +1004;
}

/* next button */
<?php
$arr = [];
for($i=0;$i<$n - 1;$i++) {
	$k = $i + 1;
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$k.'"]';
}
echo implode(",\n", $arr)." {\n";
?>
	display: block;
	position: fixed;
	width: 0;
	height: 0;
	top: 50vh;
	right: 1em;
	border-left: 1.5em solid rgba(255,255,255,0.8);
	border-top: 1em solid transparent;
	border-right: none;
	border-bottom: 1em solid transparent;
	z-index: +1002;
}


@media screen and (orientation: portrait) {
<?php
$arr = [];
for($i=0;$i<$n;$i++) {
	$arr[] = '#img'.$i.':target ~ a[href="#img'.$i.'"] img';
}
echo implode(",\n", $arr)." {\n";
?>
		display: inline-block !important;
		visibility: visible;
		position: relative;
		object-fit: contain;
		width: 100%;
		height: auto;
		max-height: 100%;
		top: 50vh;
		transform: translateY(-50%);
	}
}
