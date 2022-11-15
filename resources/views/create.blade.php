<!doctype html>
<html>
    <head>
    </head>
    <body>
        <FORM method="POST" action="/registered">
            @csrf
            <input type="text" name="name">
            <br/>
            <input type="email" name="email">
            <br/>
            <input type="password" name="password">
            <br/>
            <input type="password" name="password_confirmation">
            <br/>
            <button type="submit">創建</button>
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
