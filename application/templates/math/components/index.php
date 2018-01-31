<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <!--<link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />-->
    <!--<link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />-->
    <title>Math Trainer</title>
    <meta name="description" content="My smartboard blog math trainer app page">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet prefetch' href='/public/css/math/style.css'>

</head>

<body translate="no">

<header>
<!--    <h1>The header</h1>-->
</header>

<main role="main">

        <?php require_once MATH_TEMPLATES_PATH . $TEMPLATE_VARS['templatePath'] ?>

</main>

<footer class="mastfoot">
    <div class="inner">
        <p class="text-center">Control-Firme application for <a href="https://getbootstrap.com/">Cornelia</a>, by <a href="https://twitter.com/mdo">Lucianu</a>.</p>
    </div>
</footer>

<noscript>
    <h2>JavaScript Required</h2>

    <p>JavaScript is required to run this trainer; please enable it in your browser.</p>
</noscript>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="/public/js/ajaxRequest.js"></script>
<script src="/public/js/math/math.js"></script>
<script src='/public/js/math/trainer.js'></script>
<script src='/public/js/math/timer.js'></script>


</body>

</html>
