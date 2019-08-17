<?php

/**
 * Template Name: diem danh Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage Scholarship
 * @since 1.0.0
 */

get_header(); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        </div>

        <!-- Login Form -->
        <form action="diemdanh">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" onclick="submitForm()" class="fadeIn fourth" value="Log In">
        </form>
        <script>
            $('form').submit(false);
            let username = "giaovien";
            let password = "daihocthuyloi";
            submitForm = () => {
                if (document.getElementById("login").value == username && document.getElementById("password").value == password) {
                    document.getElementById("formContent").remove();
                }
            }
            let danhsachlop = [{
                    "stt": 1,
                    "ma sinh vien": "1651171174",
                    "ten": "Lê Thị Vân\tAnh",
                    "lop": "58PM"
                },
                {
                    "stt": 2,
                    "ma sinh vien": "1651170969",
                    "ten": "Hồ Đình\tChung",
                    "lop": "58PM"
                },
                {
                    "stt": 3,
                    "ma sinh vien": "1651170930",
                    "ten": "Nguyễn Văn\tDung",
                    "lop": "58PM"
                },
                {
                    "stt": 4,
                    "ma sinh vien": "175A072275",
                    "ten": "Nguyễn Thành\tDự",
                    "lop": "59HT"
                },
                {
                    "stt": 5,
                    "ma sinh vien": "1651171078",
                    "ten": "Trương Bình\tDương",
                    "lop": "58PM"
                },
                {
                    "stt": 6,
                    "ma sinh vien": "1651170679",
                    "ten": "Đỗ Việt\tHiếu",
                    "lop": "58PM"
                },
                {
                    "stt": 7,
                    "ma sinh vien": "135NK0168",
                    "ten": "Đào Huy \tHoàng",
                    "lop": "56TH-KH"
                },
                {
                    "stt": 8,
                    "ma sinh vien": "1651060710",
                    "ten": "Mai Đình\tHoàng",
                    "lop": "58TH2"
                },
                {
                    "stt": 9,
                    "ma sinh vien": "1651170999",
                    "ten": "Chu Thị Ngọc\tHuyền",
                    "lop": "58PM"
                },
                {
                    "stt": 10,
                    "ma sinh vien": "1651060889",
                    "ten": "Trần Duy\tHưng",
                    "lop": "58TH1"
                },
                {
                    "stt": 11,
                    "ma sinh vien": "1651171917",
                    "ten": "Nguyễn Công\tKhánh",
                    "lop": "58PM"
                },
                {
                    "stt": 12,
                    "ma sinh vien": "1651170980",
                    "ten": "Nguyễn Tùng\tLâm",
                    "lop": "58PM"
                },
                {
                    "stt": 13,
                    "ma sinh vien": "1651171002",
                    "ten": "Nguyễn Tuấn\tMạnh",
                    "lop": "58PM"
                },
                {
                    "stt": 14,
                    "ma sinh vien": "175A071515",
                    "ten": "Đỗ Ngọc\tMinh",
                    "lop": "59TH2"
                },
                {
                    "stt": 15,
                    "ma sinh vien": "1651171206",
                    "ten": "Ngô Quốc\tMinh",
                    "lop": "58PM"
                },
                {
                    "stt": 16,
                    "ma sinh vien": "1551110464",
                    "ten": "Trần Công\tMinh",
                    "lop": "57CT1"
                },
                {
                    "stt": 17,
                    "ma sinh vien": "1651060870",
                    "ten": "Trần Gia\tPhong",
                    "lop": "58TH2"
                },
                {
                    "stt": 18,
                    "ma sinh vien": "1651171004",
                    "ten": "Vũ Thị\tPhương",
                    "lop": "58PM"
                },
                {
                    "stt": 19,
                    "ma sinh vien": "1651160753",
                    "ten": "Nguyễn Đức\tQuân",
                    "lop": "58HT"
                },
                {
                    "stt": 20,
                    "ma sinh vien": "1651170886",
                    "ten": "Ngô Minh\tSang",
                    "lop": "58PM"
                },
                {
                    "stt": 21,
                    "ma sinh vien": "1651060882",
                    "ten": "Hoàng\tSơn",
                    "lop": "58TH2"
                },
                {
                    "stt": 22,
                    "ma sinh vien": "175A071268",
                    "ten": "Nguyễn Ngọc\tSơn",
                    "lop": "59PM1"
                },
                {
                    "stt": 23,
                    "ma sinh vien": "1551060658",
                    "ten": "Đào Cư\tTâm",
                    "lop": "57TH3"
                },
                {
                    "stt": 24,
                    "ma sinh vien": "1351061761",
                    "ten": "Nguyễn Anh\tTâm",
                    "lop": "55TH1"
                },
                {
                    "stt": 25,
                    "ma sinh vien": "1651170709",
                    "ten": "Nguyễn Minh\tThành",
                    "lop": "58PM"
                },
                {
                    "stt": 26,
                    "ma sinh vien": "1651170726",
                    "ten": "Phạm Văn\tThạo",
                    "lop": "58PM"
                },
                {
                    "stt": 27,
                    "ma sinh vien": "1651060803",
                    "ten": "Dương Văn\tThắng",
                    "lop": "58TH2"
                },
                {
                    "stt": 28,
                    "ma sinh vien": "1551061028",
                    "ten": "Đỗ Trọng\tThắng",
                    "lop": "57TH4"
                },
                {
                    "stt": 29,
                    "ma sinh vien": "1651171001",
                    "ten": "Ngô Đức\tThịnh",
                    "lop": "58PM"
                },
                {
                    "stt": 30,
                    "ma sinh vien": "1551060993",
                    "ten": "Phan Ngọc\tThủy",
                    "lop": "57TH3"
                },
                {
                    "stt": 31,
                    "ma sinh vien": "1551060841",
                    "ten": "Tạ Hữu Băng\tTrâm",
                    "lop": "57TH2"
                },
                {
                    "stt": 32,
                    "ma sinh vien": "1551060995",
                    "ten": "Lưu Kỳ\tTrọng",
                    "lop": "57TH3"
                },
                {
                    "stt": 33,
                    "ma sinh vien": "1651170991",
                    "ten": "Quản Văn\tTrung",
                    "lop": "58PM"
                },
                {
                    "stt": 34,
                    "ma sinh vien": "1651171169",
                    "ten": "Nguyễn Mai\tTrực",
                    "lop": "58PM"
                },
                {
                    "stt": 35,
                    "ma sinh vien": "1651061029",
                    "ten": "Dương Tuấn\tVũ",
                    "lop": "58TH1"
                }
            ];
        </script>

    </div>
</div>

<?php
get_footer();
