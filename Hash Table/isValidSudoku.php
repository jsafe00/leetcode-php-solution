class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
     function isValidSudoku($board) {
        $maps = array(
            "rowsMap" => array(),
            "colsMap" => array(),
            "boxMap" => array(),
        );
        foreach($maps as &$map){
            for($i=0; $i<9; ++$i) {
                $map[$i] = array();
            }
        }
        for($i=0; $i<9; ++$i){
            for($j=0; $j<9; ++$j){
                if($board[$i][$j] == ".")
                    continue;
                //rows
                if(array_key_exists($board[$i][$j],$maps["rowsMap"][$i])) {
                    return false;
                }
                else {
                    $maps["rowsMap"][$i][$board[$i][$j]] = 1;
                }
                //cols
                if(array_key_exists($board[$i][$j],$maps["colsMap"][$j])) {
                    return false;
                }
                else {
                    $maps["colsMap"][$j][$board[$i][$j]] = 1;
                }
                //box
                $boxIndex = $this->boxIndex($i, $j);
                if(array_key_exists($board[$i][$j],$maps["boxMap"][$boxIndex])) {
                    return false;
                }
                else {
                    $maps["boxMap"][$boxIndex][$board[$i][$j]] = 1;
                }
            }
        }
        return true;
    }

    private function boxIndex($i, $j) {
        return 3*floor($i/3) + floor($j/3);
    }
}