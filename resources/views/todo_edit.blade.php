<form action="/todos/{{ $todo->id }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $todo->title }}">
    <input type="submit" value="mentés">
</form>
@error('title') {{$message}} @enderror
