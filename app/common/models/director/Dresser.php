<?php

namespace app\common\models\director;

use app\common\interfaces\FriendInterface;

/**
 * Class Dresser
 *
 * @package app\common\models\director
 */
class Dresser
{
    private FriendInterface $friend;

    /**
     * @param FriendInterface $friend
     *
     * @return $this
     */
    public function setFriend(FriendInterface $friend): Dresser
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * @return void
     */
    public function paintCasualFriend(): void
    {
        $this->friend
            ->paintTshirt()
            ->paintPants()
            ->paintBoots();
    }

    /**
     * @return void
     */
    public function paintBarmenFriend(): void
    {
        $this->friend
            ->paintTshirt()
            ->paintSkirt()
            ->paintBoots();
    }
}