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

<form action="{{ route('payments.update',$payment->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <select class="form-control" name="customer_id" id="customer_id" >
                @foreach($customers as $customer)
                   <option  value={{ $customer->id }} {{ $payment->customer_id == $customer->id ? 'selected' : ''}} >{{ $customer->name }}</option>
                @endforeach
                </select>



            </div>
                <strong>Date Pay:</strong> 
                <input data-provide="datepicker" name='payment_date' value = {{ $payment->payment_date ?? '' }}>
                <br><br>

                <strong>Amount:</strong> 
                <input name='amount' id='amount' value = {{ $payment->amount ?? '' }}>

                <br><br>
                <strong>Pay for:</strong>
                <select class="form-control" name="item_id" id="item_id" >
                @foreach($items as $item)
                   <option  value={{ $item->id }}  {{ $payment->item_id == $item->id ? 'selected' : ''}}>{{ $item->name }}</option>
                @endforeach
                </select>
                <br>
                <strong>Month:</strong>
                <select class="form-control" name="month_id" id="month_id" >
                @foreach($months as $month)
                   <option  value={{ $month->id }}  {{ $payment->month_id == $month->id ? 'selected' : ''}}>{{ $month->name }}</option>
                @endforeach
                </select>
        </div>
    </div>
<br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
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