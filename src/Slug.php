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
     * add id to slug
     * @param string $slug
     * @param string | int $id
     * @return string
     */

    public static function addId($slug, $id)
    {
        if ($id === null) return $slug;
        if(empty($slug)) return (string)$id;
        return ['left'=>$id . Conf::DELIMITER . $slug,'right'=>$slug . Conf::DELIMITER . $id][strtolower(Conf::ID_POSITION)];
    }
}
