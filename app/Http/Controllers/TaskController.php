<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * Be uset alongwide this class
     *
     * @var TaskRepository
     */
    private $taskRepository;

    /**
     * Initialize properties to be used alongwide the class
     *
     * @param TaskRepository $taskRepository
     * 
     * @return void
     */
    public function __controller(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Calls the view to list tasks
     *
     * @return view
     */
    public function index()
    {

    }

    /**
     * Calls the view to show informations from a single task.
     *
     * @return void
     */
    public function show()
    {

    }

    /**
     * Calls the view containing the form to create a new task.
     *
     * @return view
     */
    public function create()
    {
        
    }

    /**
     * Stores task in the database and redirect to the just created task.
     *
     * @return redirect
     */
    public function store()
    {
        
    }

    /**
     * Calls the form to edit task information
     *
     * @return void
     */
    public function edit()
    {
        
    }

    /**
     * Updates the information task from a edit form and redirects to the just altered task.
     *
     * @return redirect
     */
    public function update()
    {
        
    }

    /**
     * Calls the form to confirm task deletion.
     *
     * @return view
     */
    public function delete()
    {
        
    }

    /**
     * Deletes the task from the database and redirect to the task list
     *
     * @return redirect
     */
    public function destroy()
    {
        
    }
}
