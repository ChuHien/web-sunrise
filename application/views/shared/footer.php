	</div>
	<div class="container-fluid bg-inverse">
		<footer class="container" id="footer">
			<div class="row">
				<div class="col-md-4">
					<h3>Thông tin liên lạc</h3>
					<ul style="padding-left: 15px;">
						<li>Trụ sở chính: 14 ngách 19, ngõ Trại Găng, Bạch Mai, HBT, HN</li>
                        <li>Điện thoại: 0985020034</li>
                        <li>Email: chuhien4220na@gmail.com</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h3>Giới thiệu</h3>
					<ul style="padding-left: 15px;">
						<li><a href="#">Thông tin về Sunrise Store</a></li>
						<li><a href="#">Mục tiêu</a></li>
						
						<li><a href="#">Cam kết</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h3>Hỗ trợ</h3>
					<ul style="padding-left: 15px;">
						<li>Gọi mua hàng: 7:30 - 22:00</li>
                        <li>Gọi khiếu nại: 8:00 - 21:30</li>
                        <li>Gọi bảo hành: 8:00 - 21:00</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row text-center" style="font-size:12px; padding-top:10px">
                <p>Copyright &copy; 2020-2021. Đại học Bách Khoa Hà Nội</p>
            </div>
		</footer>
	</div>
	<!-- Bootstrap -->
	<script type="text/javascript" src="public/assets/js/bootstrap.min.js"></script>
	<!-- Datepicker -->
	<script type="text/javascript" src="public/assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="public/assets/js/bootstrap-datepicker.vi.js"></script>
	<!-- Validate -->
	<script type="text/javascript" src="public/assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="public/assets/js/messages_vi.js"></script>
	<script type="text/javascript">
      $(document).ready(function(){
        $("#form1").validate({

          rules: {
          cpassword1: {
            equalTo: "#txtPassword1"
          }
        }
        });
        $("#form2").validate();
      });
    </script>
	<script>
  		$(document).ready(function(){
    		$.fn.datepicker.defaults.language = 'vi';
  		});
	</script>
	<script type="text/javascript">
  		$(document).ready(function(){
    		var date_input=$('input[id="txtDate"]');
    		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    		date_input.datepicker({
      			format: 'dd/mm/yyyy',
      			container: container,
      			todayHighlight: true,
      			autoclose: true,
    		})
  		})
	</script>
	<!-- Responsive Menu -->
</body>
</html>