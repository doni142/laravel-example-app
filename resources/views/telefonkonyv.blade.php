Ez az view a telefonkonyv: 
@foreach($csinald as $user)
    <p> this is todo: {{ $user->id }}, {{ $user->title }}
    <form action="user/{{ $user->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="töröl">
    </form>
    <a href="user/{{ $user->id }}/edit">szerkesztés</a>
    </p>
@endforeach
        <a href="/user/create">Új hozzáadása </a>
