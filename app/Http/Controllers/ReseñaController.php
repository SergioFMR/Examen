<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reseña;

class ReseñaController extends Controller
{
    public function store(Request $request)
    {
        Reseña::create($request->all());
        return redirect()->back()->with('success', 'Reseña creada correctamente.');
    }

    public function destroy(Reseña $reseña)
    {
        $reseña->delete();
        return redirect()->back()->with('success', 'Reseña eliminada correctamente.');
    }
}
