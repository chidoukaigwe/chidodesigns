<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChidoDesignsContact extends Mailable
{
    use Queueable, SerializesModels;

       /**
     * The name instance.
     *
     * @var name
     */
    public $name;

      /**
     * The email instance.
     *
     * @var email
     */
    public $email;

    /**
     * The subject instance.
     *
     * @var subject
     */
    public $subject;

    /**
     * The budget instance.
     *
     * @var budget
     */
    public $budget;

    /**
     * The timeline instance.
     *
     * @var timeline
     */
    public $timeline;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $budget, $timeline )
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->budget = $budget;
        $this->timeline = $timeline;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('emails.contact')
        ->with([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'budget' => $this->budget,
            'timeline' => $this->timeline

        ]);
    }
}
