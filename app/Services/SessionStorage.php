<?php  namespace App\Services;

use Illuminate\Session;

class SessionStorage implements IStorage
{

    protected $sessionName;

    public function __construct($sessionName = 'products')
    {
        if (!Session::has($sessionName)) {
            Session::set($sessionName) = [];
        }
        $this->sessionName = $sessionName;
    }

    /**
     * @param int $id
     * @param $value
     * @return $this
     */
    public function setValue($id, $value)
    {
        foreach (Session::get($this->sessionName) as $name => $data) {

            if ($data['id'] == $id) {
                Session::set($this->sessionName)[$name]['total'] += $value;
            }
        }

        return $this;
    }

    /**
     *
     * @param int $id
     * @return type
     */
    public function getValue($id)
    {
        foreach ($_SESSION[$this->sessionName] as $product) {
            if ($product['id'] == $id) return $product;
        }
    }

    public function delete($id)
    {

        foreach ($_SESSION[$this->sessionName] as $name => $data) {

            if ($data['id'] == $id) {
                $_SESSION[$this->sessionName][$name]['total'] = 0;
            }
        }

        return $this;
    }

    /**
     * @return int
     */
    public function total()
    {
        $sum = 0;
        foreach ($_SESSION[$this->sessionName] as $product) {
            $sum += $product['total'];
        }

        return $sum;
    }

    /**
     * reset total
     */
    public function reset()
    {
        foreach ($_SESSION[$this->sessionName] as $name => $data) {
            $_SESSION[$this->sessionName][$name]['total'] = 0;
        }
    }

    /**
     * @return array products
     */
    public function all()
    {
        return $_SESSION[$this->sessionName];
    }

    /**
     * @param string $where
     * @return mixed
     */
    public function find($where)
    {
        $products = [];
        if ($where == 'WHERE total>0') {
            foreach ($_SESSION[$this->sessionName] as $name => $data) {
                if ($_SESSION[$this->sessionName][$name]['total'] != 0)
                    $products[] = $_SESSION[$this->sessionName][$name];
            }
        }

        return $products;
    }

}