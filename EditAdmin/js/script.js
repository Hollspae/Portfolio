
const additionBlock = document.querySelector('.addition');
const BtnOpen = document.querySelectorAll('#SubmitAdd');
const BtnClose = document.querySelector('#btn-close');

console.log(BtnOpen);
function StyleOn (){
    additionBlock.style.display = "flex";
    document.body.style.overflow =  "hidden";
}

function StyleOff (){
    additionBlock.style.display = "none";
    document.body.style.overflow =  "visible";
}
BtnOpen.forEach((btn)=>{
    btn.addEventListener("click", StyleOn);
})
    
BtnClose.addEventListener("click", StyleOff);


document. addEventListener('keydown', function(event) {
    if(event.KeyBackspace){
        console.log('Успешно');
    }
});