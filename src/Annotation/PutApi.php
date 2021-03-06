<?php
namespace Hyperf\Apidog\Annotation;

use Hyperf\HttpServer\Annotation\Mapping;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class PutApi extends Mapping
{
    public $path;
    public $summary;
    public $description;
    public $deprecated;
    public $methods = ['PUT'];

    public function __construct($value = null)
    {
        parent::__construct($value);
        if (is_array($value)) {
            foreach ($value as $key => $val) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $val;
                }
            }
        }
    }
}
