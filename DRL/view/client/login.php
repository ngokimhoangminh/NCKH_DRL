<?php include('common/header.php') ?>
<main>

	<div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		<ul>
			<li><a href="index.php" class="breadcrumb">Trang chủ</a></li>
			<li><a href="login.php" class="breadcrumb">Đăng nhập</a></li>

		</ul>
	</div>

	<div class="login-form ">
		<h1 class="article-title wow animate__fadeInUp" data-wow-duration="2s" itemprop="headline"
			style="text-align: center;text-transform: capitalize;">
			Đăng nhập Hệ thống <br>Quản lý Chấm điểm rèn luyện
		</h1>
		<div id="login-sv" class="login" width="100%" align="center" border="0" cellpadding="0"
			cellspacing="0">

			<div class=" wow animate__fadeInUp" data-wow-duration="2s">
				<div class="bg-module bg-module-top">
					
				</div>
			</div>
			<div class="login__info">
				<div align="center" class="login__info login__info--username bg-module-middle wow animate__fadeInUp" data-wow-duration="2s">
					<label class="moudle__info--title">Mã sinh viên</label>
					<input type="text" id="txt_Login_ten_dang_nhap"
						class="username-login form-control required display-inline-block"
						name="txt_Login_ten_dang_nhap" value="" placeholder="Mã số đăng nhập">

				</div>
				<div align="center" class="login__info login__info--password bg-module-middle wow animate__fadeInUp" data-wow-duration="2s">

					<label class="moudle__info--title">Mật khẩu</label>
					<input type="password" id="pw_Login_mat_khau"
						class="password-login form-control required display-inline-block"
						name="pw_Login_mat_khau" value="" placeholder="Mật khẩu">
				</div>
			</div>
			<div class="form-group row form-group--center wow animate__fadeInUp" data-wow-duration="2s" style="margin: 0">


				<div class="col-lg-4 col-md-4 form-group">
					<a class="btn btn-danger" style="width: 100%" href="#"><i
							class="fa fa-users"></i>&nbsp;Đăng nhập tài khoản</a>
				</div>
				<div class="col-lg-4 col-md-4">
					<a class="btn btn-info" style="width: 100%" href="forgotPassword.php"
						target="_blank"><i class="fa fa-key">
						</i>&nbsp;Quên mật khẩu?</a>
				</div>

			</div>
			<div>
				<div class="bg-module bg-module-bottom wow animate__fadeInUp" data-wow-duration="2s" colspan="2">&nbsp;

				</div>
			</div>

		</div>
	</div>

	<div class="form-group mt-3">
		<div class="alert alert-danger login--note">
			<strong>Trường hợp không đăng nhập được?</strong>
			<br>
			<ul>
				<li>Nếu quên mật khẩu, nhấn nút quên mật khẩu để vào mail nhận mật khẩu;</li>
				<li>Trường hợp vào mail không thấy, vào mục spam để kiểm tra. Tuy nhiên, những SV
					chưa
					cập nhật email thì sẽ không thấy mail gửi về -&gt; Liên hệ Ban Truyền thông để
					xin
					tài khoản;</li>
				<li>Từ năm học 2020-2021, tất cả SV sẽ sử dụng email do nhà trường cấp.</li>
			</ul>
		</div>
	</div>
	<hr>
</main>
<?php include('common/footer.php') ?>
					 