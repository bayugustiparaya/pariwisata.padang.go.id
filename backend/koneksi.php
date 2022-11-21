<?php
$db = mysqli_connect('localhost', 'root', '', 'db_asesmen1');


if (!$db) {
  die("<script>alert('Gagal tersambung dengan database.')</script>");
}
