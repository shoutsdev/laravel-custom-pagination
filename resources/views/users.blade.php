<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .page-item.active .page-link{
            z-index: 3;
            color: #fff !important  ;
            background-color: #000000 !important;
            border-color: #000000 !important;
            border-radius: 50%;
            padding: 6px 12px;
        }
        .page-link{
            z-index: 3;
            color: #000000 !important;
            background-color: #fff;
            border-color: #000000;
            border-radius: 50%;
            padding: 6px 12px !important;
        }
        .page-item:first-child .page-link{
            border-radius: 10% !important;
        }
        .page-item:last-child .page-link{
            border-radius: 10% !important;
        }
        .pagination li{
            padding: 3px;
        }
        .disabled .page-link{
            color: #212529 !important;
            opacity: 0.5 !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 10 Custom Pagination Example Tutorial - <span class="text-dark">shouts.dev</span></h4>
                </div>
                <div class="card-footer">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $key => $user)
                            <tr>
                                <td>{{ $users->firstItem() + $key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">There Are no Data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        {{ $users->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
