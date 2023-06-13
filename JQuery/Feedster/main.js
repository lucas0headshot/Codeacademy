$(document).ready(() => {
    $('.menu').on('mouseenter', () => {
      $('.nav-menu').show();
    });
  
  
    $('.nav-menu').on('mouseleave', () => {
      $('.nav-menu').hide();
    });
  
    $('.btn').on('mouseenter', event => {
      $(event.currentTarget).addClass('btn-hover');
    }).on('mouseleave', event => {
      $(event.currentTarget).removeClass('btn-hover')
    });
  
  
    $('.postText').on('keyup', event => {
      $('.postText').focus();
  
      let post = $(event.currentTarget).val();
      let remaining = (140 - post.length);
  
      if (remaining <= 0){
        $('.wordCount').addClass('red');
      } else {
        $('.wordCount').removeClass('red');
      }
  
      $('.characters').html(remaining);
    });
  });