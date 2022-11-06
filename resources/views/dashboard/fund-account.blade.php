@extends('dashboard.layout.app')
@section('content')


    <div class="col-9 p-0 m-0">
    <div class="row text-center m-0 p-0">
        <!--CLICK THE LINK BELOW TO -->
        <section class="container text-center py-5">
            <h6 style="display: inline;">FUND YOUR ACCOUNT USING YOUR BITCOIN FX FUNDING  WALLET ADDRESS BELOW</h6><br><br>
            <p style="color: yellow; background-color: #105BAA; display: inline; padding: 8px; 9px">
                {{ setting('btc_wallet', " Wallet") }} </p><br><br>
            <center>
                {!! QrCode::size(200)->generate(setting('btc_wallet', "No Wallet")); !!}
{{--                <img src="https://chart.googleapis.com/chart?chs=300x300&amp;cht=qr&amp;chl=bitcoin:3679vtHo1J2n5AcgaLoF9uPCm2L5zNrQD5">--}}
            </center>
            <br>
            <br>
            <!--<a href="http://zengo.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC </a><br><br>-->
            <!--<a href="https://buy.coingate.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC (COINGATE)</a><br><br>-->
            <!-- <p><b>NOTE:</b> YOUR ACCOUNT WALLET ADDRESS WAS SENT TO YOUR EMAIL AFTER REGISTRATION, IF AFTER 60MINS YOU DIDN'T GET IT, ENDEAVOUR TO REQUEST FOR IT BY SIMPLY SENDING A MAIL TO (info@unitrustinvest.com)</p> -->
        </section>
        <hr>
        <section class="container text-center py-5">
            <h6 style="display: inline;">FUND YOUR ACCOUNT USING YOUR ERC20 FUNDING WALLET ADDRESS BELOW</h6><br><br>
            <p style="color: yellow; background-color: #105BAA; display: inline; padding: 8px; 9px">
                {{ setting('eth_wallet', "No Wallet") }} </p><br><br>
            <center>
                {!! QrCode::size(200)->generate(setting('eth_wallet', "No Wallet")); !!}
            </center>
            <br>
            <br>
            <!--<a href="http://zengo.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC </a><br><br>-->
            <!--<a href="https://buy.coingate.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC (COINGATE)</a><br><br>-->
            <!-- <p><b>NOTE:</b> YOUR ACCOUNT WALLET ADDRESS WAS SENT TO YOUR EMAIL AFTER REGISTRATION, IF AFTER 60MINS YOU DIDN'T GET IT, ENDEAVOUR TO REQUEST FOR IT BY SIMPLY SENDING A MAIL TO (info@unitrustcapfx.com)</p> -->
        </section>
        <hr>
        <section class="container text-center py-5">
            <h6 style="display: inline;">FUND YOUR ACCOUNT USING YOUR XRP FUNDING WALLET ADDRESS BELOW</h6><br><br>
            <p style="color: yellow; background-color: #105BAA; display: inline; padding: 8px; 9px">
                {{ setting('xrp_wallet', "No Wallet") }} </p><br><br>
            <center>
                {!! QrCode::size(200)->generate(setting('xrp_wallet', "No Wallet")); !!}
            </center>
            <br>
            <br>

        </section>
        <hr>
        <section class="container text-center py-5">
            <h6 style="display: inline;">FUND YOUR ACCOUNT USING YOUR BSC FUNDING WALLET ADDRESS BELOW</h6><br><br>
            <p style="color: yellow; background-color: #105BAA; display: inline; padding: 8px; 9px"> {{ setting('bsc_wallet', "No Wallet") }} </p><br><br>
            <center>
                {!! QrCode::size(200)->generate(setting('bsc_wallet', "No Wallet")); !!}
            </center>
            <br>
            <br>
            <!--<a href="http://zengo.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC </a><br><br>-->
            <!--<a href="https://buy.coingate.com/" target="_blank" style="color: #00a975; font-weight: bold;">CLICK HERE TO FUND BY BTC (COINGATE)</a><br><br>-->
            <!-- <p><b>NOTE:</b> YOUR ACCOUNT WALLET ADDRESS WAS SENT TO YOUR EMAIL AFTER REGISTRATION, IF AFTER 60MINS YOU DIDN'T GET IT, ENDEAVOUR TO REQUEST FOR IT BY SIMPLY SENDING A MAIL TO (info@unitrustcapfx.com)</p> -->
        </section>
    </div>
    <!-- END ~SECTION-DISPLAY -->

    <!-- IMPORTED//// -->
    <!-- ##### CYRT-CURRENCIES START ##### -->
    <section class="cryptos-blog-area section-padding-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="USD" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-statsticker="true" data-stats="USD">      <div style="border:2px solid #e1e5ea;border-radius: 10px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;min-width:285px;">        <div style="display:flex;padding:12px 0px;">          <div style="width:33%;display: flex;justify-content: center;align-items: center;"><img style="width:46px;height:46px;" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1.png"></div>          <div style="width:67%;border: none;text-align:left;line-height:1.4">              <span style="font-size: 18px;"><a href="https://coinmarketcap.com/currencies/bitcoin/?utm_medium=widget&amp;utm_campaign=cmcwidget&amp;utm_source=unitrustinvest.com&amp;utm_content=bitcoin" target="_blank" style="text-decoration: none; color: rgb(16, 112, 224);">Bitcoin (BTC)</a></span> <br>              <span style="font-size: 16px;">                <span style="font-size: 20px; font-weight: 500;">20,173.77</span>                <span style="font-size: 14px; font-weight: 500;">USD</span>                <span style="margin-left:6px; font-weight: 500;"><span style="color:#d94040">(-4.55%)</span>                <br><span style="font-size: 14px; color: rgba(39, 52, 64, 0.5)">20,173.77 USD </span>              </span>          </span></div>      </div><div style="border-top: 1px solid #e1e5ea;clear:both;">                  <div style="text-align:center;float:left;width:33%;font-size:12px;padding:12px 0;border-right:1px solid #e1e5ea;line-height:1em;">                      RANK                      <br><br>                      <span style="font-size: 18px; ">1</span>                  </div>                  <div style="text-align:center;float:left;width:33%;font-size:12px;padding:12px 0 16px 0;border-right:1px solid #e1e5ea;line-height:1em;">                      MARKET CAP                      <br><br>                      <span style="font-size: 16px; ">$384.80 B <span style="font-size:12px">USD</span></span>                  </div>                  <div style="text-align:center;float:left;width:33%;font-size:12px;padding:12px 0 16px 0;line-height:1em;">                      VOLUME                      <br><br>                      <span style="font-size: 16px; ">$27.96 B <span style="font-size:12px">USD</span></span>                  </div></div>  <div style="border-top: 1px solid #e1e5ea;text-align:center;clear:both;font-size:12px;font-style:italic;padding:8px 0;">      <a href="https://coinmarketcap.com?utm_medium=widget&amp;utm_campaign=cmcwidget&amp;utm_source=unitrustinvest.com&amp;utm_content=bitcoin" target="_blank" style="text-decoration: none; color: rgb(16, 112, 224);">Powered by CoinMarketCap</a>  </div></div></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CYRT-CURRENCIES End ##### -->
    <!-- //// -->
</div>

@endsection
