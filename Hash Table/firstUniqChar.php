class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $s = array_filter(str_split($s));
        $a = [];
        $b = [];
        foreach($s as $k => $v){
            if(!isset($b[$v])){
                if(isset($a[$v])){
                    unset($a[$v]);
                    $b[$v] = $k;
                }
                else{
                    $a[$v] = $k;
                }
            }
        }
        return count($a) ? current($a) : -1;
    }
}