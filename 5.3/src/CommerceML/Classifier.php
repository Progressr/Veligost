<?php
/**
 * Классификатор
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

namespace Veligost\CommerceML;

use Veligost\CommerceML\Stereotypes\Message;

/**
 * Классификатор
 *
 * Классификатор устанавливает правила, по которым должен быть описан товар.
 */
class Classifier extends Message
{
    /**
     * @var string
     */
    protected $nodeName = 'Классификатор';

    /* *
     * Возвращает владельца
     *
     * @throws Exceptions\SchemaException
     *
     * @return Contractor
     * /
    public function getContractor()
    {
        $title = $this->getChild('Контрагент', 'Contractor');
        if (null === $title && version_compare($this->doc->getVersion(), '2.04', '>='))
        {
            throw new SchemaException('У Классификатора отсутствует элемент Контрагент');
        }
        return $title;
    }*/

    /**
     * Возвращает группы
     *
     * @throws Exceptions\SchemaException
     *
     * @return Components\GroupBlock
     */
    public function getGroups()
    {
        $groups = $this->getChild('Группы', 'Components\GroupBlock');
        return $groups;
    }
}
