<!-- require :  if we put require then if the header doesn't match then the whole page will break and show error. -->
<!-- But include : won't break the whole index page of the website, just the header section won't be added, rest the code of body will be executed -->
<!--?php include 'inc/header1.php'; ?> : It won't break the whole code. Just header section won't be shown.-->
<!--?php require 'inc/header1.php'; ?> : It will break the whole code. Error will be shown.-->


<?php include 'inc/header.php'; ?>

<?php
/*$name = '';
$email = '';    // instead of doing this, we can set at once ;
$body = '';*/

$name = $email = $body = '';
$nameError = $emailError = $bodyError = '';

// Form submit :

if (isset($_POST['submit'])) {

  //Validate Name
  if (empty($_POST['name'])) {
    $nameError = 'Name is required.';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  //Validate Email
  if (empty($_POST['email'])) {
    $emailError = 'email is required.';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  //Validate body
  if (empty($_POST['body'])) {
    $bodyError = 'Feedback is required.';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($nameError) && empty($nameError) && empty($nameError)) {
    //Add to database:
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

    if (mysqli_query($connection, $sql)) {
      //Success
      header('Location : feedback1.php');
    } else {
      //If shows Error : 
      echo 'Error: ' . mysqli_error($connection);
    }
  }
}

?>

<img src="/feedback_project/img/logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Faizul's Wrok</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameError ? 'is-invalid' : NULL; ?>" id="name" name="name" placeholder="Enter your name">
    <div class="invalid-feedback">
      <?php echo $nameError; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control <?php echo $emailError ? 'is-invalid' : NULL; ?>" id="email" name="email" placeholder="Enter your email">
    <div class="invalid-feedback">
      <?php echo $emailError; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : NULL; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
    <div class="invalid-feedback">
      <?php echo $bodyError; ?>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>

<?php include 'inc/footer.php'; ?>