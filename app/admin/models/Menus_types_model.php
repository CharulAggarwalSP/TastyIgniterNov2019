<?php namespace Admin\Models;

use Carbon\Carbon;
use Model;

/**
 * MenuType Model Class
 *
 * @package Admin
 */
class Menus_types_model extends Model
{
    /**
     * @var string The database table name
     */
    protected $table = 'menu_types';

    /**
     * @var string The database table primary key
     */
    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public static function getDropdownOptions()
    {
        return self::dropdown('name');
    }
}