@extends('months.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Month</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
                <a class="btn btn-success" href="{{ route('months.create') }}"> Create New Month</a>
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
            <th>In Number</th>
            <th width="200px">Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($months as $month)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $month->name }}</td>
            <td>{{ @$month->in_number }}</td>
            <td>
                <form action="{{ route('months.destroy',$month->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('months.edit',$month->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection