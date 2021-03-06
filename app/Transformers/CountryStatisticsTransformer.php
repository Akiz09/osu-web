<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
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

namespace App\Transformers;

use App\Models\CountryStatistics;
use League\Fractal;

class CountryStatisticsTransformer extends Fractal\TransformerAbstract
{
    protected $availableIncludes = ['country'];

    public function transform(CountryStatistics $stat)
    {
        return [
            'code' => $stat->country_code,
            'active_users' => $stat->user_count,
            'play_count' => $stat->play_count,
            'ranked_score' => $stat->ranked_score,
            'performance' => $stat->performance,
        ];
    }

    public function includeCountry(CountryStatistics $stat)
    {
        return $stat->country === null
            ? $this->primitive(null)
            : $this->item($stat->country, new CountryTransformer);
    }
}
