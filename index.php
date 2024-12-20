<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Display content if authenticated
$username = $_SESSION['username'];


?>

<script>
    window.onload = function () {
        if (performance.navigation.type === 2) { // Detects "Back" navigation
            location.reload(); // Forces reload from server
        }
    };
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="function.js" type="text/javascript"></script>
  <link rel="stylesheet" href="Design.css">
</head>

<body>
  
<nav class="flex">
    <h1 class="medium logo">EXPLORE<em>JAPAN</em>.</h1>
    <ul class="nav_links flex">
        <li><a href="#" class="active"><b>Home</b><iconify-icon icon="material-symbols:home-outline"></iconify-icon></a></li>
        <li><a href="#reviews"><b>Manage Reviews</b><iconify-icon icon="tdesign:call-1"></iconify-icon></a></li>
        <li><a href="#service"><b>Manage Services</b><iconify-icon icon="mdi:about-circle-outline"></iconify-icon></a></li>
        <li><a href="logout.php"><b>Logout</b></a></li>
    </ul>
</nav>

  <div id="banner" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center text-white">
          <h1>JAPAN'S SCENERY</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, amet veniam, magni debitis quidem,
            excepturi harum illum at nulla veritatis aspernatur mollitia quod provident ullam est? Quae dignissimos
            delectus, voluptas iste fuga eligendi facere saepe corrupti similique eveniet vitae sunt vero, et sit
            consectetur. Omnis autem mollitia consequatur! Ipsa, accusantium?
          </p>

          <a href="" class="btn btn-brand">Click Me Please</a>
        </div>
      </div>
    </div>
  </div>

  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="scene.jpg" alt="">
        </div>
        <div class="col-lg-6 text-center">
          <h2> ABOUT US</h2>
          <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, in.</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis consequatur exercitationem inventore
            recusandae earum corrupti accusantium quos pariatur. Officiis illo ducimus rerum odit obcaecati,
            necessitatibus eveniet maiores sunt veniam voluptatibus libero? Eum minima corporis aperiam rem quas nobis
            nisi obcaecati ex inventore? Similique illo dolorum officia molestias dolore eius. Vel numquam fuga aperiam
            praesentium debitis sint atque quod nulla fugiat?
          </p>
          <a href="" class="btn btn-brand">Click Me Please</a>
        </div>
      </div>
    </div>
  </section>

  <section id="service">
    <div class="container">
      <div class="text-center text-black">
        <h3>SERVICES</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolorem optio nihil beatae veritatis
          nesciunt.</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card p-3 text-center" style="width: 22rem;">
            <img src="aw.jpg" class="card-img-top uwu mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Card title</h5>
              <p class="card-text">Some quick example to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card p-3 text-center" style="width: 22rem;">
            <img src="lol.jpg" class="card-img-top uwu mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Card title</h5>
              <p class="card-text">Some quick example to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card p-3 text-center" style="width: 22rem;">
            <img src="rish.jpg" class="card-img-top uwu mx-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Card title</h5>
              <p class="card-text">Some quick example to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-brand">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- CALL TO ACTION -->
  <div id="cta" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center text-white">
          <h1>Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima quaerat, expedita nihil placeat rem soluta
            ea doloremque pariatur aut sed.</p>

          <a href="" class="btn btn-brand">Click Me Please</a>
        </div>
      </div>
    </div>
  </div>

  <!-- REVIEWS -->
  <section id="reviews">
    <div class="container">
      <div class="text-center">
        <h2>REVIEWS</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
      </div>
      <!-- Reviews Items -->
      <div class="row">
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="kkk.jpg" alt="">
              <div class="">
                <h3>clientname</h3>
                <a href="">@client</a>
              </div>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq">
    <div class="container">
      <div class="faq-section">
        <h2>FREQUENTLY ASKED QUESTION</h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="footer text-white" id="footer">
    <div class="container">
      <div class="row al">
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <a class="navbar-brand" href="#">
            <img src="" alt="Logo" height="60px">
          </a>
          <h5 class="mt-4"> About us</h5>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, omnis.</p>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center">
          <h5> Services </h5>
          <ul class="list-unstyled">
            <li><a href="#">Services 1</a></li>
            <li><a href="#">Services 2</a></li>
            <li><a href="#">Services 2</a></li>
            <li><a href="#">Services 2</a></li>
            <li><a href="#">Services 2</a></li>

          </ul>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <h5>Contact Us</h5>
          <p>123 Street name, <br> City, Country</p>
          <p>Email: example@example.com <br> Phone: +234567890</p>
        </div>
        <div class="col-md-3 col-sm-6 text-lg-start text-center">
          <h5> Newsletter</h5>
          <form>
            <div class="input-group mb-3">
              <input type="text" class="form-control" style="border-radius: 1px;" placeholder="Email" aria-label="email"
                aria-descrobedly="button-addon2">
              <button class="btn btn-outline-light" type="button" id="button-addon2">Subcribe</button>
            </div>
          </form>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, esse.</p>
        </div>
      </div>
    </div>

  </footer>
</body>

</html>