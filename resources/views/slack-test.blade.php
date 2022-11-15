<!doctype html>
<html>
    <head>
    </head>
    <body>
        <input type="text" id="text">
        <button id="send">發送</button>

        <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            $('#send').on('click', function(){
                axios.post('/slack-send', {
                    text: $('#text').val()
                })
                .then( (response) => {
                    alert('已發送');
                })
                .catch( (error) => {
                    console.log(error);
                })
            });

        </script>
    </body>
</html>
