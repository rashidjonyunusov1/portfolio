@extends('layouts.main') 
@section('content') 
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <!-- start home -->
   {{-- @include('sections.home') --}}
   <div class="hero-container" data-aos="fade-in">
  
    <h1>@lang('home.name')</h1>
    <p><b>@lang('home.my')</b> <b><span class="typed" data-typed-items="@lang('home.jobs')"></span></b></p>
    <br><br>
    <!-- <h3> <a  style="color: black;" href="/curswork/index.html" target="_blank">My Projects</a></h3> -->
  </div>
   <!-- end home -->
  </section>

  <main id="main">

    
    <section id="about" class="about">
      <!-- start about -->
     @include('sections.about')
      <!-- end about -->
    </section>

  
    {{-- <section id="facts" class="facts">
      <!-- start Facts -->
     @include('sections.facts')
     <!-- end Facts -->
    </section> --}}

    <section id="skills" class="skills section-bg">
      <!-- start skills -->
     @include('sections.skills')
     <!-- end skills -->
    </section>
        <!-- <rek>
           <a href="https://idu-asadbek1ng.netlify.app/" target="_blank"><img src="assets/img/idu.png" width="700px" height="300px" alt=""></a>
      </rek> -->




    
    <!-- <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Rashidjon Yunusov</h4>
              <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde explicabo sequi quas dolorum harum velit aut amet dolorem in qui! Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, molestiae.</em></p>
              <ul>
                <li>Ferghana</li>
                <li>+998(97) 557 0103</li>
                <li>yunusovrashidjon21@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Ciber security  and &amp; Web Developer</h4>
              <h5>2022 - ....</h5>
              <p><em>Tashkent city International Digital University</em></p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad quos accusantium rem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, sed!</p>
            </div>
            <div class="resume-item">
              <h4>Business &amp; Web Developer </h4>
              <h5>2022 - .....</h5>
              <p><em>International Digital University of Tashkent</em></p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsa aut cum inventore a! Voluptates, officiis est veniam quibusdam iusto porro in et quam. Odio magni rem repellat asperiores fuga hic esse cupiditate fugiat dolorum?</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Middle Video editor specialist</h4>
              <h5>2022 - Present</h5>
              <p><em>Experion, Tashkent, Olmazor region </em></p>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae temporibus soluta eum nostrum rerum, quos, facere atque,</li>
                <li>Vitae ducimus illum at nisi. Sed corporis placeat optio labore assumenda amet , blanditiis iure commodi harum.</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore animi doloremque modi id quasi.</li>
                <li>Sed corporis placeat optio labore assumenda amet . Animi, Lorem ipsum dolor sit.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Web Developer specialist</h4>
              <h5>2022 - 20..</h5>
              <p><em>Uzbekistan, Tashkent, Olmazor region</em></p>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae temporibus soluta eum nostrum rerum, quos,</li>
                <li>Vitae ducimus illum at nisi. Sed corporis placeat optio labore assumenda amet</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Adipisicing elit. Inventore animi doloremque modi id quasi</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section> -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    <!-- start portfolio -->
  @include('sections.portfolio')
    <!-- end portfolio -->
    </section>

    
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          
          <h2>Services</h2>
          <p>{!! $service['description_'.\App::getLocale()] !!}</p>
          
        </div>
      <!-- start services -->
     @include('sections.services')
      <!-- end services -->
      </div>
    </section>


    
    <section id="contact" class="contact">
      <div class="container">
  <!-- start contacts -->
       @include('sections.contacts')
  <!-- end contacts -->
  <!-- start forms -->
       @include('sections.forms')
  <!-- end forms -->
        </div>

      </div>
    </section>

  </main>

  
@endsection