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
                    <div class="table-responsive">
                        <table class="table table-xs table-border">
                            <thead class="bg-secondary">
                            <tr>
                                <th>Fullname:</th>
                                <td>{{ $user->name }}</td>
                            </tr>

                            <tr>
                                <th>Email:</th>
                                <td>{{ $user->email  }}</td>
                            </tr>
                            <tr>
                                <th>Mobile :</th>
                                <td>{{ $user->phone ? : "Not Set" }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $user->country ? : "Not Set" }}</td>
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
                                <td>$@convert($user->bonus) </td>
                            </tr>
                            <tr>
                                <th>Investment:</th>
                                <td>$@convert($user->investment) </td>
                            </tr>
                            <tr>
                                <th>Registration Date:</th>
                                <td>{{ date('D, M d Y', strtotime( $user->created_at )) }}</td>
                            </tr>
                            <tr>
                                <th>WALLET</th>
                                <td>
                                    <form action="{{ route('admin.updateWallet', $user->id) }}" method="POST">
                                        @csrf
{{--                                        <input type="hidden" name="link" value="Customers.profile?id=38&amp;action=View">--}}

                                        <div class="form-group">
                                            <input type="text" value="{{ old('wallet_address', optional($user)->wallet_address) }}" class="form-control" name="wallet_address">
                                        </div>
                                        <button type="submit" style="border-radius: 0PX"  class="btn btn-success mt-4 pr-4 pl-4">UPDATE WALLET</button>

                                    </form>
                                </td>
                            </tr>

                            </thead>
                        </table>
                    </div>

                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary" style="border-radius: 0px">GO BACK</a>

                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>





    </div>
    <!-- End Row -->






</section>

@endsection
