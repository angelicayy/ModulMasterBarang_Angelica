<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode' => 'BK001',
                'nama' => 'Harry Potter and the Philosopher\'s Stone',
                'harga' => 100000,
                'deskripsi' => 'Novel karya J.K. Rowling tentang petualangan Harry Potter di Hogwarts.',
                'satuan_id' => 1,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDuP1OqIvyzGE7ZefR2TitTAhiV70IxAnw80DgBu_myw&s'
            ],
            [
                'kode' => 'BK002',
                'nama' => 'To Kill a Mockingbird',
                'harga' => 90000,
                'deskripsi' => 'Novel klasik karya Harper Lee tentang ketidakadilan dan rasisme di Alabama, Amerika Serikat.',
                'satuan_id' => 1,
                'image_url' => 'https://cdn.britannica.com/21/182021-050-666DB6B1/book-cover-To-Kill-a-Mockingbird-many-1961.jpg'
            ],
            [
                'kode' => 'BK003',
                'nama' => 'The Great Gatsby',
                'harga' => 95000,
                'deskripsi' => 'Novel karya F. Scott Fitzgerald tentang kehidupan masyarakat kelas atas di Amerika pada tahun 1920-an.',
                'satuan_id' => 2,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/id/2/26/TheGreatGatsby2012Poster.jpg'
            ],
            [
                'kode' => 'BK004',
                'nama' => '1984',
                'harga' => 85000,
                'deskripsi' => 'Novel karya George Orwell tentang sebuah masyarakat otoriter dan pengawasan yang total.',
                'satuan_id' => 3,
                'image_url' => 'https://inc.mizanstore.com/aassets/img/com_cart/produk/_4121.jpg'
            ],
            [
                'kode' => 'BK005',
                'nama' => 'Pride and Prejudice',
                'harga' => 95000,
                'deskripsi' => 'Novel karya Jane Austen tentang cinta dan kelas sosial di Inggris pada abad ke-19.',
                'satuan_id' => 3,
                'image_url' => 'https://inc.mizanstore.com/aassets/img/com_cart/produk/_4121.jpg'
            ],
            [
                'kode' => 'BK006',
                'nama' => 'The Catcher in the Rye',
                'harga' => 90000,
                'deskripsi' => 'Novel karya J.D. Salinger tentang remaja pemberontak Holden Caulfield.',
                'satuan_id' => 2,
                'image_url' => 'https://cdn.britannica.com/94/181394-050-2F76F7EE/Reproduction-cover-edition-The-Catcher-in-the.jpg'
            ],
            [
                'kode' => 'BK007',
                'nama' => 'Lord of the Flies',
                'harga' => 85000,
                'deskripsi' => 'Novel karya William Golding tentang kelompok anak-anak yang terdampar di sebuah pulau tanpa pengawasan dewasa.',
                'satuan_id' => 1,
                'image_url' => 'https://m.media-amazon.com/images/I/81WUAoL-wFL._AC_UF1000,1000_QL80_.jpg'
            ],
            [
                'kode' => 'BK008',
                'nama' => 'The Hobbit',
                'harga' => 110000,
                'deskripsi' => 'Novel fantasi karya J.R.R. Tolkien tentang petualangan hobbit Bilbo Baggins.',
                'satuan_id' => 1,
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BMTcwNTE4MTUxMl5BMl5BanBnXkFtZTcwMDIyODM4OA@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'kode' => 'BK009',
                'nama' => 'Frankenstein',
                'harga' => 90000,
                'deskripsi' => 'Novel gothic karya Mary Shelley tentang eksperimen ilmiah yang salah dan konsekuensinya.',
                'satuan_id' => 2,
                'image_url' => 'https://ebooks.gramedia.com/ebook-covers/9336/big_covers/ID_GPU2014MTH02FRAN_B_.jpg'
            ],
            [
                'kode' => 'BK010',
                'nama' => 'The Picture of Dorian Gray',
                'harga' => 95000,
                'deskripsi' => 'Novel karya Oscar Wilde tentang seorang pria yang menjual jiwanya untuk keabadian dan mengalami degradasi moral.',
                'satuan_id' => 1,
                'image_url' => 'https://cdn.gramedia.com/uploads/items/9786020634371_The_Picture_of_Dorian_Gray_cov.jpg'
            ],
        ]);
    }
}

