<?php
/**
 * Created by PhpStorm.
 * User: Kikim
 * Date: 24/02/2019
 * Time: 02:18
 */

namespace oukhennicheabdelkrim\slug;

class Slug
{
    /**
     * return slug of str using oukhennicheabdelkrim\slug\Conf configuration
     * @param string $str
     * @param null $id
     * @return string
     */

    public static function getSlug($str, $id = null)
    {
        return self::addId(strtolower(trim(preg_replace('/[\s-]+/', Conf::DELIMITER, preg_replace('/[^A-Za-z0-9-]+/', Conf::DELIMITER, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), Conf::DELIMITER)), $id);
    }

    /**
     * add id to slug , using configuration oukhennicheabdelkrim\slug\Conf for id position
     * @param $slug
     * @param string | int $id
     * @return string
     */
    public static function addId($slug, $id)
    {
        return call_user_func_array('oukhennicheabdelkrim\slug\Slug::' . strtolower(Conf::ID_POSITION) . 'Id', [$slug, $id]);
    }

    /**
     * add id to the slug on the left
     * @param string $slug
     * @param string | int $id
     * @return string
     */

    public static function leftId($slug, $id)
    {
        if ($id === null) return $slug;
        if(empty($slug)) return (string)$id;
        return $id . Conf::DELIMITER . $slug;
    }

    /**
     * add id to the slug on the right
     * @param string $slug
     * @param string | int $id
     * @return string
     */

    public static function rightId($slug, $id)
    {
        if ($id === null) return $slug;
        if(empty($slug)) return (string)$id;
        return $slug . Conf::DELIMITER . $id;
    }
}
