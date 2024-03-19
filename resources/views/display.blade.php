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
    <section class="vh-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10">

                    <div class="card mask-custom">
                        <div class="card-body p-4 text-white">

                            <div class="text-center pt-3 pb-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                                    alt="Check" width="60">
                                <h2 class="my-4">Task List</h2>
                            </div>



                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1" data-bs-whatever="">Add Task</button>
                            <div class="modal fade" id="exampleModal1" tabindex="-1"
                                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ route('store.data') }}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label class="col-sm-2 form-label">Title</label>
                                                    <input value="{{ old('title') }}"type="text" name="title"
                                                        class="form-control">
                                                    @error('title')
                                                        <p class="m-0 small alert alert-danger shadow-sm">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <label class="col-sm-2 form-label">Description</label>
                                                    <textarea value="{{ old('description') }}" class="form-control" name="description" style="height: 100px"></textarea>
                                                    @error('description')
                                                        <p class="m-0 small alert alert-danger shadow-sm">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>

                                                <div class="row g-2">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input value="{{ old('due_date') }}" type="date"
                                                                name="due_date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <select class="form-select" name="status">
                                                                <option selected>Status</option>
                                                                <option value="pending"
                                                                    {{ old('status') == 'pending' ? 'selected' : '' }}>
                                                                    Pending</option>
                                                                <option
                                                                    value="completed"{{ old('completed') == 'completed' ? 'selected' : '' }}>
                                                                    Completed</option>
                                                                <option
                                                                    value="cancelled"{{ old('cancelled') == 'cancelled' ? 'selected' : '' }}>
                                                                    Cancelled</option>
                                                            </select>

                                                            @error('status')
                                                                <p class="m-0 small alert alert-danger shadow-sm">
                                                                    {{ $message }}
                                                                </p>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary text-light">Save</button>
                                        </div>

                                    </div>

                                    </form>

                                </div>



                            </div>


                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2" data-bs-whatever=""> Add Tag</button>

                            <div class="modal fade" id="exampleModal2" tabindex="-1"
                                aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ route('tags.store') }}" method="POST">
                                                @csrf

                                                <div class="col-md">
                                                    <div class="form-floating">



                                                        <select id="task_id" name="task_id" class="form-select">
                                                            @foreach($tasks as $task)
                                                               <option value="{{ $task->id}}">{{ $task->title}}</option>
                                                            @endforeach
                                                            </select>


                                                        @error('status')
                                                            <p class="m-0 small alert alert-danger shadow-sm">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>

                                                </div>

                                                    <div class="mb-3">
                                                        <label class="col-sm-2 form-label">Tag Name</label>
                                                        <input value="{{ old('tag_name') }}"type="text"
                                                            name="tag_name" class="form-control">
                                                        @error('tag_name')
                                                            <p class="m-0 small alert alert-danger shadow-sm">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">submit</button>
                                                        </div>

                                                    </div>

                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Team Member</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr class="fw-normal">
                                        <th>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                                alt="avatar 1" style="width: 45px; height: auto;">
                                            <span class="ms-2">Alice Mayer</span>
                                        </th>
                                        <td class="align-middle">
                                            <span>{{ $task->title }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span
                                                    class="ms-2">{{ $task->description }}</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span
                                                class="ms-2">{{ $task->due_date }}</span></h6>
                                        </td>
                                        <td class="align-middle">
                                            @if ($task->status == 'pending')
                                                <h6 class="mb-0"><span
                                                        class="badge bg-warning">{{ $task->status }}</span></h6>
                                            @elseif($task->status == 'completed')
                                                <h6 class="mb-0"><span
                                                        class="badge bg-success">{{ $task->status }}</span></h6>
                                            @elseif($task->status == 'cancelled')
                                                <h6 class="mb-0"><span
                                                        class="badge bg-danger">{{ $task->status }}</span></h6>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <button type="edit" class="btn btn-primary">
                                                <a href="{{ route('show.form', $task->id) }}"
                                                    class="text-light">Edit</a>
                                            </button>
                                            <button type="delete" class="btn btn-danger">
                                                <a href="{{ route('delete.task', $task->id) }}"
                                                    class="text-light">Remove</a>
                                            </button>


                                            <button type="submit" class="btn btn-warning">
                                                <a href="{{ route('tags.show', $task->id) }}"
                                                    class="text-light">View tag</a>
                                            </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>


                </div>


            </div>
        </div>
        </div>
    </section>


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
