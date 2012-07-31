<?php
/**
 * Тесты
 *
 * @copyright 2012 ООО «Два слона» http://dvaslona.ru/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author Михаил Красильников <mk@dvaslona.ru>
 *
 * Copyright 2012 DvaSlona Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Veligost\Tests\CommerceML;

use Veligost\CommerceML\Group;

/**
 *
 */
class Group_Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Veligost\CommerceML\Group::getId
     * @covers \Veligost\CommerceML\Group::getTitle
     * @covers \Veligost\CommerceML\Group::getComment
     */
    public function test_overall()
    {
        $doc = new \DOMDocument();
        $doc->loadXML('<Группа><Ид>8cd47d90-89a2-11df-a810-00241da98595</Ид>' .
            '<Наименование>Основные средства</Наименование>' .
            '<Описание>Основные средства</Описание></Группа>');

        $group = new Group($doc->firstChild);

        $this->assertInstanceOf('\Veligost\CommerceML\Id', $group->getId());
        $this->assertEquals('8cd47d90-89a2-11df-a810-00241da98595', $group->getId());

        $this->assertInstanceOf('\Veligost\CommerceML\Id', $group->getId());
        $this->assertEquals('Основные средства', $group->getTitle());

        $this->assertInstanceOf('\Veligost\CommerceML\Id', $group->getId());
        $this->assertEquals('Основные средства', $group->getComment());
    }
}
