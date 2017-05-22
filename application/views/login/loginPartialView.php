<div class="twelve wide column">
</div>
<div class="four wide column">
	<div class="row">
		<div class="ui card">
			<div class="content">
				<div  class="ui form">
					<div class="field">
						<input type="text" id="loginName" placeholder="login">
					</div>
					<div class="field">
						<input type="text" id="password" placeholder="hasło">
					</div>
					
				</div>
			</div>
			<div class="extra content">
				<div class="ui right floated blue button" id="login-btn" >ZALOGUJ</div>
				<div class="ui right floated green button " id="reset-pwd-btn" >ZRESETUJ</div>
			</div>
			<div class="extra content" id="pwd-info" >
				<div class="ui icon message" id="reset-pwd-info">
					<i class="info sign green icon"></i>
					<div class="content">
						Wpisz nazwę użytkownika i naciśnij ZRESETUJ, na podany podczas rejestracji adres email zostanie wysłana informacja
					</div>
				</div>
			
				<div class="ui icon message" id="wrong-pwd-info">
					<i class="warning sign red icon"></i>
					<div class="content">
						błędny login lub hasło !
						<a id="reset-pwd-link"> RESET HASŁA </a>
					</div>
				</div>
				
			</div>
		
		</div>
	</div>
</div>

 <script>
$("#reset-pwd-btn").hide();
$("#reset-pwd-info").hide();
$("#wrong-pwd-info").hide();

$("#reset-pwd-link").click(function() {
	$("#password").hide();
	$("#wrong-pwd-info").hide();
	$("#login-btn").hide();
	$("#reset-pwd-btn").show();
	$("#reset-pwd-info").show();
}
)



$( "#reset-pwd-btn" ).click(function() {
  $.ajax({
    type     	: "POST",
    url      	: "<?php echo site_url('login/passwordReset');?>",
    data     : {
		loginName : $("#loginName").val(),
		resetPassword:1
    },
    success: function(retData) {
		parseData = $.parseJSON(retData);
       	if(parseData.loggedIN == 0) {

			window.location.href = '<?php echo site_url('welcome');?>';
		}


    },
    complete: function() {
        //ten fragment wykona się po zakończeniu łączenia - nie ważne czy wystąpił błąd, czy sukces
    },
    error: function(jqXHR, errorText, errorThrown) {
        //ten fragment wykona się w przypadku BŁĘDU
        //do zmiennej errorText zostanie przekazany błąd
    }
});
  
  
});




 
$( "#login-btn" ).click(function() {
  
  $.ajax({
    type     	: "POST",
    url      	: "<?php echo site_url('login/authorize');?>",
    data     : {
        loginName : $("#loginName").val(),
        password : $("#password").val(),
		resetPassword:0
    },
    success: function(retData) {
		parseData = $.parseJSON(retData);
       	if(parseData.loggedIN == 0) {
			$("#wrong-pwd-info").show();
		}
		else {
			window.location.href = '<?php echo site_url('welcome/index');?>';
		}
			

    },
    complete: function() {
        //ten fragment wykona się po zakończeniu łączenia - nie ważne czy wystąpił błąd, czy sukces
    },
    error: function(jqXHR, errorText, errorThrown) {
        //ten fragment wykona się w przypadku BŁĘDU
        //do zmiennej errorText zostanie przekazany błąd
    }
});
  
});



</script>

