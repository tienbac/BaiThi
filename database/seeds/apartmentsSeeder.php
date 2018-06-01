<?php

use Illuminate\Database\Seeder;

class apartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
             'name' => 'CT101',
             'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
             'price' => 10000000,
             'information' => 'Can ho so 1, tang 1, toa nha FOCUS Building',
             'informationDetail' => 'rong 100m2, day du tien nghi',
             'avatar' => 'http://cdn.baogiaothong.vn/files/hang.truong/2018/03/29/165435-chung-cu.jpg',
             'status' => 1,
             'created_at' => '2018/06/01'
            ],[
                'name' => 'CT102',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 2, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://datnen-canho.com/wp-content/uploads/2017/09/luachonhuongcanhochungcutheophongthuy-14972599981.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT103',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 3, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://datnen-canho.com/wp-content/uploads/2017/09/luachonhuongcanhochungcutheophongthuy-14972599981.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT104',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 4, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://hungphatland.net/portals/hungphatland_net/images/phong-thuy-can-ho-chung-cu.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT105',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 5, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://nhadatvif.com/wp-content/uploads/2016/04/chung-c%C6%B0.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT106',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 6, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://thelancasterlincoln.vn/wp-content/uploads/2017/10/121-1.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT107',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 7, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://housing.vn/wp-content/uploads/2014/11/times-city-apartment-for-rent-41.jpg?1a25ec&1a25ec',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT108',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 8, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://static.tapchitaichinh.vn/660x450/Uploaded/phammaihanh/2015_04_09/canho.png',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT109',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 9, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://images1.cafef.vn/Images/Uploaded/Share/8a010923642b7bc979a379e399d7ca78/2014/09/05/x2.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT110',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 10000000,
                'information' => 'Can ho so 10, tang 1, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://img2.dothi.net/dothi_svr_1_resize_624_476_3.20180305160742-f44b_wm.jpg',
                'status' => 1,
                'created_at' => '2018/06/01'
            ],[
                'name' => 'CT201',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 1, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8tN6zvgSVDyJSbkOxmDEcuBq02ILMxpHRHSzYfYIJYgHmQJCL',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT202',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 2, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://belleville2.com/wp-content/uploads/2018/01/y26.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT203',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 3, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://www.lancaster.com.vn/wp-content/uploads/2017/09/co-nen-mua-nha-tang-13-2.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT204',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 4, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'https://noithat2.jweb.vn/uploads/noithat2/images/tintuc/medium_ndu1452074752.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT205',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 5, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://sungroup-hanoi.vn/wp-content/uploads/2017/04/can-ho-timecity.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT206',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 6, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://baodautu.vn/Images/chicong/2017/10/31/met-moi-song-trong-ngo-nho-vo-chong-toi-ban-thao-len-chung-cu1509415309.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT207',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 7, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://charminghome.com.vn/wp-content/uploads/2017/06/Thi%E1%BA%BFt-K%E1%BA%BF-N%E1%BB%99i-Th%E1%BA%A5t-Ph%C3%B2ng-Kh%C3%A1ch-1.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT208',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 8, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://ankhoa.com.vn/upload/images/20773670_1612572265429053_1199750136_o.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT209',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 9, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://kientrucsuvietnam.vn/wp-content/uploads/2018/03/mau-thiet-ke-noi-that-chung-cu-8-1.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ],[
                'name' => 'CT210',
                'address' => 'So 8, ngo 45, Vong Thi, Tay Ho, Ha Noi',
                'price' => 9000000,
                'information' => 'Can ho so 10, tang 2, toa nha FOCUS Building',
                'informationDetail' => 'rong 100m2, day du tien nghi',
                'avatar' => 'http://chungcuthetworesidence.com/sites/default/files/ban-can-ho-osaka-complex-56m2.jpg',
                'status' => 1,
                'created_at' => '2018/05/30'
            ]
        ]);
    }
}
