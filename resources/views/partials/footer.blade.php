<footer>
    <div class="top">

        <div class="container">

            <div class="main_list">

                <ul>
                    <li>
                        <h3>{{$footerLinks['list1']['name']}}</h3>
                    </li>

                    @foreach ($footerLinks['list1']['links'] as $link)
                        <li>
                            <a>{{$link}}</a>
                        </li>
                    @endforeach

                    <ul class="sub_menu">
                        <li><h3>{{$footerLinks['list1']['subMenu']['name']}}</li>
                        @foreach ($footerLinks['list1']['subMenu']['links'] as $link)
                            <li>
                                <a>{{$link}}</a>
                            </li>
                        @endforeach
                    </ul>
                </ul>

                <ul>
                    <li>
                        <h3>{{$footerLinks['list2']['name']}}</h3>
                    </li>
                    @foreach ($footerLinks['list2']['links'] as $link)
                        <li>
                            <a>{{$link}}</a>
                        </li>
                    @endforeach
                </ul>

                <ul>
                    <li>
                        <h3>{{$footerLinks['list3']['name']}}</h3>
                    </li>
                    @foreach ($footerLinks['list3']['links'] as $link)
                        <li>
                            <a>{{$link}}</a>
                        </li>
                    @endforeach
                </ul>

                

                
            </div>
            <div class="logo"></div>
            
            <div class="container">
                <p class="copyright">
                    All Site Content TM and© 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.
                    <a href="#">Cookies Settings</a>
                </p>     
            </div>
        </div>

        

        
    </div>

    <div class="bottom">

        <div class="container">

            <a href="">SIGN-UP NOW!</a>
            
            <ul>
                <li><h3>FOLLOW US</h3></li>
                @foreach ($social as $item)
                <li>
                    <a href="{{$item['url']}}">
                        <img src="{{$item['logoSrc']}}" alt="{{$item['logo']}}">
                    </a>
                </li>
                @endforeach
               
            </ul>

        </div>

    </div>

</footer>