<!-- enquiry form -->
<!-- <div class="modal fade" id="enquiry" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5" style="background-color:#fff; ">
                <form method="post" id="RegisterationForm" class="needs-validation" method="post" novalidate>
                    <div class="form-group text-center pb-2 mt34">
                        <h4>Enquire Now</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Name</label>
                            <span class="fa fa-user form-control-icon"></span>
                            <input type="text" class="form-control" id="name" class="form-control" placeholder="Name"
                                required>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="mobile">Mobile</label>
                            <span class="fa fa-mobile-alt form-control-icon"></span>
                            <input type="text" id="mobile" name="mobile" class="form-control"
                                onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                pattern="[0-9]+" maxlength="10" minlength="10"
                                title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                                required>
                            <div class="invalid-feedback">Please enter a mobile no.</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="city">Your City</label>
                            <span class="fas fa-city form-control-icon"></span>
                            <input type="text" id="city" class="form-control" placeholder="Enter Your City" required>
                            <div class="invalid-feedback">Please enter city</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 treatment">
                            <label for="location">Select Speciality</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <select id="hospitaltreatment" class="form-control mb-1 select" required>
                                <option selected="selected" value="">Select Speciality</option>
                                <option id="Endovascular" value="Endovascular">Endovascular Speciality</option>
                                <option id="Skin" value="Skin">Skin Speciality</option>
                            </select>
                            <div class="invalid-feedback">Please select Speciality</div>
                        </div>
                    </div>
                    <div class="slider-btn" style="margin:0px 0px 20px 50px;">
                        <button type="submit" class="btn ss-btn" data-delay=".8s">Enquire Now <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- enquiry form -->
<!--main enquiry form -->
<!-- <div class="modal fade" id="mainenquiry" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5" style="background-color:#fff; ">
                <form method="post" id="RegisterationForm" class="needs-validation" method="post" novalidate>
                    <div class="form-group text-center pb-2 mt34">
                        <h4>Enquire Now</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Name</label>
                            <span class="fa fa-user form-control-icon"></span>
                            <input type="text" class="form-control" id="name" class="form-control" placeholder="Name"
                                required>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="mobile">Mobile</label>
                            <span class="fa fa-mobile-alt form-control-icon"></span>
                            <input type="text" id="mobile" name="mobile" class="form-control"
                                onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                pattern="[0-9]+" maxlength="10" minlength="10"
                                title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                                required>
                            <div class="invalid-feedback">Please enter a mobile no.</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="city">Your City</label>
                            <span class="fas fa-city form-control-icon"></span>
                            <input type="text" id="city" class="form-control" placeholder="Enter Your City" required>
                            <div class="invalid-feedback">Please enter city</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="location">Select Speciality</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <select id="hospitaltreatment" class="form-control mb-1 select" required>
                                <option selected="selected" value="">Select Speciality</option>
                                <option id="Endovascular" value="Endovascular">Endovascular Speciality</option>
                                <option id="Skin" value="Skin">Skin Speciality</option>
                            </select>
                            <div class="invalid-feedback">Please select Speciality</div>
                        </div>
                    </div>
                    <div class="slider-btn" style="margin:0px 0px 20px 50px;">
                        <button type="submit" class="btn ss-btn" data-delay=".8s">Enquire Now <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!--main enquiry form -->

