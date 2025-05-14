<?php

namespace App\Models;
use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Ririn Citra Lestari',
            'nim' => '2310817120012',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Membaca Buku',
            'skill' => 'Horror Storytelling',
            'tentang_saya' => 'Saya seorang storyteller horor yang mengkhususkan diri dalam horor psikologis berdasarkan pengalaman pribadi. Saya menggunakan detail sensorik dan keheningan untuk membangun ketegangan, menciptakan cerita yang unik dan mendalam, berfokus pada rasa takut yang tak terlihat namun sangat nyata.',
            'gambar' => 'me.jpg' // pastikan file ini ada di folder /public/img/
        ];
    }
}
