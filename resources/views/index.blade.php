@extends('layout.main')

@section('title', 'DC - Home')

@section('content')

<section>
    <div class="content">
    
        <div class="container">
            <div class="limbo">
                <h2>CURRENT SERIES</h2>
            </div>
    
            <div class="cards">
    
                @foreach ($comics as $item)
                    <div class="card">
                        <div class="thumb">
                            <img src="{{$item['thumb']}}" alt="">
                        </div>
                        
                        <p>{{$item['series']}}</p>
                    </div>
                @endforeach
               
            </div>
    
            <a href="#">LOAD MORE</a>
        </div>
    
    </div> 

</section>   





@endsection
