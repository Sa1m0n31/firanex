const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));
const gallery = document.querySelector('.portfolio__big');
const galleryImage = document.querySelector('.portfolio__big>.img');

let images = [];
let currentGallerySlide = 0;

const openGallery = (n) => {
    if(!images.length) {
        images = [1, 2, 3, 4, 5, 6, 7, 8, 9].map((item) => {
           const portfolioElement = document.querySelector(`.portfolio__main__carousel__item--${item}>.img`);
           return portfolioElement.getAttribute('src');
        });
    }

    currentGallerySlide = n;
    galleryImage.setAttribute('src', images[n]);

    setTimeout(() => {
        gallery.style.zIndex = '1001';
        gallery.style.opacity = '1';
    }, 100);
}

const closeGallery = () => {
    gallery.style.opacity = '0';
    setTimeout(() => {
        gallery.style.zIndex = '-100';
    }, 300);
}

const galleryPrev = () => {
    if(currentGallerySlide > 0) {
        currentGallerySlide--;
    }
    else {
        currentGallerySlide = 8;
    }

    galleryImage.setAttribute('src', images[currentGallerySlide]);
}

const galleryNext = () => {
    if(currentGallerySlide < 8) {
        currentGallerySlide++;
    }
    else {
        currentGallerySlide = 0;
    }

    galleryImage.setAttribute('src', images[currentGallerySlide]);
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