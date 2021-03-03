<?php

namespace app\common\models\builder;

use app\common\interfaces\FriendInterface;

/**
 * Class BoyFriend
 *
 * @package app\common\models\builder
 */
class BoyFriend extends Friend implements FriendInterface
{
    protected const INITIAL_ROWS = [
        '1' => '      ////\\\\\\\\',
        '2' => '      |      |',
        '3' => '     @  O  O  @',
        '4' => '      |  ~   |',
        '5' => '       \ -- /',
        '6' => '     ___|  |___     \__',
        '7' => '    /          \    |\ |',
        '8' => '   /            \  /|__|',
        '9' => '  /  /| .  . |\  \/ /',
        '10' => ' /  / |      | \   /',
        '11' => '<  <  |      |  \_/',
        '12' => ' \  \ |  .   |',
        '13' => '  \  \|      |',
        '14' => '    \_|      |',
        '15' => '      | O//O /',
        '16' => '      | |/  |',
        '17' => '      |  |  |',
        '18' => '      |  |  |',
        '19' => '      (  (  |',
        '20' => '      |  |  |',
        '21' => '      |  |  |',
        '22' => '     _|  |  |',
        '23' => ' cccC_Cccc___)',
    ];

    /**
     * @return void
     */
    public function reset(): void
    {
        $this->rows = self::INITIAL_ROWS;
    }

    /**
     * @return FriendInterface
     */
    public function paintTshirt(): FriendInterface
    {
        $this->setRows(
            [
                '7' => '    ///||||||\\\\\    |\ |',
                '8' => '   ////||||||\\\\\\\\  /|__|',
                '9' => '  ////||||||||\\\\\\\\/ /',
                '10' => ' /  / |||||||| \   /',
                '11' => '<  <  ||||||||  \_/',
                '12' => ' \  \ ||||||||',
                '13' => '  \  \||||||||',
            ]
        );

        return $this;
    }

    /**
     * @return FriendInterface
     */
    public function paintPants(): FriendInterface
    {
        $this->setRows(
            [
                '14' => '    \_|##&###|',
                '15' => '      |    \_|',
                '16' => '      |  |   |',
                '17' => '      |  |   |',
                '18' => '      |  |   |',
                '19' => '      (  (   |',
                '20' => '      |  |   |',
                '21' => '      |  |   |',
                '22' => '     _|__|___|',
            ]
        );

        return $this;
    }

    /**
     * @return FriendInterface
     */
    public function paintSkirt(): FriendInterface
    {
        $this->setRows(
            [
                '14' => '    \_|""""""|',
                '15' => '      | \____|',
                '16' => '      |      |',
                '17' => '      |      |',
                '18' => '      |______|',
                '19' => '      (  (   |',
                '20' => '      |  |   |',
                '21' => '      |  |   |',
                '22' => '     _|__|___|',
            ]
        );

        return $this;
    }

    /**
     * @return FriendInterface
     */
    public function paintBoots(): FriendInterface
    {
        $this->setRows(
            [
                '23' => ' /____/______)',
            ]
        );

        return $this;
    }
}
