class MyHashSet {
    /**
     * Initialize your data structure here.
     */
     protected $values = [];

    function __construct() {
        
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
         $this->values[$key] = true;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        if(isset($this->values[$key])){
            unset($this->values[$key]);
        }

    }
  
    /**
     * Returns true if this set contains the specified element
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
         return isset($this->values[$key]);
    }
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */