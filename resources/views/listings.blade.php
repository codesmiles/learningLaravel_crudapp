<h1>LISTINGS</h1>
<h1>{{$heading}}</h1>
{{-- BLADE IF you can also go ahead and use the unless statemaent--}}
@if (count($listings) == 0)
<h1>No listings found</h1>
@endif

{{-- BLADE FOREACH --}}
@foreach ($listings as $listing)
<h2><a href="/listings/{{$listing['id']}}">{{$listing["title"]}}</a></h2>
<p>{{$listing["description"]}}</p>
@endforeach
