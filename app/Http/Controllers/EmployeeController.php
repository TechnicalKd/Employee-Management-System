<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $stillWorking = $request->still_working;
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['date_of_joining'] = $request->date_of_joining;
        if($stillWorking ){
            $data['date_of_leaving'] ='';
            $data['still_working'] =$request->still_working;
        }else{
           $data['date_of_leaving'] =$request->date_of_leaving; 
        }
        $image = $request->avatar;
        if ($image){
        ///create the unique id
        $image_one = uniqid().'.'.$image->getClientOriginalExtension();
        ///make the image resizeble 
        Image::make($image)->resize(1024,1024)->save('gallery/'.$image_one);
        $data['image'] = 'gallery/'.$image_one;
        DB::table('emp')->insert($data);
        $notification = array(

           'message' => 'Data Saved Successfully',
           'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         DB::table('emp')->where('id', $id)->delete();
         $notification = array(
           'message' => 'Data Deleted Successfully',
           'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('emp')->where('id', $id)->delete();
         $notification = array(
           'message' => 'Data Deleted Successfully',
           'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
