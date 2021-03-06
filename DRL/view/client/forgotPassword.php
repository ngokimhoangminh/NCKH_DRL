<?php include('common/header.php') ?>
<main>

	<div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		<ul>
			<li><a href="index.php" class="breadcrumb">Trang chủ</a></li>
			<li><a href="forgot_password.php" class="breadcrumb">Quên Mật khẩu</a></li>
		</ul>
	</div>
	<div class="form-group mt-3 wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		<div class="alert alert-danger login--note">
			<strong>Hướng dẫn</strong>
			<br>
			<ul>
				<li>Nếu còn nhớ tên tài khoản hoặc email mà bạn đã từng khai báo khi đăng ký thành
					viên, hãy khai báo chúng vào ô trống dưới đây. Sau khi kiểm tra tính hợp lệ,
					chúng tôi sẽ tạo cho bạn mật khẩu mới.</li>
			</ul>
		</div>
	</div>
	<div class="forget__password--form">
		<h1 class="article-title wow animate__fadeInUp" data-wow-duration="2s" itemprop="headline"
			style="text-align: center;text-transform: capitalize;">
			Khôi Phục Mật Khẩu Thành Viên
		</h1>
		<div id="reset__password" class="login" width="100%" align="center" border="0"
			cellpadding="0" cellspacing="0">
			<div class="reset__password--info nopadding wow animate__fadeInUp" data-wow-duration="2s">
				<div align="center"
					class="reset__password--info reset__password--email bg-module-middle nopadding">

					<label class="moudle__info--title">Nhập Email</label>
					<input type="email" class="form-control required display-inline-block"
						placeholder="Email" value="" name="userField" maxlength="100"
						data-pattern="/^(.){3,}$/" onkeypress="validErrorHidden(this);"
						data-mess="Bạn chưa khai báo tên đăng nhập hoặc e-mail">
				</div>
			</div>
			<div class="form-group mt-3 reset__password--code wow animate__fadeInUp" data-wow-duration="2s">
				<div class="middle text-center clearfix d-flex justify-content-center align-items-center">
					<div class="reset__password--code--capcha ">
						<img class="captchaImg display-inline-block" src="../../assets/client/image/capcha.PNG" width="150"
						height="40" alt="Mã bảo mật" title="Mã bảo mật">
					 </div>
					<a href="#"><em class="fas fa-sync-alt mr-3 ml-1" title="Thay mới" onclick=""></em></a>
					<input type="text" style="width:200px;"
						class="bsec required form-control display-inline-block" name="nv_seccode"
						value="" maxlength="6" placeholder="Mã bảo mật" data-pattern="/^(.){6,6}$/"
						onkeypress="validErrorHidden(this);" data-mess="Mã bảo mật không chính xác">
				</div>
			</div>
			<div class="form-group  form-group--center reset__password--send  mt-5 wow animate__fadeInUp" data-wow-duration="2s" style="margin: 0">
				<div class="col-lg-4 col-md-4 form-group">
					<a class="btn btn-primary send" style="width:100%;" href="#"><i
							class="fas fa-paper-plane"></i>&nbsp;Gửi yêu cầu</a>
				</div>
			</div>
			<div class="bg-module bg-module-bottom row form-group--center wow animate__fadeInUp" data-wow-duration="2s" colspan="2">&nbsp;
				<div class="col-lg-4 col-md-4 form-group">
					<a class="btn btn-danger" style="width: 100%" href="login.php"><i
							class="fa fa-users"></i>&nbsp;Đăng nhập tài khoản</a>
				</div>
				<div class="col-lg-4 col-md-4">
					<a class="btn btn-info" style="width: 100%" href="forgot_password.php"
						target="_blank">
						<i class="fas fa-user-plus"></i>&nbsp;Đăng Ký</a>
				</div>
			</div>
		</div>
	</div>
	<hr>
</main>
<?php include('common/footer.php') ?>
					