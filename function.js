const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

window.onscroll = function() {
    if (window.matchMedia("(max-width: 920px)").matches === true) {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            $("nav").css("position","relative");
        } else {
            $("nav").css("position","fixed");
        }
        
        if ((window.innerHeight + Math.round(window.scrollY)) >= document.body.offsetHeight) {
            $(".nav_links").css("bottom","-300px");
        } else {
            $(".nav_links").css("bottom","0px");
        }
    } else {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            $("nav").css("background-color","var(--dark)");
            $("nav").css("box-shadow","0px 6px 16px -6px var(--gray)");
        } else {
            $("nav").css("background-color","transparent");
            $("nav").css("box-shadow","none");
        }
    }
    }

    $(".lang").on("click", function(){
        if ($(this).hasClass("en")){
            $(this).html('<iconify-icon icon="material-symbols:language-spanish-rounded"></iconify-icon>');
            $(this).removeClass("en").addClass("es");
        } else {
            $(this).html('<iconify-icon icon="ri:english-input"></iconify-icon>');
            $(this).removeClass("es").addClass("en");
        }
    });