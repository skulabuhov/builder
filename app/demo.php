<?php

namespace app;

use app\common\helpers\FormatHelper;
use app\common\helpers\PrintHelper;
use app\common\interfaces\FriendInterface;
use app\common\models\builder\BoyFriend;
use app\common\models\builder\GirlFriend;
use app\common\models\director\Dresser;

require_once __DIR__.'/../vendor/autoload.php';

function paint(FriendInterface $friend)
{
    $dresser = new Dresser();

    $naked = FormatHelper::setOneLengthForLines($friend->getResult());

    $dresser
        ->setFriend($friend)
        ->paintCasualFriend();

    $casual = FormatHelper::setOneLengthForLines($friend->getResult());

    $dresser
        ->setFriend($friend)
        ->paintBarmenFriend();;

    $barmen = FormatHelper::setOneLengthForLines($friend->getResult());

    PrintHelper::newLines(
        FormatHelper::arrayRightJoin(
            $naked,
            $casual,
            $barmen
        )
    );
}

PrintHelper::newLine('Паттерн "Строитель"');

PrintHelper::newLine('-----');

PrintHelper::newLine('Девушка: голая, повседневная, официантка');

PrintHelper::newLine('');

paint(new GirlFriend());

PrintHelper::newLine('');

PrintHelper::newLine('-----');

PrintHelper::newLine('Парень: голый, повседневный, официант');

PrintHelper::newLine('');

paint(new BoyFriend());

PrintHelper::newLine('');