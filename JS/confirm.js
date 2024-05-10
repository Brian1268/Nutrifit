function match_password(){
    var pw1 = document.getElementById("pws").value;
    var pw2 = document.getElementById("cpws").value;
 
    if (pw1 === '' && pw2 === '') {
        // If both fields are empty, no need to show alert
        alert(" enter a password and confirm it !...");
     
    }
    else if(pw1 === pw2 ){
        alert("password successful !...");
    }
    else{
        alert("password unsuccessful !...");
    }

}

