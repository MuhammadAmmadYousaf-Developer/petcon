<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Loader</title>
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        body {
    margin: 0;
    padding: 0;
    font-family: Helvetica, sans-serif;
}

.container {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader {
    height: 20px; /* Adjust as needed */
    width: 250px; /* Adjust as needed */
    position: relative;
    text-align: center;
}

.loader--dot {
    animation: loader 3s ease-in-out infinite;
    height: 20px; /* Adjust as needed */
    width: 20px; /* Adjust as needed */
    border-radius: 50%;
    background-color: black;
    position: absolute;
    border: 2px solid white;
}

.loader--dot:first-child {
    background-color: yellow;
    animation-delay: 0.5s;
}

.loader--dot:nth-child(2) {
    background-color: black;
    animation-delay: 0.4s;
}

.loader--dot:nth-child(3) {
    background-color: yellow;
    animation-delay: 0.3s;
}

.loader--dot:nth-child(4) {
    background-color: black;
    animation-delay: 0.2s;
}

.loader--dot:nth-child(5) {
    background-color: yellow;
    animation-delay: 0.1s;
}

.loader--dot:nth-child(6) {
    background-color: black;
    animation-delay: 0s;
}

.loader--text {
    position: absolute;
    top: 200%;
    left: 0;
    right: 0;
    width: 4rem;
    margin: auto;
    font-weight: bold;
}

@keyframes loader {
    15%, 95% {
        transform: translateX(0);
    }

    45%, 65% {
        transform: translateX(230px); /* Adjust based on loader width and dot size */
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="loader">
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--dot"></div>
            <div class="loader--text">PetCon</div>
        </div>
    </div>
    <script>
        
        var loader= document.getElementsByTagClass('loader');
        window.addEventListener
    </script>
</body>
</html>
