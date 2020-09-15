@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="section section-header">
                <h2>Add products</h2>
            </section>  
            <br><br>
            <form class="form-groups" action="" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Item Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" required="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Type</label>
                        <div class="col-md-8">
                            <input type="text" name="type" class="form-control" required="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Amount</label>
                        <div class="col-md-8">
                            <input type="number" name="amount" class="form-control" required="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Serial No.</label>
                        <div class="col-md-8">
                            <input type="text" name="serial_no" class="form-control" required="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-info btn-block" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
