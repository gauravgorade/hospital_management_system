      <!-- main appointment form -->
      <div class="modal fade" id="mainappointment" style="z-index:10000;">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content form-wrapper">
                  <div class="close-box" data-dismiss="modal">
                      <i class="fa fa-times fa-2x"></i>
                  </div>
                  <div class="container-fluid mt-5" style="background-color:#fff; ">
                      <form method="post" id="RegisterationForm" class="needs-validation" novalidate>
                          <div class="form-group text-center pb-2 mt34">
                              <h4>Book a Appointment</h4>
                          </div>
                          <div class="row">
                              <input type="hidden" name="url" value="<?php echo base_url().$this->uri->uri_string();?>">

                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="name">Name</label>
                                  <span class="fa fa-user form-control-icon"></span>
                                  <input type="text" class="form-control" name="name" id="name" class="form-control"
                                      placeholder="Name" required>
                                  <div class="invalid-feedback">Please enter your name</div>
                              </div>
                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="email">Email</label>
                                  <span class="fa fa-envelope form-control-icon"></span>
                                  <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                                      required>
                                  <div class="invalid-feedback">Please enter a valid email address</div>
                              </div>
                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="age">Age</label>
                                  <span class="fa fa-users form-control-icon"></span>
                                  <input type="number" id="age" name="age" class="form-control" placeholder="Age"
                                      required>
                                  <div class="invalid-feedback">Please enter a age</div>
                              </div>

                              <div class="form-group col-md-6 col-sm-12"><br>
                                  <label for="age">Gender</label><br><br><br>
                                  <input type="radio" id="male" name="gender" value="Male"> Male
                                  <input type="radio" id="female" name="gender" value="Female"> Female

                              </div>

                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="mobile">Mobile</label>
                                  <span class="fa fa-mobile-alt form-control-icon"></span>

                                  <input type="text" id="mobile" name="mobile" class="form-control" required
                                      onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                      pattern="[0-9]+" maxlength="10" minlength="10"
                                      title="Mobile number should contain only 10 digits!" placeholder="Mobile Number">
                                  <div class="invalid-feedback">Please enter a mobile no.</div>
                              </div>
                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="address">Your Address</label>
                                  <span class="fa fa-map-marker form-control-icon"></span>
                                  <input type="text" id="address" name="address" class="form-control"
                                      placeholder="Your Address" required>
                                  <div class="invalid-feedback">Please enter address</div>
                              </div>


                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="city">Your City</label>
                                  <span class="fas fa-city form-control-icon"></span>
                                  <input type="text" id="city" name="city" class="form-control"
                                      placeholder="Enter Your City" required>
                                  <div class="invalid-feedback">Please enter city</div>
                              </div>


                              <div class="form-group col-md-6 col-sm-12">
                                  <label for="location">Select Speciality</label>
                                  <span class="fa fa-map-marker form-control-icon"></span>
                                  <select id="sdfnsfgfgjgnf" class="form-control mb-1 select" required>
                                      <option value="">Select Speciality</option>
                                      <option value="Endovascular">Endovascular Speciality
                                      </option>
                                      <option value="Skin">Skin Speciality</option>
                                  </select>
                                  <div class="invalid-feedback">Please select Speciality</div>
                              </div>
                          </div>

                          <div id="skin" class="treatment">
                              <div class="row">
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="location">Select Location</label>
                                      <span class="fa fa-map-marker form-control-icon"></span>
                                      <select id="skinlocations" name="skin_hospitallocation"
                                          class="form-control mb-1 select skin_hospitallocation">
                                          <option value="">Select Location</option>
                                          <option value="Auranagabad">Auranagabad</option>
                                      </select>
                                      <div class="invalid-feedback">Please select Location</div>
                                  </div>

                                  <div id="Auranagabad2" class="form-group col-md-6 col-sm-12 treatment">
                                      <span class="fs-12 lh-16">Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar,
                                          Garkheda, Aurangabad.
                                      </span>

                                  </div>
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="Treatmentforskin">Select Skin Treatment</label>
                                      <span class="fa fa-clock form-control-icon"></span>
                                      <select id="skinTreatments" name="skinTreatments"
                                          class="form-control mb-1 select">
                                          <option value="">Select Treatment</option>
                                          <option value="Skin Problem">Skin Problem</option>
                                          <option value="Cosmetic Treatment">Cosmetic Treatment</option>
                                          <option value="Hair Problem">Hair Problem</option>
                                          <option value="Skin Biopsy">Skin Biopsy</option>
                                      </select>
                                      <div class="invalid-feedback">Please select Treatment</div>
                                  </div>
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="date">Select Date</label>
                                      <span class="fa fa-calendar-edit form-control-icon"></span>
                                      <input id="skindate" name="skin_date" type="text"
                                          class="form-control datepicker" />
                                      <div class="invalid-feedback">Please Select Date</div>
                                  </div>

                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="slot">Preferable Timing</label>
                                      <span class="fa fa-clock form-control-icon"></span>
                                      <select id="skintiming" name="skin_sloat" class="form-control mb-1 select">
                                          <option value="" selected="selected" disabled="disabled">Preferable
                                              Timing</option>
                                          <option value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                          <option value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                      </select>
                                      <div class="invalid-feedback">Please Select Preferable Timing</div>
                                  </div>
                                  <div class="form-group col-md-12 col-sm-12">
                                      <label for="Message">Message</label>
                                      <span class="fa fa-envelope-square form-control-icon"></span>
                                      <input type="text" id="skinmsg" name="skin_msg" class="form-control"
                                          placeholder="Message">
                                      <div class="invalid-feedback">Please enter message</div>
                                  </div>
                              </div>
                          </div>

                          <div id="endovascular" class="treatment">
                              <div class="row">
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="location">Select Location</label>
                                      <span class="fa fa-map-marker form-control-icon"></span>
                                      <select id="endolocations" name="endo_hospitallocation"
                                          class="form-control mb-1 select fetchdatebylocation">
                                          <option value="">Select Location</option>
                                          <option value="Auranagabad">Auranagabad</option>
                                          <option value="Majalgaon">Majalgaon </option>
                                          <option value="Nanded">Nanded </option>
                                      </select>
                                      <div class="invalid-feedback">Please select Location</div>
                                  </div>

                                  <div class="form-group col-md-6 col-sm-12">
                                      <span id="abad" class="treatment fs-12 lh-16">
                                          Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar, Garkheda, Aurangabad.
                                      </span>
                                      <span id="majalgoan" class="treatment fs-12 lh-16">
                                          Jaju Hospital and Maternity Home, in front of the new bus stand,
                                          Shivaji Nagar, Beed Road, Majalgon, Dist. Beed
                                      </span>
                                      <span id="nanded" class="treatment fs-12 lh-16">
                                          Narayan Superspeciality Hospital (Kabade Hospital Complex)
                                          Near Mahavir Society, Shivaji Nagar, Nanded.
                                      </span>
                                  </div>

                                  <div class="form-group col-md-6 col-sm-12 fs-12"><br>
                                      <label for="age">Disease/Treatment</label><br><br><br>
                                      <input type="radio" id="Disease" name="services" value="Disease"> Disease
                                      <input type="radio" id="Treatment" name="services" value="Treatment"> Treatment
                                  </div>
                                  <div class="form-group col-md-6 col-sm-12 treatment" id="endoTreatment">
                                      <label for="Treatmentforendovascular">Select Treatment</label>
                                      <span class="fa fa-clock form-control-icon"></span>
                                      <select id="endovascularTreatment" name="endovascularTreatment"
                                          class="form-control mb-1 select">
                                          <option value="">Select Treatment</option>
                                          <optgroup label="Leg Treatment">
                                              <option value="Varicose veins">Varicose veins</option>
                                              <option value="Deep Vein Thrombosis (DVT)">Deep Vein Thrombosis (DVT)
                                              </option>
                                              <option value="Peripheral Artery Disease (PAD)">Peripheral Artery Disease
                                                  (PAD)</option>
                                              <option value="Diabetic Foot Ulcer">Diabetic Foot Ulcer</option>
                                              <option value="Gangrene">Gangrene</option>
                                              <option value="Knee Osteoarthritis (Knee Arthritis)">Knee Osteoarthritis
                                                  (Knee Arthritis)</option>
                                              <option value="Plantar Fascitis">Plantar Fascitis</option>
                                              <option value="Osteoid Osteoma">Osteoid Osteoma</option>
                                          </optgroup>
                                          <optgroup label="Lung Treatment">
                                              <option value="Pulmonary Embolism">Pulmonary Embolism</option>
                                          </optgroup>
                                          <optgroup label="Men's Treatment">
                                              <option value="BPH (Benign Prostatic Hypertrophy)">BPH (Benign Prostatic
                                                  Hypertrophy)</option>
                                          </optgroup>
                                          <optgroup label="Women's Treatment">
                                              <option value="Uterus Fibroids">Uterus Fibroids</option>
                                              <option value="Adenomyosis">Adenomyosis</option>
                                              <option value="Post partal hemorrhage">Post partal hemorrhage</option>
                                              <option value="Uterus AVM (Arterio-Venous Malformation)">Uterus AVM
                                                  (Arterio-Venous Malformation)</option>
                                              <option value="Pelvic Congestion Syndrome">Pelvic Congestion Syndrome
                                              </option>
                                              <option value="Placenta Accreta and Percreta">Placenta Accreta and
                                                  Percreta
                                              </option>
                                          </optgroup>
                                      </select>
                                      <div class="invalid-feedback">Please select Treatment</div>
                                  </div>

                                  <div class="form-group col-md-6 col-sm-12 treatment" id="endoDisease">
                                      <label for="Treatmentforendovascular">Select Disease</label>
                                      <span class="fa fa-clock form-control-icon"></span>
                                      <select id="endovascularDiseaseTreatment" name="endovascularDiseaseTreatment"
                                          class="form-control mb-1 select">
                                          <option value="">Select Disease</option>
                                          <optgroup label="Leg Diseases">
                                              <option value="Varicose veins">Varicose veins</option>
                                              <option value="Deep Vein Thrombosis (DVT)">Deep Vein Thrombosis (DVT)
                                              </option>
                                              <option value="Peripheral Artery Disease (PAD)">Peripheral Artery Disease
                                                  (PAD)</option>
                                              <option value="Diabetic Foot Ulcer">Diabetic Foot Ulcer</option>
                                              <option value="Gangrene">Gangrene</option>
                                              <option value="Knee Osteoarthritis (Knee Arthritis)">Knee Osteoarthritis
                                                  (Knee Arthritis)</option>
                                              <option value="Plantar Fascitis">Plantar Fascitis</option>
                                              <option value="Osteoid Osteoma">Osteoid Osteoma</option>
                                          </optgroup>
                                          <optgroup label="Lung Diseases">
                                              <option value="Pulmonary Embolism">Pulmonary Embolism</option>
                                          </optgroup>
                                          <optgroup label="Men's Diseases">
                                              <option value="BPH (Benign Prostatic Hypertrophy)">BPH (Benign Prostatic
                                                  Hypertrophy)</option>
                                          </optgroup>
                                          <optgroup label="Women's Diseases">
                                              <option value="Uterus Fibroids">Uterus Fibroids</option>
                                              <option value="Adenomyosis">Adenomyosis</option>
                                              <option value="Post partal hemorrhage">Post partal hemorrhage</option>
                                              <option value="Uterus AVM (Arterio-Venous Malformation)">Uterus AVM
                                                  (Arterio-Venous Malformation)</option>
                                              <option value="Pelvic Congestion Syndrome">Pelvic Congestion Syndrome
                                              </option>
                                              <option value="Placenta Accreta and Percreta">Placenta Accreta and
                                                  Percreta
                                              </option>
                                          </optgroup>
                                      </select>
                                      <div class="invalid-feedback">Please select Treatment</div>
                                  </div>
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="date">Select Date</label>
                                      <span class="fa fa-calendar-edit form-control-icon"></span>
                                      <input id="defaultdate" type="text" class="form-control" />
                                      <input id="endodate1" name="endo_date_aurangabad" type="text"
                                          class="form-control treatment" />
                                      <input id="endodate2" name="endo_date_majalgoan" type="text"
                                          class="form-control treatment" />
                                      <input id="endodate3" name="endo_date_nanded" type="text"
                                          class="form-control treatment" />
                                      <div class="invalid-feedback">Please Select Date</div>
                                  </div>
                                  <div class="form-group col-md-6 col-sm-12">
                                      <label for="slot">Preferable Timing</label>
                                      <span class="fa fa-clock form-control-icon"></span>
                                      <select id="slot1254" name="endo_time" class="form-control mb-1 select">
                                          <option value="" disabled="disabled">Preferable Timing
                                          </option>
                                          <option id="first" value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                          <option id="second" value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                          <option id="third" value="10:00am to 05:00pm">10:00am to 05:00pm</option>
                                          <option id="fourth" value="10:00am to 04:00pm">10:00am to 04:00pm</option>
                                      </select>
                                      <div class="invalid-feedback">Please Preferable Timing</div>
                                  </div>

                                  <div class="form-group col-md-12 col-sm-12">
                                      <label for="Message">Message</label>
                                      <span class="fa fa-envelope-square form-control-icon"></span>
                                      <textarea id="endo_msg" name="endo_msg" class="form-control"
                                          placeholder="Message">
                                    </textarea>
                                      <div class="invalid-feedback">Please enter message</div>
                                  </div>
                              </div>

                          </div>
                          <div class="slider-btn">
                              <button type="submit" id="submit" class="btn ss-btn w-215" data-delay=".8s"
                                  style="margin-left:150px !important; margin-bottom:10px !important;">Book
                                  Appointment <i class="fas fa-chevron-right"></i></button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- main appointment form -->
