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
        $new_task->categoria = $request->categoria;
        $new_task->titulo = $request->titulo;
        $new_task->estado = $request->status;
        $new_task->descripcion = $request->descripcion;
        $new_task->fecha_de_vencimiento = $request->fecha_de_vencimiento;
        $new_task->prioridad = $request->prioridad;
        $new_task->save();

        return $new_task;
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $upd_task = Task::findOrFail($id);

        $upd_task->categoria = $request->categoria;
        $upd_task->titulo = $request->titulo;
        $upd_task->estado = $request->status;
        $upd_task->descripcion = $request->descripcion;
        $upd_task->fecha_de_vencimiento = $request->fecha_de_vencimiento;
        $upd_task->prioridad = $request->prioridad;
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
