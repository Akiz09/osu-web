<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'header' => [
        'title' => '',
        'description' => 'was geht ab?',
    ],

    'incidents' => [
        'title' => 'Aktive Vorfälle',
        'automated' => 'automatisiert',
    ],

    'online' => [
        'title' => [
            'users' => 'In den letzten 24 Stunden aktive Nutzer',
            'score' => 'Abgesendete Scores in the last 24 Hours',
        ],
        'current' => 'Aktuell aktive Nutzer',
        'score' => 'Abgesendete Scores pro Sekunde',
    ],

    'recent' => [
        'incidents' => [
            'title' => 'Letzte Vorfälle',
            'state' => [
                'resolved' => 'Gelöst',
                'resolving' => 'Wird gelöst',
                'unknown' => 'Unbekannt',
            ],
        ],

        'uptime' => [
            'title' => 'Verfügbarkeit',
            'graphs' => [
                'server' => '',
                'web' => 'webseite',
            ],
        ],

        'when' => [
            'today' => 'heute',
            'week' => 'woche',
            'month' => 'monat',
            'all_time' => 'immer',
            'last_week' => 'letzte woche',
            'weeks_ago' => 'vor :count woche|vor :count wochen',
        ],
    ],
];
