<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">

<title>Emerald Maoy</title>

<link rel="shortcut icon" href="http://localhost/wp-content/themes/amie-custom/images/favicon.ico/" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta property="og:title" content="Emerald Mayo" />

<meta property="og:image" content="http://localhost/wp-content/themes/amie-custom/images/aj_image.jpg/" />

<meta property="og:description" content="Official Site for the Art of Emerald Mayo" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<style type="text/css" media="screen">



</style>











<?php wp_head(); ?>

</head>

<body>





<?php



$p = get_page( $page_id );

$id = $p->ID;

$style = 'padding-top: 0%; height: 100%; width: 100%';



?>



	<?php

	if ($id == '4'){

	?>

<style>
#content { width: 100% !important;
}
</style>
	<?php

	}

	else{

	?>


<div id="container">

<div id="wrapper">

<div id="header" style="<?=$style?>">

<div id="nav">
<center><a href="http://www.rachelsherman.net/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/sherman_header.png"></center></a>
<a href="http://www.rachelsherman.net/living-room/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu1.png" alt="" /></a><a href="http://www.rachelsherman.net/the-first-hurt/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu2.png" alt="" /></a><a href="http://www.rachelsherman.net/stories-essays/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu3.png" alt="" /></a><a href="http://www.rachelsherman.net/appearances/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu4.png" alt="" /></a><a href="http://www.rachelsherman.net/writing-workshops/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu5.png" alt="" /></a><a href="http://www.rachelsherman.net/consulting/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu6.png" alt="" /></a></a><a href="http://www.rachelsherman.net/about/"><img src="http://www.rachelsherman.net/wp-content/themes/sherman-custom/images/backup/menu7.png" alt="" /></a>
</div>



<?php

	}

	?>

</div>