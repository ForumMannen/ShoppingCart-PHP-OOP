<?php

//Importerar classer
require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

//Skapa 3 nya produkter
$product1 = new Product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 3);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);

//Instansiera Cart
$cart = new Cart();
//Lägger till 3 produkter i kundvagnen
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $cart->addProduct($product2, 1);
$cartItem3 = $cart->addProduct($product3, 1);

//Skriver ut namn på produkter i kundvagnen
echo "<h3>Produkter i kundvagnen:</h3>";
echo $cartItem1->getProduct()->getTitle() . "<br>";
echo $cartItem2->getProduct()->getTitle() . "<br>";
echo $cartItem3->getProduct()->getTitle() . "<br>";

//Skriver ut antalet produkter i kundvagnen
echo "<h3>Antal produkter i kundvagnen: </h3>";
echo $cart->getTotalQuantity() . "<br>"; // Detta skall skriva ut 3

//Skriver ut totalsumman
echo "<h3>Totalpris för alla produkter i kundvagnen: </h3>";
echo $cart->getTotalSum() . "<br>"; // Detta skall skriva ut 6100

//Lägger till 2 till av produkten cartItem2 i kundvagnen
$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();
//Skriver ut antalet produkter i kundvagnen efter utökat antal
echo "<h3>Antal produkter i kundvagnen efter utökat antal: </h3>";
echo $cart->getTotalQuantity() . "<br>"; // Detta skall skriva ut 5

//Skriver ut totalsumman efter utökat antal
echo "<h3>Totalpris för alla produkter i kundvagnen efter utökat antal: </h3>";
echo $cart->getTotalSum() . "<br>"; // Detta skall skriva ut 6900

//Tar bort product1 ur kundvagnen
$cart->removeProduct($product1);

//Skriver ut antalet produkter i kundvagnen efter borttag
echo "<h3>Antal produkter i kundvagnen efter borttag av produkt: </h3>";
echo $cart->getTotalQuantity() . "<br>"; // Detta skall skriva ut 4

//Skriver ut totalsumman efter borttag
echo "<h3>Totalpris för alla produkter i kundvagnen efter borttag av produkt: </h3>";
echo $cart->getTotalSum() . "<br>"; // Detta skall skriva ut 4400

/******  VG  ******/

echo "<h2>VG:</h2>";

/*Skriver ut alla items i kundvagnen. Bör stå

Titel: M2 SSD

Antal: 3

-------------------------
Titel: Samsung Galaxy S20

Antal: 1

-------------------------

*/

//Kommentera in nedan kod om du satsar på VG
// echo "<h3>Namn och kvantitet på alla items i kundvagnen: </h3>";

// foreach ($cart->getItems() as $item) {
//     $cartItemName = $item->getProduct()->getTitle();
//     $cartItemQuantity = $item->getQuantity();

//     echo "<p>Titel: $cartItemName</p>";
//     echo "<p>Antal: $cartItemQuantity</p>";
//     echo "-------------------------<br><br>";
// }


// echo "<h3>Lägger till en fjärde M2 SSD fast det bara finns 3 i lager: </h3>";
// $cartItem2->increaseQuantity(); //Skall skriva ut "Kan inte lägga till. Slut i lager"
