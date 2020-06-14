<?php
/* @var $this yii\web\View */
?>


                            <div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">整体经济走势</h2>
										<p class="panel-subtitle">横坐标间隔为10天，时间区间为2月1日到6月10日；</p>
										<p> 纵坐标为对应时间点上两只股票的价格,鼠标移动到具体折线点可以查看详细信息</p>
										<p>注：数据来源为东方财富网</p>
									</header>
									<div class="panel-body">

						               <!-- 注：数据来源为东方财富网 -->
										<!-- Flot: Basic -->
										<div class="chart chart-md" id="flotBasic"></div>
										<script type="text/javascript">

					                 	
											var flotBasicData = [{
												data: [
													[1, 3688.36],
													[2, 3916.01],
													[3, 4144.66],
													[4, 4069.67],
													[5, 4082.73],
													[6, 3653.22],
													[7, 3686.16],
													[8, 3769.18],
													[9, 3853.46],
													[10, 3912.58],
													[11, 3960.18],
													[12, 3935.22],
													[13, 3971.34],
													[14, 4039.71]
												],
												label: "沪深300指数",
												color: "#0088cc"
											}, {
												data: [
													[1, 2746.61],
													[2, 2890.49],
													[3, 3030.15],
													[4, 2970.93],
													[5, 2996.76],
													[6, 2745.62],
													[7, 2734.52],
													[8, 2796.63],
													[9, 2852.55],
													[10, 2860.08],
													[11, 2894.80],
													[12, 2883.74],
													[13, 2915.43],
													[14, 2943.75]
												],
												label: "上证指数",
												color: "#2baab1"
											}];
						
											// See: statics/assets/javascripts/ui-elements/examples.charts.js for more settings.
						
										</script>
						
									</div>
								</section>
							</div>



        <script src="statics/assets/vendor/jquery/jquery.js"></script>
		<script src="statics/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="statics/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="statics/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="statics/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="statics/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="statics/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="statics/assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="statics/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="statics/assets/vendor/flot/jquery.flot.js"></script>
		<script src="statics/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="statics/assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="statics/assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="statics/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="statics/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="statics/assets/vendor/raphael/raphael.js"></script>
		<script src="statics/assets/vendor/morris/morris.js"></script>
		<script src="statics/assets/vendor/gauge/gauge.js"></script>
		<script src="statics/assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="statics/assets/vendor/liquid-meter/liquid.meter.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="statics/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="statics/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="statics/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="statics/assets/javascripts/ui-elements/examples.charts.js"></script>
