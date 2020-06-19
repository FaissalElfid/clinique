if(window.XMLHttpRequest){
    var myReq = new XMLHttpRequest();
}else{
    var myReq = new ActiveXObject("Microsoft.XMLLHTTP");
}


function deconnecter(){
    myReq.open("deconnecter.php");
    myReq.onreadystatechange=function(){
        if(myReq.status==200&&myReq.readyState==4){
            alert("normalement il est deconnecter");
            button.disabled = false;
            document.location.href = "index.php";
            console.log("deconnecter");
        }
        else if(myReq.status==200&&myReq.statreadyState<4){
            button.disabled = true;
        }
        else if(myReq.status!=200&&myReq.readyState==4){
            alert("Error de deconnexion"); 
        }
        
    }
}