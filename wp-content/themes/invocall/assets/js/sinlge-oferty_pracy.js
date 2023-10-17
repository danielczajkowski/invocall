var observer = new IntersectionObserver(function(entries) {
	// no intersection with screen
	if(entries[0].intersectionRatio === 0)
		document.querySelector(".job-offer__content").classList.add("isSticky");
	// fully intersects with screen
	else if(entries[0].intersectionRatio === 1)
		document.querySelector(".job-offer__content").classList.remove("isSticky");
    else if(entries[0].intersectionRatio < 1)
		document.querySelector(".job-offer__content").classList.remove("isSticky");
}, { threshold: [0,1] });
observer.observe(document.querySelector(".job-offer__banner--mobile"));

/* * */

/* * */
const copyButton = document.querySelectorAll('.job-offer__copy-btn');
copyButton.forEach(element => {
    element.addEventListener('click', ()=>{
        const url = window.location.href;
        navigator.clipboard.writeText(url);
    });
});

/* * */

const moreWrapper = document.querySelector('.job-offer__more-modal');
const moreButton = document.querySelector('.job-offer__sticky-info__more-btn');
moreButton.addEventListener('click', ()=>{
    moreWrapper.setAttribute('open', '');
    document.body.classList.add('overflow-hidden');
    document.querySelector('.header').style.display = "none";
});

const closeModal = document.querySelector('.job-offer__more-modal__close');
closeModal.addEventListener('click', ()=>{
    moreWrapper.removeAttribute('open', '');
    document.body.classList.remove('overflow-hidden');
    document.querySelector('.header').style.display = "block";
});
