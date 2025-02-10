<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadsRequest;
use App\Models\Lead;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class LeadsController extends Controller
{
    /**
     * Display lead form.
     *
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        return view('lead');
    }

    /**
     * Store a newly created lead in storage.
     *
     * @param LeadsRequest $request
     *
     * @return RedirectResponse
     */
    public function store(LeadsRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Lead::create([
            Lead::CELLPHONE  => $validated['cellphone'],
            Lead::EMAIL      => $validated['email'],
        ]);

        return back()->with('success', 'Lead added successfully!');
    }
}
