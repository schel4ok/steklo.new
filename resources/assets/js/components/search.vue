<template>

            <div id="furnitura" class="row list-group">
            <div name="q" class="search navbar-left">
                <input type="text" name="search" v-model="query" :value="old('search')" class="form-control fa fa-search" placeholder=" Найти...">
                <button class="btn btn-link" type="button" click="search()" v-if="!loading"><i class="fa fa-search"> </i></button>
                <button class="btn btn-link" type="button" disabled="disabled" v-else-if="loading"><i class="fa fa-search"> </i> Ищем...</button>
            </div>


            <div class="item col-xs-4 col-lg-4" v-for="furnitura in furnitura">
                <div class="thumbnail">
                        <img class="group list-group-image" :src="furnitura.image" v-bind:alt="furnitura.title" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">{{ furnitura.title }}</h4>
                            <p class="group inner list-group-item-text">{{ furnitura.description }}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">{{ furnitura.partnumber }}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</template>

<script>
    export default {

    data () {
        return {
            furnitura: [],
            loading: false,
            error: false,
            query: ''
        }
    },


    methods: {

        search: function() {
            // Clear the error message.
            this.error = '';
            // Empty the furnitura array so we can fill it with the new furnitura.
            this.furnitura = [];
            // Set the loading property to true, this will display the "Searching..." button.
            this.loading = true;

            // Making a get request to our API and passing the query to it.
            this.$http.get('/api/search?q=' + this.query).then((response) => {
                // If there was an error set the error message, if not fill the furnitura array.
                response.body.error ? this.error = response.body.error : this.furnitura = response.body;
                // The request is finished, change the loading to false again.
                this.loading = false;
                // Clear the query.
                this.query = '';
            });
        }
    }

}
</script>
