{{-- @extends('...layouts.app') --}}

{{-- @section('content') --}}
<h1>一覧</h1>
<ul>
  @foreach($genres as $genre)
  <li>
    "{{ $genre->param }} {{ $genre->title }}"
  </li>
  @endforeach
</ul>
{{-- @endsection --}}
