<div class="grid">

<!-- ===================================== 
    INSTRUCTIONS 
===================================== -->
<h3>Getting Started</h3>
<ul class="tabs">
<li><a href="#instructions">Instructions</a></li>
</ul>

    <div id="instructions" class="tab-content">
    <div class="col_8">
    <h4><i class="icon-wrench"></i> Setup</h4>
    <ol>
    <li><a href="http://www.99lime.com/downloads/">Download HTML KickStart</a></li>
    <li>Include jQuery and HTML KickStart
<pre>
&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/kickstart.js&quot;&gt;&lt;/script&gt; &lt;!-- KICKSTART --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/kickstart.css&quot; media=&quot;all&quot; /&gt; &lt;!-- KICKSTART --&gt;
</pre>
    </li>
    <li>Copy Elements into your HTML</li>
    </ol>
    </div>
    <div class="col_1"></div>
    <div class="col_3">
    <h4><i class="icon-globe"></i> Browsers</h4>
    HTML KickStart Tested and working in IE 8+, Safari, Chrome, Firefox, Opera, Safari IOS, Browser and Chrome Android. 
    <h4>Notes</h4>
    Don't forget to use an HTML5 Doctype
    <code>&lt;!DOCTYPE html&gt;</code>
    </div>
    </div>
    
<!-- ===================================== 
    BUTTONS 
===================================== -->
<style type="text/css">
#btn-example .button-bar{margin-bottom:10px;}
</style>

<h3 id="buttons">Buttons</h3>
<ul class="tabs">
<li><a href="#btn-example">Example</a></li>
<li><a href="#btn-sizes">Sizes</a></li>
<li><a href="#btn-icons">With Icons</a></li>
<li><a href="#btn-colors">Colors</a></li>
<li><a href="#btn-styles">Styles</a></li>
<li><a href="#btn-bar">Button Bar</a></li>
</ul>
    
    <style type="text/css">
    #btn-example a.button, #btn-example button{margin-bottom:10px;}
    </style>

    <div id="btn-example" class="tab-content">
    <div class="col_3">
    <h4>Buttons</h4>
    <button>Button</button><br />
    <a class="button" href="">A.button</a><br />
    <button class="small">Small</button> <br />
    <button class="small" disabled="disabled">Small (disabled)</button><br />
    <button class="medium">Medium</button><br />
    <button class="large">Large</button>
    </div>
    
    <!-- BUTTONS W/ICON -->
    <div class="col_3">
    <h4>With Icons</h4>
    <button class="small"><i class="icon-picture"></i> Small</button><br />
    <button class="medium"><i class="icon-coffee"></i> Medium</button><br />
    <button class="large"><i class="icon-leaf"></i> Large</button><br />
    </div>
    
    <!-- BUTTON VARIATIONS -->
    <div class="col_3">
    <h4>Colors</h4>
    <button class="blue"><i class="icon-star"></i> .blue</button><br />
    <a class="button orange" href=""><i class="icon-music"></i> .orange</a><br />
    <button class="small pink"><i class="icon-plus-sign"></i> .pink</button><br /> 
    <button class="medium green"><i class="icon-play-circle"></i> .green</button><br />
    <button class="large red"><i class="icon-minus-sign"></i> .red</button>
    </div>
    
    <!-- BUTTON STYLES -->
    <div class="col_3">
    <h4>Styles</h4>
    <button>default</button><br />
    <button class="pill"><i class="icon-star"></i> .pill</button><br />
    <a class="button pop" href=""><i class="icon-music"></i> .pop</a><br />
    <button class="inset"><i class="icon-plus-sign"></i> .inset</button> <br />
    <button class="square"><i class="icon-minus-sign"></i> .square</button>
    </div><div class="clear"></div>
    
    <div class="col_12">
    <h4>Button Bar</h4>
    <ul class="button-bar">
    <li><a href=""><i class="icon-pencil"></i> Edit</a></li>
    <li><a href=""><i class="icon-tag"></i> Tag</a></li>
    <li><a href=""><i class="icon-upload-alt"></i> Upload</a></li>
    <li><a href=""><i class="icon-plus-sign"></i></a></li>
    </ul>&nbsp;&nbsp;
    
    <ul class="button-bar">
    <li><a href=""><i class="icon-folder-open"></i></a></li>
    <li><a href=""><i class="icon-file"></i></a></li>
    <li><a href=""><i class="icon-trash"></i></a></li>
    <li><a href=""><i class="icon-wrench"></i></a></li>
    </ul>&nbsp;&nbsp;
    
    <ul class="button-bar">
    <li><a href="">Item1</a></li>
    <li><a href=""><i class="icon-globe"></i> Item2</a></li>
    <li><a href="">Item3</a></li>
    <li><a href="">Item4</a></li>
    </ul>&nbsp;&nbsp;
    
    <ul class="button-bar">
    <li><a href=""><i class="icon-caret-left"></i></a></li>
    <li><a href=""><i class="icon-caret-right"></i></a></li>
    </ul>
    </div>
    </div>
    
    <div id="btn-sizes" class="tab-content">
<pre>
&lt;!-- Button Sizes --&gt;
&lt;button&gt;Button&lt;/button&gt;
&lt;a class=&quot;button&quot; href=&quot;&quot;&gt;A.button&lt;/a&gt;
&lt;button class=&quot;small&quot;&gt;Small&lt;/button&gt;
&lt;button class=&quot;small&quot; disabled=&quot;disabled&quot;&gt;Small (disabled)&lt;/button&gt;
&lt;button class=&quot;medium&quot;&gt;Medium&lt;/button&gt;
&lt;button class=&quot;large&quot;&gt;Large&lt;/button&gt;</pre>
    </div>
    
    <div id="btn-icons" class="tab-content">
<pre>
&lt;!-- Buttons w/Icons --&gt;
&lt;button class=&quot;small&quot;&gt;&lt;i class=&quot;icon-picture&quot;&gt;&lt;/i&gt; Small&lt;/button&gt;
&lt;button class=&quot;medium&quot;&gt;&lt;i class=&quot;icon-coffee&quot;&gt;&lt;/i&gt; Medium&lt;/button&gt;
&lt;button class=&quot;large&quot;&gt;&lt;i class=&quot;icon-leaf&quot;&gt;&lt;/i&gt; Large&lt;/button&gt;</pre>
    </div>
    
    <div id="btn-colors" class="tab-content">
<pre>
&lt;!-- Buttons w/Colors --&gt;
&lt;button class=&quot;blue&quot;&gt;&lt;i class=&quot;icon-star&quot;&gt;&lt;/i&gt; .blue&lt;/button&gt;
&lt;a class=&quot;button orange&quot; href=&quot;&quot;&gt;&lt;i class=&quot;icon-music&quot;&gt;&lt;/i&gt; .orange&lt;/a&gt;
&lt;button class=&quot;small pink&quot;&gt;&lt;i class=&quot;icon-plus-sign&quot;&gt;&lt;/i&gt; .pink&lt;/button&gt;
&lt;button class=&quot;medium green&quot;&gt;&lt;i class=&quot;icon-play-circle&quot;&gt;&lt;/i&gt; .green&lt;/button&gt;
&lt;button class=&quot;large red&quot;&gt;&lt;i class=&quot;icon-minus-sign&quot;&gt;&lt;/i&gt; .red&lt;/button&gt;</pre>
    </div>
    
    <div id="btn-styles" class="tab-content">
<pre>
&lt;!-- Default (no style) --&gt;
&lt;button&gt;default&lt;/button&gt;

&lt;!-- Pill --&gt;
&lt;button class=&quot;pill&quot;&gt;&lt;i class=&quot;icon-star&quot;&gt;&lt;/i&gt; .pill&lt;/button&gt;

&lt;!-- Pop --&gt;
&lt;a class=&quot;button pop&quot; href=&quot;&quot;&gt;&lt;i class=&quot;icon-music&quot;&gt;&lt;/i&gt; .pop&lt;/a&gt;

&lt;!-- Inset --&gt;
&lt;button class=&quot;inset&quot;&gt;&lt;i class=&quot;icon-plus-sign&quot;&gt;&lt;/i&gt; .inset&lt;/button&gt;

&lt;!-- Square --&gt;
&lt;button class=&quot;square&quot;&gt;&lt;i class=&quot;icon-minus-sign&quot;&gt;&lt;/i&gt; .square&lt;/button&gt;
</pre>
    </div>
    
    <div id="btn-bar" class="tab-content">
<pre>
&lt;!-- Button Bar w/icons --&gt;
&lt;ul class=&quot;button-bar&quot;&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-pencil&quot;&gt;&lt;/i&gt; Edit&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-tag&quot;&gt;&lt;/i&gt; Tag&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-upload-alt&quot;&gt;&lt;/i&gt; Upload&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-plus-sign&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>

<!-- ===================================== 
    LISTS 
===================================== -->
<h3 id="lists">Lists</h3>
<ul class="tabs">
<li><a href="#list-example">Example</a></li>
<li><a href="#list-ul">UL</a></li>
<li><a href="#list-ol">OL</a></li>
<li><a href="#list-checks">UL.icons</a></li>
<li><a href="#list-alt">UL.alt</a></li>
</ul>

    <div id="list-example" class="tab-content">
    <div class="col_3">
    <h4>Unordered List</h4>
    <ul>
    <li>Apple</li>
    <li>Banana</li>
    <li>Orange</li>
    <li>Pear</li>
    </ul>
    </div>
    
    <div class="col_3">
    <h4>Ordered List</h4>
    <ol>
    <li>Apple</li>
    <li>Banana</li>
    <li>Orange</li>
    <li>Pear</li>
    </ol>
    </div>
    
    <div class="col_3">
    <h4>UL.icons</h4>
    <ul class="icons">
    <li><i class="icon-ok"></i>Apple</li>
    <li><i class="icon-ok"></i>Banana</li>
    <li><i class="icon-ok"></i>Orange</li>
    <li><i class="icon-remove"></i>Pear</li>
    </ul>
    </div>
    
    <div class="col_3">
    <h4>UL.alt</h4>
    <ul class="alt">
    <li>Apple</li>
    <li>Banana</li>
    <li>Orange</li>
    <li>Pear</li>
    </ul>
    </div>
    </div>
    
    <div id="list-ul" class="tab-content">
