class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $seen = array();
        foreach( $nums as $i => $n ) {
            if( isset($seen[$n]) ) {
                if( abs( $i - $seen[$n] ) <= $k ) {
                    return true;
                }
            }
            $seen[$n] = $i;
        }
        return false;
    }
}