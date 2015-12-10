<?php namespace Bluschool\Dashboard\Http\Controllers;


use Bluschool\Dashboard\Http\Requests\DashboardRequest;
use Bluschool\Dashboard\Model\Dashboard;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Laracasts\Flash\Flash;
use Orchestra\Foundation\Http\Controllers\AdminController;

class DashboardController extends AdminController {

    public function __construct()
    {
//        $this->middleware('registration');
        $this->middleware('dashboard');
    }

    protected function setupFilters()
    {
        $this->beforeFilter('control.csrf', ['only' => 'delete']);
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Dashboard $dashboard)
	{
        return view('bluschool/dashboard::dashboard', compact('dashboard'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('bluschool/dashboard::edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeEvent(DashboardRequest $request )
	{
        try {
            $file = Input::file('file1');
            $filename1 = 'dashboard_'.uniqid() . '.jpg';
            $destinationPath = 'images/dashboard';
            $itemImage = Image::make($file)->fit(350, 450);
            $itemImage->save($destinationPath . '/' . $filename1);
            $request['photo'] = $destinationPath.'/'.$filename1;

            $dashboard = Dashboard::create($request->all());

        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('bluschool/dashboard::dashboard'));
        }
        Flash::success($dashboard->name.' Saved Successfully');
        return $this->redirect(handles('bluschool/dashboard::member'));

    }

    public function storeNews(DashboardRequest $request )
	{
        try {
            $file = Input::file('file1');
            $filename1 = 'dashboard_'.uniqid() . '.jpg';
            $destinationPath = 'images/dashboard';
            $itemImage = Image::make($file)->fit(350, 450);
            $itemImage->save($destinationPath . '/' . $filename1);
            $request['photo'] = $destinationPath.'/'.$filename1;

            $dashboard = Dashboard::create($request->all());

        } catch (Exception $e) {
            Flash::error('Unable to Save');
            return $this->redirect(handles('bluschool/dashboard::dashboard'));
        }
        Flash::success($dashboard->name.' Saved Successfully');
        return $this->redirect(handles('bluschool/dashboard::member'));

    }

    public function news()
    {
    	//
    }

    public function event()
    {
    	//
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}