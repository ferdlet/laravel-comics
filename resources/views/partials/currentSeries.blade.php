<section id="series">
        <div class="container">
            <div class="title-section">
                Current Series
            </div>
            <div class="container-series">
                @foreach ($comics as $comic)
                    <div class="serie">
                        <a href="#">
                            <div class="image">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                            </div>
                            <p>{{$comic['series']}}</p>
                        </a>
                    </div>  
                @endforeach
            </div>
            <a href="#">Load More</a>
        </div>
    </section>