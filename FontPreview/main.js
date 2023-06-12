$(document).ready(() => {
    $('#text').on('keyup', event => {
      $('.preview').html($(event.currentTarget).val());
  
      $('#font').change(event => {
        $('.preview').css('fontFamily', $(event.currentTarget).val());
      });
  
      $('#weight').change(event => {
        $('.preview').css('fontWeight', $(event.currentTarget).val());
      });
  
      $('#size').on('keyup', event => {
        $('.preview').css('fontSize', ($(event.currentTarget).val() + 'px'));
      });
    });
  });