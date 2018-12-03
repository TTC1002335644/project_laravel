<?php
/**
 * Created by PhpStorm.
 * User: sr-php
 * Date: 2018/11/25
 * Time: 20:04
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $connection = "mysql";

    protected $table = 'user';

    protected $primaryKey = 'uid';

    public $timestamps = false;




}