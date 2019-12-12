
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form  method="post">
    <input type="text" id="login"placeholder="<10" name=in>
    <input type="text" id="login"placeholder="0<" name=inv>
    <input type="submit" name="button" value="0/10"></input>
  </form>
<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse($_POST["in"]) . "\n";
    echo inverse($_POST["inv"]) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

echo "er is iets mis gegaan" . PHP_EOL;
 ?>

  </body>
</html>
