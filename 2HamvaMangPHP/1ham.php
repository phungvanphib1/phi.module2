<?php
// function hello(){
//     echo 'xin chào'. '<br>';
// }
// hello(); 

// function sum($a,$b){
//     $result = $a+$b;
//     return $result;
// }
// echo (sum(1,2));
function cong($a,$b)
{
    return $a+$b;
}
function tru($a,$b)
{
    return $a-$b;
}
function nhan($a,$b)
{
    return $a*$b;
}
function chia($a,$b)
{
    return $a/$b;
}
function pheptinh($pt,$a,$b){
    switch($pt){
        case "cong":
            $resl = cong($a,$b);
            echo $a ."+".$b.'='.$resl;
            break;

            case "tru":
                $resl = tru($a,$b);
                echo $a ."-".$b.'='.$resl;
                break;
                case "nhan":
                    $resl = nhan($a,$b);
                    echo $a ."+".$b.'='.$resl;
                    break;
                    case "chia":
                        $resl = chia($a,$b);
                        echo $a ."//".$b.'='.$resl;
                        break;
        
    }
}
pheptinh("cong",3,4);
?>