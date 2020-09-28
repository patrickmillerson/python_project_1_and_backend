<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel='stylesheet' href='assets/css/styling.css' > -->
    <link rel='stylesheet' href='css/bootstrap/bootstrap.min.css' >
  

    <title>My E-Shop</title>
  </head>
  <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>


              <?php
              $con=mysqli_connect("sql9.freemysqlhosting.net","sql9366716","Z3775PZre6","sql9366716");
              // Checking for database connection
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

              $result = mysqli_query($con,"SELECT * FROM store");

                  echo "<div class='container'>";
                      echo "<div class='row'>";
                      while($row = mysqli_fetch_array($result))
              {
                          echo "<div class='card col-md-3'>";
                              echo "<img style='object-fit: contain;' src='https://t.uncledesk.com/saasbox/resources/jpg/best-selling-online-products-in-nigeria__96052fec64d93220dc6dcb6f257a4940.jpg' class='card-img-top' alt='...'>";
                              echo "<div class='card-body'>";
                                  echo "<h5 class='card-title'>". $row['item']."</h5>";
                                  echo "<p class='card-text'>Quantity:" . $row['quantity'] . "</p>";
                                  echo "<p class='card-text'>Price:" . $row['quantity'] . "</p>";
                                  echo "<a href='#' class='btn btn-primary'>Go somewhere</a>";
                              echo "</div>";
                          echo "</div>";
              }
                      echo "</div>";
                  echo "</div>";
              mysqli_close($con);
              ?>
  </body>
</html>