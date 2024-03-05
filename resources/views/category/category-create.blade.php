<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid p-4 bg-danger text-dark text-center">
        <h1>Categories</h1>
    </div>

    <div class="container-fluid p-4  text-dark text-center">
        <h2>Create a new table!</h2>
    </div>


    <div class="container mt-3">

        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <div class="mb-3">
                <label for="category_name">Catagory name:</label>
                <input type="text" class="form-control" id="category_name" placeholder="Enter category name"
                    name="category_name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>





</body>

</html>
