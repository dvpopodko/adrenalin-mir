@extends('amir.amirbase')
@section('content')

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="../img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="bh-text">
                        <h3>{{$article->title}}</h3>
                        <ul>
                            <li>{{$article->author}}</li>
                            <li>{{$article->created_at}}</li>
                            <li>{{$article->comments_count}} комментариев</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">
                            {!!$article->article!!}
                        </div>
                        <div class="blog-details-tag-share">
                            <div class="tags">
                                <a href="#">Body buiding</a>
                                <a href="#">Yoga</a>
                                <a href="#">Weightloss</a>
                                <a href="#">Streching</a>
                            </div>
                            <div class="share">
                                <span>Share</span>
                                <a href="#"><i class="fa fa-facebook"></i> 82</a>
                                <a href="#"><i class="fa fa-twitter"></i> 24</a>
                                <a href="#"><i class="fa fa-envelope"></i> 08</a>
                            </div>
                        </div>
                        <div class="blog-details-author">
                            <div class="ba-pic">
                                <img src="../img/blog/details/blog-profile.jpg" alt="">
                            </div>
                            <div class="ba-text">
                                <h5>Lena Mollein.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation.</p>
                                <div class="bp-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment-option">
                                    <h5 class="co-title">Comment</h5>
                                    <div class="co-item">
                                        <div class="co-widget">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                            <a href="#"><i class="fa fa-share-square-o"></i></a>
                                        </div>
                                        <div class="co-pic">
                                            <img src="../img/blog/details/comment-1.jpg" alt="">
                                            <h5>Brandon Kelley</h5>
                                        </div>
                                        <div class="co-text">
                                            <p>Neque porro quisquam est, qui dolorem ipsum dolor sit amet, consectetur,
                                                adipisci velit dolore.</p>
                                        </div>
                                    </div>
                                    <div class="co-item reply-comment">
                                        <div class="co-widget">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                            <a href="#"><i class="fa fa-share-square-o"></i></a>
                                        </div>
                                        <div class="co-pic">
                                            <img src="../img/blog/details/comment-2.jpg" alt="">
                                            <h5>Brandon Kelley</h5>
                                        </div>
                                        <div class="co-text">
                                            <p>Neque porro quisquam est, qui dolorem ipsum dolor sit amet, consectetur,
                                                adipisci velit dolore.</p>
                                        </div>
                                    </div>
                                    <div class="co-item">
                                        <div class="co-widget">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                            <a href="#"><i class="fa fa-share-square-o"></i></a>
                                        </div>
                                        <div class="co-pic">
                                            <img src="../img/blog/details/comment-3.jpg" alt="">
                                            <h5>Brandon Kelley</h5>
                                        </div>
                                        <div class="co-text">
                                            <p>Neque porro quisquam est, qui dolorem ipsum dolor sit amet, consectetur,
                                                adipisci velit dolore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="leave-comment">
                                    <h5>Leave a comment</h5>
                                    <form action="#">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Website">
                                        <textarea placeholder="Comment"></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection
