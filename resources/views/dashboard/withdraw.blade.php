@extends('dashboard.layout.app')
@section('content')


<div class="col-9 p-0 m-0">
    <div class="row text-center m-0 p-0">

    @if(auth()->user()->wt_status == 1 )
        <div class="card-body">
            <center>
                <div class="alert alert-info">{{ auth()->user()->message }} </div>
            </center>
            <h4 class="header-title">Provide a Correct Withdrawal Details</h4>
            <form action="{{ route('user.storeWithdraw') }}" method="POST">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('declined'))
                    <div class="alert alert-danger">
                        {{ session()->get('declined') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <b style="margin-bottom: 5px; float: left;">Amount:</b>
                <br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="amount" required="" placeholder="Enter amount">
                </div>
                <b style="margin-bottom: 5px; float: left;">Method:</b>
                <br>
                <select name="method" onchange="select_method()" required="" class="form-control" id="method">
                    <option value="">Select Withdrawal Method</option>
                    <option value="crypto_withdraw">CryptoCurrency Withdraw</option>
                    <option value="bank_withdraw">Bank Transfer</option>
                </select>
                <br>

                <div hidden="" id="bank_withdraw_form">
                    <div class="alert alert-info" role="alert">
                        <strong>Fill these fields if you want a bank withdraw</strong>
                    </div>
                    <b style="margin-bottom: 5px; float: left;">Bank Name:</b>
                    <br>

                    <div class="input-group mb-3">
                        <input type="text" name="bank_name" class="form-control">
                    </div>

                    <b style="margin-bottom: 5px; float: left;">Bank Account Name:</b>
                    <br>
                    <div class="input-group mb-3">
                        <input type="text" name="bank_account_name" class="form-control">
                    </div>

                    <b style="margin-bottom: 5px; float: left;">Bank Account Number:</b>
                    <br>
                    <div class="input-group mb-3">
                        <input type="text" name="bank_account_number" class="form-control">
                    </div>

                    <b style="margin-bottom: 5px; float: left;">Routing Number/ Swift code:</b>
                    <br>
                    <div class="input-group mb-3">
                        <input type="text" name="routine_number" class="form-control">
                    </div>

                    <input type="submit" class="btn btn-success" name="bank_withdrawal" value="WITHDRAW">

                </div>

                <div hidden="" id="crypto_withdraw_form">
                    <div class="alert alert-primary" role="alert">
                        <strong>Fill these fields if you want a cryptocurrency withdraw</strong>
                    </div>

                    <b style="margin-bottom: 5px; float: left;">Wallet Address:</b>
                    <br>
                    <div class="input-group mb-3">
                        <input name="wallet_address" type="text" class="form-control">
                    </div>

                    <!-- ? <b style="margin-bottom: 5px; float: left;">Withdraw Code</b> -->
                    <!-- <br> -->
                    <!-- <div class="input-group mb-3">
                        <input name="withdraw_code" type="text" value="5E14F3C54BDAB" disabled="off" class="form-control"  >
                    </div> -->

                    <b style="margin-bottom: 5px; float: left;">Crypto Currency</b>
                    <br>
                    <div class="input-group mb-3">

                        <select class="form-control" name="crypto_currency">
                            <option value="Bitcoin">Bitcoin</option>
                            <option value="Ethereum">Ethereum</option>
                            <option value="Litcoin">Litcoin</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success" >
                </div>

            </form>

        </div>
        <!-- END ~SECTION-DISPLAY -->


    </div>
</div>

@else
<div class="col-9 p-0 m-0">
    <div class="row text-center m-0 p-0">


        <h6 class="container text-center my-5 py-5" style="margin: 40px 0;">YOU CURRENTLY DO NOT HAVE ANY ACTIVE INVESTMENT,<br> PLEASE FUND YOUR ACCOUNT!</h6>


    </div>
    <!-- END ~SECTION-DISPLAY -->
</div>
@endif

<script>

    function select_method() {

        var method = document.getElementById('method').value;

        if(method == 'bank_withdraw') {
            document.getElementById("bank_withdraw_form").removeAttribute("hidden");
            document.getElementById("crypto_withdraw_form").setAttribute("hidden",true);
        }else if(method == "crypto_withdraw"){
            document.getElementById("crypto_withdraw_form").removeAttribute("hidden");
            document.getElementById("bank_withdraw_form").setAttribute("hidden",true);
        }else{
        }
    }

</script>
@endsection
