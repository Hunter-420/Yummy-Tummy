@extends('layouts.dashboard')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

    <div class="pt-10 mt-10">
        <div class="table-responsive">
            <table class="table" class="">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Available Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($products as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->food_name}}</td>
                        <td>
                            <img src="{{ url('products/'.$data->food_image) }}"
                                style="height: 100px; width: 150px;">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" {{ $data->is_available == 1 ? 'checked' : 'unchecked' }}
                                    {{ $data->is_available == 1 ? 'disabled' : 'disabled' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </td>
                        <td>{{$data->quantity_available}}</td>
                        <td>{{$data->food_price}}</td>
                        <td><a  href="{{ route('admin.editProduct',$data->id) }}">  <img src="{{ url('icons/pen-solid.svg') }}"
                                style="height: 30px; width: 30px;"></a>
                        
                    </td>
                    <td><a  href="{{ route('admin.deleteProduct',$data->id) }}"><img src="{{ url('icons/trash-solid.svg') }}"
                                style="height: 30px; width: 30px;"></a></a>
                    </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


        <style>
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;

    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #343a40;
        color: white;
    }

    tbody {
        display: block;
        max-height: 100vh; /* Set max height to 100% of the viewport height */
        overflow-y: auto;
    }

    tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    thead, tbody tr {
        display: table;
        width: calc(100% - 18px); /* Adjust for the scrollbar width */
    }
</style>

</body>

</html>
@endsection
