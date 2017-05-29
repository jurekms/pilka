
<div class="ui segments" >
  <div class="ui clearing segment">
  <table class="ui fixed single line celled table very compact striped selectable">

    <thead>
      <tr>
        <th>Login</th>
        <th>Imie i nazwisko</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($users as $user) {
        echo('<tr>');
        echo('<td>'.$user->username.'</td>');
        echo('<td>'.$user->first_name.' '.$user->last_name.'</td>');
        echo('</tr>');
      }?>
    </tbody>
  </table>

  <div class="ui right floated tiny buttons">
    <button class="ui red button" id="user_close">WYJDŹ</button>
    <div class="or" data-text="lub"></div>
    <button class="ui positive button">DODAJ</button>
  </div>
  </div>

  <?php if(isset($__pagination)) echo($__pagination); ?>
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
