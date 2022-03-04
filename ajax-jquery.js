$(document).ready( () => {
$("#submit").click((event)=>
{
    event.preventDefault();
    ajaxEnvoiForm();
});

function ajaxEnvoiForm(){

    let prenom = $("#prenom").val();
       let nom = $("#nom").val();
    $post("ajax6.php", "prenom=" + prenom + "&mode=envoi",()=>{

        ajax();
        $("#prenom").val('');
    }, 'json'   );
}

function ajax(){
    $.post("ajax6.php", "", (donnees)=>{
$("#resultat").html(donnees.resultat);


    }, 'json'    
    );
}

})