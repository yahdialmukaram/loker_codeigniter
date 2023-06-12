

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count">1</div>
                  <h3>Data Perusahaan</h3>
              
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">1</div>
                  <h3>Data Barang</h3>
              
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
              
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
              
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction Summary <small>Weekly progress</small></h2>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
                 

                    </div>

                  </div>
                </div>
              </div>
            </div> -->

            <canvas id="myChart" width="130%" height="50%" ></canvas>

          </div>
        </div>
        <!-- /page content -->

        <script>
          

  // code pemanggilan diagram
  $(document).ready(function(){
    $.ajax({
      type: "get",
      url: "<?=base_url();?>controller/diagram",
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
        labels: ['Data Pengguna Account', 'Data Barang'],
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
