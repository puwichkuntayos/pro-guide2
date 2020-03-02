<?php
$type1='';
$type2='';
$type3='';
$nobank='';
$namebank='';
$nbank='';
  if(isset($data[0]->type_id)){
    if($data[0]->type_id == 1){
      $type1 = "checked";
      $nobank = $data[0]->account_number;
      $namebank = $data[0]->bank_name;
      $nbank = $data[0]->bname;
    }elseif ($data[0]->type_id == 2) {
      $type2 = "checked";
    }else{
      $type3 = "checked";
    }
  }
 ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<html>
  <meta charset="utf-8"/>
    <head>
      <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("https://ticket.probookingcenter.com/fonts/THSarabunNew.ttf") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("https://ticket.probookingcenter.com/fonts/THSarabunNewBold.ttf") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("https://ticket.probookingcenter.com/fonts/THSarabunNewItalic.ttf") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("https://ticket.probookingcenter.com/fonts/THSarabunNewBoldItalic.ttf") format('truetype');
        }
          body {
              font-family: "THSarabunNew";
              /* margin: 0px; */
            }

            table {
              border-collapse: collapse;
            }

            table,
            td,
            th {
              border: 1px solid #BEBEBE;

            }

            #customers td, #customers th ,#customers tr{
              border: 1px solid #BEBEBE;
              padding-top: -10px;
            }

            @page {
               /* size: 21cm 29.7cm; */
               /* margin-top: 0cm; */
               margin-bottom: 0cm;
               /* border: 1px solid blue; */
            }
            .pro{

            }


        </style>
    </head>
    <body>
      <div class="row">
    <div class="col-12">
        <p style="font-size: 16px;margin-top: -7%;" class="text-center font-weight-bold">ใบสำคัญจ่าย</p>
        <?php
          if(isset($data[0]->no)){
            $nopay = $data[0]->no;
          }else{
            $nopay = '';
          }
         ?>
      <div style="margin-top: -10%; font-size:14px;">
        <img class="" src="images/โลโก้.png" alt="" style="width:60px;">
        <label style="margin-left: 72%;" class="">เลขที่ :</label>
        <label style="width: 14%;border-bottom: 1px solid #BEBEBE;" class="text-center">{{$nopay}}</label>
      </div>
      <?php
          if(isset($pay[0]->created_at)){
              // $datec = $fn->q('date')->convertDateTo_th($data[0]->created_at);
              $pay = date('d/m/Y', strtotime($pay[0]->created_at));
          }else{
            $pay = '';
          }

        ?>
      <div style="margin-top: -3%; ">
        <label class="font-weight-bold pro" style="font-size:16px;">PRO BOOKING CENTER.CO,LTD.</label>
        <label style="margin-left: 58.5%;font-size:14px;">วันที่ :</label>
        <label style="width: 14%;border-bottom: 1px solid #BEBEBE;font-size:14px;" class="text-center">{{$pay}}</label>
      </div>
      <div style="margin-top: -3%; font-size:14px;" >
        <label>จ่ายให้ :</label>
        <label style=" width: 80%;border-bottom: 1px solid #BEBEBE;">{{$data[0]->name}}</label>
        <input type="checkbox" value=""  {{$type2}}>
        <label >เงินสด</label>
      </div>
      <div style="margin-top: -3%; font-size:14px;">
        <input type="checkbox" value="" style="margin-left: 45px; " {{$type1}}>
        <label style="">เงินโอน เลขบัญชี :</label>
        <label style="width: 23%;border-bottom: 1px solid #BEBEBE;">&nbsp;{{$nobank}}</label>
        <label>ธนาคาร :</label>
        <label style="width: 23%;border-bottom: 1px solid #BEBEBE;">&nbsp;{{$namebank}}</label>
        <label>ชื่อบัญชี :</label>
        <label style="width: 23%;border-bottom: 1px solid #BEBEBE;">&nbsp;{{$nbank}}</label>
      </div>
      <div style="margin-top: -3%; font-size:14px;">
        <input type="checkbox" value="" style="margin-left: 45px;" {{$type3}}>
        <label style="">ธนาคาร :</label>
        <label style="width: 24%;border-bottom: 1px solid #BEBEBE;"></label>
        <label>เลขที่เช็ค :</label>
        <label style="width: 24%;border-bottom: 1px solid #BEBEBE;"></label>
        <label>ลงวันที่ :</label>
        <label style="width: 24%;border-bottom: 1px solid #BEBEBE;"></label>
      </div>
      <table id="customers" style="font-size:14px;margin-top: 1%;" width="100% ">
        <tr>
          <th class="text-center">รายการ</th>
          <th colspan="2" class="text-center">จำนวนเงิน(บาท)</th>
        </tr>
        <?php

        $n = '';
        $b0 = ''; $n0 = ''; $r0 = '';
        $b1 = ''; $n1 = ''; $r1 = '';
        $b2 = ''; $n2 = ''; $r2 = '';
        $b3 = ''; $n3 = ''; $r3 = '';
        $b4 = ''; $n4 = ''; $r4 = '';
        $b5 = ''; $n5 = ''; $r5 = '';

          if(isset($data[0]->price))
            {
              $b0 = $data[0]->bill;
              $n = explode(".",$data[0]->price);
              $n0 = $n[0];
              $r0 = $n[1];
            }

          if(isset($data[1]->price))
            {
              $b1 = $data[1]->bill;
              $n = explode(".",$data[1]->price);
              $n1 = $n[0];
              $r1 = $n[1];
            }

          if(isset($data[2]->price))
            {
              $b2 = $data[2]->bill;
              $n = explode(".",$data[2]->price);
              $n2 = $n[0];
              $r2 = $n[1];
            }

          if(isset($data[3]->price))
            {
              $b3 = $data[3]->bill;
              $n = explode(".",$data[3]->price);
              $n3 = $n[0];
              $r3 = $n[1];
            }

          if(isset($data[4]->price))
            {
              $b4 = $data[4]->bill;
              $n = explode(".",$data[4]->price);
              $n4 = $n[0];
              $r4 = $n[1];
            }

          if(isset($data[5]->price))
            {
              $b5 = $data[5]->bill;
              $n = explode(".",$data[5]->price);
              $n5 = $n[0];
              $r5 = $n[1];
            }

          // if(isset($data[0]->total))
          //   {
          //     $b6 = number_format($data[0]->total,2);
          //     // $b5 = $data[0]->total;
          //     $n = explode(".",$b6);
          //     $n6 = $n[0];
          //     $r6 = $n[1];
          //   }

            use App\Http\Controllers\TotalPaymentController;

            if($data[0]->category_id == 1)
            {
              $tax3 = $data[0]->input_tax;
              $totaltaxx = number_format($data[0]->total_tax,2);
              $tax =  number_format($data[0]->total * $tax3 / 100,2);
              $totaltax =  $data[0]->total - $tax;
              $textpay = TotalPaymentController::Convert($data[0]->total);

              $totax = number_format($totaltax,2);
              $totaxx = number_format($totaltax,2);

              $n = explode(".",$totaxx);
              $n6 = $n[0];
              $r6 = $n[1];

              $taxx = explode(".",$tax);
              $ta = $taxx[0];
              $xx = $taxx[1];

              $total = explode(".",$totax);
              $to = $total[0];
              $tal = $total[1];
            }
            else if($data[0]->category_id == 2)
            {
              $tax3 = $data[0]->input_tax;
              $totaltaxx = number_format($data[0]->total_tax,2);
              $tax =  number_format($data[0]->total * $tax3 / 100,2);
              $totaltax =  $data[0]->total + $totaltaxx;
              $textpay = TotalPaymentController::Convert($data[0]->total);

              $totax = number_format($data[0]->total,2);
              $totaxx = number_format($totaltax,2);

              $n = explode(".",$totaxx);
              $n6 = $n[0];
              $r6 = $n[1];

              $taxx = explode(".",$totaltaxx);
              $ta = $taxx[0];
              $xx = $taxx[1];

              $total = explode(".",$totax);
              $to = $total[0];
              $tal = $total[1];
            }

         ?>

        <tr>
          <td width="83%">&nbsp;{{$b0}}</td>
          <td width="12%" class="text-right">{{$n0}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r0}}</td>
        </tr>
        <tr>
          <td width="83%">&nbsp;{{$b1}}</td>
          <td width="12%" class="text-right">{{$n1}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r1}}</td>
        </tr>
        <tr>
          <td width="83%">&nbsp;{{$b2}}</td>
          <td width="12%" class="text-right">{{$n2}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r2}}</td>
        </tr>
        <tr>
          <td width="83%">&nbsp;{{$b3}}</td>
          <td width="12%" class="text-right">{{$n3}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r3}}</td>
        </tr>
        <tr>
          <td width="83%">&nbsp;{{$b4}}</td>
          <td width="12%" class="text-right">{{$n4}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r4}}</td>
        </tr>
        <tr>
          <td width="83%">&nbsp;{{$b5}}</td>
          <td width="12%" class="text-right">{{$n5}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r5}}</td>
        </tr>
        <tr>
          <td width="83%" class="text-right">รวมทั้งหมด&nbsp;</td>
          <td width="12%" class="text-right">{{$n6}}&nbsp;</td>
          <td width="5%">&nbsp;{{$r6}}</td>
        </tr>
        <tr>
          <td class="text-right">ภาษีหัก ณ ที่จ่าย 3%&nbsp;</td>
          <td class="text-right">{{number_format($ta)}}&nbsp;</td>
          <td>&nbsp;{{$xx}}</td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">{{$textpay}}</td>
          <td class="text-right font-weight-bold">{{$to}}&nbsp;</td>
          <td class="font-weight-bold">&nbsp;{{$tal}}</td>
        </tr>
      </table>

      <div style="margin-top: 1%;font-size:14px;">
        <label style="">ลงชื่อ</label>
        <label style="width: 19%;border-bottom: 1px solid #BEBEBE;"></label>
        <label style="margin-left:16%;">ลงชื่อ</label>
        <label style="width: 19%;border-bottom: 1px solid #BEBEBE;"></label>
        <label style="margin-left:14%;">ลงชื่อ</label>
        <label style="width: 20%;border-bottom: 1px solid #BEBEBE;"></label>
      </div>
      <div style="margin-top: -2%;font-size:14px;">
        <label style="">วันที่</label>
        <label style="width: 19%;border-bottom: 1px solid #BEBEBE;">&nbsp;</label>
        <label style="margin-left:17%;">วันที่</label>
        <label style="width: 19%;border-bottom: 1px solid #BEBEBE;">&nbsp;</label>
        <label style="margin-left:15%;">วันที่</label>
        <label style="width: 20%;border-bottom: 1px solid #BEBEBE;">&nbsp;</label>
      </div>
      <div style="margin-top: -2%;font-size:14px;">
        <label style="margin-left:10%;">ผู้อนุมัติจ่าย</label>
        <label style="margin-left:33%;">ผู้จ่ายเงิน</label>
        <label style="margin-left:33%;">ผู้รับเงิน</label>
      </div>


    </div>
  </div>

    </body>
    </html>
