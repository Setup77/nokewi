  $(document).ready(function (e) {

    //---annuler l'affiche
    $('a.noonAfficherTravail').click(function (e) {
        var box = $(this).parents('span').attr('id');
        var id = $(this).attr('id');
        console.log(id);
        $(this).fadeIn(400).html('<i class="fa fa-spinner fa-spin text-blue"></i>');
        $.ajax({
            type: "post",
            url: 'ajax/travaux.php',
            data: {
                'idpub': id,
                'statu': 2
            },
            success: function (data) {
                $('.fa-spinner').hide();
                $("#BoxModal").hide();
                $("#" + box).html(data);
            }
        });
    });
    
    });
