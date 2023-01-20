<h1>{{$heading}}</h1>
@unless(count($apps) == 0)

    @foreach($apps as $app)
        <h2>
        <a href="/apps/{{$app['id']}}">{{$app['name']}}</a>
        </h2>
        <p>{{$app['description']}}</p>
    @endforeach

@else
    <p>No apps found</p>
@endunless