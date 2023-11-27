<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="row top_tiles">
			<div class="animated flipInY col-lg-12 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-user"></i></div>
					<div class="count">kontak admin</div>
					<hr>
					<marquee>
						<h5 style="color: rgb(255, 0, 0);">Silahkan hubungi kontak person admin di bawah ini terimakasih</h5>
					</marquee>
					<h3></h3>
					<h3></h3>
				</div>
			</div>
		</div>

		<canvas id="myChart" width="130%" height="50%"></canvas>

	</div>
</div>
<!-- /page content -->

<script>
	// code pemanggilan diagram
	$(document).ready(function () {
		$.ajax({
			type: "get",
			url: "<?=base_url();?>c_admin/diagram",
			data: "data",
			dataType: "json",
			success: function (response) {
				diagram(response);

			}
		});
	})

	// funtion diagran
	function diagram(data) {
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ['Data User', 'Level Admin', 'Level Pelamar', ' Level Hrd'],
				datasets: [{
					label: '# of Votes',
					data: data,
					backgroundColor: [
						'rgba(255, 99, 132, 5.2)',
						'rgba(54, 162, 235, 5.2)',
						'rgba(255, 206, 86, 5.2)',
						'rgba(75, 192, 192, 5.2)',
						'rgba(153, 102, 255, 5.2)',
						'rgba(255, 159, 64, 5.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	}

</script>
