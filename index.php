<?php
  include 'php/contact-form.php';
?>

<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tamato | Contact Form</title>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Angular -->
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js">
    </script>
  </head>
  
  <body>
    <div class="container">
      <div class="jumbotron text-center">
        <h2>Bootstrap Contact Form with Validation</h2>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-3">
      
      <form class="form-horizontal" role="form" method="post" action="http://contactform.tamato.org/" 
        name="myform" novalidate>

        <div class="form-group text-center">
          <div class="col-sm-12">
            <?php echo $result; ?>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" name="name"
              placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>"
              ng-model="user.name" ng-required="true">
            <span class="error" ng-show="myform.name.$invalid && myform.name.$touched">
              Please enter your name.</span>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" name="email" 
              placeholder="example@domain.com"
              value="<?php echo htmlspecialchars($_POST['email']); ?>"
              ng-model="user.email" ng-required="true">
            <span class="error" ng-show="myform.email.$invalid && myform.email.$touched">
              Please enter a valid email.</span>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-12">
            <textarea class="form-control" rows="4" name="message" 
              ng-model="user.message" ng-required="true" placeholder="Message...">
              <?php echo htmlspecialchars($_POST['message']);?>
            </textarea>
            <span class="error" ng-show="myform.message.$invalid && myform.message.$touched">
              Please enter your message.</span>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="human" name="human"
              placeholder="2 + 3 = ?" ng-model="user.human" ng-required="true">
            <span class="error" ng-show="myform.human.$invalid && myform.human.$touched">
              Please enter an answer.
            </span>
            <span class="error" ng-if="myform.human.$touched && user.human !== '5'">
              Your answer is incorrect.
            </span>

          </div>
        </div>
        
        <div class="form-group text-center">
          <div class="col-sm-12">
            <input id="submit" name="submit" type="submit" value="Send"
              class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
