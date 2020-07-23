class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S) { 
       $keys = array_filter(str_split($S),function($var) use ($J){
            if(in_array($var,str_split($J))){
                return $var;
            }
        });
        return count($keys);
    }
}