<?php

namespace app\common\models\builder;

use app\common\interfaces\FriendInterface;

/**
 * Class GirlFriend
 *
 * @package app\common\models\builder
 */
class GirlFriend extends Friend implements FriendInterface
{
    protected const INITIAL_ROWS = [
        '1' => '      ////\\\\\\\\',
        '2' => '     |////   ||',
        '3' => '     @  O  O  @',
        '4' => '     ||  ~   ||',
        '5' => '     ||\ == /||',
        '6' => '     ___|  |___     \__',
        '7' => '    /          \    |\ |',
        '8' => '   /            \  /|__|',
        '9' => '  /  /(* )(* )\  \/ /',
        '10' => ' /  / |      | \   /',
        '11' => '<  <  |      |  \_/',
        '12' => ' \  \ |  .   |',
        '13' => '  \  \|      |',
        '14' => '    \/        \\',
        '15' => '     |   \/    |',
        '16' => '     \   |    /',
        '17' => '      |  |   /',
        '18' => '      |  |  |',
        '19' => '      (  (  |',
        '20' => '      |  |  |',
        '21' => '      |  |  |',
        '22' => '     _|  |  |',
        '23' => '  cccC_Cccc__)',
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
                '7' => '    ///|\__/|\\\\\    |\ |',
                '8' => '   ////||||||\\\\\\\\  /|__|',
                '9' => '  /  /(||)(||)\\  \\/ /',
                '10' => ' /  / |||||||| \   /',
                '11' => '<  <  |      |  \_/',
                '12' => ' \  \ |  .   |',
                '13' => '  \  \|      |',
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
                '14' => '    \/========\\',
                '15' => '     |   ^     |',
                '16' => '     \   |    /',
                '17' => '      |  |   /',
                '18' => '      |  |   |',
                '19' => '      (  (   |',
                '20' => '      |__|___|',
                '21' => '      |  |  |',
                '22' => '     _|  |  |',
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
                '14' => '    \///||||\\\\\\',
                '15' => '    ///|||||\\\\\\\\',
                '16' => '   ///|||||||\\\\\\\\',
                '17' => '      |  |   /',
                '18' => '      |  |  |',
                '19' => '      (  (  |',
                '20' => '      |  |  |',
                '21' => '      |  |  |',
                '22' => '     _|  |  |',
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
                '23' => '  (___/(___/\|',
            ]
        );

        return $this;
    }
}
