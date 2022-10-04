<!DOCTYPE html>
<html>
   <head>
      <title>SFMB</title>
   </head>
   <body>
      <div style="font-size:xx-large;font-family:Arial, Helvetica, sans-serif;text-align:center;">
         <?php
            $path = 'log.txt';
            date_default_timezone_set('CET');

            if (isset($_POST['code'])) {
               $fh = fopen($path,"a+");
               $string = $_POST['code'];
               $txt = date("Y-m-d H:i:s ") . $string . PHP_EOL;
               fwrite($fh,$txt); // Write information to the file
               fclose($fh); // Close the file
               
               switch ($string) {
                  case "test123":
                     echo "This is a test";
                     break;
                  default:
                     echo "Incorrect code";
                     break;
               }
            }
         ?>
      </div>
   </body>
</html>