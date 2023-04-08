<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Phân trang
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class Category extends Model
{
    use HasFactory;

//    Khai báo các trường dữ liệu
    protected $fillable = [
        'id',
        'name',
        'status'
    ];

//    Phương thức trả về mảng danh mục gồm: id, name, status
    public static function getAll(): \Illuminate\Support\Collection
    {
        $data = [
            ['id' => 1, 'name' => 'Áo nam', 'status' => 1],
            ['id' => 2, 'name' => 'Áo nữ', 'status' => 0],
            ['id' => 3, 'name' => 'Quần bò', 'status' => 0],
            ['id' => 4, 'name' => 'Túi xách', 'status' => 1],
            ['id' => 5, 'name' => 'Ví da', 'status' => 1],
            ['id' => 6, 'name' => 'Giày dép', 'status' => 1],
            ['id' => 7, 'name' => 'Dây lưng', 'status' => 1],
            ['id' => 8, 'name' => 'Đồng hồ', 'status' => 1]
        ];
        $result = [];
        foreach ($data as $item) {
            $result[] = (new static)->fill($item);
        }
        return collect($result);
    }

    //Phân trang
    public static function paginate($perPage = 5, $page = null, $options = [])
    {
        $items = (new static)->getAll(); //Lấy dữ liêụ từ phương thức getAll();
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
