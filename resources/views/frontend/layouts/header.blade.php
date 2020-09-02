<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Free DkBlog Template</title>
    <meta http-equiv="Content-Language" content="English"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="author" content="David Herreman (www.free-css-templates.com)"/>
    <meta name="description" content="Free Css Template"/>
    <meta name="keywords" content="free,css,template"/>
    <meta name="Robots" content="index,follow"/>
    <meta name="Generator" content="sNews 1.5"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="screen"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss/"/>
</head>
<body>
<div id="topbar">
    <div class="content">

        <div class="url">
            <a href="{{ route('frontend.home') }}" title="">{{ setting('site.title') }}</a>
        </div>
    </div>
</div>

<div id="top">
    <div class="content">
        <div id="menu">
            {{ menu('Frontend Main','frontend.layouts.menu') }}
        </div>
        <h1><a href="{{ route('frontend.home') }}" title="{{ setting('site.title') }}">{{ setting('site.title') }}</a></h1>
        <h2>{{ setting('site.description') }}</h2>
    </div>
</div>
<div class="content">