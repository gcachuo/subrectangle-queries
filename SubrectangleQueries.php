<?php


class SubrectangleQueries
{
    /**
     * @var Integer[][]
     */
    private $rectangle;

    /**
     * @param Integer[][] $rectangle
     */
    function __construct($rectangle)
    {
        $this->rectangle = $rectangle;
    }

    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @param Integer $newValue
     * @return NULL
     */
    function updateSubrectangle($row1, $col1, $row2, $col2, $newValue)
    {
        for ($row = $row1; $row <= $row2; $row++) {
            for ($col = $col1; $col <= $col2; $col++) {
                $this->rectangle[$row][$col] = $newValue;
            }
        }
    }

    /**
     * @param Integer $row
     * @param Integer $col
     * @return Integer
     */
    function getValue($row, $col)
    {
        return $this->rectangle[$row][$col];
    }
}

/**
 * Your SubrectangleQueries object will be instantiated and called as such:
 * $obj = SubrectangleQueries($rectangle);
 * $obj->updateSubrectangle($row1, $col1, $row2, $col2, $newValue);
 * $ret_2 = $obj->getValue($row, $col);
 */
