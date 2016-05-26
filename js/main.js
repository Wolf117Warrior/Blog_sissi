function VerifMail()
	{
	a = document.Verif.Mail.value;
	valide1 = false;
	
	for(var j=1;j<(a.length);j++){
		if(a.charAt(j)=='@'){
			if(j<(a.length-4)){
				for(var k=j;k<(a.length-2);k++){
					if(a.charAt(k)=='.') valide1=true;
				}
			}
		}
	}
	if(valide1==false) alert("Veuillez saisir une adresse email valide.");
	return valide1;
	}

function valider(){   
 if(form1.nom.value == '' ) {   
  alert('Merci de saisir votre nom et prénom');   
  form1.nom.focus(); //met le curseur dans le champ demandé   
  return false; //enpèche l'envoi du formulaire   
 }    
    
 //si on est arrivé jusque la c'est que toutes les verif ont été ok donc    
 return true; //autorise l'envoi du formulaire   
}   

function bonmail(mailteste)

{
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

	return(reg.test(mailteste));
}