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

            <div class="col-md-12">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" value="{{$student->name}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input name="city" type="text" class="form-control"  value="{{$student->city}}">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Marks</label>
                        <input name="marks" type="number" class="form-control"  value="{{$student->marks}}">
                      </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>