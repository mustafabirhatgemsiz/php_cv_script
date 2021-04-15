  <?php 

  $askinfo=$db->prepare("SELECT * FROM tblinfo");
  $askinfo->execute();
  $getinfo=$askinfo->fetch(PDO::FETCH_ASSOC);

  ?>

<div class="w3-third">
    
    <div class="w3-white w3-text-grey w3-card-4">
      <div class="w3-display-container">
        <img src=" <?php echo $getinfo['info_image'] ?>" style="width:100%" alt="Avatar">
        <div class="w3-display-bottomleft w3-container w3-text-black">
          <h2 style="color: white"><?php echo $getinfo['info_name']; ?></h2>
        </div>
      </div>
      <div class="w3-container">
        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-<?php echo $getsetting['site_color']; ?>"></i><?php echo $getinfo['info_job']; ?></p>
        <a target="_blank" href="<?php echo $getinfo['info_residencelink'] ?>"><p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-<?php echo $getsetting['site_color']; ?>"></i><?php echo $getinfo['info_residence']; ?></p></a>
       <a  target="_blank" href= "mailto:<?php echo $getinfo['info_mail'] ?>"> <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-<?php echo $getsetting['site_color']; ?>"></i><?php echo $getinfo['info_mail']; ?></p></a>
       <a target="_blank" href="tel:<?php echo $getinfo['info_phone']; ?>"> <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-<?php echo $getsetting['site_color']; ?>"></i><?php echo $getinfo['info_phone']; ?></p></a>
      <a target="_blank" href="<?php echo $getinfo['info_whatsapplink'] ?>"> <p><i class="fa fa-whatsapp fa-fw w3-margin-right w3-large w3-text-<?php echo $getsetting['site_color']; ?>"></i><?php echo $getinfo['info_whatsapp']; ?></p></a>
        <hr>
             <p class="w3-large"><b><i class="fa fa-code fa-fw w3-margin-right w3-text-<?php echo $getsetting['site_color']; ?>"></i>Yazılım Becerilerim</b></p>
        <?php 

            $askskills=$db->prepare("SELECT * FROM tblskills");
            $askskills->execute();
            $getskills=$askskills->fetchALL(PDO::FETCH_ASSOC);

            foreach ($getskills as $row) {
            ?>  

        <p><?php echo $row['skill_name']; ?></p>
        <div class="w3-light-grey w3-round-xlarge">
          <div class="w3-round-xlarge w3-center w3-<?php echo $getsetting['site_color']; ?>" style="width:<?php echo $row['skill_rate']; ?>%"><?php echo $row['skill_rate']; ?>%</div>
        </div>
        <?php 
            }

          ?>

        <br>

        <p class="w3-large w3-text-theme"><b><i class="fa fa-laptop fa-fw w3-margin-right w3-text-<?php echo $getsetting['site_color']; ?>"></i>Program Becerilerim</b></p>
        <?php 

            $askprograms=$db->prepare("SELECT * FROM tblprograms");
            $askprograms->execute();
            $getprograms=$askprograms->fetchALL(PDO::FETCH_ASSOC);

            foreach ($getprograms as $row) {
            ?>  

        <p><?php echo $row['program_name']; ?></p>
        <div class="w3-light-grey w3-round-xlarge">
          <div class="w3-round-xlarge w3-center w3-<?php echo $getsetting['site_color']; ?>" style="height:24px;width:<?php echo $row['program_rate']; ?>%"><?php echo $row['program_rate']; ?>%</div>
        </div>
                <?php 
            }

          ?>


        <br>
      </div>
    </div><br>

  
  </div>