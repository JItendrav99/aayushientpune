/* Source and licensing information for the line(s) below can be found at http://local.aayushientpune.com/themes/custom/aayushientpune/js/global.js. */
/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {

    }
  };

  $(document).ready(function () {
    $('.brand-stockest__list').slick({
      slidesToShow: 5,
      slidesToScroll: 5,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 2
          }
        }
      ]
    });
  });

})(jQuery, Drupal);

/* Source and licensing information for the above line(s) can be found at http://local.aayushientpune.com/themes/custom/aayushientpune/js/global.js. */