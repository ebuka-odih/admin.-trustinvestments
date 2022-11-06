<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span style='color: red;'>UNVERIFIED!</span>";
        }
        return "<span style='color: green;'>VERIFIED!</span>";
    }
}
