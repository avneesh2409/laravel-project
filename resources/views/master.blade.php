<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
  
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="/user">user</a>
                        <a href="/task">task</a>
                        <a href="/task/show">show tasks</a>
                        <a href="/user/show">show users</a>
                </div>
            <div class="content">
               @yield("content")
            </div>
        </div>
    </body>
</html>
