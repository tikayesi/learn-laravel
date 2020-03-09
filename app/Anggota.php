<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Anggota extends Model
{
    protected $table = "anggota";
 
    protected $fillable = ['nama','nama_panggilan','tempat_lahir','tanggal_lahir', 'jenis_kelamin', 'warga_negara', 'pekerjaan','alamat','tanggal_baptis','baptis_oleh','keterangan', 'foto'];
}