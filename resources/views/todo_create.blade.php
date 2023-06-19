<form action="/todos" method="post">
    @csrf
    <input type="text" name="title">
    <input type="submit" value="létrehoz">
</form>
@error('title') {{$message}} @enderror
