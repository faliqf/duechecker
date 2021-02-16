@extends('payments.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Payment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
                <a class="btn btn-success" href="{{ route('payments.create') }}"> Create New Payment</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Pay for</th>
            <th>Payment Date</th>
            <th width="200px">Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($payments as $payment)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $payment->customer->name }}</td>
            <td>{{ @$payment->item->name }}</td>
            <td>{{ $payment->payment_date }}</td>
            <td>
                <form action="{{ route('payments.destroy',$payment->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('payments.edit',$payment->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $payments->links() !!}

@endsection