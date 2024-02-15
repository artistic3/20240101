<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 1, 7',
		'Trio values(Fav: 6)' =>  '6, 9, 2, 3, 10',
		'Trio values(Fav: 1)' =>  '6, 7, 1, 4, 2, 11',
		'Trio values(Fav: 7)' =>  '7, 1, 4, 2, 8, 3',
		'interF(count: 2)' =>  '2, 3',
		'unionF(count: 11)' =>  '6, 7, 1, 4, 9, 2, 11, 8, 3, 5, 10',
		'inter' =>  '2, 3',
		'Place'  =>  '2',
		'places' => '2',
		'WPs'    => '6, 2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '4, 8',
		'Trio values(Fav: 4)' =>  '4, 2, 7, 6, 3, 1',
		'Trio values(Fav: 8)' =>  '8, 10, 1',
		'interF(count: 1)' =>  '1',
		'unionF(count: 8)' =>  '8, 4, 2, 10, 7, 6, 3, 1',
		'inter' =>  '1',
		'Place'  =>  '1',
		'places' => '1',
		'WPs'    => '8, 1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '7',
		'favorites' => '7',
		'Trio values(Fav: 7)' =>  '7, 2, 3, 6, 9, 11',
		'interF(count: 11)' =>  '7, 2, 3, 6, 9, 11, 8, 4, 12, 1, 5',
		'unionF(count: 11)' =>  '7, 2, 3, 6, 9, 11, 8, 4, 12, 1, 5',
		'inter' =>  '11',
		'Place'  =>  '11',
		'places' => '11',
		'WPs'    => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '3, 1, 11',
		'Trio values(Fav: 3)' =>  '1, 9, 3, 11, 12, 2',
		'Trio values(Fav: 1)' =>  '1, 9, 3, 12, 6, 2',
		'Trio values(Fav: 11)' =>  '',
		'interF(count: 0)' =>  '',
		'unionF(count: 12)' =>  '1, 9, 3, 11, 12, 6, 2, 10, 8, 5, 7, 4',
		'inter' =>  '1, 9, 12, 2, 10, 5, 7, 4',
		'Place'  =>  '1',
		'places' => '1',
		'WPs'    => '1',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '2',
		'favorites' => '7, 1, 2',
		'Trio values(Fav: 7)' =>  '7, 2, 4, 10, 1, 6',
		'Trio values(Fav: 1)' =>  '2, 7, 4, 10, 1, 12',
		'Trio values(Fav: 2)' =>  '2, 7, 4, 10, 12, 8',
		'interF(count: 7)' =>  '2, 7, 4, 10, 8, 5, 9',
		'unionF(count: 11)' =>  '2, 7, 4, 10, 1, 12, 6, 3, 8, 5, 9',
		'inter' =>  '2, 4, 10, 5, 9',
		'Place'  =>  '2',
		'places' => '2',
		'WPs'    => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '8',
		'favorites' => '11, 8',
		'Trio values(Fav: 11)' =>  '1, 4, 7',
		'Trio values(Fav: 8)' =>  '8, 12, 2',
		'interF(count: 0)' =>  '',
		'unionF(count: 6)' =>  '8, 12, 1, 4, 2, 7',
		'WPs'    => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '3',
		'favorites' => '2, 3',
		'Trio values(Fav: 2)' =>  '3, 2, 5, 7, 8, 1',
		'Trio values(Fav: 3)' =>  '3, 9, 2, 11, 10, 1',
		'interF(count: 4)' =>  '3, 2, 1, 4',
		'unionF(count: 12)' =>  '3, 9, 2, 5, 7, 8, 11, 10, 1, 4, 6, 12',
		'inter' =>  '2',
		'Place'  =>  '2',
		'places' => '2',
		'WPs'    => '3',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '4',
		'favorites' => '11, 4',
		'Trio values(Fav: 11)' =>  '5, 2, 9',
		'Trio values(Fav: 4)' =>  '4, 11, 8, 1, 6, 2',
		'interF(count: 2)' =>  '2, 9',
		'unionF(count: 12)' =>  '4, 11, 8, 1, 5, 6, 2, 7, 9, 3, 12, 10',
		'inter' =>  '9',
		'Place'  =>  '9',
		'places' => '9',
		'WPs'    => '4, 2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '3',
		'favorites' => '5, 1, 3',
		'Trio values(Fav: 5)' =>  '3, 1, 8, 5, 10, 11',
		'Trio values(Fav: 1)' =>  '3, 1, 7, 8, 9, 5',
		'Trio values(Fav: 3)' =>  '3, 1, 7, 9, 2, 4',
		'interF(count: 3)' =>  '3, 1, 10',
		'unionF(count: 12)' =>  '3, 1, 7, 8, 9, 5, 2, 12, 4, 10, 11, 6',
		'WPs'    => '3',
	],
];
