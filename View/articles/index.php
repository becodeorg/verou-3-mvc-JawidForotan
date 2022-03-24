<?php require 'View/includes/header.php'?>

<!doctype html>
<html lang="en">
    <head>
        <title>Articles Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
            <div class="container my-5">
                <div class="d-flex justify-content-start my-4">
                <button class="btn btn-primary me-5"><a href="./index.php?page=articles-create" class="text-light text-decoration-none">New article</a></button>
                <h1>Articles Page</h1>
                </div>
                <table class="table table-secondary">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Publish date</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <?php
                    foreach($articles as $article){
                        $id = $article->id;
                        $title = $article->title;
                        $publishDate = $article->publishDate;
                        print'<tbody>
                        <tr>
                        <td><a href="./index.php?page=articles-show&id='.$id.'">'.$id.'</a></td>
                        <td><b>'.$title.'</b></td>
                        <td>'.$publishDate.'</td>               
                        <td><button class="btn btn-danger"><a href="../index.php?action=delete&id='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
                        <td><button class="btn btn-primary"><a href="./index.php?action=update&id='.$id.'" class="text-light text-decoration-none">Update</a></button></td>
                        </tr>
                        </tbody>';
                    }
                    ?>
                </table>  
            </div>
        </body>
</html>

<?php require 'View/includes/footer.php'?>