@extends ('welcome')

@section ('container')
<div>
    <ul class='currency-rates'>
        <li>Pagrindas: EUR</li>
        <li>USD: {{$currency['rates']['USD']}}</li>
        <li>RUB: {{$currency['rates']['RUB']}}</li>
        <li>GBP: {{$currency['rates']['GBP']}}</li>
    </ul>       
</div>
@auth
<div>
    <a href="/articles/create">Naujas straipsnis </a>
</div>
<br>
@endauth
<div class="links">
    @foreach($articles as $article)
    <div class="article-links">
        <a href="/articles/{{$article->id}}">{{$article->title}} {{$article->created_at}}</a>
    </div>
    @endforeach
</div>
@endsection