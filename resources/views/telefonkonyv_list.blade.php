@extends('layout')
@section('contend')
<table> 
    <caption>
        Telefon könyv bejegyzések
    </caption>
    <thead>
    <tr>
        <th>
           <a href="?order=name">név</a> 
        </th>
        <th>
           <a href="?order=number">szám</a> 
        </th>
    </tr>
    </thead>
    <tbody>
@foreach ($barmi as $bejegyzes)
    
        <tr>
            <td>
                {{ $bejegyzes->name }} 
            </td>
            <td>
                {{ $bejegyzes->number }}
            </td>
        </tr>
    
@endforeach
</tbody>

</table>
<a href="/telefonkonyv/create">Új hozzáadása </a>
{{ $barmi->links() }}
@endsection 