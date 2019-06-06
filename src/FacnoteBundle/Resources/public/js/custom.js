$(document).ready(function () {
    $('#toggleMenu').click(function(){
        $('#sidebar-wrapper').toggle(300, function () {
            if($('#sidebar-wrapper').is(':visible')){
                $('#toggleMenu').text('Cacher Menu');
            }else{
                $('#toggleMenu').text('Afficher Menu');
            }
        });
    });
});//ready