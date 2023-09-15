<h3>Hundir la flota</h3>

<table cellspacing="0">
<?php
# dins el tag ?php podem escriure codi incrustat
$n = 10;
$m = 10;
$frag1 = array(rand(1,10),rand(1,10));
$frag2 = array(rand(1,10),rand(1,10));
$frag3 = array(rand(1,10),rand(1,10));
$frag4 = array(rand(1,10),rand(1,10));
$sub1 = array(rand(1,10),rand(1,10));
$sub2 = array(rand(1,10),rand(1,10));
$sub3 = array(rand(1,10),rand(1,10));
$des1 = array(rand(1,10),rand(1,10));
$des2 = array(rand(1,10),rand(1,10));
$port1 = array(rand(1,10),rand(1,10));
$barcos=array($frag1,$frag2,$frag3,$frag4,$sub1,$sub2,$sub3,$des1,$des2,$port1);


for($j=0; $j<=$m; $j++){
    echo "  <tr>\n";
    for($i=0; $i<=$n; $i++){
        if($i>0 && $j<1){
            echo "\t\t<td style=\"border:solid 1px;width:30px\">".$i."</td>\n";
        } elseif($j>0 && $i<1){
            echo "\t\t<td style=\"border:solid 1px;width:30px\">".chr(64+$j)."</td>\n";
        } else{
            echo "\t\t<td style=\"border:solid 1px;width:30px\"></td>\n";
        }
    }
    echo "  </tr>";
}

function posFragates(){
    
}


?>

</table> 