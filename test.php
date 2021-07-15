<?php

function selfNumber(array $numbers)
{
    $selfNumber = [];
    $junctionNumber = [];
    foreach ($numbers as $number) {
        $splitNumber = str_split((string) $number);

        $generator = $number + array_sum($splitNumber);

        if (!in_array($generator, $junctionNumber)) {
            array_push($selfNumber, $number);
            array_push($junctionNumber, $generator);
        } else {
            $index = array_search($generator, $junctionNumber);
            if ($index !== false) {
                unset($selfNumber[$index]);
            }
        }
    }
    return array_sum($selfNumber);
}
echo selfNumber(range(1, 5000));
