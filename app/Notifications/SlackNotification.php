<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Messages\SlackAttachment;

class SlackNotification extends Notification
{
    use Queueable;

    protected $message;
    protected $attachment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message = null, $attachment = null)
    {
        $this->message = $message;
        $this->attachment = $attachment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toSlack($notifiable)
    {
        $message = (new SlackMessage)
            ->from(config('services.slack.user_name'), config('services.slack.icon'))
            ->to(config('services.slack.channel'))
            ->content($this->message);

        if (!is_null($this->attachment) && is_array($this->attachment)) {
            $message->attachment(function (SlackAttachment $attachment) {
                if (isset($this->attachment['title'])) {
                    $attachment->title($this->attachment['title']);
                }
                if (isset($this->attachment['content'])) {
                    $attachment->content($this->attachment['content']);
                }
                if (isset($this->attachment['field']) && is_array($this->attachment['field'])) {
                    foreach($this->attachment['field'] as $k => $v) {
                        $attachment->field($k, $v);
                    }
                }
            });
        }
        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
