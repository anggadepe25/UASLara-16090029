<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 06/05/2019
 * Time: 11:57
 */
?>

<div id="left-menu">
    <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
                <h1 class="animated fadeInLeft">21:00</h1>
                <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>

            <li><a href="{{route ('dashboard') }}"><span class="fa fa-dashboard"></span> Dashboard</a></li>
            <li class="active ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-suitcase fa"></span>Tour
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{ route('tour') }}">Tour </a></li>
                    <li><a href="{{ route('tour.create') }}">Tambah Tour </a></li>
                </ul>
            </li>
            <li class="active ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-bus fa"></span>Kategori
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{ route ('kategori') }}">Kategori</a></li>
                    <li><a href="{{ route ('kategori.create') }}">Tambah kategori</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
