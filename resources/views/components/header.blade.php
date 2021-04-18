<div>
    <h1>This is header component</h1>
    <h3>Hellow {{$name}}</h3>
    <h3>Fruits are:</h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>