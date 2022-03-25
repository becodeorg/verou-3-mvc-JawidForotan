<!doctype html>
<html lang="en">
<head> 
    <title>php crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-primary"><a href="index.php" class="text-light text-decoration-none">Home</a></button>
    </div>
    <div class="container my-5 p-4 bg-secondary">
        <form action="" method="POST" class="my-5">
                <div class="form-group my-3">
                    <label class="form-label fw-bold text-light">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $article->title?>">
                </div>
                <div class="my-3">
                    <label class="form-label fw-bold text-light">Description</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Description"><?php echo $article->description?></textarea>
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold text-light">Publish date:</label>
                    <input type="text" class="form-control" name="publishDate" placeholder="Publish date" value="<?php echo $article->publishDate?>">
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold text-light">Author:</label>
                    <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo $article->author?>">
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold text-light">Image:</label>
                    <input type="text" class="form-control" name="image" placeholder="Image" value="<?php echo $article->image?>">
                </div>
                <div class="form-group my-3 ">
                    <button  name="update" class="btn btn-primary">Update article</button>
                </div>      
        </form> 
    </div>
</body>
</html>