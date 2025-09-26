@extends('Products.layout');
@section('content')

<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Produk Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company:</strong>
                <select name="machine_id" class="form-control">
                    <option value="">Select Company</option>
                    @foreach($machines as $machine)
                    <option value="{{ $machine->id }}">{{ $machine->company }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product:</strong>
                    <input type="text" name="product" class="form-control" placeholder="Product">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input type="text" name="detail" class="form-control" placeholder="Detail">
                </div>
            </div>
            
            <label for="status"><strong>Status:</strong></label>
            <input type="radio" name="status" class="btn-check" name="option" value="Onprocess" id="success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="success-outlined">Onprocess</label>

            <input type="radio" name="status" class="btn-check" name="option" value="Finished" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" for="danger-outlined">Finished</label>

            <input type="radio" name="status" class="btn-check" name="option" value="checked" id="warning-outlined" autocomplete="off">
            <label class="btn btn-outline-warning" for="warning-outlined">Checked</label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


    
</form>
@endsection

