<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Piłka</title>
	</head>
<body id="box-warp">
	
<script src="/assets/semantic/jquery-1.12.3.min.js"></script>
<link rel="stylesheet" href="/assets/semantic/semantic.min.css" >
<link rel="stylesheet" href="/assets/css/pilka.css">

<script src="/assets/semantic/jquery-1.12.3.min.js"></script>
<script src="/assets/semantic/components/transition.js"></script>


<div class="ui grid">
	<div class="row" id="menu">
		<div class="one wide column"></div>
		<div class="six wide column">  <?php if(isset($__menu)) $this->load->view($__menu); ?></div>
	</div>
	<div class="row" id="rest">
	<div class="two wide column"></div>
	  <?php if(isset($__info)) print_r($__info); ?>
	</div>
	
	
	 <?php if(isset($__match)) $this->load->view($__match); ?>
	
	 <?php if(isset($__login)) $this->load->view($__login); ?>

		
		

	

	

</div>
 
 

	
</body>
</html>


