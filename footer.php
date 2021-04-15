<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>

<footer class="w3-container w3-<?php echo $getsetting['site_color']; ?> w3-center w3-margin-top">
  <p style="position: center">Sosyal Medya ve İletişim Adreslerim</p>
  <?php 
  $asksocialmedia=$db->prepare("SELECT * FROM tblsocialmedia");
  $asksocialmedia->execute();
  $getsocialmedia=$asksocialmedia->fetch(PDO::FETCH_ASSOC);
  ?>


  <?php 
  if ($getsocialmedia['sm_facebook']=="") { 
    null;
  }else{ 
    ?>
    <a class="blue" href="<?php echo $getsocialmedia['sm_facebook'] ?>" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>

  <?php 
  if ($getsocialmedia['sm_instagram']=="") { 
    null;
  }else{ 
    ?>
    <a class="deeppink" href="<?php echo $getsocialmedia['sm_instagram'] ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>

  <?php 
  if ($getsocialmedia['sm_twitter']=="") { 
    null;
  }else{ 
    ?>
    <a class="lightblue" href="<?php echo $getsocialmedia['sm_twitter'] ?>" target="_blank">  <i class="fa fa-twitter w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>

  <?php 
  if ($getsocialmedia['sm_linkedin']=="") { 
    null;
  }else{ 
    ?>
    <a class="darkblue" href="<?php echo $getsocialmedia['sm_linkedin'] ?>" target="_blank">  <i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>

  <?php 
  if ($getsocialmedia['sm_youtube']=="") { 
    null;
  }else{ 
    ?>
    <a class="red" href="<?php echo $getsocialmedia['sm_youtube'] ?>" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>
  
  <?php 
  if ($getsocialmedia['sm_github']=="") { 
    null;
  }else{ 
    ?>
    <a class="black" href="<?php echo $getsocialmedia['sm_github'] ?>" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
    <?php 
  } 
  ?>




  <p><?php echo "2020 - ";  echo date("Y"); echo $getsetting['site_footer'] ;?>
  <br><a href="http://localhost/cvscripti/" target="_self" style="text-decoration: none;">Mustafa Birhat Gemsiz</a></p>
</footer>
</div>
</div>
</body>
</html>