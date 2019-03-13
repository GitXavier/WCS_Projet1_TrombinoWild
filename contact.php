<?php include 'includes/_head.php'; ?>
<?php include 'includes/_navBar.php'; ?>
      
      <section class="contact-bloc">
          <h6 class="transparent">.</h6>
          <div class="conteneur-contact">
              <div class="row">
                  <form class="col-12 col-md-6">
                      <div class="form-group-contact">
                          <label for="exampleFormControlInput1">Last Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Williams">
                      </div>
                      <div class="form-group-contact">
                          <label for="exampleFormControlInput2">First Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="James">
                      </div>
                      <div class="form-group-contact">
                          <label for="exampleFormControlInput3">Email Address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com">
                      </div>
                      <div class="form-group-contact">
                          <label for="exampleFormControlSelect1">Example Select</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                              <option>Information Request</option>
                              <option>Assistance Request</option>
                              <option>Funding</option>
                              <option>Various</option>
                          </select>
                      </div>
              
                      <div class="form-group-contact">
                          <label for="exampleFormControlTextarea1">Message</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="contact-button">
                          <button type="button" class="btn btn-primary btn-contact btn-lg btn-block">Submit</button>
                      </div>
                  </form>
                      
                   <div class="col-12 col-md-6 conteneur-maps">
                      <iframe  class="position-maps" src="https://www.google.com/maps/embed?pb=" width="770" height="570" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
          </div>         
      </section>



  <?php include 'includes/_footer.php'; ?>