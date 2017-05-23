<table class="ui celled selectable table">
  <thead>
    <tr><th>Login</th>
    <th>Imie i nazwisko</th>
    <th>Akcja</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>JUREK</td>
      <td>Jerzy</td>
      <td>Maczenski</td>
    </tr>
    <tr>
      <td>PIOTR</td>
      <td>Piotrek</td>
      <td>
        <div class="ui label">
          <i class="edit icon"></i>
        </div>
        <div class="ui label">
          <i class="delete icon"></i>
        </div>
      </td>
    </tr>
    <tr>
      <td>AGA</td>
      <td>Agnieszka</td>
      <td>Sarapata</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th colspan="5">
        <div class="ui right floated pagination borderless menu">
            <?php if(isset($__pagination)) echo($__pagination); ?>
        </div>
      </th>
    </tr>

  </tfoot>
</table>



<script>

$( ".table tbody tr td" ).click(function() {
  alert($(this).text());
})




</script>
