
<div class="ui blue segments" >
  <div class="ui clearing segment">


    <?php
     echo(form_open('', array('class' => 'ui form')));
     ?>
     <h4 class="ui dividing header">Dane użytkownika </h4>

       <div class="fields">
         <div class="six wide field">
           <label>login</label>
           <?php echo(form_input(array(
             'name'          => 'username',
             'type'            => 'text',
             'readonly' => 'true',
             'value'         => $user->username

             )));?>
         </div>

         <div class="ten wide field">
           <label class="label" >email</label>
           <div class="ui disabled input">
             <?php echo(form_input(array(
               'name'          => 'email',
               'type'            => 'email',
               'placeholder'   =>'adres email',
               'value'         => $user->email
               )));?>
           </div>
         </div>

         </div>


         <div class="two fields">
           <div class="field">
             <label>Hasło</label>
             <?php echo(form_password(array(
               'name'          => 'password',
               'type'            => 'password',
               'value'         => "         "
               )));?>
           </div>

           <div class="field">
             <label>Powtórz hasło</label>
               <?php echo(form_password(array(
                 'name'          => 'password_comfirmation',
                 'type'            => 'password',
                 'value'         => "         "
                 )));?>
             </div>
           </div>


         <div class="two fields">
           <div class="field">
             <label>Imię</label>
             <?php echo(form_input(array(
               'name'          => 'first_name',
               'type'            => 'text',
               'value'         => $user->first_name
               )));?>
           </div>

           <div class="field">
             <label>Nazwisko</label>
               <?php echo(form_input(array(
                 'name'          => 'last_name',
                 'type'            => 'text',
                 'value'         => $user->last_name
                 )));?>
             </div>
           </div>



           <div class="ui right floated tiny buttons">
             <button class="ui button" id="user_cancel">WYJDŹ</button>
             <div class="or" data-text="lub"></div>
             <button class="ui positive button" id="user_save">ZAPISZ</button>
           </div>

            <?php echo(form_close()); ?>

       </div>

</div>

<script>
$("#user_cancel").click(function(){
  $("#rest > div.six.wide.column").empty();
})

$("#user_save").click(function(){
  
  $("#edit_dashboard").load("<?php echo site_url('user/editByUser');?>").fadeIn('500');
})


</script>
