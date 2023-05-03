<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kiran Deokar">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../img/logo.webp" alt="logo">
        </div>
        <div class="text-center mt-4 name">
            Expense
        </div>
        <form class="p-3 mt-3" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="Email ID" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>

            <?php include '../db/signin.php' ?>

            <input class="btn mt-3" type="submit" value="Login" name="submit" />
        </form>
        <div class="text-center fs-6">
            <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Forget password?</a> or <a href="registration.php">Sign up</a>
        </div>
        <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog" style="width: 300px;">
                <div class="modal-content text-center">
                    <div class="modal-header h5 text-white bg-primary justify-content-center">
                        Password Reset
                    </div>
                    <div class="modal-body px-5">
                        <p class="py-2">
                            Enter your email address and we'll send you an email with instructions to reset your password.
                        </p>
                        <form method="post">
                        <div class="form-outline">
                            <input type="email" id="typeEmail" name="foremail" class="form-control my-3" placeholder="Email ID"/>
                        </div></form>
                       <script>
                        
                        document.getElementById("reset").innerText="Hello"
                        
                       </script>
                        <p id="password"></p>
                        <button class="btn btn-primary w-100" id="reset">Reset</button>
                        <div class="d-flex justify-content-between mt-4">
                            <a class="" href="login.php">Login</a>
                            <a class="" href="registration.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
                   
        </div>
    </div>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
                        
        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
        })

       
    </script>
</body>
</html>