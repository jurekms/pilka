<div class="ui compact menu">
  <a class="item">
    <i class="settings icon"></i>
    Moje dane
  </a>
  <a class="item" >
    <i class="users icon"></i>
    Użytkownicy
  </a>
  <a class="item">
    <i class="soccer icon"></i>
    Mecze
  </a>
  <a class="item">
    <i class="refresh icon"></i>
    Odśwież
  </a>

  <a class="item" href="<?php echo site_url('welcome/logout');?>">
    <i class="sign out icon"></i>
    Wyloguj
  </a>
</div>


<script>



  $("#menu > div.six.wide.column > div > a:nth-child(2)").click(function(){

      $("#rest > div.six.wide.column").load("<?php echo site_url('userAdmin/userList');?>");
  }
)

$("#menu > div.six.wide.column > div > a:nth-child(1)").click(function(){
    $("#rest > div.six.wide.column").load("<?php echo site_url('userAdmin/edit');?>");
  }
)




</script>
