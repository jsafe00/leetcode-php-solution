class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
    foreach($nums as $key => $num){
            for($i = $key+1; $i<count($nums);$i++){
                if($nums[$key]+$nums[$i] == $target){
                    return [$key, $i];
                }
            }
        }
    }
}