<?php echo "Hello from create form"?>
<!doctype html>
<html lang="en">
<head> 
    <title>php crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 p-4 bg-secondary">
        <div>
            <button class="btn btn-primary"><a href="index.php" class="text-light text-decoration-none">Home</a></button>
        </div>
        <form action="../index.php?action=create" method="POST" class="my-5">
                <h1>Add new article</h1>
                <hr class="mb-5">
                <div class="form-group my-3">
                    <label class="form-label fw-bold">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="my-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold">Publish date:</label>
                    <input type="text" class="form-control" name="publishDate" placeholder="Publish date">
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold">Author:</label>
                    <input type="text" class="form-control" name="author" placeholder="Author">
                </div>
                <div class="form-group my-3">
                    <label class="form-label fw-bold">Image:</label>
                    <input type="text" class="form-control" name="image" placeholder="Image">
                </div>
                <div class="form-group my-3 ">
                    <button  name="submit" class="btn btn-primary">Add new article</button>
                </div>      
        </form> 
    </div>
</body>
</html>