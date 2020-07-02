 $(document).ready(()=>{
      $('#HomepageSlick').slick({
  infinite: true,
  arrows:false,
  dots: true,
  autoplay:true,
  autoplaySpeed:3000,
  swipeToSlide:true,
  responsive: [
      {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll:3,
        infinite: true
      }
    },
     {
      breakpoint: 800,
      settings: {
        slidesToScroll:2,
        slidesToShow: 2,
        dots: true,
        infinite: true,
      }
    }, 
     {
      breakpoint: 550,
      settings: {
        slidesToScroll:1,
        slidesToShow: 1,
        dots: true,
        infinite: true,
        
      }
    }, 
    {
      breakpoint: 300,
      settings: "unslick"
    }]
});
      $('#NewsCarousel').slick({
  infinite: true,
  arrows:false,
  dots: true,
  autoplay:true,
  autoplaySpeed:3000,
  swipeToSlide:true,
  responsive: [
      {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll:3,
        infinite: true
      }
    },
     {
      breakpoint: 800,
      settings: {
        slidesToScroll:2,
        slidesToShow: 2,
        dots: true,
        infinite: true,
      }
    }, 
     {
      breakpoint: 550,
      settings: {
        slidesToScroll:1,
        slidesToShow: 1,
        dots: true,
        infinite: true,
        
      }
    }, 
    {
      breakpoint: 300,
      settings: "unslick"
    }]
});
    })