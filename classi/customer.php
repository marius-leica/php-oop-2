<?php

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/PaymentHandler.php";



class Customer
{
    private $user_registered = false;
    private $user_name;
    private $user_surname;
    public Cart $cart;
    public PaymentHandler $paymentHandler;


    // per verificare se l'utente è registrato impostiamo $user_name = null, $user_surname = null 
    public function __construct($user_name = null, $user_surname = null)
    {
        $this->cart = new Cart(); //cosi inizializzo il carello che adesso è vuoto
        $this->paymentHandler = new PaymentHandler(); //cosi inizializzo il paymentHandler e l'utente all'avio nn ha nessun payment method selezzionato
        if (isset($user_name) && isset($user_surname)) {
            //invece di impostare $user_name e $user_surname, invochiamo la function register
            $this->register($user_name, $user_surname);
        }
    }


    /**
     * Get the value of user_name
     */
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * Set the value of user_name
     *
     * @return  self
     */
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of user_surname
     */
    public function getUser_surname()
    {
        return $this->user_surname;
    }

    /**
     * Set the value of user_surname
     *
     * @return  self
     */
    public function setUser_surname($user_surname)
    {
        $this->user_surname = $user_surname;

        return $this;
    }


    /**
     * Get the value of user_registered
     */
    public function getUser_registered()
    {
        return $this->user_registered;
    }

    /**
     * Set the value of user_registered
     *
     * @return  self
     */
    //qui possiamo metterlo private perchè siamo noi che lo vogliamo impostare a true
    private function setUser_registered($user_registered)
    {
        $this->user_registered = $user_registered;

        return $this;
    }
    // con la funzione register permettiamo di registrare un utente
    // questa function la usiamo anche nel costruttore perchè se l'utente è registrato allora impostiamo $user_registered a true
    public function register($user_name, $user_surname)
    {
        $this->setUser_name($user_name);
        $this->setUser_surname($user_surname);
        $this->setUser_registered(true);
    }

    public function checkout($paymentIndex)
    {
        // recuperare il totale del carrello
        $total = $this->cart->getTotal();


        $discount = $this->user_registered ? 20 : 0;
        $totalWithDiscount = $total - ($total * $discount / 100);


        $method = $this->paymentHandler->getPaymentMethods($paymentIndex);
        //facciamo un if per capire se è scaduta
        if ($method->isExpired()) {
            echo "Payment method is expired";
        } else {
            // se non è scaduta allora facciamo il pagamento

        }
    }
}
