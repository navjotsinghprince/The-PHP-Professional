<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Navigation</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>

<body>
  <!-- include = If there is an error in the file or if the file is not found, it will still run the subsequent code, 
    essentially using it for the design part -->

  <?php include 'header.php'; ?> <!-- header file is here -->

  <div class="content">
    <!-- require = If there is an error in the file or if the file is not found, the subsequent code will not run,
    essentially using it for the database part -->

    <?php require 'img-container.php'; ?> <!-- image container file here -->

    <?php include_once 'paragraph.php'; ?> <!-- paragraph file is here -->

    <!-- It will include the file only once, even if the include code is mistakenly written three times -->
    <?php require_once 'paragraph.php' ?>
  </div>
</body>

</html>