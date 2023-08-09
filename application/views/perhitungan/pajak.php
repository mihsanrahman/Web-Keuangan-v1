<div id="main-content">   
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Perhitungan PPh 21</h3>
            </div><div class="col-12 col-md-6 order-md-2"></div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                 <!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
  <!-- Latest compiled and minified CSS -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.1.0/lodash.min.js"></script>
  
  <script>
    angular.module('app', [])
      .controller('PajakController', ['$scope', '$filter', function($scope, $filter) {

        $scope.ptkp_list = [
          { name: 'TK, Lajang (tidak menikah)', value: 54000000 },
          { name: 'TK1, Lajang dengan 1 tanggungan', value: 58500000 },
          { name: 'TK2, Lajang dengan 2 tanggungan', value: 63000000 },
          { name: 'TK3, Lajang dengan 3 tanggungan', value: 67500000 },
          { name: 'K, Menikah tanpa tanggungan', value: 5850000 },
          { name: 'K1, Menikah dengan 1 tanggungan', value: 63000000 },
          { name: 'K2, Menikah dengan 2 tanggungan', value: 67500000 },
          { name: 'K3, Menikah dengan 3 tanggungan', value: 72000000 }
        ];

        $scope.npwp_list = {
          true: [
            { range: 50000000, value: 0.05 }, 
            { range: 200000000, value: 0.15 },
            { range: 250000000, value: 0.25 },
            { range: 100000000000, value: 0.30 }
          ],
          false: [
            { range: 50000000, value: 0.06 }, 
            { range: 200000000, value: 0.18 },
            { range: 250000000, value: 0.30 },
            { range: 100000000000, value: 0.36 }
          ]
        };
        
        $scope.npwp = false;
        $scope.ptkp = $scope.ptkp_list[0];

        $scope.gaji = 0;
        $scope.thr = 0;
        
        $scope.pph = [0, 0, 0, 0];

        $scope.gaji_per_tahun = function() {
          return ($scope.gaji)*12;
        }

        $scope.bruto = function() {
          return ($scope.gaji_per_tahun() + $scope.thr);
        }

        $scope.biaya_jabatan = function() {
          var percent = $scope.gaji_per_tahun() * 0.05;
          percent = ((percent > 6000000) ? 6000000 : percent);

          return percent;
        }

        $scope.netto = function() {
          return ($scope.bruto() - $scope.biaya_jabatan());
        }

        $scope.pkp = function() {
          var pkp = ($scope.netto() - $scope.ptkp.value);
          if (pkp < 0) pkp = 0;
          return pkp;
        }

        $scope.count_pph = function(i, amount, list) {
          if (i >= $scope.pph.length) return;

          var again = true;
          var temp = 0;
          
          if (amount < list[i].range) {
            temp = amount;
            again = false
          } else {
            temp = list[i].range;
          }

          $scope.pph[i] = temp * list[i].value;

          if (again) {
            $scope.count_pph(i + 1, amount - list[i].range, list);
          } else {
            $scope.count_pph(i + 1, 0, list);
          }
        }

        $scope.total_pph = function() {
          return _.reduce($scope.pph, function(sum, n) { return sum + n; });
        }

        $scope.total_pph_per_bulan = function() {
          return $scope.total_pph() / 12;
        }

        $scope.total_gaji = function() {
          return $scope.bruto() - $scope.total_pph();
        }

        $scope.total_gaji_per_bulan = function() {
          return $scope.total_gaji() / 12;
        }

        $scope.ratio = function() {
          var percent = ($scope.total_pph_per_bulan() / $scope.total_gaji_per_bulan()) * 100;

          if ($scope.total_gaji_per_bulan() <= 0) {
            percent = 0;
          } else {
            percent = $filter('number')(percent, 2);
          }

          return percent + ' %';
        }

        $scope.$watch('gaji', function() {
          $scope.count_pph(0, $scope.pkp(), $scope.npwp_list[$scope.npwp]);
        });

        $scope.$watch('thr', function() {
          $scope.count_pph(0, $scope.pkp(), $scope.npwp_list[$scope.npwp]);
        });

        $scope.$watch('npwp', function() {
          $scope.count_pph(0, $scope.pkp(), $scope.npwp_list[$scope.npwp]);
        });

        $scope.$watch('ptkp', function() {
          $scope.count_pph(0, $scope.pkp(), $scope.npwp_list[$scope.npwp]);
        });
      }]);
    $(function () {
      $('i').tooltip();
    })
  </script>

  

  <meta charset="UTF-8">
  <title>Perhitungan Pajak</title>
