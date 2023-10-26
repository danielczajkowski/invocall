const header = document.querySelector('.header');
const headerHeight = header.offsetHeight;
if ( header && headerHeight != 0 ) {
    if( document.querySelector('.hero') ) {
        document.querySelector('.hero').style.top = "-" + headerHeight + "px";
    }
    if( document.querySelector('.knowledge-base__hero') ) {
        document.querySelector('.knowledge-base__hero').style.top = "-" + headerHeight + "px";
    }
    if( document.querySelector('.hero-subpage') ) {
        document.querySelector('.hero-subpage').style.top = "-" + headerHeight + "px";
    }
    if( document.querySelector('.job-offer__hero') ) {
        document.querySelector('.job-offer__hero').style.top = "-" + headerHeight + "px";
    }
    if( document.querySelector('.error-page') ) {
        document.querySelector('.error-page').style.top = "-" + headerHeight + "px";
    }
    if( document.querySelector('.page-text__hero') ) {
        document.querySelector('.page-text__hero').style.top = "-" + headerHeight + "px";
    }
}

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    scroll > 0 ? header.classList.add('is-scrolled') : header.classList.remove('is-scrolled');
});

const hamburger = document.getElementById('hamburger');
hamburger.addEventListener("click", open);

function open() {
    document.body.classList.toggle('overflow-hidden');
    hamburger.classList.toggle('open');
    document.querySelector('.header__menu__wrapper--mobile').classList.toggle('show');
    document.querySelector('.header__content').classList.toggle('show');
}

const contactForms = document.querySelectorAll('.contact-form-7:not(.contact-form-7__button)');
contactForms.forEach(element => {
    const contactInput = element.querySelector('.wpcf7-form-control');
    const contactLabel = element.querySelector('label');

    contactInput.addEventListener('focusin', ()=>{
        contactLabel.setAttribute('show', '');
    });

    contactInput.addEventListener('focusout', ()=>{
        if( contactInput.value == "" ) {
            contactLabel.removeAttribute('show', '');
        }
    });

});

const mobileHeaderItem = document.querySelectorAll('.header__menu__wrapper--mobile .menu-item-has-children');
mobileHeaderItem.forEach(element => {
    const mobileHeaderLink = element.querySelector('a');
    const mobileHeaderSubMenu = element.querySelector('.sub-menu');

    mobileHeaderLink.removeAttribute('href');
    mobileHeaderLink.addEventListener('click', ()=>{
        mobileHeaderSubMenu.toggleAttribute('open');
        element.classList.toggle('rolled');
    });

});

const desktopHeaderItem = document.querySelectorAll('.header__menu__wrapper .menu-item-has-children');
desktopHeaderItem.forEach(element => {
    const desktopHeaderLink = element.querySelector('a');
    desktopHeaderLink.removeAttribute('href');
});


const nextSectionScroll = document.querySelectorAll('.next-section-scroll__btn');
if( nextSectionScroll ) {
    nextSectionScroll.forEach(element => {
        element.addEventListener('click', ()=>{
            const nextSection = element.closest('section').nextElementSibling;
            const headerHeight = header.offsetHeight + 30;

            window.scroll({
                top: nextSection.getBoundingClientRect().top + window.pageYOffset - headerHeight,
                behavior: "smooth"
            });
        });
    });
}