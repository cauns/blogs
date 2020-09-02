@extends('frontend.layouts.master')
@section('content')
    <div class="right_side">
        <div class="pad">
            <h3>{{ __('global.categories') }}</h3>
            <ul>
                <li><a class="current" href="http://www.free-css-templates.com/" title="Home">Home</a></li>
                <li><a href="http://www.free-css-templates.com/free_css_xhtml_templates/" title="Free Css/XHTML Templates for your Websites!">Templates</a></li>
                <li><a href="http://www.free-css-templates.com/css-techniques/" title="Css techniques">CSS Techniques</a></li>
                <li><a href="http://www.free-css-templates.com/internet-news/" title="Internet News">Internet</a></li>
                <li><a href="http://www.free-css-templates.com/photoshop-stuffs/" title="Photoshop Stuffs">Photoshop</a></li>
                <li><a href="http://www.free-css-templates.com/photoshop-webdesign-tutorials/" title="tutorials about webdesign and photoshop.">Tutorials</a></li>
                <li><a href="http://www.free-css-templates.com/snews-cms/" title="sNews CMS">sNews</a></li>
            </ul>
        </div>
    </div>

    <div id="left_side" class="main_fix">
        <div class="intro">
            <div class="pad">sNews is a completly free PHP and MySQL driven content management system for managing web content. Consisting of only one file, sNews is extremely lightweight, easy to install, and easy to use via a simple web interface.
                <br /><a href="http://www.solucija.com" title="sNews cms">Download </a>&nbsp; | &nbsp;<a href="http://www.solucija.com" title="sNews cms">Read more...</a>
            </div>
        </div>
        <div class="mpart">
            <h2>Webdesign</h2>
            <h3>Posted on April 11 , 2007 in <a href="#" title="">sNews</a></h3>
            <p>This is DkBlog, a free, fully standards-compliant CSS template designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>.

                This free template is released under a Creative Commons Attributions 2.5 license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)

            </p>
            <p>
                Here a code sample made with <a href="http://www.free-css-templates.com/code2css.php" title="Source code styled with CSS">Code2CSS</a>:
            </p>
            <ol class="code">
                <li class="t0">for ($i = 0; $i &lt; $num_kw; $i++) {</li>
                <li class="t2"><code>$keywords = trim($kws[$i]);</code></li>
                <li class="t2"><code>$value .= &quot; keywords_meta LIKE '%$keywords%' &quot;;</code></li>
                <li class="t2"><code>if ($i &lt; $num_kw-1) {</code></li>
                <li class="t3"><code>$value .= &quot; OR &quot;;</code></li>
                <li class="t2"><code>}</code></li>
                <li class="t0">}</li>
            </ol>
            <p>Blockquote example:</p>
            <blockquote>
                <p>The Extensible HyperText Markup Language, or XHTML, is a markup language that has the same depth of expression as HTML, but with a syntax that conform to XML syntax.</p>
            </blockquote>
            <div class="date"><a href="#" title="#">Comments (5)</a></div>
            <h2>Cascading Style Sheets</h2>
            <h3>Posted on April 10 , 2007 in <a href="#" title="">Internet</a></h3>
            <div class="rs">
                <strong>List example</strong>:
                <ul>
                    <li>list line 1</li>
                    <li>list line 2
                        <ul>
                            <li>sublist line a</li>
                            <li>sublist line b</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <p>In computing, <b>Cascading Style Sheets</b> (<b>CSS</b>) is a <a href="http://en.wikipedia.org/wiki/Stylesheet_language" title="Stylesheet language">stylesheet language</a> used to describe the presentation of a document written in a <a href="http://en.wikipedia.org/wiki/Markup_language" title="Markup language">markup language</a>. Its most common application is to style <a href="http://en.wikipedia.org/wiki/Web_page" title="Web page">web pages</a> written in <a href="http://en.wikipedia.org/wiki/HTML" title="HTML">HTML</a> and <a href="http://en.wikipedia.org/wiki/XHTML" title="XHTML">XHTML</a>, but the language can be applied to any kind of <a href="http://en.wikipedia.org/wiki/XML" title="XML">XML</a> document, including <a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics" title="Scalable Vector Graphics">SVG</a> and <a href="http://en.wikipedia.org/wiki/XUL" title="XUL">XUL</a>. The CSS specifications are maintained by the <a href="http://en.wikipedia.org/wiki/World_Wide_Web_Consortium" title="World Wide Web Consortium">World Wide Web Consortium</a> (W3C).</p>
            <p>CSS has various levels and profiles. Each level of CSS builds upon the last, typically adding new features and are typically denoted as CSS1, CSS2, and CSS3. Profiles are typically a subset of one or more levels of CSS built for a particular device or user interface. Currently there are profiles for mobile devices, printers, and television sets. Profiles should not be confused with media types which were added in CSS2.</p>
            <div class="date"><a href="#" title="#">Comments (11)</a></div>
        </div>
    </div>
@endsection