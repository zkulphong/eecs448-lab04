<?php

  function genRow($y, $x){
    $row = "<tr>";
    $row .= "<th>$y</th>";
    for ($i = 1; $i <= $x; $i++){
      $product = $i * $y;
      $item = "<th>$product</th>";
      $row .= $item;
    }

    $row .= "</tr>";

    return $row;
  }

  function genFirstRow($x){
    $row = "<tr><th></th>";
    for ($i = 1; $i <= $x; $i++){
      $item = "<th>$i</th>";
      $row .= $item;
    }

    $row .= "</tr>";

    return $row;
  }

  function genTable($y, $x){
      $table = "<table>";
      $table .= genFirstRow(100);
      for($i = 1; $i <= $y; $i++){
        $table .= genRow($i, $x);
      }

      $table .= "</table>";

      return $table;
  }


  echo genTable(100,100);
?>