<pre>
&lt;!-- Unordered List --&gt;
&lt;ul&gt;
&lt;li&gt;Apple&lt;/li&gt;
&lt;li&gt;Banana&lt;/li&gt;
&lt;li&gt;Orange&lt;/li&gt;
&lt;li&gt;Pear&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
    
    <div id="list-ol" class="tab-content">
<pre>
&lt;!-- Ordered List --&gt;
&lt;ol&gt;
&lt;li&gt;Apple&lt;/li&gt;
&lt;li&gt;Banana&lt;/li&gt;
&lt;li&gt;Orange&lt;/li&gt;
&lt;li&gt;Pear&lt;/li&gt;
&lt;/ol&gt;</pre>
    </div>
    
    <div id="list-checks" class="tab-content">
<pre>
&lt;!-- List Icons --&gt;
&lt;ul class=&quot;icons&quot;&gt;
&lt;li&gt;&lt;i class=&quot;icon-ok&quot;&gt;&lt;/i&gt;Apple&lt;/li&gt;
&lt;li&gt;&lt;i class=&quot;icon-ok&quot;&gt;&lt;/i&gt;Banana&lt;/li&gt;
&lt;li&gt;&lt;i class=&quot;icon-ok&quot;&gt;&lt;/i&gt;Orange&lt;/li&gt;
&lt;li&gt;&lt;i class=&quot;icon-remove&quot;&gt;&lt;/i&gt;Pear&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
    
    <div id="list-alt" class="tab-content">
<pre>
&lt;!-- List Alternative Style --&gt;
&lt;ul class=&quot;alt&quot;&gt;
&lt;li&gt;Apple&lt;/li&gt;
&lt;li&gt;Banana&lt;/li&gt;
&lt;li&gt;Orange&lt;/li&gt;
&lt;li&gt;Pear&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>

<!-- ===================================== 
    MENUS
===================================== -->
<h3 id="menus">Menus</h3>
<ul class="tabs">
<li><a href="#menu-example">Example</a></li>
<li><a href="#menu-horizontal">Horizontal</a></li>
<li><a href="#menu-vertical">Vertical</a></li>
<li><a href="#menu-vertical-right">Vertical.right</a></li>
</ul>

    <div id="menu-example" class="tab-content">
    <p>These Menus are optionallly responsive when using a responsive grid: <code>.grid</code> or <code>.grid.flex</code></p>
    <!-- MENU VERTICAL -->
    <div class="col_3">
    <h4>Vertical Left</h4>
    <ul class="menu vertical">
    <li class="current"><a href="">Item 1</a></li>
    <li><a href="">Item 2</a></li>
    <li><a href="">Item 3</a>
        <ul>
        <li><a href="">Sub Item that is super long and we don't want it to break the menu</a></li>
        <li><a href="">Sub Item</a>
            <ul>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            </ul>
        </li>
        <li><a href="">Sub Item</a></li>
        </ul>
    </li>
    <li><a href="">Item 4</a></li>
    </ul>
    </div>
    
    <!-- MENU HORIZONTAL -->
    <div class="col_6">
    <h4>Horizontal</h4>
    <ul class="menu">
    <li class="current"><a href="">Item 1</a></li>
    <li><a href="">Item 2</a></li>
    <li><a href=""><i class="icon-inbox"></i> Item 3</a>
        <ul>
        <li><a href=""><i class="icon-cog"></i> Sub Item</a></li>
        <li><a href=""><i class="icon-envelope-alt"></i> Sub Item</a>
            <ul>
            <li><a href=""><i class="icon-wrench"></i> Sub Item</a></li>
            <li><a href=""><i class="icon-camera-retro"></i> Sub Item</a></li>
            <li><a href=""><i class="icon-coffee"></i> Sub Item</a></li>
            <li><a href=""><i class="icon-twitter"></i> Sub Item</a></li>
            </ul>
        </li>
        <li class="divider"><a href=""><i class="icon-trash"></i> li.divider</a></li>
        </ul>
    </li>
    <li><a href="">Item 4</a></li>
    </ul>
    </div>
    
    <!-- MENU VERTICAL RIGHT -->
    <div class="col_3">
    <h4>Vertical Right</h4>
    <ul class="menu vertical right">
    <li><a href="">Item 1</a></li>
    <li><a href="">Item 2</a></li>
    <li><a href="">Item 3</a>
        <ul>
        <li><a href="">Sub Item</a></li>
        <li class="current"><a href="">Sub Item</a>
            <ul>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            <li><a href="">Sub Item</a></li>
            </ul>
        </li>
        <li><a href="">Sub Item</a></li>
        </ul>
    </li>
    <li><a href="">Item 4</a></li>
    </ul>
    </div>
    </div>
    
    <div id="menu-vertical" class="tab-content">
<pre>
&lt;!-- Menu Vertical Left --&gt;
&lt;ul class=&quot;menu vertical&quot;&gt;
&lt;li class=&quot;current&quot;&gt;&lt;a href=&quot;&quot;&gt;Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 3&lt;/a&gt;
    &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item that is super long and we don't want it to break the menu&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;
        &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
    
    <div id="menu-horizontal" class="tab-content">
<pre>
&lt;!-- Menu Horizontal --&gt;
&lt;ul class=&quot;menu&quot;&gt;
&lt;li class=&quot;current&quot;&gt;&lt;a href=&quot;&quot;&gt;Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-inbox&quot;&gt;&lt;/i&gt; Item 3&lt;/a&gt;
    &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-cog&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-envelope-alt&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;
        &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-wrench&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-camera-retro&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-coffee&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-twitter&quot;&gt;&lt;/i&gt; Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;a href=&quot;&quot;&gt;&lt;i class=&quot;icon-trash&quot;&gt;&lt;/i&gt; li.divider&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
    
    <div id="menu-vertical-right" class="tab-content">
<pre>
&lt;!-- Menu Vertical Right --&gt;
&lt;ul class=&quot;menu vertical right&quot;&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 3&lt;/a&gt;
    &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;current&quot;&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;
        &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Item 4&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;&lt;/pre&gt;
    </div>

<!-- ===================================== 
    TABLES 
===================================== -->
<h3 id="tables">Tables</h3>
<ul class="tabs">
<li><a href="#table-example">Example</a></li>
<li><a href="#table">Table</a></li>
<li><a href="#table-wside">Table w/side TH</a></li>
<li><a href="#table-styles">Table Styles</a></li>
</ul>

    <div id="table-example" class="tab-content">
    <div class="col_6">
    <h4>Table (default)</h4>
    <table cellspacing="0" cellpadding="0">
    <thead><tr>
        <th>Item1</th>
        <th>Item2</th>
        <th>Item3</th>
    </tr></thead>
    <tbody><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr></tbody>
    </table>
    </div>
    
    <div class="col_6">
    <h4>Table.striped</h4>
    <table class="striped" cellspacing="0" cellpadding="0">
    <thead><tr>
        <th>&nbsp;</th>
        <th>Item2</th>
        <th>Item3</th>
    </tr></thead>
    <tbody><tr>
        <th>Item1</th>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <th>Item1</th>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <th>Item1</th>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <th>Item1</th>
        <td>Item2</td>
        <td>Item3</td>
    </tr></tbody>
    </table>
    </div><div class="clear"></div>
    
    <div class="col_6">
    <h4>Table.tight</h4>
    <table class="tight" cellspacing="0" cellpadding="0">
    <thead><tr>
        <th>Item1</th>
        <th>Item2</th>
        <th>Item3</th>
    </tr></thead>
    <tbody><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr><tr>
        <td>Item1</td>
        <td>Item2</td>
        <td>Item3</td>
    </tr></tbody>
    </table>
    </div>
    
    <div class="col_6">
    <h4>Table.sortable</h4>
    <table class="sortable" cellspacing="0" cellpadding="0">
    <thead><tr>
        <th>Name</th>
        <th>Number</th>
        <th>Color</th>
        <th>Actions</th>
    </tr></thead>
    <tbody><tr>
        <td>Joshua</td>
        <td>555-4325</td>
        <td>Blue</td>
        <td><a href=""><i class="icon-pencil"></i></a> 
        <a href=""><i class="icon-minus-sign"></i></a></td>
    </tr><tr>
        <td>Peter</td>
        <td>555-5698</td>
        <td>Gold</td>
        <td><a href=""><i class="icon-pencil"></i></a> 
        <a href=""><i class="icon-minus-sign"></i></a></td>
    </tr><tr>
        <td>Mary</td>
        <td>666-7654</td>
        <td>Red</td>
        <td><a href=""><i class="icon-pencil"></i></a> 
        <a href=""><i class="icon-minus-sign"></i></a></td>
    </tr><tr>
        <td>Gretty</td>
        <td>555-6732</td>
        <td>Pink</td>
        <td><a href=""><i class="icon-pencil"></i></a> 
        <a href=""><i class="icon-minus-sign"></i></a></td>
    </tr></tbody>
    </table>
    </div>
    </div>
    
    <div id="table" class="tab-content">
<pre>
&lt;!-- Table --&gt;
&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;
&lt;thead&gt;&lt;tr&gt;
    &lt;th&gt;Item1&lt;/th&gt;
    &lt;th&gt;Item2&lt;/th&gt;
    &lt;th&gt;Item3&lt;/th&gt;
&lt;/tr&gt;&lt;/thead&gt;
&lt;tbody&gt;&lt;tr&gt;
    &lt;td&gt;Item1&lt;/td&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;td&gt;Item1&lt;/td&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;td&gt;Item1&lt;/td&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;td&gt;Item1&lt;/td&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;/tbody&gt;
&lt;/table&gt;</pre>
    </div>
    
    <div id="table-wside" class="tab-content">
<pre>
&lt;!-- Table w/Side --&gt;
&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot;&gt;
&lt;thead&gt;&lt;tr&gt;
    &lt;th&gt;&nbsp;&lt;/th&gt;
    &lt;th&gt;Item2&lt;/th&gt;
    &lt;th&gt;Item3&lt;/th&gt;
