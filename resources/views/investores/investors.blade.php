<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NFT Dubai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



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

  <!-- Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  
</head>

<body>



  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <form class="row g-3" method="post" action="{{ route('create.investor') }}">
                  @csrf
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Investor Registeration</h5>
                  <p style="font-size: small;">Please enter your own details here. Information entered here is not publicly displayed.</p>

                  <!-- Multi Columns Form -->
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Your Full Name</label>
                      <input type="text" class="form-control" placeholder="Enter your full name" name="name" id="inputName5">
                    </div>
                    <div class="col-md-12">
                      <label for="inputEmail5" class="form-label">Official Email</label>
                      <input type="email" name="email" placeholder="Enter your email address" class="form-control" id="inputEmail5">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Country</label>
                        <input type="number" name="country_code" class="form-control" id="inputPassword5">
                    </div>
                    <div class="col-md-9">
                        <label for="inputPassword5" class="form-label">Phone Number</label>
                        <input type="number" name="phone" placeholder="Enter your phone number" class="form-control" id="inputPassword5">
                    </div>
  
    
                </div>
              </div>
              
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Your Requirement</h5>
                        <p style="font-size: small;">Information entered here will be publicly displayed to match you with the right set of businesses. Fields specifically marked as 'Private' will not be publicly displayed.</p>
                  <!-- Multi Columns Form -->
                  <!-- <form> -->
                  
                    <div class="col-md-12">
                      <label for="inputName5" class="form-label">Your Intersted</label>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" name="interests[]" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Acquiring / Buying a Business
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" name="interests[]" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Investing in a Business
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" name="interests[]" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Lending to a Business
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" name="interests[]" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Buying Property / Plant / Machinery
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" name="interests[]" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Taking up a Franchise / Distributorship / Sales Agency
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-g-3">
                        <label for="inputState" class="form-label">You are a(n)</label>
                        <select id="inputState" class="form-select" name="investor_role">
                          <option selected>Choose...</option>
                          <option>Indiuvidual Investor / Buyer</option>
                          <option>Corporate Investor / Buyer</option>
                          <option>Bank</option>
                        </select>
                      </div>
                      <div class="col-g-3">
                        <label for="inputState" class="form-label">Select industries you are interested in</label>
                        <select id="inputState" class="form-select" name="industries">
                          <option selected>Choose...</option>
                          <option>Energy</option>
                          <option>Industerial</option>
                          <option>Finance</option>
                        </select>
                      </div>
                      <div class="col-g-3">
                        <label for="inputState" class="form-label">Select locations you are interested in</label>
                        <select id="inputState" class="form-select" name="interested_locations">
                          <option selected>Choose...</option>
                          <option>UAE</option>
                          <option>KSA</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                        
                      <label for="inputEmail5" class="form-label">Provide your investment range</label>
                      <div class="input-group mb-3">
                        <span class="input-group-text" >AED</span>
                        <input type="number" class="form-control" placeholder="Min Investment" name="investment_min">
                        <span class="input-group-text">To</span>
                        <input type="number" class="form-control" placeholder="Max Investment" name="investment_max">
                      </div>
                      
                    <div class="col-g-3">
                        <label for="inputState" class="form-label">Your current location</label>
                        <select id="inputState" class="form-select" name="location">
                          <option selected>Choose Only One</option>
                          <option>UAE</option>
                          <option>KSA</option>
                          <option>Qatar</option>
                        </select>
                      </div>
                      <br>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Company you work at</label>
                        <div class="col-sm-10">
                          <input type="text" name="company_name" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Your designation</label>
                        <div class="col-sm-10">
                          <input type="text" name="designation" placeholder="Enter your designation" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Your LinkedIn profile</label>
                        <div class="col-sm-10">
                          <input type="text" name="linkedin" placeholder="Enter your linkedin profile link" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Your company's sector</label>
                        <div class="col-sm-10">
                          <input type="text" name="company_sector" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Factors you look for in a business</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="factors" style="height: 100px"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">About yourself</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="company_description" style="height: 100px"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Attach proof of business for faster verification</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" name="business_proof_doc" id="formFile">
                        </div>
                      </div>
                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                        On a basic profile, you will be able to connect with 2 businesses for free. To connect with more select a plan below:
                      </div>
                      <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
                        For more introduction select plan
                      </div>
                      <div class="col-sm-10 offset-sm-1">
                        <div class="form-check">
                          <input class="form-check-input" name="current_plan_title[]" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                              Active Plan  <a href="">Know More</a> 
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-10 offset-sm-1">
                        <div class="form-check">
                          <input class="form-check-input" name="current_plan_title[]" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Premium Plan <a href="">Know More</a> 
                            <br>
                            <p>Speedy profile activation within 1 business day</p>
                            <p> Profile marked as 'Premium' and gets higher visibility</p>
                            <p>25 introduction credits to connect with businesses and franchises</p>
                            <p>Connect with businesses which send you a proposal for free</p>
                            <p> Access to metrics of all businesses to evaluate the opportunity</p>
                            <p>Connect and instantly access Business Name, if business has allowed</p>
                            <p>Connect and instantly access Contact Details, if business has allowed</p>
                            <p>Quick email support for your queries</p>
                            <p>Lifetime validity till introduction credits are exhausted</p>
                        </label>
                        </div>
                      </div>
                      <div class="col-sm-10 offset-sm-1">
                        <div class="form-check">
                          <input class="form-check-input" name="current_plan_title[]" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Yearly Plan  <a href="">Know More</a> 
                          </label>
                        </div>
                      </div>
                      <br>
                      <div class="col-sm-10 offset-sm-1">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1" style="font-size: small;">
                            I accept the   <a href=""> Terms of Engagement</a> 
                          </label>
                        </div>
                      </div>
                      <div class="row mb-3">
                        
                          <button type="submit" class="btn btn-primary">Submit</button>
                        
                      </div>
                  
    
                </div>
              </div>
          </form><!-- End Multi Columns Form -->
        </div>
      </div>
    </section>

  </main><!-- End #main -->


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