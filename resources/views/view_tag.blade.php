<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>view tag</title>
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

    <table class="table table-striped">
        <thead>
            <tr>

                <th  class="col-sm-5 col-md-6">Task Id</th>
                <th class="col-sm-5 offset-sm-2 col-md-6 offset-md-0" >
                    Tag name</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tag as $tag)
                <tr class="fw-normal">

                    <td class="align-middle">
                        <span>{{ $tag->task->title }}</span>
                    </td>
                    <td class="align-middle">
                        <h6 class="mb-0"><span
                                class="ms-2">{{ $tag->tag_name }}</span></h6>


                </tr>
            @endforeach

        </tbody>
    </table>

          </div>
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
</body>
</html>
