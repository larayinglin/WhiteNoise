/***********************
slideshow
***********************/
#my-carousel {
  border-radius: inherit;
  overflow: hidden;
  z-index: 10;
}

#my-carousel .carousel-control {
  background-image: none;
  opacity: 0.5;
}

#my-carousel .carousel-control.right:hover {
  background-image: linear-gradient(to right,rgba(0,0,0,0) 0,rgba(0,0,0,.5) 100%);
  opacity: 0.8;
}

#my-carousel .carousel-control.left:hover {
  background-image: linear-gradient(to left,rgba(0,0,0,0) 0,rgba(0,0,0,.5) 100%);
  opacity: 0.8;
}

.carousel-caption h3 {
  font-size: 18px;
  /*font-weight: bolder;*/
  color: white;
  margin: 0;
}

.caption-container {
  margin: auto;
  background-color: rgba(0, 0, 0, 0.5);
  display: inline-block;
  padding: 8px 20px;
  border-radius: 20px;
  margin-bottom: 5px;
}


$(document).ready(function() {
  $("#my-carousel").carousel({interval: 5000}); //transition every 5 seconds
});


  $(window).resize(function() {
    adjustOuterContainerWidth($(this).width());
  });

}

//change outer container width
function adjustOuterContainerWidth(width) {
    if(width >= 1024) {
      $(".outer-content-container").css("width", "70%");
      $(".outer-content-container").css("min-width", "1024px");
    } else {
      $(".outer-content-container").css("width", "100%");
      $(".outer-content-container").css("min-width", "100%");
    }
}
