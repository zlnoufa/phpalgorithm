
function delete_array_element($array,$i){
   $len=count($array);
   for($j=$i;$j<$len;j++){
      $array[$j]=$array[$j+1];
   }
   array_pop($array);
   return $array;
}
