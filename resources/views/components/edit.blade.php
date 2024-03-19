
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>task</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ToDo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="d-flex" role="search">

            </form>
        </div>
        </div>
    </nav>
    <form action="{{ route('update.task', $tasks->id) }}" method="POST">

        @method("PUT")
        @csrf

        <div class="container my-3">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input value="{{$tasks->title}}"type="text" name="title" class="form-control">
                @error('title')
                <p class="m-0 small alert alert-danger shadow-sm">
                    {{$message}}
                </p>
                 @enderror
            </div>
            <div class="form-floating mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" style="height: 100px">{{$tasks->description}}</textarea>
                @error('description')
                <p class="m-0 small alert alert-danger shadow-sm">
                    {{$message}}
                </p>
                 @enderror
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input value="{{$tasks->due_date}}" type="date" name="due_date" class="form-control">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" name="status">
                            <option selected>Status</option>
                            <option value="pending" {{$tasks->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{$tasks->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $tasks->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>

                        @error('status')
                        <p class="m-0 small alert alert-danger shadow-sm">
                            {{$message}}
                        </p>
                         @enderror
                    </div>

                </div>

            </div>
        </div>


        <div class="container -my-5">
            <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary  px-5">Update</button>
            </div>

        </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </tbody>
    </table>
</body>

</html>
