const video=document.querySelector("video");
const premiere=document.querySelector(".premiere");
const deuxieme=document.querySelector(".deuxieme");
const shop=document.querySelector(".shop");
const block3=document.querySelector(".block3");
const block2=document.querySelector(".block2");
const block1=document.querySelector(".block1");
const footer=document.querySelector("footer");
const nav=document.querySelector("nav");
const container=document.querySelector(".container");
const choix=document.querySelector(".choixContainer");
video.style.display="block";
const li=document.querySelectorAll("li");
const compteur=document.getElementById("compteur");


if(innerWidth>1050){
window.addEventListener("scroll",()=>{
    let position=window.pageYOffset;
    let positionHauteur=window.pageYOffset;
     
    if(position==0){
        
      
        video.style.width='50rem';
        video.style.height='50rem';
        video.style.top='60%';
        video.style.left='70%';
        video.style.opacity="1";
        video.style.display="block";      
       premiere.style.position="fixed";
       premiere.style.top="10%";
       premiere.style.left="0%";
       shop.style.transform='translateY(0px)';
       shop.style.transition="1s ease";
       block3.style.height="45vh";
       block1.style.height="45vh";
       block2.style.height="45vh";
   } 
   if(position>0 && position<900){
 
        // video.style.top=60-position*0.15+'%';
        // video.style.left=70-position*0.15+'%';
        video.style.top=60-position*0.1223+'%';
        video.style.left=70-position*0.08+'%';
        video.style.width=60+position*0.25+'rem';
        video.style.height=50+position*0.30+'rem';        
        video.style.zIndex="-1";        
        video.style.opacity="0.7";        
       premiere.style.position="fixed";
       premiere.style.top="10%";
       premiere.style.left="0%";
       shop.style.transform='translateY('+position*(-0.5)+'px)';
       shop.style.transition="1s ease";        
       video.style.display="block";
       console.log(position);
   }
   if(position>=900 && position<1750){
  
        video.style.top='-15%';
        video.style.left='0%';
        video.style.width='100%';
        video.style.height='140vh';
        video.style.opacity="0.7";    
        video.style.position="fixed";   
        video.style.transition="ease 1s";
  
    
    premiere.style.position="fixed";
    premiere.style.top="10%";
    premiere.style.left="0%";
    shop.style.transform='translateY('+position*(-0.5)+'px)';
    shop.style.transition="0.5s ease";
    video.style.display="block";
}
if(position>1651){
 
    video.style.display="none";
    video.style.transition="ease 0.5s";
    // premiere.style.position="relative";
   block3.style.height="18.2vh";
   block3.style.transition="1s ease";
   block1.style.height="15vh";
   block1.style.transition="1s ease";
   

}
if(position>1700){
    nav.style.background="black";
    nav.style.color="red";
    li[0].style.color="red";
    li[1].style.color="red";
    li[2].style.color="red";
    container.style.background="black";
    container.style.color="red";
    container.style.height="25vh";  
    container.style.transition="1s ease";
    nav.style.transition="1s ease"; 
    choix.style.display="block";   
    choix.style.transition="2s ease";  
  

    
          

}else{
    nav.style.background="transparent";
    nav.style.color="black";
    li[0].style.color="black";
    li[1].style.color="black";
    li[2].style.color="black";
    container.style.background="transparent";
    container.style.color="black"; 
    choix.style.display="none";      
}



      
    
})
}else{
    video.style.display="none";
    document.getElementById("accueil").style.display="none";
    window.addEventListener("scroll",()=>{
        let position=window.pageYOffset;   
   premiere.style.position="fixed"; 
   premiere.style.top="8%";
   premiere.style.left="0%";
   shop.style.transform='translateY('+position*(-0.5)+'px)';
   shop.style.transition="0.5s ease";
   block3.style.height="25vh";
block3.style.transition="1s ease";
block1.style.height="25vh";
block1.style.transition="1s ease";

if(position>0){
    nav.style.background="black";
    nav.style.color="white";
    container.style.background="black";
    container.style.color="red";
    container.style.height="20rem";  
    container.style.transition="1s ease";    
    nav.style.transition="1s ease";    
    li[0].style.color="red";
    li[1].style.color="red";
    li[2].style.color="red";
    block3.style.height="20vh";   
    block3.style.width="100%";
    choix.style.display="block";        
    
}else{
    nav.style.background="transparent";
    nav.style.color="black";
    container.style.background="transparent";
    container.style.color="black";    
    container.style.height="18rem"; 
    li[0].style.color="black";
    li[1].style.color="black";
    li[2].style.color="black";  
    choix.style.display="none";   

} 

      

    })
}




