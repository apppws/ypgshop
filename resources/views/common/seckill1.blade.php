<!-- 秒杀 -->
					<h3 class="seckill-head"><i class="glyphicon glyphicon-time"></i> 秒杀促销
						<div>距离结束 <kbd id="time_d">0</kbd> 天 <kbd id="time_h">0</kbd> : <kbd id="time_m">0</kbd> : <kbd id="time_s">0</kbd></div>
					</h3>
					<div class="seckill">
						<div class="row">
							<div class="col-xs-2">促销时间：</div>
							<div class="col-xs-10">2010-10-10 10:10:10 ~ 2010-10-10 10:10:10</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-2">促销价格：</div>
							<div class="col-xs-10"><span>￥<strong class="gprice">324</strong></span></div>
						</div>
					</div>
					<script>
					(function(){
						var maxtime = 12543332;
						var time_d = document.getElementById('time_d');
						var time_h = document.getElementById('time_h');
						var time_m = document.getElementById('time_m');
						var time_s = document.getElementById('time_s');
						var si = setInterval(function(){
							if (maxtime >= 0) {
								time_d.innerHTML = Math.floor(maxtime/60/60/24);  
					           	time_h.innerHTML = Math.floor(maxtime/60/60%24);  
					           	time_m.innerHTML = Math.floor(maxtime/60%60);  
					           	time_s.innerHTML = Math.floor(maxtime%60); 
					               --maxtime;
					           } else{
					               clearInterval(si);
					           }
						}, 1000);
					})();
					</script>
					<!-- 秒杀结束 -->