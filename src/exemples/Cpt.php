<?php

namespace src\exemples;

class Cpt
{
    /**
     * @var int
     */
    private static $compteur;

    /**
     * @return int
     */
    public static function getCompteur(): int
    {
        return self::$compteur;
    }

    /**
     * @param int $compteur
     */
    public static function setCompteur(int $compteur): void
    {
        self::$compteur = $compteur;
    }

    public static function add()
    {
        static::$compteur += 1;
    }
}