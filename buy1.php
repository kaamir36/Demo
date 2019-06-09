<?php
  include('dbcon.php');
  $output='';
if(isset($_POST['search']))
{
  $sch = $_POST['search'];
  $que = "SELECT * FROM `userdata1` WHERE `book_name` = '$sch'";
  $run = mysqli_query($con,$que);
  if($run == TRUE)
  {
  while($data = mysqli_fetch_assoc($run))
  {
    $name = $row['name'];
      $mobile = $row['mobile_number'];
      $book = $row['book_name'];
   echo $name;
      
  }}
else{
  echo "error";
}}

?>
<html>
<head><title>search</title></head>  
<body>
</body>

</html>
