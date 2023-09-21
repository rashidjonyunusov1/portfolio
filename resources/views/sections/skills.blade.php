<div class="container">

<div class="section-title">
  <h2>Skills</h2>
  <p>{!! $skills['description_'.\App::getLocale() ] !!}</p>
  {{-- I will not stop learning, I will only take a step forward.
    A person who stops moving is the same for me as a person who stops living. --}}
</div>

<div class="row skills-content">

  <div class="col-lg-6" data-aos="fade-up">

    {{-- <div class="progress">
      <span class="skill">HTML <i class="val">97%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">CSS <i class="val">83%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div> --}}
@foreach ($skill as $item)
    <div class="progress">
      <span class="skill">{{ $item->skill_name_r }}{{--JavaScript--}} <i class="val">{{ $item->skill_percentage_r }}%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->skill_percentage_r }}" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
 @endforeach
  </div>

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
@foreach ($skill as $item)
    
    <div class="progress">
      <span class="skill"> {{ $item->skill_name_l }}{{--PHP--}} <i class="val">{{ $item->skill_percentage_l }}%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->skill_percentage_l }}" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    @endforeach
    
    {{-- <div class="progress">
      <span class="skill">Video editor <i class="val">70%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>

    <div class="progress">
      <span class="skill">Photoshop <i class="val">55%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div> --}}

  </div>

</div>

</div>