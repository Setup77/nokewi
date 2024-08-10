<?php

function JsAfficherTravaux($id) {
    ?>
    <script>
        $('a.AfficherTravail<?php echo $id; ?>').click(function (e) {
            var id = $(this).attr('id');
            $(this).fadeIn(400).html('<i class="fa fa-spinner fa-spin text-blue"></i>');
            $.ajax({
                type: "post",
                url: 'ajax/travaux.php',
                data: {
                    'idpub': id,
                    'statu': 1
                },
                success: function (data) {
                    $('.fa-spinner').hide();
                    $(this).remove();
                    $("#BoxModal").show();
                    $("#BoxModal").html(data);
                    // console.log(totalMediaModify);
                }
            });
        });
    </script>
    <?php
}