&lt;/tr&gt;&lt;/thead&gt;
&lt;tbody&gt;&lt;tr&gt;
    &lt;th&gt;Item1&lt;/th&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;th&gt;Item1&lt;/th&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;th&gt;Item1&lt;/th&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;tr&gt;
    &lt;th&gt;Item1&lt;/th&gt;
    &lt;td&gt;Item2&lt;/td&gt;
    &lt;td&gt;Item3&lt;/td&gt;
&lt;/tr&gt;&lt;/tbody&gt;
&lt;/table&gt;</pre>
    </div>
    
    <div id="table-styles" class="tab-content">
<pre>
&lt;!-- Table striped --&gt;
&lt;table class=&quot;striped&quot;&gt;
...
&lt;/table&gt;

&lt;!-- Table tight --&gt;
&lt;table class=&quot;tight&quot;&gt;
...
&lt;/table&gt;

&lt;!-- Table sortable --&gt;
&lt;table class=&quot;sortable&quot;&gt;
...
&lt;/table&gt;

&lt;!-- Table combined Styles --&gt;
&lt;table class=&quot;striped tight sortable&quot;&gt;
...
&lt;/table&gt;
</pre>
    </div>

<!-- ===================================== 
    TOOL TIPS 
===================================== -->
<h3 id="tooltips">ToolTips</h3>
<ul class="tabs">
<li><a href="#tooltip-example">Example</a></li>
<li><a href="#tooltip-positions">Positions</a></li>
<li><a href="#tooltip-html">w/ HTML Content</a></li>
</ul>

    <div id="tooltip-example" class="tab-content">
    <div class="col_4">
    <h4>Tooltips</h4>
    <p>Tooltips are awesome. These tooltips are designed to mimic the default browser tooltips - smart, aware of the edge of the browser window. Simple.</p>
    <p>Hover over the examples on the right to preview.</p>
    <p>Use:<br />
    <code>class="tooltip"</code> + <br />
    <code class="tooltip" title="my tooltip content">title="my tooltip content"</code></p>
    </div>
    
    <div class="col_4">
    <h4>Tooltip Positions</h4>
    <ul>
    <li><code class="tooltip" title="This is a default (top) tooltip">.tooltip</code> (default)</li>
    <li><code class="tooltip-top" title="This is a Top tooltip">.tooltip-top</code></li>
    <li><code class="tooltip-right" title="This is a Right tooltip">.tooltip-right</code></li>
    <li><code class="tooltip-left" title="This is a Left tooltip">.tooltip-left</code></li>
    <li><code class="tooltip-bottom" title="This is a Bottom tooltip">.tooltip-bottom</code></li>
    </ul>
    </div>
    
    <div class="col_4">
    <h4>Tooltips with HTML Content</h4>
    <code>.tooltip</code> + <code>data-content="#ID"</code>
    <hr />
    <button class="tooltip medium orange pill" data-content="#tooltipcontentID">Hover Over Me</button>&nbsp;
    <button class="tooltip medium blue pill" data-content="#tooltipcontentID" data-action="click">Click Me</button>
    <div class="tooltip-content" id="tooltipcontentID"><h5>HTML Content</h5>
    <img src="http://placehold.it/180x150/4D99E0/ffffff.png&text=180x150" width="180" height="150" />
    <p>This is more HTML content. You can place any HTML in this tooltip.</p></div>
    </div>
    </div>
    
    <div id="tooltip-positions" class="tab-content">
<pre>
&lt;!-- Tooltip Default (top) --&gt;
&lt;span class=&quot;tooltip&quot; title=&quot;This is a default (top) tooltip&quot;&gt;.tooltip&lt;/span&gt;

&lt;!-- Tooltip Top --&gt;
&lt;span class=&quot;tooltip-top&quot; title=&quot;This is a Top tooltip&quot;&gt;.tooltip-top&lt;/span&gt;

&lt;!-- Tooltip Right --&gt;
&lt;span class=&quot;tooltip-right&quot; title=&quot;This is a Right tooltip&quot;&gt;.tooltip-right&lt;/span&gt;

&lt;!-- Tooltip Left --&gt;
&lt;span class=&quot;tooltip-left&quot; title=&quot;This is a Left tooltip&quot;&gt;.tooltip-left&lt;/span&gt;

&lt;!-- Tooltip Bottom --&gt;
&lt;span class=&quot;tooltip-bottom&quot; title=&quot;This is a Bottom tooltip&quot;&gt;.tooltip-bottom&lt;/span&gt;
</pre>
    </div>
    
    <div id="tooltip-html" class="tab-content">
<pre>
&lt;!-- Hover Action --&gt;
&lt;button class=&quot;tooltip medium orange pill&quot; data-content=&quot;#tooltipcontentID&quot;&gt;Hover Over Me&lt;/button&gt;

&lt;!-- Click Action --&gt;
&lt;button class=&quot;tooltip medium blue pill&quot; data-content=&quot;#tooltipcontentID&quot; data-action=&quot;click&quot;&gt;Click Me&lt;/button&gt;

&lt;!-- Tooltip Content --&gt;
&lt;div class=&quot;tooltip-content&quot; id=&quot;tooltipcontentID&quot;&gt;&lt;h5&gt;HTML Content&lt;/h5&gt;
&lt;img src=&quot;http://placehold.it/180x150/4D99E0/ffffff.png&amp;text=180x150&quot; width=&quot;180&quot; height=&quot;150&quot; /&gt;
&lt;p&gt;This is more HTML content. You can place any HTML in this tooltip.&lt;/p&gt;&lt;/div&gt;
</pre>
    </div>
    
<!-- ===================================== 
    TYPOGRAPHY 
===================================== -->

<h3 id="typography">Typography</h3>
<ul class="tabs">
<li><a href="#type-example">Example</a></li>
<li><a href="#type-headings">Headings</a></li>
<li><a href="#type-paragraphs">Paragraphs</a></li>
<li><a href="#type-blockquotes">Blockquote</a></li>
<li><a href="#type-blockquotes-small">Blockquote.small</a></li>
<li><a href="#type-inline-styles">Inline Styles</a></li>
<li><a href="#type-address">Address</a></li>
</ul>

    <div id="type-example" class="tab-content">
    <div class="col_8">
    <h4>Paragraphs</h4>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in 
    hendrerit in vulputate velit esse molestie consequat</p>
    <p>El illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim 
    qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam 
    liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim 
    placerat facer possim assum.</p>
    
    <!-- BLOCKQUOTES -->
    <h4>Blockquote</h4>
    <blockquote><p>lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
    in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
    et iusto odio
    <span>Someone Important</span></p></blockquote>
    
    <!-- BLOCKQUOTE SMALL -->
    <h4>Blockquote Small</h4>
    <blockquote class="small"><p>lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
    in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
    et iusto odio
    <span>Someone Important</span></p></blockquote>
    </div>
    
    <!-- TYPE STYLES -->
    <div class="col_4">
    <h4>Inline Styles</h4>
    <ul>
    <li><strong>Strong</strong></li>
    <li><em>Emphasis</em></li>
    <li><a href="">Inline Link</a></li>
    <li><strike>Strike</strike></li>
    <li>Inline <i class="icon-film"></i> Icons</li>
    <li><code>&lt;h1&gt;Sample Code&lt;/h1&gt;</code></li>
    </ul>
    <hr />
    
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    <hr />
    
    <h4>Address</h4>
    <address><p>
    1234 South Creek Lane<br />
    Calgary, Alberta, Canada<br />
    T4B–1S6
    </p>
    </address>
    </div>
    </div>
    
    <div id="type-headings" class="tab-content">
<pre>
&lt;!-- Headings 1–6 --&gt;
&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;</pre>
    </div>
    
    <div id="type-paragraphs" class="tab-content">
<pre>
&lt;!-- Paragraph --&gt;
&lt;p&gt;Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt...&lt;/p&gt;
&lt;p&gt;El illum dolore eu feugiat nulla facilisis at vero eros et accumsan...&lt;/p&gt;</pre>
    </div>
    
    <div id="type-blockquotes" class="tab-content">
<pre>
&lt;!-- Blockquote --&gt;
&lt;blockquote&gt;
&lt;p&gt;
lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
et iusto odio
&lt;span&gt;Someone Important&lt;/span&gt;
&lt;/p&gt;
&lt;/blockquote&gt;</pre>
    </div>
    
    <div id="type-blockquotes-small" class="tab-content">
<pre>
&lt;!-- Blockquote Small --&gt;
&lt;blockquote class=&quot;small&quot;&gt;
&lt;p&gt;
lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
et iusto odio
&lt;span&gt;Someone Important&lt;/span&gt;
&lt;/p&gt;
&lt;/blockquote&gt;</pre>
    </div>
    
    <div id="type-inline-styles" class="tab-content">
<pre>&lt;!-- Strong --&gt;
&lt;strong&gt;Strong&lt;/strong&gt;

&lt;!-- Emphasis --&gt;
&lt;em&gt;Emphasis&lt;/em&gt;

&lt;!-- Inline Link --&gt;
&lt;a href=&quot;&quot;&gt;Inline Link&lt;/a&gt;

&lt;!-- Strike --&gt;
&lt;strike&gt;Strike&lt;/strike&gt;

&lt;!--Inline Icons --&gt;
Inline &lt;i class=&quot;icon-film&quot;&gt;&lt;/i&gt; Icons

&lt;!--Sample Code (encoded entities) --&gt;
&lt;code&gt;&amp;lt;h1&amp;gt;Sample Code&amp;lt;/h1&amp;gt;&lt;/code&gt;</pre>
    </div>
    
    <div id="type-address" class="tab-content">
<pre>
&lt;!-- Address --&gt;
&lt;address&gt;&lt;p&gt;
1234 South Creek Lane&lt;br /&gt;
Calgary, Alberta, Canada&lt;br /&gt;
T4B&#8211;1S6
&lt;/p&gt;
&lt;/address&gt;</pre>
    </div>
    
<!-- ===================================== 
    HORIZONTAL RULES 
