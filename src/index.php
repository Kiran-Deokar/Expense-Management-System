<?php include '../db/fetch_expense.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expense Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Kiran Deokar">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/main.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Expense</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li> 
        <li><a href="#expenses">EXPENSE</a></li>
        <li><a href="#Graphs">GRAPHS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li id="status"><a href="login.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Expense Management System</h1> 
  <p>Welcome <?php echo $user; ?> </p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container some">
  <div class="row" style="margin-top:90px;">
    <div class="col-sm-8 ">
      <h2>About  Website</h2><br>
      <p>Expense management software aligns with the User's expense management policy to ensure the expense doesn't overspend on approved (or unapproved) expenses. An expense management system also provides analytical tools that help the user make better decisions about future spending and inform any necessary adjustments to its policy.</p>
      <br><a href="#contact"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>


<!-- Container (Services Section) -->
<div id="expenses" class="container text-center">
  <h2 style="margin-top:90px;">EXPENSES</h2>
  <h4>Add Daily Expense</h4>
  <!-- Horizontal material form -->
  <form method="post">
   <!-- Grid row -->
   <div class="form-group row">
     <!-- Material input -->
     <label for="inputEmail3MD" class="col-sm-2 col-form-label">Rent</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="rent" class="form-control" value=0 id="inputEmail3MD" placeholder="Rent Amount">
       </div>
     </div>

     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Groceries</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="groceries" class="form-control" value=0 id="inputPassword3MD" placeholder="Groceries Amount">
       </div>
     </div>
   </div>
    <!-- Grid row -->
    <!-- Grid row -->
    <div class="form-group row">
     <!-- Material input -->
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Education</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="education" class="form-control" value=0 id="inputPassword3MD" placeholder="education Amount">
       </div>
     </div>

     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Electricity</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="electricity" class="form-control" value=0  id="inputPassword3MD" placeholder="electricity Amount">
       </div>
     </div>
   </div>
   <!-- Grid row -->
   <!-- Grid row -->
   <div class="form-group row">
     <!-- Material input -->
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Clothes</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="clothes" class="form-control" value=0  id="inputPassword3MD" placeholder="Clothes Amount">
       </div>
     </div>

     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Personal </label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="personal" class="form-control" value=0  id="inputPassword3MD" placeholder="Personal Amount">
       </div>
     </div>
   </div>
   <!-- Grid row -->
   <!-- Grid row -->
   <div class="form-group row">
     <!-- Material input -->
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Gas/Oil</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="gas" class="form-control" value=0 id="inputPassword3MD" placeholder="Gas/oil Amount">
       </div>
     </div>
  
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Medical</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="medical" class="form-control" value=0  id="inputPassword3MD" placeholder="Medical Amount">
       </div>
     </div>
   </div>
   <!-- Grid row -->
   <!-- Grid row -->
   <div class="form-group row">
     <!-- Material input -->
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Insurance</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="insurance" class="form-control" value=0  id="inputPassword3MD" placeholder="Insurance Amount">
       </div>
     </div>

     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Transport</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="transport" class="form-control" value=0  id="inputPassword3MD" placeholder="Transport Amount">
       </div>
     </div>
   </div>
   <!-- Grid row -->
   <!-- Grid row -->
   <div class="form-group row">
     <!-- Material input -->
     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Total Expense</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="income" class="form-control" value="<?php echo $total; ?>" id="inputPassword3MD" placeholder="Income Amount" disabled>
       </div>
     </div>

     <label for="inputPassword3MD" class="col-sm-2 col-form-label">Income</label>
     <div class="col-sm-4">
       <div class="md-form mt-0">
         <input type="number" name="income" class="form-control" value=0 id="inputPassword3MD" placeholder="Income Amount">
       </div>
     </div>
   </div>
   <!-- Grid row -->
   <!-- Grid row -->
   <div class="form-group row ">
     <div class="col-sm-12">
       <input type="submit" class="btn btn-primary " value="Update" name="submit">
       <button><a href="pdf.php">Download pdf</a></button>
      </div>
   </div>
   <!-- Grid row -->
  </form>
  <!-- Horizontal material form -->
</div>

<!-- Container (Portfolio Section) -->
<div id="Graphs" class="container text-center bg-grey">
<canvas id="myChart" style="max-width:700px; margin:90px auto"></canvas>

<script>
var xValues = ["RENT", "GROCERIES", "EDUCATION", "ELECTRICITY", "CLOTHES","PERSONAL","GAS","MEDICAL","INSURANCE","TRANSPORT"];
var yValues = [<?php echo $rent;?>, <?php echo $groceries;?>, <?php echo $education;?>, <?php echo $electricity;?>, <?php echo $clothes;?>,<?php echo $personal;?>,<?php echo $gas;?>,<?php echo $medical;?>,<?php echo $insurance;?>,<?php echo $transport;?>];
var barColors = ["red", "green","blue","orange","brown","red","green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "EXPENSE DATA"
    }
  }
});
</script>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chhatrapati Sambhajinagar , IN</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8668964057</p>
      <p><span class="glyphicon glyphicon-envelope"></span> deokarkiran.it@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container text-center">
<!-- Image of location/map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.094272578636!2d75.32825040639517!3d19.874258895356157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb986e29bdf813%3A0xfe9f37ce9c858a80!2sKranti%20Chowk%2C%20Aurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1679816780322!5m2!1sen!2sin"  style="border:0;width:100%;height:30vh" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made By Kiran Deokar</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage'], .some a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

if('<?php echo $user; ?>' !='Guest'){
    document.getElementById("status").innerHTML="<a href='logout.php'>LOGOUT</a>";
}
</script>

<?php include '../db/update.php' ?>

</body>
</html>
