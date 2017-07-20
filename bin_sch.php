function bin_sch($array,$low,$high,$key){
   if($low<=$high){
   $mid=intval(($low+$high)/2);
   if($array($mid)==$key){
   return $mid;

    }elseif($key<$array[mid]){
    return bin_sch($array,$low,$mid,$key);
  }else{
     return bin_sch($array,$mid,$high,$key);
  }
}
return -1;
}
