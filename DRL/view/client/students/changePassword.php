<?php include('common/header.php') ?>
<main>
			
         	<div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
						<ul>
							<li><a href="index.php" class="breadcrumb">Trang chủ</a></li>
							<li><a href="changePassword.php" class="breadcrumb">Thay đổi mật khẩu</a></li>

						</ul>
			</div>
		  	<div class="change__password--form" >
				<h1 class="article-title wow animate__fadeInUp" data-wow-duration="2s" itemprop="headline" style="text-align: center;text-transform: capitalize;">
              	Thay Đổi Mật Khẩu
            	</h1>
				<div id="change__password" class="login" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
		                <div class="change__password--info">
		                    <div align="center" class="change__password--info change__password--old bg-module-middle wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		                    
		                        <label class="moudle__info--title">Mật khẩu cũ:</label>
		                        <input type="password" class="form-control required display-inline-block"  
		                        placeholder="Mời nhập mật khẩu cũ" value="" name="userField" maxlength="100"  >     
		                    </div>
		                    <div align="center" class="reset__password--info reset__password--new bg-module-middle wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		                    	<label class="moudle__info--title">Xác nhận mật khẩu mới</label>
		                        <input type="password" class="form-control required display-inline-block"  
		                        placeholder="Mời nhập mật khẩu mới để xác nhận" value="" name="userField" maxlength="100"  >
		                    </div>
		                    <div align="center" class="reset__password--info reset__password--email bg-module-middle wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
		                    	<label class="moudle__info--title">Mật khẩu mới</label>
		                        <input type="password" class="form-control required display-inline-block"  
		                        placeholder="Mời nhập mật khẩu mới" value="" name="userField" maxlength="100"  >
		                    </div>
		                </div>
		                
	                    <div class="form-group  form-group--center mt-3 wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;" style="margin: 0">
		                   		
	                   			<div class="col-lg-4 col-md-4 form-group">
                                	<a class="btn btn-success" style="width: 100%" href="#"><i class="fas fa-exchange-alt"></i>&nbsp;Cập Nhật Mật Khẩu</a>
	                   			</div>
	               	 	</div>
	               	 	
            	</div>
			</div>
		  	<hr>
</main>
<?php include('common/footer.php') ?>
	  	