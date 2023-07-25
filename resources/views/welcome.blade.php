<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Post Slug </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-8">
                    {{-- <div class="card-header">
                        {{ Session::get('message') }}
                </div> --}}
                <div class="">

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <form action="{{ route('add.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">
                                <h3> Enter Blog Title </h3>
                            </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Your Blog Title"> <br>
                            <input type="text" class="form-control" name="slug" id="slug" style="pointer-event:none"> <br>
                            <button type="submit" class="btn btn-primary">Create Post </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        $('#title').keyup(function(e){
            // alert();
            $get('{{ url('check_slug') }}',
           {'title': $('#title').val() },
           function(data){
            $('#slug').val(data.slug)
           }
            );
        })
    </script>
</body>
</html>
