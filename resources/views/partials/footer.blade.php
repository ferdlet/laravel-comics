<footer>
    <section class="footer-top">
      <div class="container">
        <ul>
            @foreach ($linksFooterTop as $link)
            <li >
                <a :href="{{$link['url']}}">
                    <img src="{{asset('../images/'.$link['img'])}}" alt="{{$link['text']}}">
                    {{$link['text']}}
                </a>
            </li>
            @endforeach
        </ul>
      </div>
    </section>
    <section class="footer-body">
        <div class="container">
        <img src="{{asset('../images/dc-logo-bg.png')}}" alt="DC Logo" id="logo-footer">
            <div class="container-list">
            @foreach ($linksFooterBody as $linkSection)
                <div class="lista" >
                    <h2>{{$linkSection['title']}}</h2>
                    <ul>
                        @foreach ($linkSection['links'] as $link)
                        <li>
                            <a href="{{$link['url']}}">{{$link['name']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        
            </div>
        </div>
    </section>
    <section class="footer-bottom">
      <div class="container">
        <button>
          <a href="#">sign up now!</a>
        </button>
        <div>
          <h2>follow us</h2>
          <ul>
            <li>
              <a href="#">
                <img src="{{asset('../images/footer-facebook.png')}}" alt="facebook">
              </a>
            </li>
             <li>
              <a href="#">
                <img src="{{asset('../images/footer-twitter.png')}}" alt="twitter">
              </a>
            </li>
             <li>
              <a href="#">
                <img src="{{asset('../images/footer-youtube.png')}}" alt="youtube">
              </a>
            </li>
             <li>
              <a href="#">
                <img src="{{asset('../images/footer-pinterest.png')}}" alt="pinterest">
              </a>
            </li>
             <li>
              <a href="#">
                <img src="{{asset('../images/footer-periscope.png')}}" alt="periscope">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
</footer>