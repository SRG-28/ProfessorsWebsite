<?php
  // file: controllers/ProfessorController.php

  require_once('models/Professor.php');

  class ProfessorController extends Controller {

    public function index() { 
      return view('professor/list',
       ['professors'=>Professor::all(),
        'title'=>'Professors List']); 
    }
  
    public function show($id) {
      $prof = Professor::find($id);
      return view('professor/show',
        ['professor'=>$prof,
         'title'=>'Professor Detail']);
    }

    public function create() {
      return view('professor/create',
        ['title'=>'Professor Create']);
    }  

    public function store() {
      $name = Input::get('name');
      $degree = Input::get('degree');
      $email = Input::get('email');
      $phone = Input::get('phone');
      $item = ['name'=>$name,'degree'=>$degree,
               'email'=>$email,'phone'=>$phone];
      Professor::create($item);
      return redirect('/professor');
    }  

    public function edit($id) {
      $prof = Professor::find($id);
      return view('professor/edit',
        ['professor'=>$prof,
         'title'=>'Professor Edit']);
    }  

    public function update($_,$id) {
      $name = Input::get('name');
      $degree = Input::get('degree');
      $email = Input::get('email');
      $phone = Input::get('phone');
      $item = ['name'=>$name,'degree'=>$degree,
               'email'=>$email,'phone'=>$phone];
      Professor::update($id,$item);
      return redirect('/professor');
    }  

    public function destroy($id) {  
      Professor::destroy($id);
      return redirect('/professor');
    }
  }
?>