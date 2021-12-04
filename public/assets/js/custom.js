window.onscroll = function () {
    let nav = document.querySelector('.navbar');
    if (
        document.body.scrollTop > 70 ||
        document.documentElement.scrollTop > 70
    ) {
        nav.classList.add('shadow');
        nav.style.backgroundColor = '#03252F';
    } else {
        if (window.matchMedia('(max-width:768px)').matches) {
            nav.classList.add('shadow');
            nav.style.backgroundColor = '#03252F';
        } else {
            nav.style.backgroundColor = 'transparent';
            nav.classList.remove('shadow');
        }
    }
};
window.onload = function () {
    let nav = document.querySelector('.navbar');
    if (this.innerWidth <= 768) {
        nav.classList.add('shadow');
        nav.style.backgroundColor = '#03252F';
    }
};
let tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});
AOS.init();
