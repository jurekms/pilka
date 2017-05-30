
<div class="ui segments" >
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
           <label>email</label>

             <?php echo(form_input(array(
               'name'          => 'email',
               'type'            => 'email',
               'placeholder'   =>'adres email',
               'value'         => $user->email
               )));?>
               <div class="ui basic red pointing label">Pole email nie może byc puste !</div>
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

           <div class="ui error message"></div>

           <div class="ui right floated tiny buttons">
             <div class="ui orange button" id="user_cancel">WYJDŹ</div>
             <div class="or" data-text="lub"></div>
             <div class="ui positive submit button" id="user_save">ZAPISZ</div>
           </div>





            <?php echo(form_close()); ?>



       </div>

</div>

<script>
$("#user_cancel").click(function(){
  $("#edit_dashboard").empty();
})

$("#user_save1").click(function(){

  $("#edit_dashboard1").empty().load("<?php echo site_url('user/editByUser');?>");

})

$("#edit_dashboard > div > div > form").form({
    on: 'blur1',
    fields: {
        email: {
            identifier: 'email',
            rules: [{
                type: 'empty',
                prompt: 'pole nie może być puste'
            }]
        },
        password: {
            identifier: 'password',
            rules: [{
                type: 'empty',
                prompt: 'pole nie może być puste'
            }]
        },
        password_comfirmation: {
            identifier: 'password_comfirmation',
            rules: [{
                type: 'empty',
                prompt: 'pole nie może być puste'
            }]
        }
    }
});


</script>
