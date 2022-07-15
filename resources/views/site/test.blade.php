<h1>Test view</h1>
<ul>
  <li><a href="{{ route('site.index') }}">Main</a></li>
  <li><a href="{{ route('site.about') }}">About</a></li>
  <li><a href="{{ route('site.contact') }}">Contact</a></li>
</ul>
<div>Received param 2: {{ $p1 }}</div>
<div>Received param 1: {{ $p2 }}</div>