@extends('pages.layout.app')
@section('content')

<main class="page-content" aria-label="Content">
    <section class="pt-8 pb-8 bg-gradient-primary">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-lg-6 mb-8 text-center text-md-left text-white">
                    <h1 class="display-3 font-weight-bold">Forex and Cryptocurrency Investments</h1>
                    <p class="text-white-90 lead mb-4">We provide a wide range of financial investment opportunities
                        to both individuals and businesses to grow their investment.</p>

                    <div class="download-button">
                        <div class="row download">
                            <div class="col-12 col-lg-4 " role="img" aria-label="goes to AppStore to download Trust Investment Cap for iphones">
                                <a href="{{ route('register') }}" class="btn btn-white " style="width: 200px; margin: 5px;">
                                    Register
                                </a>
                            </div>
                            <div class="col-12 col-lg-4 " role="img" aria-label="goes to Google Play store to download Trust Investment Cap for Android phones">
                                <a href="{{ route('login') }}" class="btn btn-white" style="width: 200px; margin: 5px">
                                    Login
                                </a>
                            </div>
                            <!--<div class="col-12 col-lg-4 androidapk" role="img" aria-labelledby="Downloads Uni Trust Invest as APK file for android phones">-->
                            <!--<a href="https://files.trustwallet.com/builds/v2.12_release.apk" class="downloadapp">-->
                            <!--<svg class="download-app-image download-apk" loading="lazy" role="img" aria-labelledby="title desc" rel="noopener"></svg>-->
                            <!--</a>-->
                            <!--</div>-->
                            <!--<div class="col-12 col-lg-4 huawei hidden" role="img" aria-label="goes to huawei store to download Uni Trust Invest for huawei phones">-->
                            <!--<a href="https://appgallery.huawei.com/#/app/C103425801" class="downloadapp">-->
                            <!--<svg class='download-app-image download-huawei' loading='lazy' role="img" aria-labelledby="title desc" rel="noopener"></svg>-->
                            <!--</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img loading="lazy" class="hero-image mx-auto d-block img-fluid" src="assets/images/home_trustwallet_app.png" alt="Trust Investment Cap app mobile mockup">
                </div>
            </div>
        </div>

    </section>
    <div style=" background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
    </div>
    <section class="pt-6">

        <div class="container">
            <div class="row border-bottom justify-content-center pb-4">
                <div class="col-12 col-md-auto mr-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <!--<svg alt="icon card" title="Credit card icon">-->
                        <!--<use xlink:href="assets/images/features-2.svg#card"></use>-->
                        <!--</svg>-->

                    </div>

                    <div class="ml-4" id="about">

<span class="font-weight-bold lead">
About Trust Investment Cap
</span>
                        <p>Trust Investment Cap was founded by a team of professional individuals comprising of experts from the banking, finance and technology sectors, which are multi-billion dollars industries, in 2004. We provide a unique global perspective through our global network, in-depth market and sector knowledge. This puts us in an excellent position to address the increasingly global needs of our clients.

                            Our work is always intended to provide a clear benefit to all our clients in both the short and long term investments. We focus our resources, leverage our global scale, and drive excellence in all we do while enhancing our partner-like culture to ensure profits on all sectors of our company.</p>
                    </div>
                </div>

                <div class="col-12 col-md-auto mr-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon card" title="Credit card icon">
                            <use xlink:href="assets/images/features-2.svg#card"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
<span class="font-weight-bold lead">
Buy Crypto With a Card
</span>
                    </div>
                </div>
                <div class="col-12 col-md-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon dex" title="Arrow shape icon">
                            <use xlink:href="assets/images/features-2.svg#dex"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
<span class="font-weight-bold lead">
Exchange Instantly
</span>
                    </div>
                </div>
                <div class="col-12 col-md-auto ml-auto d-flex justify-content-center">
                    <div class="icon icon-xs mb-5">
                        <svg alt="icon lock" title="Key lock icon">
                            <use xlink:href="assets/images/features-2.svg#lock"></use>
                        </svg>
                    </div>
                    <div class="ml-4">
