<?php
	//echo("Estoy iniciando mi proyecto");
	//phpinfo();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Panel de administracion</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="web/css/materialize.min.css"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<style>
			body {
				display: flex;
			    min-height: 100vh;
				flex-direction: column;
			}
			main {
				flex: 1 0 auto;
			}
			table.striped > tbody > tr:nth-child(odd) {
				background-color: #c5cae9;
			}
			.pagination li.active {
			  background-color: #bbdefb;
			}

		</style>
	</head>
	<body>
		<!--JavaScript at end of body for optimized loading-->
		<nav>
			<div class="nav-wrapper  teal accent-4">
				<a href="#!" class="brand-logo center"><i class="material-icons">build</i>Mi Panel</a>
				<ul class="right hide-on-med-and-down">
					<li>	
						 <a href="index.php?r=cursos" class="tooltipped" data-position="bottom" data-tooltip="Cursos">
							<i class="material-icons">assignment</i>
						</a>
					</li>
					<li>
                        <a href="index.php?r=tcursos" class="tooltipped" data-position="bottom" data-tooltip="Tipos de cursos">
							<i class="material-icons">format_list_bulleted</i>
						</a>
					</li>
					<li>
                    <a href="index.php?r=alumnos" class="tooltipped" data-position="bottom" data-tooltip="Alumnos">
							<i class="material-icons">person</i>
						</a>
					</li>
					<li>
                    <a href="index.php?r=profesores" class="tooltipped" data-position="bottom" data-tooltip="Profesores">
							<i class="material-icons">group</i>
                        
						</a>
					</li>
					<li>
						<a href="index.php">
							<i class="material-icons">settings</i>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<main>
			<div class="container">
				<?php include("router.php"); ?>
			</div>
		</main>
		<footer class="page-footer grey darken-1">
			<div class="footer-copyright">
				<div class="container">
						© 2022 Copyright
                    <div class="right">
						<a class="grey-text text-lighten-4 right" href="#!">&nbsp;Contacto&nbsp;&nbsp;</a>
						<a class="grey-text text-lighten-4 right" href="#!">&nbsp;Nosotros&nbsp;&nbsp;</a>
						<a class="grey-text text-lighten-4 right" href="#!">&nbsp;Panel&nbsp;&nbsp;</a>
                     </div>
			    </div>
		</footer>
		<script type="text/javascript" src="web/js/materialize.min.js"></script>
		<script>			
			document.addEventListener('DOMContentLoaded', function() {
				M.AutoInit();
			});
		</script>
	</body>
</html>