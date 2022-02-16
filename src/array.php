<?php
global $products;
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
      ),
      array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
      ),
      array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
      )
    ),
    "Mobile" => array(
      array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
      ),
      array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
      ),
      array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
      )
    )
  ),
  "Jewelry" => array(
    "Earrings" => array(
      array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
      ),
      array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
      ),
      array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
      )
    ),
    "Necklaces" => array(
      array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
      ),
      array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
      ),
      array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
      )
    )
  )
);
function arr($products)
{

  foreach ($products as $key => $value) {
    echo $key . "<br>";

    // print_r("<pre>".$key.'=>'.$value.'</pre>');
    foreach ($value as $fk => $fk1) {
      echo $fk;
      foreach ($fk1 as $gk => $gk1) {
        print_r('<br> <td> Id ' . "=>" . $gk1['id'] . "<br> name =>" . $gk1['name'] . "<br> brand =>" . $gk1['brand'] . '</td>');
      }
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  arr($products);


  ?>
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <!-- cell 270px wide (8 columns x 60px) -->
    <?php
    echo  "<th>Categories</th><th>subCategories</th><th>id</th><th>Name</th><th>brand</th>";

    foreach ($products as $key => $value) {

      // print_r("<pre>".$key.'=>'.$value.'</pre>');
      foreach ($value as $fk => $fk1) {
        // echo $fk;
        foreach ($fk1 as $gk => $gk1) {
          print_r('<br><tr><td>' . $key . '</td><td>' . $fk . '</td> <td>  ' . $gk1['id'] . "</td> <td>" . $gk1['name'] . "</td><td>" . $gk1['brand'] . '</td></tr>');
        }
      }
    }
    //   for($row=1;$row<=8;$row++)
    //   {
    //       echo "<tr>";
    //       for($col=1;$col<=8;$col++)
    // 	  {
    //       $total=$row+$col;
    //       if($total%2==0)
    // 	  {
    //       echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    //       }
    // 	  else
    // 	  {
    //       echo "<td height=30px width=30px bgcolor=#000000></td>";
    //       }
    //       }
    //       echo "</tr>";
    // }
    // arr();
    ?>
  </table>
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    echo  "<th>subCategories</th><th>id</th><th>Name</th><th>brand</th>";

    foreach ($products as $key => $value) {

      // print_r("<pre>".$key.'=>'.$value.'</pre>');
      foreach ($value as $fk => $fk1) {
        // echo $fk;
        foreach ($fk1 as $gk => $gk1) {
          if ($fk == 'Mobile') {
            print_r('<br><tr><td>' . $fk . '</td> <td>  ' . $gk1['id'] . "</td> <td>" . $gk1['name'] . "</td><td>" . $gk1['brand'] . '</td></tr>');
          }
        }
      }
    }
    ?>
  </table><br><br>
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px" margin-top='5%'>
    <?php
    echo  "<th>Categories</th><th>subCategories</th><th>id</th><th>Name</th><th>brand</th>";

    foreach ($products as $key => $value) {

      // print_r("<pre>".$key.'=>'.$value.'</pre>');
      foreach ($value as $fk => $fk1) {
        // echo $fk;
        foreach ($fk1 as $gk => $gk1) {
          //   echo $gk1['name'];
          if ($gk1['brand'] == 'Samsung') {
            print_r('<br><tr><td>' . $key . '</td><td>' . $fk . '</td> <td>  ' . $gk1['id'] . "</td> <td>" . $gk1['name'] . "</td><td>" . $gk1['brand'] . '</td></tr>');
            // }
          }
        }
      }
    }
    ?>
  </table>




  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">

    <?php

    echo  "<th>Categories</th><th>subCategories</th><th>id</th><th>Name</th><th>brand</th>";

    foreach ($products as $key => $value) {

      // print_r("<pre>".$key.'=>'.$value.'</pre>');
      foreach ($value as $fk => $fk1) {
        // echo $fk;
        foreach ($fk1 as $gk => $gk1) {
          if ($gk1['id'] == 'PR003') {
            unset($gk1);
            continue;
          }
          print_r('<br><tr><td>' . $key . '</td><td>' . $fk . '</td> <td>  ' . $gk1['id'] . "</td> <td>" . $gk1['name'] . "</td><td>" . $gk1['brand'] . '</td></tr>');
        }
      }
    }

    ?>
  </table>
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">

    <?php

    echo  "<th>Categories</th><th>subCategories</th><th>id</th><th>Name</th><th>brand</th>";

    foreach ($products as $key => $value) {

      // print_r("<pre>".$key.'=>'.$value.'</pre>');
      foreach ($value as $fk => $fk1) {
        // echo $fk;
        foreach ($fk1 as $gk => $gk1) {
          if ($gk1['id'] == 'PR002') {
            // array_replace($gk1['name'], 'BIG-555')
            // print_r('hh');
            $gk1['name'] = 'BIG-555';
            // continue;
          }
          print_r('<br><tr><td>' . $key . '</td><td>' . $fk . '</td> <td>  ' . $gk1['id'] . "</td> <td>" . $gk1['name'] . "</td><td>" . $gk1['brand'] . '</td></tr>');
        }
      }
    }

    ?>
  </table>

</body>

</html>