===================================== -->
<h3 id="horizontal-rules">Horizontal Rules</h3>
<ul class="tabs">
<li><a href="#hr-example">Example</a></li>
<li><a href="#hr-html">HTML</a></li>
</ul>

    <div id="hr-example" class="tab-content">
    <div class="col_4">
    <h4>HR</h4>
    <hr />
    </div>
    
    <div class="col_4">
    <h4>HR.alt1</h4>
    <hr class="alt1" />
    </div>
    
    <div class="col_4">
    <h4>HR.alt2</h4>
    <hr class="alt2" />
    </div>
    </div>
    
    <div id="hr-html" class="tab-content">
<pre>
&lt;!-- HR --&gt;
&lt;hr /&gt;

&lt;!-- HR.alt1 --&gt;
&lt;hr class=&quot;alt1&quot; /&gt;

&lt;!-- HR.alt2 --&gt;
&lt;hr class=&quot;alt2&quot; /&gt;</pre>
    </div>

<!-- ===================================== 
    ICONS
===================================== -->
<style type="text/css">
#icon-description{border:1px solid #ddd;padding:20px;background:#fff;}
#icon-description span{color:red;}
</style>

<h3 id="icons">Icons/Glyphs</h3>
<div id="icon-description" class="clearfix">
    <div class="col_7">
    <h4>HTML KickStart now using<br /><a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome Icons</a>!</h4>
    How to use icons: <code>&lt;i class=&quot;<span>icon-globe</span>&quot;&gt;&lt;/i&gt;</code>. 
    <br />Replace <span>icon-globe</span> with the icon you would like to use. </div>
    <div class="col_5">
    <i class="icon-github-alt icon-large"></i> 
    <i class="icon-github-alt icon-2x"></i> 
    <i class="icon-github-alt icon-3x"></i> 
    <i class="icon-github-alt icon-4x"></i> 
    <br />
    To increase the size of icons relative to its container, use <code>icon-large</code>, <code>icon-2x</code>, <code>icon-3x</code>, or <code>icon-4x</code>.</div><hr />
    <div class="col_4">
    <i class="icon-github-alt icon-4x pull-left"></i> <code>.pull-left</code> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col_4">
    <i class="icon-github-alt icon-4x pull-right"></i> <code>.pull-right</code> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col_4">
    <i class="icon-github-alt icon-4x pull-left icon-border"></i> <code>.icon-border</code> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
</div>

<ul class="tabs">
<li><a href="#icons-web">Web App</a></li>
<li><a href="#icons-text">Text Editor</a></li>
<li><a href="#icons-directional">Directional</a></li>
<li><a href="#icons-media">Media</a></li>
<li><a href="#icons-social">Social</a></li>
<li><a href="#icons-medical">Medical</a></li>
</ul>

    <div id="icons-web" class="tab-content">
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-adjust"></i> icon-adjust</li>
      <li><i class="icon-asterisk"></i> icon-asterisk</li>
      <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
      <li><i class="icon-bar-chart"></i> icon-bar-chart</li>
      <li><i class="icon-barcode"></i> icon-barcode</li>
      <li><i class="icon-beaker"></i> icon-beaker</li>
      <li><i class="icon-beer"></i> icon-beer</li>
      <li><i class="icon-bell"></i> icon-bell</li>
      <li><i class="icon-bell-alt"></i> icon-bell-alt</li>
      <li><i class="icon-bolt"></i> icon-bolt</li>
      <li><i class="icon-book"></i> icon-book</li>
      <li><i class="icon-bookmark"></i> icon-bookmark</li>
      <li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
      <li><i class="icon-briefcase"></i> icon-briefcase</li>
      <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
      <li><i class="icon-calendar"></i> icon-calendar</li>
      <li><i class="icon-camera"></i> icon-camera</li>
      <li><i class="icon-camera-retro"></i> icon-camera-retro</li>
      <li><i class="icon-certificate"></i> icon-certificate</li>
      <li><i class="icon-check"></i> icon-check</li>
      <li><i class="icon-check-empty"></i> icon-check-empty</li>
      <li><i class="icon-circle"></i> icon-circle</li>
      <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
      <li><i class="icon-cloud"></i> icon-cloud</li>
      <li><i class="icon-cloud-download"></i> icon-cloud-download</li>
      <li><i class="icon-cloud-upload"></i> icon-cloud-upload</li>
      <li><i class="icon-coffee"></i> icon-coffee</li>
      <li><i class="icon-cog"></i> icon-cog</li>
      <li><i class="icon-cogs"></i> icon-cogs</li>
      <li><i class="icon-comment"></i> icon-comment</li>
      <li><i class="icon-comment-alt"></i> icon-comment-alt</li>
      <li><i class="icon-comments"></i> icon-comments</li>
      <li><i class="icon-comments-alt"></i> icon-comments-alt</li>
      <li><i class="icon-credit-card"></i> icon-credit-card</li>
      <li><i class="icon-dashboard"></i> icon-dashboard</li>
      <li><i class="icon-desktop"></i> icon-desktop</li>
      <li><i class="icon-download"></i> icon-download</li>
      <li><i class="icon-download-alt"></i> icon-download-alt</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-edit"></i> icon-edit</li>
      <li><i class="icon-envelope"></i> icon-envelope</li>
      <li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
      <li><i class="icon-exchange"></i> icon-exchange</li>
      <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
      <li><i class="icon-external-link"></i> icon-external-link</li>
      <li><i class="icon-eye-close"></i> icon-eye-close</li>
      <li><i class="icon-eye-open"></i> icon-eye-open</li>
      <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
      <li><i class="icon-fighter-jet"></i> icon-fighter-jet</li>
      <li><i class="icon-film"></i> icon-film</li>
      <li><i class="icon-filter"></i> icon-filter</li>
      <li><i class="icon-fire"></i> icon-fire</li>
      <li><i class="icon-flag"></i> icon-flag</li>
      <li><i class="icon-folder-close"></i> icon-folder-close</li>
      <li><i class="icon-folder-open"></i> icon-folder-open</li>
      <li><i class="icon-folder-close-alt"></i> icon-folder-close-alt</li>
      <li><i class="icon-folder-open-alt"></i> icon-folder-open-alt</li>
      <li><i class="icon-food"></i> icon-food</li>
      <li><i class="icon-gift"></i> icon-gift</li>
      <li><i class="icon-glass"></i> icon-glass</li>
      <li><i class="icon-globe"></i> icon-globe</li>
      <li><i class="icon-group"></i> icon-group</li>
      <li><i class="icon-hdd"></i> icon-hdd</li>
      <li><i class="icon-headphones"></i> icon-headphones</li>
      <li><i class="icon-heart"></i> icon-heart</li>
      <li><i class="icon-heart-empty"></i> icon-heart-empty</li>
      <li><i class="icon-home"></i> icon-home</li>
      <li><i class="icon-inbox"></i> icon-inbox</li>
      <li><i class="icon-info-sign"></i> icon-info-sign</li>
      <li><i class="icon-key"></i> icon-key</li>
      <li><i class="icon-leaf"></i> icon-leaf</li>
      <li><i class="icon-laptop"></i> icon-laptop</li>
      <li><i class="icon-legal"></i> icon-legal</li>
      <li><i class="icon-lemon"></i> icon-lemon</li>
      <li><i class="icon-lightbulb"></i> icon-lightbulb</li>
      <li><i class="icon-lock"></i> icon-lock</li>
      <li><i class="icon-unlock"></i> icon-unlock</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-magic"></i> icon-magic</li>
      <li><i class="icon-magnet"></i> icon-magnet</li>
      <li><i class="icon-map-marker"></i> icon-map-marker</li>
      <li><i class="icon-minus"></i> icon-minus</li>
      <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
      <li><i class="icon-mobile-phone"></i> icon-mobile-phone</li>
      <li><i class="icon-money"></i> icon-money</li>
      <li><i class="icon-move"></i> icon-move</li>
      <li><i class="icon-music"></i> icon-music</li>
      <li><i class="icon-off"></i> icon-off</li>
      <li><i class="icon-ok"></i> icon-ok</li>
      <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
      <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
      <li><i class="icon-pencil"></i> icon-pencil</li>
      <li><i class="icon-picture"></i> icon-picture</li>
      <li><i class="icon-plane"></i> icon-plane</li>
      <li><i class="icon-plus"></i> icon-plus</li>
      <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
      <li><i class="icon-print"></i> icon-print</li>
      <li><i class="icon-pushpin"></i> icon-pushpin</li>
      <li><i class="icon-qrcode"></i> icon-qrcode</li>
      <li><i class="icon-question-sign"></i> icon-question-sign</li>
      <li><i class="icon-quote-left"></i> icon-quote-left</li>
      <li><i class="icon-quote-right"></i> icon-quote-right</li>
      <li><i class="icon-random"></i> icon-random</li>
      <li><i class="icon-refresh"></i> icon-refresh</li>
      <li><i class="icon-remove"></i> icon-remove</li>
      <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
      <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
      <li><i class="icon-reorder"></i> icon-reorder</li>
      <li><i class="icon-reply"></i> icon-reply</li>
      <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
      <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
      <li><i class="icon-retweet"></i> icon-retweet</li>
      <li><i class="icon-road"></i> icon-road</li>
      <li><i class="icon-rss"></i> icon-rss</li>
      <li><i class="icon-screenshot"></i> icon-screenshot</li>
      <li><i class="icon-search"></i> icon-search</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-share"></i> icon-share</li>
      <li><i class="icon-share-alt"></i> icon-share-alt</li>
      <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
      <li><i class="icon-signal"></i> icon-signal</li>
      <li><i class="icon-signin"></i> icon-signin</li>
      <li><i class="icon-signout"></i> icon-signout</li>
      <li><i class="icon-sitemap"></i> icon-sitemap</li>
      <li><i class="icon-sort"></i> icon-sort</li>
      <li><i class="icon-sort-down"></i> icon-sort-down</li>
      <li><i class="icon-sort-up"></i> icon-sort-up</li>
      <li><i class="icon-spinner"></i> icon-spinner</li>
      <li><i class="icon-star"></i> icon-star</li>
      <li><i class="icon-star-empty"></i> icon-star-empty</li>
      <li><i class="icon-star-half"></i> icon-star-half</li>
      <li><i class="icon-tablet"></i> icon-tablet</li>
      <li><i class="icon-tag"></i> icon-tag</li>
      <li><i class="icon-tags"></i> icon-tags</li>
      <li><i class="icon-tasks"></i> icon-tasks</li>
      <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
      <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
      <li><i class="icon-time"></i> icon-time</li>
      <li><i class="icon-tint"></i> icon-tint</li>
      <li><i class="icon-trash"></i> icon-trash</li>
      <li><i class="icon-trophy"></i> icon-trophy</li>
      <li><i class="icon-truck"></i> icon-truck</li>
      <li><i class="icon-umbrella"></i> icon-umbrella</li>
      <li><i class="icon-upload"></i> icon-upload</li>
      <li><i class="icon-upload-alt"></i> icon-upload-alt</li>
      <li><i class="icon-user"></i> icon-user</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
      <li><i class="icon-volume-off"></i> icon-volume-off</li>
      <li><i class="icon-volume-down"></i> icon-volume-down</li>
      <li><i class="icon-volume-up"></i> icon-volume-up</li>
      <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
      <li><i class="icon-wrench"></i> icon-wrench</li>
      <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
      <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
    </ul>
    </div>
    </div>
    
    <div id="icons-text" class="tab-content">
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-file"></i> icon-file</li>
      <li><i class="icon-file-alt"></i> icon-file-alt</li>
      <li><i class="icon-cut"></i> icon-cut</li>
      <li><i class="icon-copy"></i> icon-copy</li>
      <li><i class="icon-paste"></i> icon-paste</li>
      <li><i class="icon-save"></i> icon-save</li>
      <li><i class="icon-undo"></i> icon-undo</li>
      <li><i class="icon-repeat"></i> icon-repeat</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-text-height"></i> icon-text-height</li>
      <li><i class="icon-text-width"></i> icon-text-width</li>
      <li><i class="icon-align-left"></i> icon-align-left</li>
      <li><i class="icon-align-center"></i> icon-align-center</li>
      <li><i class="icon-align-right"></i> icon-align-right</li>
      <li><i class="icon-align-justify"></i> icon-align-justify</li>
      <li><i class="icon-indent-left"></i> icon-indent-left</li>
      <li><i class="icon-indent-right"></i> icon-indent-right</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-font"></i> icon-font</li>
      <li><i class="icon-bold"></i> icon-bold</li>
      <li><i class="icon-italic"></i> icon-italic</li>
      <li><i class="icon-strikethrough"></i> icon-strikethrough</li>
      <li><i class="icon-underline"></i> icon-underline</li>
      <li><i class="icon-link"></i> icon-link</li>
      <li><i class="icon-paper-clip"></i> icon-paper-clip</li>
      <li><i class="icon-columns"></i> icon-columns</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-table"></i> icon-table</li>
      <li><i class="icon-th-large"></i> icon-th-large</li>
      <li><i class="icon-th"></i> icon-th</li>
      <li><i class="icon-th-list"></i> icon-th-list</li>
      <li><i class="icon-list"></i> icon-list</li>
      <li><i class="icon-list-ol"></i> icon-list-ol</li>
      <li><i class="icon-list-ul"></i> icon-list-ul</li>
      <li><i class="icon-list-alt"></i> icon-list-alt</li>
    </ul>
    </div>
    </div>
    
    <div id="icons-directional" class="tab-content">
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-angle-left"></i> icon-angle-left</li>
      <li><i class="icon-angle-right"></i> icon-angle-right</li>
      <li><i class="icon-angle-up"></i> icon-angle-up</li>
      <li><i class="icon-angle-down"></i> icon-angle-down</li>
      <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
      <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
      <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
      <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-caret-down"></i> icon-caret-down</li>
      <li><i class="icon-caret-left"></i> icon-caret-left</li>
      <li><i class="icon-caret-right"></i> icon-caret-right</li>
      <li><i class="icon-caret-up"></i> icon-caret-up</li>
      <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
      <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
      <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
      <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
      <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
      <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
      <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
      <li><i class="icon-double-angle-left"></i> icon-double-angle-left</li>
      <li><i class="icon-double-angle-right"></i> icon-double-angle-right</li>
      <li><i class="icon-double-angle-up"></i> icon-double-angle-up</li>
      <li><i class="icon-double-angle-down"></i> icon-double-angle-down</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-hand-down"></i> icon-hand-down</li>
      <li><i class="icon-hand-left"></i> icon-hand-left</li>
      <li><i class="icon-hand-right"></i> icon-hand-right</li>
      <li><i class="icon-hand-up"></i> icon-hand-up</li>
      <li><i class="icon-circle"></i> icon-circle</li>
      <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
    </ul>   
    </div>
    </div>
    
    <div id="icons-media" class="tab-content">
    <div class="col_3">
     <ul class="icons">
      <li><i class="icon-play-circle"></i> icon-play-circle</li>
      <li><i class="icon-play"></i> icon-play</li>
      <li><i class="icon-pause"></i> icon-pause</li>
      <li><i class="icon-stop"></i> icon-stop</li>
    </ul>
    </div>
    <div class="col_3">
     <ul class="icons">
      <li><i class="icon-step-backward"></i> icon-step-backward</li>
      <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
      <li><i class="icon-backward"></i> icon-backward</li>
      <li><i class="icon-forward"></i> icon-forward</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
      <li><i class="icon-step-forward"></i> icon-step-forward</li>
      <li><i class="icon-eject"></i> icon-eject</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
      <li><i class="icon-resize-full"></i> icon-resize-full</li>
      <li><i class="icon-resize-small"></i> icon-resize-small</li>
    </ul>
    </div>
    </div>
    
    <div id="icons-social" class="tab-content">
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-phone"></i> icon-phone</li>
      <li><i class="icon-phone-sign"></i> icon-phone-sign</li>
      <li><i class="icon-facebook"></i> icon-facebook</li>
      <li><i class="icon-facebook-sign"></i> icon-facebook-sign</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-twitter"></i> icon-twitter</li>
      <li><i class="icon-twitter-sign"></i> icon-twitter-sign</li>
      <li><i class="icon-github"></i> icon-github</li>
      <li><i class="icon-github-alt"></i> icon-github-alt</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-github-sign"></i> icon-github-sign</li>
      <li><i class="icon-linkedin"></i> icon-linkedin</li>
      <li><i class="icon-linkedin-sign"></i> icon-linkedin-sign</li>
      <li><i class="icon-pinterest"></i> icon-pinterest</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
      <li><i class="icon-google-plus"></i> icon-google-plus</li>
      <li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
      <li><i class="icon-sign-blank"></i> icon-sign-blank</li>
    </ul>   
    </div>
    </div>
    
    <div id="icons-medical" class="tab-content">
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-ambulance"></i> icon-ambulance</li>
      <li><i class="icon-beaker"></i> icon-beaker</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-h-sign"></i> icon-h-sign</li>
      <li><i class="icon-hospital"></i> icon-hospital</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-medkit"></i> icon-medkit</li>
      <li><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</li>
    </ul>
    </div>
    <div class="col_3">
    <ul class="icons">
      <li><i class="icon-stethoscope"></i> icon-stethoscope</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
    </ul>
    </div>
    </div>
    
