<?php

/**
 * config.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'html_language'            => 'ru',
    'locale'                   => 'ru_RU.utf8, ru_RU.UTF-8',
    //'month'                   => '%B %Y',
    'month_js'                 => 'MMMM YYYY',

    //'month_and_day'           => '%B %e, %Y',
    'month_and_day_moment_js'  => 'D MMM YYYY',
    'month_and_day_fns'        => 'MMMM д, г',
    'month_and_day_js'         => 'Do MMMM YYYY',

    //'month_and_date_day'      => '%A %B %e, %Y',
    'month_and_date_day_js'    => 'Do MMMM YYYY',

    //'month_and_day_no_year'   => '%B %e',
    'month_and_day_no_year_js' => 'Ключ: массив [\'месяц _ и _ день _ нет _ год _ js\']',

    //'date_time'               => '%B %e, %Y, @ %T',
    'date_time_js'             => 'Do MMMM YYYY, @ HH:mm:ss',
    'date_time_fns'            => 'Ключ: массив [\' дата _ время _ fns \']
массив[\'дата_время_fns\']',

    //'specific_day'            => '%e %B %Y',
    'specific_day_js'          => 'D MMMM YYYY',

    //'week_in_year'            => 'Week %V, %G',
    'week_in_year_js'          => '[Week] w, YYYY',
    'week_in_year_fns'         => "'Неделя' ww, yyyy",

    //'year'                    => '%Y',
    'year_js'                  => 'YYYY',

    //'half_year'               => '%B %Y',
    'half_year_js'             => '\QQ YYYY',

    'quarter_fns'   => "Ключ: массив['четверть_fns']",
    'half_year_fns' => "Ключ: массив ['половина _ года _ fns']",
    'dow_1'         => 'Понедельник',
    'dow_2'         => 'Вторник',
    'dow_3'         => 'Среда',
    'dow_4'         => 'Четверг',
    'dow_5'         => 'Пятница',
    'dow_6'         => 'Суббота',
    'dow_7'         => 'Воскресенье',
];
