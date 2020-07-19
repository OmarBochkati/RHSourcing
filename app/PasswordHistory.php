<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordHistory extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo('App\User');
    }
    public function up()
    {
        Schema::create('password_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('password');
            $table->timestamps();
        });
    }
}
