---
title: Creating a custom image generator
weight: 2
---

If you want to generate a conversion for a file type that is not covered out of the box you can easily create your own  media generator.

In the following example we'll create a custom generator that can convert a Powerpoint to an image.

## Creating a custom image generator

The first step for creating a custom generator is to create a class that extends `Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGenerator`:

```php
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGenerator;

class PowerPoint extends ImageGenerator
{
    /**
    * This function should return a path to an image representation of the given file.
    */
    public function convert(string $file, Conversion $conversion = null) : string
    {
        $pathToImageFile = pathinfo($file, PATHINFO_DIRNAME).'/'.pathinfo($file, PATHINFO_FILENAME).'.jpg';

        // Here you should convert the file to an image and return generated conversion path.
        \PowerPoint::convertFileToImage($file)->store($pathToImageFile);

        return $pathToImageFile;
    }

    public function requirementsAreInstalled() : bool
    {
        return true;
    }

    public function supportedExtensions() : Collection
    {
        return collect(['ppt', 'pptx']);
    }

    public function supportedMimeTypes() : Collection
    {
        return collect([
            'application/vnd.ms-powerpoint',
            'application/vnd.openxmlformats-officedocument.presentationml.presentation'
        ]);
    }
}
```

## Registering the custom generator

After creating your custom image generator, you should add the class name to the `image_generators` key of the `media-library` config file.

```php
// in config/laravel-medialibrary.php
'image_generators' => [
    // ...
    YourImageGenerator::class,
], 
```

## Passing configuration to a custom image generator

When registering a custom image generator in the `media-library` config file, you can pass values like this

```php
// in config/laravel-medialibrary.php
'image_generators' => [
    // ...
    YourImageGenerator::class => ['myArgument' => 'value', 'myOtherArgument' => 'otherValue'],
], 
```

In your custom image generator you can accept those arguments in the constructor.

```php
class YourImageGenerator
{
    public function __construct(string $myArgument, string $myOtherArgument)
    {
        // do something with these arguments
    }
}
```

## Only using a custom image generator a specific model

If the generator only needs to be applied to one of your models you can override the `getImageGenerators` in that model like this:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\Interfaces\HasMedia;

class News extends Model implements HasMedia
{
   ...

   /**
    * Collection of all ImageGenerator drivers.
    */
   public function getImageGenerators() : Collection
   {
       return parent::getImageGenerators()->push(\App\ImageGenerators\PowerPoint::class);
   }
}
```

