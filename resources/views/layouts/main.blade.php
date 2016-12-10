<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="@yield('keywords', 'стеклянные двери, цельностеклянные перегородки, стеклянные душевые кабины, зеркала, стеклянные полки и стеллажи, мебель из стекла и другие конструкции на заказ')" />
    <meta name="description" content="@yield('description', 'Производство и монтаж стеклянных дверей, цельностеклянных перегородок, стеклянных душевых кабин, зеркал, стеклянных полок...')" />
    <title>@yield('title', 'Стеклянные двери, стеклянные перегородки, душевые кабины, фурнитура для стекла') | 8 (495) 790-84-15 Стекло Групп</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">

    <!-- Scripts -->
    <script>   window.MyApp = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>   </script>

</head>
<body>
        <div id="app" class="flex-center position-ref full-height panel panel-default">

            <header class="layout-header panel-heading">
                @include('modules.topmenu')
                <callbackbutton></callbackbutton>
                <callbackwindow :show.sync="showCallback"></callbackwindow>

            </header>

        


            @if(Session::has('message'))
                <div class="alert alert-info">{{Session::get('message')}}</div>
            @endif
            @if(Session::has('errors'))
                <div class="alert alert-info">@foreach($errors->all() as $error){{ $error }}<br>@endforeach
            </div>
            @endif


            <content id="content" class="panel-body content" style="clear:both;">
                @include('modules.searchresults')
                @yield('content')
            </content>
        

            <div class="clearfix"></div>

            <footer id="bottommodules" class="panel-footer">@yield('bottommodules')</footer>

        </div>

        @include('modules.totop')
        
        <script src="{{ elixir("js/app.js") }}"></script>

    </body>

</html>
