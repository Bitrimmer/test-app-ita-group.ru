<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>
<body class="text-center">
<div class="container" style="max-width: 400px;">

    <form>

        <h1 class="h3 mb-3 fw-normal">Пожалуйста, введите двухзначное число</h1>

        <div class="form-floating">
            <input type="number" id="num" class="form-control" maxlength='2' required id="floatingInput" style="text-align: center">
            <label for="floatingInput">Число</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Ввести</button>
    </form>
    <div id="fact"></div>
</div>


</body>
<footer>

</footer>
<style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[maxlength]').forEach(input => {
            input.addEventListener('input', e => {
                let val = e.target.value, len = +e.target.getAttribute('maxlength');
                e.target.value = val.slice(0,len);
            })
        })
    })

    $('.btn-primary').click(function(e){
        e.preventDefault();
        let num = $('#num').val();
        $.get('http://numbersapi.com/'+num+'/trivia?notfound=floor&fragment', function(data) {
            $('#fact').text(data);
        });
    })


</script>
