<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('aset/css/bootstrap.css')}}" rel="stylesheet">
    <title>Gudang</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-success p-3" >
        <div class="container">
        <img class= "rounded-circle" src="{{asset('aset/img/kotak.png')}}" alt=""style = "width:50px; margin-right:10px;">
          <a class="navbar-brand" href="/">Gudang Barang</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('list')}}">List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">My Sosial Media</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 

      @yield('containt 1')
      @yield('containt 2')
      @yield('containt 3')
      @yield('containt 4')

@extends('layout.footer')