<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_tiem): ?> 

	<h3><?php echo $news_tiem['title']; ?></h3>
	<div class="main">
		<?php echo $news_tiem['text']; ?>
	</div>
	<p><a href="<?php echo site_url('news/'.$news_tiem['slug']);  ?>">VIew article</a></p>

<?php endforeach; ?>