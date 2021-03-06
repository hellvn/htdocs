<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'Stetho@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);
        DB::table('hotels')->insert([
            [
                'destination_id'=>1,
                'name'=>'M?????ng Thanh Hotel',
                'address'=>'60 Tr???n Ph??',
                'district'=>'L???c Th???',
                'city'=>'Nha Trang',
                'star_ranking'=>5,
                'description'=>'V???i h??? b??i ngo??i tr???i v?? trung t??m th??? d???c r???ng r??i, Muong Thanh Nha Trang n???m c??ch B???n Xe Nha Trang ch??? 500 m. Truy c???p Wi-Fi mi???n ph?? c?? s???n ??? t???t c??? c??c khu v???c. C??c ph??ng ???????c b??i tr?? sang tr???ng t???i ????y ?????c tr??ng v???i s??n tr???i th???m to??n b???, truy???n h??nh c??p m??n h??nh ph???ng, ti???n nghi pha tr??/c?? ph?? v?? khu v???c ti???p kh??ch. Ph??ng t???m ri??ng ??i k??m b???n t???m v?? ??o cho??ng t???m m???m m???i. Du kh??ch c?? th??? t???n h?????ng c??c li???u ph??p spa v?? m??t-xa xoa d???u c??ng nh?? t???n d???ng d???ch v??? cho thu?? xe h??i c??ng trung t??m d???ch v??? doanh nh??n. Ca??c ti???n nghi kh??c bao g???m l???? t??n 24 gi??? v?? ch??? gi???? h??nh l??. Muong Thanh Nha Trang Hotel n???m c??ch trung t??m th??nh ph??? Nha Trang v?? Ga Nha Trang 5 km. S??n bay Cam Ranh c??ch n??i ngh??? n??y 50 km v?? t???i ????y c?? d???ch v??? ????a ????n s??n bay k??m ph??? ph??. Kh??ch s???n trang nh?? n??y c?? 2 nh?? h??ng ??? Ngoc Thao Restaurant ph???c v??? ???m th???c Ch??u ?? v?? Ph????ng T??y su???t 24 gi??? trong khi Yang Bay Restaurant ???????c d??nh cho c??c bu???i y???n ti???c c??ng nh?? s??? ki???n. C??c l???a ch???n ??n u???ng trong ph??ng c??ng ???????c cung c???p.',
           ],
            [
                'destination_id'=>4,
                'name'=>'New Sun Hotel',
                'address'=>'2/3 H??ng V????ng',
                'district'=>'L???c Th???',
                'city'=>'Nha Trang',
                'star_ranking'=>5,
                'description'=>'V???i s??n hi??n ph??i n???ng v?? t???m nh??n ra bi???n, New Sun Hotel n???m ??? th??nh ph??? Nha Trang thu???c T???nh Kh??nh H??a v?? c??ch Th??p Tr???m H????ng 4 ph??t ??i b???. Kh??ch c?? th??? d??ng b???a ??? nh?? h??ng t???i n??i ngh???. B??i ????? xe ri??ng c?? s???n mi???n ph?? ngay trong khu??n vi??n. M???i ph??ng t???i kh??ch s???n n??y ?????u ???????c trang b??? m??y l???nh v?? truy???n h??nh v??? tinh m??n h??nh ph???ng. ???m ??un n?????c c?? s???n trong ph??ng. T???t c??? c??c ph??ng c??n ??i k??m ph??ng t???m ri??ng. Nh???ng ti???n nghi kh??c bao g???m d??p, ????? v??? sinh c?? nh??n mi???n ph?? c??ng m??y s???y t??c. New Sun Hotel cung c???p Wi-Fi mi???n ph?? trong to??n khu??n vi??n. Kh??ch s???n c?? l??? t??n l??m vi???c 24 gi???. Kh??ch s???n cung c???p d???ch v??? cho thu?? xe h??i. Qu???ng tr?????ng 2/4 Square c??ch New Sun Hotel 4 ph??t ??i b??? trong khi B??i bi???n Nha Trang c??ch ???? 5 ph??t ??i b???. S??n bay g???n nh???t l?? S??n bay Qu???c t??? Cam Ranh, c??ch n??i ngh??? 30 km. ????y l?? khu v???c ??? Nha Trang m?? kh??ch y??u th??ch, theo c??c ????nh gi?? ?????c l???p. C??c c???p ????i ?????c bi???t th??ch ?????a ??i???m n??y ??? h??? cho ??i???m 8,9 cho k??? ngh??? d??nh cho 2 ng?????i.',
            ],
            [
                'destination_id'=>5,
                'name'=>'V Hotel',
                'address'=>'8 H??ng V????ng',
                'district'=>'L???c Th???',
                'city'=>'Nha Trang',
                'star_ranking'=>4,
                'description'=>'N???m trong khu v???c L???c Th???, Kh??ch s???n V Nha Trang t???a l???c t???i v??? tr?? ch??? ch???t g???n c??c danh lam th???ng c???nh, cho kh??ch y??u th??ch du l???ch bi???n, cho du kh??ch y??u th??ch ???m th???c ??? Nha Trang. Trung t??m th??nh ph??? n??o nhi???t ch??? c??ch b???n kho???ng 0.5 km. Ch??? ngh??? c?? v??? tr?? r???t thu???n ti???n, du kh??ch c?? th??? tho???i m??i tham quan, kh??m ph?? c??c ??i???m du l???ch n???i ti???ng. C??c ti???n nghi v?? d???ch v??? do Kh??ch s???n V Nha Trang cung c???p ?????m b???o s??? mang l???i cho du kh??ch m???t k??? ngh??? v???a ?? nh???t. Ch??? ngh??? n??y ???????c trang b??? nhi???u ti???n nghi ??a d???ng, h???a h???n s??? l??m h??i l??ng ngay c??? nh???ng kh??ch h??ng kh?? t??nh nh???t. Du kh??ch c?? th??? ch???n l???a trong s??? 100 ph??ng v???i kh??ng gian y??n b??nh, th?? gi??n. B??n c???nh ????, c??c khu v???c vui ch??i gi???i tr?? nh?? ph??ng th??? d???c, h??? b??i???ngo??i tr???i, spa, massage c??ng l?? n??i th?? gi??n tuy???t v???i. Kh??ch s???n V Nha Trang l?? ??i???m ?????n cung c???p ch??? ngh??? ch???t l?????ng cao t???i Nha Trang.',
            ],
            [
                'destination_id'=>3,
                'name'=>'Hai B???y Hotel',
                'address'=>'27 H??ng B??ng',
                'district'=>'Qu???n Ho??n Ki???m',
                'city'=>'H?? N???i',
                'star_ranking'=>3,
                'description'=>'N???m trong khu v???c Qu???n Ho??n Ki???m, Kh??ch s???n Hai B???y t???a l???c t???i v??? tr?? ch??? ch???t g???n c??c danh lam th???ng c???nh, g???n nhi???u n??i mua s???m, ????? kh??m ph?? n??t ?????p v??n h??a ??? H?? N???i. C??ch th??nh ph??? nh???n nh???p kho???ng 0.1 km, ch??? ngh???4 sao n??y c?? v??? tr?? v?? c??ng thu???n l???i ????? ??i ?????n c??c ??i???m n??ng du l???ch trong th??nh ph???. Ch??? ngh??? c?? v??? tr?? r???t thu???n ti???n, du kh??ch c?? th??? tho???i m??i tham quan, kh??m ph?? c??c ??i???m du l???ch n???i ti???ng. M???i n??? l???c ?????u nh???m mang l???i s??? tho???i m??i t???i ??a cho du kh??ch. Ch??nh v?? v???y, ch??? ngh??? cung c???p c??c d???ch v??? v?? ti???n nghi t???t nh???t. Ch??? ngh??? cung c???p c??c ti???n nghi nh?? Wifi mi???n ph?? cho m???i ph??ng, b???o v??? 24 gi???, d???n ph??ng h???ng ng??y, d???ch v??? b??u ??i???n, nh???n/tr??? ph??ng ri??ng, ?????m b???o mang ?????n cho du kh??ch s??? tho???i m??i t???i ??a. M???i ph??ng ngh??? ?????u ???????c trang b??? ti???n nghi chu ????o, mang ?????n cho du kh??ch c???m gi??c tho???i m??i kh??ng g?? s??nh ???????c. Cho d?? l?? m???t t??n ????? th??? thao hay ch??? mu???n th?? gi??n sau m???t ng??y d??i b???n r???n, b???n s??? ???????c ti??u khi???n v???i c??c ho???t ?????ng vui ch??i gi???i tr?? nh??spa, massage. H??y kh??m ph?? s??? k???t h???p ho??n h???o gi???a cung c??ch ph???c v??? chuy??n nghi???p v?? v?? s??? ti???n nghi ??a d???ng ??? Kh??ch s???n Hai B???y.',
            ],
            [
                'destination_id'=>2,
                'name'=>'M?????ng Thanh Luxury S??i G??n',
                'address'=>'261C Nguy???n V??n Tr???i',
                'district'=>'Ph?????ng 10, Ph?? Nhu???n',
                'city'=>'H??? Ch?? Minh',
                'star_ranking'=>5,
                'description'=>'Kh??ch s???n M?????ng Thanh Luxury S??i G??n ???????c x??y d???ng theo ti??u chu???n 5 sao v???i 239 ph??ng ngh??? sang tr???ng c??ng v???i h??? th???ng ti???n ??ch ?????ng c???p, l?? ??i???m d???ng ch??n kh??ng th??? thi???u c???a du kh??ch trong h??nh tr??nh tr???i nghi???m S??i G??n.',
            ],
        ]);
        DB::table('rooms')->insert([
            [
                'hotel_id'=>1,
                'room_type'=>'Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>4931000.00,
                'discount'=>45,
                'is_available'=>1,
            ],
            [
                'hotel_id'=>1,
                'room_type'=>'Premium',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>5257000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'Grand Premium',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>6399000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'The Level Premium',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>7704000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>1,
                'room_type'=>'The Level Executive Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>8846000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>3125000.00,
                'discount'=>49,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Grand Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>3454000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Club',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>5099000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Deluxe Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>6580000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>2,
                'room_type'=>'Club Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>8225000.00,
                'discount'=>0,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>3227000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Senior Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>3920000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Premier Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>4443000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Junior Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>4965000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Executive',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>5488000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Premier Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>5750000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>3,
                'room_type'=>'Acoustic Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>7579000.00,
                'discount'=>83,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Delxue cozy double',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>1568000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Delxue double',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>1948000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Junior suite double or twin',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>2435000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Junior triple',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>2979000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>4,
                'room_type'=>'Family',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>3659000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Superior',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>5672000.00,
                'discount'=>73,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Luxury',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>6444000.00,
                'discount'=>67,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>5,
                'room_type'=>'Superior Club',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>8345000.00,
                'discount'=>57,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>1480000.00,
                'discount'=>39,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe Double',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>1480000.00,
                'discount'=>39,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Deluxe Triple',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>2097000.00,
                'discount'=>40,
                'is_available'=>1,

            ],
            [
                'hotel_id'=>6,
                'room_type'=>'Executive Suite',
                'thumb'=>'img-thum-01.jpg',
                'description'=>null,
                'price'=>2961000.00,
                'discount'=>44,
                'is_available'=>1,

            ],
        ]);
        DB::table('room_images')->insert([
            [
                'room_id'=>1,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>1,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>2,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>3,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>4,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>5,
                'path'=>'img-big-04.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-01.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-02.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-03.jpg'
            ],
            [
                'room_id'=>6,
                'path'=>'img-big-04.jpg'
            ],
        ]);
        DB::table('hotel_comments')->insert([
            [
                'hotel_id'=>1,
                'user_id'=>1,
                'messages'=>'T??i ???? ch???n M?????ng Thanh Grand hotel cho chuy???n ngh?? d?????ng v???a r???i trong 5 ng??y. T??i ?????t lo???i ph??ng deluxe nh??ng v?? do ch??nh s??ch ?????t trong Agoda n??n ph??ng t??i ??c up l??n Vip room. T???t c??? m???i th??? ?????u t???t t???i ks n??y. T??i r???t h??i l??ng. C?? d???p tr??? l???i Nha Trang du l???ch. T??i s??? ti???p t???c ch???n M?????ng Thanh Grand Hotel',
                'rating'=>4
            ],
            [
                'hotel_id'=>1,
                'user_id'=>2,
                'messages'=>'Hai ?????a m??nh book ph??ng Deluxe Ocean View nh??ng ???????c up free l??n Executive Suite !! C??c ch??? l??? t??n ai c??ng th??n thi???n h???t n??. View bi???n qu?? ?????p nh??ng h??i xa b??n khu ????ng ????c Tr???n Ph??, vi???c ??i taxi s??? h??i t???n k??m ????i ch??t. Buffet s??ng ?????y ????? m??n, t???i t7 m??nh ??? c?? seafood buffet 280k/ng?????i. ??i???u duy nh???t m??nh kh??ng h??i l??ng l?? ??a s??? kh??ch ?????u l?? ng?????i Trung n??n l??c n??o c??ng ???n ??o b???a b???n v?? l???n x???n v?? c??ng, nh??n vi??n c??ng ph???i ch???y li??n t???c ????? d???n b??n. N???u c?? quay l???i Nha Trang m??nh v???n ch???n M?????ng Thanh Grand Nha Trang nh?? !',
                'rating'=>5
            ],
            [
                'hotel_id'=>1,
                'user_id'=>5,
                'messages'=>'Th??ng 6 v???a r???i t??i ???? c?? chuy???n ngh??? d?????ng th???t tuy???t v???i nh??? M?????ng Thanh Grand. ?????u ti???n th?? khi t??i v??o l?? ph??ng t??i ?????t ??ang h?? m??y l???nh n??n ???? ??c ?????i cho 1 c??n kh??c b??? h??n t???t h??n, view nh??n ra bi???n nh?? t??i mu???n. R???t ?????p! V???a b?????c v??o nh??n vi??n ???? r???t nhi???t t??nh t??? ch??? qu???n l?? v?? c?? 1 anh h?????ng d???n cho t??i. Anh ???y th???t s??? r???t nhi???t t??nh ch??? t??i ch??? n??o c?? th??? ??i ??n h???i s???n ngon, v?? d???n r???t k?? v??? t??i x??? taxi. Th???t s??? r???t th??ch t??? c??ch b??i bi???n trang tr?? c???a ph??ng ng???, ph??ng kh??ch, ph??ng t???m to??n b??? ?????u c?? th??? nh??n ra bi???n r???t th??ch. ?????c bi???t trong ph??ng c?? k??t n??n an t??m ????? v???t d???ng c?? nh??n quan tr???ng v??o ?????y v?? ??i ch??i th???a th??ch. R???t h??i l??ng v?? s??? quay l???i M?????ng Thanh Grand Nha Trang v??o 1 d???p kh??ng xa.',
                'rating'=>3
            ],
        ]);
        DB::table('hotel_amenities')->insert([
            [
                'hotel_id'=>1,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
            [
                'hotel_id'=>1,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>2,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>3,
                'amenities_name'=>'Security Cameras',
                'code'=>'camera-retro'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>4,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Free Wi-Fi',
                'code'=>'wifi'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'2 Signal Beads',
                'code'=>'bed'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Shower and Bathtub',
                'code'=>'shower'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Pet Friendly',
                'code'=>'paw'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Wheelchair Friendly',
                'code'=>'wheelchair'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Fitness Center',
                'code'=>'dumbbell'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Hot Water',
                'code'=>'hot-tub'
            ],
            [
                'hotel_id'=>5,
                'amenities_name'=>'Swimming Pool',
                'code'=>'swimmer'
            ],
        ]);
        DB::table('hotel_images')->insert([
            [
                'hotel_id'=>1,
                'path'=>'MuongThanh-Hotel-1.jpg'
            ],
            [
                'hotel_id'=>2,
                'path'=>'NewSun-Hotel-2.jpg'
            ],
            [
                'hotel_id'=>3,
                'path'=>'V-Hotel-2.jpg'
            ],
            [
                'hotel_id'=>4,
                'path'=>'HaiBay-Hotel.jpg'
            ],
            [
                'hotel_id'=>5,
                'path'=>'Helios-Hotel-1.jpg'
            ],
            [
                'hotel_id'=>6,
                'path'=>'RisingDragon-Hotel-1.jpg'
            ],
            [
                'hotel_id'=>7,
                'path'=>'ChauLong-Hotel-1.jpg'
            ],
            [
                'hotel_id'=>8,
                'path'=>'KK-Hotel-4.jpg'
            ],
            [
                'hotel_id'=>9,
                'path'=>'Unique-Hotel-5.jpg'
            ],
            [
                'hotel_id'=>10,
                'path'=>'MaiThang-Hotel-2.jpg'
            ],
            [
                'hotel_id'=>11,
                'path'=>'NewLife-Hotel-3.jpg'
            ],
            [
                'hotel_id'=>12,
                'path'=>'TheKiMoi-Hotel-1.jpg'
            ],
            [
                'hotel_id'=>13,
                'path'=>'Herriot-Hotel-5.jpg'
            ],
            [
                'hotel_id'=>14,
                'path'=>'Marina-Hotel-5.jpg'
            ],
        ]);
        DB::table('destinations')->insert([
            [
                'name'=>'Nha Trang',
                'image_path'=>'nha-trang.jpg',
                'description'=>'<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Nha Trang?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name'=>'H?? N???i',
                'image_path'=>'ha-noi.jpg',
                'description'=>'<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Ha Noi?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name'=>'Sapa',
                'image_path'=>'sapa.jpg',
                'description'=>'<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Sapa?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name'=>'???? L???t',
                'image_path'=>'da-lat.jpg',
                'description'=>'<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Da Lat?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
            [
                'name'=>'???? N???ng',
                'image_path'=>'da-nang.jpg',
                'description'=>'V???i v??? tr?? l?? m???t trong ba trung t??m du l???ch l???n tr??n b???n ????? du l???ch Vi???t Nam, ???? N???ng th??nh ph??? bi???n xinh ?????p hi???n h??a v?? m???m kh??ch, n??i m?? b???n c?? th??? d??? d??ng ?????n ???????c b???ng c??? ???????ng b???, ???????ng h??ng kh??ng v?? ???????ng th???y. M???t d???u ???n ?????a l?? v?? l???ch s???, ??i???m trung chuy???n ti???n l???i ?????n c??c di s???n v??n h??a th??? gi???i nh?? Hu???, M??? S??n, H???i An v?? khu d??? tr??? sinh quy???n th??? gi???i C?? Lao Ch??m. Qua n??m th??ng ???? N???ng ??ang c??ng kh???ng ?????nh l?? m???t ??i???m ?????n h???p d???n v?? l?? t?????ng ?????i v???i b??n b?? v?? du kh??ch n??m ch??u. B???n s??? ??i t??? ng???c nhi??n n??y ?????n ng???c nhi??n kh??c trong h??nh tr??nh kh??m ph?? c??c di t??ch v??n h??a, l???ch s???, danh lam th???ng c???nh, ????o H???i V??n ??? Thi??n h??? ????? nh???t h??ng quang, Ng?? H??nh S??n thuy???n tho???i, ?????n d???i b??? bi???n tuy???t ?????p ???????c t??n vinh l?? m???t trong s??u b???i bi???n ?????p nh???t h??nh tinh. H??n th??? n???a ???? N???ng l?? n??i b???n c?? th??? th?????ng th???c d???ch v??? ngh??? d?????ng ?????t chu???n qu???c t??? v???i c??c th????ng hi???u n???i ti???ng th??? gi???i nh?? Intercontinental, Novotel, Crowne Plaza, Furama??? Tham gia nh???ng h??nh tr??nh kh??m ph?? thi??n nhi??n phong ph?? v?? c???m nh???n s??u s???c v??? ?????i s???ng v?? v??n h??a b???n ?????a.'
            ],
            [
                'name'=>'V???nh H??? Long',
                'image_path'=>'ha-long.jpg',
                'description'=>'<div class="row">
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
    <div class="col-lg-6 mb-20">
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur cipsum dolor sit amet consectetur adipiscing elit amet consect piscing elit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit</p>
    </div>
</div>
<h4 class="mb-10">What is the Ha Long?</h4>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
<div class="row">
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-2.jpg" alt=""> </div>
    <div class="col-lg-6 col-md-6 mb-20"> <img src="front/img/popular-destination/destination-detail-img-3.jpg" alt=""> </div>
</div>
<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet orem ipsum dolor sit amet consectetur adipiscing elit amet consectetur piscing elit amet consectetur adipiscing elit sed et eletum nulla eu placerat felis etiam tincidunt orci lacus id varius dolor fermum sit amet.</p>
'
            ],
        ]);
    }
}
