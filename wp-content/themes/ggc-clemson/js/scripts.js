(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
    
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    }); 
		
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
    
    $('#sign-up-form').on('submit', function(event){
      
      var $nameInput = $('input[name="name"]');
      var $emailInput = $('input[name="email"]');
      var $personInput = $('input[name="persontype"]:checked');
      var nameVal = $nameInput.val();
      var emailVal = $emailInput.val();
      var personVal = $personInput.val();
      
      if (nameVal === "") {
        $nameInput.addClass('error').focus();
      }
      else if (emailVal === "") {
        $emailInput.addClass('error').focus();
      }
      else if (personVal === "" || personVal === undefined) {
        $('.radio-label').addClass('error');
      }
      
      return false;
    });
    
    if($('#sign-up-form').length > 0) {
      $(window).on('keyup', function(){
        $('input, .radio-label').removeClass('error');
      });
      $('input[name="persontype"]').on('change', function(){
        $('input, .radio-label').removeClass('error');
      });
    }
		
	});
	
})(jQuery, this);
