<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="<?php echo base_url(); ?>static/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="<?php echo base_url(); ?>static/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

    <style>
        body{
            background-color:white;
            max-width: 100%;
        }
        .card-header{
            background-color:rgb(46 133 60 / 17%);
        }
        .btn-send{
            background-color:#1a7a3cad;
            border-color: #1a7a3cad;
        }
        .btn-send{
            color: white; 
            background-color: #28a745;
            margin-inline-end: 1rem;
            width: 10rem;
        }
        .btn-send:hover{
            color: white; 
            background-color: #18c63f;
        }
        h6{
            font-weight: bold;
        }
        .get-started-btn-index {
        margin-left: 15px;
        border-radius: 4px;
        transition: 0.7s;
        color: #fff;
        background: #28a745;
        box-shadow: 0 8px 28px rgba(22, 223, 180, 0.2);
        border-radius: 4px;
        padding: 8px 25px;
        white-space: nowrap;
        font-size: 14px;
        display: inline-block;
        border: 1px solid #1a7a3cad;

      }

      .get-started-btn-index:hover {
        background: #1fc043;
        color: #fff;
        border-color: #1a7a3cad;
      }        

      
        
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  <a class="navbar-brand" style="margin-left: 1rem; color:#fff" ><i class="fa-solid fa-users"></i> IDEIAGEOCA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-weight: 300; text-decoration: underline;" href="<?php echo site_url("encuesta/index"); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a id="sesion" href="#modalLoginForm" data-toggle="modal" class="get-started-btn-index" style="text-decoration: none; font-weight: bold;">Personal Autorizado</a>
      
    </form>
  </div>
</nav>
    <br />
    <div class="container-fluid" style="padding-left: 35px; padding-right: 35px;">

