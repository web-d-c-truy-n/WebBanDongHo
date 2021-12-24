@extends('layout')
@section('rederbody')
<div class="mega-container">
	
    <div id="content" class="site-content container">
<div id="primary-mono" class="content-area col-md-8">
    <main id="main" class="site-main" role="main">
<article id="post-141" class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry category-watches">
<header class="entry-header">
    <h1 class="entry-title">{{$baiViet->TENBAIVIET}}</h1>		
    
    <div class="entry-meta">
        <span class="posted-on">
            <a href="#" rel="bookmark">
                <time class="entry-date published">{{$baiViet->created_at}}</time>
            </a>
        </span>
        <span class="byline"> 
            <span class="author vcard">
                <a class="url fn n" href="#">{{$baiViet->User()->HOTEN}}</a>
            </span>
        </span>		
    </div>
    <!-- .entry-meta -->
</header><!-- .entry-header -->
<div id="featured-image">
        <img width="800" height="533" src="{{asset($baiViet->HinhAnh()->URL)}}"/>
</div>
<div class="entry-content">
    {!!$baiViet->NOIDUNG!!}
</div><!-- .entry-content -->
<footer class="entry-footer">
        </footer><!-- .entry-footer -->
</article><!-- #post-## -->


    
    </main><!-- #main -->
</div><!-- #primary -->


</div><!-- #content -->
 </div>
@endsection