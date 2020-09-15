@extends('layouts.app')

@section('content')
<div class="coontainer">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Shop Items</div>

                <div class="card-body">
                    <div style="float: right;">
                        |
                        <a href="{{ get('addProduct') }}"><button class="btn btn-primary">Add Products</button></a>
                        |
                    </div>
                    <hr>
                    <br>
                    <table class="table talble-dark">
                        <thead class="table-dark">
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Serial No.</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="table-dark">
                            <tr>
                                <?php 
                                    $products = array();
                                    $product_sample = array( 0 => [1, 'product1', 'type1', 3000, '3234A'],
                                                        1 => [1, 'product2', 'type3', 4500, '3887A']);
                                ?>
                                @forelse ($records as $item)
                                    <td>{{ $records->id }}</td>
                                    <td>{{ $records->name }}</td>
                                    <td>{{ $records->description }}</td>
                                    <td>{{ $records->amount }}</td>
                                    <td>{{ $records->serial_no }}</td>
                                    <td>
                                        |
                                        <a href=""><button class="btn btn-warning">Edit Products</button></a>
                                        |
                                        <a href=""><button class="btn btn-danger">Delete Products</button></a>
                                        |
                                    </td>
                            </tr>
                            @empty
                            <td>
                                <td colspan="6">No records found</td>
                            </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection