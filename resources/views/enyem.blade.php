Ez az view az enyém: kutya:
@foreach($csinald as $todo)
    <p> this is todo: {{ $todo->id }}, {{ $todo->title }}
    <form action="todos/{{ $todo->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="töröl">
    </form>
    <a href="todos/{{ $todo->id }}/edit">szerkesztés</a>
    </p>
@endforeach
        <a href="/todos/create">Új hozzáadása </a>


