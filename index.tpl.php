<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="Hu">
<head>
	<title>1912 Előre</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<header>		
			<img src="./css/logo.png" alt="Logo">
			<h1>Békéscsaba 1912 Előre</h1>
			<section class="header">			
			<form method=get action="http://www.google.com/search">
				<input type=text name=q size=20 maxlength=255 value="">
				<input type=submit name=btng value="keresés">
			</form>
			<?php include("bejelentkezett.php");?>
			<script type="text/javascript" src="http://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang=hu"></script>
			</section>
		</header>

		<nav>
			<ul>
				<?php include("fomenu.php");?>
			</ul>
		</nav>
	  
<!---		<aside><!--- JOBB OSZLOP ELEJE 
      
		<section class="block_support">
			<h2>Támogatók</h2>
			<a href="http://www.dren.hu" target="_blank"><img src="kepek/tamogatok/bekes_dren_kft.png" alt="Békés-Drén Kft." title="Békés-Drén Kft."></a>
			<a href="http://www.radio1.hu/" target="_blank"><img src="kepek/tamogatok/radio1_web.png" alt="Rádió 1" title="Rádió 1"></a>
			<a href="https://www.merkantil.hu/hu/fooldal" target="_blank"><img src="kepek/tamogatok/merkantil_bank.png" alt="Merkantil Bank" title="Merkantil Bank"></a>
			<a href="https://www.mlsz.hu/cimke/merkantil-bank-liga" target="_blank"><img src="kepek/tamogatok/merkantil_bank_liga.png" alt="Merkantil Bank Liga" title="Merkantil Bank Liga"></a>
			<a href="http://www.mlsz.hu/" target="_blank"><img src="kepek/tamogatok/mlsz.png" alt="Magyar Labdarúgó Szövetség" title="Magyar Labdarúgó Szövetség"></a>
			<a href="http://www.vagyonkezelozrt.hu/" target="_blank"><img src="kepek/tamogatok/vagyonkezelo.png" alt="Békéscsaba Vagyonkezelő Zrt." title="Békéscsaba Vagyonkezelő Zrt."></a>
			<a href="http://www.bekescsaba.hu/" target="_blank"><img src="kepek/tamogatok/bekescsaba.png" alt="Békéscsaba Megyei Jogú Város" title="Békéscsaba Megyei Jogú Város"></a>
			<a href="http://www.sport-saller.hu/" target="_blank"><img src="kepek/tamogatok/saller_banner.png" alt="SportSaller.hu" title="SportSaller.hu"></a>
			
		</section>
		</aside><!--- JOBB OSZLOP VÉGE --->
	
		<article>
		<section class="post">
			<?php include("oldal/{$keres['fajl']}.php");?>
		</section>
		</article>
		
		<?php include("oldal/footer.php");?>
		
	</div>
</body>
</html>
