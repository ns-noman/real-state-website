<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Message::orderBy('readStatus', 'asc')
                        ->orderBy('created_at', 'desc')
                        ->get(); 
        return view('admin.messages.index', compact('data'));
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            $validated['readStatus'] = 0;
            $result = Message::create($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send message. Please try again.'
            ], 500);
        }
    }

    public function toggleRead($id)
    {
        $message = Message::findOrFail($id);
        $message->readStatus = $message->readStatus == 0 ? 1 : 0;
        $message->save();
        
        return redirect()->back()->with('success', 'Message status updated');
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }
}