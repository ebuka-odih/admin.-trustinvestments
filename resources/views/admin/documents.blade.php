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
                    <h3 class="box-title"><i class="fa fa-user"></i> DOCUMENT LIST</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">ACCOUNT INFO</th>
                                <!--<th scope="col">PASSWPORT</th>-->
                                <th scope="col">ID FRONT</th>
                                <th scope="col">ID BACK</th>
                                <th scope="col">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-12">
            <div class="box box-solid bg-dark">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user"></i> APPROVED DOCUMENT </h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">ACCOUNT INFO</th>
                                <!--<th scope="col">PASSWPORT</th>-->
                                <th scope="col">ID FRONT</th>
                                <th scope="col">ID BACK</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $item)
                            <tr role="row" class="even">

                                <td>{{ optional($item->user)->name }}<br>{{ optional($item->user)->email }} </td>
                                <!--<td>-->
                                <!--   <img src="" style="width:200px" alt=""> <br>  <a href="Documents.View?img_url=&doc_name=PASSPORT" class="btn btn-primary btn-sm btn-icon " style="margin: 3px"> VIEW</a>-->
                                <!--</td> -->
                                <td>
                                    <img src="{{ asset('documents/'.$item->id_front) }}" style="width:200px" alt=""> <br>
{{--                                    <a href="" class="btn btn-primary btn-sm btn-icon " style="margin: 3px"> VIEW</a>--}}
                                </td>
                                <td>
                                    <img src="{{ asset('documents/'.$item->id_back) }}" style="width:200px" alt=""> <br>
{{--                                    <a href="" class="btn btn-primary btn-sm btn-icon " style="margin: 3px"> VIEW</a>--}}
                                </td>
                                <td>
                                    {!! optional($item->user)->status() !!}
                                </td>

                                <td>
                                    <a style="margin: 3px" class="btn btn-primary btn-sm btn-icon " href="{{ route('admin.approveDoc', $item->id) }}">Approve</a>
{{--                                    <form action="Documents" method="post">--}}
{{--                                        <input type="hidden" name="id" value="36">--}}
{{--                                        <input type="hidden" name="email" value="loupon1979@gmail.com">--}}
{{--                                        <!-- <button class="btn btn-primary btn-sm btn-icon " style="margin: 3px" name="approve"><i class="entypo-cancel"></i>APPROVE DOCUMENT</button> -->--}}
{{--                                        <button class="btn btn-primary btn-sm btn-icon " style="margin: 3px" name="decline"><i class="entypo-cancel"></i>DECLINE DOCUMENT</button>--}}
{{--                                    </form>--}}

                                </td>
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






</section>

@endsection
