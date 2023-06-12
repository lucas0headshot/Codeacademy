$(document).ready(() => {
    $('#cart').on('click', () => {
      $('#cartMenu').show();
      $('#cartMenu').on('mouseleave', () => {
        $('#cartMenu').hide();
      });
    });
  
    $('#account').on('click', () => {
      $('#accountMenu').show();
      $('#accountMenu').on('mouseleave', () => {
        $('#accountMenu').hide();
      });
    });
  
    $('#help').on('click', () => {
      $('#helpMenu').show();
      $('#helpMenu').on('mouseleave', () => {
        $('#helpMenu').hide();
      });
    });
  });