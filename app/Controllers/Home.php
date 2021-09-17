<?php

namespace App\Controllers;

use SurveyJawabanModel;
use SurveyModel;

class Home extends BaseController
{
	protected $surveyModel;
	protected $surveyJawabanModel;

	public function __construct()
	{
		$this->surveyModel = new SurveyModel();
		$this->surveyJawabanModel = new SurveyJawabanModel();
	}

	public function index()
	{
		$detailSurvey = $this->surveyModel->detailSurvey(1)->getResult();
		$detailJawaban = $this->surveyJawabanModel->detailJawaban(1)->getResult();

		foreach ($detailSurvey as $key => $value) {
			# code...
			$array['survey_id'] = $value->id_survey;
			$array['survey_desc'] = $value->deskripsi;
			$array['pertanyaan'][$value->id_survey_pertanyaan] = $value->pertanyaan;
		}
		$this->var_dump($array);
		$this->var_dump($detailJawaban);
		//echo '<pre>' . json_encode($detailJawaban, JSON_PRETTY_PRINT) . '</pre>';
	}

	public function tambahSurvey()
	{
		# code...
		
	}

	private function var_dump($var)
	{
		# code...
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}
