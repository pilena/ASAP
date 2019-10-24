window.onload = function(){

    document.getElementById("submmit").addEventListener("click", function(){

        var validno = true;

	var name = document.getElementById("name").value.trim();
	var email = document.getElementById("email").value.trim();

	var regName = /^[A-Z][a-z]{2,11}$/;
    var regEmail = /\S+@\S+\.\S+/;
    
    if(name == ""){
        alert("Popunite polje za ime!");
        validno = false;
    } else if(!regName.test(name)){
        alert("Ime nije u dobrom formatu!");
        validno = false;
    } else {

    }

    if(email == ""){
        alert("Popunite polje za email!");
        validno = false;
    } else if(!regEmail.test(email)){
        alert("Email nije u dobrom formatu!");
        validno = false;
    } else {

    }

    if(validno){
        alert("Hvala na poslatoj poruci. Odgovoricemo u najkracem mogucem roku!");
    }

    });
    


}