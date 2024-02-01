

  jQuery(document).ready(function($) {
    const slider = $(".week-news__list").bxSlider({
      mode:'horizontal',
      speed:15000,
      minSlides: 2,
      maxSlides:10,
      slideWidth: 361,
      controls: false,
      pager:false,
      ticker:true
      
    });
    
  });