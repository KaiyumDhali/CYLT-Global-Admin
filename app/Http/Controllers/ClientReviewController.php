<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReview;

class ClientReviewController extends Controller
{
    public function index()
    {
        $reviews = ClientReview::latest()->paginate(10);
        return view('ourclient.ratingindex', compact('reviews'));
    }
public function apiindex()
{
    $reviews = ClientReview::latest()->get(); // Get all reviews, no pagination

    return response()->json([
        'success' => true,
        'data' => $reviews
    ]);
}

    public function create()
    {
        return view('ourclient.clientreviewadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name'   => 'required|string|max:255',
            'company_name'  => 'nullable|string|max:255',
            'rating'        => 'required|integer|min:1|max:5',
            'description'   => 'nullable|string',
        ]);

        ClientReview::create($validated);

        return redirect()->route('client-reviews.index')
                         ->with('success', 'Client review added successfully.');
    }

    public function show($id)
    {
        $review = ClientReview::findOrFail($id);
        return view('client_reviews.show', compact('review'));
    }

    public function edit($id)
    {
        $review = ClientReview::findOrFail($id);
        return view('ourclient.reviewedit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = ClientReview::findOrFail($id);

        $validated = $request->validate([
            'client_name'   => 'required|string|max:255',
            'company_name'  => 'nullable|string|max:255',
            'rating'        => 'required|integer|min:1|max:5',
            'description'   => 'nullable|string',
        ]);

        $review->update($validated);

        return redirect()->route('client-reviews.index')
                         ->with('success', 'Client review updated successfully.');
    }

    public function destroy($id)
    {
        $review = ClientReview::findOrFail($id);
        $review->delete();

        return redirect()->route('client-reviews.index')
                         ->with('success', 'Client review deleted successfully.');
    }
}
