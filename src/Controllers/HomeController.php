<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controller;
use App\Http\Request;
use App\Http\Response;

/**
 * Controller for handling requests to the home and about pages.
 *
 * Provides actions for rendering the homepage and the about page.
 */
class HomeController extends Controller
{
    /**
     * Show the homepage.
     * Renders the 'home' view with title, heading, and content.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function index(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'home', [
            ...$this->pullFlash($response),
            'request' => $request,
        ]);
        return $response;
    }

    /**
     * Show the about page.
     * Outputs a simple about message.
     *
     * @param Request $request The current HTTP request instance.
     * @return Response
     */
    public function about(Request $request): Response
    {
        $response = new Response();
        $response->setTemplate($this->template, 'about', [
            ...$this->pullFlash($response),
            'request' => $request,
        ]);
        return $response;
    }

    // In src/Controllers/HomeController.php
    public function skills(Request $request): Response
    {
        $response = new Response();
        $skills = [
            'Frontend' => ['HTML', 'CSS', 'JavaScript'],
            'Backend' => ['PHP', 'Node.js', 'Python']
        ];

        $response->setTemplate($this->template, 'skills', [
            'skills' => $skills,
            'pageTitle' => 'My Skills'
        ]);
        return $response;
    }

    public function test(Request $request): Response
    {
        $response = new Response();
        $test = [
            'Frontend' => ['HTML', 'CSS', 'JavaScript'],
            'Backend' => ['PHP', 'Node.js', 'Python']
        ];

        $response->setTemplate($this->template, 'test', [
            'test' => $test,
            'pageTitle' => 'My Test Page'
        ]);
        return $response;
    }

}


