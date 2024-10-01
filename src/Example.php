<?php

/**
 * Example
 * 
 * This class represents a single example generated by the OpenAIPromptDataGenerator.
 */
class Example {
    /** @var string The unique identifier for this example */
    private $exampleId;

    /** @var array The content of the example */
    private $content;

    /** @var mixed|null The expected result for this example */
    private $expectedResult;

    /**
     * Constructor for Example
     * 
     * @param string $exampleId The unique identifier for this example
     * @param array $content The content of the example
     * @param mixed|null $expectedResult The expected result for this example
     */
    public function __construct(string $exampleId, array $content, $expectedResult = null) {
        $this->exampleId = $exampleId;
        $this->content = $content;
        $this->expectedResult = $expectedResult;
    }

    /**
     * Get the example ID
     * 
     * @return string The example ID
     */
    public function getExampleId(): string {
        return $this->exampleId;
    }

    /**
     * Get the content of the example
     * 
     * @return array The content
     */
    public function getContent(): array {
        return $this->content;
    }

    /**
     * Get the expected result
     * 
     * @return mixed|null The expected result
     */
    public function getExpectedResult() {
        return $this->expectedResult;
    }

    /**
     * Convert the example to an array
     * 
     * @return array The example as an array
     */
    public function toArray(): array {
        return [
            'example_id' => $this->exampleId,
            'content' => $this->content,
            'expected_result' => $this->expectedResult,
        ];
    }
}