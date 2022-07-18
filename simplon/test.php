<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>test</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    <form action="test-confirm.php" method="POST">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom">
      <label for="message">Message</label>
      <textarea id="message" name="message"></textarea>

      <label for="entreprise">entreprises</label>
      <select name="entreprise" id="entreprise">
        <option value="1" selected>low</option>
        <option value="2">medium</option>
        <option value="3">high</option>

        
        
      </select>
      <fieldset>
          <legend>Type</legend>
        <label>
          <input type="radio" name="type" value="1">
          Rgpd
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="2" checked>
          Suggestion
        </label>
        </fieldset>
        <label for="terms">
        <input type="checkbox" name="terms">
        I agree
        </label>
        <br>

        <button>Send</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>