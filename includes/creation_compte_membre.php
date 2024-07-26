<?php
if ($_POST['statu'] == 1) {
    //----afficher 
    ?>
    <div class="modal in"  style="display: flex; align-items: center;">
        <div class="modal-dialog">
            <div class="modal-content" style="height: 90%;">
                <div class="modal-header">
                    <h3 class="modal-title text-primary"><?php echo $scriptLang['Task1']; ?></h3>
                </div>
                <div class="modal-body well" style=" height: 77% !important;  overflow: auto !important;">

                    <div class="box box-solid">
                        <!-- /.box-header -->       
                        <div class="box-body">
                            <video class="mediablock hover_video" preload="metadata"  width="100%" controls controlslist="nodownload" poster="assets/imgs/creerCompte.png" > 
                                <source src="assets/videos/creation_compte_membre.mp4" type="video/mp4">
                                <?php echo $scriptLang['VideounsupporteByBrowser']; ?>  </video><br /> <hr /><br />

                          <?php echo $scriptLang['Task1Description']; ?><br />
                         



                            <small class="pull-right">  <?php echo $scriptLang['Modify']; ?> <cite>  20 - 07 - 2024 </cite></small>

                        </div> 
                        <!-- /.box-body -->
                    </div>

                </div>                                             
                <div class="modal-footer">
                    <span id="<?php echo $id; ?>AfficherTravail"> <a style="color:white;" href="javascript:void(0)" class="noonAfficherTravail btn btn-info text-white bulle-bottom" id="1"><?php echo $scriptLang['Fermer']; ?></a>
                    </span> </div>

            </div>
        </div> </div> 

    <?php
    echo '<script src="assets/js/travaux.js" type="text/javascript"></script>';
} else if ($_POST['statu'] == 2) {
    ?>  <a  class="portfolio-card AfficherTravail1" href="javascript:void(0)" id="1">
        <img src="assets/imgs/creerCompte.png" class="portfolio-card-img"
             alt="creerCompte">
        <span class="portfolio-card-overlay">
            <span class="portfolio-card-caption">
                <h4><?php echo $scriptLang['Task1']; ?></h4>
            </span>
        </span>
    </a>
    <?php
    echo JsAfficherTravaux(1);
}

