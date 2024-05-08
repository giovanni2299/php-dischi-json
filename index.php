<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi-Json</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="bg-color-light" id="app">
        <header>
            <img src="./img/2641594.webp" alt="">
        </header>
        <div class="container ">
            <ul class="row">
                <li class="col-4 list-unstyled p-5" v-for="disk in disks">
                    <div class="card h-100 bg-color-card p-3">
                        <img style="width: 100%;" :src="disk.poster" alt="">
                        <img src="" alt="">
                        <div class="card-body text-center text-white">
                            <h3>
                                {{disk.title}}
                            </h3>
                            <p>
                                {{disk.author}}
                            </p>
                            <h4>
                                {{disk.year}}
                            </h4>
                        </div>
                    </div>


                </li>
            </ul>

        </div>
        <footer class="footer">

        </footer>
    </div>





    <script src="./js/app.js"></script>
</body>

</html>