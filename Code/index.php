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

	<header >
		<div class="banner">
			<img src="img/banner.png" />
		</div>
		<div class="logo">
			<img src="img/logo.png" />
		</div>
	</header>
	<main class="col-xs-12">
		<h1>Office de Tourisme de Martigues-sur-mer</h1>
		<p class="intro">
			Quam aeternitati pulchrum factorum factorum consiliis autem sit non curant per quam haberet rem haberet superasset rem cur rem bonos.
		</p>
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
	/** Teste si l'annonce est du type news ou deal **/
				if ($type=="news")
				{
					//color rond = bleu
					$type="Actualité -";
					$icone="<div class='ico_news'></div>";
				}
				else
				{
					//color rond = orange
					$type="Promotion - ";
					$icone="<div class='ico_deals'></div>";
				}
	/** Teste si l'user est premium ou non **/
				if ($premium==true)
				{
					//color du nom = orange
					$is_prem="<h3 class='premium'>".$username."</h3>";
				}
				else
				{
					//color du nom = noir
					$is_prem="<h3 class='non_premium'>".$username."</h3>";
				}
				echo "<a href='".$url."' target='_blank'><article><div class='rectangle'></div>";
				echo "<div class='header_ann'>
				<div class='avatar col-1'>
					<img src='img/profile_pics/".$avatar."' />
				</div>";
				echo "<div class='col-2'>".$is_prem ."<div class='sub'>".$type.date('d/m/y', $date)."</div></div>";
				echo "<div class='col-3'>".$icone."</div></div>";
				echo "<div class='contenu'>".$content."</div>";
				echo "</article></a>";	
				
			}
?>
		
		</section>
		
	</main>
	<footer>
		<p>
			Fourni par Bouches-du-Rhône Tourisme. <a href="#">Visitez la Provence.</a>
		</p>
	</footer>

</body>
</html>