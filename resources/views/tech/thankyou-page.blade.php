@include('head')


<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <!-- <img src="https://codexcourier.com/images/banner-logo.png" alt=""> -->
        </div>
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
            <strong>Thanks for getting in touch with </strong>DigiPrima. We'll make sure the right person replies as soon as possible.
            </h2>
            <p>
            You can also mail us at info@digiprima.com to start a Conversation about your project straight away.
            </p>
        </div>
    </div>
    <div class="_footer">
        <p>Having trouble? <a href="{{url('/contact')}}">Contact us</a> </p>
        <a class="btn" href="{{url('/')}}">Back to homepage</a>
    </div>
</div>


<!-- CSS Start -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap');

    html,
    body {
        font-family: 'Raleway', sans-serif;
    }

    .thankyou-page ._header {
        background: #3273e1;
        padding: 100px 30px;
        text-align: center;
    }

    .thankyou-page ._header .logo {
        max-width: 200px;
        margin: 0 auto 50px;
    }

    .thankyou-page ._header .logo img {
        width: 100%;
    }

    .thankyou-page ._header h1 {
        font-size: 65px;
        font-weight: 800;
        color: white;
        margin: 0;
    }

    .thankyou-page ._body {
        margin: -70px 0 30px;
    }

    .thankyou-page ._body ._box {
        margin: auto;
        max-width: 80%;
        padding: 50px;
        background: white;
        border-radius: 3px;
        box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
        -moz-box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
        -webkit-box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
    }

    .thankyou-page ._body ._box h2 {
        font-size: 32px;
        font-weight: 600;
        color: #4ab74a;
    }

    .thankyou-page ._footer {
        text-align: center;
        padding: 50px 30px;
    }

    .thankyou-page ._footer .btn {
        background: #4ab74a;
        color: white;
        border: 0;
        font-size: 14px;
        font-weight: 600;
        border-radius: 0;
        letter-spacing: 0.8px;
        padding: 20px 33px;
        text-transform: uppercase;
    }
</style>