<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    table {
        width: 100%;
    }

    th, td {
        white-space: nowrap;
    }

    th, td:first-child {
        text-align: left;
    }

    th, td:not(:first-child) {
        text-align: center;
    }

    th, td {
        padding: 0.5rem;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    @media (max-width: 767.98px) {
        th, td {
            display: block;
            width: 100%;
        }

        th {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        td {
            padding: 0.5rem 0;
        }
    }
</style>
  <body>
    <div class="container">
      <h1 class="text-center">Employee List</h1>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Sr</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employees as $employee)
              <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->contact }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>