<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $filiable = array("id", "nom", "created_at", "update_at");
    public static $rules = array(
        "created" => array (
            "nom" => 'required|string',
        ),
        "update" => array (
            "nom" => 'required|string',
        )
    );

    public function users()
    {
        return $this->belongsToMany("App\User", "user_tag", "tag_id", "user_id");
    }

}
