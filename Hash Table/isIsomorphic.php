class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
      if($s==$t) return true;
		$s = str_split($s);
		$t = str_split($t);
		
		foreach($s as $key => $char){
			if(isset($a[$char]) || isset($b[$t[$key]])){
				if($a[$char]!=$t[$key] || $b[$t[$key]]!=$char){
					return false;
				}
			}else{
				$a[$char] = $t[$key];
				$b[$t[$key]] = $char;
			}
		}
		return true;
	}
}