Drupal.behaviors.ccc_settings = function (context) {
  $('select#edit-style').each(function() {
    $(this).change(function() {
      if ($(this).val() == 'custom') {
        $('.ccc-custom-settings').show('medium');
      }
      else {
        $('.ccc-custom-settings').hide('medium');
      }
    });
  });

  // Add Farbtastic
  var target = $('#edit-background-color', context);
  if (target) {
    var farb = $.farbtastic('div#ccc-colorpicker', target);
    target
      .focus(function() {
        $('div#ccc-colorpicker').show('medium');
      })
      .blur(function() {
        $('div#ccc-colorpicker').hide('medium');
      });
  }
};
