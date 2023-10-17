const numbersBlock = document.querySelector('.about-us__blocks-text');

const callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) return;

        const counters = document.querySelectorAll('.about-us__block-text__heading');
        let num = 0;

        counters.forEach((counter) => {
            const countUp = () => {
              if( num <= counter.dataset.stop ){
                ++num;
                counter.textContent = num;
              }
            };
            const interval = setInterval(() => {
                (num < counter.dataset.stop) ? countUp() : clearInterval(interval)
            }, counter.dataset.speed)
        });

    if (numbersBlock) observer.unobserve(numbersBlock);
  });
};

const observer = new IntersectionObserver(callback, {
  rootMargin: '101px',
  threshold: 1.0,
});

if (numbersBlock) observer.observe(numbersBlock);
