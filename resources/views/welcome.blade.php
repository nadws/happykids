<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .tengah {
            margin-top: 80px;
        }

        a:link {
            text-decoration: none;
        }

        .card {
            box-shadow: -1px 15px 30px -12px black;
            border-radius: 14px;
        }

        .bor {
            border-radius: 14px;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body>

    <div class="container tengah">
        <div class="row ">
            <div class="col-lg-4">
                <a href="{{route('isi_formulir')}}">
                    <div class="card">
                        <img class="bor" src="{{asset('assets')}}/img_awal/question2.jpg" alt="" width="100%"
                            height="300px">
                        <div class="card-body">
                            <center>
                                <h4 style="color: #787878;">Formulir</h4>
                            </center>
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>