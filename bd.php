<?php
/*
Plugin Name: PBP Gravity Form BD Address
Plugin URI: http://projoktibangla.net
Description: This plugin add Bangladesh address type at gravity form address field.
Author: projoktibangla
Version: 1.0
Author URI: http://projoktibangla.net
*/
/*
Copyright (C) 2015  projoktibangla

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/



add_filter("gform_address_types", "bd_address", 10, 2);

function bd_address($address_types, $form_id){
$address_types["bangladesh"] = array(
"label" => "Bangladesh",
"country" => "Bangladesh",
"zip_label" => "Post Code",
"state_label" => "District",
"states" => array("Bagerhat"=>"Bagerhat", "Bandarban"=>"Bandarban", "Barguna"=>"Barguna", "Barisal"=>"Barisal", "Bhola"=>"Bhola", "Bogra"=>"Bogra", "Brahmanbaria"=>"Brahmanbaria", "Chandpur"=>"Chandpur", "Chapai Nawabganj"=>"Chapai Nawabganj", "Chittagong"=>"Chittagong", "Chuadanga"=>"Chuadanga", "Comilla"=>"Comilla", "Coxs Bazar"=>"Coxs Bazar", "Dhaka"=>"Dhaka", "Dinajpur"=>"Dinajpur", "Faridpur"=>"Faridpur", "Feni"=>"Feni", "Gaibandha"=>"Gaibandha", "Gazipur"=>"Gazipur", "Gopalganj"=>"Gopalganj", "Habiganj"=>"Habiganj", "Jaipurhat"=>"Jaipurhat", "Jamalpur"=>"Jamalpur", "Jessore"=>"Jessore", "Jhalokati"=>"Jhalokati", "Jhenaidah"=>"Jhenaidah", "Khagrachari"=>"Khagrachari", "Khulna"=>"Khulna", "Kishoreganj"=>"Kishoreganj", "Kurigram"=>"Kurigram", "Kushtia"=>"Kushtia", "Lakshmipur"=>"Lakshmipur", "Lalmonirhat"=>"Lalmonirhat", "Madaripur"=>"Madaripur", "Magura"=>"Magura", "Manikganj"=>"Manikganj", "Maulvibazar"=>"Maulvibazar", "Meherpur"=>"Meherpur", "Munshiganj"=>"Munshiganj", "Mymensingh"=>"Mymensingh", "Naogaon"=>"Naogaon", "Narail"=>"Narail", "Narayanganj"=>"Narayanganj", "Narsingdi"=>"Narsingdi", "Natore"=>"Natore", "Netrakona"=>"Netrakona", "Nilphamari"=>"Nilphamari", "Noakhali"=>"Noakhali", "Pabna"=>"Pabna", "Panchagarh"=>"Panchagarh", "Patuakhali"=>"Patuakhali", "Pirojpur"=>"Pirojpur", "Rajbari"=>"Rajbari", "Rajshahi"=>"Rajshahi", "Rangamati"=>"Rangamati", "Rangpur"=>"Rangpur", "Satkhira"=>"Satkhira", "Shariatpur"=>"Shariatpur", "Sherpur"=>"Sherpur", "Sirajganj"=>"Sirajganj", "Sunamganj"=>"Sunamganj", "Sylhet"=>"Sylhet", "Tangail"=>"Tangail", "Thakurgaon"=>"Thakurgaon")
);
return $address_types;
}

add_filter("gform_address_street", "change_address_street", 10, 2);
function change_address_street($label, $form_id){
    return "House & Street";
}

add_filter("gform_address_street2", "change_address_street2", 10, 2);
function change_address_street2($label, $form_id){
    return "Post Office";
}

add_filter("gform_address_city", "change_address_city", 10, 2);
function change_address_city($label, $form_id){
    return "Thana";
}
?>