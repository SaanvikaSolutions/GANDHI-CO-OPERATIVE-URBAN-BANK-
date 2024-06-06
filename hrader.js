const menuicon = document.querySelector('.sidenav-menu-icons');
const closeicon = document.querySelector('.sidenav-close-icons');
const sidenavbar = document.querySelector('.header-sidenav-div');

menuicon.addEventListener('click',()=>{
    sidenavbar.classList.toggle('active');
    menuicon.classList.toggle('hidden');
    closeicon.classList.toggle('hidden');
});

closeicon.addEventListener('click',()=>{
    menuicon.classList.toggle('hidden');
    closeicon.classList.toggle('hidden');
    sidenavbar.classList.toggle('active');
});