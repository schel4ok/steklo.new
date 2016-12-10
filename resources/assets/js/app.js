
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
// js files can be imported without specifying extension
// libraries
require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('search', require('./components/search.vue'));

Vue.component('callbackbutton', require('./components/callbackbutton.vue'));
Vue.component('callbackwindow', require('./components/callbackwindow.vue'));
Vue.component('todo', require('./components/todo.vue'));
//Vue.component('search', require('./components/search.vue'));

/*
https://gist.github.com/TahaSh/99df18b049cbf2402c02
http://taha-sh.com/blog/setting-up-ajax-validation-with-laravel-vuejs-in-no-time
http://taha-sh.com/blog/how-to-create-a-reusable-modal-box-in-laravel-vuejs
https://adamwathan.me/2016/01/04/composing-reusable-modal-dialogs-with-vuejs/

*/

const app = new Vue({

    el: '#app',

    data: {
    	showCallback: false,

    	// search
	    furnitura: [],
	    loading: false,
	    error: false,
    	query: ''
	},

    computed: {


    },


	methods: {
		// search
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

});