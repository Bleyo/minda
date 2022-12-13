<?php

namespace App\src\Enums;

enum EnvEnum: string
{
    case PROD = 'PROD';
    case INTG = 'INTG';
    case CTLQ = 'CTLQ';
    case TUNI = 'TUNI';
    case LABO = 'LABO';
}
