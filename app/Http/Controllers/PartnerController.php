<?php
namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    // Просмотр списка партнеров
    public function index()
    {
        $partners = Partner::with('sales')->get();
        return view('partners.index', compact('partners'));
    }

    // Форма добавления партнера
    public function create()
    {
        return view('partners.create');
    }

    // Добавление партнера
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'rating' => 'required|integer|min:0',
            'address' => 'required|string',
            'director_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:partners',
        ]);

        Partner::create($validated);
        return redirect()->route('partners.index')->with('success', 'Партнер успешно добавлен.');
    }

    // Редактирование партнера
    public function edit(Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    // Обновление данных партнера
    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'rating' => 'required|integer|min:0',
            'address' => 'required|string',
            'director_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email|unique:partners,email,' . $partner->id,
        ]);

        $partner->update($validated);
        return redirect()->route('partners.index')->with('success', 'Данные партнера обновлены.');
    }

    // Удаление партнера
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Партнер удален.');
    }
    public function history(Partner $partner)
    {
        $sales = $partner->sales()->with('product')->get();
        return view('partners.history', compact('partner', 'sales'));
    }
}
