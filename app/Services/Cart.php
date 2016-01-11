<?php  namespace App\Services;

class Cart implements \Countable
{

    protected $storage;

    public function __construct(iStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param iProduct $product
     * @param $quantity
     */
    public function buy(iProduct $product, $quantity)
    {
        $quantity = abs((int)$quantity);
        $this->storage->setValue($product->id, $product->price * $quantity);
    }

    /**
     * @param iProduct $product
     * @param $quantity
     */
    public function restore(iProduct $product, $quantity)
    {

        $value =  $this->storage->getValue($product->id);

        if ($value > 0) {
            $q = -((int)$quantity) * $product->price;

            if (abs($q) > $value) {
                $this->storage->setValue($product->id, -$value);

                return;
            }

            $this->storage->setValue($product->id, $q);
        }
    }

    /**
     * @param iProduct $product
     * @return $this
     */
    public function delete(iProduct $product)
    {
        $this->storage->delete($product->id);

        return $this;
    }

    /**
     * @return float
     */
    public function total()
    {
        return $this->storage->total();
    }

    /**
     * @return products into the cart
     */
    public function getCart()
    {
        return $this->storage->get();
    }

    /**
     *
     *
     * @return NULL
     *
     * <pre>reset storage</pre>
     */
    public function reset()
    {
        return $this->storage->reset();
    }

    public function count()
    {
        return $this->storage->count();
    }



}