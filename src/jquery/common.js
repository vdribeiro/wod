
function isEmpty(str) {
  if (str==null || str=="")
    return true;
  return false;
}


                                                                               
// we will add our javascript code here	
function validateForm(theForm) {
     input= theForm.username.value;
     input2= theForm.password.value;

     if (isEmpty(input)) {
       alert("Por favor preeencha o username.")
       return false
     }

     if (isEmpty(input2)) {
       alert("Por favor preencha a password.")
       return false
     }
     if (confirm('Tem a certeza de que quer submeter:\n' + '"' + input.substring(0,40) + '"...')) return true;
     else return false;
}

function validateForm2(theForm) {
     input= theForm.username.value;
     input2= theForm.password.value;
     input3= theForm.name.value;
     input4= theForm.address.value;
     input5= theForm.age.value;
     input6= theForm.email.value;
     input7= theForm.role.value;
     input8= theForm.taxID.value;
	
     if (isEmpty(input)) {
       alert("Por favor preeencha o username.")
       return false
     }

     if (isEmpty(input2)) {
       alert("Por favor preencha a password.")
       return false
     }
     if (isEmpty(input3)) {
       alert("Por favor preeencha o nome.")
       return false
     }

     if (isEmpty(input4)) {
       alert("Por favor preencha a morada.")
       return false
     }
     if (isEmpty(input5)) {
       alert("Por favor preeencha a idade.")
       return false
     }

     if (isEmpty(input6)) {
       alert("Por favor preencha o email.")
       return false
     }
     if (input7 != "NolmalUser") {
       if(isEmpty(input8)){
           alert("Por favor preencha o taxID.")
	   return false       
	}
       
     }

     if (confirm('Tem a certeza de que quer submeter:\n' + '"' + input.substring(0,40) + '"...')) return true;
     else return false;
}
