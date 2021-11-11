<?php
    if(!isset($_SESSION['admin'])){
        header('location:../../index.html');
    }
if(isset($_GET['addSkills'])){
echo'
<div class="col-12 col-lg-8 col-lg-6">
           <h4>Compétences :</h4>
   <form  action="traitementAjout.php" method="post" enctype="multipart/form-data">
   <label for="title" class="form-label">titre :</label> 
   <input class="form-control" type="text" name="title[]" id="title">

   <label for="file" class="form-label">Fichier :</label>
   <input class="form-control" type="file" name="file[]" id="file">

   <label for="prog" class="form-label">Progression :</label> 
   <input class="form-control" type="text" name="prog[]" id="prog">

   <label for="description" class="form-label">description :</label> 
   <textarea class="form-control" name="description[]" id="description" cols="30" rows="10" style="resize:none"></textarea>

   
   <button class="btn btn-info" type="submit">Enregistrer</button>
   </form>
           </div>
       </div>';
 }
    if(isset($_GET['addProjects'])){
        echo'
<div class="col-12 col-lg-8 col-lg-6">
           <h4>Projets :</h4>
   <form  action="ajouterProjects.php" method="post" enctype="multipart/form-data">
   <label for="title" class="form-label">titre :</label> 
   <input class="form-control" type="text" name="title[]" id="title">

   <label for="date" class="form-label">date :</label> 
   <input class="form-control" type="text" name="date[]" id="prog">

   <label for="description" class="form-label">description :</label> 
   <textarea class="form-control" name="description[]" id="description" cols="30" rows="10" style="resize:none"></textarea>

   <label for="file" class="form-label">Fichier :</label>
   <input class="form-control" type="file" name="file[]" id="file">

   <label for="lien" class="form-label">Lien :</label>
   <input class="form-control" type="text" name="lien[]" id="lien">
   
   <button class="btn btn-info" type="submit">Enregistrer</button>
   </form>
           </div>
       </div>';
    }

