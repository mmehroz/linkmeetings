{{-- * Template Name : Home * --}}
@extends('layout.master')

@section('page-title')
    {!! isset($pageContent->meta_title) ? $pageContent->meta_title : 'Link Meeting' !!}
@stop

@section('meta-keywords')
    {!! isset($pageContent->meta_keywords) ? $pageContent->meta_keywords : 'Link Meeting' !!}
@stop

@section('meta-description')
    {!! isset($pageContent->meta_description) ? $pageContent->meta_description : 'Link Meeting' !!}
@stop
@section('body-class') inner-pg blog-pg @stop
@section('content')

    <section class="blog-dt wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-8 ctrdv">
                    <figure>

                            <img src="{{ asset($featured_blogs->image) }}">

{{--                            {{ HTML::image('images/blog-dt-1.jpg', 'Link Meetings') }}--}}

                        {{--					{{ HTML::image('images/blog-dt-1.jpg', 'Link Meetings') }}--}}
                    </figure>

                    <h5><span>adventure</span> {{ date("M d Y",strtotime($featured_blogs->created_at)) }}</h5>
                    {!! $featured_blogs->content !!}

                    <div class="social">
                        <span>Share this story</span>
                        <a class="fb" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="twitter" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a class="linkedin" target="_blank" href="{{ URL::to('#') }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="list-blog wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row srch-head va-ctr">
                <div class="col-sm-12">
                    <h2 class="text-center">Related Blogs</h2>
                </div>
            </div>

            <div class="row">

                @foreach($blogs as $blogviewdata)

                    <div class="col-md-4 col-sm-6">
                        <div class="deal-bx wow fadeIn" data-wow-delay="0.2s">
                            <a href="{{ URL::to('/blog-detail/'.$blogviewdata->slug) }}">
                                <figure>
                                    <img src="{{ asset($blogviewdata->image) }}">
                                <!-- {{ HTML::image('images/blog-bx-4.jpg', 'Link Meetings') }} -->
                                </figure>
                                <div class="text">
                                    <h5>
                                        <?php
                                        $blog_des = $blog_repo->description_model::where('language_id',getlanguage()->id)->where('blog_id',$blogviewdata->blog_id)->first();
                                        if($blog_des->blogToCategories->count())
                                        {
                                        $blog_to_cats = array();

                                        foreach($blog_des->blogToCategories as $blogcat)
                                        {
                                        $blogcategories = $blogcat->category->blogDescriptionByLanguage( getlanguage()->id );

                                        if($blogcategories->count())
                                        {
                                        ?>
                                        <span>{{ $blogcategories->title }}</span>
                                        <?php
                                        }
                                        }
                                        }
                                        ?>
                                            {{ date("M d Y",strtotime($blogviewdata->created_at)) }}

                                    </h5>
                                    <h3>{{ $blogviewdata->title }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </section>

@endsection




