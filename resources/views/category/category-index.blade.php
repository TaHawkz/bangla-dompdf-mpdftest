<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container-fluid p-4 bg-danger text-dark text-center">
        <h1>Categories</h1>
    </div>

    <div class="container-fluid p-4  text-dark text-center">
        <h2>All Categories!</h2>
    </div>



    <div class="container mb-5">

        <a href="/category-create" class="btn btn-outline-dark float-end" type="button">Add New
            Category</a>
        {{--  <a href="#link" class="btn btn-info" role="button">Link Button</a>  --}}

    </div>

    <div class="container mt-3 ">
        <div class="table-responsive-sm text-center ">
            <table class="table table-success table-bordered  table-striped table-hover text-center">
                <thead class="table-dark ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Comments</th>
                        <th class="col-sm-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="align-middle">{{ $loop->index + 1 }}</td>
                            <td class="align-middle">{{ $category['category_name'] }}</td>
                            <td class="align-middle">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse">
                                            View Comments
                                        </a>
                                    </div>
                                    <div id="collapse" class="collapse" data-bs-parent="#accordion">

                                        @foreach ($category->comments as $comment)
                                            <p>Comment {{ $loop->index + 1 }}: "{{ $comment->body }} "</p>
                                        @endforeach

                                    </div>
                                </div>

                            </td>

                            <td class="align-middle">
                                <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-info"
                                    type="button">Edit</a>

                                /
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger rounded-4" style="width:100px"
                                    data-bs-toggle="modal" data-bs-target="#delete{{ $category->id }}">
                                    Delete
                                </button>

                                <!-- Modal when post method is used to delete-->
                                <div class="modal fade " id="delete{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete? {{ $category->id }}
                                            </div>
                                            <form action="{{ route('category.delete', $category->id) }}" method="post">
                                                @csrf
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">No, Cancel</button>
                                                    <button type="submit" class="btn btn-outline-danger">Yes,
                                                        Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                                <!-- Modal when delete function is used-->
                                {{-- <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete? {{ $category->id }}
                                            </div>
                                            <form action="{{ route('category.delete', $category->id) }}" method="post">
                                                @csrf
                                                @method("delete")
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>


</body>

</html>
