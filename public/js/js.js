$(document).ready(function () {
  var silder = $(".owl-carousel");
  silder.owlCarousel({
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  items: 1,
  stagePadding: 20,
  center: true,
  nav: false,
  margin: 50,
  dots: true,
  loop: true,
  responsive: {
  0: { items: 1 },
  480: { items: 2 },
  575: { items: 2 },
  768: { items: 2 },
  991: { items: 3 },
  1200: { items: 4 }
  }
  });
  });


  let nums=document.querySelectorAll(" .num");
  let section=document.querySelector(".counter-block");
  let started=false;
  window.onscroll=function(){
      if (window.scrollY >= section.offsetTop){
          if(!started){
            nums.forEach( (num) => startCount(num));

          }
          started=true;


      }
  };

  function startCount(el){
      let goal=el.dataset.goal;
      let count= setInterval(() =>{
        el.textContent++;
        if(el.textContent ==goal){
            clearInterval(count);
        }

      },2000 / goal

      );
     
  }
  window.addEventListener("scroll", fadeInLeft);


  