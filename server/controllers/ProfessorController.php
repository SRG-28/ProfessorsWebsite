<?php  
  // file: server/controllers/ProfessorController.php 
  require_once('models/ProfessorModel.php');

class ProfessorController extends Controller {
  
  public function index() {  
    return ProfessorModel::all();
  }  
  
  public function store($request) {
    return ProfessorModel::create($request);
  }  
  
  public function show($id) {  
    return ProfessorModel::find($id);
  }  
  
  public function update($request,$id) {  
    return ProfessorModel::update($id,$request);
  }  
  
  public function destroy($id) {  
    return ProfessorModel::destroy($id);
  }
}
?>