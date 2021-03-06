<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * SS节点用户在线情况
 * Class SsNodeOnlineLog
 * @package App\Http\Models
 */
class SsNodeOnlineLog extends Model
{
    protected $table = 'ss_node_online_log';
    protected $primaryKey = 'id';
    protected $fillable = [
        'node_id',
        'online_user',
        'log_time'
    ];

}