<!-- ===================================== 
    CODE/PRE 
===================================== -->
<h3 id="code">Code/Pre</h3>
<ul class="tabs">
<li><a href="#code-example">Example</a></li>
<li><a href="#code-html">PRE.html</a></li>
<li><a href="#code-css">PRE.css</a></li>
<li><a href="#code-js">PRE.js</a></li>
<li><a href="#code-php">PRE.php</a></li>
</ul>

    <div id="code-example" class="tab-content">
    <div class="col_4">
    <h4>PRE HTML</h4>
    <pre>
&lt;html&gt;
&lt;head&gt;&lt;title&gt;This is a title&lt;/title&gt;&lt;/head&gt;
&lt;body class=&quot;subpage&quot;&gt;
    &lt;!-- Content Here --&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
    </div>
    
    <!-- CODE CSS -->
    <div class="col_4">
    <h4>PRE CSS</h4>
    <pre class="css">
body{
font-weight:bold;
color:#000;
line-height:150%;
}</pre>
    </div>
    
    <!-- CODE JS -->
    <div class="col_4">
    <h4>PRE JS</h4>
    <pre class="js">
$(document).ready(function(){
    alert('jQuery');
});</pre>
    </div>
    </div>
    
    <div id="code-html" class="tab-content">
<pre>
&lt;!-- Code HTML --&gt;
&lt;pre&gt;
&#8230;code goes here&#8230; 
&lt;/pre&gt;</pre>
    </div>
    
    <div id="code-css" class="tab-content">
<pre>
&lt;!-- Code CSS --&gt;
&lt;pre&gt;
&#8230;code goes here&#8230; 
&lt;/pre&gt;</pre>
    </div>
    
    <div id="code-js" class="tab-content">
<pre>
&lt;!-- Code Javascript --&gt;
&lt;pre&gt;
&#8230;code goes here&#8230; 
&lt;/pre&gt;</pre>
    </div>
    
    <div id="code-php" class="tab-content">
<pre>
&lt;!-- Code PHP --&gt;
&lt;pre&gt;
&#8230;code goes here&#8230; 
&lt;/pre&gt;</pre>
    </div>

<!-- ===================================== 
    TABS 
