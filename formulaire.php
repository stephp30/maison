
<body>

	<?php include 'header.php' ?>

<center><h1 class="amber-text text-darken-1">Enregistrer votre réservation</h1></center>

<!-- Formulaire -->
<div class="container">
<form class="col s12" method = 'get' action='' >
<div class="row">

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">account_circle</i>
        <input id="testNom" type="text" class="validate" pattern="^[a-zA-Z]+$" title="Le nom ne doit contenir que des lettres" aria-require required>
        <label for="testNom">Nom</label>
      </div>

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" pattern="^[a-zA-Z]+$" title="Le prénom ne doit contenir que des lettres" required>
        <label for="icon_prefix">Prénom</label>
      </div>

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" type="tel" class="validate" pattern="^[0-9]{10}$"required>
        <label for="icon_telephone">Téléphone</label>
      </div>

      <div class="input-field col s12 m6">
        <i class="material-icons prefix">mail</i>
        <input id="mail" type="email" class="validate" pattern="(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)" title="Entrer un mail valide" required>
        <label for="mail">E-mail</label>
      </div>    

       <div class="input-field col s12 m6"> 
            <i class="material-icons prefix">today</i>              
            <label>Début du Séjour</label>              
            <input type = "date" class = "datepicker" />    
       </div>      

       <div class="input-field col s12 m6">
          <i class="material-icons prefix">hotel</i>
          <input value="" id="nuitee" type="number" class="validate"  pattern="(^[0-9]+$)" title="Entrer un nombre" required>
          <label >Nombre de nuitée</label>
       </div>

      <div class="input-field col s12 m6">
          <i class="material-icons prefix">accessibility</i>
          <select>
             <option value="" disabled selected>Nombre de personnes</option>
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
          </select>
          <label></label>
      </div>

<!-- combo region -->
      <div class="input-field col s12 m6">
          <i class="material-icons prefix">add_location</i>
          <select>
             <option value="" disabled selected>Région</option>
             <option value="1">	Auvergne-Rhône-Alpes</option>
             <option value="2">Bourgogne-Franche-Comté</option>
             <option value="3">Bretagne</option>
             <option value="4">	Centre-Val de Loire</option>
             <option value="5">	Corse</option>
             <option value="6">Grand Est</option>
             <option value="7">Hauts-de-France</option>
             <option value="8">Île-de-France</option>
             <option value="9">	Normandie</option>
             <option value="10">Nouvelle-Aquitaine</option>
             <option value="11">Occitanie</option>
             <option value="12">Pays de la Loire</option>
             <option value="13">Provence-Alpes-Côte d'Azur</option>
             <option value="14">Outre-Mer</option>
             <option value="15">International</option>
          </select>
          <label></label>
      </div>

<div class="col s12 ">

<!-- option -->
<div class="col s6 ">
<center><h5>Option 10€ par jour et par Option</h5></center>
</BR>
      <input type="checkbox" id="test1" />
      <label class="col s12 m4" for="test1">&nbsp;&nbsp;&nbsp;Animal</label>
    
      <input type="checkbox" id="test2"  />
      <label class="col s12 m4 " for="test2">&nbsp;&nbsp;&nbsp;Parking</label>

      <input type="checkbox" id="test3"  />
      <label class="col s12 m4" for="test3">&nbsp;&nbsp;&nbsp;Fumeur</label>    
</div>

<!-- type sejour -->
<div class="col s6 ">
<center><h5 >Type de Sejour</h5></center>
</BR>

      <label class="col s12 m4 "></label>

      <input  name="group1" type="radio" id="test4" />
      <label class="col s12 m4 " for="test4">Loisir</label>
   
      <input  name="group1" type="radio" id="test5" />
      <label class="col s12 m4 " for="test5">Professionnel</label>
</div>

</div>

<!-- Boutons -->
<div class="col s12 ">
</BR>
</BR>
</BR>
<a class="waves-effect waves-light btn amber accent-2" id="view" ><i class="material-icons right">attach_money</i>Vérifier le tarif</a>
<button class="btn waves-effect waves-light amber accent-2" type="submit" value="Envoyer" >Valider
    <i class="material-icons right">send</i>
  </button>

  <!-- Resultat -->
  <input value="99 €" id="tarif" type="text" >
  <label >Tarif</label>
  <input value=" " id="total" type="text" >
  <label >Total</label>
</div>

</form>
</div>
</div>



	<?php include 'footer.php' ?>


</body>