@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.side')

@php
/*$conn = mysqli_connect("localhost", "root", "", "stock");

  $sql = "SELECT * FROM product;";
  $results = mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($results);

  if ($resultsCheck > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
      echo $row['product_image'];
    }
  }*/
@endphp

Nonong gwapo


  @yield('page')
