let bgPetit=document.getElementById("bgPetit");
let x=100;
for(i=0;i<x;i++){
    let glitchBox=document.createElement('div');
    glitchBox.className='box';
    bgPetit.appendChild(glitchBox);    
}
setInterval(function(){
    let glitch=document.getElementsByClassName("box");
for(let i=0;i<glitch.length;i++){
    glitch[i].style.left=Math.floor(Math.random()*40) + 'vw';
    glitch[i].style.top=Math.floor(Math.random()*20) + 'vh';
    glitch[i].style.width=Math.floor(Math.random()*30) + 'px';
    glitch[i].style.height=Math.floor(Math.random()*30) + 'px';
}
    
},200);
