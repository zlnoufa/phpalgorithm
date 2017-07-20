function seq_sch($array,$n,$key){
   $array[$n]=$key;
   if($i=0;i<$n;$i++){
   if($array[$i]==$key){
   break;   
}
if($i<$n){
return $i;
}else{
return -1;
}
}

}
