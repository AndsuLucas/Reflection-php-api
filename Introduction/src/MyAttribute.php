<?php
namespace Alura\Reflection;
use Attribute;

#[Attribute]
class MyAttribute
{
    function __construct(private string $attr)
    {}
}