</head>
<body>
  
  
  <div class="container" ng-controller="PajakController">
    
      <form>
        <div class="col-sm-8">
          <div class="form-group">
            <label for="inputNPWP" class="control-label col-sm-4">NPWP
              <i class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" data-html=true data-container="body"
                title="
                <h5>Sesuai dengan Pasal 17 ayat 1 huruf a, UU Pajak Penghasilan.</h5>
                <br>
                sampai dengan 50 Juta = 5%
                <br>
                diatas Rp 50 juta sampai dengan Rp 250 juta = 15%
                <br>
                diatas Rp 250 juta sampai dengan Rp 500 juta = 25%
                <br>
                diatas Rp 500 juta = 30%
                <br>
                <br>
                <small>*) Bagi Wajib Pajak yang tidak memiliki NPWP dikenakan tarif 20 % lebih tinggi dari tarif PPh Pasal 17.</small>
                "></i>
            </label>
            <div class="col-sm-8">
              <div class="checkbox">
                <label><input type="checkbox" id="inputNPWP" ng-model="npwp"> Ada</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="form-group">
            <label for="inputNPWP" class="control-label col-sm-4">Status Tanggungan
              <i class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" data-html=true data-container="body"
                title="Peraturan Menteri Keuangan nomor: PMK-196/PMK.011/2012 tentang penyesuaian besarnya PTKP. Peraturan ini berlaku definitif mulai 1 Januari 2013."></i>
            </label>
            <div class="col-sm-8">
              <select class="form-control" ng-model="ptkp" ng-options="status.name for status in ptkp_list track by status.value">
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="form-group">
            <label for="inputGaji" class="control-label col-sm-4">Gaji/Bulan</label>
            <div class="col-sm-8">
              <div class="input-group">
                <div class="input-group-addon">Rp. &nbsp</div>
                <input type="number" class="form-control" id="inputGaji" placeholder="Gaji" ng-model="gaji">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="form-group">
            <label for="inputTHR" class="control-label col-sm-4">THR</label>
            <div class="col-sm-8">
              <div class="input-group">
                <div class="input-group-addon">Rp. &nbsp</div>
                <input type="number" class="form-control" id="inputTHR" placeholder="THR" ng-model="thr">
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>

        <hr>
        <div class="row">
       

              <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="card shadow">
      <div class="card-body">
              <div class="panel-heading">
                <strong>Kesimpulan</strong>
              </div>

              <div class="panel-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Pajak/Tahun:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{total_pph() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Gaji Setelah PPh/Tahun:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{total_gaji() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Gaji Setelah PPh/Bulan:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static label label-success">{{total_gaji_per_bulan() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Ratio (pajak : gaji) :</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{ratio()}}</p>
                  </div>
                </div>
              </div>

            </div>
          </div></div></div>
          
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="card shadow">
      <div class="card-body">
              <div class="panel-heading">
                <strong>Rincian</strong>
              </div>

              <div class="panel-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Gaji:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{gaji | currency:'':0}}</p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Gaji/Tahun:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{gaji_per_tahun() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">THR:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{thr | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tanggungan:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{ptkp.value | currency:'':0}}</p>
                  </div>
                </div>
              </div>
  
            </div>
          </div>

        </div></div></div>
          
        <hr>

        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="card shadow">
      <div class="card-body">
              <div class="panel-heading">
                <strong>Perhitungan</strong>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Bruto:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{bruto() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Biaya Jabatan:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{biaya_jabatan() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Netto:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{netto() | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">PTKP:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{ptkp.value | currency:'':0}}</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">PKP:</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{pkp() | currency:'':0}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div></div></div>

          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="card shadow">
      <div class="card-body">
              <div class="panel-heading">
                <strong>PPh Terhutang</strong>
              </div>

              <div class="panel-body">
                <div class="form-group" ng-repeat="value in pph track by $index">
                  <label for="inputEmail3" class="col-sm-4 control-label">{{$index + 1}}. ({{npwp_list[npwp][$index].value * 100}}%):</label>
                  <div class="col-sm-8">
                    <p class="form-control-static">{{value | currency:'':0}}</p>
                  </div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56492856-2', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>           
            </div>
        </div>

    </section>
</div>

