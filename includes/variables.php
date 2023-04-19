<?php
$passwordCorrect = 'hello';
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.";

// Table de objects dans un class
// Order de object is not important because we gave them the class
$bonnets = [
    (new Bonnet())
        ->setName("Bonnet en laine")
        ->setImg("img/fbonnet.webp")
        ->setPrice(10)
        ->setDescription($description),
    (new Bonnet())
        ->setName("Bonnet en laine bio")
        ->setPrice(14)
        ->setImg("https://img.ltwebstatic.com/images3_pi/2022/06/02/1654148169d80348aa9b40ae1768ef1eb5dc88c3ab_thumbnail_600x.webp")
        ->setDescription($description),
    (new Bonnet())
        ->setName("Bonnet en laine et cachemire")
        ->setPrice(10)
        ->setImg("img/hbonnet.webp")
        ->setDescription($description),
    (new Bonnet())
        ->setName("Bonnet arc-en-ciel")
        ->setPrice(10)
        ->setImg("https://www.montparel.com/12175-large_default/beechfield-bf045-bonnet-avec-rabat.jpg")
        ->setDescription($description),
];

// Table de object 
// Order de object is very important, start from 0,1,2,3...
// $bonnets = [
//     ["Bonnet en laine", 10, "$description", "img/fbonnet.webp"],
//     ["Bonnet en laine bio", 14, "$description", "https://img.ltwebstatic.com/images3_pi/2022/06/02/1654148169d80348aa9b40ae1768ef1eb5dc88c3ab_thumbnail_600x.webp"],
//     ["Bonnet en laine et cachemire", 20, "$description", "img/hbonnet.webp"],
//     ["Bonnet arc-en-ciel", 12, "$description", "https://www.montparel.com/12175-large_default/beechfield-bf045-bonnet-avec-rabat.jpg"],
// ];
