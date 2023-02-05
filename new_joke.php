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
  <div class="container my-5" id="joke">
  		<div class="row">
  			<div class="col-lg-8 mx-auto p-3 border border-3 border-success box" >

            <div class="intro text-center" id="inserthere">
            <h1 class="text-success display-3">Joke-o-pedia:</h1>
            <h2 class="text-success display-5">Tell me your best joke</h2>

            <p class="textbox lead"> Fill in the fields below to add a joke to the database.</p>
            <p class="lead"><a href="jokelist.php">View the joke database</a></p>
            </div>


            <form id="jokeform" method="post" autocomplete="off">
            <!-- question 1: type of joke -->
              <div class="mb-3">


                <label class="form-label" for="type"> Type of joke </label>
                <select class="form-select mb-3" name="type" id="type" required>

                  <option selected disabled value="">Choose...</option>
                  <option value="Knock-knock">Knock-knock</option>
                  <option value="Pun">Pun</option>
                  <option value="Anti-joke">Anti-joke</option>
                  <option value="Dark humor">Dark humor</option>
                  <option value="One-liner">One-liner</option>
                  <option value="Other">Other</option>
                </select>

              </div>
            <!-- end of question 1 -->

            <!-- question 2: joke -->
              <div class="mb-3">
                <label for="jokee" class="form-label">Joke</label>
                <input type="text" class="form-control" name="jokee" id="jokee" maxlength="280" required>
              </div>
            <!-- end of question 2 -->

            <!-- question 3: punchline -->
              <div class="mb-3">
                <label for="punchline" class="form-label">Punchline</label>
                <input type="text" class="form-control" name="punchline" id="punchline" maxlength="70" required>
              </div>
            <!-- end of question 3 -->

            <!-- submit button / end form -->
            <button type="submit" class="btn btn-success" id="submit">Submit</button>
      </form>



    </div> <!-- end col -->
  </div> <!-- end row -->


</div> <!-- close container -->

<!-- popup response -->
<div class="container">
  <div class="row">
    <div id="response"></div>
  </div>
</div> <!-- close response container -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="scripts/enter.js">

</script>


</body>
</html>
