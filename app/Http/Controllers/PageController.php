<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username === 'shofia' && $password === '12345') {
            return redirect()->route('dashboard', ['username' => $username]);
        }
        return redirect()->route('login')->withErrors(['Login gagal.']);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['Silakan login terlebih dahulu.']);
        }

        $bestsellerlistItems = self::$bestsellerlistItems;
        $recommendationItems = self::$recommendationItems;

        return view('dashboard', compact('username', 'bestsellerlistItems', 'recommendationItems'));
    }

    private static $bestsellerlistItems =[
        [
            'gambar' => 'https://i.pinimg.com/736x/77/1a/c0/771ac0e76096a4d8fda9c61b1c07cee9.jpg',
            'judul' => 'Silhoutted by The Blue',
            'rating' => '4.9',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/5b/d5/34/5bd534cf2e50ace792c19506f3a45e91.jpg',
            'judul' => 'Woman Unleashed',
            'rating' => '5.0',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/2d/ee/3a/2dee3a4dab3607940aede19a016a7ed8.jpg',
            'judul' => 'The Trumpet of The Swan',
            'rating' => '4.8',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/16/bb/b8/16bbb8de8ef444d4e8d49713af388c66.jpg',
            'judul' => 'The Lovely Bones',
            'rating' => '5.0',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/99/89/01/9989012c219aa4ab77fd9afc17653b69.jpg',
            'judul' => 'The Magician\'s Nephew',
            'rating' => '4.9',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/28/e4/c7/28e4c72216051bcec4222fedf726a5b5.jpg',
            'judul' => 'The Horse and His Boy',
            'rating' => '4.7',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/ef/b7/02/efb702a7a4b1931cdb44f83b77efecb2.jpg',
            'judul' => 'Prince Caspian',
            'rating' => '5.0',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/df/b8/c1/dfb8c1ef2fe22426e67d05bfd5fbc4b0.jpg',
            'judul' => 'Narnia',
            'rating' => '5.0',
        ],
    ];

    private static $recommendationItems =[
        [
            'gambar' => 'https://i.pinimg.com/736x/df/b8/c1/dfb8c1ef2fe22426e67d05bfd5fbc4b0.jpg',
            'judul' => 'Narnia',
            'penulis' => 'C.S Lewis',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/ef/b7/02/efb702a7a4b1931cdb44f83b77efecb2.jpg',
            'judul' => 'Prince Caspian',
            'penulis' => 'C.S Lewis',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/16/bb/b8/16bbb8de8ef444d4e8d49713af388c66.jpg',
            'judul' => 'The Lovely Bones',
            'penulis' => 'A.Sebold',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/5b/d5/34/5bd534cf2e50ace792c19506f3a45e91.jpg',
            'judul' => 'Woman Unleashead',
            'penulis' => 'Jenn Edden',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/99/89/01/9989012c219aa4ab77fd9afc17653b69.jpg',
            'judul' => 'The Magician\'s Nephew',
            'penulis' => 'C.S Lewis',
        ],
        [
            'gambar' => 'https://i.pinimg.com/736x/77/1a/c0/771ac0e76096a4d8fda9c61b1c07cee9.jpg',
            'judul' => 'Silhoutted by The Blue',
            'penulis' => 'Traci L. Jones',
        ],
    ];

    public function product(Request $request)
    {
    $username = $request->query('username');

    if (!$username) {
        return redirect()->route('login')->withErrors(['Silakan login terlebih dahulu.']);
    }

    $collectionItems = self::$collectionItems;

    return view('product', compact('username', 'collectionItems'));
    }

    private static $collectionItems = [
    [
        'gambar' => 'https://i.pinimg.com/736x/99/74/59/9974591b398e3d45890bcf418d1bd302.jpg',
        'judul' => 'Cinderella',
        'penulis' => 'Grimm Brothers',
        'genre' => 'Romance',
        'rating' => '4.9',
        'stok' => '37',
        'harga' => '99000',
    ],
    [
        'gambar' => 'https://i.pinimg.com/736x/c2/9e/8f/c29e8fb32ce9a6631a6985c222921786.jpg',
        'judul' => 'Harry Potter',
        'penulis' => 'J.K Rowling',
        'genre' => 'Fantasy',
        'rating' => '5.0',
        'stok' => '40',
        'harga' => '165000',
    ],
    [
        'gambar' => 'https://i.pinimg.com/736x/60/d4/26/60d426da28cca40f517d14115bc937f5.jpg',
        'judul' => 'Pride & Prejudice',
        'penulis' => 'Jane Austin',
        'genre' => 'Romance',
        'rating' => '5.0',
        'stok' => '55',
        'harga' => '189000',
    ],
    [
        'gambar' => 'https://i.pinimg.com/736x/4e/85/19/4e851998e980dbe4ebed9142de4e55fc.jpg',
        'judul' => 'Dracula',
        'penulis' => 'Braham Stoker',
        'genre' => 'Horror',
        'rating' => '4.8',
        'stok' => '32',
        'harga' => '125000',
    ],
    [
        'gambar' => 'https://i.pinimg.com/736x/04/f9/a3/04f9a319538ab7893f93a42d7c220708.jpg',
        'judul' => 'The Alchemist',
        'penulis' => 'Paulo Coelho',
        'genre' => 'Fiction',
        'rating' => '4.9',
        'stok' => '56',
        'harga' => '158000',
    ],
    ];

    public function addCollectionForm(Request $request)
    {
    $username = $request->query('username');
    if (!$username) {
        return redirect()->route('login')->withErrors(['Silakan login terlebih dahulu.']);
    }

    return view('pengelolaan', compact('username'));
    }

    public function storeCollection(Request $request)
    {
    $request->validate([
        'gambar' => 'required|url',
        'judul' => 'required|string',
        'penulis' => 'required|string',
        'genre' => 'required|string',
        'rating' => 'required|numeric',
        'stok' => 'required|integer',
        'harga' => 'required|numeric',
    ]);

    $newItem = [
        'gambar' => $request->input('gambar'),
        'judul' => $request->input('judul'),
        'penulis' => $request->input('penulis'),
        'genre' => $request->input('genre'),
        'rating' => $request->input('rating'),
        'stok' => $request->input('stok'),
        'harga' => $request->input('harga'),
    ];
    self::$collectionItems[] = $newItem;
    $username = $request->input('username');
    return view('product', [
        'username' => $username,
        'collectionItems' => self::$collectionItems,
    ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login')->withErrors(['Silakan login terlebih dahulu.']);
        }
        $profileData = [
            'nama' => 'Yang Mulia Ratu Shofia Uzlah Amelia',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Ikan Hiu No.43',
            'jabatan' => 'Manajer Toko',
            'status' => 'Aktif',
        ];
        return view('profile', compact('username', 'profileData'));
    }

    public function logout(Request $request)
    {
        $username = $request->query('username');
        return view('login', compact('username'));
    }
}
