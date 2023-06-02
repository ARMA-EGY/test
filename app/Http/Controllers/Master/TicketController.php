<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //-------------- Dashboard ---------------\\
    public function dashboard()
    {
        $user = auth()->user();

        $items      = Ticket::orderBy('id','desc')->get();
		
        return view('master.ticket.dashboard', [
            'items'         => $items,
        ]);
    }


    //-------------- Get All Data ---------------\\
    public function index()
    {
        $user = auth()->user();

        $items      = Ticket::orderBy('id','desc')->get();
		
        return view('master.ticket.index', [
            'items'         => $items,
        ]);
    }

    
    //-------------- Create New Data Page ---------------\\
    public function create()
    {
        $user = auth()->user();
        
        return view('master.ticket.create', [
        ]);
    }


    //-------------- Store New Data ---------------\\
    public function store(Request $request)
    {
        $user = auth()->user();

        $ticket =  Ticket::create([
            'serial'            => $request->serial,
            'subject'           => $request->subject,
            'caller'            => $request->caller,
            'category'          => $request->category,
            'department'        => $request->department,
            'priority'          => $request->priority,
            'state'             => $request->state,
            'assign_to'         => $request->assign_to,
            'description'       => $request->description,
            'created_by'        => $request->user_id,
        ]);
        
        $request->session()->flash('success', 'Ticket created successfully');
        
        return redirect(route('ticket.index'));
    }


    //-------------- Edit Data Page ---------------\\
    public function edit(Ticket $ticket)
    {
        $user = auth()->user();

		return view('master.ticket.create', [
            'item' => $ticket,
            ]);
    }

    
    //-------------- Update Data  ---------------\\
    public function update(Request $request, Ticket $ticket)
    {
        $user = auth()->user();

        $ticket->update([
            'serial'            => $request->serial,
            'subject'           => $request->subject,
            'caller'            => $request->caller,
            'category'          => $request->category,
            'department'        => $request->department,
            'priority'          => $request->priority,
            'state'             => $request->state,
            'assign_to'         => $request->assign_to,
            'description'       => $request->description,
        ]);
		
		session()->flash('success', 'Ticket updated successfully');
		
		return redirect(route('ticket.index'));
    }


    //-------------- Delete Data  ---------------\\
    public function destroy($id)
    {
        $item        = Ticket::where('id', $id)->first();
        $delete      = $item->delete();

        if($delete)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }
    }
   
}


