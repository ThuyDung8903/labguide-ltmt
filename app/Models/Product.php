<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'image',
        'price'
    ];

    public static function getAll()
    {
        $data = [
            ['id'=>1, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>2, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>3, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>4, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>5, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>5, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>7, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>8, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>9, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930],
            ['id'=>10, 'name'=>'Máy tính', 'image'=>'https://via.placeholder.com/150x150', 'price'=>930]
        ];

        $result = [];
        foreach ($data as $item){
            $result[] = (new static)->fill($item);
        }
        return collect($result);
    }
    //Phan trang
    public static function paginate($perPage = 4, $page = null, $options = [])
    {
        $items = (new static)->getAll(); //Lấy dữ liêụ từ phương thức getAll();
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
