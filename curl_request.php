<?php

function _curl_request($url) {
  // create a new cURL resource
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "$url");
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $result = curl_exec($ch);

  curl_close($ch);
  return $result;
}

