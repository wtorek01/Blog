<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $post_id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($post_id);

        // Create a new comment with the validated data
        Comment::create([
            'post_id' => $post->id,
            'author' => $validated['author'],
            'email' => $validated['email'],
            'content' => $validated['content'],
        ]);

        // Redirect back to the post by slug
        return redirect()->route('posts.show', $post->slug)
            ->with('success', 'Komentarz został dodany pomyślnie!');
    }
}
