class MyHashMap {
    /**
     * Initialize your data structure here.
     */
    public $data = [];
    function __construct() {
        
    }
  
    /**
     * value will always be non-negative.
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $this->data[$key] = $value;
    }
  
    /**
     * Returns the value to which the specified key is mapped, or -1 if this map contains no mapping for the key
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        return isset($this->data[$key])?$this->data[$key]:-1;
    }
  
    /**
     * Removes the mapping of the specified value key if this map contains a mapping for the key
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->data[$key]);
    }
}
/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */