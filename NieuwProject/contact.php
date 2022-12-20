<?php
$sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''
    && isset($_POST['name']) && $_POST['name'] != ''
    && isset($_POST['text']) && $_POST['text'] != ''){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Somebody wants to contact you';
$message = $_POST['text'];

$to = "gert@sameys-portfolio.be";

$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $subject, $body);
$sent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gert Sameys" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Varela+Round&family=Zen+Dots&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Varela+Round&family=Zen+Dots&display=swap'); </style>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/16fb1cf14e.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="stylesheet.css">
    <title>Contact</title>
</head>
<body id="page5">
    <nav class="navbar navbar-expand-lg sticky-top bg-succes bg-opacity-50">
        <div class="container-fluid">
          <a class="navbar-brand p-3 text-white" href="index.html"
            >Gert Sameys</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="curriculum.html"
                  ><i class="fa-solid fa-clipboard"></i> CURRICULUM</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ervaringen.html"
                  ><i class="fa-solid fa-hand"></i> ERVARINGEN</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hobbies.html"
                  ><i class="fa-solid fa-dice-d20"></i> HOBBIES</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="contact.php"
                  ><i class="fa-solid fa-envelope"></i> CONTACT</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php
if($sent):
?>

<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bedankt!</strong> Ik heb je mail ontvangen en neem zo snel mogelijk contact met je op.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
endif;
?>
      <div class="containerform">
        <form action="contact.php" method="POST" class="form">  
          <div class="form-floating">
            <input type="name" class="feedback-input form-control" name="name" id="floatingInput" placeholder="Naam">
            <label for="floatingInput">Naam</label>
          </div>
          <div class="form-floating">
            <input type="email" class="feedback-input form-control" name="email" id="floatingInput" placeholder="Email">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <textarea type="text" class="feedback-input form-control" name="text" id="floatingInput" placeholder="Bericht"></textarea>
            <label for="floatingInput">Bericht</label>
          </div>
          <input type="submit" value="Verstuur"/>
        </form>
      </div>


</body>
</html>