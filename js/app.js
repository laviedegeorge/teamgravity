window.addEventListener("load", () => {

    
    const signIn = document.getElementById("kc-signIn");
    const signUp = document.getElementById("kc-signUp");
    const slider = document.getElementById("mainCont");
    const mainContent = document.querySelector(".main");

    function adjustHeight(element) {
        const theHeight = element.clientHeight + 'px';
        slider.style.height = theHeight;
        mainContent.style.height = theHeight;
    }

    adjustHeight(signIn);
    const btn = document.getElementById("kc-btn");
    const chevron = btn.querySelector('svg');
    const span = btn.querySelector('span');

    const slide = () => {
        // slider
        slider.classList.toggle("move-right");
        if (slider.classList.contains('move-right')) { // move-left
            span.innerText ="sign in";
            chevron.style.transform = 'rotate(270deg)';
            setTimeout(() => {
                adjustHeight(signUp);
            }, 300);
        } else { // move right
            setTimeout(() => {
                adjustHeight(signIn);
            }, 300);
            span.innerText ="sign up";
            chevron.style.transform = 'rotate(90deg)';
        }
    }
    btn.addEventListener("click", slide);

    const errorBox = document.getElementById("error-box");
    if(errorBox){
        setTimeout(() => {
            errorBox.style.display ="none";
        }, 5000);
    }
    
    if(successMsg){
        setTimeout(() => {
            successMsg.classList.add("close");
        }, 5000);
    }
})

/* ------------CLOSE WELCOME PAGE------------------ */


const successCloseBtn = document.getElementById("successCloseBtn");
const welcomeCloseBtn = document.getElementById("welcomeCloseBtn");


const closePage = (element) => {
    element.classList.add("close");
}

successCloseBtn.addEventListener("click" , () => {
    const successMsg = document.getElementById("successMsg");
    successMsg.classList.add("close");
});
welcomeCloseBtn.addEventListener("click" , () => {
    const welcomeBody = document.getElementById("welBody");
    welcomeBody.classList.add("close");
});

/* ----------------------------------------------------------------------------------------- */

