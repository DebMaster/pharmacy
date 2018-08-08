<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Over The Counter';
$this->params['breadcrumbs'][] = $this->title;
$arr=$results["mentions"];
$c=count($arr);
$symptoms=array();
$master=array();
?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- faq -->
				<div class="progressbar-heading grids-heading">
					<h2>Possible Symptoms and Diagnosis</h2>
				</div>
				
				<div class="asked">
				<h3>Possible symptoms</h3>
				<?php
				for($x=0;$x<$c;$x++){
				$symptoms["id"]=$arr[$x]["id"];
				$symptoms["choice_id"]=$arr[$x]["choice_id"];
				$symptoms["initial"]=true;
				array_push($master,$symptoms);
				?>
					<div class="questions">
						<?php echo $arr[$x]["common_name"]; ?>					
					</div>					 
			<?php
				}
												
$extras["disable_groups"]=false;						
$toServer=array();
$toServer["sex"]="female";
$toServer["age"]=25;
$toServer["evidence"]=$master;					
$toServer["extras"]=$extras;	
$data_string = json_encode($toServer);
$ch = curl_init('https://api.infermedica.com/v2/diagnosis'); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);                                                                   
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',      
    'app_id: '. 'cb44dcf1',
    'app_key: '. '6edbdc8486e762cf9874d8c4641ba37a',	
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                                                                                                                                        
$result = curl_exec($ch);
$j1=json_decode($result,true);
$count=count($j1);
//for($r=0;$r<$count;$r++){
	if(count($j1["conditions"]) > 0){
	echo "<br><br><h3>Possible Diagnosis</h3><br>".$j1["conditions"][0]["common_name"];
}
/*
{
   "question":{
      "type":"group_single",
      "text":"How long have you had your abdominal pain?",
      "items":[
         {
            "id":"s_12",
            "name":"Less than a week",
            "choices":[
               {
                  "id":"present",
                  "label":"Yes"
               },
               {
                  "id":"absent",
                  "label":"No"
               },
               {
                  "id":"unknown",
                  "label":"Don't know"
               }
            ]
         },
         {
            "id":"s_18",
            "name":"More than a week",
            "choices":[
               {
                  "id":"present",
                  "label":"Yes"
               },
               {
                  "id":"absent",
                  "label":"No"
               },
               {
                  "id":"unknown",
                  "label":"Don't know"
               }
            ]
         }
      ],
      "extras":{

      }
   },
   "conditions":[
      {
         "id":"c_138",
         "name":"Food poisoning",
         "common_name":"Food poisoning",
         "probability":0.0226
      }
   ],
   "extras":{

   },
   "should_stop":false
}
*/
					
						?>

					  
					  
					 
					  
					 
					  			    

				</div>
				<!-- //faq -->
			</div>
		</div>