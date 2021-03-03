<?php

namespace app\common\interfaces;

/**
 * Interface FriendInterface
 *
 * @package app\common\interfaces
 */
interface FriendInterface
{
    /**
     * @param array $rows
     *
     * @return void
     */
    public function setRows(array $rows): void;

    /**
     * @return FriendInterface
     */
    public function paintTshirt(): FriendInterface;

    /**
     * @return FriendInterface
     */
    public function paintPants(): FriendInterface;

    /**
     * @return FriendInterface
     */
    public function paintSkirt(): FriendInterface;

    /**
     * @return FriendInterface
     */
    public function paintBoots(): FriendInterface;

    /**
     * @return array
     */
    public function getResult(): array;
}