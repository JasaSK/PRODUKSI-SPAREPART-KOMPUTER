<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="slide-navbar-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

 <div class="logo"><i class="fa-solid fa-house-laptop"></i></div>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
                <form>
                    <label for="chk" aria-hidden="true">Register</label>
                    <input type="text" name="txt" placeholder="User name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <!-- <input type="number" name="broj" placeholder="BrojTelefona" required=""> -->
                    <input type="password" name="pswd" placeholder="Password" required="">
                    <input type="password" name="pswd" placeholder="Konfirmasi Password" required="">
                    <button>Sign up</button>
                </form>
            </div>

            <div class="login">
                <form>
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="pswd" placeholder="Password" required="">
                    <button>Login</button>
                </form>
            </div>
        </div>

        <div id="snackbar">Login Success</div>

        <script>
            // Function to show the snackbar
            function showSnackbar() {
                var snackbar = document.getElementById("snackbar");
                snackbar.className = "show"; 
                setTimeout(function () {
                    snackbar.className = snackbar.className.replace("show", ""); 
                }, 3000);
            }
            document.querySelector('.login form').addEventListener('submit', function(event) {
                event.preventDefault();
                showSnackbar(); 
            });
        </script>
    </body>

    </html>
</body>

</html>