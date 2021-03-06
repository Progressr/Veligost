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

/**
 *
 */
class SimpleElementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Veligost\CommerceML\Base\SimpleElement::__construct
     * @covers \Veligost\CommerceML\Base\SimpleElement::__toString
     */
    public function test_toString()
    {
        $doc = new \DOMDocument();
        $doc->loadXML('<a>foo</a>');

        $elem = $this->getMockBuilder('\Veligost\CommerceML\Base\SimpleElement')->
            setConstructorArgs(array($doc->firstChild))->setMethods(array('_'))->getMock();

        $this->assertEquals('foo', strval($elem));
    }
}
