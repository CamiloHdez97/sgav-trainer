<?php

	include_once __DIR__.'/Templates/header.php';
	
?>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
		<ul class="side-menu">
			<li><a href="#" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="main">Main</li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i> Ubicaciones <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="enlace" data-urldestino="view/Countries/maincountry.php">Paises</a></li>
					<li><a href="#" class="enlace" data-urldestino="view/Cities/maincity.php">Regiones</a></li>
					<li><a href="#" class="enlace" data-urldestino="view/Regions/mainregion.php">Ciudades</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				
			</form>
			
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Ubicaciones</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Paises</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Regiones</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Ciudades</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="container">
				<div class="container-content" id="contentphp">

				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

<?php

	include_once __DIR__.'/Templates/footer.php';
	
?>

