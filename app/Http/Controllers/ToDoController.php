<?php

namespace App\Http\Controllers;

use App\Models\ToDoModel;
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
}
