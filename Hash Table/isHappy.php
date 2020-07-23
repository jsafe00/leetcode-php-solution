class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    public $unique = array();
    function isHappy($n) {
        
        $arr = str_split($n);
        
        $sum = 0;
        foreach($arr as $val){
            $sum += $val*$val;
        }        
        
        if($sum == 1){
            return true;
        } else {
            
            if(!in_array($sum, $this->unique)){
                $this->unique[] = $sum;
                return $this->isHappy($sum);
            } else {
                return false;
            }
            
        }
        
    }
}