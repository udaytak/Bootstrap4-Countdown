<?
  if (isset($_POST['submit'])) {
    # code...
    $from = $_POST['email'];
    $to = 'tak.uday@gmail.com';
    $subject = 'Bootstrap countdown site signup';
    $body = 'Please sign up to Bootstrap - Countdown Page email list';

    if (!$_POST['email']) {
      # code...
      $emailError = '<div class="text-danger">i class="fas fa-exclamation-triangle"></i> &nbsp;&nbsp;Please enter valid email address</div>'
    }

    if(!$emailError)
    {
      if (mail($to, $subject, $body, $from)) {
        # code...
        $result = '<div class="text-success"><i class="fas fa-check"></i>&nbsp;&nbsp;Thank you we\'ll keep you updated</div>';
      }

      else{
        $result = '<div class="text-danger">i class="fas fa-exclamation-triangle"></i> &nbsp;&nbsp;Sorry there has been an error. Please try again. </div>';
      }
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"> <!--5.0.8-->



    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">

    <title> </title>

  </head>
  <body>
    <section id="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="img/my-logo.png" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>We're working hard, we'll be ready to launch in...</p>
          </div>          
        </div>
      </div>      
    </section>

    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="countdown">
              
            </div>
          </div>          
        </div>
      </div>      
    </section>

    <section id="icon">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline">
              <a href="https://twitter.com">
               <li class="list-inline-item"><i class="fab twitter fa-twitter-square fa-3x"></i></li>
              </a>
              <a href="https://facebook.com">
               <li class="list-inline-item"><i class="fab facebook fa-facebook-square fa-3x"></i></li>
              </a>
              <a href="https://google.com">
               <li class="list-inline-item"><i class="fab google fa-google-plus-square fa-3x"></i></li>
              </a>
              <a href="https://instagram.com">
               <li class="list-inline-item"><i class="fab instagram fa-instagram fa-3x"></i></li>
              </a>
            </ul>
          </div>          
        </div>
      </div>      
    </section>

    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-inline" role="form" method="post" action="#signup">
              <input type="email" name="email" class="form-control form-control-sm" placeholder="enter your email">
              <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
            </form>

            <?php echo $emailError;?>
            <?php echo $result;?>

          </div>          
        </div>
      </div>      
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <script>
      $(function() {
        $('.countdown').countdown({
          date: "June 7, 2087 15:03:26"
        });
      });
    </script>

  </body>
</html>