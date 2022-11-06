@extends('admin.layout.app')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 10px;">
            <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
            <coingecko-coin-price-marquee-widget currency="usd" coin-ids="bitcoin,ethereum,eos,ripple,litecoin" locale="en" vce-ready=""></coingecko-coin-price-marquee-widget>
        </div>
        <div class="col-sm-12">
        </div>
    </div>

    <div class="row">




        <div class="col-md-12">
            <div class="box box-solid bg-dark">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user"></i> CUSTOMER PROFILE</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-xs table-border">
                                <thead class="bg-secondary">
                                <tr>
                                    <th>Fullname:</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>

                                <tr>
                                    <th>Balance:</th>
                                    <td>$@convert($user->balance) </td>
                                </tr>
                                <tr>
                                    <th>Profit:</th>
                                    <td>$@convert($user->profit) </td>
                                </tr>
                                <tr>
                                    <th>Bonus:</th>
                                    <td>$@convert($user->bonus)</td>
                                </tr>
                                <tr>
                                    <th>Investment:</th>
                                    <td>$@convert($user->investment) </td>
                                </tr>

                                </thead>
                            </table>
                        </div>
                        <form action="{{ route('admin.storeEquity') }}" method="POST">
                            @csrf
                            @if(session()->has('added'))
                                <div class="alert alert-success">
                                    {{ session()->get('added') }}
                                </div>
                            @endif
                            @if(session()->has('subtract'))
                                <div class="alert alert-success">
                                    {{ session()->get('subtract') }}
                                </div>
                            @endif
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label for="">Balance</label>
                                <input type="number" class="form-control" name="balance" placeholder="Enter Amount...">
                            </div>
                            <div class="form-group">
                                <label for="">Profit</label>
                                <input type="number" class="form-control" name="profit" placeholder="Enter Amount...">
                            </div>
                            <div class="form-group">
                                <label for="">Bonus</label>
                                <input type="number" class="form-control" name="bonus" placeholder="Enter Amount...">
                            </div>
                            <div class="form-group">
                                <label for="">Investment</label>
                                <input type="number" class="form-control" name="investment" placeholder="Enter Amount...">
                            </div>
                            <button type="submit" style="border-radius: 0PX" name="add" value="add" class="btn btn-success mt-4 pr-4 pl-4">Add (+)</button>
                            <button type="submit" style="border-radius: 0PX" name="subtract" value="subtract" class="btn btn-danger mt-4 pr-4 pl-4">Subtract (-)</button>
                            <a href="{{ route('admin.dashboard') }}" style="border-radius: 0PX" class="btn btn-primary mt-4 pr-4 pl-4">GO BACK</a>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>


    </div>
    <!-- End Row -->



</section>

@endsection
