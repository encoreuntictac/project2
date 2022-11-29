const BTN_START = document.querySelector('#btn-neumorphic');

BTN_START.addEventListener('click', event => {
    const CIBLE = document.querySelector('.default-wrapper');
    CIBLE.classList.toggle('start');
});

const BTN_SIDEBAR = document.querySelectorAll('.btn-sidebar');

for (let i = 0; i < BTN_SIDEBAR.length; i++) {
    BTN_SIDEBAR[i].addEventListener('click', event => {
        const CIBLE = document.querySelector('.sidebar-wrapper');
        const CIBLE2 = document.querySelector('.default-main');
        CIBLE.classList.add('active');
        CIBLE2.classList.add('active');
        
        for (let j = 0; j < BTN_SIDEBAR.length; j++) {
            BTN_SIDEBAR[j].classList.remove('active');
        }
        BTN_SIDEBAR[i].classList.add('active');
    });
}