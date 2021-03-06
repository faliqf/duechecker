@extends('customers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
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
            <th width="200px">Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $customer->name }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $customers->links() !!}

@endsection