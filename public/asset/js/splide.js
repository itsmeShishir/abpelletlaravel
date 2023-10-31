if (window.screen.width >= 918) {
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
      type: 'loop',
      pagination: false,
      autoScroll: {
        speed: 1,
      },
      perPage: 4,
    }).mount();
  });
}
else if (window.screen.width >= 550) {
  document.addEventListener('DOMContentLoaded', () => {
    new Splide('.splide', {
      type: 'loop',
      pagination: false,
      autoScroll: {
        speed: 1,
      },
      perPage: 3,
    }).mount();
  })

}
else {
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
      type: 'loop',
      pagination: false,
      autoScroll: {
        speed: 1,
      },
      perPage: 1,
    }).mount();
  });
}
