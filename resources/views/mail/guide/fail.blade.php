<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Demystifying Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />




    <style>
        body {
            font-family: 'Kanit', ;
        }
        .button {
    background-color: #ffffff;
    border: none;
    color: #ffffff;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    

}
    </style>
</head>

</html>



<body style="margin: 0; padding: 0;">
    <br><br>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ff8400">

        <tr>

            <td align="center" bgcolor="#ff8400" style="padding: 40px 0 30px 0;">

                <img src="https://probookingcenter.com/public/images/logo/logo-1.svg" alt="" width="70%">
            </td>
        </tr>



        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px; border">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td>
                        <!-- <p>สวัสดี, คุณ {{$data['name'] ?? ''}}</p> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>สวัสดี, คุณ{{$data['name'] ?? ''}}</p>

                        <p>คุณถูกปฏิเสธในการเชิญเข้าร่วมมาเป็น Guide/TL</p>

                        <!-- @if (!empty( $data['message'] ))
<textarea name=""  border="0"  id="" cols="30" readonly  rows="10" style="background-color:#ffffff ">เนื่องจาก {{$data['message']}}</textarea>
@endif -->

                        <p>กรุณากรอกข้อมูลให้ถูกต้องผ่านทางลิงก์นี้: </p>
                        <button class="button" type="submit"><a href="{{ asset('/guides/register/edit/'.$data['id'] )}}">กดเพื่อแก้ไขข้อมูล</a></button>

                    </td>
                </tr>

            </table>
        </td>





















        <tr>
            <td bgcolor="#ff8400" style="padding: 30px 30px 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <p style="color: #ffffff">228 Ladprao-Wanghin Rd., กรุงเทพมหานคร</p>
                            <p style="color: #ffffff"> เวลาทำการ จันทร์-เสาร์ 9:00 - 18:00 น.</p>
                            <!-- <p style="color: #ffffff" >โทร.</p>
                            <p style="color: #ffffff" > 02-9358550</p>
                            <p style="color: #ffffff" > 086-449-4433</p>

                            <p style="color: #ffffff" > 098-265-6247</p> -->

                        </td>
                        <td>

                            <p style="color: #ffffff">ติดต่อโทร.</p>
                            <p style="color: #ffffff"> 02-9358550</p>
                            <p style="color: #ffffff"> 086-449-4433</p>

                            <p style="color: #ffffff"> 098-265-6247</p>

                        </td>


                    </tr>
                </table>
            </td>

        </tr>














    </table>



    <br><br><br><br>





</body>