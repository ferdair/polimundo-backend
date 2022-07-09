<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()

    {
        $tickets = Ticket::all();
        return response()->json([
            "success" => true,
            "message" => "Lista de Tickets ",
            "data" => $tickets
        ]);
    }

    public function show($id)
    {
        $ticket = Ticket::find($id);
        if (is_null($ticket)) {
            return $this->sendError('Ticket no encontrado.');
        }
        return response()->json([
            "success" => true,
            "message" => "Ticket encontrado exitosamente.",
            "data" => $ticket
        ]);
    }
}
