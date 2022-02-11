require('./bootstrap');

(function (){
    const burgerItem = document.querySelector('.burger');
    const activeMenu = document.querySelector('.header__nav');
    const closeMenu = document.querySelector('.header__nav-close');
    burgerItem.addEventListener('click', ()=>{
        activeMenu.classList.add('header__nav_active');
    });
    closeMenu.addEventListener('click', () => {
        activeMenu.classList.remove('header__nav_active');
    })
}());
