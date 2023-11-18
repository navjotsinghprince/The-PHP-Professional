<?php
  if(isset($_POST['submit'])){
    $emailTo="terminaterboyz@gmail.com";
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];

    if(mail($emailTo,$subject,$content,$headers)){
      echo '<div class="container alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div> 
            <script>
             $("form").reset();
            </script>';
    }else{
      echo '<div class="container alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>
            <script>
        
            </script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> PHP Send Email Example With Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
  </head>
  <body>
      <div class='container'>
      <h1>Get in touch!</h1>
      <div id='error'></div>

      <form method='POST'>
        <fieldset class='form-group'>
          <label for='email'>Email address</label>
          <input type='email' class='form-control' id='email' name='email'>
          <small class='text-muted'>we'll never share your email with anyone else</small>
        </fieldset>
        <fieldset class='form-group'>
          <label for='subject'>Subject</label>
          <input type='text' class='form-control' id='subject' name='subject'>
        </fieldset>
        <fieldset class='form-group'>
          <label for='content'>What you would like to ask us ?</label>
          <textarea class='form-control' id='content' name='content' rows='3'></textarea>
        </fieldset>
        <input type='submit' id='submit' name="submit" class='btn btn-primary'/>
      </form>
</div>
   <script type='text/javascript'>
     $('form').submit(function(e){
       var error='';

       if($('#email').val()==""){
         error +="The email field is required.<br>"
       }
       if($('#subject').val()==""){
         error +="The subject field is required.<br>"
       }
       if($('#content').val()==""){
         error +="The content field is required.<br>"
       }
       if(error !=""){
         $("#error").html('<div class="alert alert-danger"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>')
         return false;
       }else{
         return true;
       }
     });
   </script>    
  </body>
</html>
