<?php

namespace App;

/**
 * Represents a ToDo item.
 */
class Task
{
    protected $id;
    protected $description;
    protected $completed = false;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of completed
     */
    public function isComplete()
    {
        return $this->completed;
    }

    /**
     * Completes a task.
     * @return self
     */
    public function complete()
    {
        $this->completed = true;
        
        return this;
    }

    /**
     * Set the value of completed
     *
     * @return  self
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }
}