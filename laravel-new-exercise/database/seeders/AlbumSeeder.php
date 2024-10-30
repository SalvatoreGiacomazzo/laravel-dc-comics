<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $albums = [
            [
                'album_name' => 'Relationship of Command',
                'band_name' => 'At The Drive Inn',
                'drop_year' => '2000',
                'genre' => 'Post Hardcore',
                'img_Url' => 'https://thefirenote.com/wp-content/uploads/2014/01/at-the-drive-in-relationshiop-of-command.jpg',

            ],
            [
                'album_name' => 'The Fall Of Troy',
                'band_name' => 'The Fall Of Troy',
                'drop_year' => '2003',
                'genre' => 'Math Rock',
                'img_Url' => 'https://www.brooklynvegan.com/files/2023/01/attachment-fall-of-troy.jpg',

            ],
            [
                'album_name' => 'Chromakopia',
                'band_name' => 'Tyler, The Creator',
                'drop_year' => '2024',
                'genre' => 'Hip Hop',
                'img_Url' => 'https://images.rockol.it/btrDKkWJaMV9gZWw8lmwTfD0u_Y=/645x482/smart/rockol-img/img/foto/upload/chromakopia-tyler-the-creator-cover-ts1730209485.jpeg',

            ],
            [
                'album_name' => 'We Are The Romans',
                'band_name' => 'Botch',
                'drop_year' => '1999',
                'genre' => 'Mathcore',
                'img_Url' => 'http://www.shugarecords.com/cdn/shop/products/R-25024552-1668962591-8800_1200x1200.jpg?v=1697586482',

            ],
            [
                'album_name' => 'A Different Shade Of Blue',
                'band_name' => 'Knocked Loose',
                'drop_year' => '2014',
                'genre' => 'Hardcore Punk',
                'img_Url' => 'https://img.discogs.com/ITkrzkXEGpWBfc04E5TkrfnvmTw=/fit-in/600x531/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-14026474-1566340623-8600.jpeg.jpg',

            ],
            [
                'album_name' => 'Wow2',
                'band_name' => 'Boredoms',
                'drop_year' => '1993',
                'genre' => 'Noise',
                'img_Url' => 'https://i.scdn.co/image/ab67616d0000b273ea539c5dc2b400919fa9d5ea',

            ],
            [
                'album_name' => 'Blue Blood',
                'band_name' => 'X Japan',
                'drop_year' => '1989',
                'genre' => 'Visual Kei',
                'img_Url' => 'https://is1-ssl.mzstatic.com/image/thumb/Music114/v4/af/78/43/af7843f2-4ae4-e3d7-d1d3-580b034be4dc/jacket_MHXX00417B00Z_550.jpg/1200x1200bf-60.jpg',

            ],
            [
                'album_name' => 'Risk Revival',
                'band_name' => 'Hot Cross',
                'drop_year' => '2007',
                'genre' => 'Post Hardcore',
                'img_Url' => 'https://img.discogs.com/7fKkXhaHW9pbwe2yYt_csitJ20w=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1313826-1429461714-7229.jpeg.jpg',

            ],
            [
                'album_name' => 'Alice in Chains',
                'band_name' => 'Alice In Chains',
                'drop_year' => '1995',
                'genre' => 'Grunge',
                'img_Url' => 'https://64.media.tumblr.com/f2ecab21b012af72f9512a91b0f02a55/tumblr_nt2cjxOx7g1svb6uzo1_1280.jpg',

            ],
            [
                'album_name' => 'Meridian',
                'band_name' => 'The Helix Nebula',
                'drop_year' => '2014',
                'genre' => 'Progressive Metal',
                'img_Url' => 'https://t2.genius.com/unsafe/600x600/https://images.genius.com/e884aff33d64038b6144f6072d004473.1000x1000x1.jpg',

            ],
        ];
        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
