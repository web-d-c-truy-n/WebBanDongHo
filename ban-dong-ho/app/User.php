<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\TinhThanh;
use App\Model\QuanHuyen;
use App\Model\PhuongXa;
use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'HOTEN','SDT','VAITRO','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function diaChi(){
        try{
            $tinhThanh = TinhThanh::where("id",$this->MATINH)->first();
            $quanHuyen = QuanHuyen::where("id",$this->MAQUAN_HUYEN)->first();
            $phuongXa = PhuongXa::where("id",$this->MAPHUONG_XA)->first();
            return "$this->DIACHI, $phuongXa->name, $quanHuyen->name, $tinhThanh->name";
        }catch(Exception $e){
            return "";
        }
        
    }
    public function TinhThanh(){
        $tinhThanh = TinhThanh::where("id",$this->MATINH)->first();
        return $tinhThanh;
    }
    public function QuanHuyen(){
        $quanHuyen = QuanHuyen::where("id",$this->MAQUAN_HUYEN)->first();
        return $quanHuyen;
    }
    public function PhuongXa(){
        $phuongXa = PhuongXa::where("id",$this->MAPHUONG_XA)->first();
        return $phuongXa;
    }
}
