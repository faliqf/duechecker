@extends('payments.layout')

@section('content')

<br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="center">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Customer List</a>
            <br><br>
            <a class="btn btn-primary" href="{{ route('payments.index') }}"> Payment List</a>
            <br><br>
            <a class="btn btn-primary" href="{{ route('items.index') }}"> Item List</a>
            <br><br>
            <a class="btn btn-primary" href="{{ route('months.index') }}"> Month List</a>
        </div>
    </div>
</div>



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