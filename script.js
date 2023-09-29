const search = document.querySelector('.search');
const searchBtn = document.querySelector('.search-btn');
const searchInput = document.querySelector('.search-input');

const hamburger = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-nav');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active');
    mobileMenu.classList.toggle('is-active');
});


// contact popup
const contactLink = document.getElementById('contact-link');
const contactPopup = document.getElementById('contact-popup');
const closeContactPopup = document.getElementById('close-contact-popup');

contactLink.addEventListener('click', () => {
    contactPopup.style.display = 'block';
});

closeContactPopup.addEventListener('click', () => {
    contactPopup.style.display = 'none';
});


function toggleSearch() {
    let searchInput = document.getElementById("search-input");
    
    if (searchInput.classList.contains("active")) {
        searchInput.classList.remove("active");
    } else {
        searchInput.classList.add("active");
    }
}
