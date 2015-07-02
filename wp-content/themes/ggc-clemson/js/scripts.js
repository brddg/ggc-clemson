(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('[data-show]').on('click', function(event){
      event.preventDefault();
      var color = $(this).data('show');
      var $self = $(this);
      var otherColor = color === 'red' ? 'green' : 'red';
      var $other = $('.btn-white.' + otherColor);
      
      // if other is already active then close
      if ($other.hasClass('active')){
        $other.text('Show More').removeClass('active');
        $('.show-content.' + otherColor).slideUp();
      }
      
      // if active then close
      if ($self.hasClass('active')) {
        $self.text('Show More').removeClass('active');
        $('.show-content.' + color).slideUp();
      }
      // else open
      else {
        $self.text('Show Less').addClass('active');
        $('.show-content.' + color).slideDown(function() {
          $('html, body').animate({
            scrollTop: $('.show-content.'+color).offset().top - 100
          }, 500);
        });
      }
      
    });
		
	});
	
})(jQuery, this);
