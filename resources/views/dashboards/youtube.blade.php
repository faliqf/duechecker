@extends('dashboards.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Payment Record for Youtube Premium</h2>
            </div>
        </div>
    </div>

    <table class="table table-borderless">
        <tr>
            <th style='width:190px'>Month</th>
            @foreach ($customers as $key => $customer)
            <th style='text-align:center'>{{ $key }}</th>
            @endforeach
        </tr>
        <?php $i = 1; ?>
        @foreach ($months as $month)
        <tr>
            <td>{{ $month->name }}</td>
            @foreach ($customers as $payments)
                @foreach ($payments as $payment)
                    @if ($payment->month_id == $month->id)
                        <td style='text-align:center'><a class='fa fa-check'></a></td>
                    @endif
                @endforeach
            @endforeach 
        </tr>
        @endforeach
    </table>


@endsection