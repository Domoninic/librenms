<?php

/**
 * OspfPort.php
 *
 * -Description-
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * @link       https://www.librenms.org
 *
 * @copyright  2018 Tony Murray
 * @author     Tony Murray <murraytony@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OspfPort extends PortRelatedModel
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'device_id',
        'port_id',
        'ospf_port_id',
        'context_name',
        'ospfIfIpAddress',
        'ospfAddressLessIf',
        'ospfIfAreaId',
        'ospfIfType',
        'ospfIfAdminStat',
        'ospfIfRtrPriority',
        'ospfIfTransitDelay',
        'ospfIfRetransInterval',
        'ospfIfHelloInterval',
        'ospfIfRtrDeadInterval',
        'ospfIfPollInterval',
        'ospfIfState',
        'ospfIfDesignatedRouter',
        'ospfIfBackupDesignatedRouter',
        'ospfIfEvents',
        'ospfIfAuthKey',
        'ospfIfStatus',
        'ospfIfMulticastForwarding',
        'ospfIfDemand',
        'ospfIfAuthType',
        'ospfIfMetricIpAddress',
        'ospfIfMetricAddressLessIf',
        'ospfIfMetricTOS',
        'ospfIfMetricValue',
        'ospfIfMetricStatus',
    ];

    // ---- Define Relationships ----
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Device, $this>
     */
    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class, 'device_id');
    }
}
