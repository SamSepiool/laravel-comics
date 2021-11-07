<header>
    <div class="top">
        <ul class="container ">
            <li><a href="#">DC POWER &#8480;VISA&#174;</a></li>
            <li><a href="#">ADDITIONAL DC SITES</a></li>
        </ul>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="{{asset('images/dc-logo.png')}}" alt=""></a>
            </div>
            <nav>
                <ul>
                    
                    @foreach ($headerLinks as $link)
                        <li><a href="{{$link['url']}}">{{$link['item']}}</a></li>        
                    @endforeach
                
                </ul>
                
            </nav>
            <div class="search">
                <label for="find">
                    <input id="find" type="text" placeholder="Search">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </label>
                
            </div>
        </div>
    </div>

    <div class="hero">
        <img src="{{asset('images/jumbotron.jpg')}}" alt="alt" style="">
    </div>
</header> 

