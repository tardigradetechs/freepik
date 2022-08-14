
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <!-- Linking the stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="images/icon.png"/>

  <!-- Linking the Jquery script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


  <script>
    $(document).ready(function () {
      $(".fa-search").click(function () {
        $(".icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");
      });
    });
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="css/index_nav-bar.css">
  <link rel="stylesheet" href="css/index_re.css">

 
</head>

<body>
  <nav>
    <div class="logo">
      <img src="images/logo.png" alt="" width="150px">
    </div>

    <div class="nav-items">
<!--
      
      <li><a href="#">CUSTOMERS</a></li>   -->   
    </div>

    <!-- Defining the search bars -->
    <div class="searchbar">
      <input type="text" placeholder="search">
      <div class="icon">
        <i class="fas fa-search  fa-2x"></i>
      </div>
    </div>

    <!-- Defining the login button -->
    <div class="licon">
      <li>
        <a href="index.php"> 
          <i class="fas fa-power-off fa-2x"  style="color: white;"></i>         
          
        </a>
      </li>
    </div>
  </nav>
