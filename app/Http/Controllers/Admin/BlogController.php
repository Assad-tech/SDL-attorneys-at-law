<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function manageBlog()
    {
        $blogs = Blog::all();
        // dd($data);
        return view('Admin.pages.blog.manageBlog', compact('blogs'));
    }
    public function storeBlog(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sponsor_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Handle banner image upload
            if ($request->hasFile('banner_image')) {
                $bannerPath = $this->uploadImage($request->file('banner_image'), 'banner');
                $this->saveOrUpdateBlog($request->input('banner_id'), 'banner', $bannerPath);
            }

            // Handle sponsor images
            $sponsorIds = $request->input('sponsor_ids', []); // Get existing sponsor IDs
            if ($request->hasFile('sponsor_images')) {
                foreach ($request->file('sponsor_images') as $index => $image) {
                    if (isset($sponsorIds[$index])) {
                        // Update existing sponsor image
                        $sponsorPath = $this->uploadImage($image, 'sponsor');
                        $this->saveOrUpdateBlog($sponsorIds[$index], 'sponsor', $sponsorPath);
                    } else {
                        // Create a new sponsor image record
                        $sponsorPath = $this->uploadImage($image, 'sponsor');
                        $this->saveOrUpdateBlog(null, 'sponsor', $sponsorPath);
                    }
                }
            }

            return redirect()->back()->with([
                'message' => 'Blog images uploaded successfully!',
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'message' => 'An error occurred: ' . $e->getMessage(),
                'alert-type' => 'error',
            ]);
        }
    }

    /**
     * Upload image to the specified directory.
     */
    private function uploadImage($image, $type)
    {
        $fileName = time() . "_{$type}_" . $image->getClientOriginalName();
        $destinationPath = public_path('user/assets/images/blog');
        $image->move($destinationPath, $fileName);
        return 'user/assets/images/blog/' . $fileName;
    }

    /**
     * Save or update blog record in the database.
     */
    private function saveOrUpdateBlog($id, $type, $imagePath)
    {
        if ($id) {
            $blog = Blog::find($id);
            if ($blog) {
                $blog->type = $type;
                $type === 'banner' ? $blog->banner = $imagePath : $blog->sponsor_logo = $imagePath;
                $blog->save();
            } else {
                throw new \Exception("Blog with ID {$id} not found.");
            }
        } else {
            Blog::create([
                'type' => $type,
                $type === 'banner' ? 'banner' : 'sponsor_logo' => $imagePath,
            ]);
        }
    }
}


