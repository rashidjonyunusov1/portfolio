{{-- @foreach ($about as $item) --}}
<div class="container">
<div class="section-title">  
  <h2 id="about">About</h2>
  <p>
    {!! $about['description1_'.\App::getLocale()] !!}
    {{-- MY GOAL - Effective use of time. Proper allocation of time and money in business.<br>
    My motto in life is live by trusting in what you know, not luck --}}
  </p>
</div>



<div class="row">
  <div class="col-lg-4" data-aos="fade-right">
    <img src="/img/{{$about->img}}" class="img-fluid" alt="" style="margin-top: 30px;">
  </div>
  <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
    <h3>Businessman &amp; Web Developer.</h3>
    <p class="fst-italic">
    </p>
    <div class="row">
      <div class="col-lg-6">
        <ul>
          <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about['brithday_'.\App::getLocale()] }} {{--3 January 2002--}}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a>{{ $about->website }}{{--www.rashidjon.uz--}}</a></span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone }}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about['city_'.\App::getLocale()] }}{{--Uzbekistan Ferghana Kakand--}}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Resume:</strong> <span><a href="/resume/{{ $resume->resume }}"style="border:1px solid antiquewhite;" class="btn btn--light" target="_blank" > <i class="bi bi-download" ></i>
            Resume
          </a></span></li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul>
          <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about['dagree_'.\App::getLocale()] }}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about->email }}</span></li>
          <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about['freelance_'.\App::getLocale()] }}{{--Available not--}}</span></li>
        </ul>
      </div>
    </div>
    <p>
      {!! $about['description2_'.\App::getLocale()] !!}
      {{-- My main mission is to create high-quality web applications that make the work of people and organizations easier, more convenient and save additional effort and costs. --}}
    </p>
  </div>
</div>

</div>

{{-- @endforeach     --}}