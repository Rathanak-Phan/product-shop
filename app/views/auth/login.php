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
        <form action="/login" method="POST" class="col-xl-4 col-md-6 col-12">
            <h1 class="text-center my-5">Login form</h1>

            <div class="my-3">
                <label for="" class="form-label">Email: </label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="my-3">
                <label for="" class="form-label">Password: </label>
                <input type="text" name="password" class="form-control">
            </div>

            <div>
                <?php if (isset($errorLogin)) { ?>
                    <p id="error_login" class="text-light bg-danger mt-1 alert " style="font-size: 10px;"><?= $errorLogin ?></p>

                    <script>
                        setTimeout(() => {
                            document.getElementById("error_login").style.display = 'none';
                        }, 3000)
                    </script>
                <?php } ?>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <p class="text-center">If you don't have account ?<a href="/register">Register</a></p>
       </form> 
    </div>
</body>
</html>