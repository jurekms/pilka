
<div class="ui segments" >
  <div class="ui clearing segment">


    <form  class="ui form" method="post" accept-charset="utf-8">
   <h4 class="ui dividing header">Dane użytkownika </h4>

     <div class="fields">
       <div class="six wide field">
         <label>login</label>
         <input type="text" name="username" value="administrator" readonly="true"  />
       </div>

       <div class="ten wide field">
         <label>email</label>

           <input type="email" name="email" value="admin@admin.com" placeholder="adres email"  />

       </div>


       </div>


       <div class="two fields">
         <div class="field">
           <label>Hasło</label>
           <input type="password" name="password" value="         "  />
         </div>

         <div class="field">
           <label>Powtórz hasło</label>
             <input type="password" name="password_comfirmation" value="         "  />
           </div>
         </div>


       <div class="two fields">
         <div class="field">
           <label>Imię</label>
           <input type="text" name="first_name" value="Jerzy"  />
         </div>

         <div class="field">
           <label>Nazwisko</label>
             <input type="text" name="last_name" value="Mączeński"  />
           </div>
         </div>

         <div class="ui error small message"></div>
         <div class="ui success small message"></div>

         <div class="ui right floated tiny buttons">
           <div class="ui orange button" id="user_cancel">WYJDŹ</div>
           <div class="or" data-text="lub"></div>
           <div class="ui positive submit button" id="user_save">ZAPISZ</div>
         </div>





          </form>




       </div>

</div>

<script>
$("#user_cancel").click(function(){
  $("#edit_dashboard").empty();
})




$('#edit_dashboard > div > div > form').form({
  onSuccess($event, $fields) {
    $.post("<?php echo site_url('user/editByUser');?>",$fields);
    return false;
  },
  fields:{

    email: {
      identifier: 'email',
      rules: [
        { type   : 'email',
          prompt : 'Wprowadź poprawny adres email !'
        },
        { type   : 'empty',
          prompt : 'Pole email nie może być puste !'
        }

      ]
    }


  }

})




</script>
