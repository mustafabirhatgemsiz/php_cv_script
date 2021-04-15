<?php 

 ?>

<div class="w3-twothird">
    
    <div class="w3-container w3-card w3-white w3-margin-bottom">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $getsetting['site_color']; ?>"></i>Sertifikalarım</h2>
            <?php  
            $askcertificates=$db->prepare("SELECT * FROM tblcertificates");
            $askcertificates->execute();
            $getcertificates=$askcertificates->fetchALL(PDO::FETCH_ASSOC);
            foreach ($getcertificates as $row) {
            ?> 
            

      <div class="w3-container">
        <h5 class="w3-opacity"><b><?php echo $row['certificate_name']; ?></b> - <?php echo $row['certificate_company']; ?></h5>
        <h6 class="w3-text-<?php echo $getsetting['site_color']; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['certificate_date']; ?></h6>
        <a target="_blank" href="<?php echo $row['certificate_link']; ?>"><p><?php echo $row['certificate_desc']; ?></p></a>
        <hr>
      </div>
        <?php 
            }

          ?>

    <div class="w3-container w3-card w3-white">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $getsetting['site_color']; ?>"></i>Eğitim</h2>

            <?php 

            $askschools=$db->prepare("SELECT * FROM tblschools");
            $askschools->execute();
            $getschools=$askschools->fetchALL(PDO::FETCH_ASSOC);
            foreach ($getschools as $row) {
              if ($row['school_continue']==1) {
               ?>
             <div class="w3-container">
            <h5 class="w3-opacity"><b> <?php echo $row['school_name']; ?> </b></h5>
            <h6 class="w3-text-<?php echo $getsetting['site_color']; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['school_date']; ?> <span style="background-color: <?php echo $getsetting['site_color']; ?>" class="w3-tag w3-real w3-round" >Hala devam ediyor.</span></h6>
             <p><?php echo $row['school_desc']; ?></p>
              <hr>
             </div>
               <?php 
              }else{
                ?>
            <div class="w3-container">
            <h5 class="w3-opacity"><b> <?php echo $row['school_name']; ?> </b></h5>
            <h6 class="w3-text-<?php echo $getsetting['site_color']; ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['school_date']; ?> <span>2021</span> </h6>
             <p><?php echo $row['school_desc']; ?></p>

             </div>


                <?php


          
              }
            }

               ?>
 

        
    

      

    </div>
    </div>