<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{$BASE_URL}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1781c955a4.js" crossorigin="anonymous"></script>

    <title>{$docTitle}</title>
</head>
<body class="d-flex flex-column min-vh-100 justify-content-between">

{include file="./header.tpl"}

<main class="px-2 px-lg-5 w-auto d-flex flex-column align-items-center justify-content-center">

{include file="./{$contentTemplate}"}

</main>

{include file="./footer.tpl"}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
{* <script src="mi js"></script> *}
</body>
</html>