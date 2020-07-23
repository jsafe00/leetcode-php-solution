class RandomizedSet {
     public $set;

        /**
         * Initialize your data structure here.
         */
        function __construct() {
            $this->set = [];
        }

        /**
         * Inserts a value to the set. Returns true if the set did not already contain the specified element.
         * @param Integer $val
         * @return Boolean
         */
        function insert($val) {
            if (array_key_exists($val, $this->set)) {
                return false;
            } else {
                $this->set[$val] = $val;
                return true;
            }
        }

        /**
         * Removes a value from the set. Returns true if the set contained the specified element.
         * @param Integer $val
         * @return Boolean
         */
        function remove($val) {
            if (array_key_exists($val, $this->set)) {
                unset($this->set[$val]);
                return true;
            } else {
                return false;
            }
        }

        /**
         * Get a random element from the set.
         * @return Integer
         */
        function getRandom() {

            $array = [];

            if (count($this->set)==0) {
                return null;
            }

            foreach ($this->set as $item) {
                $array[] = $item;
            }

            $index = random_int(0, count($array)-1);
            return $this->set[$array[$index]];

        }
}

/**
 * Your RandomizedSet object will be instantiated and called as such:
 * $obj = RandomizedSet();
 * $ret_1 = $obj->insert($val);
 * $ret_2 = $obj->remove($val);
 * $ret_3 = $obj->getRandom();
 */