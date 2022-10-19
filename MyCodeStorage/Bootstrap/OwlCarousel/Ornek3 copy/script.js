$(document).ready(function () {
  var bigimage = $("#big");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false,
      dots: false,
      loop: false,
      responsiveRefreshRate: 200,
      navText: [
        '<i class="previcon myprevcolor" aria-hidden="true">',
        '<i class="nexticon myprevcolor" aria-hidden="true">'
      ]
    })
    .on("changed.owl.carousel", syncPosition);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    var current = el.item.index;

    //to disable loop, comment this block
    /*var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }*/
    //to this

  }

  // thumbs.on("click", ".owl-item", function (e) {
  //   e.preventDefault();
  //   var number = $(this).index();
  //   bigimage.data("owl.carousel").to(number, 300, true);
  // });
});
