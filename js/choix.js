const deuxiemeShampoing=document.querySelector(".deuxiemeShampoing");
const deuxiemeSavon=document.querySelector(".deuxiemeSavon");
const deuxiemeParfum=document.querySelector(".deuxiemeParfum");
const btnChoix=document.querySelectorAll(".btnChoix");
const enfantSavon=document.querySelector(".deuxiemeSavon").querySelectorAll(".card1");
const enfantShampoing=document.querySelector(".deuxiemeShampoing").querySelectorAll(".card1");
const enfantParfum=document.querySelector(".deuxiemeParfum").querySelectorAll(".card1");
console.log(enfantSavon.length,enfantShampoing.length,enfantParfum.length);
console.log(btnChoix[0],btnChoix[1],btnChoix[2]);
const accueil=document.getElementById("accueil");
const produit=document.getElementById("produit");


console.log(enfantParfum.length);
if(enfantSavon.length>0){
    btnChoix[0].addEventListener('click',()=>{
        deuxieme.style.display="none";
        deuxiemeSavon.style.display="block";
        deuxiemeShampoing.style.display="none";
        deuxiemeParfum.style.display="none";
        btnChoix[0].classList.toggle("noirRouge");
        btnChoix[1].classList.remove("noirRouge");
        btnChoix[2].classList.remove("noirRouge");
        btnChoix[3].classList.remove("noirRouge");
      console.log("coucou");
        
    })

}
if(enfantShampoing.length>0){
    btnChoix[1].addEventListener('click',()=>{
        deuxieme.style.display="none";
        deuxiemeShampoing.style.display="block";
        deuxiemeParfum.style.display="none";
        deuxiemeSavon.style.display="none";
        btnChoix[1].classList.toggle("noirRouge");
        btnChoix[0].classList.remove("noirRouge");
        btnChoix[2].classList.remove("noirRouge");
        btnChoix[3].classList.remove("noirRouge");
   
     
      
              
     
    })
}
if(enfantParfum.length>0){
    btnChoix[2].addEventListener('click',()=>{
        deuxieme.style.display="none";
        deuxiemeParfum.style.display="block";
        deuxiemeSavon.style.display="none";
        deuxiemeShampoing.style.display="none";
        btnChoix[2].classList.toggle("noirRouge");
        btnChoix[1].classList.remove("noirRouge");
        btnChoix[0].classList.remove("noirRouge");
        btnChoix[3].classList.remove("noirRouge");
   
        
    })

}

btnChoix[3].addEventListener('click',()=>{
    deuxieme.style.display="block";
    deuxiemeSavon.style.display="none";
    deuxiemeParfum.style.display="none";
    deuxiemeShampoing.style.display="none";
    btnChoix[3].classList.toggle("noirRouge");
    btnChoix[1].classList.remove("noirRouge");
    btnChoix[2].classList.remove("noirRouge");
    btnChoix[0].classList.remove("noirRouge");
    
    
})

btnChoix[0].addEventListener("click",()=>{
    if(enfantSavon.length==0){
        btnChoix[0].innerHTML="Pas de savon";
    }
})

btnChoix[1].addEventListener("click",()=>{
    if(enfantShampoing.length==0){
        btnChoix[1].innerHTML="Pas de shampoing";
    }
})
btnChoix[2].addEventListener("click",()=>{
    if(enfantParfum.length==0){
        btnChoix[2].innerHTML="Pas de parfum";
    }
})

 if(innerWidth>1050){
    accueil.addEventListener('click',()=>{
        scrollTo(0,0);
    })
    produit.addEventListener('click',()=>{
        scrollTo(0,1800);
    })

 }
else{
    produit.addEventListener('click',()=>{
        scrollTo(0,70);
    })
}

