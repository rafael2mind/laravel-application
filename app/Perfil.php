<?php 

namespace App; 

use Illuminate\Database\Eloquent\Model; 

class Perfil extends Model
{

    //The attributes that should be not changed 
    protected $primaryKey = "id";

    //Table's name of the model 
    protected $table = "perfis";

    //The attributes that are table's timestamps 
    public $timestamps = ["created_at", "updated_at"];

    //The attributes that are mass assignable 
    protected $fillable = [];

    //The attributes that should be hidden for arrays 
    protected $hidden = [];

    //Messages to show when validation fails 
    public static $messages = [];


    public function permissoes()
    {
        $this->belongsTo('App\PerfilPermissao','perfil_id','id');
    }

}