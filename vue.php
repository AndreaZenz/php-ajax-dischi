<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <div class="bigger-container">
            <h1>My albums
            </h1>

            <div class="albums-container">
                <div class="loading" v-if="albumList.length === 0">loading albums</div>
                <div v-else="albumList.length >= 1" class="album" id="grayscale" v-for="element in albumList">
                    <div class="album-choose">
                        <!-- copertina -->
                        <img :src="element.poster">
                    </div>

                    <!-- il titolo album -->
                    <h3>{{element.title}}</h3>

                    <!-- nome artista -->
                    <h4>{{element.author}}</h4>

                    <!-- anno album -->
                    <small>{{element.year}}</small>

                </div>

            </div>
        </div>

    </div>
    <script src="Vue.js"></script>
</body>

</html>