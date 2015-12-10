<?php namespace Blupl\Host\Http\Requests;

use App\Http\Requests\Request;

class HostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'evenTitle' => 'required',
            'eventDescription' => 'required',
            'eventType' => 'required',
            'eventStartDay' => 'required',
            'eventEndDay' => 'required',
            'allDay' => 'required',
            'newsTitle' => 'required',
            'newsContent' => 'required',
            'newsDatePublished' => 'required',
            'title' => 'required',
            'content' => 'required'
		];
	}
}
