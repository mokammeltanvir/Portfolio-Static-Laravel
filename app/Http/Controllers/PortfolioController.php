<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{

    public function home()
{
    // Load the home data from the JSON file in the storage/data folder
    $homeData = json_decode(file_get_contents(storage_path('data/home.json')), true);

    // Return the home data to the "home" view
    return view('frontend.pages.home', compact('homeData'));
}

    public function about()
    {
        // Load the about data from the JSON file in the storage/data folder
        $aboutData = json_decode(file_get_contents(storage_path('data/about.json')), true);

        // Return the about data to the about view
        return view('frontend.pages.about', compact('aboutData'));

    }

    public function services()
    {
        // Load the services data from the JSON file in the storage/data folder
        $servicesData = json_decode(file_get_contents(storage_path('data/services.json')), true);

        // Return the services data to the services view
        return view('frontend.pages.services', compact('servicesData'));

    }
    // Portfolio Projects
    public function portfolio()
    {
        // Load data from projects.json
        $projectsData = json_decode(File::get(storage_path('data/projects.json')), true);

        // Pass the data to the portfolio view
        return view('frontend.pages.portfolio', compact('projectsData'));
    }

    public function portfolioDetail($id)
    {
        // Load data from projects.json
        $projectsData = json_decode(File::get(storage_path('data/projects.json')), true);

        // Find the project details by ID
        $project = collect($projectsData['projects'])->firstWhere('id', $id);

        if ($project) {
            // Pass the project data to the portfolio-details view
            return view('frontend.pages.portfolio-details', compact('project'));
        } else {
            // Handle project not found
            return view('frontend.pages.error');
        }
    }



    public function contact()
    {
        // Load the contact data from the JSON file in the storage/data folder
        $contactData = json_decode(file_get_contents(storage_path('data/contact.json')), true);

        // Return the contact data to the contact view
        return view('frontend.pages.contact', compact('contactData'));

    }

}
