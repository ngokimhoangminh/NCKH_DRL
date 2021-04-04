// jQuery(function ($) {

//     $(".sidebar-dropdown > a").click(function() {
//   $(".sidebar-submenu").slideUp(200);
//   if (
//     $(this)
//       .parent()
//       .hasClass("active")
//   ) {
//     $(".sidebar-dropdown").removeClass("active");
//     $(this)
//       .parent()
//       .removeClass("active");
//   } else {
//     $(".sidebar-dropdown").removeClass("active");
//     $(this)
//       .next(".sidebar-submenu")
//       .slideDown(200);
//     $(this)
//       .parent()
//       .addClass("active");
//   }
// });

// $("#close-sidebar").click(function() {
//   $(".page-wrapper").removeClass("toggled");
// });
// $("#show-sidebar").click(function() {
//   $(".page-wrapper").addClass("toggled");
// }); 
// });
// $(document).ready(function(){
//   document.getElementById('txt_clb').onclick=function(){
//         var f= parseInt(document.getElementById("txt_chuyencan").html());
//         alert(f);
//         console.log(f);
        
//     }
  
// });
///hambuger
var menu=document.getElementById('hambuger_menu');
var btnhambuger=document.getElementById('button-event');
function show()
{
  btnhambuger.classList.toggle('change_btn');
  menu.classList.toggle("show_menu");
}
//auto update point 
//Muc I
function YThucThamGiaHocTap(){  
  var txt_dtb= parseInt(document.getElementById("txt_dtb").innerHTML);
  var txt_vuonlen= parseInt(document.getElementById("txt_vuonlen").value);
  var txt_quychethi= parseInt(document.getElementById("txt_quychethi").innerHTML);
  var txt_nckh= parseInt(document.getElementById("txt_nckh").innerHTML);
  var txt_clb= parseInt(document.getElementById("txt_clb").value);
  var txt_chuyencan= parseInt(document.getElementById("txt_chuyencan").innerHTML);

  var txt_rs_yttght=document.getElementById("txt_rs_yttght");


  txt_rs_yttght.innerHTML=txt_dtb+txt_vuonlen+txt_quychethi+txt_nckh+txt_clb+txt_chuyencan;

  Total();
}
//Muc IV
function YThucCongDan(){  
  var txt_ctcd= parseInt(document.getElementById("txt_ctcd").innerHTML);
  var txt_bhyt= parseInt(document.getElementById("txt_bhyt").innerHTML);
  var txt_vhgt= parseInt(document.getElementById("txt_vhgt").innerHTML);
  var txt_hdxh= parseInt(document.getElementById("txt_hdxh").value);
  var txt_gdnkk= parseInt(document.getElementById("txt_gdnkk").value);

  var txt_rs_ytcd=document.getElementById("txt_rs_ytcd");
  txt_rs_ytcd.innerHTML=txt_ctcd+txt_bhyt+txt_vhgt+txt_hdxh+txt_gdnkk;
  Total();
}
//Muc V
function ThamGiaCongTacLop(){  
  var txt_qll= parseInt(document.getElementById("txt_qll").value);
  var txt_tcd= parseInt(document.getElementById("txt_tcd").value);
  var txt_tghdl= parseInt(document.getElementById("txt_tghdl").value);
  var txt_dtt= parseInt(document.getElementById("txt_dtt").value);


  var txt_rs_tgctl=document.getElementById("txt_rs_tgctl");
  txt_rs_tgctl.innerHTML=txt_qll+txt_tcd+txt_tghdl+txt_dtt;
  Total();
}
function Total()
{

  var txt_rs_yttght=parseInt(document.getElementById("txt_rs_yttght").innerHTML);
  var txt_rs_chny=parseInt(document.getElementById("txt_rs_chny").innerHTML);
  var txt_rs_hdct=parseInt(document.getElementById("txt_rs_hdct").innerHTML);
  var txt_rs_ytcd=parseInt(document.getElementById("txt_rs_ytcd").innerHTML);
  var txt_rs_tgctl=parseInt(document.getElementById("txt_rs_tgctl").innerHTML);

  var txt_total=document.getElementById("txt_total");
  txt_total.innerHTML=txt_rs_yttght+txt_rs_chny+txt_rs_hdct+txt_rs_ytcd+txt_rs_tgctl;
}
//auto update point