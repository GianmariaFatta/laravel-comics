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
                            @foreach ($comicsLinks as $comicsLink )
                                <li>{{$comicsLink}}</li>
                            @endforeach
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