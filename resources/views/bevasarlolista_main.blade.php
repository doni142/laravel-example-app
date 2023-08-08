
<h1>Bevásárló lista:</h1>

@if(!isset($bevasarlolista))
<form action="/bevasarlolista" method="POST"></form>
@else
<form action="/bevasarlolista/{{ $bevasarlolista->id }}" method="post">
@method('patch')
@endif
    @csrf

    <div>
        <label for="termek">Termékneve :</label>
        <input type="text" name="termekneve" id="termek" @isset($bevasarlolista) value="{{ $bevasarlolista->termekneve }}" @endisset>
        @error('termekneve')      
        @enderror
    </div>

    <div>
        <label for="dbszam">Darabszáma :</label>
        <input type="text" name="darabszama" id="dbszam" @isset($bevasarlolista) value="{{ $bevasarlolista->darabszama }}" @endisset>
        @error('darabszama')
        @enderror
    </div>

