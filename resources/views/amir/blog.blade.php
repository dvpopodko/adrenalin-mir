@extends('amir.amirbase')
@section('content')
    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <!-- Blog Item Section Begin -->
                    @foreach($blogs as $article)
                        <div class="blog-item">
                        <div class="bi-pic">
                            <img src="{{ asset($article->image_first) }}" alt="{{ $article->title }}">
                        </div>
                        <div class="bi-text">
                            <h5><a href="{{ route('blog-details', $article->id) }}">{{ $article->title }}</a></h5>
                            <ul>
                                <li>{{ $article->author }}</li>
                                <li>{{ $article->created_at}}</li>
                                <li>{{ $article->comments_count }} коментариев</li>
                            </ul>
                            <p>{{ $article->description }}</p>
                        </div>
                    </div>
                    @endforeach

                    <!-- Blog Item Section End -->
                    <div class="blog-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">Next</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 p-0">
                    <div class="sidebar-option">
                        <div class="so-categories">
                            <h5 class="title">Категории</h5>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->type}}<span>{{$category->cnt}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="so-latest">
                            <h5 class="title">Самое обсуждаемое</h5>
                            <div class="latest-large set-bg" data-setbg="img/letest-blog/latest-1.jpg">
                                <div class="ll-text">
                                    <h5><a href="blog-details">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-2.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="blog-details">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-3.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="blog-details">The $8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-4.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="blog-details">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-5.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="blog-details">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="so-tags">
                            <h5 class="title">Популярное</h5>
                            <a href="#">Gyming</a>
                            <a href="#">Body buidling</a>
                            <a href="#">Yoga</a>
                            <a href="#">Weightloss</a>
                            <a href="#">Proffeponal</a>
                            <a href="#">Streching</a>
                            <a href="#">Cardio</a>
                            <a href="#">Karate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
