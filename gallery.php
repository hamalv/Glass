<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include( $path . "/inc/header.php");
  $gallery_name = $_GET['gallery'];
  $directory = "css/images/" . $gallery_name . "/";
  $images = glob($directory . "*.*");
?>

<div class="container-fluid container-xl text-center p-5">
  <div class="row">
    <div class="col-12">
      <h2>
        <?php
          if ($gallery_name == 'spoguli') { echo "Spoguļi"; }
          elseif ($gallery_name == 'interjeraspoguli') { echo "Interjera Spoguļi"; }
          elseif ($gallery_name == 'matejums') { echo "Matējums"; }
          elseif ($gallery_name == 'virtuvespaneli') { echo "Virtuves Paneļi"; }
          elseif ($gallery_name == 'duskabines') { echo "Duškabīnes"; }
          elseif ($gallery_name == 'pirtissaunas') { echo "Pirtis un Saunas"; }
          elseif ($gallery_name == 'stiklasienas') { echo "Stikla Sienas"; }
          elseif ($gallery_name == 'stikladurvis') { echo "Stikla Durvis"; }
          elseif ($gallery_name == 'margas') { echo "Stikla Margas"; }
          elseif ($gallery_name == 'ruditaisstikls') { echo "Rūdītais Stikls"; }
          elseif ($gallery_name == 'konstrukcijas') { echo "Stikla un Spoguļu konstrukcijas"; }
          elseif ($gallery_name = 'dekorativie') { echo "Dekoratīvie stikli"; }
          else { echo "Šādas galerijas nepastāv"; };
        ?>
      </h2>
    </div>
  </div>
</div>
<!-- ################################# -->

<div class="container-fluid container-xl">
  <div class="card-columns ">

      <?php
        foreach($images as $image) {
          echo '<div class="card"><a data-fslightbox="gallery" href="'.$image.'"><img src="'.$image.'" class="card-img-top rounded" alt="'.$gallery_name.'"></a></div>';
        }
      ?>

  </div>
</div>




<?php
  include( $path . "/inc/footer.php");
?>
