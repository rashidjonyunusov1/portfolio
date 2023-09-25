
<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.0765064109873!2d69.21887481526282!3d41.35069077926753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c6bc8ca661d%3A0xd74b44fc8fe0f672!2z0KLRg9GA0LjQvdGB0LrQuNC5INCf0L7Qu9C40YLQtdGF0L3QuNGH0LXRgdC60LjQuSDQo9C90LjQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2s!4v1666764574173!5m2!1sru!2s" width="400" height="400" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
 
 
  <form class="row g-3 col-md-12"  onsubmit=" return sendtelegram()" action="">
    @csrf
    <div class="col-md-12" style="text-align: center">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" class="form-control" id="name" placeholder="Your Name"  required><br>

      <label for="email" class="form-label">Your Email</label>
      <input type="email" class="form-control" id="email" placeholder="Your Email" required><br>

      <label for="number" class="form-label">Your Number</label>
      <input type="number" class="form-control" id="number" placeholder="Your Number" required><br>

      <label for="message" class="form-label">Your Message</label>
      <textarea type="text" class="form-control " id="message" placeholder="Send Message...." required>
      </textarea><br><br>

      <div class="col-12">
        <button type="submit" id="submit" class="btn btn-primary">SEND</button>
      </div>
    </div>
    
   
  </form>
  

             {{-- <form action=""  onsubmit=" return sendtelegram()" class="php-email-form" >
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" id="email" class="form-control" >
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Number</label>
                  <input type="number" id="number" class="form-control"  >
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Subject</label>
                  <input type="text" id="subject" class="form-control"  >
                </div>
              </div>
              
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control"  rows="10"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> 
          </div> --}}





  <!-- <form class="row g-10 col-md-6 needs-validation">
  <div class="col-md-3 position-relative">
    <label for="name" class="form-label">First name</label>
    <input type="text" class="form-control" value="Mark" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="name" class="form-label">Last name</label>
    <input type="text" class="form-control" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form> -->