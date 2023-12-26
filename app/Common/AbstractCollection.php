<?php

declare(strict_types=1);

namespace App\Common;

use App\Common\Exception\InvalidCollectionItemException;
use App\Common\Exception\InvalidCollectionTypeException;
use ArrayIterator;
use Illuminate\Support\Collection as IlluminateCollection;
use IteratorAggregate;
use JsonSerializable;
use Traversable;

abstract class AbstractCollection implements JsonSerializable, IteratorAggregate
{
    private array $collection = [];

    abstract protected function getCollectionType(): string;

    final public function __construct()
    {
        $collectionType = $this->getCollectionType();

        if (!class_exists($collectionType)
            && !interface_exists($collectionType)
        ) {
            throw new InvalidCollectionTypeException(
                "Class/interface \"$collectionType\" doesn't exists."
            );
        }
    }

    final public static function createFromIlluminateCollection(IlluminateCollection $illuminateCollection): static
    {
        $collection = new static();

        foreach ($illuminateCollection as $element) {
            $collection->addToCollection($element);
        }

        return $collection;
    }

    final public static function createFromArray(array $array): static
    {
        $collection = new static();

        foreach ($array as $element) {
            $collection->addToCollection($element);
        }

        return $collection;
    }

    final public function addToCollection(mixed $item): static
    {
        $this->collection[] = $item;

        return $this;
    }

    final public function getElements(): array
    {
        return $this->collection;
    }

    final public function jsonSerialize(): array
    {
        return $this->getElements();
    }

    final public function getIterator(): Traversable
    {
        return new ArrayIterator($this->collection);
    }

    private function checkIfDoesMatchCollectionType(mixed $collectionItem): void
    {
        $collectionType = $this->getCollectionType();

        if (!$collectionItem instanceof $collectionType) {
            throw new InvalidCollectionItemException(
                sprintf(
                    'CollectionItem must be typeof %s. Given: %s',
                    $collectionType,
                    is_object($collectionItem)
                        ? get_class($collectionItem)
                        : gettype($collectionItem)
                )
            );
        }
    }

    final public function count(): int
    {
        return count($this->collection);
    }

    final public function isEmpty(): bool
    {
        return empty($this->collection);
    }
}
