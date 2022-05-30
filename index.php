<!DOCTYPE html>
<html>
<head>
    <title>CovidSupport-HOME</title>
    <?php include 'links/links.php'; ?>
</head>

<body>

<!--Navigation bar-->
<?php include 'links/navbar.php';?>


<!--Carousel creation-->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/CoronaImg.jpg" alt="Corona" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Corona Virus</h3>
        <p>An unexpected pandemic situation!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/security.jpg" alt="prevention" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Mask & Sanitizer are must</h3>
        <p>Be protective, stay safe!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/covidtest.jpg" alt="test" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Covid test</h3>
        <p>Get tested if you have symptoms</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/Vaccine.jpg" alt="vaccination" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Get Vaccinated</h3>
        <p>Stay far away from Corona</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/stayhome.jpg" alt="stayhome" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Stay Home!! Stay Safe !!Save Lives!!</h3>
        <p>Social distancing not only saves you, but also the world around you</p>
    </div> 
    </div>
    <div class="carousel-item">
      <img src="images/knowmore.png" alt="knowmore" width="1100" height="300">
      <div class="carousel-caption">
        <h3>We are here to SAY</h3>
        <p>Develop your awareness on the current situation with US. we are in it TOGETHER</p>
      </div>   
    </div>  
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">

<!--Heading-->
<section class="my-3">
  <div class="text-center">
     <h5>Worrying about pandemic? Don't know much about it?</h5>
     <h2>We are here to help you!!</h2>
  </div>
</section>

<!--Section 1-->

<section class="my-5">
  <div class="py-3" >
     <h3 class="text-center font-weight-bold">About COVID-19</h3>
  </div>
 <div class="container-fluid">
  <div class="row">
      <div class="col-lg-6  col-md-6  col-12">
            <img src="images/Covid19About.jpg" alt="about" class="img-fluid " width="100%" height="100%">
      </div>
      <div class="col-lg-6  col-md-6  col-12">
            <h2 class="py-3">What is  Covid-19? How does this start?</h2>
            <p class="py-5">Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2).
             The first known case was identified in Wuhan, China in December 2019.
             The disease has since spread worldwide, leading to an ongoing pandemic.
             </p>
             <a href="about.php" class="btn btn-dark"> Check More </a>
      </div>
  </div>
</section>

<section class="my-5">
  <div claass="py-5" >
     <h3 class="text-center font-weight-bold">Symptoms</h3>
  </div>
 <div class="container-fluid">
  <div class="row">
      <div class="col-lg-6  col-md-6  col-12">
            <img src="images/Symptoms.png" alt="about" class="img-fluid" width="100%" height="100%">
      </div>
      <div class="col-lg-6  col-md-6  col-12">
            <h2 class="py-2">How do we know,if corona virus is in our body?</h2>
            <p class="py-5">COVID-19 affects different people in different ways. 
            Most infected people will develop mild to moderate illness and recover without hospitalization.
            The most common symptoms are very similar to other viruses like
             fever,cold, difficulty in breathing.Know more about symptoms of covid.
             </p>
             <a href="Symptoms.php" class="btn btn-dark"> Check More </a>
      </div>
  </div>
</section>

<!-- cards-->

<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">Other information</h2>
  </div>

  <div class="container-fluid">
    <div class="row">


      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card" >
          <img class="card-img-top image-responsive"  style="height:40vh" src="images/Security.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Precautions </h4>
            <p class="card-text">The Covid is a contagious disease spreading through different means.How do we stay safe from it,
            what are the precautions shoulf=d we take?</p>
            <a href="precautions.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card">
          <img class="card-img-top image-responsive" style="height:40vh" src="images/vaccine2.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Vaccination</h4>
            <p class="card-text">Vaccination is a very helpful way of getting rid of virus attacks
            .Get Valuable information about COVID vaccine and how it works, what are its types</p>
            <a href="vaccination.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card" >
          <img class="card-img-top image-responsive"  style="height:40vh" src="images/Statistics.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Updates </h4>
            <p class="card-text">Get daily updates on Cases ,recovery,deaths around you.
            See daily updates of corona cases world wide and in INDIA and in your state.
            Know whats going on around you.</p>
            <a href="Updates.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">Support we offer</h2>
  </div>

  <div class="container-fluid">
    <div class="row">


      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card" >
          <img class="card-img-top image-responsive"  style="height:40vh" src="images/Mentalhealth.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Mental health support </h4>
            <p class="card-text">You are not in this alone. We are all together.
            Reach out to us if you need help.Talk to us.Contact us.</p>
            <a href="pfa.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card">
          <img class="card-img-top image-responsive" style="height:40vh"  src="images/Donation.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Donate to the needy</h4>
            <p class="card-text">If you are blessed enough to change a life, to help someone. We are to deliver your help to the needy .</p>
            <a href="financialsupport.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12 py-2">
        <div class="card" >
          <img class="card-img-top image-responsive"  style="height:40vh" src="images/ContactUs.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Contact us </h4>
            <p class="card-text">Reach us if you need any kind of support, 
            and if you want to clear your queries regarding this situation</p>
            <a href="contact.php" class="btn btn-dark">Check here</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</div>

<!--Footer-->

<footer >
  <div class="p-3 bg-dark text-white text-center">
  <p>COVID SUPPORT</p>
  <p>We are here to help you!!</p>
</div>
</footer>

</body>

</html>
