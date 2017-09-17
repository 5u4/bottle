<?php
include_once '../controllers/drinkButton.php';
include_once '../controllers/getExp.php';
include_once '../controllers/getGold.php';
include_once '../controllers/getLevel.php';
include_once '../controllers/getMaxExp.php';
include_once '../controllers/passButton.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>You can change this</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/nav.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="container-fluid" style="padding-top: 3%">
    <a href="../index.php"><button class="btn btn-default">HOME</button></a>
    <h2 class="text-center">My Garden</h2>
  <div class="panel panel-primary">
    <div class="panel-body">
  <style type="text/css">
  </style>
  <table class="table table-bordered">
    <tr>
      <th><img src="../assets/images/lv3.png" alt="tree" class="img-thumbnail center-block"></th>
      <th class="tg-yw4l"><img src="../assets/images/lv3.png" alt="tree" class="img-thumbnail center-block"></th>
      <th class="tg-yw4l"><img src="../assets/images/lv3.png" alt="tree" class="img-thumbnail center-block"></th>
    </tr>
    <tr>
      <td class="tg-yw4l"><img src="../assets/images/lv3.png" alt="tree" class="img-thumbnail center-block"></td>
      <td class="tg-yw4l" style="vertical-align: bottom"><img src="../assets/images/lv<?php echo getLevel(); ?>.png" alt="tree" class="img-thumbnail center-block"></td>
      <td class="tg-yw4l" style="vertical-align: bottom"><img src="../assets/images/lv1.png" alt="tree" class="img-thumbnail center-block"></td>
    </tr>
    <tr>
        <td class="tg-yw4l" style="vertical-align: bottom"><img src="../assets/images/lv1.png" alt="tree" class="img-thumbnail center-block"></td>
        <td class="tg-yw4l" style="vertical-align: bottom"><img src="../assets/images/lv1.png" alt="tree" class="img-thumbnail center-block"></td>
        <td class="tg-yw4l" style="vertical-align: bottom"><img src="../assets/images/lv1.png" alt="tree" class="img-thumbnail center-block"></td>
    </tr>
  </table>

  </div>
  </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
