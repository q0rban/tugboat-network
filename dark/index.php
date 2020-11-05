<?php require_once '../curl_request.php'; ?>
<html>
  <body>
    <h1>Welcome to Dark Tugboat!</h1>
    <pre><?php print file_get_contents('dark.txt') ?></pre>
    <h1>This is the Light Tugboat logo pulled from the other service using cURL:</h1>
    <pre><?php print _curl_request('http://light/light.txt') ?></pre>
  </body>
</html>
