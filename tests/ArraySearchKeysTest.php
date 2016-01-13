<?php
require 'array_search_keys.php';

class ArraySearchKeysTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider arraySearchKeysData
     */
    public function test_array_search_keys($input, $search, $expected)
    {
        $this->assertEquals($expected, array_search_keys($input, $search));
    }

    public function arraySearchKeysData()
    {
        return [
            [[], 'one', []],
            [['one' => 1], 'one', ['one']],
            [['one' => 1], 'two', []],
            [['one' => 1, 'lone' => 1, 'two' => 1], 'one', ['one', 'lone']],
            [['men' => 1, 'women' => 1, 'yo men' => 1, 'Men' => 1], 'men', ['men', 'women', 'yo men']],
            [['one' => 1, 'two' => 1], null, ['one', 'two']]
        ];
    }

    public function test_array_search_keys_only_accepts_arrays()
    {
        try {
            array_search_keys('passing a string');
        } catch (Exception $e) {
            return;
        }

        $this->fail('array_search_keys() should only accept an array');
    }

    public function test_array_search_keys_second_parameter_is_optional()
    {
        try {
            array_search_keys([]);
        } catch (Exception $e) {
            $this->fail('array_search_keys() second parameter should be optional');
        }
    }
}
