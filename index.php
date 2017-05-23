<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHEKING IS ONLINE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">BRAMKI VOIP</h3>
      </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.90</h3>
          <p class="text-danger">BIURO HURTOWE I DETAL</p>

         <div class="status"> STATUS:  <span id="a" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
        </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.91</h3>
          <p class="text-danger">BIURO KADRY I KSIĘGOWOŚĆ</p>

         <div class="status"> STATUS:  <span id="b" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.92</h3>
          <p class="text-danger">BIURO HURTOWE</p>
   
         <div class="status"> STATUS:  <span id="c" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.93</h3>
          <p class="text-danger">BIURO UP</p>
 
         <div class="status"> STATUS:  <span id="d" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
        </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.94</h3>
          <p class="text-danger">BIURO UP</p>

         <div class="status"> STATUS:  <span id="e" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.95</h3>
          <p class="text-danger">MAGAZYN</p>
   
         <div class="status"> STATUS:  <span id="f" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>
        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.96</h3>
          <p class="text-danger">MAGAZYN</p>
     
         <div class="status"> STATUS:  <span id="g" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>  
      </div>

<hr>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2017 DevDesign.pl</p>
      </footer>

    </div> <!-- /container -->


<script>


// MAIN FUNCTION SENDING INFO TO PHP PAGE
function checkIsOnline(target, elemToShow){

 $.ajax({
        url: "ping.php",
        type: "post",
        data: {ip: target},
        success: function (response) {

          if(response == 'ok'){
            $("#"+elemToShow).removeClass('btn-danger btn-warning');
            $("#"+elemToShow).addClass('btn-success');
            $("#"+elemToShow).text("PING OK");
              }else{
                $("#"+elemToShow).addClass('btn-danger');
                $("#"+elemToShow).text("PING TIMEOUT");  
                   }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(textStatus, errorThrown);
        }


    });
}


setInterval(function(){
checkIsOnline('192.168.1.90','a');
checkIsOnline('192.168.1.91','b');
checkIsOnline('192.168.1.92','c');
checkIsOnline('192.168.1.93','d');
checkIsOnline('192.168.1.94','e');
checkIsOnline('192.168.1.95','f');
checkIsOnline('192.168.1.96','g');
}, 5000);

</script>

  </body>
</html>
