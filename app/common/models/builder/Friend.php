<?php

namespace app\common\models\builder;

/**
 * Class Friend
 *
 * @package app\common\models\friend
 */
class Friend
{
    protected const INITIAL_ROWS = [];
    protected array $rows = [];

    /**
     * Friend constructor.
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * @return void
     */
    public function reset(): void
    {
        $this->rows = self::INITIAL_ROWS;
    }

    /**
     * @param array $rows
     *
     * @return void
     */
    public function setRows(array $rows): void
    {
        foreach ($rows as $key => $value) {
            $this->rows[$key] = $value;
        }
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        $result = $this->rows;

        $this->reset();

        return $result;
    }
}