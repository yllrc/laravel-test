<!doctype html>
<html>
    <head>
    </head>
    <body>


        <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('adf625dba7e3a87b95a0', {
                    cluster: 'ap3',
                    channelAuthorization: {
                        endpoint: "/broadcasting/auth"
                        // ,headers: { "X-CSRF-Token": "{{csrf_token()}}" },
                    },
                });

            var channel = pusher.subscribe('private-pusher-test');
            // var channel = pusher.subscribe('pusher-test');
            channel.bind('test.pusher', function(data) {
                    alert(JSON.stringify(data));
                });
        </script>
    </body>
</html>
