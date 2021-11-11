<?php
    if(!isset($_SESSION['admin'])){
        header("location:../../index.html");
    }
require 'bd.php';
$tab = [];
$sql = 'select * from projects order by PK_projects';
$req = $db ->query($sql);

echo '
<div class="container">';

  echo'
    <h1 class="h1 text-center bg-flip text-white">UPDATE/SUPRIMER:</h1>
    <div class="row">';
    if(isset($_GET['UpProjects']) && $_GET['UpProjects']==true ){
        echo' 
        <div class="col-12 col-sm-6 bg-success col-lg-6 m-auto">
        <h3 class="text-center text-white">UPDATE SUCCESS FULL</h3>
        </div>';
        }elseif(isset($_GET['UpProjects']) && $_GET['UpProjects']===0){
            echo' 
            <div class="col-12 bg-danger col-sm-6 col-lg-6 m-auto">
            "<h3>UPDATE ERROR</h3>"
            </div>';
        }
        echo '<div class="row">';
    while($data = $req ->fetch()){
echo '

<div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-4">
<div class="card pt-1 pb-2">
    <div class="body">
        <div class="card-img d-flex justify-content-center pt-2 pb-2">
            <img src="img/'.$data['img_projects'].'" alt="" class="img400">
        </div>
        <div class="card-title d-flex align-items-center">
             <h3>'.$data['title_projects'].'</h3>
        </div>
        <div class="dateProject d-flex align-items-center">
        
        <p>'.$data['date_projects'].'</p>  
        ';

                echo'</div>
        <div class="card-text">
            '.$data['description_projects'].'
        </div>
        <div class="card-text">
            '.$data['link_projects'].'
        </div>
        
    </div>
    <a class="btn overflow-hidden btn-info position-relative" href="updateProjects.php?id='.$data['PK_projects'].'">UPDATE</a>
    <a class="btn btn-danger overflow-hidden position-relative" href="traitementDelete.php?upProjects&id='.$data['PK_projects'].'">DELETE</a>
</div>
</div>

';
}
echo'
</div>
    </div>
</div>

';
?>
