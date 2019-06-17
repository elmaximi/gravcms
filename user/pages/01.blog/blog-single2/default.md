---
title: '• Tarea | Ejercicios Quiz'
---

<html>

<head></head>

<body>
      	<div>
            <div class="col-md-12">
              <div>
                  <h2 class="mb-3 mt-5">CSS Syntax</h2> <!--TEMA CSS-->
                  <p>1.Change the color of all  &lt;p&gt; elements to "red"..</p>
                <pre> <!--class="pre-scrollable"-->
    &lt;head&gt;
      &lt;style&gt;
        p {color: red;}
      &lt;/style&gt;
    &lt;/head&gt;
               </pre> 
              </div>
              <p>2. Change the color of the element with id="para1", to "red".</p>
              <pre> <!--class="pre-scrollable"-->
  &lt;head&gt;
    &lt;style&gt;
    #para1 {color: red;}
    &lt;/style&gt;
  &lt;/head&gt;
             </pre> 
            </div>
                  <h2 class="mb-3 mt-5">CSS How To...</h2> <!--TEMA CSS-->
                  <p>1. Add an external style sheet with the URL: "mystyle.css".</p>
                <pre> <!--class="pre-scrollable"-->
    &lt;head&gt;
      &lt;link rel="stylesheet" href="mystyle.css" 
      type="text/css"&gt;
    &lt;/head&gt;
               </pre> 
              </div>
                <div>
                    <p>2. Set the background color for the page to "linen" and the background color for &lt;h1&gt; to "lightblue".</p>
                  <pre>
    &lt;head&gt;
      &lt;style&gt;
          body{background-color: linen;}
          h1{background-color: lightblue;}
      &lt;/style&gt;
    &lt;/head&gt;
                </pre> 
              </div>
              <div>
                  <h2 class="mb-3 mt-5">CSS Background</h2> <!--TEMA CSS-->
                  <p>1. Set "background-color: linen" for the page, using an internal style sheet.</p>
                <pre>
    &lt;head&gt;
      &lt;style&gt;
          body{background-color: linen;}
      &lt;/style&gt;
    &lt;/head&gt;
              </pre> 
            </div>
            <div>
                <p>2. Set "paper.gif" as the background image of the page.</p>
              <pre>
    &lt;head&gt;
      &lt;style&gt;
            body{background-image: url("paper.gif")}
      &lt;/style&gt;
    &lt;/head&gt;
            </pre> 
          </div>
          <div>
              <h2 class="mb-3 mt-5">CSS Border</h2> <!--TEMA CSS-->
              <p>1. Set a "4px", "dotted" border for &lt;p&gt;. </p>
            <pre>
    &lt;head&gt;
      &lt;style&gt;
          p{border: 4px dotted;}
      &lt;/style&gt;
    &lt;/head&gt;
          </pre>
          <p>2. Set the border color for &lt;p&gt; to "red". </p>
            <pre>
    &lt;head&gt;
      &lt;style&gt;
          p{border: 4px dotted;}
      &lt;/style&gt;
    &lt;/head&gt;
          </pre> 
        </div>
        <div>
            <h2 class="mb-3 mt-5">CSS Margin</h2> <!--TEMA CSS-->
            <p>1. Set the left margin of &lt;h1&gt; to "20px".</p>
          <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            background-color: lightblue;
            margin-left: 20px;
            } 
      &lt;/style&gt;
    &lt;/head&gt;
        </pre>
        <p>2. Set all margins for &lt;h1&gt; to "25px".</p>
          <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {background-color: lightblue;}
      &lt;/style&gt;
    &lt;/head&gt;
        </pre> 
      </div>
      <div>
          <h2 class="mb-3 mt-5">CSS Padding</h2> <!--TEMA CSS-->
          <p>1. Set the top padding of &lt;p&gt; to "30px".</p>
        <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {padding-top: 30px;} 
      &lt;/style&gt;
    &lt;/head&gt;
      </pre>
      <p>2. Set all paddings for &lt;p&gt; to "50px".</p>
        <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {padding: 50px;}
      &lt;/style&gt;
    &lt;/head&gt;
      </pre> 
    </div>
    <div>
        <h2 class="mb-3 mt-5">CSS Height/Width</h2> <!--TEMA CSS-->
        <p>1. Set the height of &lt;h1&gt; to "100px".</p>
      <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {height: 100px;} 
      &lt;/style&gt;
    &lt;/head&gt;
    </pre>
    <p>2. Set the width of &lt;h1&gt; to "50%".</p>
      <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {width: 50%;}
      &lt;/style&gt;
    &lt;/head&gt;
    </pre> 
  </div>
  <div>
      <h2 class="mb-3 mt-5">CSS Box Model</h2> <!--TEMA CSS-->
      <p>1. Set the width of the div to "200px".</p>
    <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {width: 200px;} 
      &lt;/style&gt;
    &lt;/head&gt;
  </pre>
  <p>2. Set the padding of the div to "25px".</p>
    <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {padding: 25px;}
      &lt;/style&gt;
    &lt;/head&gt;
  </pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Outline</h2> <!--TEMA CSS-->
    <p>1. Set a "solid", "5px" outline for &lt;p&gt;.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {
            outline-style: solid;
            outline-width: 5px;
            } 
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Set the outline color for &lt;p&gt; to "green".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {outline-color: green;}
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Text</h2> <!--TEMA CSS-->
    <p>1. Set the text color for the page to "red", and the text color for &lt;h1&gt; to "blue".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          body {
            color: red;
          }
          
          h1 {
            color: blue;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Center align the &lt;h1&gt; element.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            text-align: center;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Font</h2> <!--TEMA CSS-->
    <p>1. Set the font family for the page to "Courier New", and the font family for &lt;h1&gt; to "Verdana".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          body {
            font-family: "Courier New";
          }
          
          h1 {
            font-family: Verdana;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Show &lt;p&gt; elements as "italic" text.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p {
            font-style: italic;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Links</h2> <!--TEMA CSS-->
    <p>1. Set the color for links to "green".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          a {
            color: green;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Set the color for unvisited links to "red", and the color for visited links "blue".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          a:link {
            color: red;
          }
          a:visited {
            color: blue;
          }
          a:hover {
            color: black;
          }
          a:active {
            color: green;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS List</h2> <!--TEMA CSS-->
    <p>1. Set the list style for unordered lists to "square", and the list style for ordered lists to "upper-roman".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          ul {
            list-style-type: square;
          }
          
          ol {
            list-style-type: upper-roman;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Set the image "sqpurple.gif" as the list item marker for the unordered list.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          ul {
            list-style-image: url('sqpurple.gif');
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Tables</h2> <!--TEMA CSS-->
    <p>1. Set the border to "2px solid green" for table, th and td elements.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          table, th, td {
            border: 2px solid green;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Collapse the table borders into a single border.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          table {
            border-collapse: collapse;
          }
          table, td, th {
            border: 1px solid black;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Ddisplay/Visibility</h2> <!--TEMA CSS-->
    <p>1. Hide the &lt;h1&gt; element. It should still take up the same space as before.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            visibility: hidden;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Hide the &lt;h1&gt; element. It should not take up any space.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            display: none;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Display/Visibility</h2> <!--TEMA CSS-->
    <p>1. Position the &lt;h1&gt; element relative to the browser window. 50px from the top, and 50px from the right.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            position: fixed;
            top: 50px;
            right: 50px;
            color: red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Position the &lt;h1&gt; element 20px left, and 30px down, relative to its normal position.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          h1 {
            position: relative;
            top: 30px;
            left: -20px;
            color: red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Overflow</h2> <!--TEMA CSS-->
    <p>1. Add a scrollbar to the  &lt;div&gt; element.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            background-color: #eee;
            width: 200px;
            height: 70px;
            border: 1px dotted black;
            overflow: scroll;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Add a horizontal scrollbar to &lt;div&gt;.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            background-color: #eee;
            width: 150px;
            height: 70px;
            border: 1px dotted black;
            white-space: nowrap;
            overflow-x: scroll;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Align</h2> <!--TEMA CSS-->
    <p>1. Center align the &lt;div&gt; element using margins.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            margin-left: auto;
            margin-right: auto;
            width: 300px;
            background-color: #b0e0e6;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Position the &lt;div&gt; element all the way to the right using absolute positioning.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            position: absolute;
            right: 0px;
            width: 300px;
            background-color: #b0e0e6;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Combinators</h2> <!--TEMA CSS-->
    <p>1. Change the color of all &lt;p&gt; elements, that are descendants of &lt;div&gt; elements, to "red".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div p {
            color: red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Change the color of &lt;p&gt; elements, that are the siblings of a &lt;div&gt; element, to "red".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div ~ p {
            color: red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Pseudo-classes</h2> <!--TEMA CSS-->
    <p>1. Set the background color for visited and unvisited links to "lightblue", and the background color for the hover and active link states to "yellow".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          a:link {
            background-color: lightblue;
          }
          a:visited {
            background-color: lightblue;
          }
          a:hover {
            background-color: yellow;
          }
          a:active {
            background-color: yellow;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Change the background color, when a user hovers over p elements, with the class "highlight", to "lightblue".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p.highlight:hover {
            background-color: lightblue;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Pseudo-elements</h2> <!--TEMA CSS-->
    <p>1. Set text color to red, for the first line of the &lt;p&gt; element.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p::first-line {
            color: red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Set text color to "red", and the text size to "xx-large", for the first letter of the &lt;p&gt; element.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          p::first-letter {
            color: red;
            font-size: xx-large;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Opacity</h2> <!--TEMA CSS-->
    <p>1. Set the transparency/opacity of the &lt;img&gt; element to "0.4".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          img {
            opacity: 0.4;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Remove the transparency/opacity of the &lt;img&gt; element when the user hovers over it with the mouse pointer.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          img {
            opacity: 0.4;
          }
          img:hover {
            opacity: 1.0;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Attribute Selectors</h2> <!--TEMA CSS-->
    <p>1. Set the background-color to "lightblue" for elements with a "target" attribute.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          a[target] {
            background-color: lightblue;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Set a border with the color "red", around elements with a "title" attribute starting with "red".</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          [title^="red"] {
            border: 5px solid red;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Rounded Corners</h2> <!--TEMA CSS-->
    <p>1. Give the &lt;div&gt; element rounded corners (use the shorthand property and the value "25px").</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            border-radius: 25px;
            background: #73AD21;
            padding: 20px; 
            width: 200px;  
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Give the &lt;div&gt; element a rounded corner (25px radius) on the bottom left side.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div {
            border-bottom-left-radius: 25px;
            background: #73AD21;
            padding: 20px; 
            width: 200px;  
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
<div>
    <h2 class="mb-3 mt-5">CSS Border Images</h2> <!--TEMA CSS-->
    <p>1. Give the &lt;div&gt; element an image border using the image "border.png". Slice the image at 30px and repeat it.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div { 
            border: 10px solid transparent;
            border-image: url(border.png) 30 round;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre>
<p>2. Give the &lt;div&gt; element an image border using the image "border.png". Slice the image at 30px and stretch it.</p>
  <pre>
    &lt;head&gt;
      &lt;style&gt;
          div { 
            border: 10px solid transparent;
            border-image: url(border.png) 30 stretch;
          }
      &lt;/style&gt;
    &lt;/head&gt;
</pre> 
</div>
</body>
</html>