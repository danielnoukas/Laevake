<!DOCTYPE HTML>
  <html>
	<head>
	
		<title>Praamipiletid</title>
    <meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
  	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="images/favicon.png">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){ 
  
    if ($(window).width() > 768) {
      $('.dropdown-toggle').click(function() {
          var location = $(this).attr('href');
          window.location.href = location;
          return false;
      });
    }
        	
    });
    </script> 

</head>
<body>	

    <div class="modal fade" id="gdpr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body text-center">
                <h2>GDRP</h2>
                <p>lorem ipsum dolor sit amet mul!!!</p>  
                </div>

            </div>
        </div>
    </div>

<nav class="navbar navbar-default navbar-fixed-top">
  <? include("menu.php");?>
</nav>


<a class="section" id="section0"></a>  
<div class="container-fluid text-block bg" style="padding-top:60px;height:600px;">  
 
        <div class="row"> 
          <div class="col-md-12 text-center" style="padding-top:250px;">
         
            <h1>Praamipilet on vaid ühe klikki kaugusel!</h1>  
         
          </div> 
        </div>  
  
        <div class="row"> 
          <div class="col-xs-6 text-right" style="padding-top:50px;">
            <a href="https://www.apple.com/app-store/"><img src="images/app_store.png" class="text-center" style="height:50px;"></a>
          </div> 
          <div class="col-xs-6 text-left" style="padding-top:50px;">
            <a href="https://play.google.com/store/"><a href=""><img src="images/google_play.png" class="text-center" style="height:50px;"></a>
          </div> 
        </div>  
   
</div> 

<a class="section" id="section1"></a>  
<div class="container text-block" style="padding-top:60px;">     
  <div class="row"> 
    <div class="col-md-12 text-center">

          <h2 style="padding-bottom:30px;">Kuidas äpp töötab?</h2>  
          
          <div class="row"> 
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <button class="btn-circle">1</button>
            <h3>Registreeri endale praamid.ee konto.</h3> 
            </div>
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <button class="btn-circle">2</button>
            <h3>Lae praamid.ee kontole raha, mille eest piletid ostad.</h3> 
            </div>
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <button class="btn-circle">3</button>
            <h3>Paigalda telefoni pileti äpp, logi sisse praamid.ee kontoga.</h3> 
            </div>
          </div>  
          
          <div class="row"> 
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <img src="images/mockup_1.jpg" class="text-center">
            <h3>Sinu asukoht tuvastatakse ja sulle leitakse sobivaim praamiaeg automaatselt.</h3> 
            </div>
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <img src="images/mockup_2.jpg" class="text-center">
            <h3>Äpp jätäb meelde sinu eelistused, et alati oleksid sinu eest tehtud õiged valikud.</h3> 
            </div>
            <div class="col-md-4 text-center" style="padding-bottom:60px;">
            <img src="images/mockup_3.jpg" class="text-center">
            <h3>Sisuliselt käivitä äpp, kinnita makse sörmejälje scanneri abil ja lihtsalt sõida.</h3> 
            </div>
          </div>  
          
          <h3><a href="#" data-toggle="modal" data-target="#gdpr">Andmete kasutuse kohta täpsemalt infod loe siit (GDPR).</a></h3>       

    </div> 
  </div>   
</div> 

<a class="section" id="section2"></a>  
<div class="container text-block" style="padding-top:60px;padding-bottom:60px;">     
  <div class="row"> 
    <div class="col-md-12 text-center">

        <h2>Hakkas meeldima? Lae äpp alla juba tänä ja sõida mugavalt!</h2>  
         
        <div class="row"> 
          <div class="col-xs-6 text-right" style="padding-top:50px;">
            <a href="https://www.apple.com/app-store/"><img src="images/app_store.png" class="text-center" style="height:50px;"></a>
          </div> 
          <div class="col-xs-6 text-left" style="padding-top:50px;">
            <a href="https://play.google.com/store/"><a href=""><img src="images/google_play.png" class="text-center" style="height:50px;"></a>
          </div> 
        </div>  
  
    </div> 
  </div>   
</div>

<footer id="footer" class="container">   

  <div class="row" style="margin-top:37px;margin-bottom:33px;">    
  <div class="col-md-12" style="text-align: center">
  
    <ul style="width:100%;">
    <li><p>Praamipiletid OÜ</p></li>
    <li><p>Merikotka 7 - 1, 93810 Kuressaare</p></li>
    <li>
    <p>Telefon:</p>
    <p>6 511 500</p>
    </li>
    <li>
    <p>Helpdesk:</p>
    <p>6 511 501</p>
    </li>
    <li><a href="mailto:info@praamipiletid.ee">info@praamipiletid.ee</a></li>
    </ul>

  </div> 
  </div> 
    
</footer>  
</body>
</html>

