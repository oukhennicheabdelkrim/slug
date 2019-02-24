<?php
/**
 * Created by PhpStorm.
 * User: Kikim
 * Date: 24/02/2019
 * Time: 12:55
 */
use oukhennicheabdelkrim\slug\Slug;
class SlugTest extends PHPUnit\Framework\TestCase
{
    public function testGetSlugWithoutId()
    {
        $this->assertEquals('ate-hello',Slug::getSlug('àté hello'));
    }

    public function testGetSlugWithId()
    {
        $this->assertEquals('ete-hello-14',Slug::getSlug('ete hello',14));
    }

    public function testGetSlugEmptyString()
    {
        $this->assertEquals('',Slug::getSlug(''));
    }

    public function testGetSlugEmptyStringWitHid()
    {
        $this->assertEquals('14',Slug::getSlug('',14));
    }

    public function testGetSlugNullStrWithNullid()
    {
        $this->assertEquals('',Slug::getSlug(null,null));
    }

    public function testRightId()
    {
        $this->assertEquals('g-a-55',Slug::rightId('g-a',55));
    }

    public function testLeftId()
    {
        $this->assertEquals('55-g-a',Slug::leftId('g-a',55));
    }
}