===================================== -->
<h3 id="tabs">Tabs</h3>
<ul class="tabs">
<li><a href="#tabs-example">Example</a></li>
<li><a href="#tabs-left">Tabs.left</a></li>
<li><a href="#tabs-center">Tabs.center</a></li>
<li><a href="#tabs-right">Tabs.right</a></li>
</ul>

    <div id="tabs-example" class="tab-content">
    <div class="col_4">
    <h4>Tabs.left</h4>
    <ul class="tabs left">
    <li><a href="#tab1">Tab1</a></li>
    <li><a href="#tab2">Tab2</a></li>
    <li><a href="#tab3">Tab3</a></li>
    </ul>
    
    <div id="tab1" class="tab-content">Tab1</div>
    <div id="tab2" class="tab-content">Tab2</div>
    <div id="tab3" class="tab-content">Tab3</div>
    </div>
    
    <!-- TABS CENTER -->
    <div class="col_4">
    <h4>Tabs.center</h4>
    <ul class="tabs center">
    <li><a href="#tabc1">Tab1</a></li>
    <li><a href="#tabc2"><i class="icon-folder-open"></i> Tab2</a></li>
    <li><a href="#tabc3">Tab3</a></li>
    </ul>
    
    <div id="tabc1" class="tab-content">Tab1</div>
    <div id="tabc2" class="tab-content">Tab2 has an icon.</div>
    <div id="tabc3" class="tab-content">Tab3</div>
    </div>
    
    <!-- TABS RIGHT -->
    <div class="col_4">
    <h4>Tabs.right</h4>
    <ul class="tabs right">
    <li><a href="#tabr1">Tab1</a></li>
    <li><a href="#tabr2">Tab2</a></li>
    <li><a href="#tabr3">Tab3</a></li>
    </ul>
    
    <div id="tabr1" class="tab-content">Tab1</div>
    <div id="tabr2" class="tab-content">Tab2</div>
    <div id="tabr3" class="tab-content">Tab3</div>
    </div>
    </div>
    
    <div id="tabs-left" class="tab-content">
<pre>
&lt;!-- Tabs Left --&gt;
&lt;ul class=&quot;tabs left&quot;&gt;
&lt;li&gt;&lt;a href=&quot;#tabr1&quot;&gt;Tab1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabr2&quot;&gt;Tab2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabr3&quot;&gt;Tab3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id=&quot;tabr1&quot; class=&quot;tab-content&quot;&gt;Tab1&lt;/div&gt;
&lt;div id=&quot;tabr2&quot; class=&quot;tab-content&quot;&gt;Tab2&lt;/div&gt;
&lt;div id=&quot;tabr3&quot; class=&quot;tab-content&quot;&gt;Tab3&lt;/div&gt;</pre>
    </div>
    
    <div id="tabs-center" class="tab-content">
<pre>
&lt;!-- Tabs Center --&gt;
&lt;ul class=&quot;tabs center&quot;&gt;
&lt;li&gt;&lt;a href=&quot;#tabc1&quot;&gt;Tab1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabc2&quot;&gt;&lt;i class=&quot;icon-folder-open&quot;&gt;&lt;/i&gt; Tab2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabc3&quot;&gt;Tab3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id=&quot;tabc1&quot; class=&quot;tab-content&quot;&gt;Tab1&lt;/div&gt;
&lt;div id=&quot;tabc2&quot; class=&quot;tab-content&quot;&gt;Tab2 has an icon.&lt;/div&gt;
&lt;div id=&quot;tabc3&quot; class=&quot;tab-content&quot;&gt;Tab3&lt;/div&gt;</pre>
    </div>
    
    <div id="tabs-right" class="tab-content">
<pre>
&lt;!-- Tabs Right --&gt;
&lt;ul class=&quot;tabs right&quot;&gt;
&lt;li&gt;&lt;a href=&quot;#tabr1&quot;&gt;Tab1&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabr2&quot;&gt;Tab2&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#tabr3&quot;&gt;Tab3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id=&quot;tabr1&quot; class=&quot;tab-content&quot;&gt;Tab1&lt;/div&gt;
&lt;div id=&quot;tabr2&quot; class=&quot;tab-content&quot;&gt;Tab2&lt;/div&gt;
&lt;div id=&quot;tabr3&quot; class=&quot;tab-content&quot;&gt;Tab3&lt;/div&gt;</pre>
    </div>

<!-- ===================================== 
    BREADCRUMBS 
===================================== -->
<h3 id="breadcrumbs">Breadcrumbs</h3>
<ul class="tabs">
<li><a href="#bread-example">Example</a></li>
<li><a href="#bread">Breadcrumbs</a></li>
<li><a href="#bread-alt1">Breadcrumbs.alt1</a></li>
</ul>

    <div id="bread-example" class="tab-content">
    <div class="col_6">
    <h4>Breadcrumbs</h4>
    <ul class="breadcrumbs">
    <li><a href="">Home</a></li>
    <li><a href="">Category</a></li>
    <li><a href="">Sub Category</a></li>
    <li><a href="">Page Title</a></li>
    </ul>
    </div>
    
    <div class="col_6">
    <h4>Breadcrumbs.alt1</h4>
    <ul class="breadcrumbs alt1">
    <li><a href="">Home</a></li>
    <li><a href="">Category</a></li>
    <li><a href="">Sub Category</a></li>
    <li><a href="">Page Title</a></li>
    </ul>
    </div>
    </div>
    
    <div id="bread" class="tab-content">
<pre>
&lt;!-- Breadcrumbs --&gt;
&lt;ul class=&quot;breadcrumbs&quot;&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Category&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Category&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Page Title&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>
    
    <div id="bread-alt1" class="tab-content">
<pre>
&lt;!-- Alternative Style --&gt;
&lt;ul class=&quot;breadcrumbs alt1&quot;&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Category&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Sub Category&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;&quot;&gt;Page Title&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>

<!-- ===================================== 
    GRIDS/COLUMNS 
===================================== -->
<style type="text/css">
#grids-example [class*="col_"]{
padding:10px;
}
</style>

<h3 id="columns">Grids/Columns</h3>
<ul class="tabs">
<li><a href="#grids-example">Example</a></li>
<li><a href="#grids-html">HTML</a></li>
</ul>

    <div id="grids-example" class="tab-content">
    <h4>Responsive & Flexible Grid</h4>
    <p>Responsive functionality is optional. Only use <code>.grid</code> & <code>.grid.flex</code> if you 
    want a responsive grid. Resize your browser to see it in action.</p>
    <div class="col_4"><p>Responsive Grid:<br /><code>&lt;div class=&quot;grid&quot;&gt;</code></p></div>
    <div class="col_4"><p>Flexible Responsive Grid:<br /><code>&lt;div class=&quot;grid flex&quot;&gt;</code></p></div>
    <div class="col_4"><p>Grid Helper Classes:<br />
    <code>.show-desktop</code>
    <code>.hide-desktop</code>
    <code>.show-tablet</code>
    <code>.hide-tablet</code>
    <code>.show-phone</code>
    <code>.hide-phone</code>
    </p></div>
    <div class="col_12">All columns automatically have the class <code>.column</code>. Apply padding and borders directly to columns 
    <br /><code>.column{border:1px solid red;padding:10px;}</code> </div>
    <div class="clear"></div>
    
    <div class="col_12 visible">col_12</div>
    <div class="col_1 visible">col_1</div><div class="col_11 visible">col_11</div>
    <div class="col_2 visible">col_2</div><div class="col_10 visible">col_10</div>
    <div class="col_3 visible">col_3</div><div class="col_9 visible">col_9</div>
    <div class="col_4 visible">col_4</div><div class="col_8 visible">col_8</div>
    <div class="col_5 visible">col_5</div><div class="col_7 visible">col_7</div>
    <div class="col_6 visible">col_6</div><div class="col_6 visible">col_6</div>
    <div class="col_7 visible">col_7</div><div class="col_5 visible">col_5</div>
    <div class="col_8 visible">col_8</div><div class="col_4 visible">col_4</div>
    <div class="col_9 visible">col_9</div><div class="col_3 visible">col_3</div>
    <div class="col_10 visible">col_10</div><div class="col_2 visible">col_2</div>
    <div class="col_11 visible">col_11</div><div class="col_1 visible">col_1</div>
    <div class="col_12 visible">col_12</div>
    
    <!-- FOURTHS -->
    <div class="col_3 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_3 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_3 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_3 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    
    <!-- THIRDS -->
    <div class="col_4 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_4 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_4 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    
    <!-- HALF & HALF -->
    <div class="col_6 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    <div class="col_6 visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</div>
    </div>
    
    <div id="grids-html" class="tab-content">
<pre>
&lt;!-- Columns/Grid --&gt;
&lt;div class=&quot;col_12&quot;&gt;col_12&lt;/div&gt;
&lt;div class=&quot;col_1&quot;&gt;col_1&lt;/div&gt;&lt;div class=&quot;col_11&quot;&gt;col_11&lt;/div&gt;
&lt;div class=&quot;col_2&quot;&gt;col_2&lt;/div&gt;&lt;div class=&quot;col_10&quot;&gt;col_10&lt;/div&gt;
&lt;div class=&quot;col_3&quot;&gt;col_3&lt;/div&gt;&lt;div class=&quot;col_9&quot;&gt;col_9&lt;/div&gt;
&lt;div class=&quot;col_4&quot;&gt;col_4&lt;/div&gt;&lt;div class=&quot;col_8&quot;&gt;col_8&lt;/div&gt;
&lt;div class=&quot;col_5&quot;&gt;col_5&lt;/div&gt;&lt;div class=&quot;col_7&quot;&gt;col_7&lt;/div&gt;
&lt;div class=&quot;col_6&quot;&gt;col_6&lt;/div&gt;&lt;div class=&quot;col_6&quot;&gt;col_6&lt;/div&gt;
&lt;div class=&quot;col_7&quot;&gt;col_7&lt;/div&gt;&lt;div class=&quot;col_5&quot;&gt;col_5&lt;/div&gt;
&lt;div class=&quot;col_8&quot;&gt;col_8&lt;/div&gt;&lt;div class=&quot;col_4&quot;&gt;col_4&lt;/div&gt;
&lt;div class=&quot;col_9&quot;&gt;col_9&lt;/div&gt;&lt;div class=&quot;col_3&quot;&gt;col_3&lt;/div&gt;
&lt;div class=&quot;col_10&quot;&gt;col_10&lt;/div&gt;&lt;div class=&quot;col_2&quot;&gt;col_2&lt;/div&gt;
&lt;div class=&quot;col_11&quot;&gt;col_11&lt;/div&gt;&lt;div class=&quot;col_1&quot;&gt;col_1&lt;/div&gt;
&lt;div class=&quot;col_12&quot;&gt;col_12&lt;/div&gt;

&lt;!-- FOURTHS --&gt;
&lt;div class=&quot;col_3&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_3&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_3&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_3&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;

&lt;!-- THIRDS --&gt;
&lt;div class=&quot;col_4&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_4&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_4&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;

