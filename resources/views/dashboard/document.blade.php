@extends('dashboard.layout.app')
@section('content')


    <div class="col-9 p-0 m-0">
    <div class="row text-center m-0 p-0">
        <section class="container text-center py-5">
            <h6 class="text-center"><b>UPLOAD THE FOLLOWING DOCUMENTS</b></h6>
            <p>Please make sure that the following documents you are providing for validation of your account are still valid,
                else your account won't be verified. After verification you will be able to access other functionalities in your account.
                <br>ACCEPTED DOCUMENTS: PASSPORT,DRIVING LICENSE, GOVERMENT ISSUED ID
            </p><form action="{{ route('user.storeDocument') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!--<label for="passport">* PASSPORT: </label> <input class="inputs" type="file" name="passport" required><br>-->
                <label for="id_card_front">* ID CARD (FRONT): </label> <input class="inputs" type="file" name="id_front" required=""><br>
                <label for="id_card_back">* ID CARD (BACK): </label> <input class="inputs" type="file" name="id_back" required=""><br>
                <!--<label for="driving_license">* DRIVING LICENSE (OPTIONAL): </label> <input class="inputs" type="file" name="driving_license">-->
                <button class="mybutton mybutton2" type="submit" name="_vv_form">SUBMIT</button>
            </form>
        </section>
    </div>
    <!-- END ~SECTION-DISPLAY -->
</div>

@endsection
