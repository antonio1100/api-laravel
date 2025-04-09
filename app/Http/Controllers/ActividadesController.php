<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ActividadesController extends Controller
{
    public function index(){
        $tareas_bd = Task::get()->all();
        return $tareas_bd;
    }

    public function store(Request $request){
        $new_task = new Task();
        $new_task->categoria = $request->category;
        $new_task->titulo = $request->title;
        $new_task->estado = $request->status;
        $new_task->descripcion = $request->description;
        $new_task->fecha_de_vencimiento = $request->dueDate;
        $new_task->prioridad = $request->priority;
        $new_task->save();

        return $new_task;
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $upd_task = Task::findOrFail($id);

        $upd_task->categoria = $request->category;
        $upd_task->titulo = $request->title;
        $upd_task->estado = $request->status;
        $upd_task->descripcion = $request->description;
        $upd_task->fecha_de_vencimiento = $request->dueDate;
        $upd_task->prioridad = $request->priority;
        $upd_task->save();

        return $upd_task;
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Tarea eliminada.']);
    }
}
