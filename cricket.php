<!doctype html>
<html lang="en">
 <head>
 
 <title>Cricket Players</title>
 </head>
 <body bg-color='grey'>

 <table class="table text-center">
 <table border='1px' align='center'>
 <thead>
 <tr>
 <th scope="col">NAME</th>
 </tr>
 </thead>
 <tbody>
 <?php
$players = array("M S Dhoni", "Virat Kohli", "Sachin Tendulkar", "Yuvraj Singh", "Rohit sharma");
$arrlength = count($players);
for($x = 0; $x < $arrlength; $x++) {
 echo "<tr><td>".$players[$x]."</td></tr>";

}
?>
 </tbody>
</table>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
crossorigin="anonymous"></script>
 </body>
</html>