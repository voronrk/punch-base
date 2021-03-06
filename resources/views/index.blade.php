<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <script type="module" src="/js/script.js" defer></script>
    <script  src="/js/vue.js" defer></script>
    <title>Каталог штанц-форм</title>
</head>
<body>
    <div class="container">
    
    @include('includes.header')

    <section class="section">
        <div class="columns">
            @include('includes.filter')
            @include('includes.cards')            
        </div>
    </div>
    </section>

    @include('includes.modal')

</body>
</html>