var pseudoForm = document.querySelector("#pseudo");
var mdpForm = document.querySelector("#mdp");
var btnIncription =document.querySelector("#send");
 var email=document.querySelector("#mail");
 var net=/@[a-z]/;

 var psdForm = document.querySelector("#psdCo");
 var mdp = document.querySelector("#mdpCo");
 var admin = document.querySelector("menuAdmin");

 

$("#send").click(function (e) {
   
   if (pseudoForm.value.length <= 1 && mdpForm.value.length <4) {
    e.preventDefault();
       console.log("Veuillez remplir les champs de plus de caractères");
   } if (email.value.match(net)){
console.log("super");
   }else{
    e.preventDefault();
       console.log("veuillez inscrire une adresse mail mail valide");
   }
})


$("#valid").click(function (e) {
   
   if (psdForm.value.length <= 1 && mdp.value.length <4) {
    e.preventDefault();
       console.log("Veuillez remplir les champs de plus de caractères");
   } if (email.value.match(net)){
console.log("super");
   }else{
    e.preventDefault();
       console.log("veuillez inscrire une adresse mail mail valide");
   }

   

  
})
