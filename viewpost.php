<?php
session_start();
include './env.php';
$id= $_REQUEST['id'];
$query= "SELECT * FROM posts WHERE id='$id'";
$response= mysqli_query($conn, $query);
$post= mysqli_fetch_assoc($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="./hw7_validation.php">Add account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./allpost.php">Create account</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="col-lg-10 mx-auto mt-6">
    <div>
    <table class="table table-responsive">
    <tr>
      <th>id</th>
      <th>post title</th>
      <th>post detail</th>
      <th>post author</th>
      <th>post action</th>

    </tr>
    
        <tr>
            <td><?= $post['id'] ?> </td>

            <td> <?= $post['title'] ?></td>
            <td> <?= $post['detail'] ?></td>
            <td> <?= $post['author'] ?></td>
            <td>
                
                <a href="./editpost.php?id=<?= $post['id']?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="./controller/deletepost.php?id=<?=$post['id']?> " class="btn btn-sm btn-danger">Delete</a>
            </td>
    </tr>

</table>

</div>
</div>


    

</body>
</html>
<?php
session_unset();
?>