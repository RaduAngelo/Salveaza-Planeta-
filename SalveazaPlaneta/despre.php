    <?php
    include "Functions/database.php";
    session_start();
    ?>

<!DOCTYPE html>
<html>

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Chestionar</title>
      <link rel = "icon" href = "Resources/save.png" 
        type = "image/x-icon">
       

      <style>

        body, html {
          height: 100%;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
          background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("Resources/background.jpg");
          height: 50%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }

        .hero-text {
          text-align: center;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
        }

        #chestionar {
          padding: 70px 0;
          text-align: center;
          display: block;
        }

        .btn1{
          background: #16161a;
          color: white;
          font-size: 14px;
          border-radius: 10px;
          transition:  transform 0.3s ease;
          height: 50px;
          width: 200px;
        }

        .btn1::after. .btn1::before{
          content: "";
          postion: absolute;
          opacity: 0.3;
          background: #000;
          border-radius: inherit;
          width: 100%;
          height: 100%;
          left: 0;
          bottom: 0;
          z-index: -1;
          transition: transform 0.3s ease;
        }

        .btn1:hover {
          transform: translate(-10px, -10px);
        }

        .btn1:hover::after {
          transform: translate(6px, 6px);
        }

        .btn1:hover::before {
          transform: translate(10px, 10px);
        }

        .btn2{
          border-radius: 30px;
          transition:  transform 0.3s ease;
          background: #7f5af0;
          font-size: 14px;
          color: #fffffe;
          height: 50px;
          width: 200px;
          border-radius: 10px;
        }

        .btn2::after. .btn2::before{
          content: "";
          postion: absolute;
          opacity: 0.3;
          background: #000;
          border-radius: inherit;
          width: 100%;
          height: 100%;
          left: 0;
          bottom: 0;
          z-index: -1;
          transition: transform 0.3s ease;
        }

        .btn2:hover {
          transform: translate(10px, -10px);
        }

        .btn2:hover::after {
          transform: translate(6px, 6px);
        }

        .btn2:hover::before {
          transform: translate(-10px, 10px);
        }

          
         table{
          width: 1500px;
          border: 1px solid black;
    
        }
        .align_center{
          position: absolute;
          left: 50%;
          width: 600px;
          margin:  -60px 0 0 -300px;
          padding-bottom: 60px;
          padding-top: 90px;
}
        table, th,td {
          border: 1px solid black;
          border-collapse: collapse;
          height: 100px;
}

        input{
          width: 300px;
          display: inline-block;
          margin-top: 10px;
          margin-right: 10px;
          border-radius: 10px;
          height: 23px;
          background-color:rgba(0, 0, 0, 0.1);
        }

        #copacpoza{
          width: 600px; 
          height: 570px;
        }

        

        @keyframes movevisible{
            0%{ opacity: 0;
              visibility: hidden;
            }
            100%{opacity: 1;
              visibility: visible;
            }
        }

         @media only screen and (min-width: 272px) and (max-width: 900px){
          .align_center{
          position: absolute;
          left: 50%;
          width: 300px;
          padding-left: 155px;
          padding-bottom: 60px;
          padding-top: 90px;
}

          #copacpoza{
          width: 200px; 
          height: 200px;
        }
         }

      </style>
    </head>

    <body>

        <div class="hero-image" id="test">
            <div class="navbar">
              <img src="Resources/Icon.png" class="logo">
              <nav class="menu">
                <ul>
                  <li><a href="index.php" style="color:white;">Acasă</a></li>
                  <li><a href="content.php" style="color:white;">Spre chestionar!</a></li>
                  <li><a href="despre.php" style="color:orange;">Despre</a></li>
                </ul>
              </nav>
            </div>


            <div class="hero-text">
              <h1 style="font-size:50px">Salvează Planeta!</h1>
            </div>

        </div>
 
 <div class="align_center">
  <h1>Despre site</h1>
    <img src="Resources/copac.jpg" id="copacpoza">
     <p>Site-ul este creat în scopul de ai ajuta pe oameni să înțeleagă cât de importantă este casa lor, 
     <b>Pământul</b>. Pe acest site, tu poți să completezi un chestionar, în urma căreia vei primi un scor. Cu cât scorul e mai mare, cu atât este mai bine.</p>
     <br>
     <p>Chestionar-ul este alcătuit din 10 întrebări, la care trebuie să adaugi și o scută descriere a persoanei tale. Întrebările respective au ca prim plan deducerea greșelilor realizate de către tine ce au efecte dezastruoase asupra planetei noastre.</p>
     <br>
     <p>Fă un mic efort și <b>"Salvează planeta!".</b></p>
</div>

       <script src="script.js?newversion"></script> 
      

    </body>

    <footer>
      <a href="https://www.facebook.com/ancbp.ro"><img src="Resources/facebook.png" class="logo2"></a>
  <a href="https://www.instagram.com/ourplanet/"><img src="Resources/instagram.png" class="logo2"></a>
  <a href="https://twitter.com/planet"><img src="Resources/twitter.png" class="logo2"></a>
      <span class="tooltiptext">Accesează rețelele sociale!</span>
    </footer>

</html>