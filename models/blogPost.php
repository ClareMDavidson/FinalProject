<?php
  class BlogPost {
    private $blogPostID;
    private $title;
    private $content;
    private $userID;
    private $user;
    private $date;
    private $liked;
    private $loved;
    private $wowed;
    private $angered;
    private $keywords=array();
    private $comments=array();

    public function __construct($blogPostID=NULL) {
        require_once('models/comment.php');
        try {
            if ($blogPostID!=NULL){
                //Gayathri you will need to complete the constructor
                $pdo = DB::getInstance();
                $stmt = $pdo->prepare("SELECT * FROM blogPost WHERE blogPostID = :blogPostID");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                $results = $stmt->fetch();
                $stmt = $pdo->prepare("SELECT keyword FROM keyword
                    INNER JOIN blogPostKeyword
                    ON keyword.keywordID = blogPostKeyword.keywordID
                    INNER JOIN blogPost
                    ON blogPostKeyword.blogPostID = blogPost.blogPostID
                    WHERE blogPost.blogPostID = :blogPostID");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                while ($keywordresults = $stmt->fetch()){
                    array_push($this->keywords, $keywordresults['keyword']);
                }
                $this->blogPostID = $results['blogPostID'];
                $this->title = $results['title'];
                $this->content = $results['content'];
                $this->date = $results['datePosted'];
                $this->userID = $results['userID'];
                $this->liked = $results['liked'];
                $this->loved = $results['loved'];
                $this->wowed = $results['wowed'];
                $this->angered = $results['angered'];
                
                $stmt = $pdo->prepare("SELECT commentPostID from comment
                    WHERE blogPostID = :blogPostID AND approved = 'Yes'
                    ORDER BY commentScore DESC, commentPostID Desc;");
                $stmt->execute (["blogPostID"=>$blogPostID]);
                while ($results = $stmt->fetch()){
                   $comment = new Comment($results ['commentPostID']);
                   array_push($this->comments, $comment);
                }
                return true;
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
    public function create($title, $content, $keywords){
        try {
            $this->title = $title;
            $this->content = $content;
            $this->keywords = $keywords;
            $this->date = date('Y-m-d');
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("INSERT INTO blogPost(title, content, datePosted, userID) VALUES (:title, :content, :date, :userID)");
            $stmt->execute(array(
                "title" => $this->title,
                "content" => $this->content,
                "date" => $this->date,
                "userID" => $_SESSION['userID']
                //"keywords" => $this->keywords
                ));
            $this->blogPostID = $pdo->lastInsertId();
            $stmt = $pdo->prepare("INSERT IGNORE INTO keyword(keyword) VALUES (:keyword)");
            foreach($this->keywords as $keyword){
                $stmt->execute(array("keyword" =>$keyword));  
            }
            $stmt = $pdo->prepare("SELECT keywordID FROM keyword WHERE keyword = :keyword");
            $keywordstmt = $pdo->prepare("INSERT INTO blogPostKeyword(blogPostID, keywordID) VALUES (:blogPostID, :keywordID)");
            foreach($this->keywords as $keyword){
                $stmt->execute(array("keyword" =>$keyword));
                $keywordResult = $stmt->fetch();
                $keywordID= $keywordResult['keywordID'];
                $keywordstmt->execute(array("blogPostID" => $this->blogPostID, "keywordID" => $keywordID,));
            }
            return true;
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    
     public function increaseReaction($blogPostID, $reactionType){
         try{
             $pdo = DB::getInstance();
             if($reactionType=='like'){
                $stmt = $pdo->prepare("UPDATE blogPost
                   SET liked = liked +1
                   WHERE blogPostID = :blogPostID;");
             }
             elseif($reactionType=='love'){
                $stmt = $pdo->prepare("UPDATE blogPost
                   SET loved = loved +1
                   WHERE blogPostID = :blogPostID;");
             }
             elseif($reactionType=='wow'){
                $stmt = $pdo->prepare("UPDATE blogPost
                   SET wowed = wowed +1
                   WHERE blogPostID = :blogPostID;");
             }
             elseif($reactionType=='angry'){
                $stmt = $pdo->prepare("UPDATE blogPost
                   SET angered = angered +1
                   WHERE blogPostID = :blogPostID;");
             }
             $stmt->execute(array("blogPostID" =>$blogPostID));
             return true;
         } catch (Exception $ex) {
                echo $ex->getMessage().PHP_EOL;
         }
     }
    
    public function getTitle() 
        { 
            return $this->title;
        }
        
    public function getContent() 
        {
            $content = $this->content;
            $content = preg_replace('/\!\((.*?)\)/', '<img src="./views/images/userImages/\1" />', $content);
            $content = preg_replace('/\((.*?)\)\[(.*?)\]/', '<a href="\1" target="_blank">\2</a>', $content);
            $content = preg_replace('/\*\*(.*?)\*\*/', '<b>\1</b>', $content);
            $content = preg_replace('/\*(.*?)\*/', '<i>\1</i>', $content);
            $content = preg_replace('/\~(.*?)\~/', '</p><center>\1</center><p>', $content);
            return $content;
        }
    
    public function getShortContent()
        {
            $shortPost=substr($this->getContent(), 0, 800);
            //var_dump($shortPost);
            $shortPostParts=explode('<br />', $shortPost);
            //var_dump($shortPostParts);
            array_pop($shortPostParts);
            //var_dump($shortPostParts);
            $shortPost=implode('<br />', $shortPostParts);
            //var_dump($shortPost);
            return $shortPost;
        }
        
     public function getKeywords() 
        { 
            return $this->keywords;
        } 
     public function getDate() 
        { 
            return $this->date;
        }
     public function getID() 
        { 
            return $this->blogPostID;
        }
    public function getComments() 
        { 
            return $this->comments;
        }  
    public function getLikes()
        {
        return $this->liked;
        } 
    public function getLoves()
        {
        return $this->loved;
        } 
    public function getWows()
        {
        return $this->wowed;
        }
    public function getAngers()
        {
        return $this->angered;
        } 
    public function getUser()
        {
        require_once("models/user.php");
        if(!isset($this->user)){
            $this->user=new user($this->userID);
        } //only load the object when you need to use it, but once it's loaded reuse it.
        return $this->user;
        } 
  }