<!-- main appointment form -->
<!-- <div class="modal fade" id="register" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5" style="background-color:#fff; ">
                <form method="post" id="RegisterationForm" class="needs-validation" method="post" novalidate>
                    <div class="form-group text-center pb-2 mt34">
                        <h4>Book a Appointment</h4>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Name</label>
                            <span class="fa fa-user form-control-icon"></span>
                            <input type="text" class="form-control" id="name" class="form-control" placeholder="Name"
                                required>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <span class="fa fa-envelope form-control-icon"></span>
                            <input type="text" id="email" class="form-control" placeholder="Email" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="age">Age</label>
                            <span class="fa fa-users form-control-icon"></span>
                            <input type="number" id="age" class="form-control" placeholder="Age" required>
                            <div class="invalid-feedback">Please enter a age</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12"><br>
                            <label for="age">Gender</label><br><br><br>
                            <input type="radio" id="male" name="gender" value="1"> Male
                            <input type="radio" id="female" name="gender" value="2"> Female

                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="mobile">Mobile</label>
                            <span class="fa fa-mobile-alt form-control-icon"></span>

                            <input type="text" id="mobile" name="mobile" class="form-control"
                                onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                pattern="[0-9]+" maxlength="10" minlength="10"
                                title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                                required>
                            <div class="invalid-feedback">Please enter a mobile no.</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="address">Your Address</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <input type="text" id="address" class="form-control" placeholder="Your Address" required>
                            <div class="invalid-feedback">Please enter address</div>
                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="city">Your City</label>
                            <span class="fas fa-city form-control-icon"></span>
                            <input type="text" id="city" class="form-control" placeholder="Enter Your City" required>
                            <div class="invalid-feedback">Please enter city</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="location">Select Speciality</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <select id="selectspeciality" class="form-control mb-1 select" required>
                                <option selected="selected" value="">Select Speciality</option>
                                <option id="Endovascular" value="Endovascular">Endovascular Speciality</option>
                                <option id="Skin" value="Skin">Skin Speciality</option>
                            </select>
                            <div class="invalid-feedback">Please select Speciality</div>
                        </div>
                    </div>

                    <div id="skin" class="treatment">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="location">Select Location</label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <select id="hospitallocation" class="form-control mb-1 select" required>
                                    <option value="">Select Location</option>
                                    <option value="1">Auranagabad</option>
                                </select>
                                <div class="invalid-feedback">Please select Location</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <p id="abad" class="treatment fs-12 lh-16">
                                    Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar, Garkheda, Aurangabad.
                                </p>
                                <p id="nanded" class="treatment fs-12 lh-16">
                                    Narayan Superspeciality Hospital (Kabade Hospital Complex)
                                    Near Mahavir Society, Shivaji Nagar, Nanded.
                                </p>
                                <p id="majalgoan" class="treatment fs-12 lh-16">
                                    Jaju Hospital and Maternity Home, in front of the new bus stand,
                                    Shivaji Nagar, Beed Road, Majalgon, Dist. Beed
                                </p>
                            </div>
                            <div class="form-group col-md-6 col-sm-12" id="SkinTreatment">
                                <label for="Treatmentforskin">Select Skin Treatment</label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="SkinTreatments" class="form-control mb-1 select" required>
                                    <option value="0">Select Treatment</option>
                                    <option value="1">Skin Problem</option>
                                    <option value="2">Cosmetic Treatment</option>
                                    <option value="3">Hair Problem</option>
                                    <option value="4">Skin Biopsy</option>
                                </select>
                                <div class="invalid-feedback">Please select Treatment</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="date">Select Date</label>
                                <span class="fa fa-calendar-edit form-control-icon"></span>
                                <input id="datepicker" type="text" class="form-control datepicker" required />
                                <div class="invalid-feedback">Please Select Date</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="slot">Preferable Timing</label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="slot" class="form-control mb-1 select" required>
                                    <option value="" selected="selected" disabled="disabled">Preferable Timing</option>
                                    <option value="1">10:00am to 01:00pm</option>
                                    <option value="2">03:00pm to 09:00pm</option>
                                </select>
                                <div class="invalid-feedback">Please Select Preferable Timing</div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="Message">Message</label>
                                <span class="fa fa-envelope-square form-control-icon"></span>
                                <input type="text" id="msg" class="form-control" placeholder="Message" required>
                                <div class="invalid-feedback">Please enter message</div>
                            </div>
                        </div>
                    </div>

                    <div id="endovascular" class="treatment">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="location">Select Location</label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <select id="endolocations" class="form-control mb-1 select" required>
                                    <option value="">Select Location</option>
                                    <option value="1">Auranagabad</option>
                                    <option value="2">Majalgaon </option>
                                    <option value="3">Nanded </option>
                                </select>
                                <div class="invalid-feedback">Please select Location</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <p id="abad" class="treatment fs-12 lh-16">
                                    Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar, Garkheda, Aurangabad.
                                </p>
                                <p id="majalgoan" class="treatment fs-12 lh-16">
                                    Jaju Hospital and Maternity Home, in front of the new bus stand,
                                    Shivaji Nagar, Beed Road, Majalgon, Dist. Beed
                                </p>
                                <p id="nanded" class="treatment fs-12 lh-16">
                                    Narayan Superspeciality Hospital (Kabade Hospital Complex)
                                    Near Mahavir Society, Shivaji Nagar, Nanded.
                                </p>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 fs-12"><br>
                                <label for="age">Disease/Treatment</label><br><br><br>
                                <input type="radio" id="Disease" name="services" value="1"> Disease
                                <input type="radio" id="Treatment" name="services" value="2"> Treatment
                            </div>
                            <div class="form-group col-md-6 col-sm-12 treatment" id="endoTreatment">
                                <label for="Treatmentforendovascular">Select Treatment</label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="endovascularTreatment" class="form-control mb-1 select" required>
                                    <option value="">Select Treatment</option>
                                    <optgroup label="Leg Treatment">
                                        <option value="1">Varicose veins</option>
                                        <option value="2">Deep Vein Thrombosis (DVT)</option>
                                        <option value="3">Peripheral Artery Disease (PAD)</option>
                                        <option value="4">Diabetic Foot Ulcer</option>
                                        <option value="5">Gangrene</option>
                                        <option value="6">Knee Osteoarthritis (Knee Arthritis)</option>
                                        <option value="7">Plantar Fascitis</option>
                                        <option value="8">Osteoid Osteoma</option>
                                    </optgroup>
                                    <optgroup label="Lung Treatment">
                                        <option value="9">Pulmonary Embolism</option>
                                    </optgroup>
                                    <optgroup label="Men's Treatment">
                                        <option value="10">BPH (Benign Prostatic Hypertrophy)</option>
                                    </optgroup>
                                    <optgroup label="Women's Treatment">
                                        <option value="11">Uterus Fibroids</option>
                                        <option value="12">Adenomyosis</option>
                                        <option value="13">Post partal hemorrhage</option>
                                        <option value="14">Uterus AVM (Arterio-Venous Malformation)</option>
                                        <option value="15">Pelvic Congestion Syndrome</option>
                                        <option value="16">Placenta Accreta and Percreta</option>
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">Please select Treatment</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 treatment" id="endoDisease">
                                <label for="Treatmentforendovascular">Select Disease</label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="endovascularTreatment" class="form-control mb-1 select" required>
                                    <option value="">Select Disease</option>
                                    <optgroup label="Leg Diseases">
                                        <option value="1">Varicose veins</option>
                                        <option value="2">Deep Vein Thrombosis (DVT)</option>
                                        <option value="3">Peripheral Artery Disease (PAD)</option>
                                        <option value="4">Diabetic Foot Ulcer</option>
                                        <option value="5">Gangrene</option>
                                        <option value="6">Knee Osteoarthritis (Knee Arthritis)</option>
                                        <option value="7">Plantar Fascitis</option>
                                        <option value="8">Osteoid Osteoma</option>
                                    </optgroup>
                                    <optgroup label="Lung Diseases">
                                        <option value="9">Pulmonary Embolism</option>
                                    </optgroup>
                                    <optgroup label="Men's Diseases">
                                        <option value="10">BPH (Benign Prostatic Hypertrophy)</option>
                                    </optgroup>
                                    <optgroup label="Women's Diseases">
                                        <option value="11">Uterus Fibroids</option>
                                        <option value="12">Adenomyosis</option>
                                        <option value="13">Post partal hemorrhage</option>
                                        <option value="14">Uterus AVM (Arterio-Venous Malformation)</option>
                                        <option value="15">Pelvic Congestion Syndrome</option>
                                        <option value="16">Placenta Accreta and Percreta</option>
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">Please select Treatment</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="date">Select Date</label>
                                <span class="fa fa-calendar-edit form-control-icon"></span>
                                <input id="mainDate" type="text" class="form-control" />
                                <div class="invalid-feedback">Please Select Date</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="slot">Preferable Timing</label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="slot" class="form-control mb-1 select" required>
                                    <option value="" selected="selected" disabled="disabled">Preferable Timing
                                    </option>
                                    <option id="first" value="1">10:00am to 01:00pm</option>
                                    <option id="second" value="2">03:00pm to 09:00pm</option>
                                    <option id="third" value="1">10:00am to 05:00pm</option>
                                    <option id="fourth" value="1">10:00am to 04:00pm</option>
                                </select>
                                <div class="invalid-feedback">Please Preferable Timing</div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="Message">Message</label>
                                <span class="fa fa-envelope-square form-control-icon"></span>
                                <textarea id="msg" class="form-control" placeholder="Message" required>
                                    </textarea>
                                <div class="invalid-feedback">Please enter message</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-btn">
                        <button type="submit" class="btn ss-btn w-215" data-delay=".8s"
                            style="margin-left:150px !important; margin-bottom:10px !important;">Book Appointment <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- main appointment form -->

