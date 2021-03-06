<?php
/**
 * Процессор неправильных запросов
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

namespace Veligost\Processors;

use Veligost\Response;

/**
 * Процессор неправильных запросов
 */
class BadRequestProcessor extends AbstractProcessor
{
    /**
     * Обрабатывает текущий запрос, отправляя сообщение об ошибке
     */
    public function process()
    {
        $this->response->add(Response::FAILURE);
        $this->response->add('Неправильный запрос от 1С');
        $this->response->send();
    }
    //@codeCoverageIgnoreStart
}
//@codeCoverageIgnoreEnd