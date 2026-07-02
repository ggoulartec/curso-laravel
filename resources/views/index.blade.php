{{--@dd($name, $habits)--}}
<h1>Welcome to home page</h1>
<p>
    Olá {{ $name }}
</p>
<p>
    Seus Hábitos são:
</p>
<ul>
    @foreach($habits as $habit)
        <li>{{$habit}}</li>
    @endforeach
</ul>

