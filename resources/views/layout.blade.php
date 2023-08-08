<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('head')
</head>
<body>
    <!-- <x-message type="error" msg="ez az üzenet!"/> -->
    <nav>
        <a href="/telefonkonyv">Ez a telefonkönyv</a>
        <a href="/todos">Ez a todo</a>
    </nav>
    @yield('contend')
</body>
</html>