&lt;!-- HALF &amp; HALF --&gt;
&lt;div class=&quot;col_6&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;
&lt;div class=&quot;col_6&quot;&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.&lt;/div&gt;</pre>
    </div>

<!-- ===================================== 
    IMAGES 
===================================== -->
<h3 id="images">Images</h3>
<ul class="tabs">
<li><a href="#images-example">Example</a></li>
<li><a href="#images-caption">.caption</a></li>
<li><a href="#images-gallery">DIV.gallery</a></li>
<li><a href="#images-left">.align-left</a></li>
<li><a href="#images-right">.align-right</a></li>
<li><a href="#images-full-width">.full-width</a></li>
</ul>

    <div id="images-example" class="tab-content">
    <div class="col_6">
    <h4>IMG.caption</h4>
    <img class="caption" title="This is the image caption" src="http://placehold.it/400x350/4D99E0/ffffff.png&text=400x350" width="400" height="350" /> 
    </div>
    
    <div class="col_6 gallery">
    <h4>DIV.gallery</h4>
    <a href="http://placehold.it/600x450/4D99E0/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/4D99E0/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/75CC00/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/75CC00/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/E49800/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/E49800/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/E4247E/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/E4247E/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/00C6E4/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/00C6E4/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/E4DB0F/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/E4DB0F/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/7400E4/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/7400E4/ffffff.png&text=100x100" width="100" height="100" /></a>
    <a href="http://placehold.it/600x450/C50000/ffffff.png&text=600x450"><img src="http://placehold.it/100x100/C50000/ffffff.png&text=100x100" width="100" height="100" /></a>
    </div>
    
    <div class="clear">&nbsp;</div>
    
    <div class="col_4">
    <h4>IMG.align-left</h4>
    <img class="align-left" src="http://placehold.it/100x100/4D99E0/ffffff.png&text=100x100" width="100" height="100" />
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor 
    in hendrerit in vulputate velit esse molestie consequat.</p>    
    </div>
    
    <div class="col_4">
    <h4>IMG.align-right</h4>
    <img class="align-right" src="http://placehold.it/100x100/4D99E0/ffffff.png&text=100x100" width="100" height="100" />
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor 
    in hendrerit in vulputate velit esse molestie consequat.</p>    
    </div>
    
    <div class="col_4">
    <h4>IMG.full-width</h4>
    <img class="full-width" src="http://placehold.it/260x200/4D99E0/ffffff.png&text=full+width" />  
    </div>
    </div>
    
    <div id="images-caption" class="tab-content">
<pre>
&lt;!-- Caption --&gt;
&lt;img class=&quot;caption&quot; title=&quot;This is the image caption&quot; src=&quot;http://placehold.it/400x350/4D99E0/ffffff.png&amp;text=400x350&quot; width=&quot;400&quot; height=&quot;350&quot; /&gt;</pre>
    </div>
    
    <div id="images-left" class="tab-content">
<pre>
&lt;!-- Align Left --&gt;
&lt;img class=&quot;align-left&quot; src=&quot;http://placehold.it/100x100/4D99E0/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor 
in hendrerit in vulputate velit esse molestie consequat.&lt;/p&gt;</pre>
    </div>
    
    <div id="images-right" class="tab-content">
<pre>
&lt;!-- Align Right --&gt;
&lt;img class=&quot;align-right&quot; src=&quot;http://placehold.it/100x100/4D99E0/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;
&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor 
in hendrerit in vulputate velit esse molestie consequat.&lt;/p&gt;</pre>
    </div>
    
    <div id="images-full-width" class="tab-content">
<pre>
&lt;!-- Full Width --&gt;
&lt;img class=&quot;full-width&quot; src=&quot;http://placehold.it/260x200/4D99E0/ffffff.png&amp;text=full+width&quot; /&gt;</pre>
    </div>
    
    <div id="images-gallery" class="tab-content">
<pre>
&lt;!-- Gallery --&gt;
&lt;div class=&quot;gallery&quot;&gt;
&lt;a href=&quot;http://placehold.it/600x450/4D99E0/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/4D99E0/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/75CC00/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/75CC00/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/E49800/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/E49800/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/E4247E/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/E4247E/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/00C6E4/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/00C6E4/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/E4DB0F/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/E4DB0F/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/7400E4/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/7400E4/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;a href=&quot;http://placehold.it/600x450/C50000/ffffff.png&amp;text=600x450&quot;&gt;&lt;img src=&quot;http://placehold.it/100x100/C50000/ffffff.png&amp;text=100x100&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
    </div>

<!-- ===================================== 
    SLIDESHOW 
===================================== -->
<h3 id="slideshow">Slideshow</h3>
<ul class="tabs">
<li><a href="#slideshow-example">Example</a></li>
<li><a href="#slideshow-html">HTML</a></li>
</ul>

    <div id="slideshow-example" class="tab-content">
    <p>Fully responsive slideshow. Touch enabled. Uses the awesome & highly configurable <a href="http://bxslider.com/">BXSlider</a>.</p>
    <div class="col_8">
    <ul class="slideshow">
    <li><img src="http://placehold.it/550x350/4D99E0/ffffff.png&text=550x350" width="550" height="350" /></li>
    <li><img src="http://placehold.it/550x350/75CC00/ffffff.png&text=550x350" width="550" height="350" /></li>
    <li><img src="http://placehold.it/550x350/E49800/ffffff.png&text=550x350" width="550" height="350" /></li>
    </ul>
    </div>
    
    <div class="col_4">
    <h4>Features</h4>
    <ul class="icons">
    <li><i class="icon-ok"></i> Slide Any HTML Content</li>
    <li><i class="icon-ok"></i> Responsive</li>
    <li><i class="icon-ok"></i> Touch Enabled</li>
    <li><i class="icon-ok"></i> Iframes</li>
    <li><i class="icon-ok"></i> Videos</li>
    <li><i class="icon-ok"></i> Images</li>
    <li><i class="icon-ok"></i> Lightweight</li>
    <li><i class="icon-ok"></i> Multiple Slideshows</li>
    <li><i class="icon-ok"></i> Zero Setup Required</li>
    <li><i class="icon-ok"></i> Unordered List (default)</li>
    </ul>
    </div>
    </div>
    
    <div id="slideshow-html" class="tab-content">
<pre>
&lt;!-- Slideshow --&gt;
&lt;ul class=&quot;slideshow&quot;&gt;
&lt;li&gt;&lt;img src=&quot;http://placehold.it/550x350/4D99E0/ffffff.png&amp;text=550x350&quot; width=&quot;550&quot; height=&quot;350&quot; /&gt;&lt;/li&gt;
&lt;li&gt;&lt;img src=&quot;http://placehold.it/550x350/75CC00/ffffff.png&amp;text=550x350&quot; width=&quot;550&quot; height=&quot;350&quot; /&gt;&lt;/li&gt;
&lt;li&gt;&lt;img src=&quot;http://placehold.it/550x350/E49800/ffffff.png&text=550x350&quot; width=&quot;550&quot; height=&quot;350&quot; /&gt;&lt;/li&gt;
&lt;li&gt;&lt;h3&gt;Slide Anything&lt;/h3&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>


<!-- ===================================== 
    FORMS 
===================================== -->
<h3 id="forms">Forms</h3>
<ul class="tabs">
<li><a href="#form-example">Example</a></li>
<li><a href="#form-textfield">Textfield</a></li>
<li><a href="#form-select">Select</a></li>
<li><a href="#form-checkbox">Checkbox</a></li>
<li><a href="#form-radio">Radio</a></li>
<li><a href="#form-fieldset">Fieldset</a></li>
<li><a href="#form-textarea">Textarea</a></li>
<li><a href="#form-notices">Notices</a></li>
</ul>

    <div id="form-example" class="tab-content">
    <h4>Form.vertical</h4>
    <form class="vertical"><div class="col_4">
    <label for="text1">Text Field</label>
    <input id="text1" type="text" />
    
    <label for="text2">Placeholder</label>
    <input id="text2" type="text" placeholder="Placeholder Text" />
    
    <label for="text3" class="disabled">Disabled Field</label>
    <input id="text3" type="text" disabled="disabled" />
    
    <label for="text4">Label with Right Hint <span class="right">A-Z, 0-9</span></label>
    <input id="text4" type="text" />
    
    <label for="text5">Label with Hint <span>A-Z, 0-9</span></label>
    <input id="text5" type="text" />
    
    <label for="text6" class="error">Text Field (Error)</label>
    <input id="text6" class="error" type="text" />
    </div>
    
    <div class="col_4">
    <label for="select1">Select Field</label>
    <select id="select1">
    <option value="0">-- Choose --</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
    </select>
    
    <label for="select3">Select multiple</label>
    <select id="select3" multiple="multiple" class="fancy">
    <option value="0">-- Choose --</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
    </select>
    
    <fieldset>
    <legend>Checkboxes</legend>
    <input type="checkbox" id="check1" /> <label for="check1" class="inline">Checkbox Field</label><br />
    <input type="checkbox" id="check2" /> <label for="check2" class="inline">Checkbox Field</label><br />
    <input type="checkbox" id="check3" /> <label for="check3" class="inline">Checkbox Field</label>
    </fieldset>
    
    <fieldset>
    <legend>Radios</legend>
    <input type="radio" name="radio" id="radio1" /> <label for="radio1" class="inline">Option1</label><br />
    <input type="radio" name="radio" id="radio2" /> <label for="radio2" class="inline">Option1</label><br />
    <input type="radio" name="radio" id="radio3" /> <label for="radio3" class="inline">Option1</label>
    </fieldset>
    
    <label for="file1">File Field</label>
    <input id="file1" type="file" />
    </div>
    
    <div class="col_4">
    <div class="notice error"><i class="icon-remove-sign icon-large"></i> This is an Error Notice 
    <a href="#close" class="icon-remove"></a></div>
    <div class="notice warning"><i class="icon-warning-sign icon-large"></i> This is a Warning Notice 
    <a href="#close" class="icon-remove"></a></div>
    <div class="notice success"><i class="icon-ok icon-large"></i> This is a Success Notice 
    <a href="#close" class="icon-remove"></a></div>
    
    <label for="textarea1">TextArea</label>
    <textarea id="textarea1" placeholder="Placeholder Text"></textarea>
    
    <button type="submit">Submit</button>
    </div>
    </form>
    <hr />
    
    <div class="col_12">
    <h4>Inline Form Fields (default)</h4>
    <form>
    <label for="text21">Label</label>
    <input type="text" name="text21" placeholder="Username" />
    <input type="text" name="text22" placeholder="Password "/>
    <select id="select22" class="fancy">
    <option value="0">-- Choose --</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
    </select>&nbsp;
    
    <button type="button" class="small green">Button</button>
    <input type="checkbox" name="check23" id="check23" /> <label for="check23">Checkbox Label</label>
    </form>
    </div>
    <hr />
    
    <style type="text/css">
    #form-sizes label{border:1px dotted #ccc;}
    </style>
    
    <div id="form-sizes" class="col_12">
    <h4>Input/Label Sizes</h4>
    <!--label class="col_12">label.col_12</label-->
    <!--input type="text" placeholder=".col_1" class="col_1" /><label class="col_11">label.col_11</label-->
    <input type="text" placeholder=".col_2" class="col_2" /><label class="col_10">label.col_10</label>
    <input type="text" placeholder=".col_3" class="col_3" /><label class="col_9">label.col_9</label>
    <input type="text" placeholder=".col_4" class="col_4" /><label class="col_8">label.col_8</label>
    <input type="text" placeholder=".col_5" class="col_5" /><label class="col_7">label.col_7</label>
    <input type="text" placeholder=".col_6" class="col_6" /><label class="col_6">label.col_6</label>
    <input type="text" placeholder=".col_7" class="col_7" /><label class="col_5">label.col_5</label>
    <input type="text" placeholder=".col_8" class="col_8" /><label class="col_4">label.col_4</label>
    <input type="text" placeholder=".col_9" class="col_9" /><label class="col_3">label.col_3</label>
    <input type="text" placeholder=".col_10" class="col_10" /><label class="col_2">label.col_2</label>
    <!--input type="text" placeholder=".col_11" class="col_11" /><label class="col_1">label.col_1</label-->
    <!--input type="text" placeholder=".col_12" class="col_12" /-->
    </div>
    </div>
    
    <div id="form-textfield" class="tab-content">
