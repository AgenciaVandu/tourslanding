<?php

namespace App\Mail;

use App\Models\Tour;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TourRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected $tour;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tour $tour)
    {
        $this->tour = $tour;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Tour Register',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.orders.register',
            with: [
                'name' => $this->tour->name,
                'last_name' => $this->tour->last_name,
                'country' => $this->tour->country,
                'language' => $this->tour->language,
                'email' => $this->tour->email,
                'phone' => $this->tour->phone,
                'emergency_name' => $this->tour->emergency_name,
                'relationship' => $this->tour->relationship,
                'menu_type' => $this->tour->menu_type,
                'allergies' => $this->tour->allergies,
                'contact_me' => $this->tour->contact_me,
                'tour_route' => $this->tour->tour_route
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
