
<div class="ui segments" >
<div class="ui clearing segment">
<table class="ui fixed single line celled table very compact striped selectable">
  <thead>
    <tr><th>Login</th>
    <th>Imie i nazwisko</th>

  </tr></thead>
  <tbody>
    <?php
    foreach ($users as $user) {
      echo('<tr>');
      echo('<td>'.$user->username.'</td>');
      echo('<td>'.$user->first_name.' '.$user->last_name.'</td>');
      echo('</tr>');
    }
    ?>
  </tbody>
</table>
</div>

<div class="ui clearing segment">
  <?php if(isset($__pagination)) echo($__pagination); ?>
</div>

<div class="ui clearing segment ">
  <button class="ui  right floated basic small button " id="user_add">
    <i class="icon add user"></i>
  DODAJ
</button>
<button class="ui  right floated basic small button " id="user_close">
  <i class="icon sign out"></i>
ZAMKNIJ
</button>
</div>



</div>


<script>

$(".pagination a").click(function() {
  var urlPagination=$(this).attr("href");
  $("#rest > div.six.wide.column").load(urlPagination);

  return false;
}
)

$("#user_close").click(function(){
  $("#rest > div.six.wide.column").empty();

})



</script>
