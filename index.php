<?php



?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.3.2 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <body>
        <div id="app">
            <header class="bg-black ">
                <h1 class=" m-0 py-5 text-white">BOOLIFY</h1>
            </header>

            <main class="bg-dark">

            <div class="container ">
                <div class="row g-5">
                    <div v-for="(disco,index) in dischi" class="col-4">
                        <div @click="showDisk(index)" class="card bg_blue text-white py-5">
                        <img class="card-img-top m-auto w-75 " :src="disco.poster" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title ">{{disco.title}}</h5>
                            <p>{{disco.author}}</p>
                            <h5>{{disco.year}}</h5>
                            <p class="m-0">{{disco.genre}}</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            </main>

            <footer>
                <!-- place footer here -->
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="./assets/js/app.js"></script>
    </body>
</html>
