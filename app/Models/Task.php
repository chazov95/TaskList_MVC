<?php

namespace App\Models;

/**
 * Class Task
 *
 * @package App\Models
 */
class Task extends AbstractModel
{
    public $id;
    public $user_id;
    public $description;
    public $status;
    public $create_at;
    public $hash;
}