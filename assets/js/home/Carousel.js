const carousel = document.querySelector('.carousel');
const cards = document.querySelectorAll('.carousel-card');
let currentIndex = 0;

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? cards.length - 1 : currentIndex - 1;
    updateCarousel();
});

document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex === cards.length - 1) ? 0 : currentIndex + 1;
    updateCarousel();
});

function updateCarousel() {
    cards.forEach(card => {
        card.classList.add('hidden');
        card.classList.remove('prev', 'active', 'next');
    });

    const prevIndex = (currentIndex === 0) ? cards.length - 1 : currentIndex - 1;
    const nextIndex = (currentIndex === cards.length - 1) ? 0 : currentIndex + 1;

    cards[prevIndex].classList.remove('hidden');
    cards[prevIndex].classList.add('prev');

    cards[currentIndex].classList.remove('hidden');
    cards[currentIndex].classList.add('active');

    cards[nextIndex].classList.remove('hidden');
    cards[nextIndex].classList.add('next');
}

updateCarousel();

