    
$(document).ready( function() {
    $("#form").on('submit',function (e) {
    e.preventDefault();
        var nom = $('#nom').val();
        var email = $('#email').val();
        var message = $('#message').val();
 
        if(nom == '' || email == '' || message =='') {
            alert('Tous les champs doivent êtres remplis!!');
        } else {
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                dataType: $(this).attr('method'),
                success: function(data) {
                    if(data == 'ok') {
                        //alert('Votre message a bien ete envoye');
                        $("#status").append("Votre message a bien ete envoye");
                    } else {
                        alert('Erreur : '+data);
                    }
                }
            });
        }
        
    });
});