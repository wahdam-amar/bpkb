<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StopWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
['word' => 'ada'],
['word' => 'adalah'],
['word' => 'adanya'],
['word' => 'adapun'],
['word' => 'agak'],
['word' => 'agaknya'],
['word' => 'agar'],
['word' => 'akan'],
['word' => 'akankah'],
['word' => 'akhir'],
['word' => 'akhiri'],
['word' => 'akhirnya'],
['word' => 'aku'],
['word' => 'akulah'],
['word' => 'amat'],
['word' => 'amatlah'],
['word' => 'anda'],
['word' => 'andalah'],
['word' => 'antar'],
['word' => 'antara'],
['word' => 'antaranya'],
['word' => 'apa'],
['word' => 'apaan'],
['word' => 'apabila'],
['word' => 'apakah'],
['word' => 'apalagi'],
['word' => 'apatah'],
['word' => 'artinya'],
['word' => 'asal'],
['word' => 'asalkan'],
['word' => 'atas'],
['word' => 'atau'],
['word' => 'ataukah'],
['word' => 'ataupun'],
['word' => 'awal'],
['word' => 'awalnya'],
['word' => 'bagai'],
['word' => 'bagaikan'],
['word' => 'bagaimana'],
['word' => 'bagaimanakah'],
['word' => 'bagaimanapun'],
['word' => 'bagi'],
['word' => 'bagian'],
['word' => 'bahkan'],
['word' => 'bahwa'],
['word' => 'bahwasanya'],
['word' => 'baik'],
['word' => 'bakal'],
['word' => 'bakalan'],
['word' => 'balik'],
['word' => 'banyak'],
['word' => 'bapak'],
['word' => 'baru'],
['word' => 'bawah'],
['word' => 'beberapa'],
['word' => 'begini'],
['word' => 'beginian'],
['word' => 'beginikah'],
['word' => 'beginilah'],
['word' => 'begitu'],
['word' => 'begitukah'],
['word' => 'begitulah'],
['word' => 'begitupun'],
['word' => 'bekerja'],
['word' => 'belakang'],
['word' => 'belakangan'],
['word' => 'belum'],
['word' => 'belumlah'],
['word' => 'benar'],
['word' => 'benarkah'],
['word' => 'benarlah'],
['word' => 'berada'],
['word' => 'berakhir'],
['word' => 'berakhirlah'],
['word' => 'berakhirnya'],
['word' => 'berapa'],
['word' => 'berapakah'],
['word' => 'berapalah'],
['word' => 'berapapun'],
['word' => 'berarti'],
['word' => 'berawal'],
['word' => 'berbagai'],
['word' => 'berdatangan'],
['word' => 'beri'],
['word' => 'berikan'],
['word' => 'berikut'],
['word' => 'berikutnya'],
['word' => 'berjumlah'],
['word' => 'berkali-kali'],
['word' => 'berkata'],
['word' => 'berkehendak'],
['word' => 'berkeinginan'],
['word' => 'berkenaan'],
['word' => 'berlainan'],
['word' => 'berlalu'],
['word' => 'berlangsung'],
['word' => 'berlebihan'],
['word' => 'bermacam'],
['word' => 'bermacam-macam'],
['word' => 'bermaksud'],
['word' => 'bermula'],
['word' => 'bersama'],
['word' => 'bersama-sama'],
['word' => 'bersiap'],
['word' => 'bersiap-siap'],
['word' => 'bertanya'],
['word' => 'bertanya-tanya'],
['word' => 'berturut'],
['word' => 'berturut-turut'],
['word' => 'bertutur'],
['word' => 'berujar'],
['word' => 'berupa'],
['word' => 'besar'],
['word' => 'betul'],
['word' => 'betulkah'],
['word' => 'biasa'],
['word' => 'biasanya'],
['word' => 'bila'],
['word' => 'bilakah'],
['word' => 'bisa'],
['word' => 'bisakah'],
['word' => 'boleh'],
['word' => 'bolehkah'],
['word' => 'bolehlah'],
['word' => 'buat'],
['word' => 'bukan'],
['word' => 'bukankah'],
['word' => 'bukanlah'],
['word' => 'bukannya'],
['word' => 'bulan'],
['word' => 'bung'],
['word' => 'cara'],
['word' => 'caranya'],
['word' => 'cukup'],
['word' => 'cukupkah'],
['word' => 'cukuplah'],
['word' => 'cuma'],
['word' => 'dahulu'],
['word' => 'dalam'],
['word' => 'dan'],
['word' => 'dapat'],
['word' => 'dari'],
['word' => 'daripada'],
['word' => 'datang'],
['word' => 'dekat'],
['word' => 'demi'],
['word' => 'demikian'],
['word' => 'demikianlah'],
['word' => 'dengan'],
['word' => 'depan'],
['word' => 'di'],
['word' => 'dia'],
['word' => 'diakhiri'],
['word' => 'diakhirinya'],
['word' => 'dialah'],
['word' => 'diantara'],
['word' => 'diantaranya'],
['word' => 'diberi'],
['word' => 'diberikan'],
['word' => 'diberikannya'],
['word' => 'dibuat'],
['word' => 'dibuatnya'],
['word' => 'didapat'],
['word' => 'didatangkan'],
['word' => 'digunakan'],
['word' => 'diibaratkan'],
['word' => 'diibaratkannya'],
['word' => 'diingat'],
['word' => 'diingatkan'],
['word' => 'diinginkan'],
['word' => 'dijawab'],
['word' => 'dijelaskan'],
['word' => 'dijelaskannya'],
['word' => 'dikarenakan'],
['word' => 'dikatakan'],
['word' => 'dikatakannya'],
['word' => 'dikerjakan'],
['word' => 'diketahui'],
['word' => 'diketahuinya'],
['word' => 'dikira'],
['word' => 'dilakukan'],
['word' => 'dilalui'],
['word' => 'dilihat'],
['word' => 'dimaksud'],
['word' => 'dimaksudkan'],
['word' => 'dimaksudkannya'],
['word' => 'dimaksudnya'],
['word' => 'diminta'],
['word' => 'dimintai'],
['word' => 'dimisalkan'],
['word' => 'dimulai'],
['word' => 'dimulailah'],
['word' => 'dimulainya'],
['word' => 'dimungkinkan'],
['word' => 'dini'],
['word' => 'dipastikan'],
['word' => 'diperbuat'],
['word' => 'diperbuatnya'],
['word' => 'dipergunakan'],
['word' => 'diperkirakan'],
['word' => 'diperlihatkan'],
['word' => 'diperlukan'],
['word' => 'diperlukannya'],
['word' => 'dipersoalkan'],
['word' => 'dipertanyakan'],
['word' => 'dipunyai'],
['word' => 'diri'],
['word' => 'dirinya'],
['word' => 'disampaikan'],
['word' => 'disebut'],
['word' => 'disebutkan'],
['word' => 'disebutkannya'],
['word' => 'disini'],
['word' => 'disinilah'],
['word' => 'ditambahkan'],
['word' => 'ditandaskan'],
['word' => 'ditanya'],
['word' => 'ditanyai'],
['word' => 'ditanyakan'],
['word' => 'ditegaskan'],
['word' => 'ditujukan'],
['word' => 'ditunjuk'],
['word' => 'ditunjuki'],
['word' => 'ditunjukkan'],
['word' => 'ditunjukkannya'],
['word' => 'ditunjuknya'],
['word' => 'dituturkan'],
['word' => 'dituturkannya'],
['word' => 'diucapkan'],
['word' => 'diucapkannya'],
['word' => 'diungkapkan'],
['word' => 'dong'],
['word' => 'dua'],
['word' => 'dulu'],
['word' => 'empat'],
['word' => 'enggak'],
['word' => 'enggaknya'],
['word' => 'entah'],
['word' => 'entahlah'],
['word' => 'guna'],
['word' => 'gunakan'],
['word' => 'hal'],
['word' => 'hampir'],
['word' => 'hanya'],
['word' => 'hanyalah'],
['word' => 'hari'],
['word' => 'harus'],
['word' => 'haruslah'],
['word' => 'harusnya'],
['word' => 'hendak'],
['word' => 'hendaklah'],
['word' => 'hendaknya'],
['word' => 'hingga'],
['word' => 'ia'],
['word' => 'ialah'],
['word' => 'ibarat'],
['word' => 'ibaratkan'],
['word' => 'ibaratnya'],
['word' => 'ibu'],
['word' => 'ikut'],
['word' => 'ingat'],
['word' => 'ingat-ingat'],
['word' => 'ingin'],
['word' => 'inginkah'],
['word' => 'inginkan'],
['word' => 'ini'],
['word' => 'inikah'],
['word' => 'inilah'],
['word' => 'itu'],
['word' => 'itukah'],
['word' => 'itulah'],
['word' => 'jadi'],
['word' => 'jadilah'],
['word' => 'jadinya'],
['word' => 'jangan'],
['word' => 'jangankan'],
['word' => 'janganlah'],
['word' => 'jauh'],
['word' => 'jawab'],
['word' => 'jawaban'],
['word' => 'jawabnya'],
['word' => 'jelas'],
['word' => 'jelaskan'],
['word' => 'jelaslah'],
['word' => 'jelasnya'],
['word' => 'jika'],
['word' => 'jikalau'],
['word' => 'juga'],
['word' => 'jumlah'],
['word' => 'jumlahnya'],
['word' => 'justru'],
['word' => 'kala'],
['word' => 'kalau'],
['word' => 'kalaulah'],
['word' => 'kalaupun'],
['word' => 'kalian'],
['word' => 'kami'],
['word' => 'kamilah'],
['word' => 'kamu'],
['word' => 'kamulah'],
['word' => 'kan'],
['word' => 'kapan'],
['word' => 'kapankah'],
['word' => 'kapanpun'],
['word' => 'karena'],
['word' => 'karenanya'],
['word' => 'kasus'],
['word' => 'kata'],
['word' => 'katakan'],
['word' => 'katakanlah'],
['word' => 'katanya'],
['word' => 'ke'],
['word' => 'keadaan'],
['word' => 'kebetulan'],
['word' => 'kecil'],
['word' => 'kedua'],
['word' => 'keduanya'],
['word' => 'keinginan'],
['word' => 'kelamaan'],
['word' => 'kelihatan'],
['word' => 'kelihatannya'],
['word' => 'kelima'],
['word' => 'keluar'],
['word' => 'kembali'],
['word' => 'kemudian'],
['word' => 'kemungkinan'],
['word' => 'kemungkinannya'],
['word' => 'kenapa'],
['word' => 'kepada'],
['word' => 'kepadanya'],
['word' => 'kesampaian'],
['word' => 'keseluruhan'],
['word' => 'keseluruhannya'],
['word' => 'keterlaluan'],
['word' => 'ketika'],
['word' => 'khususnya'],
['word' => 'kini'],
['word' => 'kinilah'],
['word' => 'kira'],
['word' => 'kira-kira'],
['word' => 'kiranya'],
['word' => 'kita'],
['word' => 'kitalah'],
['word' => 'kok'],
['word' => 'kurang'],
['word' => 'lagi'],
['word' => 'lagian'],
['word' => 'lah'],
['word' => 'lain'],
['word' => 'lainnya'],
['word' => 'lalu'],
['word' => 'lama'],
['word' => 'lamanya'],
['word' => 'lanjut'],
['word' => 'lanjutnya'],
['word' => 'lebih'],
['word' => 'lewat'],
['word' => 'lima'],
['word' => 'luar'],
['word' => 'macam'],
['word' => 'maka'],
['word' => 'makanya'],
['word' => 'makin'],
['word' => 'malah'],
['word' => 'malahan'],
['word' => 'mampu'],
['word' => 'mampukah'],
['word' => 'mana'],
['word' => 'manakala'],
['word' => 'manalagi'],
['word' => 'masa'],
['word' => 'masalah'],
['word' => 'masalahnya'],
['word' => 'masih'],
['word' => 'masihkah'],
['word' => 'masing'],
['word' => 'masing-masing'],
['word' => 'mau'],
['word' => 'maupun'],
['word' => 'melainkan'],
['word' => 'melakukan'],
['word' => 'melalui'],
['word' => 'melihat'],
['word' => 'melihatnya'],
['word' => 'memang'],
['word' => 'memastikan'],
['word' => 'memberi'],
['word' => 'memberikan'],
['word' => 'membuat'],
['word' => 'memerlukan'],
['word' => 'memihak'],
['word' => 'meminta'],
['word' => 'memintakan'],
['word' => 'memisalkan'],
['word' => 'memperbuat'],
['word' => 'mempergunakan'],
['word' => 'memperkirakan'],
['word' => 'memperlihatkan'],
['word' => 'mempersiapkan'],
['word' => 'mempersoalkan'],
['word' => 'mempertanyakan'],
['word' => 'mempunyai'],
['word' => 'memulai'],
['word' => 'memungkinkan'],
['word' => 'menaiki'],
['word' => 'menambahkan'],
['word' => 'menandaskan'],
['word' => 'menanti'],
['word' => 'menanti-nanti'],
['word' => 'menantikan'],
['word' => 'menanya'],
['word' => 'menanyai'],
['word' => 'menanyakan'],
['word' => 'mendapat'],
['word' => 'mendapatkan'],
['word' => 'mendatang'],
['word' => 'mendatangi'],
['word' => 'mendatangkan'],
['word' => 'menegaskan'],
['word' => 'mengakhiri'],
['word' => 'mengapa'],
['word' => 'mengatakan'],
['word' => 'mengatakannya'],
['word' => 'mengenai'],
['word' => 'mengerjakan'],
['word' => 'mengetahui'],
['word' => 'menggunakan'],
['word' => 'menghendaki'],
['word' => 'mengibaratkan'],
['word' => 'mengibaratkannya'],
['word' => 'mengingat'],
['word' => 'mengingatkan'],
['word' => 'menginginkan'],
['word' => 'mengira'],
['word' => 'mengucapkan'],
['word' => 'mengucapkannya'],
['word' => 'mengungkapkan'],
['word' => 'menjadi'],
['word' => 'menjawab'],
['word' => 'menjelaskan'],
['word' => 'menuju'],
['word' => 'menunjuk'],
['word' => 'menunjuki'],
['word' => 'menunjukkan'],
['word' => 'menunjuknya'],
['word' => 'menurut'],
['word' => 'menuturkan'],
['word' => 'menyampaikan'],
['word' => 'menyangkut'],
['word' => 'menyatakan'],
['word' => 'menyebutkan'],
['word' => 'menyeluruh'],
['word' => 'menyiapkan'],
['word' => 'merasa'],
['word' => 'mereka'],
['word' => 'merekalah'],
['word' => 'merupakan'],
['word' => 'meski'],
['word' => 'meskipun'],
['word' => 'meyakini'],
['word' => 'meyakinkan'],
['word' => 'minta'],
['word' => 'mirip'],
['word' => 'misal'],
['word' => 'misalkan'],
['word' => 'misalnya'],
['word' => 'mula'],
['word' => 'mulai'],
['word' => 'mulailah'],
['word' => 'mulanya'],
['word' => 'mungkin'],
['word' => 'mungkinkah'],
['word' => 'nah'],
['word' => 'naik'],
['word' => 'namun'],
['word' => 'nanti'],
['word' => 'nantinya'],
['word' => 'nyaris'],
['word' => 'nyatanya'],
['word' => 'oleh'],
['word' => 'olehnya'],
['word' => 'pada'],
['word' => 'padahal'],
['word' => 'padanya'],
['word' => 'pak'],
['word' => 'paling'],
['word' => 'panjang'],
['word' => 'pantas'],
['word' => 'para'],
['word' => 'pasti'],
['word' => 'pastilah'],
['word' => 'penting'],
['word' => 'pentingnya'],
['word' => 'per'],
['word' => 'percuma'],
['word' => 'perlu'],
['word' => 'perlukah'],
['word' => 'perlunya'],
['word' => 'pernah'],
['word' => 'persoalan'],
['word' => 'pertama'],
['word' => 'pertama-tama'],
['word' => 'pertanyaan'],
['word' => 'pertanyakan'],
['word' => 'pihak'],
['word' => 'pihaknya'],
['word' => 'pukul'],
['word' => 'pula'],
['word' => 'pun'],
['word' => 'punya'],
['word' => 'rasa'],
['word' => 'rasanya'],
['word' => 'rata'],
['word' => 'rupanya'],
['word' => 'saat'],
['word' => 'saatnya'],
['word' => 'saja'],
['word' => 'sajalah'],
['word' => 'saling'],
['word' => 'sama'],
['word' => 'sama-sama'],
['word' => 'sambil'],
['word' => 'sampai'],
['word' => 'sampai-sampai'],
['word' => 'sampaikan'],
['word' => 'sana'],
['word' => 'sangat'],
['word' => 'sangatlah'],
['word' => 'satu'],
['word' => 'saya'],
['word' => 'sayalah'],
['word' => 'se'],
['word' => 'sebab'],
['word' => 'sebabnya'],
['word' => 'sebagai'],
['word' => 'sebagaimana'],
['word' => 'sebagainya'],
['word' => 'sebagian'],
['word' => 'sebaik'],
['word' => 'sebaik-baiknya'],
['word' => 'sebaiknya'],
['word' => 'sebaliknya'],
['word' => 'sebanyak'],
['word' => 'sebegini'],
['word' => 'sebegitu'],
['word' => 'sebelum'],
['word' => 'sebelumnya'],
['word' => 'sebenarnya'],
['word' => 'seberapa'],
['word' => 'sebesar'],
['word' => 'sebetulnya'],
['word' => 'sebisanya'],
['word' => 'sebuah'],
['word' => 'sebut'],
['word' => 'sebutlah'],
['word' => 'sebutnya'],
['word' => 'secara'],
['word' => 'secukupnya'],
['word' => 'sedang'],
['word' => 'sedangkan'],
['word' => 'sedemikian'],
['word' => 'sedikit'],
['word' => 'sedikitnya'],
['word' => 'seenaknya'],
['word' => 'segala'],
['word' => 'segalanya'],
['word' => 'segera'],
['word' => 'seharusnya'],
['word' => 'sehingga'],
['word' => 'seingat'],
['word' => 'sejak'],
['word' => 'sejauh'],
['word' => 'sejenak'],
['word' => 'sejumlah'],
['word' => 'sekadar'],
['word' => 'sekadarnya'],
['word' => 'sekali'],
['word' => 'sekali-kali'],
['word' => 'sekalian'],
['word' => 'sekaligus'],
['word' => 'sekalipun'],
['word' => 'sekarang'],
['word' => 'sekarang'],
['word' => 'sekecil'],
['word' => 'seketika'],
['word' => 'sekiranya'],
['word' => 'sekitar'],
['word' => 'sekitarnya'],
['word' => 'sekurang-kurangnya'],
['word' => 'sekurangnya'],
['word' => 'sela'],
['word' => 'selain'],
['word' => 'selaku'],
['word' => 'selalu'],
['word' => 'selama'],
['word' => 'selama-lamanya'],
['word' => 'selamanya'],
['word' => 'selanjutnya'],
['word' => 'seluruh'],
['word' => 'seluruhnya'],
['word' => 'semacam'],
['word' => 'semakin'],
['word' => 'semampu'],
['word' => 'semampunya'],
['word' => 'semasa'],
['word' => 'semasih'],
['word' => 'semata'],
['word' => 'semata-mata'],
['word' => 'semaunya'],
['word' => 'sementara'],
['word' => 'semisal'],
['word' => 'semisalnya'],
['word' => 'sempat'],
['word' => 'semua'],
['word' => 'semuanya'],
['word' => 'semula'],
['word' => 'sendiri'],
['word' => 'sendirian'],
['word' => 'sendirinya'],
['word' => 'seolah'],
['word' => 'seolah-olah'],
['word' => 'seorang'],
['word' => 'sepanjang'],
['word' => 'sepantasnya'],
['word' => 'sepantasnyalah'],
['word' => 'seperlunya'],
['word' => 'seperti'],
['word' => 'sepertinya'],
['word' => 'sepihak'],
['word' => 'sering'],
['word' => 'seringnya'],
['word' => 'serta'],
['word' => 'serupa'],
['word' => 'sesaat'],
['word' => 'sesama'],
['word' => 'sesampai'],
['word' => 'sesegera'],
['word' => 'sesekali'],
['word' => 'seseorang'],
['word' => 'sesuatu'],
['word' => 'sesuatunya'],
['word' => 'sesudah'],
['word' => 'sesudahnya'],
['word' => 'setelah'],
['word' => 'setempat'],
['word' => 'setengah'],
['word' => 'seterusnya'],
['word' => 'setiap'],
['word' => 'setiba'],
['word' => 'setibanya'],
['word' => 'setidak-tidaknya'],
['word' => 'setidaknya'],
['word' => 'setinggi'],
['word' => 'seusai'],
['word' => 'sewaktu'],
['word' => 'siap'],
['word' => 'siapa'],
['word' => 'siapakah'],
['word' => 'siapapun'],
['word' => 'sini'],
['word' => 'sinilah'],
['word' => 'soal'],
['word' => 'soalnya'],
['word' => 'suatu'],
['word' => 'sudah'],
['word' => 'sudahkah'],
['word' => 'sudahlah'],
['word' => 'supaya'],
['word' => 'tadi'],
['word' => 'tadinya'],
['word' => 'tahu'],
['word' => 'tahun'],
['word' => 'tak'],
['word' => 'tambah'],
['word' => 'tambahnya'],
['word' => 'tampak'],
['word' => 'tampaknya'],
['word' => 'tandas'],
['word' => 'tandasnya'],
['word' => 'tanpa'],
['word' => 'tanya'],
['word' => 'tanyakan'],
['word' => 'tanyanya'],
['word' => 'tapi'],
['word' => 'tegas'],
['word' => 'tegasnya'],
['word' => 'telah'],
['word' => 'tempat'],
['word' => 'tengah'],
['word' => 'tentang'],
['word' => 'tentu'],
['word' => 'tentulah'],
['word' => 'tentunya'],
['word' => 'tepat'],
['word' => 'terakhir'],
['word' => 'terasa'],
['word' => 'terbanyak'],
['word' => 'terdahulu'],
['word' => 'terdapat'],
['word' => 'terdiri'],
['word' => 'terhadap'],
['word' => 'terhadapnya'],
['word' => 'teringat'],
['word' => 'teringat-ingat'],
['word' => 'terjadi'],
['word' => 'terjadilah'],
['word' => 'terjadinya'],
['word' => 'terkira'],
['word' => 'terlalu'],
['word' => 'terlebih'],
['word' => 'terlihat'],
['word' => 'termasuk'],
['word' => 'ternyata'],
['word' => 'tersampaikan'],
['word' => 'tersebut'],
['word' => 'tersebutlah'],
['word' => 'tertentu'],
['word' => 'tertuju'],
['word' => 'terus'],
['word' => 'terutama'],
['word' => 'tetap'],
['word' => 'tetapi'],
['word' => 'tiap'],
['word' => 'tiba'],
['word' => 'tiba-tiba'],
['word' => 'tidak'],
['word' => 'tidakkah'],
['word' => 'tidaklah'],
['word' => 'tiga'],
['word' => 'tinggi'],
['word' => 'toh'],
['word' => 'tunjuk'],
['word' => 'turut'],
['word' => 'tutur'],
['word' => 'tuturnya'],
['word' => 'ucap'],
['word' => 'ucapnya'],
['word' => 'ujar'],
['word' => 'ujarnya'],
['word' => 'umum'],
['word' => 'umumnya'],
['word' => 'ungkap'],
['word' => 'ungkapnya'],
['word' => 'untuk'],
['word' => 'usah'],
['word' => 'usai'],
['word' => 'waduh'],
['word' => 'wah'],
['word' => 'wahai'],
['word' => 'waktu'],
['word' => 'waktunya'],
['word' => 'walau'],
['word' => 'walaupun'],
['word' => 'wong'],
['word' => 'yaitu'],
['word' => 'yakin'],
['word' => 'yakni'],
['word' => 'yang'],
        ];


        DB::table('stop_words')->insert($words);
    }
}