<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riddle7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    body {
        animation: fadeInPage ease 1.5s;
        /* fade page in */
        animation-iteration-count: 1;
        /* fade page in */
        animation-fill-mode: forwards;
        /* fade page in */
        background-color: blue;
        font-family: 'Montserrat', sans-serif;
        color: #fef9d5;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="position-absolute top-0 start-0">
        <input class="btn btn-dark fw-bold" type="button" value="Back" onclick="history.back()">
    </div><br><br><br>
    <div class="p-3 text-center">
        <h1 class="fw-bold">Riddle 7</h1>
    </div>
    <div class="container ">
        <div class="p-5 d-flex p-2 justify-content-center text-center">
            <div class="row">

                <?php
                    echo "What 4-letter word can be written forward, backward or upside down <br>";
                    echo "and still be read from left to right? <br>";         
                                     
                ?>

            </div>
        </div>
    </div>
    <div class="p-3 text-center">
        <h1 class="fw-bold">Answer:</h1>
        <p>NOON</p>
    </div>

</body>

</html>

</html>