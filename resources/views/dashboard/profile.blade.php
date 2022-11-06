@extends('dashboard.layout.app')
@section('content')



    <div class="col-9 p-0 m-0">
    <div class="row text-center m-0 p-0">

        <section class="container user_profile py-5 text-center">
            <img style="width: 65px; border-radius: 40px; margin-bottom: 10px;" src="{{ asset('images/user_2.jpg') }}" alt="user">
            <div class="container text-center"><span>
      <!-- ACCT-N0: FT-42-14034074 -->

    </span></div><span>ACCT STATUS:</span>
            <span style="color: red;">{!! $user->status() !!}!</span><br><span>click <a href="upload_documents">HERE</a> to verify your account</span>

            <hr>

            <div class="container">
                <label><b style="color: #105BAA;">FULL NAME</b></label>
                <p>{{ $user->name }}</p>
                <hr style="width: 180px;">

                <label><b style="color: #105BAA;">EMAIL</b></label>
                <p>{{ $user->email }}</p>
                <hr style="width: 180px;">

                <label><b style="color: #105BAA;">PHONE NUMBER</b></label>
                <p>{{ $user->phone }}</p>
                <hr style="width: 180px;">

                <label><b style="color: #105BAA;">COUNTRY</b></label>
                <p>{{ $user->country }}</p>
                <hr style="width: 180px;">

                <label><b style="color: #105BAA;">ACCOUNT TYPE</b></label>
                <p>{{ $user->acct_type }}</p>
                <hr style="width: 180px;">

                <label><b style="color: #105BAA;">WALLET ADDRESS</b></label>
                <p>{{ $user->wallet_address }}</p>
                <hr style="width: 180px;">
                <a class="mybutton2 mybutton" href="{{ route('user.editProfile', $user->id) }}">EDIT PROFILE</a>
{{--                <form action="" method="POST">--}}
{{--                    <button class="mybutton2 mybutton" name="submit_edit"></button>--}}
{{--                </form>--}}
            </div>



        </section></div>
    <!-- END ~SECTION-DISPLAY -->
</div>

@endsection
