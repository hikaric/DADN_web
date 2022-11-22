<?php
session_start(); 
require_once  '../views/inc/head.php'; ?>
<title>Về chúng tôi</title>
</head>

<body>
    <?php require_once 'inc/nav.php' ?>
    <div class="container bg-light">
        <h2>Giới thiệu về Website</h2>
    <p>
        Đây là một sản phẩm được tạo ra cho một đồ án của nhóm tại Đại học Bách khoa TP.HCM. 
        Trang web không phục vụ mục đích thương mại nên các thành viên nhóm sẽ không chịu trách nhiệm 
        khi bạn đặt hàng trên trang web và hàng không được giao đi. Trang web sử dụng PHP và javascript 
        cùng với Boostrap để thực thi. Trang web có đủ các chức năng cơ bản
         của một trang thương mại điện tử, tuy nhiên vẫn có những chỗ chưa đúng với thực tế. Mọi ý kiến đóng góp 
         có thế gửi cho nhóm.
    </p>
        <h2>Giới thiệu về Nhóm</h2>
    <p>
        Nhóm gồm 5 thành viên:
    </p>
    <table>
        <tr>
            <th>Họ tên</th>
            <th>MSSV</th>
            <th>Phụ trách</th>
        </tr>
        <tr>
            <td>Nguyễn Minh Quang</td>
            <td>2011897</td>
            <td>Làm UI bên view khách hàng</td>
        </tr>
        <tr>
            <td>Nguyễn Đoàn Anh Kiệt</td>
            <td>1913876</td>
            <td>Làm UI bên view quản trị</td>
        </tr>
        <tr>
            <td>Trần Minh Tuấn</td>
            <td>2012360</td>
            <td>Làm các chức năng bên quản trị</td>
        </tr>
        <tr>
            <td>Võ Mạnh Hào</td>
            <td>1913238</td>
            <td>Tạo và làm việc với database</td>
        </tr>
        <tr>
            <td>Nguyễn Thanh Sang</td>
            <td>2011969</td>
            <td>Làm các chức năng bên khách hàng</td>
        </tr>
    </table>

    </div>
    <?php require_once 'inc/footer.php' ?>
    <script>
</script>
</body>
