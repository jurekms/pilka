
<div class="ui blue segments" >
  <div class="ui clearing segment">
    <?php
     echo(form_open('userAdmin/edit', 'class="ui form"'));

     ?>




     <h4 class="ui dividing header">Dane użytkownika</h4>

       <div class="fields">

         <div class="six wide field">
           <label>login</label>
           <?php echo(form_input(array(
             'name'          => 'shipping[first-name]',
             'type'            => 'text',
             'value'         => '',
             'color'      =>'red',
             'placeholder'  =>  'login'
             )));?>
         </div>

         <div class="ten wide field">
           <label>email</label>
             <?php echo(form_input(array(
               'name'          => 'shipping[last-name]',
               'type'            => 'email',
               'value'         => '',
               'placeholder'  =>  'email'
               )));?>
           </div>
         </div>
         <div class="two fields">

           <div class="field">
             <label>Imię</label>
             <?php echo(form_input(array(
               'name'          => 'shipping[first-name]',
               'type'            => 'text',
               'value'         => '',
               'placeholder'  =>  'name'
               )));?>
           </div>

           <div class="field">
             <label>Nazwisko</label>
               <?php echo(form_input(array(
                 'name'          => 'shipping[last-name]',
                 'type'            => 'text',
                 'value'         => '',
                 'placeholder'  =>  'name'
                 )));?>
             </div>
           </div>

           <div class="ui right floated tiny buttons">
             <button class="ui button">WYJDŹ</button>
             <div class="or" data-text="lub"></div>
             <button class="ui positive button">ZAPISZ</button>
           </div>



       </div>




     <?php





     echo(form_close());
     ?>


  </div>
</div>
