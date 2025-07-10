<?php
// encapsulation kinds of three...
/*
Encapsulation অর্থ হলো "আবৃত করে রাখা"। প্রোগ্রামিংয়ে এর মানে হলো: 
কোনো ক্লাসের ডেটা এবং মেথডকে বাইরের বিশ্বের থেকে গোপন করে রাখা এবং কেবল নির্দিষ্ট ইন্টারফেসের মাধ্যমে তার অ্যাক্সেস দেওয়া।


1.Public to access out of class
এটি ক্লাসের বাইরেও অ্যাক্সেস করা যায়।
এটি সব জায়গায় থেকে দেখা বা ব্যবহার করা যায়।

2. Private
এটি শুধুমাত্র সেই ক্লাসের ভিতরেই ব্যবহারযোগ্য।
ক্লাসের বাইরে অথবা সাবক্লাস থেকেও অ্যাক্সেস করা যায় না।

3. Protected
এটি ক্লাস এবং তার চাইল্ড ক্লাসের মধ্যে ব্যবহারযোগ্য।
কিন্তু ক্লাসের বাইরে থেকে অ্যাক্সেস করা যায় না।
*/
// class Validator{
//     public $errors = []; 

//     public function validate($data, $rules){
//        //
//        $this->errors[] = ' This email is required';
      
//     }
//     public function fails(){
//         //
//         return !empty($this->errors);
//     }
//     public function getErrors(){
//         return $this->errors;
//     }
// }

// $validator = new Validator;

// $validator->validate(['email'],['required']);

// if($validator->fails()){
//     die('Fails');
// }


class Product{
    public $name;
    private $price;

    public function productInfo(){
        echo $this->price = 20000;
    }
}

$product1 = new Product();
$product1->name = "Product1";
echo $product1->name . "\n";
// $product1->price = 6500;
// echo $product1->price;
$product1->productInfo();
?>