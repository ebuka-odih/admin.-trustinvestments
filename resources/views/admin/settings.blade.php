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
                    <h3 class="box-title"><i class="fa fa-user"></i> LOGIN SETTINGS</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <form method="POST" action="{{ route('admin.storePassword') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" name="current_password" required="" placeholder="Enter Current Password...">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="text" class="form-control" name="new_password" required="" id="exampleInputPassword1" placeholder="Enter New Password...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="text" class="form-control" name="new_confirm_password" required="" id="exampleInputPassword1" placeholder="Confirm Password...">
                        </div>
                        <button type="submit" style="border-radius: 0px" name="save-auth__XX" class="btn btn-primary mt-4 pr-4 pl-4">SAVE SETTINGS</button>
                    </form>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>



        <div class="col-md-12">
            <div class="box box-solid bg-dark">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user"></i> OTHER  SETTINGS</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <form method="POST" action="{{ route('admin.storeSettings') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">BTC WALLET WALLET</label>
                            <input type="text" class="form-control" name="btc_wallet" value="{{ setting('btc_wallet') }}" placeholder="">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">ECR20 WALLET </label>
                            <input type="text" class="form-control" name="eth_wallet" value="{{ setting('eth_wallet') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">XRP WALLET </label>
                            <input type="text" class="form-control" name="xrp_wallet" value="{{ setting('xrp_wallet') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">BSC WALLET </label>
                            <input type="text" class="form-control" name="bsc_wallet" value="{{ setting('bsc_wallet') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">TOTAL TRANSACTION</label>
                            <input type="number" class="form-control" name="total_trans" value="{{ setting('total_trans') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">BITCOIN WALLET </label>
                            <input type="number" class="form-control" name="bitcoin_wallet" value="{{ setting('bitcoin_wallet') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">HAPPY USERS</label>
                            <input type="number" class="form-control" name="happy_users" value="{{ setting('happy_users') }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">BITCOIN INVESTORS</label>
                            <input type="number" class="form-control" name="btc_investors" value="{{ setting('btc_investors') }}" placeholder="">

                        </div>
                        <button type="submit" style="border-radius: 0px" name="save-wallet__XX" class="btn btn-primary mt-4 pr-4 pl-4">SAVE WALLET</button>
                    </form>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>





    </div>
    <!-- End Row -->








</section>

@endsection
