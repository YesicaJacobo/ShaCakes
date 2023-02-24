<?php
get_header()
?>

<!--===========================
=            Banner           =
============================-->
	<div class="bannerEstatico">
		


	</div>

        <section class="jd-slider fade-slider">

            <div class="slide-inner">

            	<!--==============================
            	=            Imagenes            =
            	===============================-->
                <ul class="slide-area">

                    <li>

                        <img src="img/03.fondo1-corto.jpg" alt="Masa" class="img-fluid">

                    </li>

                    <li>

                        <img src="img/03.fondo2-corto.jpg" alt="azucar glas" class="img-fluid">

                    </li>
                        
                    <li>

                        <img src="img/03.fondo3-corto.jpg" alt="harina" class="img-fluid">

                    </li>

                    <li>

                        <img src="img/03.fondo4-corto.jpg" alt="pasteles" class="img-fluid">

                    </li>

                </ul>

            </div>
            
            <!--===============================
            =            Controles            =
            ================================-->
            <div class="controller d-none">

                <a href="#" class="auto">

                    <i class="fas fa-play fa-xs"></i>
                    <i class="fas fa-pause fa-xs"></i>

                </a>

                <div class="indicate-area">
                	
               	

                </div>

            </div>

        </section>

   


<!--=========================================
=            Buscador para móvil            =
==========================================-->
<div class="container d-block d-md-none py-3">

	<div class="input-group input-group-sm">

	    <input type="text" class="form-control" placeholder="Buscar">

	    <div class="input-group-append">

	      <span class="input-group-text"><i class="fas fa-search"></i></span>

    	</div>

  </div>

</div>

<!-- =========================
=            MENÚ            =
===========================-->
<div class="container-fluid menu">

  <a href="#" class="btnClose">X</a>

  <ul class="nav flex-column text-center">

    	<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Galletas</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Gelatina</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Pasteles</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Bollitos</a>

		</li>

		<li class="nav-item">
			
			<a class="nav-link text-white" href="categorias.html">Sin horno</a>
			
		</li>
		
  </ul>
  
</div> 


<!--====================================
=          GRID DE CATEGORIAS          =
=====================================-->
<div class="container-fluid py-2 py-md-5 bg-white grid">

	<div class="container p-0">

		<div class="d-flex">

			<div class="d-flex flex-column columna1">
			    <figure class="p-2 photo1" vinculo="categorias.html">
			    	<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas de Galletas</p>
			    </figure>
			    <figure class="p-2 photo2" vinculo="categorias.html">
			    	<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas de Gelatinas</p>
			    </figure>
			    <figure class="d-block d-md-none p-2 photo6" vinculo="categorias.html">
			    	<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas Heladas</p>
			    </figure>
		  	</div>

		  	<div class="d-flex flex-column flex-fill columna2">
			  	<div class="d-block d-md-flex">
				    <figure class="p-2 flex-fill photo3" vinculo="categorias.html">
				    	<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas de Pasteles</p>
				    </figure>
				    <figure class="p-2 flex-fill photo4" vinculo="categorias.html">
				    	<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas de Cupcakes</p>
				    </figure>
			  	</div>

		    	<figure class="p-2 photo5" vinculo="categorias.html">
		    		<p class="text-uppercase p-1 p-md-3 p-xl-4">Recetas sin horno</p>
		    	</figure>
			  
		  	</div>
	
		</div>

	</div>

	
</div>

</div>

<!--====================================
=            CONTENIDO BLOG            =
=====================================-->
	<div class="container-fluid bg-white pb-4 contenidoInicio">
		<div class="container">
			<div class="row">

				<!-- COLUMNA IZQUIERDA -->
				<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
					<h1 class="my-5 text-danger">ERROR 404</h1>
					<h3>Lo sentimos, esta pagina no existe</h3>
			

				</div>

				<!-- COLUMNA DERECHA -->
				<?php get_sidebar() ?>
			</div>

		</div>
	
	</div>


<!--====================================
=                FOOTER                =
=====================================-->

<?php
get_footer()
?>
