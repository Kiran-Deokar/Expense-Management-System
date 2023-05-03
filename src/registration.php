<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Kiran Deokar">
  <title>Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4" action="../db/reg.php" name="myform" method="post" onsubmit="return validateform()">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" class="form-control" name="name"  required/>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control"  name="email" required/>
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" class="form-control" name="password" required/>
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0"> 
                        <input type="password" id="form3Example4cd" class="form-control" name="cpass" required/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required/>
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!"  data-bs-toggle="modal" data-bs-target="#exampleModal">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                      <input type="submit" class="btn btn-primary btn-lg" >
                    </div>

                  </form>
                  <div class="d-flex justify-content-center mb-5">
                      <label class="form-check-label" for="form2Example3">
                        Already Registered <a href='login.php' >Sign in</a>
                      </label>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="../img/reg_image.webp"
                    class="img-fluid" alt="reg image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- form valitation section -->
  <script>
    function validateform(){ 
      let name=document.myform.name.value;  
      let email=document.myform.email.value;  
      let password=document.myform.password.value;  
      let cpass=document.myform.cpass.value;  
    
      if(password.length<8){  
        alert("Password must be at least 6 characters long.");  
        return false;  
        }else if(password!=cpass){  
        alert("Password and repeated password must be same");  
        return false;  
      }  
    } 
  </script>
  <!-- Terms and condition section -->
  <div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Terms and Condition</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Welcome to Expense!</p>
              <p>These terms and conditions outline the rules and regulations for the use of expense management system's Website, located at http://localhost/project/expense/main.php.</p>
              <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Expense if you do not agree to take all of the terms and conditions stated on this page.</p>
              <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of in. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
              <h3><strong>Cookies</strong></h3>
              <p>We employ the use of cookies. By accessing Expense, you agreed to use cookies in agreement with the expense management system's Privacy Policy. </p>
              <p>Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
              <h3><strong>License</strong></h3>
              <p>Unless otherwise stated, expense management system and/or its licensors own the intellectual property rights for all material on Expense. All intellectual property rights are reserved. You may access this from Expense for your own personal use subjected to restrictions set in these terms and conditions.</p>
              <p>You must not:</p>
              <ul>
                  <li>Republish material from Expense</li>
                  <li>Sell, rent or sub-license material from Expense</li>
                  <li>Reproduce, duplicate or copy material from Expense</li>
                  <li>Redistribute content from Expense</li>
              </ul>
              <p>You hereby grant expense management system a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
              <h3><strong>Disclaimer</strong></h3>
              <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
              <ul>
                  <li>limit or exclude our or your liability for death or personal injury;</li>
                  <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                  <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                  <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
              </ul>
              <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
              <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
            </div>

          </div>
        </div>
      </div>
  </div>
  <!-- modal button script -->
  <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
  </script>

</body>
</html>
