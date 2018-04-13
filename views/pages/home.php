<?php

$pdo = DB::getInstance();
$stmt = $pdo->prepare("SELECT * FROM blogPost ORDER BY datePosted DESC LIMIT 3");
$stmt->execute();
$rows = $stmt->fetchAll();

    foreach($rows as $row) {?>
        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo substr($row['content'], 0, 300).'...<a href="http://localhost/FinalProject/index.php?controller=blogPost&action=view&blogPostID='.$row['blogPostID'].'">CLICK TO READ MORE</a>'; ?></p>
        <p><b><?php echo "Posted on: ".$row['datePosted']; ?></b></p>
        <p><?php echo "Keywords: ".$row['keywords']; ?></p><?php
    } 
 
