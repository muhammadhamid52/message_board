<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')->get();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        auth()->user()->messages()->create([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('messages.index');
    }

    public function edit(Message $message)
    {
        $this->authorize('update', $message);
        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        $this->authorize('update', $message);

        $request->validate([
            'content' => 'required',
        ]);

        $message->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('messages.index');
    }
}
