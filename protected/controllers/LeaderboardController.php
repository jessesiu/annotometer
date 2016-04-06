<?php

class LeaderboardController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionSearch()
        {
            if(Yii::app()->user->id === 'only1chunts'||Yii::app()->user->id === 'xiaosizhe'){ 
                if (isset($_POST['name'])){
                    
                    $name=$_POST['name'];
 
                    $model=User::model()->findByAttributes(array('username'=> $name));
                    //echo $model->hyponame;
                    //echo $model->iclikname;
                   // echo file_get_contents('https://hypothes.is/api/search?user='.$model->hyponame."&sort=created&order=desc");
             
       
$hypo=file_get_contents('https://hypothes.is/api/search?user='.$model->hyponame."&sort=created&order=desc");
                    
  $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpZCI6ImNhODg4ZDM2ZDkwYjczYmY3NDM4ZGFlMTRhMmMzZTcxYWEzODVkNjciLCJqdGkiOiJjYTg4OGQzNmQ5MGI3M2JmNzQzOGRhZTE0YTJjM2U3MWFhMzg1ZDY3IiwiaXNzIjoiaHR0cDpcL1wvbG9jYWxob3N0IiwiYXVkIjoiZGNjZjljODVjYjRiN2VmYjU5NTMxMDYwNzY1MWM3OThiODI3ZWM0NjgzYzE5ZTY5MzFmZWE3MzM0YzkwODBlNSIsInN1YiI6InhpYW9zaXpoZSIsImV4cCI6MTQ1OTIzNjUyNywiaWF0IjoxNDU4MDI2OTI3LCJ0b2tlbl90eXBlIjoiYmVhcmVyIiwic2NvcGUiOm51bGx9.CqGg9KeM6bm0ft8bWWAe_axmxzeOUugQFpSTExN1MO_3tBwVbUQ5Luz69YHE9zGx71gKd7GUBWK2xUCd1yFJBtx-PqCQNTeE_DxKlK5Yty9cZzMvMkAmO1-U0clrCtr4VIPOCLeFlNThWQ1zC0SL6N7EKqw7HU0R0PN2JPGCGkJwBCmFwWH1dMLtfjo434V0mxeKX5CTZoTVLUQUln7-FONPq_iBWdehAPgwotsIi5Z1MzKDvaEN-0KiDd7s445Q9iVPVA1ziGsKrDQbC3wYjmfnIFQnIqpmwpSxfuV_4T5snh3Yf39q3Rw_v1U_z-AoaM48CRwQecwKOss9D4DYrg';
                    
           
                    

                    $ch = curl_init();
                    $icurl="http://api.iclikval.riken.jp/annotation?reviewer=".$model->iclikname;
                    curl_setopt($ch, CURLOPT_URL, $icurl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json","Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpZCI6ImQ1MTYzYjAyNDI1NzUwZWI3ZTY1MjZlNDJhOGQyNTczOTFjNzllMGIiLCJqdGkiOiJkNTE2M2IwMjQyNTc1MGViN2U2NTI2ZTQyYThkMjU3MzkxYzc5ZTBiIiwiaXNzIjoiaHR0cDpcL1wvbG9jYWxob3N0IiwiYXVkIjoiZGNjZjljODVjYjRiN2VmYjU5NTMxMDYwNzY1MWM3OThiODI3ZWM0NjgzYzE5ZTY5MzFmZWE3MzM0YzkwODBlNSIsInN1YiI6InhpYW9zaXpoZSIsImV4cCI6MTQ2MTA1MTUyOCwiaWF0IjoxNDU5ODQxOTI4LCJ0b2tlbl90eXBlIjoiYmVhcmVyIiwic2NvcGUiOm51bGx9.QTuAU8eGhlW3bbHIgACwns-XNJHzAj3gHT8elKzBukeOmnT4w0Y0ff5H3hJKVvCjVvRtkh2Bw4nOZtefUl7EAIx5eqk4Tbx8INIGPUL24IK78aJFS3XBJNAtMKNk9XzW7o5p2Hwkp-iv2WRo7QSjnmwNYttf8rvXKhArOs_OBZhJOSmgIv4Mab1GcZslF__mT4wNTdI0Zjz8O3R3aQiS3jom_0Cl9XqlEImLYWnA_W-8TDeUxSLGhLa-mOaSBpxI4FNDHd5vW6nVykNbRqIBiXjji_xSfOznDWeksHcnFtdMPHUSk1M975CMK1AJU29_Zo6cL5vTaVXVje-SROmXqQ","Content-Type: application/json","Charset: UTF-8"));
                               
                    


                    
                    $output = curl_exec($ch);
                   /* 
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="'.basename("./file/result").'"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize("./file/result"));
                    readfile("./file/result");
	*/
                }
		if(isset($hypo)&&isset($output)){
                $this->render('search1',array('hypo'=>$hypo,'icl'=>$output));}
	 else{
                  $this->render('search');    
                }	
            }
            else{
                echo 'Permssion deny';
            }
        }
        
         public function actionSearch1()
         {
              $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpZCI6ImNhODg4ZDM2ZDkwYjczYmY3NDM4ZGFlMTRhMmMzZTcxYWEzODVkNjciLCJqdGkiOiJjYTg4OGQzNmQ5MGI3M2JmNzQzOGRhZTE0YTJjM2U3MWFhMzg1ZDY3IiwiaXNzIjoiaHR0cDpcL1wvbG9jYWxob3N0IiwiYXVkIjoiZGNjZjljODVjYjRiN2VmYjU5NTMxMDYwNzY1MWM3OThiODI3ZWM0NjgzYzE5ZTY5MzFmZWE3MzM0YzkwODBlNSIsInN1YiI6InhpYW9zaXpoZSIsImV4cCI6MTQ1OTIzNjUyNywiaWF0IjoxNDU4MDI2OTI3LCJ0b2tlbl90eXBlIjoiYmVhcmVyIiwic2NvcGUiOm51bGx9.CqGg9KeM6bm0ft8bWWAe_axmxzeOUugQFpSTExN1MO_3tBwVbUQ5Luz69YHE9zGx71gKd7GUBWK2xUCd1yFJBtx-PqCQNTeE_DxKlK5Yty9cZzMvMkAmO1-U0clrCtr4VIPOCLeFlNThWQ1zC0SL6N7EKqw7HU0R0PN2JPGCGkJwBCmFwWH1dMLtfjo434V0mxeKX5CTZoTVLUQUln7-FONPq_iBWdehAPgwotsIi5Z1MzKDvaEN-0KiDd7s445Q9iVPVA1ziGsKrDQbC3wYjmfnIFQnIqpmwpSxfuV_4T5snh3Yf39q3Rw_v1U_z-AoaM48CRwQecwKOss9D4DYrg';
                    
           
                    

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "http://api.iclikval.riken.jp/annotation?reviewer=only1chunts");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json","Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpZCI6ImNhODg4ZDM2ZDkwYjczYmY3NDM4ZGFlMTRhMmMzZTcxYWEzODVkNjciLCJqdGkiOiJjYTg4OGQzNmQ5MGI3M2JmNzQzOGRhZTE0YTJjM2U3MWFhMzg1ZDY3IiwiaXNzIjoiaHR0cDpcL1wvbG9jYWxob3N0IiwiYXVkIjoiZGNjZjljODVjYjRiN2VmYjU5NTMxMDYwNzY1MWM3OThiODI3ZWM0NjgzYzE5ZTY5MzFmZWE3MzM0YzkwODBlNSIsInN1YiI6InhpYW9zaXpoZSIsImV4cCI6MTQ1OTIzNjUyNywiaWF0IjoxNDU4MDI2OTI3LCJ0b2tlbl90eXBlIjoiYmVhcmVyIiwic2NvcGUiOm51bGx9.CqGg9KeM6bm0ft8bWWAe_axmxzeOUugQFpSTExN1MO_3tBwVbUQ5Luz69YHE9zGx71gKd7GUBWK2xUCd1yFJBtx-PqCQNTeE_DxKlK5Yty9cZzMvMkAmO1-U0clrCtr4VIPOCLeFlNThWQ1zC0SL6N7EKqw7HU0R0PN2JPGCGkJwBCmFwWH1dMLtfjo434V0mxeKX5CTZoTVLUQUln7-FONPq_iBWdehAPgwotsIi5Z1MzKDvaEN-0KiDd7s445Q9iVPVA1ziGsKrDQbC3wYjmfnIFQnIqpmwpSxfuV_4T5snh3Yf39q3Rw_v1U_z-AoaM48CRwQecwKOss9D4DYrg","Content-Type: application/json","Charset: UTF-8"));
                    

                   
                    $output = curl_exec($ch);
                    print_r ($output);
         }
        

        // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
