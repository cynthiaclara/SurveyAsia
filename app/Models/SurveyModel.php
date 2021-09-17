<?php

use CodeIgniter\Model;

class SurveyModel extends Model
{
    protected $table = 'survey';
    protected $primaryKey = 'id_survey';

    protected $useTimeStamp = false;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_survey', 'judul', 'deskripsi', 'waktu', 'logic', 'jumlah_responden', 'id_creator'];
    protected $validationRules = [];


    public function detailSurvey($id_survey)
    {
        # code...
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        /* Join Tabel Survey dengan survey_pertanyaan dan survey_jawaban */
        $builder->select('survey.id_survey, survey.deskripsi, survey_pertanyaan.id_survey_pertanyaan, survey_pertanyaan.pertanyaan, survey_jawaban.id_survey_jawaban, survey_jawaban.isi_jawaban, survey_jawaban.id_responden');

        //$builder->from($this->table);

        /* INNER JOIN dengan foreign key */
        $builder->join('survey_pertanyaan', 'survey_pertanyaan.id_survey = survey.id_survey');
        $builder->join('survey_jawaban', 'survey_jawaban.id_survey_pertanyaan = survey_pertanyaan.id_survey_pertanyaan');

        /* Mencari ID spesifik */
        $builder->where('survey.id_survey', $id_survey);

        return $builder->get();
    }
}
