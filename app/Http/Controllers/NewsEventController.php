<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\SubMenu;
use App\Models\BasicInfo;
use App\Models\NewsEvent;
use App\Models\Project;
use App\Models\NewsEventGallery;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsEventController extends Controller
{
    /**
     * Display a listing of all news/events (Admin)
     */
    public function index()
    {
        try {
            $newsevent = NewsEvent::with('images')
                                   ->orderBy('date', 'desc')
                                   ->get();
            return view('admin.newsevent.index', compact('newsevent'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to fetch news/events');
        }
    }

    /**
     * Display news/events on frontend
     */
    public function webview()
    {
        try {
            $newsevents = NewsEvent::with('images')
                                    ->orderBy('date', 'desc')
                                    ->get();
            
            // Add first image to each news event
            foreach($newsevents as $newsevent) {
                $newsevent->display_image = $newsevent->images->first()?->image;
            }
            
            $subMenu = SubMenu::find(12);
            return view('frontend.newsandevent', compact('newsevents', 'subMenu'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to load news and events');
        }
    }

    /**
     * Display single news/event details (Frontend)
     * Uses Route Model Binding
     */
    public function n_eDetails(NewsEvent $newsevent)
    {
        try {
            $newsEvent = $newsevent;
            $newsEventImage = $newsevent->images;
            
            return view('frontend.news-event-details', compact('newsEvent', 'newsEventImage'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'News/Event not found');
        }
    }

    /**
     * Show the form for creating a new news/event
     */
    public function create()
    {
        return view('admin.newsevent.create');
    }

    /**
     * Store a newly created news/event
     */
    public function store(Request $request)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'heading' => 'required|string|max:255',
                'shortDescription' => 'required|string|min:10',
                'description' => 'required|string|min:20',
                'source' => 'required|string|max:255',
                'writter' => 'required|string|max:255',
                'date' => 'required|date',
                'type' => 'required|in:1,2',
                'link' => 'nullable|url',
                'images' => 'required|array|min:1',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Format date
            $formattedDate = Carbon::parse($validated['date'])->format('jS M Y');

            // Create news event
            $newsEvent = NewsEvent::create([
                'heading' => $validated['heading'],
                'shortDescription' => $validated['shortDescription'],
                'description' => $validated['description'],
                'source' => $validated['source'],
                'writter' => $validated['writter'],
                'date' => $formattedDate,
                'type' => $validated['type'],
                'link' => $validated['link'] ?? null,
            ]);

            // Upload and save images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    $filename = 'NE' . time() . $index . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('upload'), $filename);
                    
                    NewsEventGallery::create([
                        'newsEventID' => $newsEvent->id,
                        'image' => $filename
                    ]);
                }
            }

            return redirect()->route('newsevent.index')
                ->with('success', 'News/Event created successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create news/event: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified news/event (Admin View)
     * Uses Route Model Binding
     */
    public function show(NewsEvent $newsevent)
    {
        try {
            return view('admin.newsevent.show', ['newsevent' => $newsevent]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'News/Event not found');
        }
    }

    /**
     * Show the form for editing a news/event
     * Uses Route Model Binding
     */
    public function edit(NewsEvent $newsevent)
    {
        try {
            return view('admin.newsevent.edit', ['newsevent' => $newsevent]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'News/Event not found');
        }
    }

    /**
     * Update the specified news/event
     * Uses Route Model Binding
     */
    public function update(Request $request, NewsEvent $newsevent)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'heading' => 'required|string|max:255',
                'shortDescription' => 'required|string|min:10',
                'description' => 'required|string|min:20',
                'source' => 'required|string|max:255',
                'writter' => 'required|string|max:255',
                'date' => 'required|date',
                'type' => 'required|in:1,2',
                'link' => 'nullable|url',
                'images' => 'nullable|array',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Format date
            $formattedDate = Carbon::parse($validated['date'])->format('jS M Y');

            // Update news event
            $newsevent->update([
                'heading' => $validated['heading'],
                'shortDescription' => $validated['shortDescription'],
                'description' => $validated['description'],
                'source' => $validated['source'],
                'writter' => $validated['writter'],
                'date' => $formattedDate,
                'type' => $validated['type'],
                'link' => $validated['link'] ?? null,
            ]);

            // Upload and save new images if provided
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $index => $image) {
                    $filename = 'NE' . time() . $index . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('upload'), $filename);
                    
                    NewsEventGallery::create([
                        'newsEventID' => $newsevent->id,
                        'image' => $filename
                    ]);
                }
            }

            return redirect()->route('newsevent.index')
                ->with('success', 'News/Event updated successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to update news/event: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Delete a specific image from news/event
     * Uses Route Model Binding
     */
    public function deleteImage(NewsEvent $newsevent, NewsEventGallery $image)
    {
        try {
            // Verify image belongs to news event
            if ($image->newsEventID !== $newsevent->id) {
                return redirect()->back()
                    ->with('error', 'Image does not belong to this news/event');
            }

            // Delete file from storage
            if (file_exists(public_path('upload/' . $image->image))) {
                unlink(public_path('upload/' . $image->image));
            }
            
            // Delete from database
            $image->delete();

            return redirect()->back()
                ->with('success', 'Image deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to delete image');
        }
    }

    /**
     * Delete the specified news/event
     * Uses Route Model Binding
     */
    public function destroy(NewsEvent $newsevent)
    {
        try {
            // Delete all associated images
            $images = $newsevent->images;
            foreach ($images as $image) {
                if (file_exists(public_path('upload/' . $image->image))) {
                    unlink(public_path('upload/' . $image->image));
                }
                $image->delete();
            }
            
            // Delete news event
            $newsevent->delete();

            return redirect()->back()
                ->with('success', 'News/Event deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to delete news/event');
        }
    }
}