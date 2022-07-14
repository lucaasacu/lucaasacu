<?php


		///backend/index.php?r=cursos

		if(isset($_GET['r']) && $_GET['r'] != ""){

			$ruta = $_GET['r'];    

			if($ruta == "cursos"){
				include("vistas/cursos_vista.php");
			}elseif($ruta == "profesores"){
				include("vistas/profesores_vista.php");
			}elseif($ruta == "alumnos"){
				include("vistas/alumnos_vista.php");
			}elseif($ruta == "tcursos"){
				include("vistas/tcursos_vista.php");
			}else{

				echo("<h2>Panel de administracion</h2>");

			}








		}else{

			echo("<h2>Panel de administracion</h2>");
		}









?>