<?php

class archivePostDisplay {
    
    private $archivePost = array();
    const januaryStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____01___' ORDER BY datePosted DESC";
    const februaryStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____02___' ORDER BY datePosted DESC";
    const marchStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____03___' ORDER BY datePosted DESC";
    const aprilStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____04___' ORDER BY datePosted DESC";
    const mayStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____05___' ORDER BY datePosted DESC";
    const juneStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____06___' ORDER BY datePosted DESC";
    const julyStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____07___' ORDER BY datePosted DESC";
    const augustStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____08___' ORDER BY datePosted DESC";
    const septemberStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____09___' ORDER BY datePosted DESC";
    const octoberStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____10___' ORDER BY datePosted DESC";
    const novemberStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____11___' ORDER BY datePosted DESC";
    const decemberStmt = "SELECT blogPostID FROM blogPost WHERE datePosted LIKE '_____12___' ORDER BY datePosted DESC";
    
    
    public function __construct(){
        $month = $_GET['month'];
        require_once('blogPost.php');
        $pdo = DB::getInstance();
        switch ($month) {
            case '01':
                $stmt = $pdo->prepare(archivePostDisplay::januaryStmt);
                break;
            case '02':
                $stmt = $pdo->prepare(archivePostDisplay::februaryStmt);
                break;
            case '03':
                $stmt = $pdo->prepare(archivePostDisplay::marchStmt);
                break;
            case '04':
                $stmt = $pdo->prepare(archivePostDisplay::aprilStmt);
                break;
            case '05':
                $stmt = $pdo->prepare(archivePostDisplay::mayStmt);
                break;
            case '06':
                $stmt = $pdo->prepare(archivePostDisplay::juneStmt);
                break;
            case '07':
                $stmt = $pdo->prepare(archivePostDisplay::julyStmt);
                break;
            case '08':
                $stmt = $pdo->prepare(archivePostDisplay::augustStmt);
                break;
            case '09':
                $stmt = $pdo->prepare(archivePostDisplay::septemberStmt);
                break;
            case '10':
                $stmt = $pdo->prepare(archivePostDisplay::octoberStmt);
                break;
            case '11':
                $stmt = $pdo->prepare(archivePostDisplay::novemberStmt);
                break;
            case '12':
                $stmt = $pdo->prepare(archivePostDisplay::decemberStmt);
                break;
            default:
                echo "Sorry there are no archived blog posts for this month.<br>Please select an alternative month.";
                break;
        }
   
        
        
        $stmt->execute();
        while ($results = $stmt->fetch()) {
            $blogPost = new BlogPost($results ['blogPostID']);
            array_push($this->archivePost, $blogPost);
        }
    }
    
    public function getArchivePost()
    {
        return $this->archivePost;
    }
}
    
    
   
    
    

