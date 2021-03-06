<?php include('common/header.php') ?>
<main>

        <div id="crumbs" class="wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
            <ul>
                <li><a href="index.html" class="breadcrumb">Trang chủ</a></li>
                <li><a href="#" class="breadcrumb">Chấm điểm rèn luyện</a></li>

            </ul>
        </div>
        <div class="page-body bs-danger">
            <div class="evaluate mt-2">
                <div class="evaluate__student-info d-flex">
                    <p class="ml-0 wow animate__fadeInUp" data-wow-duration="2s" ><i class="fas fa-male mr-2"></i>Ngô Kim Hoàng Minh</p>
                    <p class="wow animate__fadeInUp" data-wow-duration="2s"><i class="fas fa-address-card mr-2" ></i>Lớp 18T1</p>
                    <p class="wow animate__fadeInUp" data-wow-duration="2s"><i class="fas fa-barcode mr-2"></i>1811505310131</p>
                    <p class=" wow animate__fadeInUp" data-wow-duration="2s"><i class="fas fa-certificate mr-2"></i>Điểm TK Học Phần:3.4</p>
                </div>
                <div class="evalue__student--drl mt-1 d-flex align-items-center wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
                    <p><i class="fas fa-certificate mr-2"></i>Điểm rèn luyện:</p>
                    <p id="txt_drl" class="ml-1"></p>
                </div>
                <!--evaluate-->
                <div class="evaluate__student-point p-2">
                    <div class="evaluate__student-point-sum wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;"  id="point_sum">
                        <table class=" table-bordered">
                            <tr class="font-weight-bold" style="background: floralwhite">
                                <td rowspan="2" class="text-danger" style="padding-top: 22px;">Tổng điểm</td>
                                <td class="align-middle">Điểm tối đa</td>
                                <td class="align-middle">Sinh viên đánh giá</td>
                            </tr>
                            <tr class="text-danger fw-bold">
                                
                                <td class="text-center">100</td>
                                <td class="text-center">
                                    <p id="txt_total"></p>
                                </td class="text-center">
                            </tr>
                        </table>
                    </div>
                    <div class="tabbed round mt-3 d-flex justify-content-center wow animate__fadeInUp" data-wow-duration="2s" style="visibility: visible;">
                        <ul class="nav nav-tabs">
                            <li class="tabitem active" onclick="openCity(event,'v-pilss-mucI')"><a data-toggle="tab">Mục I <p id="total_mucI" class="text-center"></p></a></li>
                            <div class="arrow"></div>
                            <li class="tabitem " onclick="openCity(event,'v-pilss-mucII')"><a data-toggle="tab" >Mục II <p id="total_mucII" class="text-center"></p></a></li>
                            <div class="arrow"></div>
                            <li class="tabitem " onclick="openCity(event,'v-pilss-mucIII')"><a data-toggle="tab" >Mục III<p id="total_mucIII" class="text-center"></p></a></li>
                            <div class="arrow"></div>
                            <li class="tabitem " onclick="openCity(event,'v-pilss-mucIV')"><a data-toggle="tab">Mục IV<p id="total_mucIV" class="text-center"></p></a></li>
                            <div class="arrow"></div>
                            <li class="tabitem mr-0 " onclick="openCity(event,'v-pilss-mucV')"><a data-toggle="tab">Mục V<p id="total_mucV" class="text-center"></p></a></li>
                        </ul>
                    </div>  
                    <div class="tab-content">
                        <div id="v-pilss-mucI" class="tabcontent w3-animate-left fade in active show">
                            <div class="table-lg-responsive">
                                <table class="table table-bordered border-primary d-table">
                                    <thead class="text-center fw-bold">
                                        <tr>
                                            <th scope="col" class="align-middle">STT</th>
                                            <th scope="col" class="align-middle pl-4 pr-4">Nội dung đánh giá</th>
                                            <th scope="col" class="align-middle">Điểm tối đa</th>
                                            <th scope="col" class="align-middle">Sinh viên tự đánh giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-danger font-weight-bold">
                                            <th scope="row">I</th>
                                            <td>ĐÁNH GIÁ VỀ Ý THỨC THAM GIA HỌC TẬP (20 ĐIỂM)</td>
                                            <td>20</td>
                                            <td>
                                                <p class="txt_rs_yttght"></p>
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row">1</th>
                                            <td>Có đi học chuyên cần, đúng giờ, nghiêm túc trong giờ học; đủ
                                                điều kiện dự thi
                                                tất cả các học phần (4 điểm)</td>
                                            <td>4</td>
                                            <td>
                                                <p class="txt_chuyencan">2</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="border-bottom-0 pb-0"
                                                style="vertical-align: bottom;">2</th>
                                            <td class="border-bottom-0 pb-0">Có ý thức tham gia các câu lạc bộ
                                                học thuật, các hoạt động học thuật, hoạt động
                                                ngoại khoá (2 điểm)
                                            </td>
                                            <td class="border-bottom-0">
                                                2
                                            </td>
                                            <td class="border-bottom-0 ">
                                                <input type="number" min="0" max="2" name=""
                                                    onclick="YThucThamGiaHocTap()" class="txt_clb" value="2">
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-top-0"></th>
                                            <td class="border-top-0 pt-0">
                                                Có đăng ký, thực hiện, báo cáo đề tài NCKH đúng tiến độ hoặc có
                                                đăng ký,
                                                tham dự kỳ thi sinh viên giỏi các cấp (2 điểm)
                                            </td>
                                            <td class="border-top-0 pt-0">
                                                2
                                            </td>
                                            <td class="border-top-0 pt-0">
                                                <p class="txt_nckh">2</p>
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row">3</th>
                                            <td>Không vi phạm quy chế thi và kiểm tra (6 điểm)</td>
                                            <td>6</td>
                                            <td>
                                                <p class="txt_quychethi">6</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Được tập thể lớp công nhận có tinh thần vượt khó, phấn đấu vươn
                                                lên trong học
                                                tập (2 điểm)</td>
                                            <td>2</td>
                                            <td>
                                                <input type="number" min="0" max="2" name="" class="txt_vuonlen"
                                                    value="2" onclick="YThucThamGiaHocTap()">
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row">5</th>
                                            <td>ĐTBCHK từ 3,2 đến 4,0 (4 điểm) <br>
                                                ĐTBCHK từ 2,0 đến 3,19 (2 điểm) <br>
                                                ĐTBCHK dưới 2,0 (0 điểm)</td>
                                            <td>4</td>
                                            <td>
                                                <p class="txt_dtb">4</p>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="v-pilss-mucII" class="tabcontent w3-animate-left">
                            <div class="table-lg-responsive">
                                <table class="table table-bordered border-primary d-table">
                                    <thead class="text-center fw-bold">
                                        <tr>
                                            <th scope="col" class="align-middle">STT</th>
                                            <th scope="col" class="align-middle pl-4 pr-4">Nội dung đánh giá</th>
                                            <th scope="col" class="align-middle">Điểm tối đa</th>
                                            <th scope="col" class="align-middle">Sinh viên tự đánh giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-danger font-weight-bold">
                                            <th scope="row">II</th>
                                            <td>ĐÁNH GIÁ VỀ Ý THỨC CHẤP HÀNH NỘI QUY, QUY CHẾ TRONG NHÀ TRƯỜNG
                                                (25 điểm)</td>
                                            <td>25</td>
                                            <td>
                                                <p class="txt_rs_chny"></p>
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row">6</th>
                                            <td>Có ý thức chấp hành các văn bản chỉ đạo của ngành, cấp trên và
                                                ĐHĐN
                                                được thực hiện trong nhà trường (6 điểm)</td>
                                            <td>6</td>
                                            <td><p class="txt_vbcd">3</p></td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row">7</th>
                                            <td>Có ý thức tham gia đầy đủ, đạt yêu cầu các cuộc vận động, sinh
                                                hoạt chính trị
                                                theo chủ trương, của cấp trên, ĐHĐN và nhà trường (4 điểm)</td>
                                            <td>4</td>
                                            <td><p class="txt_vd">4</p></td>
                                        </tr>
                                        <!--8-->
                                        <tr class="text-muted">
                                            <th scope="row" style="vertical-align: bottom;"
                                                class="border-bottom-0 pb-0">8</th>
                                            <td class="border-bottom-0 pb-0">Có ý thức chấp hành nội quy, quy
                                                chế và các quy định của nhà trường (10 điểm)
                                            </td>
                                            <td class="border-bottom-0">10</td>
                                            <td class="border-bottom-0"><p class="txt_noiquy">6</p> </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-top-0"></th>
                                            <td class="border-top-0 pt-0">
                                                Đóng học phí và các khoản thu khác đầy đủ, đúng hạn (5 điểm)
                                            </td>
                                            <td class="border-top-0 pt-0">5</td>
                                            <td class="border-top-0 pt-0"><p class="txt_hocphi">5</p></td>
                                        </tr>
                                        <!--8-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="v-pilss-mucIII"  class="tabcontent w3-animate-left">
                            <div class="table-lg-responsive">
                                <table class="table table-bordered border-primary ">
                                    <thead class="text-center fw-bold">
                                        <tr>
                                            <th scope="col" class="align-middle">STT</th>
                                            <th scope="col" class="align-middle pl-4 pr-4">Nội dung đánh giá</th>
                                            <th scope="col" class="align-middle">Điểm tối đa</th>
                                            <th scope="col" class="align-middle">Sinh viên tự đánh giá</th>
                                            <th scope="col" class="align-middle">Minh chứng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-danger font-weight-bold">
                                            <th scope="row">III</th>
                                            <td>ĐÁNH GIÁ VỀ Ý THỨC THAM GIA CÁC HOẠT ĐỘNG CHÍNH TRỊ- XÃ HỘI,
                                                VHVN, TDTT,
                                                PHÒNG CHỐNG TÔI PHẠM VÀ CÁC TỆ NẠN XÃ HỘI (20 điểm)</td>
                                            <td>20</td>
                                            <td>
                                                <p class="txt_rs_hdct"></p>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-bottom-0 pb-0"
                                                style="vertical-align: bottom;">9</th>
                                            <td class="border-bottom-0 pb-0">Tham gia đầy đủ, đạt yêu cầu “Tuần
                                                sinh hoạt công dân sinh viên” đầu khóa,
                                                năm học và cuối khóa (10 điểm)
                                            </td>
                                            <td class="border-bottom-0">10</td>
                                            <td class="border-bottom-0"><p class="txt_shcd">10</p></td>
                                            <td class="border-bottom-0">
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-top-0"></th>
                                            <td class="border-top-0 pt-0">
                                                Có ý thức tham gia đầy đủ, nghiêm túc hoạt động rèn luyện về
                                                chính trị, xã hội,
                                                văn hóa, văn nghệ, thể thao do nhà trường và ĐHĐN tổ chức, điều
                                                động (6 điểm)
                                            </td>
                                            <td class="border-top-0 pt-0">6</td>
                                            <td class="border-top-0 pt-0">
                                                <input type="number" min="0" max="6" name="" value="4" class="txt_rlct" onclick="YThucThamGiaHoatDongChinhTri()">
                                            </td>
                                            <td class="border-top-0 pt-0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>Có ý thức tham gia các hoạt động công ích, tình nguyện, công tác
                                                xã hội trong
                                                nhà trường (2 điểm)</td>
                                            <td>2</td>
                                            <td>
                                                <input type="number" min="0" max="2" name="" value="2" class="txt_hdci" onclick="YThucThamGiaHoatDongChinhTri()">
                                            </td>
                                            <td>
                                                <form enctype="multipart/form-data" method="POST">
                                                    <input type="file" name="myfile" />
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>Có ý thức tham gia tuyên truyền, phòng chống tội phạm và các tệ
                                                nạn xã hội (2
                                                điểm)</td>
                                            <td>2</td>
                                            <td>
                                                <input type="number" min="0" max="2" name="" value="2" class="txt_tnxh" onclick="YThucThamGiaHoatDongChinhTri()">
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="v-pilss-mucIV" class="tabcontent w3-animate-left  ">
                            <div class="table-lg-responsive">
                                <table class="table table-bordered border-primary ">
                                    <thead class="text-center fw-bold">
                                        <tr>
                                            <th scope="col" class="align-middle">STT</th>
                                            <th scope="col" class="align-middle pl-4 pr-4">Nội dung đánh giá</th>
                                            <th scope="col" class="align-middle">Điểm tối đa</th>
                                            <th scope="col" class="align-middle">Sinh viên tự đánh giá</th>
                                            <th scope="col" class="align-middle">Minh chứng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-danger font-weight-bold">
                                            <th scope="row">IV</th>
                                            <td>ĐÁNH GIÁ VỀ Ý THỨC CÔNG DÂN TRONG QUAN HỆ VỚI CỘNG ĐỒNG (25
                                                điểm)</td>
                                            <td>25</td>
                                            <td>
                                                <p class="txt_rs_ytcd"></p>
                                            </td>
                                            <td></td>
                                        </tr>

                                        <!--12-->
                                        <tr class="text-muted">
                                            <th scope="row" class="border-bottom-0"></th>
                                            <td class="border-bottom-0 pb-0">Có ý thức chấp hành, tham gia tuyên
                                                truyền các chủ trương của Đảng, chính
                                                sách, pháp luật của Nhà nước (4 điểm) </td>
                                            <td class="border-bottom-0">4</td>
                                            <td class="border-bottom-0"><p class="txt_ctcd">4</p>
                                            </td>
                                            <td class="border-bottom-0"></td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-top-0 border-bottom-0 pt-0 pb-0">12
                                            </th>
                                            <td class="border-top-0 border-bottom-0 pt-0 pb-0">
                                                Có tham gia bảo hiểm y tế (bắt buộc) theo Luật bảo hiểm y tế (10
                                                điểm) </td>
                                            <td class="border-top-0 border-bottom-0 pt-0 pb-0">10</td>
                                            <td class="border-top-0 border-bottom-0 pt-0 pb-0">
                                                <p class="txt_bhyt">5</p></td>
                                            <td class="border-top-0 border-bottom-0 pt-0 pb-0">
                                            </td>
                                        </tr>
                                        <tr class="text-muted">
                                            <th scope="row" class="border-top-0 "></th>
                                            <td class="border-top-0 ">
                                                Có ý thức chấp hành, tham gia tuyên truyền các quy định về bảo
                                                đảm an toàn
                                                giao thông và “văn hóa giao thông”(5 điểm)</td>
                                            <td class="border-top-0 ">5</td>
                                            <td class="border-top-0 ">
                                                <p class="txt_vhgt">5</p></td>
                                            <td class="border-top-0 "></td>
                                        </tr>
                                        <!--12-->


                                        <tr>
                                            <th scope="row">13</th>
                                            <td>Có ý thức tham gia các hoạt động xã hội có thành tích được ghi
                                                nhận, biểu
                                                dương, khen thưởng (4 điểm)</td>
                                            <td>4</td>
                                            <td><input type="number" min="0" max="4" name="" value="4"
                                                    class="txt_hdxh" onclick="YThucCongDan()"></td>
                                            <td>
                                                <form enctype="multipart/form-data" method="POST">
                                                    <input type="file" name="myfile" />
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">14</th>
                                            <td>Có tinh thần chia sẻ, giúp đỡ người gặp khó khăn, hoạn nạn (2
                                                điểm)</td>
                                            <td>2</td>
                                            <td><input type="number" min="0" max="2" name="" value="2"
                                                    class="txt_gdnkk" onclick="YThucCongDan()"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="v-pilss-mucV" class="tabcontent w3-animate-left">
                            <div class="table-lg-responsive">
                                <table class="table table-bordered border-primary ">
                                    <thead class="text-center fw-bold">
                                        <tr>
                                            <th scope="col" class="align-middle">STT</th>
                                            <th scope="col" class="align-middle pl-4 pr-4">Nội dung đánh giá</th>
                                            <th scope="col" class="align-middle">Điểm tối đa</th>
                                            <th scope="col" class="align-middle">Sinh viên tự đánh giá</th>
                                            <th scope="col" class="align-middle">Minh chứng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-danger font-weight-bold">
                                            <th scope="row">V</th>
                                            <td>ĐÁNH GIÁ VỀ Ý THỨC VÀ KẾT QUẢ KHI THAM GIA CÔNG TÁC CÁN BỘ LỚP,
                                                CÁC
                                                ĐOÀN THỂ, TỔ CHỨC TRONG NHÀ TRƯỜNG HOẶC SINH VIÊN ĐẠT ĐƯỢC THÀNH
                                                TÍCH
                                                TRONG HỌC TẬP, RÈN LUYỆN (10 điểm)</td>
                                            <td>10</td>
                                            <td>
                                                <p class="txt_rs_tgctl"></p>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">15</th>
                                            <td>Có ý thức, uy tín và hoàn thành tốt nhiệm vụ quản lý lớp, các tổ
                                                chức Đảng,
                                                Đoàn Thanh niên, Hội Sinh viên, tổ chức khác trong nhà trường (3
                                                điểm)</td>
                                            <td>3</td>
                                            <td><input type="number" min="0" max="3" name="" value="3"
                                                    class="txt_qll" onclick="ThamGiaCongTacLop()"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">16</th>
                                            <td>Có kỹ năng tổ chức, quản lý lớp, các tổ chức Đảng, Đoàn Thanh
                                                niên, Hội Sinh
                                                viên và các tổ chức khác trong nhà trường (2 điểm)</td>
                                            <td>2</td>
                                            <td><input type="number" min="0" max="2" name="" value="2"
                                                    class="txt_tcd" onclick="ThamGiaCongTacLop()"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">17</th>
                                            <td>Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập
                                                thể, khoa,
                                                trường và Đại học Đà Nẵng (3 điểm)</td>
                                            <td>3</td>
                                            <td><input type="number" min="0" max="3" name="" value="3"
                                                    class="txt_tghdl" onclick="ThamGiaCongTacLop()"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">18</th>
                                            <td>Đạt thành tích trong học tập, rèn luyện (được tặng bằng khen,
                                                giấy khen, chứng
                                                nhận, thư khen của các cấp) (2 điểm)</td>
                                            <td>2</td>
                                            <td><input type="number" min="0" max="2" name="" value="2"
                                                    class="txt_dtt" onclick="ThamGiaCongTacLop()"></td>
                                            <td>
                                                <form enctype="multipart/form-data" method="POST">
                                                    <input type="file" name="myfile" />
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--evaluate-->
            </div>
        </div>
</main>
<?php include('common/footer.php') ?>
