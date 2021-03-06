<?php include('common/header.php') ?>
<main>
	<div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		<ul>
			<li><a href="index.php" class="breadcrumb">Trang chủ</a></li>
			<li><a href="updatePersonalInfor.php" class="breadcrumb">Cập nhật thông tin cá nhân</a>
			</li>

		</ul>
	</div>
	<div class="container-fluid col-md-10 offset-md-1 ">
		<h1 class="article-title mt-4 mb-4 wow animate__fadeInUp" data-wow-duration="1s" itemprop="headline"
			style="text-align: center;text-transform: capitalize;">
			Cập nhập thông tin cá nhân
		</h1>
		<form class="row g-4 needs-validation" novalidate>
			<div class="col-md-6 col-sm-5 position-relative my-3 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip01" class="form-label">Mã sinh viên:
					1811505310345</label>
			</div>
			<div class="col-md-4 col-sm-5 position-relative my-3 offset-md-2 offset-sm-2 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip02" class="form-label">Tên sinh viên: Nguyễn Văn
					Trí</label>
			</div>
			<div class="col-md-6 col-sm-5 position-relative my-3 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip02" class="form-label">Lớp sinh hoạt:18T3</label>
			</div>
			<div class="col-md-4 col-sm-5 position-relative my-3 offset-md-2 offset-sm-2 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip02" class="form-label">Trạng thái:</label>
				<font><b color="blue" class="text-primary">Còn học</b></font>
			</div>
			<div class="col-md-6 col-sm-5 position-relative my-3 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip01" class="form-label">Ngày sinh: 02/06/2000</label>
			</div>
			<div class="col-md-4 col-sm-5 position-relative my-3 offset-md-2 offset-sm-2 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationTooltip02" class="form-label">Giới tích: Nam</label>
			</div>
			<div class="col-md-6  my-3 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationDefault01" class="form-label">Số điện thoại</label>
				<input type="text" class="form-control" id="validationDefault01" value="0385763449"
					required>
			</div>
			<div class="col-md-4  my-3 offset-md-2 wow animate__fadeInUp" data-wow-duration="1s" style="visibility: visible;">
				<label for="validationDefaultUsername" class="form-label">Thư điện tử</label>
				<div class="input-group">
					<span class="input-group-text" id="inputGroupPrepend2">@</span>
					<input type="text" class="form-control" id="validationDefaultUsername"
						aria-describedby="inputGroupPrepend2" value="Yourshape1989@gmail.com"
						required>
				</div>
			</div>
			<div class="col-12  my-3 wow animate__fadeInUp text-center" data-wow-duration="1s">
				<button class="btn btn-danger" type="submit">Cập nhập thông tin</button>
			</div>
		</form>
	</div>
</main>
<?php include('common/footer.php') ?>				