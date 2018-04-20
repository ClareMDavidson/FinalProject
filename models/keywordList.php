<?php
class keywordList {
    private $keywordList=array();
    
    public function generateWithMagnitudes() {
        try{
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("
                SELECT keyword.keyword, COUNT(*) AS magnitude
                FROM keyword
                INNER JOIN blogPostKeyword
                on keyword.keywordID = blogPostKeyword.keywordID
                GROUP BY keyword
                ORDER BY RAND()
                LIMIT 20;");
            $stmt->execute();
            $results = $stmt->fetch();
            $keywordList = array();
            while ($keywordList = $stmt->fetch()) {
//                array_push($this->keywordList, $keywordList['keyword']);
                $this->keywordList[$keywordList['keyword']] = $keywordList['magnitude'];
            }
        }catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        } 
    }
    public function getKeywordList(){
        return $this->keywordList;
    }
}
//array(
//    'this' => 5,
//    'that' => 2
//)