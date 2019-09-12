<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>

    <style>
        #tb {
            margin: 0 auto;
            border: 1px solid #ddd;
            color: black;
        }
        .tb_tr {
            background: #0c5480;
        }
        .tb_tr_2 {
            background: moccasin;
        }
        .media {
            display: flex;
        }
        .media-left .media-object {
            width: 120px;
        }
        .media-left .media-body p {
            margin: 5px;
        }
        .ii a[href] {
            color: white;
            /*text-decoration: none;*/
        }
        .img_1 {
            width: 100px;
            padding: 5px;
        }
        .text-uppercase {
            text-transform: uppercase;
        }
        .media-body-2 p {
            color: white;
        }
        .media-body-2 p a{
            color: white;
            text-decoration: none;
        }
        .tb_tr_td .media .media-body p {
            margin: 3px;
        }
        .media-left-2 img {
            padding: 5px 2px;
            width: 30px;
        }
        .btn {
            text-decoration: none;
        }
        a.btn-primary {
            background: burlywood;
            padding: 8px;
            text-align: center;
            color: beige;
        }
        a.btn-primary:hover {
            background: chocolate;
        }
        .tb_tr_align td p {
            text-align: center;
        }
        .tb_tr_align {
            background: ghostwhite;
        }
    </style>
</head>
<body>

    <table id="tb">
        <tr class="tb_tr_2">
            <td colspan="3"><img src="http://tiva.vn/tiva/img/logo.png" class="img_1"></td>
        </tr>
        <tr class="tb_tr_align">
            <td colspan="3">
                <p>Xin chào <strong>{{(!empty($data->name))?$data->name:'bạn!'}}</strong></p>
                <p>Bạn đang ở trang <strong class="text-uppercase">vlnk</strong></p>
                <br>
                <p>Nội dung <strong class="text-uppercase">{{$data->message}}</strong></p>
                <br>
                <p>Cảm ơn bạn đã sử dụng dịch vụ của https://phuctoidental.com</p>
                <p>Mọi thắc mắc xin liên hệ: 0978987166</p>
            </td>

        </tr>
        <tr class="tb_tr">
            {{-- <td>
                <div class="media">
                    <div class="media-left media-left-2">
                        <img src="https://ci3.googleusercontent.com/proxy/dlSJXuJkGuVrWuom5YMa1224qnQd3VvNMGGngUmw0QSRIYmM2YH9EZNoSPMV28dAZG2ff5VSusEmTzUJyLp1JMIdzsT89NeZIg=s0-d-e1-ft#https://jobsgo.vn/media/img/mail-phone-employer.png" class="media-object" style="width:30px">
                    </div>
                    <div class="media-body media-body-2">
                        <p>{{tiva()->tiva_phone}}</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="media">
                    <div class="media-left media-left-2">
                        <img src="https://ci5.googleusercontent.com/proxy/ZzbaU_BEbi46-eiiMGBj5RfOEHRu9KdwxlCCq5KybNmHqQlUwpCHLTZckAmybc4u8HK8hHGwq67teZQQGeKdDaJAuKgzQoCp-g=s0-d-e1-ft#https://jobsgo.vn/media/img/mail-inbox-employer.png" class="media-object" style="width:30px">
                    </div>
                    <div class="media-body media-body-2">
                        <p>{{tiva()->tiva_email}}</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="media">
                    <div class="media-left media-left-2">

                        <img src="https://ci6.googleusercontent.com/proxy/Ri4rMt1VbtXwZwJRcJkK-VfUHdm99cKaBv8gzeCsMV7-QhzLwfSweIGXaU0DbZIh0Vla_UhfPjQKuprglo5kYxnHlm5C3vxs6UE=s0-d-e1-ft#https://jobsgo.vn/media/img/mail-global-employer.png" class="media-object" style="width:30px">
                    </div>
                    <div class="media-body media-body-2">
                        <p><a href="{{tiva()->tiva_fanpage}}">facebook/Tiva</a></p>
                    </div>
                </div>
            </td> --}}
        </tr>
    </table>
</body>
</html>
