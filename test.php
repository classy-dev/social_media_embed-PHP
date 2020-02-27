<?php
 $data = file_get_contents('http://instagram.com');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ddd</title>
 </head>
 <body>
 <div>
 	<?php echo $data;?>
 </div>
 </body>
 </html>