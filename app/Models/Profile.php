<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Profile extends Model
{

   protected $guarded = [];


   public function profileImage()
   {

   $image = Image::make(public_path("storage/profile/basebild.png"))->fit(1200, 1200);
     $filePath = 'profile/' . $image -> basename;
    

      $imagePath = ($this->image) ? $this->image : $filePath;


      return '/storage/' . $imagePath;
      
   
   }

   public function user(){
        return $this->belongsTo(User::class);
   }

   public function followers()
   {
       return $this->belongsToMany(User::class);
   }
    
}
