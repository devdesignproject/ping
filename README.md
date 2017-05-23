# ping
Simple Ping Test Monitor - jQuery & PHP

If you are looking simple way to check which server is online this solution is for You. All is based on Ajax request sending to php page.
To check which server is online just add/edit this line (index.php)

checkIsOnline('192.168.1.90','a');
edit IP adress 192.168.1.90

You can simply change interval time now, script check every 5s which servers are online.
To change this value edit (index.php)

setInterval(function(){
checkIsOnline('192.168.1.90','a');
}, 5000); <----- edit this value to ex 1000 (1s) , 2000 (2s) 


Remember if You Add / Remove IP address, change html elements, id a in span element (STATUS) is related with -> checkIsOnline('192.168.1.90','a');:


        <div class="col-lg-4">
          <h3>BRAMKA - 192.168.1.90</h3>
          <p class="text-danger">BIURO HURTOWE</p>
         <div class="status"> STATUS:  <span id="a" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>
       
so for example if You want to add new adress like google.com to test ping just add new line inside (index.php) setInterval(function(){ 

checkIsOnline('google.com','google');

And add html element

        <div class="col-lg-4">
          <h3>Google.com</h3>
          <p class="text-danger">Google.com</p>
         <div class="status"> STATUS:  <span id="google" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>  
