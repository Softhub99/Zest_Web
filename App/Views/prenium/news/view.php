<?= \Zest\View\View::view('nav'); ?>
<title><?=$args['title']?></title>
<meta property="site_name" content="Zest Framework" />
<meta property="type" content="news" />
<meta name="author" content="<?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['name'] ?>">
<meta name="description" lang="en" content="<?=$args['scontent']?>">
<meta property="news:published_time" content="<?=$args['created']?>" />
<meta name="keywords" lang="en" content="<?=$args['keyword']?>">
<style type="text/css">
  p img {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

p img:hover {
  opacity: .8;
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=939233432927660&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




        <!-- ***** Breadcumb Area Start ***** -->
    <div class="zest-breadcumb-area" style="background-image: url(<?=site_base_url()?>/prenium/img/cover-small.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2><?=$args['title']?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_base_url()?>">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->
    <section class="blog-area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 zest-blog-posts">
                              <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.1s">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="<?=site_base_url()?>/read/image/<?=$args['image']?>" alt="">
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h6>By <a href="<?=site_base_url()?>/@<?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['username'] ?>"><?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['name'] ?></a></a><a href="#!"><?=$args['created']?></a>
                                          <a href="#"><a href="<?=site_base_url()?>/community/add">Any Question?</a><p style='color: green'><?=$args['est'];?> read</p><div class="fb-share-button" data-href="<?=site_base_url();?>/news/view/<?=$args['slug']?>/<?=urlencode($args['title'])?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></h6>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p class="page-view"><?php
                  echo decode_html_entity($args['content']);
                    ?></p>
                                </div>
                            </div>             
            </div>
                                        <div class="col-12 col-md-4">
                    <div class="zest-blog-sidebar">
                        <div class="blog-post-archives mb-100">
<a href="<?=site_base_url()?>/@<?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['username'] ?>"><h4><?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['name'] ?></h4></a>
                  <p>
                    Founder and CEO
                  </p>
                  <p>
                    <?= (new \Zest\Auth\User())->getByWhere('id',$args['ownerId'])[0]['bio'] ?>
                  </p>
                        </div>
                    </div>
                </div>
           </div>
         </div>
      </section>     
<?= \Zest\View\View::view('footer'); ?>