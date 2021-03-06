<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <!-- / google font  -->
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- cdn vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- css  -->
    <link rel="stylesheet" href="css/style.css">
    <title>indexVue</title>
</head>
<body>

    <div id="root" class="container">

        <div class="disk" v-for="(disk, index) in disks" :key="index">
            <div class="img_cont">
            <img :src="disk.poster" alt="disk.author">
            </div>
            <p> {{ disk.title }} </p>
            <p> {{ disk.author }} </p>
            <p> {{ disk.genre }} </p>
            <p> {{ disk.year }} </p>
        </div>

        

    </div>


    <script src="js/main.js"></script>
</body>
</html>