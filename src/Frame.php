<?php

namespace QuantaQuirk\FlareClient;

use QuantaQuirk\Backtrace\Frame as QuantaQuirkFrame;

class Frame
{
    public static function fromQuantaQuirkFrame(
        QuantaQuirkFrame $frame,
    ): self {
        return new self($frame);
    }

    public function __construct(
        protected QuantaQuirkFrame $frame,
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
