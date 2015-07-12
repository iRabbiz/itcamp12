<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model {

	public function applicant()
	{
		return $this->belongsTo('App\Applicant');
	}

	public function question()
	{
		return $this->belongsTo('App\QuizQuestion', 'quiz_question_id');
	}

}
