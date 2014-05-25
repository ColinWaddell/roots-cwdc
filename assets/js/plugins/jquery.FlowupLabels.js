(function ($) {
  $.fn.FlowupLabels = function (options) {

    var defaults = {
        // Useful if you pre-fill input fields or if localstorage/sessionstorage is used. 
        feature_onLoadInit: false,
        // Class names used for focus and populated statuses
        class_focused: 'focused',
        class_focused_textarea: 'focused_ta',
        class_populated: 'populated',
        class_populated_textarea: 'populated_ta'
      },
      settings = $.extend({}, defaults, options);


    return this.each(function () {
      var $scope = $(this);

      $scope.on('focus.flowupLabelsEvt', '.fl_input', function () {
        $(this).closest('.fl_wrap').addClass(settings.class_focused);
      })
        .on('blur.flowupLabelsEvt', '.fl_input', function () {
          var $this = $(this);

          if ($this.val().length) {
            $this.closest('.fl_wrap')
              .addClass(settings.class_populated)
              .removeClass(settings.class_focused);
          } else {
            $this.closest('.fl_wrap')
              .removeClass(settings.class_populated + ' ' + settings.class_focused);
          }
        });

      $scope.on('focus.flowupLabelsEvtTa', '.fl_textarea', function () {
        $(this).closest('.fl_wrap_ta').addClass(settings.class_focused_textarea);
      })
        .on('blur.flowupLabelsEvtTa', '.fl_textarea', function () {
          var $this = $(this);

          if ($this.val().length) {
            $this.closest('.fl_wrap_ta')
              .addClass(settings.class_populated_textarea)
              .removeClass(settings.class_focused_textarea);
          } else {
            $this.closest('.fl_wrap_ta')
              .removeClass(settings.class_populated_textarea + ' ' + settings.class_focused_textarea);
          }
        });


      // On page load, make sure it looks good
      if (settings.feature_onLoadInit) {
        $scope.find('.fl_input').trigger('blur.flowupLabelsEvt');
        $scope.find('.fl_textarea').trigger('blur.flowupLabelsEvtTa');
      }
    });
  };
})(jQuery);
