<?php require 'header.php';?>
  <title>Zażółć gęślą jaźń</title>
</head>

<body>
  <div class="Title"><h1 id="h11" class="Title">Loren</h1></div>
  
  <div class="Contents">
    <h1 id="h10">Spis treści</h1>
		<ol>
          <li><a href="#h21">&lt;em&gt; i &lt;i&gt;</a></li>
          <li><a href="#h22">&lt;strong&gt; i &lt;b&gt;</a></li>
          <li><a href="#h23">&lt;code&gt; i &lt;samp&gt;</a></li>
          <li><a href="#h24">&lt;p&gt;...&lt;/p&gt;&lt;p&gt;...&lt;/p&gt; i &lt;p&gt;...&lt;br /&gt;&lt;br /&gt;...&lt;/p&gt;</a></li>
          <li><a href="index.php">Ćwiczenie 1</a></li>
          <li><a href="cw3.php">Ćwiczenie 3</a></li>
          <li><a href="cw4.php">Ćwiczenie 4</a></li>
		</ol>
  </div>
  
  <div class="Main">
      <p>Lorem <em>ipsum</em> dolor <i>sit</i> amet, <b>consectetur</b> adipiscing <strong>elit</strong>. <code>Donec eget massa tellus</code>. Suspendisse euismod tincidunt nisi, eget finibus orci mattis&nbsp;id. <samp>Etiam eleifend vitae urna vel tristique</samp>.</p>
      
      <p>A<sub>i</sub> = 2<sup>i</sup> if x &lt; &gt; y</p>
      
      <p>Mauris&nbsp;at&nbsp;libero rutrum, interdum nunc&nbsp;in,&nbsp;scelerisque justo. Nullam neque diam, pellentesque sit amet lacinia sed, tristique pharetra felis. Donec viverra justo sit amet nisl consequat, sit amet mollis neque mattis. <br /> Morbi gravida mauris&nbsp;id&nbsp;sem sagittis,&nbsp;at&nbsp;gravida nisl pellentesque. In non sapien vel lectus dapibus venenatis&nbsp;a&nbsp;nec nulla. Maecenas pretium elit&nbsp;ut&nbsp;pretium venenatis. Curabitur efficitur nisl vel eros pharetra pellentesque.</p>
      
      <pre>
        #include &lt;iostream.h&gt;
        
        int main(int argc,char* argv[])
        {
          printf("Hello world");
        }
      </pre>
      
      <h2 id="h21">Różnica między &lt;em&gt; i &lt;i&gt;</h2>
      <p>&lt;em&gt; ma wartość logiczną i oznacza, że chcemy coś podkreślić, &lt;i&gt; ma tylko wartość wizualną</p>
      
      <h2 id="h22">Różnica między &lt;strong&gt; i &lt;b&gt;</h2>
      <p>&lt;strong&gt; ma wartość logiczną i oznacza, że chcemy coś podkreślić, &lt;b&gt; ma tylko wartość wizualną</p>
      
      <h2 id="h23">Różnica między &lt;code&gt; i &lt;samp&gt;</h2>
      <p>&lt;code&gt; stosuje się do oznaczania kodu programu, &lt;samp&gt; do oznaczania outputu programów</p>
      
      <h2 id="h24">Różnica między fragmentem strone sformatowanej tak: &lt;p&gt;...&lt;/p&gt;&lt;p&gt;...&lt;/p&gt; i &lt;p&gt;...&lt;br /&gt;&lt;br /&gt;...&lt;/p&gt;</h2>
      <p>Wizualnie nie różnią się niczym, jednak w 1 przypadku mamy do czynienia z dwoma paragrafami a w 2 z jednym, podzielonym</p>
    <p>
      <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
      <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Poprawny CSS!" />
      </a>
    </p>
  </div>
  
  <div class="stylesList">
    
  </div>
  
</body>
</html>
