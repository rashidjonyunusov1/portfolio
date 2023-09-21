<div class="section-title">
          <h2>Contact</h2>
          <p>
            {!! $contact['description_'.\App::getLocale()] !!}
            {{--Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.--}}</p>
        </div>

        <div class="row" data-aos="fade-in">

              
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>
            {!! $contact['location_'.\App::getLocale()] !!}
                  {{--Uzbekistan, Tashkent, Olmazor region--}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $contact->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $contact->call }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-chat-dots"></i>
                <h4>Send message:</h4>
                &nbsp&nbsp&nbsp&nbsp&nbsp;<a href="https://t.me/suniy_intelektt"><button type="button" class="btn btn-primary btn-lg">Send</button></a>
              </div>
              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.0765064109873!2d69.21887481526282!3d41.35069077926753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c6bc8ca661d%3A0xd74b44fc8fe0f672!2z0KLRg9GA0LjQvdGB0LrQuNC5INCf0L7Qu9C40YLQtdGF0L3QuNGH0LXRgdC60LjQuSDQo9C90LjQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2s!4v1666764574173!5m2!1sru!2s" width="400" height="400" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
           

          </div>

          