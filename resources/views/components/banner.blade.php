<!-- Slider main container -->
<div class="swiper" style="height: 550px;">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="{{asset('images/img5.png')}}" alt="" style="object-fit: cover"></div>
      <div class="swiper-slide"><img src="{{asset('images/img2.jpg')}}" alt="" style="object-fit: cover"></div>
      <div class="swiper-slide"><img src="{{asset('images/img3.jpg')}}" alt="" style="object-fit: cover"></div>
      <div class="swiper-slide"><img src="{{asset('images/img4.jpg')}}" alt="" style="object-fit: cover"></div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>