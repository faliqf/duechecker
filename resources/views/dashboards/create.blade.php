@extends('payments.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Payment</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
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

<form action="{{ route('payments.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <select class="form-control" name="customer_id" id="customer_id" >
                @foreach($customers as $customer)
                   <option  value={{ $customer->id }} >{{ $customer->name }}</option>
                @endforeach

                <input data-provide="datepicker" name='payment_date'>


            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </select>
    </div>

</form>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        }); 
    });

</script> 
@endsection