<?php require 'View/includes/header.php'?>
<!doctype html>
<html lang="en">
    <head>
    <title>Show page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <h1 class="text-center my-4">Article details</h1>
            <table class="table table-secondary">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Publish date</th>
                        <th>Author</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <?php
                    print'<tbody>
                    <tr>
                    <td>'.$article->id.'</td>
                    <td>'.$article->title.'</td>
                    <td><textarea class="form-control" row="3">'.$article->description.'</textarea></td>
                    <td>'.$article->publishDate.'</td>               
                    <td>'.$article->author.'</td>               
                    <td>'.$article->image.'</td>               
                    </tr>
                    </tbody>';
                ?>
            </table>
            <div class="d-flex justify-content-center">
                <a href="#" class="m-2"><span>&#8592;</span>Previous article</a>
                <a href="#" class="m-2">Next article<span>&#8594;</span></a>
            </div>
        </div>  
    </body>
</html>
<?php require 'View/includes/footer.php'?>