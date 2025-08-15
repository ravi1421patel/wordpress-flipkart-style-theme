document.addEventListener('DOMContentLoaded', function(){
    // Carousel scroll logic
    const carousel = document.querySelectorAll('.row');
    carousel.forEach(c => {
        c.addEventListener('wheel', e => {
            e.preventDefault();
            c.scrollLeft += e.deltaY;
        });
    });
});