<span class="font-weight-bold lead">
Private & Secure
</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-8">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 text-center mt-4 mt-md-0 order-md-2">
                    <h2 class="display-4 font-weight-bold mb-4">How It Works</h2>
                    <p class="lead text-gray-700">Check our process</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between pt-4 pb-4 text-center">
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Create An Account</div>
                    <div class="list-group-item d-flex"> Join Trust Investment Cap in less than 3 minutes. Get started with us by creating your trading account.</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Choose A Plan</div>
                    <div class="list-group-item d-flex"> Select any of our available investment plans, and make your payment via any of our payment channels.</div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Start Earning</div>
                    <div class="list-group-item d-flex"> Sit back, grab a cup of coffee and watch your investments grow. Get paid directly in your wallet.</div>
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary mt-6 mx-auto " aria-label="goes to download page to get Trust Investment Cap App">
                    Register Now
                </a>
            </div>
        </div>
    </section>


    <section class="pt-8">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-6 mb-md-10 order-sm-first order-md-2">
                    <h2 class="display-4 font-weight-bold">Buy Crypto With a Card</h2>
                    <p class="lead text-gray-700">Get your first $50 of Bitcoin, Ethereum, Binance Coin and many other cryptocurrencies.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="assets/images/home_cards.png" alt="Trust Investment Cap mobile mockup shows how it looks like to buy crypto with credit card">
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-6 mb-md-10">
                    <h2 class="display-4 font-weight-bold">Exchange Instantly</h2>
                    <p class="lead text-gray-700">No forms, no selfies. Trade crypto anytime with ease.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid  mx-auto d-block" src="assets/images/home_dex.png" alt="Trust Investment Cap mobile mockup shows an example how swapping cryptocurrencies looks like">
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-md-6 col-lg-5 order-sm-2 text-center text-md-left mb-6 mb-md-10 order-md-2">
                    <h2 class="display-4 font-weight-bold">Private & Secure</h2>
                    <p class="lead text-gray-700">Only you can access your wallet. We don't collect any personal data.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="assets/images/home_security.png" alt="Trust Investment Cap mobile mockup shows that wallet is private and secure">
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 col-md-6 col-lg-5 text-center text-md-left mb-6 mb-md-10">
                    <h2 class="display-4 font-weight-bold">Browser for DApps</h2>
                    <p class="lead text-gray-700">Use your favourite decentralized apps & find new ones, without leaving your wallet.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <img loading="lazy" class="img-fluid mx-auto d-block" src="assets/images/dapp_preview.png" alt="Trust Investment Cap mobile mockup shows list of dapps you can interact within the wallet">
                </div>
            </div>
        </div>
    </section>


    <section class="pt-8">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 text-center mt-4 mt-md-0 order-md-2">
                    <h2 class="display-4 font-weight-bold mb-4">Why People Choose Us?</h2>
                    <p class="lead text-gray-700">Automated Crypto Trading Made Simple.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between pt-4 pb-4 text-center">
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Safe and secure</div>
                    <div class="list-group-item d-flex"> We offer a zero risk investment platform as all your funds are insured against theft or any loss.</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>24/7 experts support</div>
                    <div class="list-group-item d-flex"> Our customer support team are always available to put you through whenever you need help.</div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Trusted</div>
                    <div class="list-group-item d-flex"> We are in partnership with top companies like Blockchain.com, Facebook and Shopify.</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Instant currency exchange</div>
                    <div class="list-group-item d-flex"> All operations are automated, we have designed a stress-free system for you!</div>
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary mt-6 mx-auto " aria-label="goes to download page to get Trust Investment Cap App">
                    Get Started
                </a>
            </div>
        </div>
    </section>




    <section id="plan" class="pt-8 pb-8 pt-sm-10 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h3 class="display-4 font-weight-bold">
                        Investment Plans
                    </h3>
                    <!--<p class="lead text-gray-700">It only takes a few minutes</p>-->
                </div>
            </div>
            <div class="row no-gutters mt-8 mb-6 mb-md-7">


                <div class="col-12 col-md-3 text-center  "  >
                    <div class="row mb-5 card" style="background: #1DC4EC; margin: 0px 5px; color: #fff; padding: 10px;height: 380px">

                        <h2 >STARTER PLAN</h2>
                        50%
                        <hr>
                        <div style="text-align: left">
                            <span class="mr-4"><em class="check"></em></span> Duration: 7 DAYS
                            <br><span class="mr-4"><em class="check"></em></span> Accrual: HOURLY
                            <br><span class="mr-4"><em class="check"></em></span> Ref Commision: 5%
                            <br><span class="mr-4"><em class="check"></em></span> Instant Payment<br>
                            <span class="mr-4"><em class="check"></em></span> Price: <span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$500 - $5,000</span><br>
                        </div>
                        <a href="{{ route('register') }}"   class="btn btn-success mx-auto ">GET STARTED</a>



                    </div>
                </div>


                <div class="col-12 col-md-3 text-center  "  >
                    <div class="row mb-5 card" style="background: #1DC4EC; margin: 0px 10px; color: #fff; padding: 10px;height: 380px">

                        <h2 >ADVANCE PLAN</h2>
                        75%
                        <hr>
                        <div style="text-align: left">
                            <span class="mr-4"><em class="check"></em></span> Duration: 7 DAYS
                            <br><span class="mr-4"><em class="check"></em></span> Accrual: HOURLY
                            <br><span class="mr-4"><em class="check"></em></span> Ref Commision: 5%
                            <br><span class="mr-4"><em class="check"></em></span> Instant Payment<br>
                            <span class="mr-4"><em class="check"></em></span> Price: <span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$5,000 - $10,000</span><br>
                        </div>
                        <a href="{{ route('register') }}"   class="btn btn-success mx-auto ">GET STARTED</a>



                    </div>
                </div>


                <div class="col-12 col-md-3 text-center  "  >
                    <div class="row mb-5 card" style="background: #1DC4EC; margin: 0px 5px; color: #fff; padding: 10px; height: 380px">

                        <h2 >PROFESSIONAL </h2>
                        80%
                        <hr>
                        <div style="text-align: left">
                            <span class="mr-4"><em class="check"></em></span> Duration: 7 DAYS
                            <br><span class="mr-4"><em class="check"></em></span> Accrual: HOURLY
                            <br><span class="mr-4"><em class="check"></em></span> Ref Commision: 5%
                            <br><span class="mr-4"><em class="check"></em></span> Instant Payment<br>
                            <span class="mr-4"><em class="check"></em></span> Price: <span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$10,000 - $15,000</span><br>
                        </div>
                        <a href="{{ route('register') }}"   class="btn btn-success mx-auto ">GET STARTED</a>



                    </div>
                </div>


                <div class="col-12 col-md-3 text-center  "  >
                    <div class="row mb-5 card" style="background: #1DC4EC; margin: 0px 10px; color: #fff; padding: 10px;height: 380px">

                        <h2 >ULTIMATE </h2>
                        100%
                        <hr>
                        <div style="text-align: left">
                            <span class="mr-4"><em class="check"></em></span> Duration: 7 DAYS
                            <br><span class="mr-4"><em class="check"></em></span> Accrual: HOURLY
                            <br><span class="mr-4"><em class="check"></em></span> Ref Commision: 5%
                            <br><span class="mr-4"><em class="check"></em></span> Instant Payment<br>
                            <span class="mr-4"><em class="check"></em></span> Price: <span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$15,000 - Infinity</span><br>
                        </div>
                        <a href="{{ route('register') }}"   class="btn btn-success mx-auto ">GET STARTED</a>



                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="pt-8" id="contact">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
                <div class="col-12 text-center mt-4 mt-md-0 order-md-2">
                    <h2 class="display-4 font-weight-bold mb-4">Support Center</h2>
                    <!--<p class="lead text-gray-700">Automated Crypto Trading Made Simple.</p>-->
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-md-between pt-4 pb-4 text-center">
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Email</div>
                    <div class="list-group-item d-flex"> support@unitrustinvest.com</div>
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Telegram</div>
                    <div class="list-group-item d-flex"> <a href="https://t.me/Customer247service" >+1 (601) 281 7879</a></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Whatsapp Only</div>
                    <div class="list-group-item d-flex"> <a href="https://wa.me/+16012817879" target="new"  >+1 (601) 281 7879</a></div>
                    <!--<div class="list-group-item d-flex"><span class="mr-4"><em class="check"></em></span>Instant currency exchange</div>-->
                    <!--<div class="list-group-item d-flex"> All operations are automated, we have designed a stress-free system for you!</div> -->
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary mt-6 mx-auto " aria-label="goes to download page to get Trust Investment Cap App">
                    Get Started
                </a>
            </div>
        </div>
    </section>

    <section class="pt-8 pb-8 pt-sm-10 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h3 class="display-4 font-weight-bold">
                        Our Scores
                    </h3>
                    <!--<p class="lead text-gray-700">It only takes a few minutes</p>-->
                </div>
            </div>
            <div class="row no-gutters mt-8 mb-6 mb-md-7">
                <div class="col-12 col-md-3 text-center">
                    <div class="row mb-5">
                        <div class="col">
                        </div>

                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Bitcoin Investors
                    </h3>
                    <h1 class="counter">753992</h1>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="row mb-5">
                        <div class="col">
                        </div>

                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Total Transactions
                    </h3>
                    <h1 class="counter">73266996</h1>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="row mb-5">
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>

                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Bitcoin Wallets
                    </h3>
                    <h1 class="counter">9472896</h1>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <div class="row mb-5">
                        <div class="col">
                            <hr class="d-none d-md-block mt-8">
                        </div>

                        <div class="col">
                        </div>
                    </div>
                    <h3 class="font-weight-bold">
                        Happy Users
                    </h3>
                    <h1 class="counter">962899</h1>
                </div>
            </div>

        </div>
    </section>

    <section>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            .user-content p {
                margin-top: 5px;
                font-size: 12px
            }

            .ratings i {
                color: blue
            }
        </style>
        <div class="container mt-5 mb-5">
            <div class="col-12 text-center mb-2">
                <h3 class="display-4 font-weight-bold">
                    Testimonials
                </h3>

                <p class="lead text-gray-700">what people say</p>
            </div>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Gregory Bernd</h5> <span>United Kingdom</span>
                            <p>
                                I'm also consistently impressed with the communication - the team is accessible, candid, and patient.  It all adds up to the return vs. risk being tremendously attractive, and I'm happy to have worked with such great people.
                            </p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://image.freepik.com/free-photo/african-american-business-woman_1303-9864.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Susan A. Speer</h5> <span>United Kingdom</span>
                            <p>
                                Great service! I have been worried about investing. But when I came here. I didn't have to worry anymore. Excellent service, they continue to make good commitments. Thank you!
                            </p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Luc Doiron</h5> <span>France</span>
                            <p>I've been trading for the last few Years, but never felt I had the traders edge that I kept hearing about in terms of consistent results and  exact plan to work towards. Since joining the Trust Investment Cap not only have my results changed but also my mindset towards what I'm doing.</p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://image.freepik.com/free-photo/portrait-business-woman-working-laptop_1303-9731.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Judie Wensing</h5> <span>United Kingdom</span>
                            <p>
                                I have a dozen different investments throughout the world and Trust Investment Cap ranks among the absolute best. Their team are very knowledgeable in their field, professional and only look for the opportunities that promise good returns.
                            </p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://image.freepik.com/free-photo/worldface-spanish-guy-white-background_53876-137665.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Alonzo J. Rollins</h5> <span>Netherlands</span>
                            <p>
                                First I tried investing a little amount and I got surprised with a good return. I invested over $10000, and I am very satisfied with my returns. Trust Investment Cap is highly recommended.
                            </p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">
                        <div class="user-image"> <img src="https://image.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg" class="rounded-circle" width="80"> </div>
                        <div class="user-content">
                            <h5 class="mb-0">Mark Smiths</h5> <span>United States</span>
                            <p>
                                Thank you, It was a great pleasure trading and investing on currencies here, I have not only gained profits but also a vast knowledge.
                            </p>
                        </div>
                        <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="bg-light">
    <div class="container pt-8 pb-8">
        <div class="row align-items-center">
            <div class="col-12 col-md text-center text-lg-left mt-2">
                <h3 class="font-weight-bold mb-1">
                    Get the Trust Investment Cap app now!
                </h3>
                <p class="text-gray-700 mb-6 mb-md-0 no-whitespace">
                    The most trusted & secure crypto wallet
                </p>
            </div>
            <div class="col-12 col-lg-7"><div class="download-button">
                    <div class="row download">
                        <div class="col-12 col-lg-4 apple" role="img" aria-label="goes to AppStore to download Trust Investment Cap for iphones">
                            <a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" class="downloadapp">
                                <svg class="download-app-image download-apple" loading="lazy" role="img" aria-labelledby="title desc" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 googleplay" role="img" aria-label="goes to Google Play store to download Trust Investment Cap for Android phones">
                            <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&amp;referrer=utm_source%3Dwebsite" class="downloadapp">
                                <svg class="download-app-image download-play" loading="lazy" role="img" aria-labelledby="title desc" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 androidapk" role="img" aria-labelledby="Downloads Trust Investment Cap as APK file for android phones">
                            <a href="https://files.trustwallet.com/builds/v2.12_release.apk" class="downloadapp">
                                <svg class="download-app-image download-apk" loading="lazy" role="img" aria-labelledby="title desc" rel="noopener"></svg>
                            </a>
                        </div>
                        <div class="col-12 col-lg-4 huawei hidden" role="img" aria-label="goes to huawei store to download Trust Investment Cap for huawei phones">
                            <a href="https://appgallery.huawei.com/#/app/C103425801" class="downloadapp">
                                <svg class='download-app-image download-huawei' loading='lazy' role="img" aria-labelledby="title desc" rel="noopener"></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
