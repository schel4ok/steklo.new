<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.App = { csrfToken: '{{ csrf_token() }}' };</script>
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
        <title>Search with Laravel Scout and Vue.js!</title>
    </head>


    <body>
        <div class="container">

            <div class="well well-sm">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search!</button>
                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
            <div id="furnitura" class="row list-group">
            <div class="item col-xs-4 col-lg-4" v-for="furnitura in furnitura">
                <div class="thumbnail">
                        <img class="group list-group-image" :src="furnitura.image" v-bind:alt="furnitura.title" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">@{{ furnitura.title }}</h4>
                            <p class="group inner list-group-item-text">@{{ furnitura.description }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">@{{ furnitura.partnumber }}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>



        </div>

        <script src="{{ elixir("js/app.js") }}"></script>
    </body>
</html>