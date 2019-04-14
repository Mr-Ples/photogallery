 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- JQuery and JQueryLazy for lazy loading -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.min.js"></script>

     <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- CSS for navbar and lightbox -->
    <link rel="stylesheet" type="text/css" href="main1.css" />

    <!-- Logo font -->
    <link
      href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico"
      rel="stylesheet"
    />

    <title>Photo Gallery</title>

   </head>

   <!-- Navbar -->
  <body>
    <div class="navbar">
      <div class="logoContainer">
      <div class="logo1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg></div>
        <div class="vertical"></div>
      
        
       
        <div class="logo">Photo Gallery</div>
      </div>
    </div>

    <header></header>

      <div class="container">
     <?php
       require('includes/connection.php');
       $z = 1;

       //$allowed = array( 'jpeg' , 'png' , 'jpg' );

       $questions = "SELECT Name FROM photo_index ";

       $result_questions = mysqli_query($conn, $questions);

       $row = mysqli_num_rows($result_questions);

       while ($row = mysqli_fetch_array($result_questions)) {
        
        if ($z == 5){
          $z = 2;
        }

             //for ($z = 0; $z < 3; $z++) {
              // $img = explode('.',$row['Name']);
              // if ($allowed[$z] == $img[1]){
      if($z == 1){
        echo '
        <div class="card-group">

          <a href="#_" class="lightbox" id="'.$row['Name'].'">
            <img src="Images/'.$row['Name'].'" />
          </a>

          <div class="card">
            <a href="#'.$row['Name'].'">
              <img
                style="object-fit: cover;"
                class="card-img-top lazy"
                src="loadirst.jpg"
                data-src="Images/'.$row['Name'].'"
                alt="Card image cap"
              />
            </a>
          </div>';
      }else if($z == 2 || $z == 3){ echo '

          <a href="#_" class="lightbox" id="'.$row['Name'].'">
            <img src="Images/'.$row['Name'].'" />
          </a>

          <div class="card">
            <a href="#'.$row['Name'].'">
              <img
              style="object-fit: cover;"
                class="card-img-top lazy"
                src="loadirst.jpg"
                data-src="Images/'.$row['Name'].'"
                alt="Card image cap"
              />
            </a>
          </div>';
      } else if ($z ==4) {       
        echo'  
      </div>
        <div class="card-group">
          <a href="#_" class="lightbox" id="'.$row['Name'].'">
            <img src="Images/'.$row['Name'].'" />
          </a>

        <div class="card" style="object-fit: cover;">
          <a href="#'.$row['Name'].'">
            <img
            
              class="card-img-top lazy"
              style="object-fit: cover;"
              src="loadirst.jpg"
              data-src="Images/'.$row['Name'].'"
              alt="Card image cap"
            />
          </a>
        </div>';}
        $z++;
                      
        } ?>
      </div>

<script>

// lazy loading function
$(function() {
    $('.lazy').lazy();
});

  // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
  window.onscroll = function jisis() {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 80 ||
      document.documentElement.scrollTop > 80
    ) {
      document.getElementsByClassName("navbar")[0].style.maxHeight = "50px";
      document.getElementsByClassName("logo")[0].style.padding = "5px 15px";
      document.getElementsByClassName("logo")[0].style.opacity = "0";
      document.getElementsByClassName("vertical")[0].style.margin =
        "13px 0px 13px 0px";
      document.getElementsByClassName("vertical")[0].style.opacity = "0";
      document.getElementsByClassName("logo1")[0].style.padding = "0px 0px 0px 25px";

    } else {
      document.getElementsByClassName("logo1")[0].style.padding = "13px 0px 15px 25px";
      document.getElementsByClassName("navbar")[0].style.maxHeight = "75px";
      document.getElementsByClassName("logo")[0].style.padding = "15px";
      document.getElementsByClassName("logo")[0].style.opacity = "1";
      document.getElementsByClassName("vertical")[0].style.margin =
        "25px 0px 25px 0px";
      document.getElementsByClassName("vertical")[0].style.opacity = "1";
      document.getElementsByClassName("fab")[0].style.margin =
        "22px 0px 20px 10px";
      
    }
  }
</script>
</body>

</html>
