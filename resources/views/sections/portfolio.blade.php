<div class="container">

<div class="section-title">
  <h2>Portfolio</h2>
  <p>{!! $portfolios['description_'.\App::getLocale()] !!}</p>
</div>

<!-- <div class="row" data-aos="fade-up">
  <div class="col-lg-12 d-flex justify-content-center">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">App</li>
      <li data-filter=".filter-card">Card</li>
      <li data-filter=".filter-web">Web</li>
    </ul>
  </div>
</div> -->

<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">


@foreach ($portfolio as $item)

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <img src="/img/{{ $item->img }}" class="img-fluid" alt="">
      <div class="portfolio-links">
        <a href="{{ $item->url }}" target="_blank"><i class="bx bx-link"></i></a>
      </div>
    </div>
  </div>
  @endforeach
 
{{-- https://github.com/rashidjonyunusov1/
  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <div class="portfolio-wrap">
      <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
      <div class="portfolio-links">
        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
      </div>
    </div>
  </div> --}}

</div>

</div>