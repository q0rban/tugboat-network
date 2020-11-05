<?php require_once '../curl_request.php'; ?>
<html>
<body>
<h1>Welcome to Light Tugboat!</h1>
<pre>
      <?php print file_get_contents('light.txt') ?>
    </pre>
<h1>This is the Dark Tugboat logo pulled from the other service using cURL:</h1>
<pre>
      <?php print _curl_request('http://dark/dark.txt') ?>
    </pre>
</body>
</html>
