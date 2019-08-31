<aside id="aside" class="col-md-12" ng-app="face-recognizer">
  <div class="container" ng-controller="recognize">
    <h2 class="text-center text-recog">Emotion Recognition</h2>
      <div class="row">
        <div class="col-md-6">
            <div id="my_camera"></div>
            <a class="btn btn-md btn-primary btn-recog btn-get-emotion-mtcnn" ng-click="getImageMTCNN()">Get Emotions MTCNN</a>
            <a class="btn btn-md btn-primary btn-recog btn-get-emotion-aws" ng-click="getImageAWS()">Get Emotions AWS Rekognition</a>
        </div>
        <div class="col-md-6 result-div hidden">
          <button 
            style       = "margin-bottom: -45px"
            class       = "btn btn-sm btn-success btn-show-image hidden"
            data-toggle = "modal"
            data-target = ".modal-result"
            >Show Image Result</i>
          </button>
          <table id="table-recognize" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Expression</th>
                <th>Confidence</th>
              </tr>
            </thead>
            <tbody>
            <tr ng-repeat="value in hasil">
              <td>{{ $index + 1 }}</td>
              <td>{{ value.Type }}</td>
              <td>{{ value.Confidence | number : 2 }} %</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</aside>

<!-- MODAL -->
<div tabindex="-1" role="dialog" class="modal fade modal-result">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">RESULT IMAGE</h4>
      </div>
      <div class="modal-body">
        <div id="container-img"></div>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -->

<script>
  var FaceRecognizer = angular.module('face-recognizer', []);
  
  Webcam.set({ width: 500, height: 400, image_format: 'jpeg', jpeg_quality: 90 });
  Webcam.attach('#my_camera');

  FaceRecognizer.controller('recognize', function($scope, $http, $timeout){
     $scope.getImageMTCNN = function(){
      $('.btn-get-emotion-mtcnn').html('Loading <i class="fa fa-spin fa-refresh"></i>');
      $('.btn-show-image').addClass('hidden');
      
      Webcam.snap(function(data_uri){
        $('.result-div').addClass('hidden');
        if ($.fn.DataTable.isDataTable("#table-recognize"))
        $('#table-recognize').DataTable().destroy();
        
        var data = { encoded_img: data_uri.replace('data:image/jpeg;base64,', '') };
        
        $http.post(base_url('landing/get_recognize_mtcnn'), JSON.stringify(data)).then(function(response){
          console.log(response.data);
          $scope.hasil = response.data[0];
          $scope.gambar = response.data[1];
          $('#container-img').html('<img class="image-center" src="data:image/jpeg;base64,' + $scope.gambar + '"/>');
          $timeout( function(){
              $('#table-recognize').dataTable({'destroy': true, 'pageLength': 5, 'lengthChange': false, 'language':{'emptyTable':'No Face Detected &#128546;'} });
              $('.result-div').removeClass('hidden');
              $('.btn-show-image').removeClass('hidden');
              $('.btn-get-emotion-mtcnn').html('Get Emotions MTCNN');
          }, 500 );

        }, function(){
          $('.btn-get-emotion-mtcnn').html('Get Emotions MTCNN');
          alert('Something Went Wrong &#128546; Try Refresh', 'Face Recognition MTCNN');
        })
      });
    }

    $scope.getImageAWS = function(){
      $('.btn-get-emotion-aws').html('Loading <i class="fa fa-spin fa-refresh"></i>');
      $('.btn-show-image').addClass('hidden');
      
      Webcam.snap(function(data_uri){
        $('.result-div').addClass('hidden');
        if ($.fn.DataTable.isDataTable("#table-recognize"))
        $('#table-recognize').DataTable().destroy();
        
        var data = { encoded_img: data_uri.replace('data:image/jpeg;base64,', '') };
        
        $http.post(base_url('landing/get_recognize'), JSON.stringify(data)).then(function(response){
          console.log(response.data);
          $scope.hasil = response.data[0];
          $scope.gambar = response.data[1];
          $('#container-img').html('<img class="image-center" src="data:image/jpeg;base64,' + $scope.gambar + '"/>');
          $timeout( function(){
              $('#table-recognize').dataTable({'destroy': true, 'pageLength': 5, 'lengthChange': false, 'language':{'emptyTable':'No Face Detected &#128546;'} });
              $('.result-div').removeClass('hidden');
              $('.btn-show-image').removeClass('hidden');
              $('.btn-get-emotion-aws').html('Get Emotions AWS Rekognition');
          }, 500 );

        }, function(){
          $('.btn-get-emotion-aws').html('Get Emotions AWS Rekognition');
          alert('Something Went Wrong &#128546; Try Refresh or Renew your AWS Key', 'Face Recognition AWS');
        })
      });
    }
  });
</script>

