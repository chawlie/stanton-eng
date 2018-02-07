<?php
/**
 * Template Name: Page - Style Guide
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <section id="typography" class="page-section">
        <div class="row">
            <div class="small-12 medium-4 large-3 columns">
                <h2 class="rm-m-top">Typography</h2>
            </div>
            <div class="small-12 medium-8 columns">
                <h3>Headings</h3>
                <h1>h1. This is a very large header.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <h2>h2. This is a large header.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <h3>h3. This is a medium header.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <h4>h4. This is a moderate header.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <h5>h5. This is a small header.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <h6>h6. This is a tiny header.</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sapiente ipsa suscipit, consequatur iure ipsum, quidem corporis minima. Nisi fugit possimus iusto aliquam voluptates temporibus in alias facilis id ipsa.</p>
                <hr>
                <h3 class="secondary">Secondary Headings</h3>
                <h1 class="secondary">h1. This is a very large header.</h1>
                <h2 class="secondary">h2. This is a large header.</h2>
                <h3 class="secondary">h3. This is a medium header.</h3>
                <h4 class="secondary">h4. This is a moderate header.</h4>
                <h5 class="secondary">h5. This is a small header.</h5>
                <h6 class="secondary">h6. This is a tiny header.</h6>
                <hr>
                <h3>Lists</h3>
                <h4>Definition Lists</h4>
                <dl>
                    <dt>Lower cost</dt>
                    <dd>The new version of this product costs significantly less than the previous one!</dd>
                    <dt>Easier to use</dt>
                    <dd>We&#39;ve changed the product so that it&#39;s much easier to use!</dd>
                    <dt>Safe for kids</dt>
                    <dd>You can leave your kids alone in a room with this product and they won&#39;t get hurt (not a guarantee).</dd>
                </dl>

                <h4>Un-ordered Lists</h4>
                <ul class="disc">
                    <li>List item with a much longer description or more content.</li>
                    <li>List item</li>
                    <li>List item
                    <ul>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                        <li>Nested List Item</li>
                    </ul>
                    </li>
                    <li>List item</li>
                    <li>List item</li>
                    <li>List item</li>
                </ul>

                <h4>Ordered Lists</h4>
                <ol>
                    <li>List Item 1</li>
                    <li>List Item 2</li>
                    <li>List Item 3</li>
                </ol>

                <h3>Paragraphs</h3>
                <p class="lead">This is a lead paragraph that appears at the beginning of a section, just below the heading for that section.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo at est sit amet imperdiet. Phasellus ut nisl risus. Nam blandit lectus eu erat bibendum condimentum. Pellentesque purus lorem, ultrices eu metus ut, viverra porta augue. Donec sed nisi hendrerit, lobortis augue non, hendrerit leo. Etiam pharetra tortor ac leo sagittis, a vehicula eros fermentum. Phasellus tincidunt nulla non auctor consequat. Sed at augue hendrerit, condimentum ex finibus, tristique risus. Integer ullamcorper, libero facilisis dictum euismod, elit nunc eleifend arcu, vel hendrerit eros massa non orci. Duis scelerisque condimentum lacus id vehicula. Nullam vel justo id dui sodales posuere quis sit amet leo. Nam faucibus aliquam euismod.</p>

                <h3>Block Quotes</h3>
                <blockquote>
                    <p>I do not fear computers. I fear the lack of them. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <footer><cite title="Source Title">Isaac Asimov</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>

    <hr />

    <section id="alerts" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Alerts</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div data-alert class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    This is a success alert (div.alert.alert-success).
                </div>
                <div data-alert class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    This is an info alert (div.alert.alert-info).
                </div>
                <div data-alert class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    This is a warning alert (div.alert.alert-warning).
                </div>
                <div data-alert class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    This is a danger alert (div.alert.alert-danger).
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="icons" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Icons</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="columns small-6 col-sm-3 text-center">
                        <h2><i class="fa fa-bars"></i></h2>
                        <h2><i class="fa fa-close"></i></h2>
                        <h2><i class="fa fa-shopping-cart"></i></h2>
                        <h2><i class="fa fa-info"></i></h2>
                        <h2><i class="fa fa-plus"></i></h2>
                        <h2><i class="fa fa-cog"></i></h2>
                    </div>
                    <div class="columns small-6 col-sm-3 text-center">
                        <h2><i class="fa fa-envelope"></i></h2>
                        <h2><i class="fa fa-phone"></i></h2>
                        <h2><i class="fa fa-chevron-up"></i></h2>
                        <h2><i class="fa fa-chevron-right"></i></h2>
                        <h2><i class="fa fa-chevron-down"></i></h2>
                        <h2><i class="fa fa-chevron-left"></i></h2>
                    </div>
                    <div class="columns small-6 col-sm-3 text-center">
                        <h2><i class="fa fa-caret-up"></i></h2>
                        <h2><i class="fa fa-caret-right"></i></h2>
                        <h2><i class="fa fa-caret-down"></i></h2>
                        <h2><i class="fa fa-caret-left"></i></h2>
                        <h2><i class="fa fa-arrow-up"></i></h2>
                        <h2><i class="fa fa-arrow-right"></i></h2>
                    </div>
                    <div class="columns small-6 col-sm-3 text-center">
                        <h2><i class="fa fa-arrow-down"></i></h2>
                        <h2><i class="fa fa-facebook"></i></h2>
                        <h2><i class="fa fa-twitter"></i></h2>
                        <h2><i class="fa fa-facebook"></i></h2>
                        <h2><i class="fa fa-youtube-square"></i></h2>
                        <h2><i class="fa fa-pinterest"></i></h2>
                    </div>
                </div>
                <br /><br />
                <div class="alert alert-info">
                    This icon font is by Font Awesome. For more icons and documentation, visit <a href="http://fortawesome.github.io/Font-Awesome/">http://fortawesome.github.io/Font-Awesome/</a>.<br /><br />
                    Or, to generate your own icon set, you may use the <a href="https://icomoon.io/">IcoMoon App</a>.
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="buttons" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Buttons</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-6">
                        <p><a href="#" class="btn btn-default">.btn.btn-default</a></p>
                        <p><a href="#" class="btn btn-primary">.btn.btn-primary</a></p>
                        <p><a href="#" class="btn btn-success">.btn.btn-success</a></p>
                        <p><a href="#" class="btn btn-warning">.btn.btn-warning</a></p>
                        <p><a href="#" class="btn btn-danger">.btn.btn-danger</a></p>
                        <p><a href="#" class="btn btn-link">.btn.btn-link</a></p>
                    </div>

                    <div class="medium-6">
                        <p><a href="#" class="btn btn-primary btn-xs">.btn.btn-xs</a></p>
                        <p><a href="#" class="btn btn-primary btn-sm">.btn.btn-sm</a></p>
                        <p><a href="#" class="btn btn-primary">.btn</a></p>
                        <p><a href="#" class="btn btn-primary btn-lg">.btn.btn-lg</a></p>
                        <p><a href="#" class="btn btn-primary btn-block">.btn.btn-block</a></p>
                        <p><button type="button" class="btn btn-primary" disabled="disabled">.btn disabled</button></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="button-groups" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Button Groups</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-6">
                        <div class="btn-group btn-group-lg" role="group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                        <br /><br />

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                        <br /><br />

                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                        <br /><br />

                        <div class="btn-group btn-group-xs" role="group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                        <br /><br />
                    </div>
                    <div class="medium-6">
                        <div class="btn-group btn-group-justified" role="group">
                            <a href="#" class="btn btn-default">Left</a>
                            <a href="#" class="btn btn-default">Middle</a>
                            <a href="#" class="btn btn-default">Right</a>
                        </div>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="dropdown-buttons" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Dropdown Buttons</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-4">
                        <h4>Default</h4>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <br /><br />
                    </div>
                    <div class="medium-4">
                        <h4>Split Button</h4>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <br /><br />
                    </div>
                    <div class="medium-4">
                        <h4>Direction Variation</h4>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-primary">Dropup</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="forms" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Forms</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <form>
                    <div class="row">
                        <div class="medium-12">
                            <div class="form-group has-error">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" />
                                <span id="helpBlock" class="help-block">Please enter your full name.</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" placeholder="Email Address" />
                            </div>
                        </div>
                        <div class="large-4">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="large-4">
                            <div class="form-group">
                                <label>Website</label>
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    <input type="text" class="form-control" placeholder="yourdomain.com" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" placeholder="Enter a message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-3">
                            <div class="form-group">
                                <div class="submit"><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <hr />

    <section id="slick-carousel" class="page-section">
        <div class="row">
            <div class="small-12 medium-4 large-3 columns">
                <h2 class="rm-m-top">Slick Carousel</h2>
            </div>
            <div class="small-12 medium-8 large-9 columns">
                <div class="carousel">
                    <div><img src="http://foundation.zurb.com/docs/assets/img/examples/comet.jpg" /></div>
                    <div><img src="http://foundation.zurb.com/docs/assets/img/examples/earth.jpg" /></div>
                    <div><img src="http://foundation.zurb.com/docs/assets/img/examples/launch.jpg" /></div>
                    <div><img src="http://foundation.zurb.com/docs/assets/img/examples/satelite.jpg" /></div>
                    <div><img src="http://foundation.zurb.com/docs/assets/img/examples/space.jpg" /></div>
                </div>
                <br />
                <div class="alert alert-info">For full documentation on Slick carousel visit <a href="http://kenwheeler.github.io/slick/">http://kenwheeler.github.io/slick/</a>.</div>
            </div>
        </div>
    </section>

    <hr />

    <section id="responsive-embed" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Responsive Embed</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/0_EW8aNgKlA" frameborder="0" allowfullscreen></iframe>
                </div>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="loading-elements" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Loading Elements</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <h4>.loading.revolve</h4>
                <div class="loading-container">
                    <div class="loading revolve">
                        <div class="ball-1"></div>
                        <div class="ball-2"></div>
                        <div class="ball-3"></div>
                        <div class="ball-4"></div>
                    </div>
                </div>

                <h4>.loading.rotate</h4>
                <div class="loading-container">
                    <div class="loading rotate">
                        <div class="rotate-container-1">
                            <div class="ball-1"></div>
                            <div class="ball-2"></div>
                            <div class="ball-3"></div>
                            <div class="ball-4"></div>
                        </div>
                        <div class="rotate-container-2">
                            <div class="ball-1"></div>
                            <div class="ball-2"></div>
                            <div class="ball-3"></div>
                            <div class="ball-4"></div>
                        </div>
                        <div class="rotate-container-3">
                            <div class="ball-1"></div>
                            <div class="ball-2"></div>
                            <div class="ball-3"></div>
                            <div class="ball-4"></div>
                        </div>
                    </div>
                </div>

                <h4>.loading.circle-bounce</h4>
                <div class="loading-container">
                    <div class="loading circle-bounce">
                        <div class="ball-1"></div>
                        <div class="ball-2"></div>
                        <div class="ball-3"></div>
                    </div>
                </div>

                <h4>.loading.rectangle-bounce</h4>
                <div class="loading-container">
                    <div class="loading rectangle-bounce">
                        <div class="box-1"></div>
                        <div class="box-2"></div>
                        <div class="box-3"></div>
                        <div class="box-4"></div>
                        <div class="box-5"></div>
                    </div>
                </div>

                <h4>.loading.pulse</h4>
                <div class="loading-container">
                    <div class="loading pulse">
                        <div class="ball"></div>
                    </div>
                </div>

                <h4>.loading.dark.rectangle-bounce</h4>
                <div class="loading-container dark">
                    <div class="loading dark rectangle-bounce">
                        <div class="box-1"></div>
                        <div class="box-2"></div>
                        <div class="box-3"></div>
                        <div class="box-4"></div>
                        <div class="box-5"></div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="typography" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">List Groups</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-6">
                        <h4>Default</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="medium-6">
                        <h4>Badges</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><span class="badge">14</span>Cras justo odio</li>
                            <li class="list-group-item"><span class="badge">2</span>Dapibus ac facilisis in</li>
                            <li class="list-group-item"><span class="badge">1</span>Morbi leo risus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="labels" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Labels</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <p>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                </p>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="pagination" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Pagination</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="disabled"><a href="#">&hellip;</a></li>
                    <li><a href="#">12</a></li>
                    <li><a href="#">13</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </div>
        </div>
    </section>

    <hr />

    <section id="panels" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Panels</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <h4>Default</h4>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                    <div class="panel-footer">
                        Panel footer
                    </div>
                </div>

                <h4>Color Alternatives</h4>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel Content
                    </div>
                </div>

                <h4>With Tables</h4>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <table class="table">
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                        </tr>
                        <tr>
                            <td>Column 1 content</td>
                            <td>Column 2 content</td>
                            <td>Column 3 content</td>
                        </tr>
                        <tr>
                            <td>Column 1 content</td>
                            <td>Column 2 content</td>
                            <td>Column 3 content</td>
                        </tr>
                    </table>
                </div>

                <h4>With List Groups</h4>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel heading</h3>
                    </div>
                    <div class="panel-body">
                        Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="wells" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Wells</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <h4>Default</h4>
                <div class="well">Default well</div>

                <h4>Sizes</h4>
                <div class="well well-lg">Large well</div>

                <div class="well well-sm">Small well</div>
            </div>
        </div>
    </section>

    <hr />

    <section id="modals" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Modals</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Default modal</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-small">Small modal</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-large">Large modal</button>

                <!-- Default Modal -->
                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-default-label">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small Modal -->
                <div class="modal fade" id="modal-small" tabindex="-1" role="dialog" aria-labelledby="modal-small-label">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-small-label">Small Modal</h4>
                            </div>
                            <div class="modal-body">
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Large Modal -->
                <div class="modal fade" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large-label">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-large-label ">Large Modal</h4>
                            </div>
                            <div class="modal-body">
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br />
            </div>
        </div>
    </section>

    <hr />

    <section id="accordions" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Accordions</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="tabs" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Tabs</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                    <br />

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p>First panel content goes here...</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <p>Second panel content goes here...</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <p>Third panel content goes here...</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <p>Fourth panel content goes here...</p>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="nav-bar" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Nav Bar</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <hr />

    <section id="nav-pills" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Nav Pills</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-6">
                        <h4>Default</h4>
                        <ul class="nav nav-pills">
                            <li role="presentation" class="active"><a href="#">Home</a></li>
                            <li role="presentation"><a href="#">Profile</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                        </ul>
                        <br />

                        <h4>Stacked</h4>
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" class="active"><a href="#">Home</a></li>
                            <li role="presentation"><a href="#">Profile</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                        </ul>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="tables" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Tables</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Table Header</th>
                                <th>Table Header</th>
                                <th>Table Header</th>
                                <th>Table Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Content Goes Here</td>
                                <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                                <td>Content Goes Here</td>
                                <td>Content Goes Here</td>
                            </tr>
                            <tr>
                                <td>Content Goes Here</td>
                                <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                                <td>Content Goes Here</td>
                                <td>Content Goes Here</td>
                            </tr>
                            <tr>
                                <td>Content Goes Here</td>
                                <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                                <td>Content Goes Here</td>
                                <td>Content Goes Here</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="thumbnails" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Thumbnails</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="columns small-6 medium-3">
                        <a href="#" class="thumbnail">
                            <img class="th" src="http://placehold.it/350x250">
                        </a>
                    </div>
                    <div class="columns small-6 medium-3">
                        <a href="#" class="thumbnail">
                            <img class="th" src="http://placehold.it/350x250">
                        </a>
                    </div>
                    <div class="columns small-6 medium-3">
                        <a href="#" class="thumbnail">
                            <img class="th" src="http://placehold.it/350x250">
                        </a>
                    </div>
                    <div class="columns small-6 medium-3">
                        <a href="#" class="thumbnail">
                            <img class="th" src="http://placehold.it/350x250">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="tooltips" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Tooltips</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <p>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                </p>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="popovers" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Popovers</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <p>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" title="Popover on left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus" title="Popover on top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Popover on bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" title="Popover on right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
                </p>
                <br />
            </div>
        </div>
    </section>

    <hr />

    <section id="favicons" class="page-section">
        <div class="row">
            <div class="columns small-12 medium-4 large-3">
                <h2 class="rm-m-top">Favicons</h2>
            </div>
            <div class="columns small-12 medium-8 large-9">
                <div class="row">
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/app_icon_144x144.png" /><br />
                            iPad 3 Retina (144x144)
                        </p>
                    </div>
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/app_icon_114x114.png" /><br />
                            iPhone 4 Retina (114x114)
                        </p>
                    </div>
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/app_icon_72x72.png" /><br />
                            iPad (72x72)
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/app_icon_57x57.png" /><br />
                            iPhone Apple Touch (57x57)
                        </p>
                    </div>
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/favicon_32x32.png" /><br />
                            Favicon Retina (32x32)
                        </p>
                    </div>
                    <div class="medium-4">
                        <p>
                            <img src="<?= get_template_directory_uri() ?>/site/images/icons/favicon_16x16.png" /><br />
                            Favicon (16x16)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>
