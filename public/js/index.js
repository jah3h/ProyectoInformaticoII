setTimeout(function () {
    $('.loader_bg').fadeToggle();

    $(".loader_bg").remove();

  }, 1500);

  $(document).ready(function () {


    $('.second-button').on('click', function () {
    
      $('.animated-icon2').toggleClass('open');
    });
    
    $('.third-button').on('click', function () {
    
    $('.animated-icon3').toggleClass('open');
    
    });
    
    
    });