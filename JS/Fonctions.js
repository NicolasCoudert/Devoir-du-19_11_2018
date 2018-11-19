function Connecter(event) 
{
    var userName = $("#login").value;
    console.log("userName");
$.ajax
(
    {
        type:"post",
        url:"index.php/ctrl_region/seConnecter",
        data:{login: userName,},
        success:function(data)
        {
            $("#divRegion").empty();
            $("#divRegion").append(data);
        },
        error:function()
        {
            alert("Erreur sur la connexion");
        }
    }
);
}

function AfficherVilles(idRegion)
{
    numRegion=idRegion;
    $.ajax(
    {
        type:"get",
        url:"index.php/Index_GestionRegion/AfficherlesVilles",
        data:"idRegion="+idRegion,
        success:function(data)
        {
            $('#villes').empty();
            $('#villes').append(data);
        },
        error:function()
        {
            alert('Erreur sur les villes ');
        }
    }
    );
}