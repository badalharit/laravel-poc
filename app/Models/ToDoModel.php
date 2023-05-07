<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ToDoModel extends Model
{
    use HasFactory;

    static function getTodoItems(){
        $result = DB::table('tbl_todo_items')
                    ->select('id','taskName','isCompleted')
                    ->get('id','taskName','isCompleted');
        $items = json_decode(json_encode($result),true);
        // dd($items);
        return $items;
    }

    static function addTodoItem($taskName){
        try {
            DB::table('tbl_todo_items')
            ->insert(['taskName'=>$taskName]);
        } catch (Exception $e) {
            throw new Exception("Error Processing Request - ".$e->getMessage(), 1);
        }
    }
}
