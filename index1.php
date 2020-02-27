<?php
 // $data = file_get_contents('http://linkedin.com');
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'http://www.example.com'); 
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$data = curl_exec($ch); 
curl_close($ch); 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ddd</title>
 </head>
 <body>
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
 <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

 <!-- <div style="width: 190px;">
  
  <div class="fb-page" data-href="https://www.facebook.com/imdb" data-width="1420"></div>
</div> -->

 </body>
 </html>
