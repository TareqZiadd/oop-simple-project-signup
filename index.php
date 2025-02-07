<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">

  </head>
  <body>



    <div class="container mt-5">
      <div class="form-signup">
        <h3 class="text-center">Sign Up</h3>
        
        <form action="includes/formhandler.inc.php" method="POST">
          <div class="mb-3">
            <input type="text" name="username" placeholder="Username" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="text" name="fullname" placeholder="Fullname" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" placeholder="E-mail" class="form-control" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create Account</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
