<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "roofing");
 $output = '';
 if($_POST["action"] == "province")
 {
  $query = "SELECT package FROM test_price WHERE province = '".$_POST["query"]."' GROUP BY package";
  $result = mysqli_query($connect, $query);
  $output .= '';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["package"].'">'.$row["package"].'</option>';
  }
 }

 echo $output;
}
?>