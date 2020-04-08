<!DOCTYPE html>
<html lang="en">
<!--HTML Heading tag-->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Title tag-->
  <title>My personal HTML training</title>
</head>

<body>
  <!--Main menu link-->
  <a href="index.php">Main menu</a>

  <!--HTML Headings-->
  <!--Headings are defined with the <h1> to <h6> tags.
      <h1> defines the most important heading. <h6> defines the least important heading.-->
  <div id="h1">
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
  </div>

  <!--HTML Paragraphs-->
  <!--The HTML <p> element defines a paragraph:-->
  <div id="p1">
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>
    <p>
      The number of lines in a paragraph depends on the size of the browser
      window. If you resize the browser window, the number of lines in this
      paragraph will change.
    </p>
    <!--HTML Line Breaks-->
    <!--The HTML <br> element defines a line break.
        Use <br> if you want a line break (a new line) without starting a new paragraph:-->
    <p>This is<br />a paragraph<br />with line breaks.</p>
    <!--The HTML <pre> Element-->
    <!--The HTML <pre> element defines preformatted text.
        The text inside a <pre> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:-->
    <pre>
            My Bonnie lies over the ocean.
            
            My Bonnie lies over the sea.
            
            My Bonnie lies over the ocean.
            
            Oh, bring back my Bonnie to me.
      </pre>
  </div>

  <!--HTML Text Formatting-->
  <!--HTML also defines special elements for defining text with a special meaning.-->
  <div>
    <b>This text is bold</b><br />
    <strong>This text is strong</strong><br />
    <i>This text is italic</i><br />
    <em>This text is emphasized</em><br />
    <h2>HTML <small>Small</small> Formatting</h2>
    <h2>HTML <mark>Marked</mark> Formatting</h2>
    <p>My favorite color is <del>blue</del> red.</p>
    <p>My favorite <ins>color</ins> is red.</p>
    <p>This is <sub>subscripted</sub> text.</p>
    <p>This is <sup>superscripted</sup> text.</p>
  </div>

  <!--HTML Quotation and Citation Elements-->
  <div>
    <!--HTML <q> for Short Quotations-->
    <p>
      WWF's goal is to:
      <q>Build a future where people live in harmony with nature.</q>
    </p>
    <!--HTML <blockquote> for Quotations-->
    <blockquote cite="http://www.worldwildlife.org/who/index.html">
      For 50 years, WWF has been protecting the future of nature. The world's
      leading conservation organization, WWF works in 100 countries and is
      supported by 1.2 million members in the United States and close to 5
      million globally.
    </blockquote>
    <!--HTML <abbr> for Abbreviations-->
    <p>
      The <abbr title="World Health Organization">WHO</abbr> was founded in
      1948.
    </p>
    <!--HTML <address> for Contact Information-->
    <address>
      Written by John Doe.<br />
      Visit us at:<br />
      Example.com<br />
      Box 564, Disneyland<br />
      USA
    </address>
    <!--HTML <cite> for Work Title-->
    <img src="img/img_the_scream.jpg" width="220" height="277" alt="The Scream" />
    <p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
    <!--HTML <bdo> for Bi-Directional Override-->
    <bdo dir="rtl">This text will be written from right to left</bdo>
  </div>

  <!--HTML Links-->
  <div>
    <a href="https://www.w3schools.com/html/html_links.asp" target="_blank">Visit our Links tutorial</a>
    <br>
    <a href="https://www.w3schools.com/html/default.asp" target="_blank">
      <img src="img/smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
    </a>
    <br>
    <a href="#h1">Go to headings</a>
    <br>
    <a href="#p1">Go to paragraphs</a>
  </div>

  <!--HTML Images-->
  <div>
    <img src="img/pic_trulli.jpg" alt="Trulli" width="500" height="333">
    <br>
    <img src="img/programming.gif" alt="Computer man" style="width:48px;height:48px;">
    <br>
    <!--Image Maps-->
    <img src="img/workplace.jpg" alt="Workplace" usemap="#workmap" width="400" height="379">
    <map name="workmap">
      <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.w3schools.com/html/computer.htm" target="_blank">
      <area shape="rect" coords="290,172,333,250" alt="Phone" href="https://www.w3schools.com/html/phone.htm" target="_blank">
      <area shape="circle" coords="337,300,44" alt="Cup of coffee" href="https://www.w3schools.com/html/coffee.htm" target="_blank">
    </map>
    <!--Background image-->
    <div style="background-image: url('img/img_girl.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    You can specify background images<br>
    for any visible HTML element.<br>
    In this example, the background image<br>
    is specified for a div element.<br>
    By default, the background-image<br>
    will repeat itself in the direction(s)<br>
    where it is smaller than the element<br>
    where it is specified. (Try resizing the<br>
    browser window to see how the<br>
    background image behaves.
    </div>
  </div>






</body>

</html>