<?php
  session_start();
  if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    session_write_close();
  } else {
    echo "<script>alert('Please Login!')</script>";
    session_unset();
    session_write_close();
    $url = "./";
    // header("Location: $url");
  }
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NaukriDekho - A Job Portal for Daily wages workers</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />

    <!-- Font Styles -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script> -->

    <!-- Styles.css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="super-container">
      <div class="in-super-container">
        <div class="container">
          <div class="header">
            <!-- Navbar -->
            <nav
              class="
                mb-1
                navbar navbar-expand-lg navbar-dark
                orange
                lighten-1
                sticky-top
                justify-content-between
              "
            >
              <div class="container-fluid">
                <a class="navbar-brand nav-flex-icons" href="#">
                  <img
                    id="nav-logo"
                    src="./Images/nlogo1.png"
                    alt="NaukriDekho"
                  />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent-555"
                  aria-controls="navbarSupportedContent-555"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent-555"
                >
                  <!-- Search box -->
                  <!-- <form class="form-inline" id="search-box">
                    <div class="dm-form my-0">
                      <input
                        class="form-control mr-sm-2"
                        type="text"
                        placeholder="Search"
                        aria-label="Search"
                      />
                    </div>
                  </form> -->
                  <!-- Search Box End -->

                  <div style="margin-left: 555px"></div>

                  <ul
                    class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end"
                  >
                    <li class="nav-item">
                      <a id="custom-nav" class="nav-link active" href="./"
                        ><strong class="btn btn-outline-warning">Home</strong>
                        <span class="sr-only"></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a id="custom-nav" class="nav-link" href="#about"
                        ><strong class="btn btn-outline-warning"
                          >About Us</strong
                        ></a
                      >
                    </li>
                    <!-- <li class="nav-item" float-right>
                      <a id="custom-nav" class="nav-link" href="fregister.html"
                        ><strong class="btn btn-outline-warning"
                          >Register</strong
                        ></a>
                    </li> -->

                    <li class="nav-item" float-right>
                      <form action="./PDO/logout.php" method="post">
                        <div id="custom-nav" class="nav-link">
                      <input class="btn btn-outline-warning" type="submit" value="Logout"
                        ></input></div>
                        </form>
                    </li>

                    <li class="nav-item avatar mx-4">
                      <abbr title="Profile"><button
                        class="btn btn-outline-warning"
                        style="
                          border-radius: 55%;
                          margin-top: 6px;
                          margin-left: 30px;
                        "
                      >
                        <a class="nav-link p-0" href="fprofile.php">
                          <img
                            src="Images/avatar.png"
                            class="rounded-circle z-depth-0"
                            alt="avatar image"
                            style="height: 4vh"
                          />
                        </a>
                      </button></abbr>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!--/.Navbar -->
          </div>
          <!--header end-->
        </div>
        <!--container end-->
      </div>
      <!-- End In Super container -->

      <!-- Post Job Start -->

      <section
        class="vh-120 bg-image"
        style="
          background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');
        "
      >
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div
              class="
                row
                d-flex
                justify-content-center
                align-items-center
                h-50
                mb-20
              "
            >
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card bg-dark m-2" style="border-radius: 15px">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-4 text-light">
                      Post a Job
                    </h2>

                    <form method="POST" action="./PDO/ppost.php" onsubmit="validate_post()">
                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="jobtitle"
                          id="jobtitle"
                          class="form-control form-control-lg"
                          placeholder="Job Title"
                          required
                        />
                      </div>

                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="profession"
                          id="profession"
                          class="form-control form-control-lg"
                          placeholder="Profession"
                          required
                        />
                      </div>

                      <!-- <div class="form-outline mb-4">
                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Pay Check" required/>
                      </div> -->

                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="jobduration"
                          id="jobduration"
                          class="form-control form-control-lg"
                          placeholder="Job Duration"
                          required
                        />
                      </div>

                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="budget"
                          id="budget"
                          class="form-control form-control-lg"
                          placeholder="Budget"
                          required
                        />
                      </div>

                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="contactNo"
                          id="contactNo"
                          class="form-control form-control-lg"
                          placeholder="Contact No."
                          required
                        />
                      </div>
                      
                      <div class="form-outline mb-3">
                        <input
                          type="text"
                          name="address"
                          id="address"
                          class="form-control form-control-lg"
                          placeholder="Address"
                          required
                        />
                      </div>
                      <textarea
                        class="form-control"
                        rows="1"
                        name="jobdetail"
                        placeholder="Write Job Details here ..."
                        required
                      ></textarea>

                      <div class="d-flex justify-content-center">
                        <!-- <button
                          type="button"
                          class="btn btn-block btn-lg btn-warning mt-30 w-70"
                        >
                          Post Job
                        </button> -->
                        <input class="btn btn-block btn-lg btn-warning mt-3 w-50" id="submit-btn" type="submit" value="Post Job" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <div class="justify-content-end">
        <a
          href="fapplyforjob.html"
          class="btn btn-warning w-25 my-5"
          style="margin-left: 560px;"
          >Apply for a Job</a
        >
        </div> -->
      <!-- Post Job End -->

      <!-- Footer -->
      <footer
        class="page-footer font-small unique-color-dark pt-3 footer"
        id="about"
      >
        <!-- Footer Elements -->
        <div class="container">
          <!-- Call to action -->
          <ul class="list-unstyled list-inline text-center py-0">
            <li class="list-inline-item">
              <h5 class="mt-0 mb-3 text-light">Register for free</h5>
            </li>
            <br />
            <li class="list-inline-item">
              <a href="fregister.html" class="btn btn-outline-light"
                >Sign up!</a
              >
            </li>
          </ul>
          <!-- Call to action -->
        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1 text-light">
          © 2021 Copyright:
          <a href="https://sscoetjalgaon.ac.in"> sscoetjalgaon.ac.in</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
    <!--super-contaIner end-->

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="G-html-js/fpost.js"></script>

    <div id="google_element"></div>
<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
  function loadGoogleTranslate(){
    new google.translate.TranslateElement(
      "google_element"
    );
  }
</script>
  </body>
</html>
