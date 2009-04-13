
<?php get_header(); ?>	
<div id="main-navigation">
  <div id="main-navigation-inner">

   <div class="contact">
     <ul>
      <li class="first"><a href="/">Home</a></li>
      <li class=""><a href="/archive/">Archives</a></li>
      <li class=""><a href="/projects/">Projects</a></li>
      <li class="last"><a href="/about/">About</a></li>
    </ul>
  </div>
  </div>
</div>

<div id="home">
  <p>

    <br/>
    <!--h1>Blog Posts</h1-->
    <ul class="posts">
			<?php while (have_posts()) : the_post(); ?>
        <li><span><?php the_time('d M Y') ?></span> &raquo; <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
    </ul>
  </p>
</div>

<div class="twitter">
  <div id="twitter_div">
    <h1 class="sidebar-title">Tweets</h1>
    <ul id="twitter_update_list"></ul>

    <a href="http://twitter.com/protocol7" id="twitter-link" style="display:block;text-align:right;">follow me on Twitter</a>
  </div>
</div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/protocol7.json?callback=twitterCallback2&amp;count=5"></script>

		<?php get_footer(); ?>   
</body>
</html>
