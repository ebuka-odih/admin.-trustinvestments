@extends('dashboard.layout.app')
@section('content')


    <div class="col-9 p-0 m-0">
    <div class="row m-0 p-0">

        <form class="container py-5" action="{{ route('user.updateProfile', $user->id) }}" method="post">
            @csrf
            @method('PATCH')
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="form-group">
                <div class="input-title">Full Name:</div>
                <input placeholder="Full Name" type="text" name="name" class="form-control" value="{{ old('name', optional($user)->name) }}">
            </div>


            <div class="form-group">
                <div class="input-title">Country:</div>
                <input placeholder="country" type="text" name="country" class="form-control" value="{{ old('country', optional($user)->country) }}" required="" readonly="">
            </div>
            <!--
                <div class="form-group">
                    <div class="input-title">Zip Code:</div>
                    <input   type="number" name="zip" class="form-control" value="34567" required="" readonly >
                 </div> -->

            <div class="form-group">
                <div class="input-title">Phone Number:</div>34567
                <input placeholder="Phone Number" type="text" name="phone" class="form-control" value="{{ old('phone', optional($user)->phone) }}" required="">
            </div>

            <div class="form-group">
                <div class="input-title">Email:</div>
                <input placeholder="Email" type="email" name="email" class="form-control" value="{{ old('email', optional($user)->email) }}" readonly="">
            </div>


            <div class="form-group">
                <div class="input-title">Account Type:</div>
                <input placeholder="acct_type" type="text" name="acount_type" class="form-control" value="{{ old('acct_type', optional($user)->acct_type) }}" required="" readonly="">
            </div>

            <!-- <div class="form-group">
              <div class="input-title">Account Type:</div>
               <select class="form-control" name="account_type">
                  <option value="" selected=""></option>
                  <option value="Starter">Starter : $500 - $1, 499</option>
                  <option value="Platinum">Platinum : $1,500 - $4, 499</option>
                  <option value="Bronze">Bronze : $4,500 - $9, 000</option>
                  <option value="Gold">Gold : $9,100 - $14, 999</option>
                  <option value="Diamond">Diamond : $15, 000 - $100, 000</option>
              </select>
            </div> -->

            <div class="form-group">
                <div class="input-title">Wallet Address:</div>
                <input placeholder="Wallet address" type="text" name="wallet_address" class="form-control" value="{{ old('wallet_address', optional($user)->wallet_address) }}">
            </div>

            <br>
            <div class="btn-group">
                <button class="mybutton mybutton2" type="submit" name="update">UPDATE</button>
                <!-- <a style="color: green;" class="pull-right py-5" href="upgrade_account">Upgrade Account</a> -->
            </div>

        </form>

    </div></div>

@endsection
