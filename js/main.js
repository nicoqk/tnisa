let elementosAcordeon = document.getElementsByClassName("btn-services");

  for (let i = 0; i < elementosAcordeon.length; i++ ){
  
      elementosAcordeon[i].addEventListener("click", function(){
          this.classList.toggle("active");
          let panel = this.nextElementSibling;
          if (panel.style.display == "block"){
              panel.style.display = "none";
          }else{
              panel.style.display = "block";
          }
      });
  }


const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

let sliderInner = document.querySelector(".slider-inner");

let images = sliderInner.querySelectorAll("img");
 index=1;
setInterval(function(){
   let percentage = index * -100;
  sliderInner.style.transform = "translateX("+ percentage +"%)"
    index++;
   if(index > (images.length)-1){
   index = 0;
  }
},2500);


// const $form = document.querySelector('#form')

// $form.addEventListener('submit', handleSubmit)

// async function handleSubmit(event) {
//     event.preventDefault()
//     const form = new FormData (this)
//     const response = await fetch(this.action, { 
//         method: this.method,
//         body: form,
//         header:{
//             'Accept': 'application/json'
//         }
//     })
//     if (response.ok){
//         alert('Gracias por contactarte')
//         this.reset()
//     }
// }



