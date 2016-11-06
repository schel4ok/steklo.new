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