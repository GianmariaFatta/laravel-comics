<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
@include('header')
{{-- <header>
        <div class="container">
            <div class="row">
                <div class="col-left">
                    <div class="card">
                        <a href=""><img src="{{ asset('img/dc-logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-right">
                    <ul>
                       <li>ciao</li>
                    </ul>
                </div>
            </div>
        </div>
    </header> --}}
    <main>
        <div id="contents">
            <div class="container">
                <div class="comic-row">
                    
                </div>
            </div>
            <div class="row-button">
                <button><a href=""> LOAD MORE</a></button>
            </div>
        </div>
        <section>
            <ul>
                <li><a href="">DIGITAL COMICS</a> </li>
                <li><a href="">DC MERCHANDISE</a> </li>
                <li><a href="">SUBSCRIPTION</a> </li>
                <li><a href="">COMIC SHOP LOCATOR</a> </li>
                <li><a href="">DC POWER VISA</a> </li>
            </ul>
        </section>
        <div id="comics">
            <div class="container">
                <div class="row">
                    <div class="col-left">
                        <div class="s-column">
                            <h3>DC COMICS</h3>
                            <ul>
                                <li>ciao</li>
                            </ul>
                            <h3>SHOP</h3>
                            <ul>
                                <li>ciao</li>

                            </ul>
                        </div>
                        <div class="m-column">
                            <h3>DC </h3>
                            <ul>
                                <li>ciao</li>

                            </ul>
                        </div>
                        <div class="e-column">
                            <h3>SITES</h3>
                            <ul>
                               <li>ciao</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="card">
                            <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer')
    {{-- <footer>
        <div class="container">

            <div class="row">
                <div class="s-footer">
                    <button>
                        <a href="">SIGN-UP NOW!</a>
                    </button>
                </div>
                <div class="e-footer">
                    <h3>FOLLOW US</h3>
                    <div class="socials">
                        <a href=""><img src="{{asset('img/footer-facebook.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-twitter.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-youtube.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-pinterest.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-periscope.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </footer> --}}
</body>
</html>