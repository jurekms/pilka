<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Piłka</title>

		<link rel="stylesheet" href="/assets/css/pilka.css">
		<link rel="stylesheet" href="/assets/semantic/semantic.min.css" >

		<script src="/assets/jquery/jquery-3.2.1.min.js"></script>
		<script src="/assets/semantic/semantic.min.js"></script>

	</head>
<body id="box-warp">






<div class="ui grid">

	<div class="row" id="menu">
		<div class="one wide column"></div>
		<div class="six wide column">  <?php if(isset($__menu)) $this->load->view($__menu); ?></div>
	</div>

	<div class="row" id="rest">
		<div class="one wide column"></div>
		<div class="one wide column">

			  <?php if(isset($__info)) print_r($__info); ?>
		</div>
		<div class="six wide column" id="edit_dashboard">
		</div>
	</div>

	<div class="row" id="match_dashboard">
		<div class="one wide column"></div>
		<?php if(isset($__match)) $this->load->view($__match); ?>
	</div>


	<div class="row" >
		<div class="twelve wide column" > </div>
		<div class="four wide column" id="login_dashboard">
			<?php if(isset($__login)) $this->load->view($__login); ?>
		</div>
	</div>


</div>




</body>

</html>
