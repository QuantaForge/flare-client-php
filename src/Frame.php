<?php

namespace QuantaForge\FlareClient;

use QuantaForge\Backtrace\Frame as QuantaForgeFrame;

class Frame
{
    public static function fromQuantaForgeFrame(
        QuantaForgeFrame $frame,
    ): self {
        return new self($frame);
    }

    public function __construct(
        protected QuantaForgeFrame $frame,
    ) {
    }

    public function toArray(): array
    {
        return [
            'file' => $this->frame->file,
            'line_number' => $this->frame->lineNumber,
            'method' => $this->frame->method,
            'class' => $this->frame->class,
            'code_snippet' => $this->frame->getSnippet(30),
            'arguments' => $this->frame->arguments,
            'application_frame' => $this->frame->applicationFrame,
        ];
    }
}
