<h1>Supplier view</h1>
@dd($supplier)

@if( count($supplier) > 0 && count($supplier) < 10 )
  <h3>There're some suppliers registered</h3>
@elseif(count($supplier) > 10 )
  <h3>There're plany suppliers registered</h3>
@else
  <h3>Yet none suppliers registered</h3>
@endif
