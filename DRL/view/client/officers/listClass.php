<?php include('common/header.php') ?>
<main>

	<div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		<ul>
			<li><a href="teacher.php" class="breadcrumb">Trang chủ</a></li>
			<li><a href="listClass.php" class="breadcrumb">Đánh giá lại điểm</a></li>
			<li><a href="listClass.php" class="breadcrumb">18T1</a></li>
		</ul>
	</div>
	<div class="page-body">
		<div class="list__class mt-3 p-2 "  style="visibility: visible; margin: 0 0.5rem;">
			<div class="list__class_appraise wow animate__fadeInUp" data-wow-duration="2s">
				<label class="list__class_appraise--title">Đợt đánh giá: </label>
				<select class="list__class_appraise--time">
					<option>Đợt đánh giá HK 220</option>
					<option>Đợt đánh giá HK 120</option>
					<option>Đợt đánh giá HK 119</option>
					<option>Đợt đánh giá HK 219</option>
				</select>
			</div>
			<div class="table-lg-responsive list_class--info t ">
				<table class="table table-bordered table-hover mt-2 d-table">
					<thead>
						<tr class="list list-group-item-heading">
							<th scope="col">STT</th>
							<th scope="col">Mã Sinh Viên</th>
							<th scope="col">Họ Tên</th>
							<th scope="col">Tổng Điểm</th>
							<th scope="col">Xếp Loại</th>
							<th scope="col">Hành Động</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>1811505310131</td>
							<td>Ngô Kim Hoàng Minh</td>
							<td>85</td>
							<td>Tốt</td>
							<td><a href="viewScores.php" class="text-primary" target="_blank"><i class="fas fa-eye mr-1"></i>Xem chi tiết</a>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>1811505310131</td>
							<td>Ngô Kim Hoàng Minh</td>
							<td>85</td>
							<td>Tốt</td>
							<td><a href="officerMark.php" class="text-primary" target="_blank"><i class="fas fa-eye mr-1"></i>Xem chi tiết</a></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>1811505310131</td>
							<td>Ngô Kim Hoàng Minh</td>
							<td>85</td>
							<td>Tốt</td>
							<td><a href="#" class="text-primary"><i class="fas fa-eye mr-1"></i>Xem chi tiết</a></td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>1811505310131</td>
							<td>Ngô Kim Hoàng Minh</td>
							<td>85</td>
							<td>Tốt</td>
							<td><a href="#" class="text-primary"><i class="fas fa-eye mr-1"></i>Xem chi tiết</a></td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>1811505310131</td>
							<td>Ngô Kim Hoàng Minh</td>
							<td>85</td>
							<td>Tốt</td>
							<td><a href="#" class="text-primary"><i class="fas fa-eye mr-1"></i>Xem chi tiết</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<hr>
</main>
<?php include('common/footer.php') ?>
					