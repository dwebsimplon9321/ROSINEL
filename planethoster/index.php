<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="mailer.php " method="POST"></form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="form-group">
                <textarea class="form-control" name="text" rows="3" placeholder="Your Message"></textarea>
                <button class="btn btn-default" type="submit">Send Message</button>
                
</div>

</body>
</html>