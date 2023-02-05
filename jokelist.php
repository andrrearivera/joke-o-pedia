<?php
	include 'database.php';
	$query = "SELECT * FROM jokes ORDER BY type";
	$jokes = mysqli_query($conn, $query);
?>

<!-- begin HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Joke-o-pedia</title>
  <!-- cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Roboto&display=swap" rel="stylesheet">
  <style>
  h1, h2 {font-family: 'Luckiest Guy', arial, cursive;}
  body {font-family: 'Roboto', arial, sans-serif;}
  </style>
  <!-- css -->
  <link rel="stylesheet" href="styles/main.css">
</head>

<body>
  <div class="container my-5">

    <div class="row">
      <div class="col-md-8 mx-auto p-3 border border-3 border-success box">
        <h1 class="text-success display-3 text-center"> Jokes </h1>
        <p class="text-center lead"><a href="new_joke.php"> add a new joke</a></p>
    <!--    </div>
      </div>

      <div class="row">
  			<div class="col-lg-8 mx-auto p-3 border border-3 border-success box" >
    -->      <table class="table table-hover">
  <!-- table column headings -->
            <thead>
              <tr>
                <th scope="col">Joke type</th>
                <th scope="col">Joke</th>
                <th scope="col">Punchline</th>
              </tr>
            </thead>

            <tbody>



<!-- php to display data -->
              <?php while ($row = mysqli_fetch_assoc($jokes)) :  ?>

              <tr>
                <td><?php echo stripslashes($row['type']); ?></td>
                <td><?php echo stripslashes($row['joke']); ?></td>
                <td><?php echo stripslashes($row['punchline']); ?></td>


              </tr><!-- end of HTML table row -->

<?php endwhile;  ?> <!-- end the PHP while-loop
     everything else on this page is normal HTML -->



   </tbody>
 </table>
</div>
</div>
</div> <!-- close container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
