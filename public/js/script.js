//header toggler 

let MenuBtn = document.getElementById('MenuBtn')

MenuBtn.addEventListener('click', function(e){
    document.querySelector('body').classList.toggle('mobile-nav-active');
    this.classList.toggle('fa-xmark')
})

//animasi tulisan
let typed = new Typed('.auto-input', {
    strings: ['Fatimah Wanudya Raras'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 2000,
    loop: true,
})

//pesan berhasil

let berhasil = document.querySelector('.berhasil');
let contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', function (e){
    console.log('pesan terkirim')
    e.preventDefault();
    berhasil.style.display = 'block';
    contactForm.reset()
    setTimeout(function () {
        berhasil.style.display = 'none';
    }, 3000);
});