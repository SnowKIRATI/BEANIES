<?php

class Contact
{
    protected string $subject;
    protected string $email;
    protected string $message;
    protected array $wrong = [];

    public function __construct(array $postData)
    {
        if (isset($postData['email'])) {
            $this->setEmail($postData['email']);
        }
        if (isset($postData['message'])) {
            $this->setMessage($postData['message']);
        }
        if (isset($postData['subject'])) {
            $this->setSubject($postData['subject']);
        }
    }
    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        if (empty($subject)) {
            $this->wrong[] = 'Subject, please add subject.';
        } elseif (!filter_var($subject)) {
            $this->wrong[] = 'Incorrect subject';
        }
        $this->subject = $subject;
        return $this;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        if (empty($email)) {
            $this->wrong[] = 'Email empty, please add your email.';
        } elseif (!filter_var($email)) {
            $this->wrong[] = 'Incorrect email';
        }
        $this->email = $email;
        return $this;
    }
    public function getMessage(): string
    {
        return $this->message;
    }
    public function setMessage(string $message): self
    {
        if (empty($message)) {
            $this->wrong[] = 'Please write some texts';
        }
        $this->message = $message;
        return $this;
    }
    public function getWrong(): array
    {
        return $this->wrong;
    }
}