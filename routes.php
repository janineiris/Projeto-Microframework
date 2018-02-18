<?php

  $route[] = ['/', 'HomeController@index'];
  $route[] = ['/home', 'HomeController@index'];
  $route[] = ['/posts', 'PostsController@index'];
  $route[] = ['/post/{id}/show', 'PostsController@show'];

  return $route;
