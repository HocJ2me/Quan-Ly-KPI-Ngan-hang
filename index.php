<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>TRA CỨU | THÔNG TIN TIẾP NHẬN KHÁCH HÀNG CỦA NHÂN VIÊN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

       <header class="main-header clearfix" data-sticky_header="true">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-4 col-sm-8">

                            <p>Chào mừng đến trang web quản lý. </p>

                        </div>

                            <div class="col-md-4 col-sm-4">
                                    <center>
                            <p><a href="need-blood"><blink>Ngân hàng thương mại và công nghệ TruongBank</blink></a></p>
                                </center>
                        </div>
                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="https://www.facebook.com/Kidlove.10"><i class="fa fa-facebook"></i></a>
                                <a href="truong.tc193162@sis.hust.edu.vn" target="_top"><i class="fa fa-envelope "></i></a>
                               
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">         
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>                              
                            <a class="logo" href="#"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop">
                                   <li class="drop"><a href="index" title="Home Layout 01">Trang chủ</a></li>
                                <li><a href="#" title="About Spc">TruongBank</a></li>
                                <li><a href="#" title="About Us">About Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->

        

        <!-- TEAM SECTION -->

        <section class="section-content-block section-our-team">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"> Tìm kiếm khác hàng nhân viên đã tiếp nhận?</h2>
                    </div> <!-- end .col-sm-10  -->                      

                </div>
				
				
               <center>
                 <form class="appoinment-form"  action="index.php" method="get" >
				 <table>
					<tr>
						<td>Chi nhánh:</td>
						<td>
							<select name="chinhanh" id="chinhanh >
								<option value="*">*Chi nhánh</option>
								<option value="D1">Hai Bà Trưng</option>
								<option value="D2">Long Biên</option>
								<option value="D3">Bách Khoa</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>ID nhân viên: </td>
						<td>
							<input type="text" name="idnv" value="" id ="idnv">
						</td>
					</tr>
					<tr>
						<td>Tên nhân viên: </td>
						<td>
							<input type="text" name="tennv" value="" id="tennv">
						</td>
					</tr>

				</table>
		
				<table>
					<tr>
						<td>Khảo sát từ: <input type="date" name="date1"><br><br></td>
						<td> Đến: <input type="date" name="date2"><br><br></td>
					</tr>
				</table>
      
				<div class="form-group col-md-12 col-md-1">
					<button  class="btn-submit" type="submit" name="ok" value="search"> Search </button>
				</div>

				</form>
				

				<br>
				<?php
					echo "<br/>";
					echo "<br/>";
					echo "<br/>";
					echo "<br/>";
					if (isset($_REQUEST['ok'])) {
						$tennv = addslashes($_GET['tennv']);
						$idnv = addslashes($_GET['idnv']);
						$chinhanh = addslashes($_GET['chinhanh']);
						$ngaybatdau = addslashes($_GET['date1']);
						$ngayketthuc = addslashes($_GET['date2']);
						$KPI = 0;
						
						if (empty($tennv) and empty($idnv)) {
							echo "<h3>Vui lòng nhập chính xác: Tên chi nhánh, Tên nhân viên, ID nhân viên </h3>";
						} 
						else {// Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
								/*
								$query = "	select nhanvien.KPI, nhanvien.tennv, khachhang.tenkh,chinhanh.tencn, tiepnhan.ngaytiepnhan from nhanvien,khachhang,chinhanh,tiepnhan 
								WHERE ( tiepnhan.idnhanvien LIKE '".$idnv."') AND (tiepnhan.idchinhanh LIKE '".$chinhanh."' ) AND ( tiepnhan.ngaytiepnhan BETWEEN  '".$ngaybatdau."' AND '".$ngayketthuc."' )
								group by tiepnhan.id order by count(*) desc limit 1;";
								*/
								// Tìm kiếm danh sách khách hàng theo id nhân viên và id chi nhánh
								$query = "select nhanvien.KPI, tiepnhan.id, nhanvien.tennv, khachhang.tenkh,chinhanh.tencn, tiepnhan.ngaytiepnhan 
										from 
											nhanvien,khachhang,chinhanh,tiepnhan 
										WHERE 
											( tiepnhan.idnhanvien LIKE '".$idnv."') 
										AND 
											(tiepnhan.idchinhanh LIKE '".$chinhanh."' ) 
										AND 
											(nhanvien.manv = tiepnhan.idnhanvien)
										AND 
											(khachhang.makh = tiepnhan.idkhachhang)
										AND 
											(chinhanh.MaCN = tiepnhan.idchinhanh) 
										AND 
											( tiepnhan.ngaytiepnhan BETWEEN  '".$ngaybatdau."' AND '".$ngayketthuc."' );";
											
								// Hiển thị câu lệnh query để debug
								//echo $query;
								// Kết nối sql
								$conn = mysqli_connect("localhost", "root", "", "qlnganhang");
				 
								// Thực thi câu truy vấn
								$sql = mysqli_query($conn, $query);
				 
								// Đếm số đong trả về trong sql.
								$num = mysqli_num_rows($sql);
				 
								if ($num > 0) 
								{
									// hiển thị danh sách khách hàng
									echo "<h3>Số lượng khách hàng đã tiếp nhận:  ".$num."</h3><br>";
									// Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
									// Dùng $num để đếm số dòng trả về.
				 
									// Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
									echo '<table border="1" cellspacing="1" cellpadding="30" class="">';
									echo "<tr><td>Tên nhân viên</td><td>Tên khách hàng</td><td>Tên chi nhánh</td><td>Thời gian làm việc</td>";
									while ($row = mysqli_fetch_assoc($sql)) {
										echo '<tr>';
											//echo "<td>{$row['manv']}</td>";
											echo "<td>{$row["tennv"]}</td>";
											echo "<td>{$row["tenkh"]}</td>";
											echo "<td>{$row["tencn"]}</td>";
											echo "<td>{$row["ngaytiepnhan"]}</td>";
										echo '</tr>';
										$KPI = $row["KPI"];
									}
									echo '</table><br><br>';
									echo "<h3>KPI:  ".$KPI." Khách hàng, ";
									if($num < $KPI) echo "chưa đạt KPI, còn thiếu " .($KPI - $num). " Khách hàng!";
									if($num == $KPI) echo "Đã đạt KPI!";
									if($num > $KPI) echo "Vượt đạt KPI, nhiều hơn KPI ".($num - $KPI). " Khách hàng!";
									
								} 
								else {
									echo "<h3>Không tìm thấy kết quả!</h3>";
								}
								
						}
					}
				?>
				</center>
                               
        <div class="col-md-12 col-sm-12 text-center" id="count"> </div>


            <div id="tableview" class="col-md-12 col-sm-12 text-center" ></div>

            </div> <!-- end .container  -->

        </section> <!--  end .section-our-team -->  



      
     <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <img src="images/logo.png" alt="" />
                                    </div> <!--  end col-lg-3-->

                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <p>
                                            Cảm ơn thầy đã hỗ trợ em trong việc thực hiện đồ án 1 này.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->

                                </div> <!--  end .row -->

                            </div> <!--  end .about-footer  -->

                        </div> <!--  end .col-md-12  -->

                    </div> <!--  end .row  -->

                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Powered by</h3>
                                    </div>
                                    <p></p>
                                    <div class="footer-subscription">
                                      <li><a href=""><img src="images/ikthss.jpg" height="45%" width="45%"></a></li>
                                       
                                    </div>
                                </div>
                            </div>

                        </div> <!--  end .col-md-4 col-sm-12 -->                                              

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <div class="textwidget">                                       

                                       <i class="fa fa-envelope-o fa-contact"></i> <p><a href="mail:truong.tc193162@sis.hust.edu.vn">truong.tc193162@sis.hust.edu.vn</a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Kĩ thuật phần mềm ứng dụng<br/>Giảng viên hướng dẫn<br> abc</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Phone:&nbsp;  0000000                          

                                    </div>

                                </div> <!-- end .footer-widget-wrapper  -->

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .col-md-4 col-sm-12 -->   

                        <div class="col-md-4 col-sm-12 col-xs-12">

                            <div class="footer-widget clearfix">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Support Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 


                                    <ul class="footer-useful-links">

                                        <li>
                                            <a href="https://set.hust.edu.vn/">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                VIỆN ĐIỆN TỬ - VIỄN THÔNG
                                            </a>
                                        </li>
                                                                            

                                    </ul>

                                </div> <!--  end .footer-widget  -->        

                            </div> <!--  end .footer-widget  -->            

                        </div> <!--  end .col-md-4 col-sm-12 -->    

                    </div> <!-- end row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">
                             <center>
                        <div >
                           
                            <p > Copyright © TruongBank <?php echo date('Y');?>. All rights reserved - By <a href='https://techzia.in'>Techzia </a> </p>

                        </div>  <!-- end .col-sm-6  -->
                        </center>
                      
                        </div> <!--  end .col-lg-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->


        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>
         <script src="js/ajax.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js "></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>
            <script src="js/ajax.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 
   

    </body>

</html>