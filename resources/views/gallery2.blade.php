@extends('layouts.head')
@section('content')
<style>
    body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* background: #111; */
}

.card{
    background-color: transparent !important;   
    border: none !important;
}
.container-img {
  /* padding: 4rem 8rem; */
  columns: 4 300px;
  column-gap: 2rem;
}
.container-img .card img {
  margin: 0 1rem 2rem 0;
  display: block;
  background: #333;
  border-radius: 1rem;
  border: none;
  overflow: hidden;
  min-height: 200px;
  width: 100%;
  cursor: pointer;
  transition: all 0.2s ease-out;
}
.container-img .card img:hover {
  filter: brightness(50%);
}
@media only screen and (max-width: 1000px) {
  .container-img {
    padding: 2rem;
  }
}

</style>
<div class="container mt-3 container-img">
    <div class="card"><img alt="pic1" src="https://images.pexels.com/photos/2466822/pexels-photo-2466822.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic2" src="https://images.pexels.com/photos/3727662/pexels-photo-3727662.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic3" src="https://images.pexels.com/photos/1656584/pexels-photo-1656584.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic4" src="https://images.pexels.com/photos/2857583/pexels-photo-2857583.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic5" src="https://images.pexels.com/photos/3737094/pexels-photo-3737094.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic6" src="https://images.pexels.com/photos/3375903/pexels-photo-3375903.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" /></div>
    <div class="card"><img alt="pic7" src="https://images.pexels.com/photos/3441119/pexels-photo-3441119.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic8" src="https://images.pexels.com/photos/3661927/pexels-photo-3661927.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic9" src="https://images.pexels.com/photos/3772771/pexels-photo-3772771.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic10" src="https://images.pexels.com/photos/2318776/pexels-photo-2318776.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic11" src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img alt="pic12" src="https://images.pexels.com/photos/3511104/pexels-photo-3511104.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3575854/pexels-photo-3575854.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3596282/pexels-photo-3596282.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3730946/pexels-photo-3730946.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3277932/pexels-photo-3277932.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
      <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2466822/pexels-photo-2466822.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2852438/pexels-photo-2852438.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3662133/pexels-photo-3662133.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3746947/pexels-photo-3746947.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3713709/pexels-photo-3713709.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3375903/pexels-photo-3375903.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3754277/pexels-photo-3754277.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3839153/pexels-photo-3839153.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1820144/pexels-photo-1820144.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3686769/pexels-photo-3686769.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2308885/pexels-photo-2308885.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1730877/pexels-photo-1730877.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1879876/pexels-photo-1879876.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3845200/pexels-photo-3845200.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3541388/pexels-photo-3541388.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3845200/pexels-photo-3845200.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1820144/pexels-photo-1820144.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3686769/pexels-photo-3686769.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2308885/pexels-photo-2308885.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1730877/pexels-photo-1730877.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1879876/pexels-photo-1879876.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3845200/pexels-photo-3845200.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1820144/pexels-photo-1820144.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3686769/pexels-photo-3686769.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2308885/pexels-photo-2308885.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1730877/pexels-photo-1730877.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1879876/pexels-photo-1879876.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3845200/pexels-photo-3845200.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3541388/pexels-photo-3541388.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3575854/pexels-photo-3575854.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3596282/pexels-photo-3596282.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3730946/pexels-photo-3730946.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3277932/pexels-photo-3277932.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
      <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1101025/pexels-photo-1101025.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2852438/pexels-photo-2852438.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3662133/pexels-photo-3662133.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3746947/pexels-photo-3746947.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3713709/pexels-photo-3713709.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3711348/pexels-photo-3711348.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3754277/pexels-photo-3754277.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2832039/pexels-photo-2832039.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1820144/pexels-photo-1820144.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3686769/pexels-photo-3686769.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3693861/pexels-photo-3693861.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1730877/pexels-photo-1730877.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1879876/pexels-photo-1879876.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3597096/pexels-photo-3597096.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3541388/pexels-photo-3541388.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3845200/pexels-photo-3845200.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3667816/pexels-photo-3667816.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3686769/pexels-photo-3686769.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2827374/pexels-photo-2827374.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/2308885/pexels-photo-2308885.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
     <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3750893/pexels-photo-3750893.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1879876/pexels-photo-1879876.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/1261731/pexels-photo-1261731.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3441119/pexels-photo-3441119.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3348363/pexels-photo-3348363.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
    <div class="card"><img class="lazy" data-src="https://images.pexels.com/photos/3722173/pexels-photo-3722173.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" /></div>
  </div>

  <script>
    
    document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})
  </script>
@endsection