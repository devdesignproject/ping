# ping


///////////////////     PING TEST JQUERY & PHP 



If you are looking simple way to check which server is online this solution is for You. 
All is based on Ajax request sending to php page.
To check which server is online just add/edit this line (index.php)

checkIsOnline('192.168.1.90','a');  // call function
edit IP adress 192.168.1.90 

You can simply change interval time, script check every 5s which servers is online.
To change this value edit (index.php)

setInterval(function(){
checkIsOnline('192.168.1.90','a');
}, 5000); <----- edit this value to ex. 1000 = (1s) , 2000 = (2s) 



///////////////////     NEW IP / WWW ADDRESS TO CHECK



If You want to add new address like google.com to test ping just add new line inside (index.php) 
setInterval(function(){ 
checkIsOnline('google.com','google');
}, 5000);

And add html element inside index.php

        <div class="col-lg-4">
          <h3>Google.com</h3>
          <p class="text-danger">Google.com</p>
         <div class="status"> STATUS:  <span id="google" class="btn btn-warning">SPRAWDZANIE/CHECKING</span> </div>
       </div>  
