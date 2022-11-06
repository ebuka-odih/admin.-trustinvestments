@extends('admin.layout.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home
                </a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 10px;">
                <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                <coingecko-coin-price-marquee-widget currency="usd" coin-ids="bitcoin,ethereum,eos,ripple,litecoin" locale="en"></coingecko-coin-price-marquee-widget>
            </div>
            <div class="col-sm-12">
            </div>
        </div>

        <div class="row">




            <div class="col-md-12">
                <div class="box box-solid bg-dark">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user"></i> NEW CUSTOMERS</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-xs table-border">

                                <thead class="text-uppercase bg-primary">
                                <tr class="text-white">
                                    <th scope="col">ACCOUNT INFO</th>
                                    <th scope="col">EQUITY</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                <tr role="row" class="even">

                                    <td>{{ $item->name }}<br>{{ $item->email }}  </td>
                                    <td>  BALANCE: <b> $@convert($item->balance)</b><br>
                                        BONUS: <b> $@convert($item->bonus)</b><br>
                                        PROFIT: <b> $@convert($item->profit)</b><br>
                                        INVESTMENT: <b> $@convert($item->investment)</b><br>
                                    </td>
                                    <td>
                                        <form  method="POST" action="{!! route('admin.deleteUser', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="client_id" value="38">

                                            <a href="{{ route('admin.editEquity', $item->id) }}" class="btn btn-primary btn-sm btn-icon " style="margin: 3px">  Edit Equity</a>

                                                <button type="submit" class="btn btn-danger btn-sm btn-icon icon-left js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Custome?&quot;)">
                                                    <i class="entypo-cancel"></i>Delete Customer
                                                </button>


{{--                                            <button class="btn btn-danger btn-sm btn-icon icon-left" name="delete_client" style="margin: 3px"><i class="entypo-cancel"></i>Delete Customer</button>--}}

                                        </form>
                                        <div>
                                            <a href="{{ route('admin.profile', $item->id) }}" class="btn btn-info btn-sm btn-icon icon-left" style="margin: 3px"> <i class="entypo-info"></i>View Profile </a>
                                            <a href="{{ route('admin.billing', $item->id) }}" class="btn btn-success btn-sm btn-icon icon-left" style="margin: 3px"> <i class="entypo-info"></i>Set Billing </a>
                                            @if($item->wt_status == 0)
                                                <a  href="{{ route('admin.openWithdraw', $item->id) }}" class="btn btn-success btn-sm btn-icon icon-left" style="margin: 3px">OPEN WITHDRAW</a>
                                            @else
                                                {{--                                                    @if($item->wt_status > 2)--}}
                                                <a  href="{{ route('admin.closeWithdraw', $item->id) }}" class="btn btn-danger btn-sm btn-icon icon-left" style="margin: 3px">CLOSE WITHDRAW</a>

                                                @if($item->wt_suspense == 0)
                                                    <a  href="{{ route('admin.unsuspendWithdraw', $item->id) }}" class="btn btn-danger btn-sm btn-icon icon-left" style="margin: 3px">UNSUSPEND WITHDRAW</a>
                                                @else
                                                    <a  href="{{ route('admin.suspendWithdraw', $item->id) }}" class="btn btn-success btn-sm btn-icon icon-left" style="margin: 3px">SUSPEND WITHDRAW</a>
                                                    {{--                                                    <a  href="{{ route('admin.closeWithdraw', $item->id) }}" class="btn btn-danger btn-sm btn-icon icon-left" style="margin: 3px">CLOSE WITHDRAW</a>--}}
                                                @endif

                                            @endif
                                        </div>
                                    </td>
                                    @if(session()->has('opened'))
                                        <div class="alert alert-success">
                                            {{ session()->get('opened') }}
                                        </div>
                                    @endif
                                    @if(session()->has('closed'))
                                        <div class="alert alert-success">
                                            {{ session()->get('closed') }}
                                        </div>
                                    @endif
                                    @if(session()->has('unsuspended'))
                                        <div class="alert alert-success">
                                            {{ session()->get('unsuspended') }}
                                        </div>
                                    @endif
                                    @if(session()->has('suspended'))
                                        <div class="alert alert-success">
                                            {{ session()->get('suspended') }}
                                        </div>
                                    @endif
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>


        </div>
        <!-- End Row -->





@endsection
