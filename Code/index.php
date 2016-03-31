<?php
include_once('PHP_APP/app.php');
$posts = get_posts();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">

	<title>Test de développement</title>

	<meta name="description" content="Ceci est un test de développement" />

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	

</head>
<body>
	<header>
		<div class="banner">
			<img src="img/banner.png" />
		</div>
		<div class="logo">
			<img src="img/logo.png" />
		</div>
	</header>
	<main>
		<h1>Office de Tourisme de Martigues-sur-mer</h1>
		<section>
			<h2>Les bons plans du territoire</h2>
<?php
			for($i=0;$i<=count($posts)-1;$i++)
			{
				$username=$posts[$i]->username;
				$avatar=$posts[$i]->profile_pic;
				$premium=$posts[$i]->is_premium;
				$date=$posts[$i]->date;
				$type=$posts[$i]->type;
				$content=$posts[$i]->post_content;
				$url=$posts[$i]->url;
				if ($type=="news")
				{
					//color rond = bleu
				}
				else
				{
					//color rond = orange
				}
				if ($premium==true)
				{
					//color du nom rond = orange
				}
				else
				{
					//color du nom = noir
				}
				echo "<article><div>";
				echo "<div class='avatar'><img src='img/profile_pics/".$avatar."' /></div>";
				echo "<div><h3class='titreAnnonce'>".$username."</h3>".date('d/m/Y', $date)."</div>";
				echo "</div></article>";
				
				
				
			}
			//echo var_dump($posts);
?>
			<article>
				<div>
					<div class='avatar'>
						
					</div>
					<div class="titreAnnonce">
						<h3>Restaurant du golf</h3>
					</div>
					<div>
						icone
					</div>
				</div>
			</article>
		
		</section>
		
	</main>
	<footer>
		<p>
			Fourni par Bouches-du-Rhône Tourisme. <a href="#">Visitez la Provence.</a>
		</p>
	</footer>

</body>
</html>