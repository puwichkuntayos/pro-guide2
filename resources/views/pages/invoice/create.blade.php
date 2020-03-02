@extends('layouts.admin')

@section('content')

<div class="container">
	
	<div class="col-lg-12">

		<div class="card" style="">
			<h4 class="card-title text-center">ใบสำคัญจ่าย</h4>
			<div class="card-body">
				<form action="" method="post" >
					<div class="row">
						
						<div class="col-lg-9">
							<label class="float-right invoicenum">เลขที่</label>
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="id">
						</div>
					</div>

					<div class="row">
						<div class="col-7 probooking">PRO BOOKING CENTER</div>
						<div class="col-lg-2 ">
							<label class="float-right">วันที่</label>
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="date">
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">
							<span>จ่ายให้</span>
						</div>
						<div class="col-lg-8">
							<input type="text" name="name" class="form-control">
						</div>
						<div class="col-lg-1">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="type1" name="type1">
								<label class="form-check-label" for="type1">โอน</label>
							</div>	
						</div>
						<div class="col-lg-1">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="type2" name="type2">
								<label class="form-check-label" for="type2">เงินสด</label>
							</div>
						</div>
						<div class="col-lg-1">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="type3" name="type3">
								<label class="form-check-label" for="type3">เช็ค</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2">
							<span>เลขที่บัญชี</span>
						</div>
						<div class="col-lg-10" style="margin-left:-90px;">
							<input type="text" name="bankid" class="form-control" >
							
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1">
							<span>ธนาคาร</span>
						</div>
						<div class="col-lg-3">
							<input type="text" name="bank" class="form-control">
						</div>
						<div class="col-lg-1">
							<span>เลขที่เช็ค</span>
						</div>
						<div class="col-lg-3">
							<input type="text" name="bank" class="form-control">
						</div>
						<div class="col-lg-1 ">
							<label class="">วันที่</label>
						</div>
						<div class="col-lg-3">
							<input type="text" name="datetime" class="form-control">
						</div>
					</div>

					<div class="row">
						<table class="table table-bordered" width="100%">
							<thead>
								<th width="60%">รายการ</th>
								<th width="40%">จำนวนเงิน(บาท)</th>
							</thead>
							<tbody>
								<td width="60%"><input type="text" name="list[]" class="form-control"></td>
								<td width="40%"><input type="text" name="price[]" class="form-control"></td>
							</tbody>
							<tfoot>
								<td width="60%" style="font-weight: bold; padding: auto;">รวมเงิน</td>
								<td width="40%"><input type="text" name="total" class="form-control"></td>
							</tfoot>
						</table>
					</div>
				</form>


			</div>
		</div>

	</div>
	

</div>
@endsection

<!-- <div class="col-lg-8">
	
	<input type="text" class="form-control" name="">
</div> -->