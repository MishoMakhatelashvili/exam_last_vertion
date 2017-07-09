<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
  protected $table = 'news';  

   protected $with=['category'];
        
    protected $fillable = [
        'number','title','description','views','author','category_id','img',
    ];  

  

    public function category()
     {
      return $this->belongsto('App\Models\category');
     }
  
}
