<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'image'
    ];

    public static function getAll()
    {
        $data = [
            ['id'=>1, 'title'=>'Túi xách cao cấp', 'image'=>'https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-cartoon-female-bag-promotion-season-literary-blue-banner-image_177823.jpg'],
            ['id'=>2, 'title'=>'Laptop cao cấp', 'image'=>'https://img.freepik.com/premium-vector/new-laptop-sale-promotion-social-facebook-cover-banner_252779-424.jpg'],
            ['id'=>3, 'title'=>'Mỹ phẩm cao cấp', 'image'=>'https://topprint.vn/wp-content/uploads/2021/07/banner-my-pham-dep-12-1024x390.png']
        ];

        $result = [];
        foreach ($data as $item){
            $result[] = (new static)->fill($item);
        }
        return collect($result);
    }
}
