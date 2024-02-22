function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $samStarts= $s;
    $samEnds = $t;
    $appTree = $a;
    $orangeTree = $b;
    $samsApples = 0;
    $samsOranges = 0;
    
    //count the apples
    foreach($apples as $apple){
        
        $appCount = $apple + $appTree;
        
        if($appCount >= $samStarts && $appCount <= $samEnds){
            $samsApples++;
        }
    }
    
    //count the oranges
    foreach($oranges as $orange){
        
        $orangeCount = $orange + $orangeTree;
        
        if($orangeCount >= $samStarts && $orangeCount <= $samEnds){
            $samsOranges++;
        }
    }
    
    echo $samsApples . "\n". $samsOranges;


}

