
// departement

function getDepartement(val) {

    $.ajax({
    
    type: "POST",
    
    url: "../Model/Ajax/AjaxDepartement.php",
    
    data: 'region='+val,
    
    success: function(data){
    
    $("#departement").html(data);
    
    }
    
    });
    
    }

// ville 

function getVille(val) {

    $.ajax({
    
    type: "POST",
    
    url: "../Model/Ajax/AjaxVille.php",
    
    data: 'departement='+val,
    
    success: function(data){
    
    $("#ville").html(data);
    
    }
    
    });
    
    }