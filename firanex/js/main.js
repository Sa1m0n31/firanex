const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const openGallery = (n) => {

}

const openMenu = () => {
    mobileMenu.style.width = '100%';
    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 300);
}

const closeMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });
    setTimeout(() => {
        mobileMenu.style.width = '0';
    }, 300);
}

let portfolioCarousel, brandsCarousel;

try {
    portfolioCarousel = new Siema({
        selector: '.portfolio__main__carousel',
        perPage: 3,
        draggable: false,
        loop: true,
        duration: 400
    });

    brandsCarousel = new Siema({
        selector: '.brands__others',
        perPage: {
            768: 6,
            100: 2
        },
        draggable: false,
        loop: true,
        duration: 300
    });
}
catch(e) {

}

const portfolioNext = () => {
    portfolioCarousel.next();
}

const portfolioPrev = () => {
    portfolioCarousel.prev();
}

setInterval(() => {
    if(brandsCarousel) {
        brandsCarousel.next();
    }
}, 2000);