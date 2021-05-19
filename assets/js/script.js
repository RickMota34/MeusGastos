
var div = documnet.getElementById("contid");

Option.AddEventListener("click", function() {
  
    var contid = document.getElementById("btn-action");

    if(contid.style.display === "none"){
        contid.style.display = "block"
    }else{
        contid.style.display = "none"
    }

})