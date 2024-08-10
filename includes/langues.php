                          <?php  
                          ob_start();
                          session_start();
                           header("Content-Type: text/html; charset=utf-8");
                          $_SESSION['FichierduLangue'] = (isset($_SESSION['FichierduLangue'])) ?  $_SESSION['FichierduLangue'] : "fr";
                          $_SESSION['languedusite'] = (isset($_SESSION['languedusite'])) ? (int) $_SESSION['languedusite'] : 1;
?>    
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>

<script type="text/javascript">
        $(document).ready(function(){	
        $("#langue").on("change", function (e) {
                  var langue = $('#langue').val();
                      var AllLang = langue.split('|');
    var Idlangue = AllLang[0];
    var FichierLangue	 = AllLang[1];
    //alert(Idlangue);
            $.ajax({
                type: "POST",
                url: "ajax/langues.php",
                data: {
                    Idlangue: Idlangue,
                    FichierLangue : FichierLangue
                },
                  success: function (data) {
         window.location.reload();
        }   
            });     
        });
    });
            </script>
            
       <?php     if(isset($_SESSION['FichierduLangue'])){
  include("locale/".$_SESSION['FichierduLangue'].".php");
}
?>
<script>
    scriptLang = <?php echo json_encode($scriptLang); ?>;
   </script>  
