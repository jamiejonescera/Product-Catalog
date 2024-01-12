@extends('layout') {{-- lalagay niyo 'to para kuhanin niya yung itsura ng main file --}}

@section('main-content')

{{-- kung may custom kayong css, dito niyo lagay --}}
{{-- example --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">



{{-- dito lalagay niyo html niyo --}}


{{-- kung may gagamitin kayong javascript na cdn or javascript code niyo mismo, dito niyo siya lalagay --}}
{{-- example --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>

@endsection
