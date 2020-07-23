class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $result = [];

        $len = count($nums);
        if ($len == 0) return $result;
        if ($len == 1) return $nums;

        $counts = array_count_values($nums);
        $queue = new SplPriorityQueue();
        foreach ($counts as $number => $count) {
            $queue->insert($number, $count);
        }

        $queue->rewind();
        for ($i = 0; $i < $k; $i++) {
            $result[] = $queue->extract();
        }

        return $result;
    }
}