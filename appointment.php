<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include("../includes/headerhead.php") ;
      ?>
      
 <?php 
    define("xxyy", TRUE);
  ?>
  </head>
  <body>
    <?php include("../includes/headerbody.php");
      ?>
    <!-- start of nav -->

    <!-- END nav -->

 
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Appointment</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 py-5 pr-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              <span class="subheading">Consultation</span>
              <h2 class="mb-4">Get Details Of Hospitals</h2>
              <p>We Provide Consultation And Surgery Fee Details Of All Hospitals In Bahrain.</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Select Your Services</option>
                        <option value="">Surgery</option>
                        <option value="">Neurology</option>
                        <option value="">Cardiology</option>
                        <option value="">Dental</option>
                        <option value="">Ophthalmology</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone(with country code)">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Get Details" class="btn btn-secondary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 p-5 bg-counter aside-stretch">
            <h3 class="vr">About Surgery In Bahrain Facts</h3>
            <div class="row pt-4 mt-1">
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" data-number="10">0</strong>
                    <span>Years of Experienced</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" data-number="500">0</strong>
                    <span>Happy Patients</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>
                    <span>Number of Doctors</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 p-5 bg-light">
                  <div class="text">
                    <strong class="number" data-number="10">0</strong>
                    <span>Number of Hospitals</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="no-padding">

    </div>

      <!--footer section start from here-->
  <?php include("../includes/footer.php");
      ?>
  </body>
  </html>