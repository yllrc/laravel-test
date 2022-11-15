<!doctype html>
<html>
    <head>
    </head>
    <body>
        <FORM method="POST" action="/login">
            @csrf
            <input type="email" name="email">
            <br/>
            <input type="password" name="password">
            <br/>
            <button type="submit">登入</button>
            <a href="/create"><button type="button">創建</button></a>
        </FORM>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <script>

        </script>
    </body>
</html>
