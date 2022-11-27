const BTN_START = document.querySelector('#btn-start');

BTN_START.addEventListener('click', event => {
    const CIBLE = document.querySelector('.neumorphic-container');
    CIBLE.classList.toggle('start');
});

const BTN_BOX = document.querySelectorAll('.btn-box');

for (let i = 0; i < BTN_BOX.length; i++) {
    BTN_BOX[i].addEventListener('click', event => {
        const CIBLE = document.querySelector('.home-left');
        const CIBLE2 = document.querySelector('.home-formulaires');
        CIBLE.classList.add('active');
        CIBLE2.classList.add('active');
        
        for (let j = 0; j < BTN_BOX.length; j++) {
            BTN_BOX[j].classList.remove('active');
        }
        BTN_BOX[i].classList.add('active');
    });
}