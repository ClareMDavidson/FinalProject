<?php 
    require_once('models/keywordList.php');
    $keywordList = new keywordList();
    $keywordList->generateWithMagnitudes();?>
    <ul class="wordCloud"><?php
        foreach($keywordList->getKeywordList() as $keyword => $count){?>
        <li style="font-size:<?php echo 10+($count*4); ?>px;">
            <a href="index.php?controller=search&action=view&keyword=<?php echo $keyword;?>">
                <?php echo $keyword;?>
            </a>
        </li><?php
        }?>
    </ul>
