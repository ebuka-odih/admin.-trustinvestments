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
                            <div class="alert alert-info"><center>{{ $user->message }}</center></div>
                        </div>
                        <form action="{{ route('admin.setBilling', $user->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="link" value="Customers.profile?id=38&amp;action=Billing">
                            <input type="hidden" name="id" value="38">
                            <div class="form-group">
                                <label for="">BILLING MESSAGE</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="10">{{ old('message', optional($user)->message) }}</textarea>

                            </div>
                            <button type="submit" style="border-radius: 0PX" name="set-billing" class="btn btn-success mt-4 pr-4 pl-4">SET BILLING</button>
{{--                            <button type="submit" style="border-radius: 0PX" name="clear-billing" class="btn btn-danger mt-4 pr-4 pl-4">CLEAR BILLING</button>--}}
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
