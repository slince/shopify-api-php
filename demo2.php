<?php
include __DIR__ . '/vendor/autoload.php';

class Image
{
    protected $src;
}


class Product
{
    /**
     * @var Image
     */
    protected $image;

    /**
     * @var Image[]
     */
    protected $images;

    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     */
    public function setImage(Image $image)
    {
        $this->image = $image;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image[] $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @param Image $image
     */
    public function addImage(Image $image)
    {
        $this->images[] = $image;
    }
}

$extractor = new Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();
$array1 = $extractor->getTypes(Product::class, 'image');
$array2 = $extractor->getTypes(Product::class, 'images');
print_r($array1);
print_r($array2);