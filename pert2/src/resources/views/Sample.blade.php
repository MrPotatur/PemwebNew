<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/resources/css/app.css" type="text/css">
    <style type="text/css">
        p {
         text-align: center; 
        }
        #biodata {
          color: black;
        }
        #navbarrr {
          background-color: gainsboro;
        }
        #navbar-kanan {
          height: 50px;
        }
        #navbar-kanan ul {
          float: right;
          list-style: none;
        }
        #navbar-kanan ul li{
          text-align: center;
          float: left;
        }
        #navbar-kanan ul li a{
          display: block;
          text-decoration: none;
          padding: 0px 20px;
          line-height: 40px
        }
       submitt{
        float: right;
       }
       tomboll{
        float: right;
       }
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbarrr">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="biodata">Biodata Diri</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar" id="navbar-kanan">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portofolio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://github.com/MrPotatur">Github</a></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/fadilahaf12_/">Instagram</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="fathur.andre16@gmail.com">Gmail</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex justify-content-end" role="search">
        <input type="search" class="form-control me-2" id="submitt" placeholder="cari" aria-label="Search">
        <button type="submit" class="btn btn-outline-success" id="tomboll">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<h2>
    <p>Fathur Andre Fadilah</p>
    <p>20210803037</p>
</h2>
</body>
</html>