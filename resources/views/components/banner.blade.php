

<div id="carouselWithCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselWithCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselWithCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselWithCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/img3.jpg')}}" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-none d-sm-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/img2.jpg')}}" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-none d-sm-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/img4.jpg')}}" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-none d-sm-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselWithCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselWithCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

