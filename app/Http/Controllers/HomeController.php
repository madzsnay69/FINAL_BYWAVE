<?php

namespace App\Http\Controllers;
use Auth;
use App\Payroll;
use App\Employee;
use App\Role;
use App\Department;
use Session;
Use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $id = Auth::user()->id;
    $user = User::find($id);

    if($user->role === "admin") {
         return view('home',['employees' => Employee::take(4)->get(),
                            'employeesCount' =>Employee::count(),
                            'payrolls'=>Payroll::take(4)->get(),
                            'roles' => Role::count(),
                            'departments' => Department::count()]);
    } else if ($user->role === "employee"){
        $employee = Employee::where('email', '=',$user->email)->get();


        return view('/userhome', [
                    'user_employee' => $employee
            ]);
    }

       
    }
}
