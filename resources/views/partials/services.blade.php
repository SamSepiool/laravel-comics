<section class="services">
    <div class="container">
        <ul>
            @foreach ($srvces as $service)
                <li>
                    <img src="{{asset($service['imgSrc'])}}" alt="{{$service['item']}}">
                    <a href="">{{$service['item']}}</a>
                </li>
            @endforeach
            
            
        </ul>
    </div>
</section>