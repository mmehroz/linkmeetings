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



<section class="hot-deals-sec blog-fea wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>
					Featured Blogs
				</h2>
			</div>
		</div>



				<div class="row">
					<div class="col-sm-12">

                        @if($featured_blogs->count())
                            <div class="bx-slide owl-theme owl-carousel">
                                @foreach($featured_blogs as $featured_blog)
                                    <?php $blogDescription = $featured_blog->blogDescriptionByLanguage( getlanguage()->id ); ?>

                                    @if($blogDescription->status == 'Active')
                                            <div class="item">
                                                <div class="deal-bx wow fadeIn" data-wow-delay="0.2s">
                                                    <a href="{{ URL::to('/blog-detail/'.$featured_blog->slug) }}">
                                                    @if( !empty( $blogDescription->image) )
                                                        <figure>
                                                            <img src="{{ asset( $blogDescription->image ) }}" />
                                                        </figure>
                                                    @endif
                                                        <div class="text">
                                                            <h5>
                                                                    @if( $blogDescription->blogToCategories->count() )
                                                                        @foreach($blogDescription->blogToCategories as $blogToCategory)
                                                                            <?php $getcat = $blogToCategory->category->blogDescriptionByLanguage( getlanguage()->id ); ?>
                                                                            @if($getcat)
                                                                                    <span>
                                                                                        {{ $getcat->title }}
                                                                                    </span>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                 {{ date("M d Y",strtotime($featured_blog->created_at)) }}
                                                            </h5>
                                                            <h3>{{ $blogDescription->title }}</h3>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif

					</div>
				</div>



	</div>
</section>

<section class="list-blog wow fadeInUp" data-wow-delay="0.2s">
	<div class="container">
		<div class="row srch-head va-ctr">
			<div class="col-sm-6">
{{--                {{ $blogview->total() }}--}}
				<p>Showing <strong>{{ $blogs->firstItem() }} to {{ $blogs->lastItem() }}</strong> of {{ $blogs->total() }} posts</p>
			</div>
{{--			<div class="col-sm-6 text-right">--}}
{{--				<select>--}}
{{--					<option>Destinations</option>--}}
{{--					<option>Hotels</option>--}}
{{--					<option>Experiences</option>--}}
{{--					<option>&nbsp;&nbsp;&nbsp;Indoors</option>--}}
{{--					<option>&nbsp;&nbsp;&nbsp;Outdoors</option>--}}
{{--				</select>--}}
{{--			</div>--}}
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



		<div class="row wow fadeInUp" data-wow-delay="0.2s">
			<div class="col-sm-12">
				<div class="paginate text-center">
                    {{ $blogs->links() }}
					<div class="info">

                        <p>Showing total results {{ $blogs->total() }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection




