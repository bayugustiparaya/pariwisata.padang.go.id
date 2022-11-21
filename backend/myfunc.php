<?php

$isActive = fn ($a, $b) => ($a == $b) ? 'active' : '';

function makeUrl($hal, $idcat)
{
  $pathUrl = $_GET;
  $pathUrl['idcat'] = $idcat;
  $pathUrl['halaman'] = $hal;
  return $_SERVER['PHP_SELF'] . '?' . http_build_query($pathUrl);
}
