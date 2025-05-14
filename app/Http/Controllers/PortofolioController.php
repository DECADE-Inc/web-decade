<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortofolioController extends Controller
{
    public function viewPortolioList(): View
    {
        $portofolios = [
            [
                'judul' => 'Website',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                'img' => asset('/img/portofolio/image1.png'),
                'url' => '#',
            ],
            [
                'judul' => 'Design',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                'img' => asset('/img/portofolio/image2.png'),
                'url' => '#',
            ],
            [
                'judul' => 'Logo',
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                'img' => asset('/img/portofolio/image3.png'),
                'url' => '#',
            ],
        ];

        return view('portofolio', ['portofolio_list' => $portofolios]);
    }
}
