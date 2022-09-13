var attemp=3;
function validate(){
    var usuar=document.getElementById("usuar").value;
    var password=document.getElementById("password").value;
    if(usuar=="admin"&& password=="mensajes"){
        alert("Usuario y contraseña Correctos");
        window.location="mensajespdf.php";
        return false;
    }
    if(usuar=="admin"&& password=="mensajes"){
        alert("Usuario y contraseña Correctos");
        window.location="mensajespdf.php";
        return false;
    }
    if(usuar=="ADMIN"&& password=="ADMIN"){
        alert("Usuario y contraseña Correctos");
        window.location="mensajespdf.php";
        return false;
    }
    if(usuar=="Pablo"&& password=="admin"){
        alert("Usuario y contraseña Correctos");
        window.location="mensajespdf.php";
        return false;
    }
    else{
        attemp--;
    } 
    alert("Usuario y contraseña incorrectos")
    if(attemp==0){
        document.getElementById("usuar").disable=true;
        document.getElementById("password").disable=true;
        document.getElementById("sumbit").disable=true;
    }
}