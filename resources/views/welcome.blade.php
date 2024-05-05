
<h1>Hello World</h1>
<br>

@include('Pages.header',['name'=>"Sujan Khadka"])
@include('Pages.footer')


<br>

{{-- <a href="/hello">Goto Post Page</a>
<a href="{{route('hye')}}">About Page</a> --}}


<h1><u>Blade Template</u></h1>

{{'Hello'}}
{{ 5 + 2}} 

{!!"<h1>Hello World</h1>"!!}


{{-- {!!"<script>alert('Warning')</script>"!!} --}}


@php
    $user = "Sujan Khadka" ;
@endphp

{{$user}}

@php
    $names=["Messi", "Dybala", "Debruyne","Ronaldo","Griezmann"]
@endphp


{{-- <ul>
@foreach ($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul> --}}


@{{user}}
@@{{user}}

<br><br>

    @foreach ($names as $n)
        @if($loop->even)
            <li style="color:green"> {{ $n }} </li>
        @elseif($loop->odd)
            <li style="color:red"> {{ $n }} </li>
        @endif 
    @endforeach