<!-- skin appointment form -->
<!-- <div class="modal fade" id="skinappointment" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5">
                <form method="post" id="RegisterationForm" class="needs-validation" method="post" novalidate>
                    <div class="form-group text-center pb-2 mt34">
                        <h4>Book a Appointment</h4>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Name</label>
                            <span class="fa fa-user form-control-icon"></span>
                            <input type="text" class="form-control" id="name" class="form-control" placeholder="Name"
                                required>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <span class="fa fa-envelope form-control-icon"></span>
                            <input type="text" id="email" class="form-control" placeholder="Email" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="age">Age</label>
                            <span class="fa fa-users form-control-icon"></span>
                            <input type="number" id="age" class="form-control" placeholder="Age" required>
                            <div class="invalid-feedback">Please enter a age</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12"><br>
                            <label for="age">Gender</label><br><br><br>
                            <input type="radio" name="gender" id="male" value="1"> Male
                            <input type="radio" name="gender" id="female" value="2"> Female

                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="mobile">Mobile</label>
                            <span class="fa fa-mobile-alt form-control-icon"></span>

                            <input type="text" id="mobile" name="mobile" class="form-control"
                                onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                pattern="[0-9]+" maxlength="10" minlength="10"
                                title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                                required>
                            <div class="invalid-feedback">Please enter a mobile no.</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="address">Your Address</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <input type="text" id="address" class="form-control" placeholder="Your Address" required>
                            <div class="invalid-feedback">Please enter address</div>
                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="city">Your City</label>
                            <span class="fas fa-city form-control-icon"></span>
                            <input type="text" id="city" class="form-control" placeholder="Enter Your City" required>
                            <div class="invalid-feedback">Please enter city</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12" id="SkinTreatment">
                            <label for="Treatmentforskin">Select Treatment</label>
                            <span class="fa fa-clock form-control-icon"></span>
                            <select id="SkinTreatments" class="form-control mb-1 select" required>
                                <option value="0">Select Treatment</option>
                                <option value="1"> Skin Problem</option>
                                <option value="2">Cosmetic Treatment</option>
                                <option value="3">Hair Problem</option>
                                <option value="4">Skin Biopsy</option>
                            </select>
                            <div class="invalid-feedback">Please select Treatment</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="location">Select Location</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <select id="hospitallocation" class="form-control mb-1 select" required>
                                <option value="">Select Location</option>
                                <option value="1">Auranagabad</option>
                            </select>
                            <div class="invalid-feedback">Please select Location</div>
                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="date">Select Date</label>
                            <span class="fa fa-calendar-edit form-control-icon"></span>
                            <input id="SkinDate" type="text" class="form-control" placeholder="Select Date" required />
                            <div class="invalid-feedback">Please enter a date</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="slot">Preferable Timing</label>
                            <span class="fa fa-clock form-control-icon"></span>
                            <select id="slot" class="form-control mb-1 select" required>
                                <option value="" selected="selected" disabled="disabled">Preferable Timing</option>
                                <option value="1">10:00am to 01:00pm</option>
                                <option value="2">03:00pm to 09:00pm</option>
                            </select>
                            <div class="invalid-feedback">Please Select Preferable Timing</div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="Message">Message</label>
                            <span class="fa fa-envelope-square form-control-icon"></span>
                            <input type="text" id="msg" class="form-control" placeholder="Message" required>
                            <div class="invalid-feedback">Please enter message</div>
                        </div>
                    </div>


                    <div class="slider-btn">
                        <button type="submit" class="btn ss-btn w-215" data-delay=".8s"
                            style="margin-left:150px !important; margin-bottom:10px !important;">Book Appointment <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> -->
