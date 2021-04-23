    <?php  

        session_start();
        $var=$_SESSION['user'];
        if (isset($_POST["logout"])) {
            header("location: son.php");
        }

    ?>




    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <title>Document</title>
    </head>
    <body>
        
        <header class="site-header sticky-top py-1">
                <nav class="container d-flex flex-column flex-md-row justify-content-between">
                    <a class="py-2" href="#" aria-label="Product">
                        <img src="kaya.png" alt="">
                    </a>
                    <div id="kav">
                        <a class="py-2 d-none d-md-inline-block" href="#">Accueil</a>
                        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
                        <a class="py-2 d-none d-md-inline-block" href="son.php">Login</a>
                        <form method='post'>
                        <button type='submit' class='logout' name='logout'> LOGOUT </button> 
                        </form>
                    </div>
                </nav>
            </header>

    <div class="container-fluid">
        <p class="welcome">Welcome</p>
        <p class="nam"><?php echo $var; ?> </p>
    </div>

    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    </body>
    </html>