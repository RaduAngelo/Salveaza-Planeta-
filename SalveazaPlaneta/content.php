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

        .detalii{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -205.97px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #masina{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -266.755px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

         #plimbarea{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -333.105px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #energie{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -146.03px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #reciclare{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -146.03px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #copaci{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -226.37px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #ulei{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -372.075px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #foc{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -330.405px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #curentelectric{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -208.7px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #gaz{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -240.045px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #parere{
          position: absolute;
          left: 50%;
          margin:  -60px 0 0 -392.1px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #rezultat{
          position: absolute;
          left: 50%;
          width: 1500px;
          margin:  -60px 0 0 -750px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
        }

        #endresult{
          width: 750px;
          margin:  -60px 0 0 375px;
          margin-bottom: 80px;
          background-image: url(Resources/slider.png);
        }

        #endresult[type=range] {
          width: 100%;
          margin: 12.8px 0;
          background-image: url(Resources/slider.png);
          -webkit-appearance: none;
        }

        #endresult[type=range]:focus {
          outline: none;
        }

        #endresult[type=range]::-webkit-slider-runnable-track {
          background-image: url(Resources/slider.png);
          border: 1.7px solid #010101;
          border-radius: 11.1px;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
        }

        #endresult[type=range]::-webkit-slider-thumb {
          margin-top: -14.5px;
          width: 26px;
          height: 50px;
          background: #ffffff;
          border: 1.7px solid black;
          border-radius: 47px;
          cursor: pointer;
          -webkit-appearance: none;
        }


        #endresult[type=range]::-moz-range-track {
          background-image: url(Resources/slider.png);
          border: 1.7px solid #010101;
          border-radius: 11.1px;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
        }

        #endresult[type=range]::-moz-range-thumb {
          width: 26px;
          height: 50px;
          background-image: url(Resources/slider.png);
          border: 1.7px solid #a9ba17;
          border-radius: 47px;
          cursor: pointer;
        }

        #endresult[type=range]::-ms-track {
          background-image: transparent;
          border-color: transparent;
          border-width: 19.6px 0;
          color: transparent;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
        }

        

        #endresult[type=range]::-ms-thumb {
          width: 26px;
          height: 50px;
          background-image: url(Resources/slider.png);
          border: 1.7px solid #a9ba17;
          border-radius: 47px;
          cursor: pointer;
          margin-top: 0px;
        }

        @supports (-ms-ime-align:auto) {
         
          #endresult[type=range] {
            margin: 0;
            
          }
        }


        table{
          width: 1500px;
          border: 1px solid black;
        }

        table, td {
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

        #nume1{
          display: none;
        }
        #prenume1{
          display: none;
        }
        #email1{
          display: none;
        }
        #data_nasterii1{
          display: none;
        }
        #hobby1{
          display: none;
        }
        #CO2_masina1{
          display: none;
        }
        #raspuns11{
          display: none;
        }
        #raspuns21{
          display: none;
        }
        #raspuns31{
          display: none;
        }
        #raspuns41{
          display: none;
        }
        #Range1{
          display: none;
        }
        #raspuns51{
          display: none;
        }
        #CO2_curent1{
          display: none;
        }
        #CO2_gaze1{
          display: none;
        }
        #raspuns61{
          display: none;
        }

        #score1{
          display: none;
        }

        #pozamasina{
        width:350px; 
        height:260px; 
        padding-left: 105.1px;
      }

        #panousolar{
          width:350px; 
          height:260px; 
        }

        #recilcaregunoi{
          width:350px; 
          height:260px; 
        }

        #reciclareulei{
          width:350px; 
          height:260px; 
          padding-left: 197.075px;
        }

        #copaciplantati{
          width:350px; 
          height:260px; 
          padding-left: 51.37px;
        }

        #deseuriarse{
          width:350px; 
          height:260px; 
          padding-left: 164.45px;
        }

        #curentelectricpoza{
          width:350px; 
          height:260px; 
          padding-left: 34.245px;
        }

        #pozagaze{
          width:350px; 
          height:260px; 
          padding-left: 65.045px;
        }

        #parerepoza{
          width:350px; 
          height:260px; 
          padding-left: 235.815px;
        }

        #inapoi{
          width:120px; 
          float:right; 
          background: #7f5af0; 
          color:white; 
          height: 30px;
        }

        #salveazadatele{
          width:120px; 
          float:right; 
          background: #7f5af0; 
          color:black; 
          height: 30px; 
          background-color:#93ef89; 
          margin-right:15px;
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

          .btn2{
          border-radius: 30px;
          transition:  transform 0.3s ease;
          background: #7f5af0;
          font-size: 14px;
          color: #fffffe;
          height: 50px;
          width: 200px;
          border-radius: 10px;
          margin-top: 45px;
        }

        .detalii{
          
          width: 300px;
          padding-left: 55px;
          
        }

        

        input{
          width: auto;
        }
        label{
          width: 20%;
        }


        #masina{
          
          padding-left: 118px;
          width: 300px;
        }


         #plimbarea{
         
          padding-left: 189px;
          width: 300px;
        }

        #energie{
          
          padding-left: 1px;
          width: 300px
        }

        #reciclare{
         
          padding-left: 1px;
          width: 300px
        }

        #copaci{
         
         padding-left: 89px;
         width: 300px
        }

        #ulei{
         padding-left: 225px;
         width: 300px
        }

        #foc{
         padding-left: 189px;
         width: 300px
        }

        #curentelectric{
         padding-left: 57px;
         width: 300px
        }

        #gaz{
         padding-left: 89px;
         width: 300px
        }

        #parere{
         padding-left: 235px;
         width: 300px
        }



        #pozamasina{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #panousolar{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #recilcaregunoi{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #reciclareulei{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #copaciplantati{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #deseuriarse{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #curentelectricpoza{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #pozagaze{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #parerepoza{
          width:200px; 
          height:200px; 
          padding-left: 50px;
        }

        #rezultat{
          position: absolute;
          left: 50%;
          padding-left: 600px;
          padding-bottom: 60px;
          padding-top: 90px;
          display: none;
          animation: movevisible 0.5s linear 1;
          animation-delay: 1s;
          visibility: hidden;
          animation-fill-mode: forwards;
          width: 300px;
        }

        #endresult{
          width: 300px;
          margin:  -60px 0 0 375px;
          margin-bottom: 80px;
          background-image: url(Resources/slider.png);
          background-size: 300px 20px;
        }

        #endresult[type=range] {
          width: 100%;
        
           background-size: 300px 20px;
          -webkit-appearance: none;
        }

        #endresult[type=range]:focus {
          outline: none;
        }

        #endresult[type=range]::-webkit-slider-runnable-track {
         
          border: 1.7px solid #010101;
          border-radius: 11.1px;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
           background-size: 300px 20px;
        }

        #endresult[type=range]::-webkit-slider-thumb {
          margin-top: -14.5px;
          width: 26px;
          height: 50px;
          background: #ffffff;
          border: 1.7px solid black;
          border-radius: 47px;
          cursor: pointer;
          -webkit-appearance: none;
           background-size: 300px 20px;
        }


        #endresult[type=range]::-moz-range-track {
        
          border: 1.7px solid #010101;
          border-radius: 11.1px;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
           background-size: 300px 20px;
        }

        #endresult[type=range]::-moz-range-thumb {
          width: 26px;
          height: 50px;
           background-size: 300px 20px;
          border: 1.7px solid #a9ba17;
          border-radius: 47px;
          cursor: pointer;
        }

        #endresult[type=range]::-ms-track {
          background-image: transparent;
          border-color: transparent;
          border-width: 19.6px 0;
          color: transparent;
          width: 100%;
          height: 24.4px;
          cursor: pointer;
        }

        

        #endresult[type=range]::-ms-thumb {
          width: 26px;
          height: 50px;
         background-size: 300px 20px;
          border: 1.7px solid #a9ba17;
          border-radius: 47px;
          cursor: pointer;
          margin-top: 0px;
        }

        table{
          width: 1500px;
          border: 1px solid black;
          margin-top: 700px;
          transform:rotate(-90deg); 
          margin-left: -650px;
        }

        table, td {
          border: 1px solid black;
          border-collapse: collapse;
          height: 100px;
        }

        #inapoi{
          width:120px; 
          float:right; 
          background: #7f5af0; 
          color:white; 
          height: 30px;
          margin-top: 650px;
        }

        #salveazadatele{
          width:120px; 
          float:right; 
          background: #7f5af0; 
          color:black; 
          height: 30px; 
          background-color:#93ef89; 
          margin-right:15px;
          margin-top: 650px;
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
                  <li><a href="content.php" style="color:orange;">Spre chestionar!</a></li>
                  <li><a href="despre.php" style="color:white;">Despre</a></li>
                </ul>
              </nav>
            </div>


            <div class="hero-text">
              <h1 style="font-size:50px">Salvează Planeta!</h1>
            </div>

        </div>
 
        <?php include"chestionar.php";?>
       <script src="script.js?newversion"></script> 
      

    </body>

    <footer>
      <a href="https://www.facebook.com/ancbp.ro"><img src="Resources/facebook.png" class="logo2"></a>
  <a href="https://www.instagram.com/ourplanet/"><img src="Resources/instagram.png" class="logo2"></a>
  <a href="https://twitter.com/planet"><img src="Resources/twitter.png" class="logo2"></a>
      <span class="tooltiptext">Accesează rețelele sociale!</span>
    </footer>

</html>