<!-- skin appointment form -->

<!-- endovascular appointment form -->

<!-- <div class="modal fade" id="endovascularappointmrnt" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5">
                <form method="post" id="RegisterationForm" class="needs-validation" method="post" novalidate>
                    <div class="form-group text-center pb-2 mt34">
                        <h4>Book a Appointment</h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Name</label>
                            <span class="fa fa-user form-control-icon"></span>
                            <input type="text" class="form-control" id="name" class="form-control" placeholder="Name"
                                required>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <span class="fa fa-envelope form-control-icon"></span>
                            <input type="text" id="email" class="form-control" placeholder="Email" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="age">Age</label>
                            <span class="fa fa-users form-control-icon"></span>
                            <input type="number" id="age" class="form-control" placeholder="Age" required>
                            <div class="invalid-feedback">Please enter a age</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12"><br>
                            <label for="age">Gender</label><br><br><br>
                            <input type="radio" name="gender" id="male" value="1"> Male
                            <input type="radio" name="gender" id="female" value="2"> Female

                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="mobile">Mobile</label>
                            <span class="fa fa-mobile-alt form-control-icon"></span>

                            <input type="text" id="mobile" name="mobile" class="form-control"
                                onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                pattern="[0-9]+" maxlength="10" minlength="10"
                                title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                                required>
                            <div class="invalid-feedback">Please enter a mobile no.</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="city">Your City</label>
                            <span class="fas fa-city form-control-icon"></span>
                            <input type="text" id="city" class="form-control" placeholder="Enter Your City" required>
                            <div class="invalid-feedback">Please enter city</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="address">Your Address</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <input type="text" id="address" class="form-control" placeholder="Your Address" required>
                            <div class="invalid-feedback">Please enter address</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="location">Select Location</label>
                            <span class="fa fa-map-marker form-control-icon"></span>
                            <select id="endovascularlocation" class="form-control mb-1 select fetchmodallocation"
                                required>
                                <option value="">Select Location</option>
                                <option value="1">Auranagabad</option>
                                <option value="2">Majalgaon </option>
                                <option value="3">Nanded </option>
                            </select>
                            <div class="invalid-feedback">Please select Select Hospital Location</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 ">
                            <p id="abad" class="treatment fs-12 lh-16">
                                Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar, Garkheda, Aurangabad.
                            </p>
                            <p id="nanded" class="treatment fs-12 lh-16">
                                Narayan Superspeciality Hospital (Kabade Hospital Complex)
                                Near Mahavir Society, Shivaji Nagar, Nanded.
                            </p>
                            <p id="majalgoan" class="treatment fs-12 lh-16">
                                Jaju Hospital and Maternity Home, in front of the new bus stand,
                                Shivaji Nagar, Beed Road, Majalgon, Dist. Beed
                            </p>

                        </div>

                        <div class="form-group col-md-6 col-sm-12 fs-12"><br>
                            <label for="age">Disease/Treatment</label><br><br><br>
                            <input type="radio" id="Disease" name="abc" value="2"> Treatment
                            <input type="radio" id="Treatment" name="abc" value="1"> Disease
                        </div>
                        <div class="form-group col-md-6 col-sm-12 treatment" id="pqr">
                            <label for="Treatmentforendovascular">Select Treatment</label>
                            <span class="fa fa-clock form-control-icon"></span>
                            <select id="endovascularTreatment" class="form-control mb-1 select" required>
                                <option value="">Select Treatment</option>
                                <optgroup label="Leg Treatment">
                                    <option value="1">Varicose veins</option>
                                    <option value="2">Deep Vein Thrombosis (DVT)</option>
                                    <option value="3">Peripheral Artery Disease (PAD)</option>
                                    <option value="4">Diabetic Foot Ulcer</option>
                                    <option value="5">Gangrene</option>
                                    <option value="6">Knee Osteoarthritis (Knee Arthritis)</option>
                                    <option value="7">Plantar Fascitis</option>
                                    <option value="8">Osteoid Osteoma</option>
                                </optgroup>
                                <optgroup label="Lung Treatment">
                                    <option value="9">Pulmonary Embolism</option>
                                </optgroup>
                                <optgroup label="Men's Treatment">
                                    <option value="10">BPH (Benign Prostatic Hypertrophy)</option>
                                </optgroup>
                                <optgroup label="Women's Treatment">
                                    <option value="11">Uterus Fibroids</option>
                                    <option value="12">Adenomyosis</option>
                                    <option value="13">Post partal hemorrhage</option>
                                    <option value="14">Uterus AVM (Arterio-Venous Malformation)</option>
                                    <option value="15">Pelvic Congestion Syndrome</option>
                                    <option value="16">Placenta Accreta and Percreta</option>
                                </optgroup>
                            </select>
                            <div class="invalid-feedback">Please select Treatment</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 treatment" id="xyz">
                            <label for="Treatmentforendovascular">Select Disease</label>
                            <span class="fa fa-clock form-control-icon"></span>
                            <select id="endovascularTreatment" class="form-control mb-1 select" required>
                                <option value="">Select Disease</option>
                                <optgroup label="Leg Diseases">
                                    <option value="1">Varicose veins</option>
                                    <option value="2">Deep Vein Thrombosis (DVT)</option>
                                    <option value="3">Peripheral Artery Disease (PAD)</option>
                                    <option value="4">Diabetic Foot Ulcer</option>
                                    <option value="5">Gangrene</option>
                                    <option value="6">Knee Osteoarthritis (Knee Arthritis)</option>
                                    <option value="7">Plantar Fascitis</option>
                                    <option value="8">Osteoid Osteoma</option>
                                </optgroup>
                                <optgroup label="Lung Diseases">
                                    <option value="9">Pulmonary Embolism</option>
                                </optgroup>
                                <optgroup label="Men's Diseases">
                                    <option value="10">BPH (Benign Prostatic Hypertrophy)</option>
                                </optgroup>
                                <optgroup label="Women's Diseases">
                                    <option value="11">Uterus Fibroids</option>
                                    <option value="12">Adenomyosis</option>
                                    <option value="13">Post partal hemorrhage</option>
                                    <option value="14">Uterus AVM (Arterio-Venous Malformation)</option>
                                    <option value="15">Pelvic Congestion Syndrome</option>
                                    <option value="16">Placenta Accreta and Percreta</option>
                                </optgroup>
                            </select>
                            <div class="invalid-feedback">Please select Treatment</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12 treatment" id="fetchaurangabad">
                            <label for="date">Select Date</label>
                            <span class="fa fa-calendar-edit form-control-icon"></span>
                            <input id="endodate4" type="text" class="form-control" placeholder="Select Date" required />
                            <div class="invalid-feedback">Please Select Date</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12" id="fetchmajalgoan">
                            <label for="date">Select Date</label>
                            <span class="fa fa-calendar-edit form-control-icon"></span>
                            <input id="endodate5" type="text" class="form-control" placeholder="Select Date" required />
                            <div class="invalid-feedback">Please Select Date</div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12" id="fetchnanded">
                            <label for="date">Select Date</label>
                            <span class="fa fa-calendar-edit form-control-icon"></span>
                            <input id="endodate6" type="text" class="form-control" placeholder="Select Date" required />
                            <div class="invalid-feedback">Please Select Date</div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="slot">Preferable Timing</label>
                            <span class="fa fa-clock form-control-icon"></span>
                            <select id="slot" class="form-control mb-1 select" required>
                                <option value="" selected="selected" disabled="disabled">Preferable Timing
                                </option>
                                <option id="first" value="1">10:00am to 01:00pm</option>
                                <option id="second" value="2">03:00pm to 09:00pm</option>
                                <option id="third" value="1">10:00am to 05:00pm</option>
                                <option id="fourth" value="1">10:00am to 04:00pm</option>
                            </select>
                            <div class="invalid-feedback">Please Select Preferable Timing</div>
                        </div>


                        <div class="form-group col-md-12 col-sm-12">
                            <label for="Message">Message</label>
                            <span class="fa fa-envelope-square form-control-icon"></span>
                            <input type="text" id="msg" class="form-control" placeholder="Message" required>
                            <div class="invalid-feedback">Please enter message</div>
                        </div>
                    </div>

                    <div class="slider-btn">
                        <button type="submit" class="btn ss-btn" data-delay=".8s"
                            style="margin-left:150px !important; margin-bottom:10px !important;">Register Now <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- endovascular appointment form -->