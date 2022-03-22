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
                    </tr>
                </thead>
                <?php
                    $id = $article->id;
                    $title = $article->title;
                    $description = $article->description;
                    $publishDate = $article->publishDate;
                    print'<tbody>
                    <tr>
                    <td>'.$id.'</td>
                    <td>'.$title.'</td>
                    <td>'.$description.'</td>
                    <td>'.$publishDate.'</td>               
                    </tr>
                    </tbody>';
                    ?>
            </table>
            <a href="#">Previous article</a>
            <a href="#">Next article</a>
        </div>  
    </body>
</html>

<?php require 'View/includes/footer.php'?>