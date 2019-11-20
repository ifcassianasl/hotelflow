document.addEventListener('DOMContentLoaded', () => init());

const init = () => {
    const nav = document.querySelectorAll('.sidenav');
    const instances = M.Sidenav.init(nav);

    const carousel = document.querySelector('.carousel');
    
    const instance = M.Carousel.init(carousel, {
        fullWidth: true,
        indicators: true
    });

    const setHeight = (isBody) => {
        const height = window.innerHeight;

        return isBody ? `${height}px` : `${height - (height * 8.5) / 100}px`;
    }

    carousel.style.height = setHeight(false);

    document.body.onresize = () => carousel.style.height = setHeight(false);

    const materialBoxed = document.querySelectorAll('.materialboxed');
    const mbInstances = M.Materialbox.init(materialBoxed);
};

