<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register Your Franchise / Distributorship Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Register Your Franchise / Distributorship Profile</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Confidential Information</h5>
              <form method="POST" action="{{ route('franchise.store')}}">
              
              @csrf

          <div class="form-group">
                <div class="col-md-6">
                  <label for="name" class="form-label">Authorized Person Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <!-- <input hidden="hidden"   name="user_id" id="user_id" value="1" type="text"> -->




        
 
 
                <div class="col-md-6">
                    <label for="email" class="form-label">Enter official email for quick verification</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>

                <div class="col-md-6">
                    <label for="phone " class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" id="phone " name="phone "> 
                </div>
                <div class="col-md-6">
                  <label for="designation" class="form-label">Your Designation</label>
                  <input type="text" class="form-control" id="designation" name="designation">
                </div>
            
                
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brand Details</h5>

            
              <div class="row g-3">
                <div class="col-md-12">
                  <label for="brand_name " class="form-label">Brand Name</label>
                  <input type="text" class="form-control" id="brand_name" name="brand_name">
                </div>

                <div class="col-md-12">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control" id="website" name="website">
                  </div>

                  <fieldset class="row mb-6">
                    <legend class="col-form-label col-sm-2 pt-0">I am offering</legend>

                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="franchise_opportunity" id="franchise_opportunity" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Franchise Opportunity
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="dealership_opportunity" id="dealership_opportunity" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Dealership Opportunity
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="reseller_opportunity" id="reseller_opportunity" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Reseller Opportunity
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="distributor_opportunity" id="distributor_opportunity" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Distributor Opportunity
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sales_partner_pportunity " id="sales_partner_pportunity" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Sales Partner Opportunity   
                        </label>
                      </div>
                    </div>
                  </fieldset>

                <div class="col-md-12">
                    <label for="industry " class="form-label">Select your Industry</label>
                    <input type="number" class="form-control" id="industry " name="industry "> 
                </div>
                <div class="col-md-12">
                  <label for="brand_description " class="form-label">About Your Brand</label>
                  <textarea class="form-control" placeholder="Please explain about your company, brand, promoters, business model, average foot fall per outlet, competitive differentiation and why an investor should take up your Brand's franchise / distribution" id="brand_description " style="height: 100px;" name="brand_description "></textarea>
                </div>

                <div class="col-md-12">
                    <label for="all_products_services" class="form-label">Mention all products/services your brand provides</label>
                    <textarea class="form-control" placeholder="" id="all_products_services" style="height: 100px;"></textarea>
                  </div>
            

                  <div class="col-md-4">
                    <label for="brand_start_year" class="form-label">When did your brand start operations?</label>
                    <input type="date" class="form-control" name="brand_start_year">
                  </div>

                  <div class="col-md-4">
                    <label for="brand_location" class="form-label">Where is your brand's headquarters located?</label>
                    <input type="text" class="form-control" id="brand_location  " name="brand_location ">
                  </div>

                  <div class="col-md-4">
                    <label for="brand_start_year " class="form-label">When did your brand start operations?</label>
                    <input type="text" class="form-control" id="brand_start_year " name="brand_start_year">
                  </div>

                  <div class="col-md-6">
                    <label for="existing_outlets_count" class="form-label">How many outlets do you already have globally?</label>
                    <input type="number" class="form-control" id="existing_outlets_count" name="existing_outlets_count" placeholder="Include company operated outlets as well">
                  </div>

                  <div class="col-md-12">
                    <label for="expectation " class="form-label">What is your expectation from the user who takes up this opportunity</label>
                    <textarea class="form-control" placeholder="Roles and Responsibilities" id="expectation " style="height: 100px;" name="expectation "></textarea>
                  </div>

                  <div class="col-md-12">
                    <label for="expectation " class="form-label">What kind of support can the franchisee expect from you?</label>
                    <textarea class="form-control"  id="support " style="height: 100px;" name="support "></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="procedure " class="form-label">What is the procedure to obtain your Franchise?</label>
                    <textarea class="form-control" placeholder="Roles and Responsibilities" id="procedure " style="height: 100px;" name="procedure "></textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="expand_location " class="form-label">Mention cities/states/countries you want to expand in</label>
                    <input type="text" class="form-control" id="expand_location " name="expand_location">
                  </div>

                  <div class="col-md-6">
                    <label for="brand_start_year " class="form-label">How many Franchise Formats do you provide?</label>
                    <input type="text" class="form-control" id="brand_start_year " name="brand_start_year">
                  </div>
                  
                  <hr/>

                  <h5 class="card-title">Format 1</h5>
                  <div class="col-md-12">
                    <label for="name " class="form-label">Format Name</label>
                    <input type="name" class="form-control" id="format_name " name="format_name "> 
                </div>

            
                <label for="inputEmail5" class="form-label">Space Required</label>
                <div class="input-group mb-3">
                  <input type="number" class="form-control" placeholder="Min Squre ft" name="min_required_space ">
                  <span class="input-group-text">To</span>
                  <input type="number" class="form-control" placeholder="Max Squre ft" name="max_required_space ">
                </div>

                <label for="inputEmail5" class="form-label">Total Investment Needed</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" >AED</span>
                        <input type="number" class="form-control" placeholder="Min Investment" name="min_investment">
                        <span class="input-group-text">To</span>
                        <input type="number" class="form-control" placeholder="Max Investment" name="max_investment">
                      </div>

                <div class="col-md-6">
                    <label for="brand_fee" class="form-label">What is the brand fee included in this investment?</label>

                    <div class="input-group col-md-6">           
                        <span class="input-group-text">AED</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="barand_fee">
                        <span class="input-group-text">.00</span>
                      </div>
                </div>


                <div class="col-md-6">
                    <label for="staff_number" class="form-label">Average number of staff required</label>
                    <input type="number" class="form-control" id="staff_number" name="staff_number"> 
                </div>

                <div class="col-md-6">
                    <label for="charged_royality " class="form-label">Mention details of Royalty charged or Commission paid</label>
                    <input type="number" class="form-control" id="charged_royality " name="charged_royality"> 
                </div>

                <div class="col-md-6">
                    <label for="brand_fee" class="form-label">Average Monthly Sales per franchisee</label>

                    <div class="input-group col-md-6">           
                        <span class="input-group-text">AED</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="brand_fee">
                        <span class="input-group-text">.00</span>
                      </div>
                </div>

                <div class="col-md-12">
                    <label for="profit_margin   " class="form-label">Average EBITDA / Operating Profit Margin of the franchise</label>
                    <input type="number" class="form-control" id="profit_margin " name="profit_margin "> 
                </div>
                
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Add Brand Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo">
                </div>
                
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Add Photos of your Facility / Stores</label>
                    <input class="form-control" type="file" id="photos">
                </div>
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Add Brochures & Documents</label>
                    <input class="form-control" type="file" id="brochures_documents">
                </div>
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Attach Proof of Business</label>
                    <input class="form-control" type="file" id="proof" name="proof">
                </div>
                
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                  On a basic profile, you will be able to connect with 2 businesses for free. To connect with more select a plan below:
                </div>

                <div class="col-sm-10 offset-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Active Business  <a href="">Know More</a> 
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-10 offset-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Premium Plan <a href="">Know More</a> 
                        <br>
                        <p>Speedy profile activation within 1 business day</p>
                        <p>Profile marked as 'Premium' and gets higher visibility</p>
                        <p>You can send up to 50 business proposals to investors and buyers</p>
                        <p>Quick email support for your queries</p>
                        <p>Plan valid for 1 year or deal closure, whichever is earlier</p>
                    </label>
                    </div>
                  </div>


                  <div class="col-sm-10 offset-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Fast Track Business  <a href="">Know More</a> 
                      </label>
                      <br>
                        <p>Speedy profile activation within 1 business day</p>
                        <p>Profile marked as 'Premium' and gets higher visibility</p>
                        <p>SMERGERS promotes your profile actively in regular investor newsletters</p>
                        <p>You can send up to 80 business proposals to investors and buyers</p>
                        <p> SMERGERS sends your business proposal to top 20 active investors and buyers in your sector</p>
                        <p>Option to send NDA to maintain confidentiality</p>
                        <p>Quick email support for your queries</p>
                        <p>Plan valid for 1 year or deal closure, whichever is earlier</p>
                    </div>
                  </div> 

                  <div class="col-sm-10 offset-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Professional Business <a href="">Know More</a> 
                      </label>
                      <br>
                        <p>Speedy profile activation within 1 business day</p>
                        <p>Profile marked as 'Premium Plan' and gets higher visibility</p>
                        <p>SMERGERS promotes your profile actively in regular investor newsletters</p>
                        <p>SMERGERS sends your business proposal to top 50 active investors and buyers in your sector</p>
                        <p>Option to send NDA to maintain confidentiality</p>
                        <p>Up to 3,000 exclusive emails sent to registered members to promote your profile</p>
                        <p> SMERGERS prepares a Financial Projection and Business Valuation model for your business</p>
                        <p>Plan valid for 1 year or deal closure, whichever is earlier</p>
                        <p>Account Manager who will be a single point of contact to manage your profile</p>
                        <p>Quick phone and email support for your queries</p>
                        <p> Plan valid for 1 year or deal closure, whichever is earlier</p>
                    </div>
                  </div>

                  <div class="col-sm-10 offset-sm-1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        I accept 1% finder's fee (payable post transaction) and other terms of engagement <a href="">Know More</a> 
                      </label>
<<<<<<< HEAD:resources/views/franchise.blade.php
                  </div>
                  <div class="row mb-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
=======
                  </div> -->

                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
>>>>>>> 2e42f4623a74cb2bccfda4afafd70342016371d7:resources/views/franchises/create.blade.php
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NFT Dubai</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by 
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
 <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('vendor/chart.js/chart.min.js')}}"></script>
 <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
 <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
 <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>
 <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
 <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('js/main.js')}}"></script>

</body>

</html>