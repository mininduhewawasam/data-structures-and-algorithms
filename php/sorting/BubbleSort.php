<?php

include 'Sort.php';

class BubbleSort implements Sort{

    public function sort(iterable $inputs): iterable
    {
        for($i = 0; $i < count($inputs); $i++) {

            for($j = 1; $j < count($inputs); $j++) {
                
                if($inputs[$j-1] > $inputs[$j]) {

                    $inputs = $this->swap($inputs, $j);

                } else {

                    break;

                }
            }

        }
        
        return $inputs;
    }
    
    private function swap($array, $value)
    {
        $temp = $array[$value];
        $array[$value] =  $array[$value-1];
        $array[$value-1] = $temp;
        
        return $array;
    }
}

$array = [5, 4, 3, 2, 1, 0, 1, 1, 10];

$sortedArray = new bubbleSort();

print_r($sortedArray->sort($array));

?>