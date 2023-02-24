<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="img/icon.png">

	<!--SLIDER-->
    <link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- JdSlider -->
	<script src="js/plugins/jquery.jdSlider-latest.js"></script>
	<script src="js/plugins/pagination.min.js"></script>

	<!-- scrollorama -->
	<script src="js/plugins/jquery.superscrollorama.js"></script>
	<script src="js/plugins/TweenMax.min.js"></script>

	<!-- scrollup -->
	<script src="js/plugins/scrollUP.js"></script>
	<script src="js/plugins/jquery.easing.js"></script>

    <!--Estilos-->
	<link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/32cad9dbcb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


	<title>ShaCakes</title>

</head>

<body>
	<!--==========================
	=           PRELOAD          =
	===========================-->
	<div id="preload">

		<div id="porcentajeCarga">0%</div>

		<div id="lineaCarga">
		
			<div id="rellenoCarga"></div>
		
		</div>
		
		<div id="estadoCarga"></div>
	
	</div>


	<!--==========================
	=         CABECERA           =
	===========================-->
</body>


<header class="container-fluid">

	<div class="container p-0">

		<div class="row">

			<!--==========================
			=            Logo            =
			===========================-->
			<div class="col-10 col-sm-11 col-md-8 col-lg-7 p-1 p-xl-0 pt-2 pt-lg-2">
				
				<a href="index.html">	
					<img src="img/shacakes-largo2.png" alt="Logo de ShaCakes" class="img-fluid logotipo">
				</a>

			</div>

			<!--====================================
			=            Redes sociales            =
			=====================================-->
			<div class="d-none d-md-block col-2 col-lg-3 redes">
				<ul class="d-flex justify-content-end pt-2 mt-1">
				
					<li>
						<a href="https://www.facebook.com" target="blank">
							<i class="fa-brands fa-facebook lead float-left rounded-circle text-white mr-1">
								
							</i>
						</a>
					</li>

					<li>
						<a href="https://www.instagram.com" target="blank">
							<i class="fa-brands fa-instagram lead float-left rounded-circle text-white mr-1">
								
							</i>
						</a>
					</li>

					<li>
						<a href="https://www.twitter.com" target="blank">
							<i class="fa-brands fa-twitter lead float-left rounded-circle text-white	mr-1">
								
							</i>
						</a>
					</li>

					<li>
						<a href="https://www.youtube.com" target="blank">
							<i class="fa-brands fa-youtube lead float-left rounded-circle text-white	mr-1">
								
							</i>
						</a>
					</li>

					<li>
						<a href="https://www.snapchat.com" target="blank">
							<i class="fa-brands fa-snapchat lead float-left bg-success rounded-circle text-white mr-1">
								
							</i>
						</a>
					</li>
					
				</ul>
			
			</div>

			<!--==============================
			=            Buscador            =
			===============================-->
			<div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1">

				<!-- Lupa -->
				<div class="d-none d-md-block pr-4 pr-lg-5 mt-1">

					<i class="fas fa-search lead" data-toggle="collapse" data-target="#buscador"></i>

				</div>

				<!-- Menú -->
				<div class="m-0 mt-sm-1 mt-md-0 pr-0 pr-sm-2 pr-lg-3">

					<i class="fas fa-bars lead"></i>

				</div>	

			</div>

			<!--==============================
			=            ENTRADA DEL BUSCADOR            =
			===============================-->
			<div id="buscador" class="collapse col-12">

				<div class="input-group float-right w-50 pl-xl-5 pb-3">

	    			<input type="text" class="form-control" placeholder="Buscar">

	    			<div class="input-group-append">

	      				<span class="input-group-text">

	      					<i class="fas fa-search"></i>

	      				</span>

    				</div>

  				</div>
			
			</div>

		</div>

	</div>

</header>

<!--==========================================
=            Redes Sociales Móvil            =
===========================================-->
<div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">
	
	<ul class="d-flex justify-content-center p-0">
		
		<li>
			<a href="https://www.facebook.com" target="blank">
				<i class="fa-brands fa-facebook lead float-left rounded-circle text-white mr-3 mr-sm-4">
					
				</i>
			</a>
		</li>

		<li>
			<a href="https://www.instagram.com" target="blank">
				<i class="fa-brands fa-instagram lead float-left rounded-circle text-white mr-3 mr-sm-4">
					
				</i>
			</a>
		</li>

		<li>
			<a href="https://www.twitter.com" target="blank">
				<i class="fa-brands fa-twitter lead float-left rounded-circle text-white	mr-3 mr-sm-4">
					
				</i>
			</a>
		</li>

		<li>
			<a href="https://www.youtube.com" target="blank">
				<i class="fa-brands fa-youtube lead float-left rounded-circle text-white	mr-3 mr-sm-4">
					
				</i>
			</a>
		</li>

		<li>
			<a href="https://www.snapchat.com" target="blank">
				<i class="fa-brands fa-snapchat lead float-left rounded-circle text-white mr-3 mr-sm-4">
					
				</i>
			</a>
		</li>
		
	</ul>

</div>
