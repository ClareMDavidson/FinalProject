<h2><?php echo $blogPost->getTitle();?></h2>
<p><?php echo $blogPost->getContent(); ?></p>
<p><b><?php echo "Posted on: ". $blogPost->getDate(); ?></b></p>
<p><?php echo "Keywords: ".$blogPost->getKeywords(); ?></p>
