<?php

namespace App\Http\Controllers;

use App\Models\ToDoModel;
use Exception;
use Illuminate\Http\Request;

class ToDoController extends Controller{

    private $toDoModel;

    public function __construct() {
        $this->toDoModel = new ToDoModel();
    }
    
    public function index(){
        $todoItems = $this->toDoModel::getTodoItems();
        
        return view('todolist', [
            'items' => $todoItems
        ]);
    }

    public function addNewTask(Request $request){
        try{
            $taskName = $request->input('taskName');
            $this->toDoModel::addTodoItem($taskName);
            return json_encode(['response'=>'success']);
        }catch(Exception $e){
            return json_encode(['response'=>$e->getMessage()]);
        }

    }
}
