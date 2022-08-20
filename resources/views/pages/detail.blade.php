@extends('layout')
@section('content')
    <body>
    <header class="primary">
        <div class="firstbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="brand">
                            <a href="index.html">
                                <img src="images/logo.png" alt="Magz Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form class="search" autocomplete="off">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Type something here">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="ion-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="help-block">
                                <div>Popular:</div>
                                <ul>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Bootstrap 3</a></li>
                                    <li><a href="#">jQuery</a></li>
                                    <li><a href="#">AnguarJS</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 text-right">
                        <ul class="nav-icons">
                            <li><a href="register.html"><i class="ion-person-add"></i><div>Register</div></a></li>
                            <li><a href="login.html"><i class="ion-person"></i><div>Login</div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start nav -->
        <nav class="menu">
            <div class="container">
                <div class="brand">
                    <a href="#">
                        <img src="images/logo.png" alt="Magz Logo">
                    </a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
                </div>
                <div id="menu-list">
                    <ul class="nav-list">
                        <li class="for-tablet nav-title"><a>Menu</a></li>
                        <li class="for-tablet"><a href="login.html">Login</a></li>
                        <li class="for-tablet"><a href="register.html">Register</a></li>
                        <li><a href="category.html">Standard</a></li>
                        <li class="dropdown magz-dropdown">
                            <a href="category.html">Pages <i class="ion-ios-arrow-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="dropdown magz-dropdown">
                                    <a href="#">Authentication <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="forgot.html">Forgot Password</a></li>
                                        <li><a href="reset.html">Reset Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Category</a></li>
                                <li><a href="single.html">Single</a></li>
                                <li><a href="page.html">Page</a></li>
                                <li><a href="search.html">Search</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="dropdown magz-dropdown">
                                    <a href="#">Error <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="403.html">403</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="500.html">500</a></li>
                                        <li><a href="503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown magz-dropdown"><a href="#">Dropdown <i class="ion-ios-arrow-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="category.html">Internet</a></li>
                                <li class="dropdown magz-dropdown"><a href="category.html">Troubleshoot <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="category.html">Software</a></li>
                                        <li class="dropdown magz-dropdown"><a href="category.html">Hardware <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="category.html">Main Board</a></li>
                                                <li><a href="category.html">RAM</a></li>
                                                <li><a href="category.html">Power Supply</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="category.html">Brainware</a>
                                    </ul>
                                </li>
                                <li><a href="category.html">Office</a></li>
                                <li class="dropdown magz-dropdown"><a href="#">Programming <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="category.html">Web</a></li>
                                        <li class="dropdown magz-dropdown"><a href="category.html">Mobile <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown magz-dropdown"><a href="category.html">Hybrid <i class="ion-ios-arrow-right"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Ionic Framework 1</a></li>
                                                        <li><a href="#">Ionic Framework 2</a></li>
                                                        <li><a href="#">Ionic Framework 3</a></li>
                                                        <li><a href="#">Framework 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="category.html">Native</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="category.html">Desktop</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Mega Menu <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
                            <div class="dropdown-menu megamenu">
                                <div class="megamenu-inner">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2 class="megamenu-title">Trending</h2>
                                                </div>
                                            </div>
                                            <ul class="vertical-menu">
                                                <li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
                                                <li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
                                                <li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
                                                <li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
                                                <li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2 class="megamenu-title">Featured Posts</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <article class="article col-md-4 mini">
                                                    <div class="inner">
                                                        <figure>
                                                            <a href="single.html">
                                                                <img src="images/news/img10.jpg" alt="Sample Article">
                                                            </a>
                                                        </figure>
                                                        <div class="padding">
                                                            <div class="detail">
                                                                <div class="time">December 10, 2016</div>
                                                                <div class="category"><a href="category.html">Healthy</a></div>
                                                            </div>
                                                            <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="article col-md-4 mini">
                                                    <div class="inner">
                                                        <figure>
                                                            <a href="single.html">
                                                                <img src="images/news/img11.jpg" alt="Sample Article">
                                                            </a>
                                                        </figure>
                                                        <div class="padding">
                                                            <div class="detail">
                                                                <div class="time">December 13, 2016</div>
                                                                <div class="category"><a href="category.html">Lifestyle</a></div>
                                                            </div>
                                                            <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="article col-md-4 mini">
                                                    <div class="inner">
                                                        <figure>
                                                            <a href="single.html">
                                                                <img src="images/news/img14.jpg" alt="Sample Article">
                                                            </a>
                                                        </figure>
                                                        <div class="padding">
                                                            <div class="detail">
                                                                <div class="time">December 14, 2016</div>
                                                                <div class="category"><a href="category.html">Travel</a></div>
                                                            </div>
                                                            <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Column <i class="ion-ios-arrow-right"></i></a>
                            <div class="dropdown-menu megamenu">
                                <div class="megamenu-inner">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h2 class="megamenu-title">Column 1</h2>
                                            <ul class="vertical-menu">
                                                <li><a href="#">Example 1</a></li>
                                                <li><a href="#">Example 2</a></li>
                                                <li><a href="#">Example 3</a></li>
                                                <li><a href="#">Example 4</a></li>
                                                <li><a href="#">Example 5</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="megamenu-title">Column 2</h2>
                                            <ul class="vertical-menu">
                                                <li><a href="#">Example 6</a></li>
                                                <li><a href="#">Example 7</a></li>
                                                <li><a href="#">Example 8</a></li>
                                                <li><a href="#">Example 9</a></li>
                                                <li><a href="#">Example 10</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="megamenu-title">Column 3</h2>
                                            <ul class="vertical-menu">
                                                <li><a href="#">Example 11</a></li>
                                                <li><a href="#">Example 12</a></li>
                                                <li><a href="#">Example 13</a></li>
                                                <li><a href="#">Example 14</a></li>
                                                <li><a href="#">Example 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h2 class="megamenu-title">Column 4</h2>
                                            <ul class="vertical-menu">
                                                <li><a href="#">Example 16</a></li>
                                                <li><a href="#">Example 17</a></li>
                                                <li><a href="#">Example 18</a></li>
                                                <li><a href="#">Example 19</a></li>
                                                <li><a href="#">Example 20</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown magz-dropdown"><a href="#">Dropdown Icons <i class="ion-ios-arrow-right"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon ion-person"></i> My Account</a></li>
                                <li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
                                <li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
                                <li><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
                                <li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End nav -->
    </header>

    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar" id="sidebar">
                    <aside>
                        <div class="aside-body">
                            <figure class="ads">
                                <img src="images/ad.png">
                                <figcaption>Advertisement</figcaption>
                            </figure>
                        </div>
                    </aside>
                    <aside>
                        <h1 class="aside-title">Recent Post</h1>
                        <div class="aside-body">
                            <article class="article-fw">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img16.jpg">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="detail">
                                            <div class="time">December 26, 2016</div>
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="line"></div>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img05.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                            <div class="time">December 22, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img02.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Travel</a></div>
                                            <div class="time">December 21, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="images/news/img13.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">International</a></div>
                                            <div class="time">December 20, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                    <aside>
                        <div class="aside-body">
                            <form class="newsletter">
                                <div class="icon">
                                    <i class="ion-ios-email-outline"></i>
                                    <h1>Newsletter</h1>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="form-control email" placeholder="Your mail">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                                    </div>
                                </div>
                                <p>By subscribing you will receive new articles in your email.</p>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Film</li>
                    </ol>
                    <article class="article main-article">
                        <header>
                            <h1>Pellentesque elementum tellus id mauris faucibus</h1>
                            <ul class="details">
                                <li>Posted on 31 December, 2016</li>
                                <li><a>Film</a></li>
                                <li>By <a href="#">John Doe</a></li>
                            </ul>
                        </header>
                        <div class="main">
                            <p>Pellentesque elementum tellus id mauris faucibus, id sagittis mauris rhoncus. Donec ac iaculis dui, id convallis mauris. Fusce faucibus purus eu risus pulvinar, vel rutrum velit hendrerit. Sed urna nunc, efficitur faucibus sollicitudin non.</p>
                            <div class="featured">
                                <figure>
                                    <img src="images/news/img01.jpg">
                                    <figcaption>Image by pexels.com</figcaption>
                                </figure>
                            </div>

                            <p>Nulla facilisi. Aenean pharetra fringilla nunc a finibus. Nulla vitae pretium nunc. Pellentesque sagittis sollicitudin turpis id aliquam. Cras lobortis diam in nunc posuere, et malesuada sem gravida. Curabitur ornare massa id orci faucibus elementum. Phasellus pharetra, velit <a href="#">in egestas rutrum,</a> metus dolor maximus massa, feugiat molestie eros mauris sit amet massa. Maecenas blandit diam lacus, in luctus nulla efficitur nec. Sed sit amet quam sit amet odio scelerisque vestibulum vel sit amet ante. Cras fringilla efficitur lacinia. Cras posuere, arcu id consequat ultrices, urna urna cursus massa, at sollicitudin elit lacus quis dui. In laoreet nulla a turpis blandit sollicitudin. Donec in risus eu lorem volutpat hendrerit quis non lorem. Nulla in metus ipsum.
                            <p>Etiam sit amet augue non velit aliquet consectetur. Proin gravida, odio in facilisis pharetra, neque enim aliquam eros, vitae gravida orci elit vel magna. Integer viverra a purus id gravida. Donec laoreet mi ac auctor ultricies. Pellentesque ullamcorper est et erat ullamcorper gravida. In hac habitasse platea dictumst. Pellentesque justo mauris, mollis at tortor ut, commodo venenatis elit. Curabitur suscipit pellentesque nunc, id tempus mi facilisis sed. Curabitur molestie eu odio vitae condimentum. Donec placerat tristique neque a blandit. Nullam commodo massa ut eros elementum, in suscipit libero aliquam.</p>

                            <h4>Sed id sodales sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi.</h4>
                            <p>Nulla facilisi. Duis auctor fringilla sagittis. Fusce ornare, dui id consequat volutpat, nibh metus viverra nibh, vitae bibendum diam velit in libero. Sed dignissim quam sit amet nibh porttitor, non pellentesque metus tincidunt. Maecenas non velit sapien. </p>
                            <p>Maecenas vel dolor sit amet ligula interdum tempor id eu ipsum. Suspendisse pharetra risus ut metus elementum pulvinar. Mauris eget varius tellus. Cras et lorem vel nunc gravida porttitor.</p>
                            <blockquote>
                                Free Responsive HTML5 &amp; CSS3 Magazine Template
                            </blockquote>
                            <p>Ut est elit, vehicula tempus volutpat ut, sodales eget odio. Nunc placerat, orci ac iaculis feugiat, sem tellus efficitur tortor, mollis iaculis lacus ante nec risus. Sed consequat vehicula pretium.</p>
                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    <li><a href="#">Free Themes</a></li>
                                    <li><a href="#">Bootstrap 3</a></li>
                                    <li><a href="#">Responsive Web Design</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Web Design</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
                            </div>
                        </footer>
                    </article>
                    <div class="sharing">
                        <div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
                        <ul class="social">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="ion-social-facebook"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="ion-social-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#" class="googleplus">
                                    <i class="ion-social-googleplus"></i> Google+
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="ion-social-linkedin"></i> Linkedin
                                </a>
                            </li>
                            <li>
                                <a href="#" class="skype">
                                    <i class="ion-ios-email-outline"></i> Email
                                </a>
                            </li>
                            <li class="count">
                                20
                                <div>Shares</div>
                            </li>
                        </ul>
                    </div>
                    <div class="line">
                        <div>Author</div>
                    </div>
                    <div class="author">
                        <figure>
                            <img src="images/img01.jpg">
                        </figure>
                        <div class="details">
                            <div class="job">Web Developer</div>
                            <h3 class="name">John Doe</h3>
                            <p>Nulla sagittis rhoncus nisi, vel gravida ante. Nunc lobortis condimentum elit, quis porta ipsum rhoncus vitae. Curabitur magna leo, porta vel fringilla gravida, consectetur in libero. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            <ul class="social trp sm">
                                <li>
                                    <a href="#" class="facebook">
                                        <svg><rect/></svg>
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <svg><rect/></svg>
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="youtube">
                                        <svg><rect/></svg>
                                        <i class="ion-social-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="googleplus">
                                        <svg><rect/></svg>
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="line"><div>You May Also Like</div></div>
                    <div class="row">
                        <article class="article related col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <figure>
                                    <a href="#">
                                        <img src="images/news/img03.jpg">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                    <div class="detail">
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                        <div class="time">December 26, 2016</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="article related col-md-6 col-sm-6 col-xs-12">
                            <div class="inner">
                                <figure>
                                    <a href="#">
                                        <img src="images/news/img08.jpg">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                    <div class="detail">
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                        <div class="time">December 26, 2016</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="line thin"></div>
                    <div class="comments">
                        <h2 class="title">3 Responses <a href="#">Write a Response</a></h2>
                        <div class="comment-list">
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="reply-list">
                                    <div class="item">
                                        <div class="user">
                                            <figure>
                                                <img src="images/img01.jpg">
                                            </figure>
                                            <div class="details">
                                                <h5 class="name">Mark Otto</h5>
                                                <div class="time">24 Hours</div>
                                                <div class="description">
                                                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                                <footer>
                                                    <a href="#">Reply</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="row">
                            <div class="col-md-12">
                                <h3 class="title">Leave Your Response</h3>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Name <span class="required"></span></label>
                                <input type="text" id="name" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email <span class="required"></span></label>
                                <input type="email" id="email" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="website">Website</label>
                                <input type="url" id="website" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">Response <span class="required"></span></label>
                                <textarea class="form-control" name="message" placeholder="Write your response ..."></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary">Send Response</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
