jQuery(document).ready(function () {
  jQuery('button[id*="button"]').on('click', function(e) {
    e.preventDefault();
    var split_id = e.target.id.split('-');

    console.log(e.target);
    jQuery('html, body').animate(
      {
        scrollTop: jQuery("#" + split_id[1]).offset().top,
      },
      500,
      'linear'
    );
  });
});
