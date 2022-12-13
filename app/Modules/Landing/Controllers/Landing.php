<?php

namespace App\Modules\Landing\Controllers;

use App\Controllers\BaseController;

class Landing extends BaseController
{
    public function __construct()
    {
        $this->viewPath = 'App\Modules\Landing\Views';
    }
    public function index()
    {

        $portoDesign = [
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
            '10.png',
            '11.png',
            '12.png',
            '13.png',
        ];
        $portoWeb = [
            [
                'title' => 'Sistem Informasi Penelitian dan Pengabdian Kepada Masyarakat Unisnu Jepara',
                'desc' => 'Sistem Informasi Penelitian dan Pengabdian Kepada Masyarakat Unisnu Jepara atau SIPPMAS Unisnu Jepara adalah website yang berfungsi untuk manajemen penelitian dan pengabdian kepada masyarakat di LPPM Unisnu Jepara',
                'stack' => 'cilogo.png',
                'github_access' => 0,
                'github_url' => '',
                'address' => 'https://sippmas.unisnu.ac.id',
                'documentation' => 'https://docs.google.com/presentation/d/e/2PACX-1vQcpNINKHh2HKUranlBTrRXztpifsANw3UN1AhpcZPZgmJiyD5h7T-TnIlnodTe0A/pub?start=false&loop=false&delayms=3000',
                'img' => 'sippmas.png'
            ],
            [
                'title' => 'Marketing Website PT Maestro Putra Timur',
                'desc' => 'Maestroputratimur.com adalah sebuah website yang digunakan oleh tim marketing PT Maestro Putra Timur Untuk membantu dalam memasarkan produk perumahan PT. Maestro Putra Timur berupa katalog perumahan beserta informasi spesifikasi dan harga perumahan.',
                'stack' => 'cilogo.png',
                'github_access' => 0,
                'github_url' => '',
                'address' => 'https://maestroputratimur.com',
                'documentation' => '',
                'img' => 'mpt.png',
            ],
            [
                'title' => 'Technofest 2021 BEM Fakultas Sains dan Teknologi Unisnu Jepara',
                'desc' => 'Website technofest 2021  adalah sebuah website yang dikembangkan sebagai media pengenalan dan media pendaftaran peserta Technofest 2021.',
                'stack' => 'mernstack.png',
                'github_access' => 1,
                'github_url' => 'https://github.com/ArisEXTIdea/technofest2021fin',
                'address' => 'https://technofest2021.netlify.app/',
                'documentation' => '',
                'img' => 'technofest.png'
            ],
            [
                'title' => 'Web Portofolio',
                'desc' => 'Website untuk menampilkan seluruh portofolio yang telah dibuat baik portofolio berupa aplikasi maupun berupa desain',
                'stack' => 'cilogo.png',
                'github_access' => 1,
                'github_url' => 'https://github.com/ArisEXTIdea/portofolio.extidea-tech.my.id',
                'address' => 'https://portofolio.extidea-tech.my.id',
                'documentation' => '',
                'img' => 'portofolioweb.png'
            ],
        ];

        $docData = [
            'docTitle' => 'Selamat Datang',
            'portoDesign' => $portoDesign,
            'portoWeb' => $portoWeb
        ];

        return view( $this->viewPath . '\landing', $docData);
    }
}