<pre>
&lt;!-- Text Field --&gt;
&lt;label for=&quot;text1&quot;&gt;Text Field&lt;/label&gt;
&lt;input id=&quot;text1&quot; type=&quot;text&quot; /&gt;

&lt;!-- Placeholder Text --&gt;
&lt;label for=&quot;text2&quot;&gt;Placeholder&lt;/label&gt;
&lt;input id=&quot;text2&quot; type=&quot;text&quot; placeholder=&quot;Placeholder Text&quot; /&gt;

&lt;!-- Disabled Field --&gt;
&lt;label for=&quot;text3&quot; class=&quot;disabled&quot;&gt;Disabled Field&lt;/label&gt;
&lt;input id=&quot;text3&quot; type=&quot;text&quot; disabled=&quot;disabled&quot; /&gt;

&lt;!-- Label with Right Hint --&gt;
&lt;label for=&quot;text4&quot;&gt;Label with Right Hint &lt;span class=&quot;right&quot;&gt;A-Z, 0-9&lt;/span&gt;&lt;/label&gt;
&lt;input id=&quot;text4&quot; type=&quot;text&quot; /&gt;

&lt;!-- Label with Hint --&gt;
&lt;label for=&quot;text5&quot;&gt;Label with Hint &lt;span&gt;A-Z, 0-9&lt;/span&gt;&lt;/label&gt;
&lt;input id=&quot;text5&quot; type=&quot;text&quot; /&gt;

&lt;!-- Text Field Error --&gt;
&lt;label for=&quot;text6&quot; class=&quot;error&quot;&gt;Text Field (Error)&lt;/label&gt;
&lt;input id=&quot;text6&quot; class=&quot;error&quot; type=&quot;text&quot; /&gt;</pre>
    </div>
    
    <div id="form-select" class="tab-content">
<pre>
&lt;!-- Select --&gt;
&lt;label for=&quot;select1&quot;&gt;Select Field&lt;/label&gt;
&lt;select id=&quot;select1&quot;&gt;
&lt;option value=&quot;0&quot;&gt;-- Choose --&lt;/option&gt;
&lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
&lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
&lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
&lt;/select&gt;</pre>
    </div>
    
    <div id="form-checkbox" class="tab-content">
<pre>
&lt;!-- Checkbox --&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;check1&quot; /&gt;
&lt;label for=&quot;check1&quot; class=&quot;inline&quot;&gt;Checkbox Field&lt;/label&gt;</pre>
    </div>
    
    <div id="form-radio" class="tab-content">
<pre>
&lt;!-- Radio --&gt;
&lt;input type=&quot;radio&quot; name=&quot;radio&quot; id=&quot;radio1&quot; /&gt;
&lt;label for=&quot;radio1&quot; class=&quot;inline&quot;&gt;Option1&lt;/label&gt;</pre>
    </div>
    
    <div id="form-fieldset" class="tab-content">
<pre>
&lt;!-- Fieldset --&gt;
&lt;fieldset&gt;
&lt;legend&gt;Checkboxes&lt;/legend&gt;
    &lt;!-- Form Fields Here --&gt;
&lt;/fieldset&gt;</pre>
    </div>
    
    <div id="form-textarea" class="tab-content">
<pre>
&lt;!-- Textarea --&gt;
&lt;textarea id=&quot;textarea1&quot; placeholder=&quot;Placeholder Text&quot;&gt;&lt;/textarea&gt;</pre>
    </div>
    
    <div id="form-notices" class="tab-content">
<pre>
&lt;!-- Error --&gt;
&lt;div class=&quot;notice error&quot;&gt;&lt;i class=&quot;icon-remove-sign icon-large&quot;&gt;&lt;/i&gt; This is an Error Notice 
&lt;a href=&quot;#close&quot; class=&quot;icon-remove&quot;&gt;&lt;/a&gt;&lt;/div&gt;

&lt;!-- Warning --&gt;
&lt;div class=&quot;notice warning&quot;&gt;&lt;i class=&quot;icon-warning-sign icon-large&quot;&gt;&lt;/i&gt; This is a Warning Notice 
&lt;a href=&quot;#close&quot; class=&quot;icon-remove&quot;&gt;&lt;/a&gt;&lt;/div&gt;

&lt;!-- Success --&gt;
&lt;div class=&quot;notice success&quot;&gt;&lt;i class=&quot;icon-ok icon-large&quot;&gt;&lt;/i&gt; This is a Success Notice 
&lt;a href=&quot;#close&quot; class=&quot;icon-remove&quot;&gt;&lt;/a&gt;&lt;/div&gt;</pre>
    </div>
    
<!-- ===================================== 
    Extras/Helpers
===================================== -->
<h3 id="forms">Extras/Helpers</h3>
    <ul class="tabs">
    <li><a href="#extras">Extras</a></li>
    </ul>
    
    <div id="extras" class="tab-content">
    <table><thead><tr>
    <th>Item</th>
    <th>Description</th>
    </tr><tr>
    <td><code>.left</code> <code>.center</code> <code>.right</code></td>
    <td>Align Text</td>
    </tr><tr>
    <td><code>a.lightbox</code></td>
    <td>Open Link in lightbox. Auto Detects, iframe, inline content, etc.</td>
    </tr>
    <tr>
    <td><code>.clear</code></td>
    <td>Add this class to a div or other element to clear floats.</td>
    </tr><tr>
    <td><code>.clearfix</code></td>
    <td>Add this class to containers that have floating children inside to clear inner floats.</td>
    </tr><tr>
    <td><code>li.first</code> <code>li.last</code></td>
    <td>First and Last <code>&lt;li&gt;&lt;/li&gt;</code> items automatically get classes <code>.first</code> and <code>.last</code> respectively.</td>
    </tr><tr>
    <td><code>.column</code></td>
    <td>All columns have the class <code>.column</code> added to them automatically for easy global styling.</td>
    </tr><tr>
    <td><code>.visible</code></td>
    <td>Add this to columns to view during production. Adds light grey background color to columns.</td>
    </tr><tr>
    <td><code>.hide</code> <code>.show</code></td>
    <td><code>.hide</code> to hide content (display:none). <code>.show</code> to show content (display:block).</td>
    </tr><tr>
    <td><code>tr.first</code> <code>tr.last</code></td>
    <td>First and Last <code>&lt;tr&gt;&lt;/tr&gt;</code> items automatically get classes <code>.first</code> and <code>.last</code> respectively.</td>
    </tr><tr>
    <td><code>tr.alt</code></td>
    <td>Every second table row automatically gets class <code>.alt</code>.</td>
    </tr></thead></table>
    </div>


</div><!--END GRID WRAP-->

<div class="callout clearfix">
    <div class="grid">
        <a class="button red large" href="http://www.99lime.com/downloads/"><i class="icon-download-alt"></i> Download (Github)</a> 
        <span style="white-space: nowrap;">
        <a class="button blue large" href="https://twitter.com/htmlkickstart"><i class="icon-twitter"></i></a>
        <a class="button blue large" href="mailto:joshua@99lime.com"><i class="icon-envelope-alt"></i></a></span><br />
        <p>Downloaded over 91036 Times :)</p>
    </div>
</div>

<!-- Begin MailChimp Signup Form -->
<div class="grid center" id="mc_embed_signup">
<form action="http://99lime.us4.list-manage2.com/subscribe/post?u=f4a8f36be8ffba6bf0580ef5f&amp;id=67a4916516" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">

<div class="mc-field-group">
<h4>99Lime Announcements and Releases.</h4>

<input type="email" style="width:40%;" value="" placeholder="name@domain.com" name="EMAIL" class="required email" id="mce-EMAIL">
<button class="button small orange" type="submit" value="Get Notified" name="subscribe" id="mc-embedded-subscribe">Get Notified</button>
</div>
<label for="mce-EMAIL"><span>No spam. We hate spam too.</span></label>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
</form>
</div>

<!--End mc_embed_signup-->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="demo_footer">
    <p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>