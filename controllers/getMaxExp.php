<?php
include_once 'getLevel.php';

function getMaxExp()
{
    $currentLevel = getLevel();

    if ($currentLevel == 1) {
        return 3;
    }

    if ($currentLevel == 2) {
        return 7;
    }

    if ($currentLevel == 3) {
        return 100;
    }
}
