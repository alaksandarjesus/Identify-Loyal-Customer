<?php

include('common.php');
session_start();

$postdata = json_decode(file_get_contents("php://input"));
$update = $db -> update('clickcounts','count = count + 1','userid = '.$_SESSION['user']['userid'].'&& page = ?', array($postdata->page));
if(!$update){
    $values = array('page' => $postdata ->page, 'createdOn'=> $date, 'userid'=>$_SESSION['user']['userid']);
    $update = $db -> insert('clickcounts',$values);
};

$getuserclicks = $db->get('clickcountid,page, count, loyal','clickcounts','userid = '.$_SESSION['user']['userid']);
if(count($getuserclicks) > 1){
    
    /*Method 1 : Update as loyal if the page has largest click count compared with other pages*/
    
   /* for($i = 0; $i < count($getuserclicks); $i++){
        
             if($getuserclicks[$i]['count']>$getuserclicks[$i+1]['count']){
                    $db->update('clickcounts','loyal = 1','clickcountid = ?', array($getuserclicks[$i]['clickcountid']));
                    $db->update('clickcounts','loyal = 0','clickcountid = ?', array($getuserclicks[$i+1]['clickcountid']));
                }
            else{
                    $db->update('clickcounts','loyal = 0','clickcountid = ?', array($getuserclicks[$i]['clickcountid']));
                    $db->update('clickcounts','loyal = 1','clickcountid = ?', array($getuserclicks[$i+1]['clickcountid']));

            };
        
        if($i == count($getuserclicks)-2){break;}
    
    };
    
    
    */
    /*Method 2 : Update as loyal if the page has largest click count compared with other pages*/
    $firstbiggest = 0;
    $secondbiggest = 0;
    $notloyal = false;
    $biggestid = 0;
    
    foreach($getuserclicks as $pages){
        if($pages['count'] > $firstbiggest){$secondbiggest=$firstbiggest;$firstbiggest = $pages['count']; $biggestid =$pages['clickcountid'];}
        elseif($pages['count'] == $firstbiggest){$notloyal = true;}
        elseif($pages['count']>$secondbiggest){$secondbiggest = $pages['count'];};
    };
   $db->update('clickcounts','loyal = 0','userid = ?', array($_SESSION['user']['userid']));
   if(!$notloyal && $firstbiggest > 2*$secondbiggest){$db->update('clickcounts','loyal = 1','clickcountid = ?', array($biggestid));};
    echo $biggestid;
};
    