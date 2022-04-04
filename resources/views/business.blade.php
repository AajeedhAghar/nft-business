<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Business Profile</title>
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
      <h1>Register Business Profile</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Name</h5>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Authorized Person Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="col-md-6">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                  </div>

                <div class="col-md-6">
                    <label for="phone_number " class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" id="phone_number " name="phone_number "> 
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Enter official email for quick verification</label>
                  <input type="text" class="form-control" id="designation" name="email">
                </div>
            
                
              </form>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Business Information</h5>
              <form class="row g-3">

                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label">You are a(n)</label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option value="1">Business Owner/ Director</option>
                      <option value="2">Management Member</option>
                      <option value="3">Advisor/ Business Broker</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label">You are interested in</label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option value="1">Full sale of business</option>
                      <option value="2">Partial stake sale of business/invest</option>
                      <option value="3">Loan for business</option>
                      <option value="3">Selling or Leasing out Business Assets</option>
                    </select>
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="industry " class="form-label">When was the business established?</label>
                  <input type="date" class="form-control" id="industry " name="industry "> 
              </div>

            
                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label">Select business' industry</label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option value="1">Energey</option>
                      <option value="2">Industrial</option>
                      <option value="3">Finance</option>
                      <option value="3">Healthcare</option>
                      <option value="1">Technology</option>
                      <option value="2">Building, Construction Maintenance</option>
                      <option value="3">Food & Beverage</option>
                      <option value="3">Retail Shops</option>
                      <option value="1">Education </option>
                      <option value="2">Logistics</option>
                      <option value="3">Media </option>
                      <option value="3">Travel & Leisure</option>
                      <option value="1">Business Services </option>
                      <option value="2">Electronic Equipment</option>
                      <option value="3">Coal </option>
                      <option value="3">Integrated oil and Gas</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="industry " class="form-label">Where is the business located / headquartered?</label>
                  <input type="text" class="form-control" id="industry " name="industry "> 
              </div>


            <div class="col-md-12">
              <label for="industry " class="form-label">How many permanent employees does the business have?</label>
              <input type="number" class="form-control" id="industry " name="industry "> 
          </div>

          <div class="row mb-3">
            <label class="col-sm-12 col-form-label">Select business legal entity type</label>
            <div class="col-sm-12">
              <select class="form-select" aria-label="Default select example">
                <option value="1">Sole Proprirtorship/ Sole Trader</option>
                <option value="2">General Partnership</option>
                <option value="3">Limited Liability Partnership(LLP)</option>
                <option value="3">Limited Liability Company(LLC)</option>
                <option value="1">Private Limited Company</option>
                <option value="2">Public Limited Company</option>
                <option value="3">S Corporation </option>
                <option value="3">C Corporation </option>
                <option value="1">Other</option>
            </div>
          </div>
            
                <div class="col-md-12">
                  <label for="business_description " class="form-label">Describe the business in a single line</label>
                  <textarea class="form-control" name="business_description "></textarea>
                </div>

                <div class="col-md-12">
                    <label for="all_products_services" class="form-label">Mention highlights of the business including number of clients, growth rate, promoter experience, business relationships, awards, etc</label>
                    <textarea class="form-control" placeholder="" id="all_products_services" style="height: 100px;"></textarea>
                  </div>
                  <div class="col-md-12">
                    <label for="all_products_services" class="form-label">List all products and services of the business</label>
                    <textarea class="form-control" placeholder="" id="all_products_services" style="height: 100px;"></textarea>
                  </div>
                  
                  <div class="col-md-12">
                    <label for="all_products_services" class="form-label">Describe your facility such as built-up area, number of floors, rental/lease details</label>
                    <textarea class="form-control" placeholder="" id="all_products_services" style="height: 100px;"></textarea>
                  </div>

                  <div class="col-md-6">
                    <label for="brand_fee" class="form-label">At present, what is your average monthly sales?</label>

                    <div class="input-group col-md-6">           
                        <span class="input-group-text">AED</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="barand_fee">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="brand_fee" class="form-label">What was your latest reported yearly sales?</label>
  
                      <div class="input-group col-md-6">           
                          <span class="input-group-text">AED</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="barand_fee">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <label for="industry " class="form-label">What is the EBITDA / Operating Profit Margin Percentage?</label>
                        <input type="number" class="form-control" id="industry " name="industry "> 
                    </div>

                    <div class="col-md-12">
                      <label for="all_products_services" class="form-label">List all tangible and intangible assets the business owns</label>
                      <textarea class="form-control" placeholder="" id="all_products_services" style="height: 100px;"></textarea>
                    </div>
                  

                    <div class="col-md-6">
                      <label for="brand_fee" class="form-label">What is the value of physical assets owned by the business?</label>
  
                      <div class="input-group col-md-6">           
                          <span class="input-group-text">AED</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="barand_fee">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>

                <hr>
                
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Add business and product photos </label>
                    <input class="form-control" type="file" id="photos" name="photos">
                </div>
                
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Add business documents</label>
                    <input class="form-control" type="file" id="documents" name="documents">
                </div>
                <div class="col-sm-6">
                    <label for="profit_margin   " class="form-label">Attach proof of business for faster</label>
                    <input class="form-control" type="file" id="proof">
                </div>

                <div class="col-sm-10 offset-sm-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      I’m interested in receiving quotations from Advisors / Boutique Investment Banks who can manage this transaction. </a> 
                    </label>
                    <p>Speedy profile activation within 1 business day</p>
                    <p>Profile marked as 'Premium Plan' and gets higher visibility</p>
                    <p>You can send up to 50 business proposals to investors and buyers</p>
                    <p>Quick email support for your queries</p>
                    <p>Plan valid for 1 year or deal closure, whichever is earlier</p>
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
                        I accept 1% finder's fee (payable post transaction) and othe <a href="">terms of engagement </a> 
                      </label>
                  </div>



                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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