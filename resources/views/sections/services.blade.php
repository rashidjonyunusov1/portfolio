

<div class="row">
  {{-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
    <div class="icon"><i class="bi bi-briefcase"></i></div>
    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, amet! Nisi tempore aliquid, voluptates minima incidunt dolorem</p>
  </div>
  <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
    <div class="icon"><i class="bi bi-card-checklist"></i></div>
    <h4 class="title"><a href="">Dolor Sit</a></h4>
    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, iste. Minima officia quidem</p>
  </div> --}}
  @foreach ($services as $item)
      
  <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
    <div class="icon"><i class="bi bi-bar-chart"></i></div>
    <h4 class="title"><a href="">{{ $item['services_name_'.\App::getLocale()] }}</a></h4>
    <p class="description">{{ $item['services_description_'.\App::getLocale()] }}</p>
  </div>

  @endforeach

  {{-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
    <div class="icon"><i class="bi bi-binoculars"></i></div>
    <h4 class="title"><a href="">ipsum dolor.</a></h4>
    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, iste. Minima officia quidem</p>
  </div>
  <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
    <div class="icon"><i class="bi bi-brightness-high"></i></div>
    <h4 class="title"><a href="">dolor sit</a></h4>
    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, iste. Minima officia quidem</p>
  </div>
  <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
    <h4 class="title"><a href="">Lorem ipsum dolor sit amet.</a></h4>
    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, amet! Nisi tempore aliquid, voluptates minima incidunt dolorem</p>
  </div> --}}
</div>
