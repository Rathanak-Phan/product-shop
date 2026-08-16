<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center">
       <form action="/register" method="POST" class="col-xl-4 col-md-6 col-12">
            <h1 class="text-center my-5">Register form</h1>

            <div class="my-3">
                <label for="" class="form-label">First name: </label>
                <input type="text" name="first_name" class="form-control">
            </div>

            <div class="my-3">
                <label for="" class="form-label">Last name: </label>
                <input type="text" name="last_name" class="form-control">
            </div>

            <div class="my-3">
                <label for="" class="form-label">Email: </label>
                <input type="email" name="email" class="form-control">
                <?php if (isset($errorEmail)) { ?>
                    <p id="error_email" class="text-danger mt-1" style="font-size: 10px;"><?= $errorEmail ?></p>

                    <script>
                        setTimeout(() => {
                            document.getElementById("error_email").style.display = 'none';
                        }, 3000)
                    </script>
                <?php } ?>
            </div>

            <div class="my-3">
                <label for="" class="form-label">Password: </label>
                <input type="password" name="password" class="form-control">
                <?php if (isset($errorPassword)) { ?>
                    <p id="error_password" class="text-danger mt-1" style="font-size: 10px;"><?= $errorPassword ?></p>

                    <script>
                        setTimeout(() => {
                            document.getElementById("error_password").style.display = 'none';
                        }, 3000)
                    </script>
                <?php } ?>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <p class="text-center">If you don't have account ?<a href="/login">Login</a></p>
       </form> 
    </div>
</body>
</html>