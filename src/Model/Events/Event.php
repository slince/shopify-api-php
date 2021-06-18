<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Slince\Shopify\Model\Events;

class Event
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $subjectId;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $subjectType;

    /**
     * @var string
     */
    protected $verb;

    /**
     * @var array<string>
     */
    protected $arguments;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $path;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getSubjectId(): ?int
    {
        return $this->subjectId;
    }

    /**
     * @param int $subjectId
     */
    public function setSubjectId(?int $subjectId)
    {
        $this->subjectId = $subjectId;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }

    /**
     * @param string $subjectType
     */
    public function setSubjectType(?string $subjectType)
    {
        $this->subjectType = $subjectType;
    }

    /**
     * @return string
     */
    public function getVerb(): ?string
    {
        return $this->verb;
    }

    /**
     * @param string $verb
     */
    public function setVerb(?string $verb)
    {
        $this->verb = $verb;
    }

    /**
     * @return array
     */
    public function getArguments(): array
    {
        return $this->arguments;
    }

    /**
     * @param array $arguments
     */
    public function setArguments(array $arguments)
    {
        $this->arguments = $arguments;
    }

    /**
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(?string $body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(?string $author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(?string $path)
    {
        $this->path = $path;
    }
}
