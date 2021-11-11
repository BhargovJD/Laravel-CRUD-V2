<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD-V2</title>
  </head>
  <body>

    <div class="container">
        <div class="row">

            {{-- Form insert --}}
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf

                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input name="name" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input name="city" type="text" class="form-control">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Marks</label>
                        <input name="marks" type="number" class="form-control">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

                  @if (session()->has('status'))
                      <div class="alert alert-success">
                          {{session('status')}}
                      </div>
                  @endif
            </div>

            {{-- Display data in table --}}
            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Marks</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                        <tr>
                            <th>{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td><a href="{{url('/edit',$stu->id)}}" class="btn btn-warning">Edit</a></td>
                            <td><a href="{{url('/delete',$stu->id)}}" class="btn btn-danger">Delete</a></td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>